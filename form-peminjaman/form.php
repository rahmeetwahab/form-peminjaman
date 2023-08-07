<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 mb-4 text-center">FORM PEMINJAMAN TEMPAT DAN BARANG</h2>
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="name" class="form-control" id="nama" aria-describedby="name">
            </div>
            
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="kelas" class="form-control" id="kelas" aria-describedby="kelas">
            </div>
            
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="nis" class="form-control" id="nis" aria-describedby="nis">
            </div>
            
            <div class="dropdown mb-4">
                <p>Peminjaman Ruangan / Barang</p>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="#">Ruangan</a></li>
                    <li><a class="dropdown-item" href="#">Barang</a></li>
                </ul>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>