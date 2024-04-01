@extends('layouts.CustomerMaster')	
@section('contact', 'active')
@section('content')
{{-- Start Kontak Section --}}
<div class="section beta default_h">
	<div class="container">
		<div class="row my-2" style="justify-content: space-between">
			<h1 class="text-center" style="color: #12498C"><b>KONTAK</b></h1>
			
			<div class="col">
				<form class="row g-3 py-3 px-5" method="POST" action="{{ route('customer.storeContact') }}">
					@csrf
					<div class="col-md-4">
					  <label for="inputname" class="form-label"><b>Name</b></label>
					  <input type="text" class="form-control" id="inputname" placeholder="Write your name..." name="name">
					</div>
					<div class="col-md-4">
					  <label for="inputemail" class="form-label"><b>Email</b></label>
					  <input type="text" class="form-control" id="inputemail" placeholder="Write your email..." name="email">
					</div>
					<div class="col-md-4">
						<label for="inputphone" class="form-label"><b>Phone Number</b></label>
						<input type="number" class="form-control" id="inputphone" placeholder="Write your phone number..." name="phone">
					  </div>
					<div class="col-12">
					  <label for="inputMessage" class="form-label"><b>Message</b></label>
					  <textarea id="inputMessage" cols="12" rows="10" placeholder="write your message....." name="message" class="form-control"></textarea>
					</div>
					<div class="col-12 text-center">
					  <button type="submit" class="btn btn-primary">Send</button>
					</div>
				  </form>
			</div>
		</div>
	</div>
</div>

{{-- End Kontak Section --}}
@endsection
