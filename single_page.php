<!DOCTYPE html>
<html lang="en">
   <!-- Header -->
   <?php include "includes/header.php"?>
   <body>
         <!-- Navbar -->
         <?php
            include "includes/navbar.php";
         ?>

        <!-- Content -->
            <?php
                if(isset($_GET['url']) && isset($_GET['type'])){
                    $url = $_GET['url'];
                    $type = $_GET['type'];
                }

                switch($type){
                  case "people":
                    include "includes/people.php";
                    break;
                  case "films":
                    include "includes/films.php";
                    break;
                  case "planets":
                    include "includes/planets.php";
                    break;
                  case "species":
                    include "includes/species.php";
                    break;
                  case "vehicles":
                    include "includes/vehicles.php";
                    break;
                  case "starships":
                    include "includes/starships.php";
                    break;
                  default :
                    header("Location: index.php");
                }
            ?>

  </body>
</html>
