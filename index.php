<?php 
if( isset( $_SESSION["login"])){
	header("Location: login.php");

}else{
  //header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/dashboard.css">
	<script src="asset/js/jquery-3.2.1.slim.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/popper.min.js"></script>

    <title>Halaman Utama</title>

  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Koperasi Pegawai RSUD Tarakan</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dosen.php">
                  <span data-feather="file"></span>
                  customer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mahasiswa.php">
                  <span data-feather="shopping-cart"></span>
                  petugas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="prodi.php">
                  <span data-feather="users"></span>
                  item
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="parameter_ubah.php">
                  <span data-feather="users"></span>
                  transaksi
                </a>
              </li>
             
              
            </ul>

         
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         

          

       
         
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>




