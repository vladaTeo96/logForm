<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="main.css">
  <title>Register</title>
</head>
<body>
  <div class="container">
  <div class="p-3 mb-2 bg-dark text-white">
    <div class="row">      
      <div class="col">
        <!-- start of form -->
        <form method="post" action="login.php">
  <!-- bootstrap register -->
  <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="username" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username" value="<?php echo $username; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_2">
  </div>
  <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
</form>
 <!-- end of form -->
      </div>
      <div class="col">
        <img src="1.png" class="img-fluid" alt="Responsive image">
      </div>
    </div>
  </div>
  </div>
</body>
</html>