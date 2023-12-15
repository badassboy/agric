        <link rel="stylesheet" type="text/css" href="css/register.css">
        <?php include("header.php"); ?>

        <div class="container-fluid">

            <form>
                <header>Register Here</header>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Register As</label>
     <select class="form-control" id="exampleFormControlSelect1">
      <option>Select</option>
      <option>Farmer</option>
      <option>buyer</option>
    
    </select>
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Register</button>

   <p>Already registered? <a href="login.php">Login Here</a></p>
</form>


            
        </div>

        <?php include("footer.php"); ?>






         <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>
    </html>