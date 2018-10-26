@extends('admin.layout.master')
@section('title','Edit news')
@section('content')
<section class="content-header">
  <h1>
    Edit news
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route("admin.dashboard")}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route("admin.news.index")}}">News</a></li>
    <li class="active">Edit</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit news</h3>
          </div>
          @include('admin.layout.error')
          @include('admin.layout.message')
          <form class="form-horizontal"  action="{{ route('admin.news.update', $news->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box-body">
              <div class="form-group row">
                <label class="control-label col-md-3">Title</label>
                <div class="col-md-8" >
                  <input class="form-control col-md-8 active" name="title" value="{{ $news->title }}" type="text" value="{{ old('title') }}">
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-3">Category</label>
                <div class="col-md-8" >
                  <select name="category" id="multiple_dropdown_select" class="form-control col-md-8 active">
                  @foreach ( $categories as $category )
                  @php $select = $category->id==$news->category_id ? "selected" : ""; @endphp
                    <option value="{{ $category->id }}" {{ $select }} >{{ $category->name }}</option>   
                  @endforeach
                  </select>
                </div>
                </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Preview</label>
                <div class="col-md-8">
                  <input class="form-control col-md-8 active" name="preview" value="{{ $news->preview }}" type="text" value="{{ old('preview') }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3">Detail</label>
                <div class="col-md-8">
                  <textarea class="form-control col-md-8 ckeditor" name="detail">{{ $news->detail }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 active">Image</label>
                <div class="col-md-8">
                  <img width="100px" style="object-fit: cover;" src="{{ $news->path }}" alt="News Image" class="rounded image_edit">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 active">Edit image</label>
                <div class="col-md-8">
                  <input class="form-control col-md-8 active changeImage" name="photo" type="file" 
                    placeholder="Path of image">
                </div>
              </div>
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-secondary" href="{{ route('admin.news.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>
              Cancel
              </a>
              <button type="submit" class="btn btn-info pull-right">Edit</button>
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
<script src="js/admin/main.js"></script>
<script src="js/admin/edit_film.js"></script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image_edit').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
  $(document).ready(function() {
    $('.changeImage').change(function() {
      readURL(this);
    });
  });
</script>
@endsection
