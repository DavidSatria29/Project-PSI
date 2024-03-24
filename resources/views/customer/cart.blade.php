@extends('layouts.CustomerMaster')
@section('content')

<div class="untree_co-section before-footer-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table" style="background-color: white;">
            <table class="table">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remove</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-thumbnail">
                    <img src="images/card3.png" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <p >Topeng</p>
                  </td>
                  <td class="product-price">Rp.50000</td>
                  <td class="product-quantity">
                    <div class="input-group mb-3 align-items-center" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-black increase" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td class="product-total">Rp.50000</td>
                  <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                </tr>

                <tr>
                  <td class="product-thumbnail">
                    <img src="images/keramik2.png" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <p>Vas</p>
                  </td>
                  <td class="product-price">Rp.100000</td>
                  <td class="product-quantity">
                    <div class="input-group mb-3 align-items-center  quantity-container" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-black increase" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td class="product-total">Rp.100000</td>
                  <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class=" h4 text-uppercase" style="color: #12498C"><b>Cart Totals</b></h3>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="">Subtotal</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="">Rp.150000</strong>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="">Shipping</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="">Rp.0</strong>
                </div>
              </div>
              <hr>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="">Rp.150000</strong>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Function to calculate product total
    function calculateProductTotal() {
        // Get product price
        var productPrice = parseFloat(document.querySelector('.product-price').textContent.replace('Rp.', '').trim());

        // Get product quantity
        var productQuantity = parseInt(document.querySelector('.quantity-amount').value);

        // Calculate product total
        var productTotal = productPrice * productQuantity;

        // Display product total
        document.querySelector('.product-total').textContent = 'Rp.' + productTotal;
    }

    // Event listener for quantity change
    document.querySelector('.quantity-amount').addEventListener('input', calculateProductTotal);

    // Initial calculation on page load
    calculateProductTotal();
</script>
@endsection