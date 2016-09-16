@extends('layout.master')
@section('title')
  SantriNgoding
@endsection

@section('konten')
  <!-- image main -->
  <div class="section-landing clearfix">
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
  </div>
  <!-- / image main -->

  <div class="page-container">
    <div class="page-content">
      <div class="content-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-lg-7">

              <!-- Traffic sources -->
					    <div class="panel panel-flat">
						    <div class="panel-heading">
									<h2>Membuat CSS</h2>
								</div>

								<div class="container-fluid">
									<div class="row">
                    <div class="col-lg-10">
                      <article>
                        <p>
                          "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </p>
                        <a href="#">Read More &rarr;</a>
                      </article>
                    </div>
									</div>
								</div>
							</div>
							<!-- /traffic sources -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
