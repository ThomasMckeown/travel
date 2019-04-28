<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

       
         <link href="slick/slick.css" rel="stylesheet" type="text/css"/>
         <link href="slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
        <script src="slick/slick.min.js" type="text/javascript"></script>

        <script>
        $(document).ready(function(){
  $(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
});

$(document).ready(function(){
  $(".flip2").click(function(){
    $(".panel2").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".flip3").click(function(){
    $(".panel3").slideToggle("slow");     
    });
  });
    </script>
        <body>
            
            
            <div class="box">
            <div class="profile large">
    <div class="cover">
        <img src="images/telephone2.png" alt=""/>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
   
        
      
         <center>
        <div class="flip">v</div>
         
        <div class="panel">number: 12345678901</div>
         </center>
      
       
       
    </div>
            </div>
 
            <div class="box2">
            <div class="profile large">
    <div class="cover">
        <img src="images/email.png" alt=""/>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
   
        
      
         <center>
        <div class="flip2">v</div>
         
        <div class="panel2">Email: trip@mail.com</div>
         </center>
      
       
       
    </div>
            </div>
            
            <div class="box3">
            <div class="profile large">
    <div class="cover">
        <img src="images/location.png" alt=""/>
        
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
   
        
      
         <center>
        <div class="flip3">v</div>
         
        <div class="panel3">location: Dublin Rd</div>
         </center>
      
       
       
    </div>
            </div>
                
            
             <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        </body>