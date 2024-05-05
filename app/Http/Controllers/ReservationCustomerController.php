<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationCustomerController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('customer.reservation.read', compact('reservations'));
    }

    public function create()
    {
        return view('customer.reservation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'workshop_type' => 'required|string',
            'date' => 'required|string',
        ]);

        Reservation::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'workshop_type' => $request->workshop_type,
            'date' => $request->date,
        ]);


        return redirect()->route('customer.reservation.show')->with('success', 'Reservation created successfully');
    }

    public function delete($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect()->route('costumer.tourist')->with('success', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $reservation  = Reservation::findOrFail($id);
        return view('costumer.reservation.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'workshop_type' => 'required|string',
            'date' => 'required|date',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $reservation = Reservation::findOrFail($id);
        Reservation::create([
            'user_id' => auth()->id(),
            'name' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'workshop_type' => $request->workshop_type,
            'date' => $request->date,
            'status' => $request->status,
        ]);
        return redirect()->route('customer.reservation.show')->with('success', 'Data berhasil diubah');
    }
}
