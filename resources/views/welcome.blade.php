@extends("layouts.layout")

@section("title", "Infos Laptops")

@section("style")
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

@endsection

@section('content')
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
@endsection