<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>IMDB</title>
</head>
<body>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/movies">Movies</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/movies/create">Add Movie</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">PHP</a> 
        </li>
      </div>
    </nav> 
    <div class="container">
      <div class="card">
        <div class="card-body">
          @yield('content')
        </div>
      </div>
    </div> 
</body>
</html>
