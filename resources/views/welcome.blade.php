<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos Laptops</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body{
            background-color: #222831  ;
        }
        .img-custom {
            height: 200px; /* Fixed height for uniformity */
            object-fit: contain; /* Ensures the image fills the space properly */
            border-top-left-radius: 10px; /* Rounded corners for aesthetics */
            border-top-right-radius: 10px;
        }
        .card-style{
            background-color: #222831  ;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/login">Se connecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-4">
        <div class="row">
            @foreach($laptops as $list)
                <div class="col-md-4">
                    <div class="card">
                        <img src={{ asset($list['image']) }} class="card-img-top img-custom" alt="Card Image">
                        <div class="card-body">
                        <h5 class="card-title">{{ $list["title"] }}</h5>
                        <p class="card-text">{{ $list["price"] }}</p>
                        <a href="/Home/{{$list['id']}}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>