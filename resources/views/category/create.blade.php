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

	<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
  <input type="submit" name="btnsubmit" value="Save" class="btn-primary">
</form>
</div>
</body>
</html>

@endsection