@if(Session::has('success'))
  <div class="alert alert-success" role="alert" style="margin-top: 10px;">
    <strong>Success : </strong> {{ Session::get('success') }}
  </div>
@endif
@if(Session::has('error'))
  <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
    <strong>Error : </strong> {{ Session::get('error') }}
  </div>
@endif
@if(count($errors) > 0)
  <div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
      <ul>
        <li>        {{ $error }}      </li>
      </ul>
    @endforeach
  </div>
@endif
