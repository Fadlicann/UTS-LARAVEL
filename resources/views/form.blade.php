<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">UTS Laravel</a>
          <br>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              
            </ul>
          

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu d-blok" style="width: 300px; right:0%; left:auto">
                    <li>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </li>
                    <li><a class="dropdown-item" href="/welcome">Home</a></li>
                    <li><a class="dropdown-item" href="/nama">Produk</a></li>
                  
                     </ul>
              </div>
          </div>
        </div>
      </nav>
      <form class="mx-auto">
        <h1>
            Form Tambah Produk
        </h1>
        <div class="row">
            <div class="col-2">
                <label for="" class="form-label" >Kode Produk</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Input Kode Produk">
            </div>
            <div class="col-2">
                <label for="exampleInputPassword1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input Nama Produk">
            </div>
            <div class="col-2">
                <label for="exampleInputPassword1" class="form-label">Jenis Produk</label>
                <select class="form-select" id="jenisKelamin">
                    <option selected disabled>Pilih Produk</option>
                    <option value="alat">Alat tulis</option>
                    <option value="elektronik">Elektronik</option>
                    <option value="sembako">Sembako</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Input Harga">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    
</body>

</html>