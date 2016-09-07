@extends('.layout.master')
@section('title')
Dashboard Page
@endsection
@section('pageheader')
  @include('include.pageheader')
@endsection
@section('konten')
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr class="bg-blue">
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
          </tr>
        </thead>
        @foreach($data as $user)
          <tbody>
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->nama }}</td>
              <td>{{ $user->email }}</td>
            </tr>
          </tbody>
        @endforeach
      </table>
    </div>
  </div>
@endsection
