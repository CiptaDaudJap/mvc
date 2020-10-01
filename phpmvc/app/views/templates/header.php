<!-- ini isi hal header dan kita judul nya ambil dari urlnya  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- kalau error pakai ini <title>Halaman <?= $data['judul'] ??'My Page'; ?></title> -->
    <title>Halaman <?= $data['judul']; ?></title>
    
    <!--  arahkan mulai dari awal localhost -->
    
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css"> 

</head>
<body>
<!-- hati hati dlm penulisan css/bootstrap.css nya jangan salah ,copy navbar dari bootstrap documentation
  copy source nya lalu taruh di sini sebagai header -->


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- kita tutup dgn container kecuali nav nya  agar agak center -->
  <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC Cipta</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"   id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
               <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
            </div>
        </div>
  </div>
</nav>