@extends('layout.master')

@section('konten')

	  {{-- <div class="section-landing clearfix">
	    <div style="text-align: center;">
	      <div style="margin-top: 10%;">
	        <h1 class="h1_home" style="color: white; font-weight: bold;">SantriNgoding</h1>
	        <h1 style="color: white; opacity: 0.9;">Komunitas pembaca dan penulis dari berbagai sudut pandang yang unik <br> mencangkup ide yang besar maupun kecil</h2>
	        <h3 style="color: white; opacity: 0.7;">Silahkan mendaftar untuk menulis artikel unikmu !</h3>
	          <p>
	            <a class="btn btn-lg btn2" style="color: white;" href="{{ route('signin') }}">Sign In</a>
	            <a class="btn btn-lg btn3" style="color: #fff;" href="{{ route('signup') }}">Sign Up</a>
	          </p>
	      </div>
	    </div>
	  </div> --}}

		<div class="jumbotron" style="text-align:center; position:relative;background-image:url(/assets/images/mainimage.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
			<h1 class="h1_home" style="color: white; font-weight: bold;">SantriNgoding</h1>
			<h2 style="color: white; opacity: 0.9;">Komunitas pembaca dan penulis dari berbagai sudut pandang yang unik <br> mencangkup ide yang besar maupun kecil</h2>
			<h3 style="color: white; opacity: 0.7;">Silahkan mendaftar untuk menulis artikel unikmu !</h3>
				<p>
					<a class="btn btn-lg btn2" style="color: white;" href="{{ route('signin') }}">Sign In</a>
					<a class="btn btn-lg btn3" style="color: #fff;" href="{{ route('signup') }}">Sign Up</a>
				</p>
		</div>

	<div class="row">
		<div class="col-md-8">
			@include('include.article')
		</div>
	</div>

@endsection
