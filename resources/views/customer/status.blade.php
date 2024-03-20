@extends('layouts.CustomerMaster')
@section('content')

{{-- start status section --}}

<div class="section default_h beta">
  <div class="container">
    <div class="row">
      <h1 class="text-center text-uppercase my-5" style="color: #12498C"><b>your OrderS</b></h1>

      <form class="col-md-12 mb-5" >
        <div class="site-blocks-table" style="background-color: white;">
          <table class="table">
            <thead>
              <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-total">Total</th>
                <th class="product-status">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="product-thumbnail">
                  <img src="images/card3.png" alt="Image" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 ">Topeng</h2>
                </td>
                <td class="product-total">Rp.50000</td>

                <td class="product-status">Sudah Sampai</td>
              </tr>

              <tr>
                <td class="product-thumbnail">
                  <img src="images/keramik2.png" alt="Image" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 ">Vas</h2>
                </td>
                <td class="product-total">Rp.100000</td>

                <td class="product-status">Dalam Perjalanan</td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
      
    </div>
  </div>
</div>

{{-- end status section --}}
@endsection