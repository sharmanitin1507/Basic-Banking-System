<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--  Social Buttons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #40E0D0;">   <!--#82E0AA #40E0D0-->
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h2><br><br><br><br><br>Welcome to</h2>
                  <h1>THE SPARKS FOUNDATION BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="bank6.jpg" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Registration</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="transaction1.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="transactionhistory1.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>

      <footer>
    <div>
    
    <section id="gallery" class="container">
  <div class="row">

     <div class="col-sm-3 text-center">
      <img src="online.jpg" class="img-fluid img-responsive" width="100%">
    </div>

    <div class="col-sm-3 text-center">
     <h2 style="font-size: 28px"><b>LINKS</b></h2> 
     <hr style="border: 1px solid #0000FF; width: 90%">
      
        <a href="#" class="footer-link">About Us</a><br>
        <a href="#" class="footer-link"> Privacy Policy </a><br>
        <a href="#" class="footer-link"> Terms and Conditions</a>
    </div>

    <div class="col-sm-3 text-center">
     <h2 style="font-size: 28px"><b>CONTACT US</b></h2> 
     <hr style="border: 1px solid #0000FF; width: 100%">
      
      <p>Mobile: +911234567890<br>
         Email: support@E-banking.com <br>
         Twitter: @E-banking</p>
       </div>

     <div class="col-sm-3 text-center">
      <img src="online5.jpg" class="img-fluid img-responsive" width="100%">
    </div>
  </div>
</section>

   <!-- Call to action -->

  <hr style="border: 1px solid #0000FF; width: 100%">
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Thanks For Trusting Us & Keep Exploring Our Services......</h5>
    </li>
    
  </ul>

  <hr style="border: 1px solid #0000FF; width: 100%">
  <div class="text-center">
  <h5>Follow Us</h5>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>



  <div>
  <p class="text-center">Copyright &copy; E-Banking 2021. All Rights Reserved.</p>
  <p class="text-center">Made with &hearts; in India.</p>
 </div>

 

  

 
 

</footer>

      
     <!-- <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>NITIN SHARMA</b> <br> Nitin Sharma Foundation</p>
      </footer> -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>