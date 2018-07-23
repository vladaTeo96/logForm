<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!-- bootstrapp index.php -->
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <title>Index</title>
</head>
<body>
  <div class="container">
    <div class="p-3 mb-2 bg-warning text-dark">
    <div class="row">
      <div id="ss" class="col">
        Welcome to the home page in <img src="123.png" class="img-fluid" alt="Responsive image">
        
      </div>

  </div>
  </div>
   </div>
  <!-- here -->
  <div class="container">
    <div class="p-3 mb-2 bg-dark text-dark">
    <div class="row">
      <div id="ss" class="col">
        <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="p-3 mb-2 bg-success text-white">
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
      </div>

  </div>
  </div>
   </div>
  
  <!-- third -->
  <div class="container">
    <div class="p-3 mb-2 bg-info text-dark">
    <div class="row">
      <div id="ss" class="col">
      <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    <!-- end -->
</div>
  </div>
  </div>
   </div>  
</body>
</html>
<!-- end -->
