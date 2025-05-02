<?php echo "Hello From Atid Khodaei";
      $file = file_get_contents("index.php");
      echo base64_encode($file);
?>