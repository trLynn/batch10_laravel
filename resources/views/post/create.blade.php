@extends ('template')
@section ('index')

<!DOCTYPE html>
<html>
<head>
	<title>Show Table</title>
</head>
<body>
	<div class="container justify-content-center">
	<h3 class="text-center">Post Create Form</h3>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

	<form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" name="title">
    <span class="text-danger">{{ $errors->first('title') }}</span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <textarea name="content" class="form-control" placeholder="Enter Text"></textarea>
    <span class="text-danger">{{ $errors->first('content') }}</span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Photo
      <span class="text-danger">[support file types:jpeg,png,jpg]</span>
      <span class="text-danger">{{ $errors->first('photo') }}</span>
    </label>
    <input type="file" name="photo">
  </div>
  <div class="form-group">
    <label>Categories</label>
    <select name="category" class="form-control">
      <option value="">Choose Category</option>
      {-- accept data and loop --}
      @foreach($categories as $row)
      <option value="{{$row->id}}">{{$row->name}}</option>
      @endforeach
    </select>
    <span class="text-danger">{{ $errors->first('category') }}</span>
  </div>
  <input type="submit" name="btnsubmit" value="Save" class="btn-primary">
</form>
</div>
</body>
</html>

@endsection