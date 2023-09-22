<?php include "inc/header.php"; ?>
<?php include "inc/nav.php"; ?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto my-5">
        <?php
        if (isset($_SESSION['errors'])) :
          foreach ($_SESSION["errors"] as $errors) : ?>
            <div class="alert alert-danger text-center">
              <?php echo $errors; ?>
            </div>
        <?php endforeach;
          unset($_SESSION["errors"]);
        endif;
        ?>
        <h2 class="border p-2 my-2 text-center">Register</h2>
        <form method="POST" action="handelers/handelRegister.php" class="border py-3 text-center">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Type Your Name" name="name">
          </div>
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