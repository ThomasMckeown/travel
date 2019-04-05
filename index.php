<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
    
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

        <h1>Hello World</h1>

        <!-- Page Content -->
        <div class="container">

            <!-- Jumbotron Header -->
            <header class="jumbotron my-4">
                <h1 class="display-3">A Warm Welcome!</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
                <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
            </header>

            <!-- Page Features -->
            <div class="row text-center">

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <div class="container2">
  <div class="profile large">
    <div class="cover">
        <img src="images/hotel1jpg.jpg" alt=""/>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
    <div class="user-info">
      <div class="profile-pic">
          <img src="images/profilePicture1.jpg" alt=""/>
        <div class="layer">
          <div class="loader"></div>
        </div><a class="image-wrapper" href="#">
          <form id="profilePictureForm" action="#">
            <input class="hidden-input" id="changePicture" type="file"/>
            <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
          </form></a>
      </div>
      <div class="username">
        <div class="flip">v</div>
        <div class="panel">Wonderful location. Would go again</div>
      </div>
    </div>
  </div>
</div>
        
                <div class="container2">
  <div class="profile2 large">
    <div class="cover">
        <img src="images/hotel1jpg.jpg" alt=""/>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
    <div class="user-info">
      <div class="profile-pic">
          <img src="images/profilePicture1.jpg" alt=""/>
        <div class="layer">
          <div class="loader"></div>
        </div><a class="image-wrapper" href="#">
          <form id="profilePictureForm" action="#">
            <input class="hidden-input" id="changePicture" type="file"/>
            <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
          </form></a>
      </div>
      <div class="username">
        <div class="flip2">v</div>
        <div class="panel2">Wonderful location. Would go again</div>
      </div>
    </div>
  </div>
</div>
        
                <div class="container2">
  <div class="profile3 large">
    <div class="cover">
        <img src="images/hotel1jpg.jpg" alt=""/>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
    <div class="user-info">
      <div class="profile-pic">
          <img src="images/profilePicture1.jpg" alt=""/>
        <div class="layer">
          <div class="loader"></div>
        </div><a class="image-wrapper" href="#">
          <form id="profilePictureForm" action="#">
            <input class="hidden-input" id="changePicture" type="file"/>
            <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
          </form></a>
      </div>
      <div class="username">
          <div class="flip3">v</div>
        <div class="panel3">Wonderful location. Would go again</div>
      </div>
    </div>
  </div>
</div>
        
        <br><br><br><br><br>
        <!-- Footer -->
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

</html>
