<?php 
  class Planets {
    private $name;
    private $population;
    private $climate;
    private $gravity;
    private $residents;
    private $films;


    public function __construct($name,$population,$climate,$gravity,$residents,$films){
      $this->name = $name;
      $this->population = $population;
      $this->climate = $climate;
      $this->gravity = $gravity;
      $this->residents = $residents;
      $this->films = $films;
    }

    public function __destruct()
    {
  ?>
      <!-- Content -->
      <div class="container">
        <div class="single_post">
          <ul class="single_post-list">
              <li><i>Name :</i> <span class="response-style"><?=$this->name?></span></li>
              <li><i>Population :</i> <span class="response-style"><?=$this->population?></span></li>
              <li><i>Climate :</i> <span class="response-style"><?=$this->climate?></span></li>
              <li><i>Gravity :</i> <span class="response-style"><?=$this->gravity?></span></li>
              <li><i>Residents :</i>
                <ol>
                    <?php 
                      foreach($this->residents as $key){
                        $residents = getData($key);
                        $target = "people";
                        echo "<li><a class='response-style' href='single_page.php?url=$residents->url&type=$target'>$residents->name</a></li>";
                      }
                    ?>
                </ol>
              </li>
              <li><i>Films :</i> 
                <ol>
                    <?php 
                      foreach($this->films as $key){
                        $movies = getData($key);
                        $target = "films";
                        echo "<li><a class='response-style' href='single_page.php?url=$movies->url&type=$target'>$movies->title</a></li>";
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

  $var_name = $response_data->name;
  $var_population = $response_data->population;
  $var_climate = $response_data->climate;
  $var_gravity = $response_data->gravity;
  $var_residents = $response_data->residents;
  $var_films = $response_data->films;




  $planets = new Planets($var_name,$var_population,$var_climate,$var_gravity,$var_residents,$var_films);

}


?>
