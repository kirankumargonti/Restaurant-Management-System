<?php
  require "header.php";
?>
<main>
  <?php
    if (isset($_SESSION['userId'])) {
      require "logout.php";
    }
    else {
      require "login1.php";
    }
  ?>
</main>
