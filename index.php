<!DOCTYPE html>
<html lang="en">
   <!-- Header -->
   <?php include "includes/header.php"?>
   <body>
         <!-- Navbar -->
         <?php
            include "includes/navbar.php";
         ?>

        <!-- Info Cards - Categories -->
        <div class="container">
              <?php
                if(isset($_GET["cat"]) && isset($_GET['link'])){
                  $cat_name = $_GET["cat"];
                  $data = $_GET['link'];
                  
                  $response_data = getData($data);

                  getCards($response_data,$cat_name);
                }
              ?>
        </div>
  </body>
</html>
