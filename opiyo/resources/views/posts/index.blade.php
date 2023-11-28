<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Opiyo's Kitchen</title>
  <link rel="icon" href="https://png.pngtree.com/png-vector/20220527/ourmid/pngtree-food-logo-png-image_4743675.png" type="image/icon type">
<style>
  body{
    background-image: url('https://www.gohomely.com/assets/img/web/new_home_hero_img.png');
    background-repeat: repeat-y;
  margin-left: max(500px, ((40% - 260px) / 2));
  font: 90%/1.4 system-ui;
}

.card {
  position: relative;
  top: 0;
  background: white;
  padding: 1.5rem;
  box-shadow: 0 -0.5rem 1rem rgba(0 0 0 / 0.15);
  border-radius: 40px;
}







  </style>




</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="border-radius: 20px;
  padding: 5px;">
    <div class="container-fluid">
      
      <a class="navbar-brand h1" href="{{ route('posts.index') }}">Opiyo's Kitchen</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href= "{{ route('posts.create') }}">Add personal recipe</a>
        </div>
      </div>
    </div>
  </nav>
  <div>
  
  </div>
  <div class="container mt-5">
    <div class="row">
      @foreach ($posts as $post)
        <div class="col-sm">
          <div class="card">
            <div class="card-header" style="color: #f0a500; border: 30px;">
              <h5 class="card-title">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('posts.edit', $post->id) }}"
            class="btn sm" style= "background-color:#f0a500; color:white;" >Edit</a>
            <br>
            <br>
                </div>
                <div class="col-sm">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete </button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>