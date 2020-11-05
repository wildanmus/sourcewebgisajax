$(document).ready(function(){

    $('.klik_kategori').click(function(){
           var menu_kategori = $(this).attr('id');
           if(menu_kategori == "yogyakarta"){
                $('.kategori').load('kategori_jogja.php');	
               
                $('.badan').hide('alamgunungkidul.php');
                $('.badan').hide('alamsleman.php');	
                $('.badan').hide('alambantul.php');	
                $('.badan').hide('alamkulonprogo.php');	
                $('.badan').hide('budayagunungkidul.php');
                $('.badan').hide('budayasleman.php');	
                $('.badan').hide('budayabantul.php');	
                $('.badan').hide('budayakulonprogo.php');
                $('.badan').hide('religigunungkidul.php');
                $('.badan').hide('religisleman.php');	
                $('.badan').hide('religibantul.php');	
                $('.badan').hide('religikulonprogo.php');	
                $('.badan').hide('semuagunungkidul.php');
                $('.badan').hide('semuasleman.php');	
                $('.badan').hide('semuabantul.php');	
                $('.badan').hide('semuakulonprogo.php');				
           } else if(menu_kategori == "gunungkidul"){
               $('.kategori').load('kategori_gk.php');	
               $('.badan').hide('alamyogyakarta.php');
               $('.badan').hide('alamsleman.php');	
               $('.badan').hide('alambantul.php');	
               $('.badan').hide('alamkulonprogo.php');
               $('.badan').hide('budayayogyakarta.php');
               $('.badan').hide('budayasleman.php');	
               $('.badan').hide('budayabantul.php');	
               $('.badan').hide('budayakulonprogo.php');
               $('.badan').hide('religiyogyakarta.php');
               $('.badan').hide('religisleman.php');	
               $('.badan').hide('religibantul.php');	
               $('.badan').hide('religikulonprogo.php');		
               $('.badan').hide('semuayogyakarta.php');
               $('.badan').hide('semuasleman.php');	
               $('.badan').hide('semuabantul.php');	
               $('.badan').hide('semuakulonprogo.php');				
           } else if(menu_kategori == "kulonprogo"){
                $('.kategori').load('kategori_kp.php');	
                $('.badan').hide('alamyogyakarta.php');	
                $('.badan').hide('alamgunungkidul.php');	
                $('.badan').hide('alamsleman.php');	
                $('.badan').hide('alambantul.php');	
                $('.badan').hide('budayayogyakarta.php');	
                $('.badan').hide('budayagunungkidul.php');	
                $('.badan').hide('budayasleman.php');	
                $('.badan').hide('budayabantul.php');
                $('.badan').hide('religiyogyakarta.php');	
                $('.badan').hide('religigunungkidul.php');	
                $('.badan').hide('religisleman.php');	
                $('.badan').hide('religibantul.php');	
                $('.badan').hide('semuayogyakarta.php');	
                $('.badan').hide('semuagunungkidul.php');	
                $('.badan').hide('semuasleman.php');	
                $('.badan').hide('semuabantul.php');		
           }else if(menu_kategori == "sleman"){
                $('.kategori').load('kategori_sleman.php');	
                $('.badan').hide('alamyogyakarta.php');	
                $('.badan').hide('alamgunungkidul.php');	
                $('.badan').hide('alamkulonprogo.php');	
                $('.badan').hide('alambantul.php');	
                $('.badan').hide('budayayogyakarta.php');	
                $('.badan').hide('budayagunungkidul.php');	
                $('.badan').hide('budayakulonprogo.php');	
                $('.badan').hide('budayabantul.php');	
                $('.badan').hide('religiyogyakarta.php');	
                $('.badan').hide('religigunungkidul.php');	
                $('.badan').hide('religikulonprogo.php');	
                $('.badan').hide('religibantul.php');	
                $('.badan').hide('semuayogyakarta.php');	
                $('.badan').hide('semuagunungkidul.php');	
                $('.badan').hide('semuakulonprogo.php');	
                $('.badan').hide('semuabantul.php');	
        } else if(menu_kategori == "bantul"){
                $('.kategori').load('kategori_bantul.php');	
                $('.badan').hide('alamyogyakarta.php');	
                $('.badan').hide('alamgunungkidul.php');	
                $('.badan').hide('alamkulonprogo.php');	
                $('.badan').hide('alamsleman.php');	
                $('.badan').hide('budayayogyakarta.php');	
                $('.badan').hide('budayagunungkidul.php');	
                $('.badan').hide('budayakulonprogo.php');	
                $('.badan').hide('budayasleman.php');
                $('.badan').hide('religiyogyakarta.php');	
                $('.badan').hide('religigunungkidul.php');	
                $('.badan').hide('religikulonprogo.php');	
                $('.badan').hide('religisleman.php');
                $('.badan').hide('semuayogyakarta.php');	
                $('.badan').hide('semuagunungkidul.php');	
                $('.badan').hide('semuakulonprogo.php');	
                $('.badan').hide('semuasleman.php');
        } else if (menu_kategori == "home"){
            $('.kategori').load('home.php');
          
                $('.badan').hide('alamyogyakarta.php');	
                $('.badan').hide('alamgunungkidul.php');	
                $('.badan').hide('alamkulonprogo.php');	
                $('.badan').hide('alamsleman.php');	
                $('.badan').hide('budayayogyakarta.php');	
                $('.badan').hide('budayagunungkidul.php');	
                $('.badan').hide('budayakulonprogo.php');	
                $('.badan').hide('budayasleman.php');
                $('.badan').hide('religiyogyakarta.php');	
                $('.badan').hide('religigunungkidul.php');	
                $('.badan').hide('religikulonprogo.php');	
                $('.badan').hide('religisleman.php');
                $('.badan').hide('semuayogyakarta.php');	
                $('.badan').hide('semuagunungkidul.php');	
                $('.badan').hide('semuakulonprogo.php');	
                $('.badan').hide('semuasleman.php');
                
               
                $('.badan').hide('alamyogyakarta.php');	
                $('.badan').hide('alamgunungkidul.php');	
                $('.badan').hide('alamkulonprogo.php');	
                $('.badan').hide('alambantul.php');	
                $('.badan').hide('budayayogyakarta.php');	
                $('.badan').hide('budayagunungkidul.php');	
                $('.badan').hide('budayakulonprogo.php');	
                $('.badan').hide('budayabantul.php');	
                $('.badan').hide('religiyogyakarta.php');	
                $('.badan').hide('religigunungkidul.php');	
                $('.badan').hide('religikulonprogo.php');	
                $('.badan').hide('religibantul.php');	
                $('.badan').hide('semuayogyakarta.php');	
                $('.badan').hide('semuagunungkidul.php');	
                $('.badan').hide('semuakulonprogo.php');	
                $('.badan').hide('semuabantul.php');

              
                $('.badan').hide('alamyogyakarta.php');	
                $('.badan').hide('alamgunungkidul.php');	
                $('.badan').hide('alamsleman.php');	
                $('.badan').hide('alambantul.php');	
                $('.badan').hide('budayayogyakarta.php');	
                $('.badan').hide('budayagunungkidul.php');	
                $('.badan').hide('budayasleman.php');	
                $('.badan').hide('budayabantul.php');
                $('.badan').hide('religiyogyakarta.php');	
                $('.badan').hide('religigunungkidul.php');	
                $('.badan').hide('religisleman.php');	
                $('.badan').hide('religibantul.php');	
                $('.badan').hide('semuayogyakarta.php');	
                $('.badan').hide('semuagunungkidul.php');	
                $('.badan').hide('semuasleman.php');	
                $('.badan').hide('semuabantul.php');	
            
               
                $('.badan').hide('alamyogyakarta.php');
                $('.badan').hide('alamsleman.php');	
                $('.badan').hide('alambantul.php');	
                $('.badan').hide('alamkulonprogo.php');
                $('.badan').hide('budayayogyakarta.php');
                $('.badan').hide('budayasleman.php');	
                $('.badan').hide('budayabantul.php');	
                $('.badan').hide('budayakulonprogo.php');
                $('.badan').hide('religiyogyakarta.php');
                $('.badan').hide('religisleman.php');	
                $('.badan').hide('religibantul.php');	
                $('.badan').hide('religikulonprogo.php');		
                $('.badan').hide('semuayogyakarta.php');
                $('.badan').hide('semuasleman.php');	
                $('.badan').hide('semuabantul.php');	
                $('.badan').hide('semuakulonprogo.php');
                
                $('.badan').hide('alamgunungkidul.php');
                $('.badan').hide('alamsleman.php');	
                $('.badan').hide('alambantul.php');	
                $('.badan').hide('alamkulonprogo.php');	
                $('.badan').hide('budayagunungkidul.php');
                $('.badan').hide('budayasleman.php');	
                $('.badan').hide('budayabantul.php');	
                $('.badan').hide('budayakulonprogo.php');
                $('.badan').hide('religigunungkidul.php');
                $('.badan').hide('religisleman.php');	
                $('.badan').hide('religibantul.php');	
                $('.badan').hide('religikulonprogo.php');	
                $('.badan').hide('semuagunungkidul.php');
                $('.badan').hide('semuasleman.php');	
                $('.badan').hide('semuabantul.php');	
                $('.badan').hide('semuakulonprogo.php');
        }
       });
       $('.klik_jogja').click(function(){
           var menu_jogja = $(this).attr('id');
           if(menu_jogja == "alamyogyakarta"){
               $('.badan').load('alamyogyakarta.php');		
              $('.badan').show();						
           } else if (menu_jogja == "budayayogyakarta"){
            $('.badan').load('budayayogyakarta.php');		
           $('.badan').show();	
           }else if (menu_jogja == "religiyogyakarta"){
            $('.badan').load('religiyogyakarta.php');		
           $('.badan').show();	
           } else if (menu_jogja == "semuayogyakarta"){
            $('.badan').load('semuayogyakarta.php');		
           $('.badan').show();	
           }
       
       
       });
       $('.klik_gk').click(function(){
           var menu_gk = $(this).attr('id');
           if(menu_gk == "alamgunungkidul"){
               $('.badan').load('alamgunungkidul.php');
               $('.badan').show();
                                     
           } else if(menu_gk == "religigunungkidul"){
            $('.badan').load('religigunungkidul.php');
            $('.badan').show();
                                  
        } else if(menu_gk == "budayagunungkidul"){
            $('.badan').load('budayagunungkidul.php');
            $('.badan').show();
                                  
        }else if(menu_gk == "semuagunungkidul"){
            $('.badan').load('semuagunungkidul.php');
            $('.badan').show();
        }
       
       });
       $('.klik_kp').click(function(){
        var menu_kp = $(this).attr('id');
        if(menu_kp == "alamkulonprogo"){
            $('.badan').load('alamkulonprogo.php');
            $('.badan').show();
                                  
        } else if(menu_kp == "budayakulonprogo"){
            $('.badan').load('budayakulonprogo.php');
            $('.badan').show();
        } else if(menu_kp == "religikulonprogo"){
            $('.badan').load('religikulonprogo.php');
            $('.badan').show();
        }else if(menu_kp == "semuakulonprogo"){
            $('.badan').load('semuakulonprogo.php');
            $('.badan').show();
        }
    
    });
    $('.klik_sleman').click(function(){
        var menu_sleman = $(this).attr('id');
        if(menu_sleman == "alamsleman"){
            $('.badan').load('alamsleman.php');
            $('.badan').show();
                                  
        } else if (menu_sleman == "budayasleman"){
            $('.badan').load('budayasleman.php');
            $('.badan').show();
        } else if (menu_sleman == "religisleman"){
            $('.badan').load('religisleman.php');
            $('.badan').show();
        } else if (menu_sleman == "semuasleman"){
            $('.badan').load('semuasleman.php');
            $('.badan').show();
        } 
         });
        $('.klik_bantul').click(function(){
            var menu_bantul = $(this).attr('id');
            if(menu_bantul == "alambantul"){
                $('.badan').load('alambantul.php');
                $('.badan').show();
                                      
            } else if (menu_bantul == "budayabantul"){
                $('.badan').load('budayabantul.php');
                $('.badan').show();
            } else if (menu_bantul == "religibantul"){
                $('.badan').load('religibantul.php');
                $('.badan').show();
            } else if (menu_bantul == "semuabantul"){
                $('.badan').load('semuabantul.php');
                $('.badan').show();
            }
    
    });
    
    
   });
