
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ONAV</title>
  </head>
  <body>
    <div class="container mt-3" style="color:black ">
        <nav class="navbar navbar-light bg-light mt-3">
            <div class="container" style="background-color:rgb(2, 103, 120); padding: 10px;" >

                <a class="navbar-brand" style="font-size:25px; color:aliceblue"><b>ONAV</b></a>
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="color:aliceblue;"><b>Search</b></button>
                </form>
            </div>
        </nav>
        <h5></h5>
        <h6>FOR CUSTOMMER</h6>
        <form class="container" >
            <div class="mb-3 mt-3">
              <label for="tiket" class="form-label">Kode Tiket</label>
              <input type="text" class="form-control" id="tiket" name="tiket">
            </div>
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3 mt-3">
                <label for="berangkat" class="form-label">Tanggal Keberangkatan</label>
                <input type="date" class="form-control" id="berangkat" name="berangkat">
            </div>
            <div class="mb-3 mt-3">
                <label for="kursi" class="form-label">Nomor Kursi</label>
                <input type="number" class="form-control" id="kursi" name="kursi">
            </div>
            <div class="mb-3 mt-3">
                <label for="tujuan" class="form-label">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan">
            </div>
            <div class="mb-3 mt-3">
                <label for="harga" class="form-label">Harga Tiket (Rp.)</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3 mt-3">
                <button type="button" class="btn btn-info" style="background-color:rgb(2, 103, 120); padding: 7px;">Hitung</button>
            </div>
            <div class="mb-3 mt-3">
                <label for="tHarga" class="form-label">Total</label>
                <input type="number" class="form-control" id="tHarga" name="tHarga">
            </div>
            <div class="mb-3 mt-3">
                <button type="button" class="btn btn-info" style="background-color:rgb(2, 103, 120); padding: 7px;">Pesan</button>
            </div>
             


           
        </form>
        

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>