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

                        var id_wis = split_id[1];  // postid

                        // AJAX Request
                        $.ajax({
                            url: 'rating_ajax.php',
                            type: 'post',
                            data: {id_wis:id_wis,rating:value},
                            dataType: 'json',
                            success: function(data){
                                // Update average
                                var average = data['averageRating'];
                                $('#avgrating_'+id_wis).text(average);
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
                                            <!--- test -->
                                            <div class="badan1">
                                                <?php
                                                 include("include/koneksi.php");
                                                 $query =mysqli_query($koneksi,"SELECT * from wisata where nama_kabupaten='Sleman' and jenis_wisata='wisata alam'");
                                                 while($array=mysqli_fetch_array($query)){
                                                    $id_wis=$array['id_wisata'];
                                                    // User rating
                                                    $uid=1;
                                                  $query2 = "SELECT * FROM post_rating WHERE id_wis='$id_wis' and uid='$uid'";
                                                  $userresult = mysqli_query($koneksi,$query2) or die(mysqli_error());
                                                  $fetchRating = mysqli_fetch_array($userresult);
                                                  $rating = $fetchRating['rating'];
                                                  // get average
                                                  $query3 = "SELECT ROUND(AVG(rating),1) as averageRating FROM post_rating WHERE id_wis='$id_wis'";
                                                  $avgresult = mysqli_query($koneksi,$query3) or die(mysqli_error());
                                                  $fetchAverage = mysqli_fetch_array($avgresult);
                                                  $averageRating = $fetchAverage['averageRating'];                                                
                                                    if($averageRating <= 0){
                                                        $averageRating = "No rating yet.";
                                                    }
                                                 ?>
                                                <div class="list-produk">
                                                <a href ="detailpeta.php?id_wisata=<?php echo $array['id_wisata'] ?>">
                                                    <img src="admin/imagewisata/<?php echo $array ['gambar']?>" alt="Jaket Parasut">
                                         
                                                    <h4><?php echo $array ['nama_wisata']?></h4>
                                                </a>    
                                                        <div class="post">
                                                        <center>
                                                          <div class="post-action">
                                                                <!-- Rating -->
                                                                <select class='rating' id='rating_<?php echo $id_wis; ?>' data-id='rating_<?php echo $id_wis; ?>'>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <div style='clear: both;'></div>
                                                               <center> Rating : <span id='avgrating_<?php echo $id_wis; ?>'><?php echo $averageRating; ?></span></center>
                                                                <!-- Set rating -->
                                                                <script type='text/javascript'>
                                                                $(document).ready(function(){
                                                                    $('#rating_<?php echo $id_wis;?>').barrating('set',<?php echo $rating; ?>);
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
      </div>    
        <!-- End Daftar Peta Yogyakarta -->