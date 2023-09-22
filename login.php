<?php include "inc/header.php"; ?>
<?php include "inc/nav.php"; ?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto my-5">
        <h2 class="border p-2 my-2 text-center">Login</h2>
        <form method="POST" action="handelers/handelLogin.php" class="border py-3 text-center">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Enter Email" name="email">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
          <div class="form-check">
          </div>
          <input type="submit" value="Register" class="form-control">
        </form>
      </div>
    </div>
  </div>


  <?php include "inc/footer.php"; ?>

</body>

</html>