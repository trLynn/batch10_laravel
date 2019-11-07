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

	<form method="post" action="{{route('category.update',$post->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$post->name}}">
    <span class="text-danger">{{ $errors->first('name') }}</span>
  </div>
  <input type="submit" name="btnsubmit" value="Update" class="btn-primary">
</form>
</div>
</body>
</html>

@endsection