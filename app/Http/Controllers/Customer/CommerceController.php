<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustomProduct;
use App\Models\Cart;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\PaymentConfirmation;

class CommerceController extends Controller
{
    public function index()
    {
        return view('customer.commerce');
    }


    public function glass_products()
    {
        $glasses = Product::where('type', 'Gelas')->get();
        return view('customer.product.glass', compact('glasses'));
    }

    public function vase_products()
    {
        $vases = Product::where('type', 'Vas')->get();
        return view('customer.product.vase', compact('vases'));
    }

    public function decoration_products()
    {
        $decorations = Product::where('type', 'Dekorasi')->get();
        return view('customer.product.decoration', compact('decorations'));
    }

    public function utensil_products()
    {
        $utensils = Product::where('type', 'Alat Makan')->get();
        return view('customer.product.utensil', compact('utensils'));
    }

    public function other_products()
    {
        $others = Product::whereNotIn('type', ['Gelas', 'Vas', 'Dekorasi', 'Alat Makan'])->get();
        return view('customer.product.other', compact('others'));
    }

    public function custom_products_create()
    {
        return view('customer.product.custom');
    }

    public function custom_products_store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'size' => 'required|string|max:255',
                'color' => 'required|string|max:255',
                'description' => 'required',
                'amount' => 'required|integer',
                'image' => 'required',
                'image.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'name.required' => 'tidak boleh kosong',
                'type.required' => 'tidak boleh kosong',
                'size.required' => 'tidak boleh kosong',
                'color.required' => 'tidak boleh kosong',
                'description.required' => 'tidak boleh kosong',
                'amount.required' => 'tidak boleh kosong',
                'image.required' => 'tidak boleh kosong',
                'image.*.file' => 'file harus berupa gambar',
                'image.*.mimes' => 'format file harus jpeg, png, jpg, gif, atau svg',
                'image.*.max' => 'ukuran file maksimal 2048 KB',
            ]
        );

        if ($request->has('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getClientOriginalName();
            $file_name = time() . '_' . $image_name;
            $path = 'assets/img/custom_products';
            $image->move($path, $file_name);
        }

        CustomProduct::create([
            'name' => $request->name,
            'type' => $request->type,
            'size' => $request->size,
            'color' => $request->color,
            'description' => $request->description,
            'amount' => $request->amount,
            'image' => $file_name,
            'user_id' => auth()->user()->id,
            'category_id' => 2,
        ]);
        return redirect()->route('customer.commerce')->with('success', 'Produk berhasil dipesan, silahkan cek pada status pesananmu pada halaman profil');
    }

    public function add_to_cart($id)
    {
        $product = Product::findOrFail($id);
        $cart = Cart::where('product_id', $product->id)->where('user_id', auth()->user()->id)->first();
        if ($product->stock == 0) {
            return redirect()->back()->with('toast_error', 'Produk tidak tersedia');
        } elseif ($cart and $cart->status != 'checked_out') {
            $cart->update([
                'amount' => $cart->amount + 1,
                'total' => $cart->total + $product->price,
            ]);
            return redirect()->back()->with('toast_success', 'Produk berhasil ditambahkan dalam keranjang');
        } else {
            Cart::create([
                'product_id' => $product->id,
                'user_id' => auth()->user()->id,
                'product_name' => $product->name,
                'amount' => 1,
                'total' => $product->price,
            ]);
            return redirect()->back()->with('toast_success', 'Produk berhasil ditambahkan dalam keranjang');
        }
    }

    public function show_cart()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
        $productIds = $carts->pluck('product_id')->toArray();
        $products = Product::whereIn('id', $productIds)->get();
        $mergedData = $carts->map(function ($cart) use ($products) {
            $product = $products->where('id', $cart->product_id)->first();
            return [
                'id' => $cart->id,
                'product_id' => $cart->product_id,
                'product_name' => $cart->product_name,
                'amount' => $cart->amount,
                'total' => $cart->total,
                'price' => $product->price,
                'image' => $product->image,
            ];
        });

        return view('customer.cart', compact('mergedData'));
    }

    public function delete_cart($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->back()->with('toast_success', 'Produk berhasil dihapus dari keranjang');
    }

    public function update_cart(Request $request)
    {
        $id = $request->id;
        $cart = Cart::findOrFail($id);
        //update

        if ($request->amount == 0) {
            $cart->delete();
            return redirect()->back()->with('toast_success', 'Produk berhasil dihapus dari keranjang');
        } else {
            $cart->update([
                'amount' => $request->amount,
                'total' => $request->total,
            ]);

            return redirect()->back()->with('toast_success', 'Keranjang berhasil diupdate');
        }
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
        $products = [];
        $amounts = [];
        $totals = [];
        foreach ($carts as $cart) {

            $amounts[] = $cart->amount;
            $products[] = $cart->product_name;
            $totals[] = $cart->total;

            $cart->update([
                'status' => 'checked_out',
            ]);
        }

        //gabungkan array
        $combinedProduct = implode(', ', array_map('strval', $products));
        $combinedAmount = implode(', ', array_map('strval', $amounts));
        $sumTotal = array_sum($totals);

        Order::create([
            'user_id' => auth()->user()->id,
            'category_id' => 1,
            'product_details' => $combinedProduct,
            'amount_details' => $combinedAmount,
            'total' => $sumTotal,
        ]);

        return redirect()->route('customer.commerce')->with('toast_success', 'Pesanan berhasil dibuat, silahkan lihat di profilmu');
    }

    public function status_orders()
    {
        $custom_product = CustomProduct::where('user_id', auth()->user()->id)->where('status', 'approved')->first();
        if ($custom_product) {
            $custom_in_order = Order::where('user_id', auth()->user()->id)
                ->where('category_id', 2)
                ->where('product_details', $custom_product->name)
                ->first();

            if (!$custom_in_order) {
                // Custom product belum ada dalam tabel order, maka buat order baru
                Order::create([
                    'user_id' => auth()->user()->id,
                    'category_id' => 2,
                    'product_details' => $custom_product->name,
                    'amount_details' => $custom_product->amount,
                    'total' => $custom_product->price,
                ]);
            }
        }
        $product_orders = Order::where('user_id', auth()->user()->id)->where('category_id', 1)->whereNot('status', 'Dibatalkan')->get();
        $custom_orders = Order::where('user_id', auth()->user()->id)->where('category_id', 2)->whereNot('status', 'Dibatalkan')->get();
        return view('customer.order.status', compact('product_orders', 'custom_orders'));
    }

    public function payment_orders($id)
    {
        $payment_methods = PaymentMethod::all();
        $order = Order::findOrFail($id);
        $product_details = explode(', ', $order->product_details);
        $amount_details = explode(', ', $order->amount_details);
        return view('customer.order.payment', compact('order', 'product_details', 'amount_details', 'payment_methods'));
    }
    public function payment_update_orders(Request $request, $id)
    {
        $request->validate(
            [
                'address' => 'required|string|max:255',
                'payment_method' => 'required',
            ],
            [
                'address.required' => 'Alamat tidak boleh kosong',
                'payment_method.required' => 'Metode pembayaran tidak boleh kosong',
            ],
        );

        $order = Order::findOrFail($id);
        $order->update([
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'status' => 'Menunggu Konfirmasi Pembayaran',
        ]);

        return redirect()->route('customer.status.orders')->with('toast_success', 'Silahkan konfirmasi pembayaran anda');
    }

    public function payment_confirmation_orders($id)
    {
        $order = Order::findOrFail($id);
        $paymen_method = paymentMethod::where('name', $order->payment_method)->first();
        return view('customer.order.confirmation', compact('order', 'paymen_method'));
    }

    public function payment_confirmation_store_orders(Request $request, $id)
    {
        $request->validate(
            [
                'payment_method' => 'required|string',
                'image' => 'required',
                'image.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'payment_method.required' => 'Metode pembayaran tidak boleh kosong',
                'image.required' => 'Bukti pembayaran tidak boleh kosong',
                'image.*.file' => 'file harus berupa gambar',
                'image.*.mimes' => 'format file harus jpeg, png, jpg, gif, atau svg',
                'image.*.max' => 'ukuran file maksimal 2048 KB',
            ]
        );

        if ($request->has('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getClientOriginalName();
            $file_name = time() . '_' . $image_name;
            $path = 'assets/img/payment_confirmations';
            $image->move($path, $file_name);
        }

        order::findOrFail($id)->update([
            'status' => 'Menunggu Konfirmasi Admin',
        ]);

        PaymentConfirmation::create([
            'user_id' => auth()->user()->id,
            'order_id' => $id,
            'payment_method' => $request->payment_method,
            'image' => $file_name,
            'message' => $request->message,
        ]);

        return redirect()->route('customer.status.orders')->with('toast_success', 'Konfirmasi pembayaran berhasil dikirim');
    }

    public function cancel_orders($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 'Dibatalkan',
        ]);
        return redirect()->route('customer.status.orders')->with('toast_success', 'Pesanan berhasil dibatalkan');
    }

    public function detail_orders($id)
    {
        $order = Order::findOrFail($id);
        $product_details = explode(', ', $order->product_details);
        $amount_details = explode(', ', $order->amount_details);
        return view('customer.order.detail', compact('order', 'product_details', 'amount_details'));
    }
}
