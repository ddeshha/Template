<?php include "inc/header.php"; ?>
<?php include "inc/nav.php"; ?>

<body>


<div class="container">
    <div class="row">
      <div class="col-8 mx-auto my-5 border ">
        <h2 class=" mx-auto my-5 border bg-success p-4">Your Name is : <?php echo $_SESSION['auth'][0]?></h2>
        <h2 class=" mx-auto my-5 border bg-primary p-4">Your Eamil is : <?php echo $_SESSION['auth'][1]?></h2>
        
      </div>
    </div>
  </div>

  <?php include "inc/footer.php"; ?>

</body>

</html>