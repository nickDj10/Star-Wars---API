<?php 
  class Movies {
    private $title;
    private $release_date;
    private $producer;
    private $characters;


    public function __construct($title,$release_date,$producer,$characters){
      $this->title = $title;
      $this->release_date = $release_date;
      $this->producer = $producer;
      $this->characters = $characters;
    }

    public function __destruct()
    {
  ?>
      <!-- Content -->
      <div class="container">
        <div class="single_post">
          <ul class="single_post-list">
            <li><i>Title :</i> <span class="response-style"><?=$this->title?></span></li>
            <li><i>Release Date :</i> <span class="response-style"><?=$this->release_date?></span></li>
            <li><i>Producer :</i> <span class="response-style"><?=$this->producer?></span></li>
            <li><i>Characters :</i> 
                  <ol>
                      <?php 
                        foreach($this->characters as $key){
                          $characters = getData($key);
                          $target = "people";
                          echo "<li><a class='response-style' href='single_page.php?url=$characters->url&type=$target'>$characters->name</a></li>";
                        }
                      ?>
                  </ol>
            </li>
          </ul>
        </div>
      </div>
  <?php
    }
  }
?>

<?php


if(isset($_GET['url'])){
  $data = $_GET['url'];
  $response_data = getData($data);

  $var_title = $response_data->title;
  $var_release_date= $response_data->release_date;
  $var_producer = $response_data->producer;
  $var_characters = $response_data->characters;




  $movies = new Movies($var_title,$var_release_date,$var_producer,$var_characters);

}


?>
