@extends('.layout.master')
@section('title')
  SantriNgoding - Edit Profil
@endsection
@section('konten')
  <div class="content">
  <div class="col-lg-12">
    <form action="{{ route('edit', $data->id) }}" method="post" class="col-lg12">
      <div class="panel panel-body login-form col-tengah-80">
        <div class="row">
          <a href="{{ route('pedit', Auth::user()->id) }}" class="btn btn-info" style="position:absolute; right:0px; top:10px; margin-right:10px;">Change Password</a>
        </div>
        <div class="row">
        <div class="text-center">
          <div class="icon-object border-success text-success"><i class="glyphicon glyphicon-align-justify"></i></div>
          <h5 class="content-group">Perbarui akun profil <small class="display-block">Semua isian dibutuhkan</small></h5>
        </div>
      </div>
        <div class="content-divider text-muted form-group"><span>Identitas</span></div>
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
        <div class="form-group has-feedback has-feedback-left  {{ $errors->has('nama') ? 'has-error' : '' }}">
          <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" id="nama" value="{{ Request::old('nama') }}">
          <div class="form-control-feedback">
            <i class="icon-user-check text-muted"></i>
          </div>
        </div>

        <div class="content-divider text-muted form-group"><span>Privasi</span></div>

        <div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? 'has-error' : '' }}">
          <input type="text" class="form-control" value="{{ $data->email }}" name="email" id="email" value="{{ Request::old('email') }}">
          <div class="form-control-feedback">
            <i class="icon-mention text-muted"></i>
          </div>
        </div>

        <button type="submit" class="btn bg-teal btn-block btn-lg">Perbarui <i class="icon-circle-right2 position-right"></i></button>
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
        {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
