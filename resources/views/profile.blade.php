@include('layout.header')

<div class="section beta default_h">
    <div class="container">
        <div class="row py-5">
            <h1 class="text-center text-uppercase" style="color: #12498C"><b>My Profile</b></h1>
            <h5 class="d-flex justify-content-end my-5" style="color: #12498C"><b>Welcome, Customer</b></h5>
            <div class="col-4">
                <ul class="list group" >
                    <li class="list-group-item" style="color: #12498C"><b>Manage My Account</b></li>
                    <li class="list-group-item" style="color: #12498C">My Profile</li>
                    <li class="list-group-item">Address Book</li>
                    <li class="list-group-item">My Payment Option</li>
                </ul>
                <ul class="list group" >
                    <li class="list-group-item" style="color: #12498C"><b>My Orders</b></li>
                    <li class="list-group-item">My Returns</li>
                    <li class="list-group-item">My Concelation</li>
                    <li class="list-group-item"><a href="{{ url('/status') }}">Status Order</a></li>
                </ul>
            </div>
            <div class="col-8">
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="form6Example1" class="form-control" />
                          <label class="form-label" for="form6Example1">First name</label>
                        </div>
                      </div>
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="form6Example2" class="form-control" />
                          <label class="form-label" for="form6Example2">Last name</label>
                        </div>
                      </div>
                    </div>
                  
                    <!-- Text input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" id="form6Example4" class="form-control" />
                      <label class="form-label" for="form6Example4">Address</label>
                    </div>
                  
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="form6Example5" class="form-control" />
                      <label class="form-label" for="form6Example5">Email</label>
                    </div>
                  
                    <!-- Number input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="number" id="form6Example6" class="form-control" />
                      <label class="form-label" for="form6Example6">Phone</label>
                    </div>
                  
                    <!-- Message input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                      <label class="form-label" for="form6Example7">Additional information</label>
                    </div>
                  
                   
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Edit your profile</button>
                  </form>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')