<!DOCTYPE html>
<html>
<head>
    <title>Post recipe</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Create your own recipe.
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="recipe-title">Recipe name</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Add incredients and their matching quantities.</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        

            <button type="submit" class="btn btn-primary">Submit</button>
     
    </form>
    <div style="padding-top: 20px;">
            <a href="/">
                <button class="btn btn-danger">Home</button>
            </a>
    </div>
    </div>
  </div>
</div>  
</body>
</html>