<!-- Functions -->
<?php include "includes/functions.php";?>
<div>
  <ul class="navbar">
    <?php
      $response_data = getData('https://swapi.dev/api/');

      foreach ($response_data as $data => $data_link) {
    ?>
        <li><a href="index.php?link=<?=$data_link?>&cat=<?=$data?>"><?=$data?></a></li>
    <?php
      }
    ?>
  </ul>
</div>
