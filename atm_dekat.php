<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>SISTEM INFORMASI GEOGRAFIS YOGYAKARTA</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- CSS -->
 <link href="rating/style.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href='rating/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
        
        <!-- Script -->
        <script src="rating/jquery-3.0.0.js" type="text/javascript"></script>
        <script src="rating/dist/jquery.barrating.min.js" type="text/javascript"></script>

<script type="text/javascript">
        $(function() {
            $('.rating').barrating({
                theme: 'fontawesome-stars',
                onSelect: function(value, text, event) {

                    // Get element id by data-id attribute
                    var el = this;
                    var el_id = el.$elem.data('id');

                    // rating was selected by a user
                    if (typeof(event) !== 'undefined') {
                        
                        var split_id = el_id.split("_");

                        var id_atm = split_id[1];  // postid

                        // AJAX Request
                        $.ajax({
                            url: 'rating_atm.php',
                            type: 'post',
                            data: {id_atm:id_atm,rating:value},
                            dataType: 'json',
                            success: function(data){
                                // Update average
                                var average = data['averageRating'];
                                $('#avgrating_'+id_atm).text(average);
                            },error:function(jqXHR, textStatus, errorThrown) {
          //tampilkan kode error
          alert('Error : '+jqXHR.status);
        }
                        });
                    }
                }
            });
        });
      </script>
 <style>
      
      {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}



.badan1
{
  width: 880px;
  margin: 35px auto;
  background-color: white;
  padding: 20px;
  overflow: hidden;
}

.badan1 h2
{
  color: crimson;
  border-bottom: 1px solid gainsboro;
  margin: 5px;
  margin-bottom: 13px;
}

.list-produk
{
  border: 1px solid gainsboro;
  padding: 10px;
  float: left;
  width: 200px;
  margin: 5px;
}

.list-produk:hover
{
  transition-duration: 700ms;
  box-shadow: 5px 5px gainsboro;
}

.list-produk img
{
  width: 100%;
  height: 175px;
  display: block;
  margin-bottom: 5px;
}

.list-produk h4, .list-produk h5
{
  color: crimson;
  text-align: center;
  margin-bottom: 5px;
}

.tombol
{
  text-decoration: none;
  border-radius: 7px;
  padding: 7px;
  display: block;
  float: left;
  width: 45%;
  margin: 4px;
  text-align: center;
  color: white;
}

.tombol:hover
{
  background-color: black;
  transition-duration: 700ms;
}

.tombol-detail
{
  background-color: green;
}

.tombol-beli
{
  background-color: crimson;
}
      </style>
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
                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
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
                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado">

         <div class="container">
           <?php
             include("include/koneksi.php");
             $id_wisata = $_GET['id_wisata'];
             $atm = mysqli_query($koneksi,"SELECT * from atm where id_wisata = '$id_wisata'");
             $atm1 = mysqli_fetch_array($atm);
           ?>
            <ul class="menu_kategori" >
            <li><a href="detailpeta.php?id_wisata=<?php echo $atm1['id_wisata'];?>"><div class="klik_kategori"><h6>KEMBALI</h6></a></li></br>
           
           
              
         
            </ul>
          </div>
            </nav>
            <!-- Button Group -->
            <!-- Social Button -->
        </header>
        <!-- Header Area End -->
        
 <div class="tab-content col-sm-8">
</br>
                                            <!--- test -->
                                            *NB KLIK NAMA ATM
                                            <div class="badan1">
                                                <?php
                                                 $query =mysqli_query($koneksi,"SELECT * from atm inner join wisata on atm.id_wisata=wisata.id_wisata where atm.id_wisata='$id_wisata' ");
                                                 while($array=mysqli_fetch_array($query)){
                                                     $id_atm=$array['id_atm'];
         
                                                     // User rating
                                                         $query2 = "SELECT * FROM atm WHERE id_atm='$id_atm'";
                                                         $userresult = mysqli_query($koneksi,$query2) or die(mysqli_error());
                                                         $fetchRating = mysqli_fetch_array($userresult);
                                                         $rating = $fetchRating['rating'];
         
                                                         // get average
                                                         $query3 = "SELECT ROUND(AVG(rating),1) as averageRating FROM atm WHERE id_atm='$id_atm'";
                                                         $avgresult = mysqli_query($koneksi,$query3) or die(mysqli_error());
                                                         $fetchAverage = mysqli_fetch_array($avgresult);
                                                         $averageRating = $fetchAverage['averageRating'];
         
                                                         if($averageRating <= 0){
                                                             $averageRating = "No rating yet.";
                                                         }
                                                 ?>
                                                <div class="list-produk">
                                                <a href ="detail_atm_dekat.php?id_atm=<?php echo $array['id_atm'] ?>">
                                                    <!--img src="admin/imageatm/<?php echo $array ['gambar_atm']?>" alt="Jaket Parasut"-->
                                         
                                                    <h4><?php echo $array ['nama_atm']?></h4>
                                                </a>    
                                                        <div class="post">
                                                        <center>
                                                          <div class="post-action">
                                                                <!-- Rating -->
                                                                <select class='rating' id='rating_<?php echo $id_atm; ?>' data-id='rating_<?php echo $id_atm; ?>'>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <div style='clear: both;'></div>
                                                               <center> Rating : <span id='avgrating_<?php echo $id_atm; ?>'><?php echo $averageRating; ?></span></center>
                                                                <!-- Set rating -->
                                                                <script type='text/javascript'>
                                                                $(document).ready(function(){
                                                                    $('#rating_<?php echo $id_atm;?>').barrating('set',<?php echo $rating; ?>);
                                                                });
                                                                
                                                                </script>
                                                            </div>
                                                            </center>
                                                        </div> 
                                                        
                                                     </div>
                                                  <?php } ?>
                                             </div>
                                        </div>
                    <!-- end test -->
        
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
   
    
  
</body>

</html>