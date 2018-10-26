@extends('admin.layout.master')
@section('title', 'Admin Users')
@section('content')
<section class="content-header">
  <h1>
    Users
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route("admin.dashboard")}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Users</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All users</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      @include('admin.layout.message')
      <table class="table table-hover">
        <tbody>
          <tr>
            <th>Index</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Function</th>
          </tr>
          @foreach ($users as $index =>$user)
          <tr>
            <td>{{ ++$index }}</td>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->role ? "Admin" : "User" }}</td>
            <td class="center" style="display:-webkit-inline-box">
              <form><a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id) }}" title="Show"><i class="fa fa-eye icon-size" ></i></a></form>
              <form class="col-md-4"> <a class="btn btn-infor" href="{{ route('admin.users.edit', $user->id) }}" title="Edit"><i class="fa fa-pencil fa-fw"></i></a></form>
              <form class="col-md-4" method="POST" action="{{ route('admin.users.destroy', ['id' => $user->id]) }}">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa {{ $user->full_name }} không?')" type="submit"><i class="fa fa-trash-o  fa-fw" ></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <div class="col-md-12">{{ $users->links()}}</div>
  <!-- /.box -->
</div>
@endsection
