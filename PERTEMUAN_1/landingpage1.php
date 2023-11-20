<!DOCTYPE html>
<html lang="en">


<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/768px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" class="img-thumbnail" alt="..." width="20%">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

</head>
  <style>
    .container .card .imgBx {
      width: 30%;
      height: auto;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 1.2);
      margin-bottom: 2%;
    }

    .container .imgBx img {
      width: 100%;
      max-height: 100%;
      border-radius: 10px;
    }

    .container .imgBx:hover img {
      transform: scale(1.1);
    }

    @media screen and (max-width: 100%) {
      .container .card .imgBx {
        width: 100%;
      }
    }

    @media screen and (max-width: 100%) {
      .container .card .imgBx {
        width: 100%;
      }
    }
  </style>


</head>

<body>
<?php
include 'datagrant.php';
include 'navbar.php';
?>
  <section class=" text-dark text-center text-sm-start" id="home">
    <div class="container py-4">
      <div class="d-sm-flex align-items-center justify-content-between py-5">
        <div>
          <h1 class="my-4 text-dark text-center">WELCOME TO CUCUMBER <br>WEBSITE</h1>
          <p class="lead my-4 text-center">Segera bergabung dengan kami dan lakukan registrasi untuk mulai bekerja sama dan melakukan pemesanan persediaan barang yang telah kami siapkan.  </p>
       
          <center>
            <button class="btn btn-lg center-block" style="width: 245px; height: 66px; background: #71A78A;" onclick="redirectToRegisterPage()">Join
              Us</button>
          </center>
        </div>
        <a href="login.html"  style="margin-left: 8%;">
          <img src="images/lainnya/image 1.png" class="img-fluid" width="2800">
  </a>
        </div>
      </div>
    </div>
  </section>


  <section class=" text-dark text-center text-sm-start " id="home">
    <div class="container py-4">
      <div class="d-sm-flex align-items-center justify-content-between py-5">
        <div>
          <a href="#" >
            <img src="images/lainnya/image 6.png" class="img-fluid" width="3000">
          </a>

        </div>
        <div style="margin-left: 5%;">
        <h1 class="my-4 text-dark text-center">ABOUT US</h1>

        <p class="lead my-4 text-center">Kami yang menawarkan hubungan B2B kepada para retail. Distributor menyediakan pasokan product dengan jenis product makanan, minuman, kebutuhan sehari-hari dan frozen food dan
             dapat dipesan oleh retailer yang ingin membuka usaha kedai atau berdagang. Retailer dapat bergabung dengan melakukan registrasi akun, setelah itu retail dapat memesan barang yang telah disediakan oleh distributor. </p>

             <center>
  <button class="btn btn-lg center-block" style="width: 245px; height: 66px; background: #A17CDF;" onclick="openWhatsApp()">Contact Us</button>
</center>
        </div>
      </div>
    </div>
  </section>

  <style>
    .container .card .imgBx {
      width: 30%;
      height: auto;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 1.2);
      margin-bottom: 2%;
    }
  
    .container .imgBx img {
      width: 100%;
      max-height: 100%;
      border-radius: 10px;
    }
  
    .container .imgBx:hover img {
      transform: scale(1.1);
    }
  </style>
  
  
  <div class="container" style="background-color: #CDDFD1; padding: 2%; margin-top: 8%; display: flex; flex-direction: column; align-items: center; max-width: 70%;">
    <h1 class="center-heading" style="margin-bottom: 5%;"><b>What We Provide</b></h1>
  
    <div class="row" style="display: flex; justify-content: center; align-items: center;">
      <div class="imgBx" style="flex: 0 0 40%; max-width: 40%; text-align: center; padding: 1% 1%; margin-right: 1%;  margin-bottom: 15%;" >
        <h2>Makanan</h2>
        <a href="#">
          <img src="./images/makanan/card8.png" alt="Makanan">
        </a>
      </div>
  
      <div class="imgBx" style="flex: 0 0 40%; max-width: 40%; text-align: center; padding: 1% 1%; margin-left: 15%; margin-bottom: 15%;">
        <h2>Minuman</h2>
        <a href="#">
          <img src="./images/minuman/2.png" alt="Minuman">
        </a>
      </div>
    </div>
  
    <div class="row" style="display: flex; justify-content: center; align-items: center;">
      <div class="imgBx" style="flex: 0 0 40%; max-width: 40%; text-align: center; padding: 1% 1%; margin-right: 15%; ">
        <h2>Kebutuhan Sehari</h2>
        <a href="#">
          <img src="./images/minuman/2.png" alt="Kebutuhan Sehari">
        </a>
      </div>
  
      <div class="imgBx" style="flex: 0 0 40%; max-width: 40%; text-align: center; padding: 1% 1%; margin-left: 1%;">
        <h2>Frozen <br>Food</h2>
        <a href="#">
          <img src="./images/minuman/2.png" alt="Frozen">
        </a>
      </div>
    </div>
    <section class=" text-dark text-center text-sm-start" id="home">
    <center>
    <button class="btn btn-lg center-block" style="width: 245px; margin-top: 20%; height: 66px; background: #A17CDF;" onclick="redirectToProductPage()">OUR PRODUCT</button>
  </center>
</section>

<script>

  function redirectToProductPage() {
    window.location.href = 'product.php';
}

  function redirectToRegisterPage() {
    window.location.href = 'register.php';
  }

  function openWhatsApp() {
    // Ganti 'nomor-hp' dengan nomor WhatsApp yang sesuai, termasuk kode negara (tanpa tanda + atau 0 di depan)
    const phoneNumber = '+6285264711447';
    // Ganti 'pesan' dengan pesan default yang ingin Anda kirimkan
    const message = 'Halo, saya ingin memesan produk Anda.';

    // Buat link WhatsApp dengan nomor dan pesan yang ditentukan
    const whatsappLink = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

    // Buka link WhatsApp di tab baru
    window.open(whatsappLink, '_blank');
  }


</script>
    </section>
  </div>
  <?php include 'footerrr.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>