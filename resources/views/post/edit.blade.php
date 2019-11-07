@extends ('template')
@section ('index')

<!DOCTYPE html>
<html>
<head>
	<title>Show Table</title>
</head>
<body>
	<div class="container justify-content-center">
	<h3 class="text-center">Post Edit Form</h3>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

	<form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <textarea name="content" class="form-control">{{$post->body}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Photo
      <span class="text-danger">[support file types:jpeg,png,jpg]</span>
      <input type="file" name="photo">
    </label>
    <img src="{{asset($post->image)}}" class="img-fluid w-25">
    <input type="hidden" name="oldphoto" value="{{$post->image}}">
  </div>
  <div class="form-group">
    <label>Categories</label>
    <select name="category" class="form-control">
      <option value="">Choose Category</option>
      {-- accept data and loop --}
      @foreach($categories as $row)
      <option value="{{$row->id}}"
        @if($row->id==$post->category_id){{'selected'}}
        @endif
        >{{$row->name}}</option>
      @endforeach
    </select>
  </div>
  <input type="submit" name="btnsubmit" value="Update" class="btn-primary">
</form>
</div>
</body>
</html>

@endsection