@extends('admin.layout.master')
@section('title', "Admin News")
@section('content')
<section class="content-header">
  <h1>
    News
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route("admin.dashboard")}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">News</li>
  </ol>
</section>
<section class="content">
  <div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">All News</h3>
      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" title="table_search" class="form-control pull-right" placeholder="Search">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      @include('admin.layout.message')
      <table class="table table-hover">
        <tbody>
          <tr>
            <th>Index</th>
            <th>Title</th>
            <th>Category</th>
            <th>Preview</th>
            <th style="text-align: center;">Image</th>
            <th style="text-align: center;">Function</th>
        </tr>
        @foreach ($allNews as $index => $news)
              <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $news->title }}</td>
                <td>{{ $news->category->name }}</td>
                <td>{{ str_limit($news->preview, 70) }}</td>
                <td><img style="width: 100px; height: auto" src="{{ $news->path }}"></td>
                <td class="center" style="display:-webkit-inline-box"></i>
                  <form><a class="btn btn-primary" href="{{ route('admin.news.show', $news->id) }}"><i class="fa fa-eye icon-size" ></i></a></form>
                  <form class="col-md-4" method="POST" action="{{ route('admin.news.destroy', $news->id) }}">
                      @method('DELETE')
                      {{ csrf_field() }}
                      <button class="btn btn-danger" type="submit" data-confirm="{{ trans('news.admin.message.msg_del') }}"><i class="fa fa-trash-o  fa-fw" ></i></button>
                  </form>
                  <form class="col-md-4">
                    <a class="btn btn-info" href="{{ route('admin.news.edit', $news->id) }}"><i class="fa fa-pencil fa-fw"></i></a>
                  </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="col-md-12">{{ $allNews->links()}}</div>
</div>
</section>
@endsection
@section('script')
  <script src="js/admin/list_news.js"></script>
@endsection
