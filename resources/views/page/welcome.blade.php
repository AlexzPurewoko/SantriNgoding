@extends('layout.master')
@section('title')
	SantriNgoding - Selamat datang di blog kami !
@endsection
@section('konten')

		<div class="jumbotron" style="text-align:center; position:relative;background-image:url(/assets/images/mainimage.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
			<h1 class="h1_home" style="color: white; font-weight: bold;">SantriNgoding</h1>
			<h2 style="color: white; opacity: 0.9;">Komunitas pembaca dan penulis dari berbagai sudut pandang yang unik <br> mencangkup ide yang besar maupun kecil</h2>
			<h3 style="color: white; opacity: 0.7;">Silahkan mendaftar untuk menulis artikel unikmu !</h3>
				<p>
					<a class="btn btn-lg btn2" style="color: white;" href="{{ route('signin') }}">Masuk</a>
					<a class="btn btn-lg btn3" style="color: #fff;" href="{{ route('signup') }}">Daftar</a>
				</p>
		</div>


	<div class="row">
		<div class="col-md-8">
			@include('include.article')
		</div>
		<div class="col-md-4">
			<div class="row">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsantringoding%2F%3Ffref%3Dts&tabs&width=340&height=204&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=333467910005622"
				 style="border:none;overflow:hidden"
				 scrolling="no"
				 frameborder="0"
				 allowTransparency="true"></iframe>
			</div>
			<div class="row" style=" margin: 1px;  padding: 5px;">
				<div class="col-md-9">

				<h3>About</h3>
				<p>
					Web blog buatan orang yang tidak nggenah, mulai tertarik dengan web.
					<li><a href="http://facebook.com/afrijal.dzuhri" class="btn-outline btn-social"></a></li>
				</p>
			</div>
			</div>
		</div>
	</div>

@endsection
