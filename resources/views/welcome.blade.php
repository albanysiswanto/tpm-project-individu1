<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobilku Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    {{-- App Bar --}}
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="/">Mobilku</a>
        </div>
      </nav>
    {{-- End App Bar --}}


    {{-- Content --}}
    <div class="container mt-3">
        <h2>List Mobilku Rental</h2>
        <a href="{{ route('create') }}" class="btn btn-primary">Add Car</a>
    </div>
    <div class="container d-flex flex-row justify-content-center gap-5">
    @foreach ($getAll as $m)
            <div class="mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://4.bp.blogspot.com/-rJ4E6yYnJ-I/U9tYyfcPPfI/AAAAAAAAIyU/KiNcHTF3LNY/s1600/Harga+Mobil+Honda+Civic.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $m->name }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Rp.{{$m->price}}</h6>
                      <p class="card-text">{{$m->description}}</p>
                      <a href="#" class="btn btn-primary">Order Car</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    {{-- End Content --}}
</body>
</html>