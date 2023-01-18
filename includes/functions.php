<?php

  // Convert JSON to string
  function getData($data){
    $json_data = file_get_contents($data);
    $response_data = json_decode($json_data);

    return $response_data;
  }

  // Get Cards With Names on Front Page
  function getCards($data,$target){
  ?>
    <div class="card-list">
      <?php
        if($target != "films"){
          foreach($data->results as $key => $value){
            echo "
              <div class='card'>
                <a class='card-a' href='single_page.php?url=$value->url&type=$target'>$value->name</a>
              </div>";
          }      
        }else {
          foreach($data->results as $key => $value){
            echo "
              <div class='card'>
                <a class='card-a' href='single_page.php?url=$value->url&type=$target'>$value->title</a>
              </div>";
          }  
        }
      ?>
    </div>
    <div class="btn-container">
      <?php

        if($data->previous != null){
          echo("<a href='index.php?link=$data->previous&cat=$target' class='btn'>Previous</a>");
        }        
        if($data->next != null){
          echo("<a href='index.php?link=$data->next&cat=$target' class='btn'>Next</a>");
        }
          
      ?>
    </div>
    <?php
  }
?>