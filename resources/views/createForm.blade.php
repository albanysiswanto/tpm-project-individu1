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
    <div class="container w-50 mt-3">
        <h2 class="text-center">Add Mobil</h2>
        <form action="{{ route('store') }}" method="POST">
          {{-- @csrf penting agar orang lain tidak bisa mengakses data yang kita input --}}
          @csrf 
          <div class="mb-3">
            <div class="input-group">
              <label class="form-label">Nama Mobil</label>
              <span style="color: red">*</span>
            </div>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <label class="form-label">Description</label>
              <span style="color: red">*</span>
            </div>
            <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <label class="form-label">Price</label>
              <span style="color: red">*</span>
            </div>
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input type="number" name="price" class="form-control" required>
            </div>            
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    {{-- End Content --}}
</body>
</html>