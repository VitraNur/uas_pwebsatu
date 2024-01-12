<?php
session_start();
include ('koneksi.php');
if(isset($_POST['nama'])){

    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $item = $_POST['item'];
    $alamat = $_POST['alamat'];


    $query =mysqli_query($conn, "INSERT INTO transaksi (nama,no_hp,item,alamat) values('$nama','$no_hp','$item','$alamat')");
    if($query) {
        echo '<script>alert("Order Berhasil ");
        location.href="index.php"</script>';
    }else {
        echo '<script>alert("Register Gagal")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Transaksi Vit Store!!!</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: greenyellow;
    background: url(image/bgrd.jpeg);
    font-family: "Open Sans", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px 0;
}
.contact-form h1 {
    text-transform: uppercase;
    margin: 0 0 15px;
}
.contact-form .form-control, .contact-form .btn  {
    min-height: 38px;
    border-radius: 2px;
}
.contact-form .btn-primary {
    min-width: 150px;
    background: #299be4;
    border: none;
}
.contact-form .btn-primary:hover {
    background: #1c8cd7; 
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.hint-text {
    font-size: 15px;
    padding-bottom: 15px;
    opacity: 0.8;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
  

<div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Form Pemesanan</h3>
            <form class="mb-5" method="post">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nama </label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nomor HP</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp"  placeholder="Masukan Nomor HP" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="" class="col-form-label">Item</label>
                  <input type="text" class="form-control" name="item" id="item" placeholder="Masukan Item" required>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Alamat</label>
                  <textarea class="form-control" name="alamat" id="message" cols="30" rows="4"  placeholder="Masukan Alamat" required></textarea>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="ORDER NOW" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting" required="nama,no_hp,item,alamat"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Pesananmu Telah Terkirim,Terimakasih!!!
            </div>

          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>

