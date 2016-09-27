@extends('.layout.master')
@section('title')
  SantriNgoding - Edit Profile
@endsection
@section('konten')
  <div class="content">
  <div class="col-lg-12">
    <form action="{{ route('pedit', $data->id) }}" method="post" class="col-lg12">
      <div class="panel panel-body login-form col-tengah-80">
      <div class="row">
        <div class="text-center">
          <div class="icon-object border-success text-success"><i class="glyphicon glyphicon-align-justify"></i></div>
          <h5 class="content-group">Change Password Account <small class="display-block">All fields are required</small></h5>
        </div>
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
        <div class="content-divider text-muted form-group"><span>Your privacy</span></div>

        <div class="form-group has-feedback has-feedback-left  {{ $errors->has('password') ? 'has-error' : '' }}">
          <input type="password" class="form-control" name="password" id="password" placeholder="Current password">
          <div class="form-control-feedback">
            <i class="glyphicon glyphicon-option-horizontal text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? 'has-error' : '' }}">
          <input type="password" class="form-control" name="password" id="password" placeholder="New password">
          <div class="form-control-feedback">
            <i class="glyphicon glyphicon-minus text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? 'has-error' : '' }}">
          <input type="password" class="form-control" name="password" id="password" placeholder="Confirm password">
          <div class="form-control-feedback">
            <i class="glyphicon glyphicon-minus text-muted"></i>
          </div>
        </div>

        <button type="submit" class="btn bg-teal btn-block btn-lg">Update <i class="icon-circle-right2 position-right"></i></button>
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
        {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
