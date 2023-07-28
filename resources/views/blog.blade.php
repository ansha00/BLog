<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
        }

        .container {
            width: 370px;
            margin: auto;
            padding: 16px;
            border: 1px solid;
            border-radius: 5px;
        }

        .card-img-top {
            height: 400px;
            object-fit: cover;
        }
    </style>

    <title>GeekJournal</title>
</head>

<body>
    <h1>Welcome to GeekJournal</h1>
    <div class="container">
        <form action="/save" method="POST" enctype="multipart/form-data">
            @csrf
            Name: <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name">
            Description: <input class="form-control form-control-lg" type="text" name="description" placeholder="...">
            Author: <input class="form-control form-control-lg" type="text" name="author" placeholder="Enter author's name">
            Image: <input class="form-control form-control-lg" type="file" name="image"><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>
    <div class="containers">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset($blog->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->name }}</h5>
                        <u class="card-text" style="font-family:'nunito'">{{ $blog->author }}</u> 
                        <p class="card-text"><small class="text-muted">Created at: {{ $blog->created_at }}</small></p>
                        <p class="card-text">{{ $blog->description }}</p>
                        <a href="/delete/{{$blog->id}}" class="btn btn-primary">Delete</a>
                        <a href="/edit/{{$blog->id}}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
