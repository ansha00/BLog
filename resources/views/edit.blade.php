<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    h1 {
      text-align: center;
    }

    .container {
      width: 850px;
      margin: auto;
      padding: 16px;
      border: 1px solid;
      border-radius: 5px;
    }
  </style>

</head>

<body>
  <h1>Welcome to the edit page</h1>

  <div class="container">
    <form action="/update/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{$blog->name}}">
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control">{{$blog->description}}</textarea>
      </div>
      <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" name="author" class="form-control" value="{{$blog->author}}">
      </div>
      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" class="form-control-file" value="">
      </div>
      <hr>

      <div class="text-center" style="margin-top: 20px;">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
