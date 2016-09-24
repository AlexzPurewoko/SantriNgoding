@extends('layout.master')
@section('title')
Login Page
@endsection

@section('konten')
<!-- Basic layout-->


  <div class="login-container">
		<form action="{{ route('signin') }}" method="post">
			<div class="panel panel-body login-form">
				<div class="text-center">
					<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
						<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
				</div>

        @if(count($errors) > 0)
          <div class="alert alert-danger">
            <table>
              @foreach($errors->all() as $error)
                <tr>
                  <td>{{ $error }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        @endif
				<div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? 'has-error' : '' }}">
					<input type="text" class="form-control" placeholder="Email" name="email" id="email">
					<div class="form-control-feedback">
						<i class="icon-user text-muted"></i>
					</div>
				</div>

				<div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? 'has-error' : '' }}">
					<input type="password" class="form-control" placeholder="Password" name="password" id="password">
					<div class="form-control-feedback">
						<i class="icon-lock2 text-muted"></i>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          {{ csrf_field() }}
				</div>

				<div class="text-center">
					Need an account? <a href="{{ route('signup') }}">Sign up</a>
				</div>
			</div>
		</form>
  </div>
@endsection
