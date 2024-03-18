@include('layout.header')		

{{-- Start Kontak Section --}}
<div class="section beta default_h">
	<div class="container">
		<div class="row my-2" style="justify-content: space-between">
			<h1 class="text-center"><b>KONTAK</b></h1>
			
			<div class="col">
				<form class="row g-3 py-3 px-5">
					<div class="col-md-4">
					  <label for="inputname" class="form-label"><b>Name</b></label>
					  <input type="text" class="form-control" id="inputname" placeholder="Write your name...">
					</div>
					<div class="col-md-4">
					  <label for="inputemail" class="form-label"><b>Email</b></label>
					  <input type="text" class="form-control" id="inputemail" placeholder="Write your email...">
					</div>
					<div class="col-md-4">
						<label for="inputphone" class="form-label"><b>Phone Number</b></label>
						<input type="text" class="form-control" id="inputphone" placeholder="Write your phone number...">
					  </div>
					<div class="col-12">
					  <label for="inputAddress" class="form-label"><b>Message</b></label>
					  <input type="text" class="form-control" id="inputAddress" placeholder="Write your message here...">
					</div>
						<div class="col-12">
					  <button type="submit" class="btn btn-primary">Send</button>
					</div>
				  </form>
			</div>
		</div>
	</div>
</div>

{{-- End Kontak Section --}}

@include('layout.footer')
