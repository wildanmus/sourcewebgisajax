<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Product Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <script src="jquery-1.10.1.min.js"></script>
   
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM6tktwkkp3djr46CzsG4P2zunJsr8gvY">
</script>

<script>    
    var marker;
    function initialize() {  
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database
        <?php
         include("include/koneksi.php");
        $id_wisata=$_GET['id_wisata'];
            $query = mysqli_query($koneksi,"SELECT * FROM wisata where id_wisata='$id_wisata'");
            $data = mysqli_fetch_array($query);
              $id_wisata=$data ['id_wisata'];
                $nama    =$data['nama_wisata'];
                $lat    =$data['latitude'];
                $lon    =$data['longitude'];
                echo ("addMarker($lat, $lon, '$nama');\n");                        
            
        ?> 
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>


</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="nav">
            <div class="container">
           
           <ul>
           <li><a href="index.php"><div class="klik_kategori"><h6>MENU UTAMA</h6></a></li></br>
           <li><a href="penginapan_dekat.php?id_wisata=<?php echo $data['id_wisata'];?>"><div class="klik_kategori" ><h6>PENGINAPAN</h6></a></li></br>
           <li><a href="kesehatan_dekat.php?id_wisata=<?php echo $data['id_wisata'];?>"><div class="klik_kategori"><h6>RUMAH SAKIT</h6></a></li></br>
           <li><a href="atm_dekat.php?id_wisata=<?php echo $data['id_wisata'];?>"><div class="klik_kategori" ><h6>TEMPAT ATM</h6></a></li></br>
           <li><a href="makan_dekat.php?id_wisata=<?php echo $data['id_wisata'];?>"><div class="klik_kategori"><h6>TEMPAT MAKAN</h6></a></li></br>              
            <li><a href="ibadah_dekat.php?id_wisata=<?php echo $data['id_wisata'];?>"><div class="klik_kategori"><h6>TEMPAT IBADAH</h6></a></li></br>
           
          
             
        
           </ul>
           
         </div>
            </nav>
            
           
        </header>
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>NAMA WISATA</h2>
                                coba
                            </div>

                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    
        
    </div>
     <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    </br>
    </br>
    </br>
    
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
               
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                    
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
   <script>
    	$('.tab-menu a').hover(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})

   

    </script>
  <script src="ajax.js"></script>
</body>

</html>