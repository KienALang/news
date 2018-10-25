@extends('admin.layout.master')
@section('title', __('Add new news'))
@section('content')
<section class="content-header">
  <h1>
    Add New News
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route("admin.dashboard")}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route("admin.news.index")}}">News</a></li>
    <li class="active">Add</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add new news</h3>
          </div>
          @include('admin.layout.error')
          <form class="form-horizontal" action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <div class="form-group row">
                <label class="control-label col-md-3">Category</label>
                <div class="col-md-8" >
                  <select name="category" id="multiple_dropdown_select" class="form-control col-md-8" required>
                    @foreach ( $categories as $category )
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Title</label>
                <div class="col-md-8">
                  <input class="form-control col-md-8" name="title" type="text" value="{{ old('title') }}" required>
                </div>
              </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Preview</label>
                    <div class="col-md-8">
                        <input class="form-control col-md-8" name="preview" type="text" value="{{ old('preview') }}" required>
                    </div>
                </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Detail</label>
                <div class="col-md-8">
                  <textarea class="form-control col-md-8 ckeditor" name="detail" type="text" value="{{ old('detail') }}" required>
                  {{ old('detail') }}
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Photo</label>
                <div class="col-md-8">
                  <input class="form-control col-md-8" name="photo" type="file" accept="image/*">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-secondary" href="{{ route('admin.news.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>
              Cancel
              </a>
              <button type="submit" class="btn btn-info pull-right">Add</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
<script src="bower_components/ckeditor/ckeditor.js"></script>
@endsection
