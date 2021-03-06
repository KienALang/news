@extends('admin.layout.master')
@section('title', 'Edit user')
@section('content')
<section class="content-header">
  <h1>
    Users
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route("admin.dashboard")}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route("admin.users.index")}}">Users</a></li>
    <li class="active">Edit</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Edit User</h3>
    </div>
    @include('admin.layout.error')
    <form class="form-horizontal" action="{{ route('admin.users.update', $user->id) }}"  method="POST">
      @csrf
      @method('PUT')
      <div class="box-body">
        <div class="form-group row">
          <label class="control-label col-md-3">Name</label>
          <div class="col-md-8">
            <input class="form-control col-md-8" name="full_name" type="text" value="{{ old('full_name', $user->full_name) }}" >
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-3">Email</label>
          <div class="col-md-8">
            <input class="form-control col-md-8" name="email" type="email" value="{{ old('email', $user->email) }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-3">Password</label>
          <div class="col-md-8">
            <input class="form-control col-md-8" name="password" type="password" >
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-3">Phone</label>
          <div class="col-md-8">
            <input class="form-control col-md-8" name="phone" type="text" value="{{ old('phone', $user->phone) }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-3">Address</label>
          <div class="col-md-8">
            <input class="form-control col-md-8" name="address" type="text" value="{{ old('address', $user->address) }}">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a class="btn btn-secondary" href="{{ route('admin.users.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>
        Cancel
        </a>
        <button type="submit" class="btn btn-info pull-right">Edit</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>
@endsection
