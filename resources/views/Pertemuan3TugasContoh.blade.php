<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas Pemweb - Manual Style</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
  body {
    background-color: #f8f9fa;
    /* Menggunakan rem agar ukuran font mengikuti settingan browser (lebih fleksibel) */
    font-size: 1rem;
  }

  /* Menggunakan % dan rem sebagai ganti pixel */
  .judul-gede {
    font-size: 2.5rem;
    font-weight: bold;
  }

  .box-putih {
    background: #ffffff;
    padding: 2rem;
    border: 1px solid #ccc;
    border-radius: 10px;
  }

  .box-biru {
    background: #007bff;
    color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
  }
</style>

<body>

  <div class="container text-center my-5">
    <div class="judul-gede">Web Informasi Game Dev</div>
    <p>Eksplorasi pembuatan game berbasis browser.</p>
    <br>
    <button type="button" class="btn btn-dark" data-toggle="popover" title="Step 1"
      data-content="Pelajari HTML5 Canvas untuk rendering grafis.">
      Mulai Sekarang
    </button>
  </div>

  <div class="row mx-3">

    <div class="col-md-9 mb-3">
      <div class="box-putih">
        <h2 class="text-primary"><b>Kenapa Memilih Web?</b></h2>
        <p>
          Aksesibilitas adalah kunci. User tidak perlu download file besar, cukup buka URL dan game siap dimainkan kapan saja.
        </p>
        <hr>
        <p>
          Info: <a href="javascript:void(0)" class="text-info" data-toggle="popover" title="Engine"
            data-content="Gunakan Phaser.js atau Three.js.">Lihat Engine</a>
        </p>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="box-biru">
        <h4><b>Sumber Aset</b></h4>
        <p>Dapatkan aset gratis dari komunitas seperti Itch.io untuk prototipe cepat.</p>
      </div>
    </div>

  </div>

  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
  </script>

</body>
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas Pemweb - Manual Style</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
  body {
    background-color: #f8f9fa;
    /* Menggunakan rem agar ukuran font mengikuti settingan browser (lebih fleksibel) */
    font-size: 1rem;
  }

  /* Menggunakan % dan rem sebagai ganti pixel */
  .judul-gede {
    font-size: 2.5rem;
    font-weight: bold;
  }

  .box-putih {
    background: #ffffff;
    padding: 2rem;
    border: 1px solid #ccc;
    border-radius: 10px;
  }

  .box-biru {
    background: #007bff;
    color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
  }
</style>

<body>

  <div class="container text-center my-5">
    <div class="judul-gede">Web Informasi Game Dev</div>
    <p>Eksplorasi pembuatan game berbasis browser.</p>
    <br>
    <button type="button" class="btn btn-dark" data-toggle="popover" title="Step 1"
      data-content="Pelajari HTML5 Canvas untuk rendering grafis.">
      Mulai Sekarang
    </button>
  </div>

  <div class="row mx-3">

    <div class="col-md-9 mb-3">
      <div class="box-putih">
        <h2 class="text-primary"><b>Kenapa Memilih Web?</b></h2>
        <p>
          Aksesibilitas adalah kunci. User tidak perlu download file besar, cukup buka URL dan game siap dimainkan kapan saja.
        </p>
        <hr>
        <p>
          Info: <a href="javascript:void(0)" class="text-info" data-toggle="popover" title="Engine"
            data-content="Gunakan Phaser.js atau Three.js.">Lihat Engine</a>
        </p>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="box-biru">
        <h4><b>Sumber Aset</b></h4>
        <p>Dapatkan aset gratis dari komunitas seperti Itch.io untuk prototipe cepat.</p>
      </div>
    </div>

  </div>

  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
  </script>

</body>
>>>>>>> 395387a0ad15a573c352354a364f2bc1acca28cb
</html>
