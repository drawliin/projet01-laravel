<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="/" class="btn btn-secondary mb-3">← Back to Products</a>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <img src={{ asset($laptop['image']) }} class="card-img-top rounded" alt="Product Image">
                    <div class="card-body">
                        <h3 class="card-title text-white">{{ $laptop["title"] }}</h3>
                        <h5 class="text-warning">{{ $laptop["price"] }}</h5>
                        <button class="btn btn-primary mt-3">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
