@extends('admin.layout.master')
@section('title', 'List categories')
@section('content')
<section class="content-header">
  <h1>
    Categories
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route("admin.dashboard")}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Categories</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List categories</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      @include('admin.layout.message')
      <table class="table table-hover">
        <tbody>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach ($categories as $index => $item)
          <tr>
            <td>{{ ++$index }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td class="center">
              <a href="{{ route('admin.categories.edit', $item->id) }}"><i class="fa fa-pencil fa-fw"></i></a>
            </td>
            <td class="center">
              <form class="col-md-4" method="POST" action="{{ route('admin.categories.destroy', $item->id) }}">
                @method('DELETE')
                {{ csrf_field() }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa {{ $item->name }} không?')"><i class="fa fa-trash-o  fa-fw" ></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <div class="col-md-12">{{ $categories->links()}}</div>
  <!-- /.box -->
</div>
@endsection
