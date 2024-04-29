<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Index</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">UTS Laravel</a>
          <br><br><br>
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
                    <li><a class="dropdown-item" href="/welcome">Home</a></li>
                    <li><a class="dropdown-item" href="/nama">Produk</a></li>
                    <li>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </li>
                     </ul>
              </div>
          </div>
        </div>
      </nav>
    <div>
        <div class="container py-2" style="display: flex; justify-content: space-between; align-items: center;">
            <h1 style="margin: 50; padding-left:1%">Halaman Produk</h1>
            <a href="/form" class="btn btn-primary">Tambah Produk</a>
        </div>
        
</div>
<div class="">
    <div class="body" style="width: 85%; margin:0 auto;">
        <table class="table table-info">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angka</th>
                    <th scope="col">Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $arr = [
                    ['nama' => 'mark', 'angka' => '1', 'umur' => '12'],
                    ['nama' => 'zuck', 'angka' => '2', 'umur' => '13'],
                    ['nama' => 'berg', 'angka' => '3', 'umur' => '14'],
                ];
                $no = 1;
                foreach ($arr as $item) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['angka']; ?></td>
                        <td><?php echo $item['umur']; ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


</body>