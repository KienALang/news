@if (count($errors))
  <div class="form-group">
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif
@if (session('alert'))
    <div class="alert alert-danger">
        <strong>{{ session('alert') }}</strong>
    </div>
@endif