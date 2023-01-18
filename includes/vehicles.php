<?php 
  class Vehicles {
    private $name;
    private $model;
    private $manufacturer;
    private $length;
    private $max_speed;
    private $crew;
    private $passengers;
    private $capacity;
    private $vehicle_class;
    private $movies;

    public function __construct($name,$model,$manufacturer,$length,$max_speed,$crew,$passengers,$capacity,$vehicle_class,$movies){
      $this->name = $name;
      $this->model = $model;
      $this->manufacturer = $manufacturer;
      $this->length = $length;
      $this->max_speed = $max_speed;
      $this->crew = $crew;
      $this->passengers = $passengers;
      $this->capacity = $capacity;
      $this->vehicle_class = $vehicle_class;
      $this->movies = $movies;

    }

    public function __destruct()
    {
  ?>
      <!-- Content -->
      <div class="container">
        <div class="single_post">
          <ul class="single_post-list">
              <li><i>Name :</i> <span class="response-style"><?=$this->name?></span></li>
              <li><i>Model :</i> <span class="response-style"><?=$this->model?></span></li>
              <li><i>Manufacturer :</i> <span class="response-style"><?=$this->manufacturer?></span></li>
              <li><i>Length :</i> <span class="response-style"><?=$this->length?></span></li>
              <li><i>Max Atmosphering Speed :</i> <span class="response-style"><?=$this->max_speed?></span></li>
              <li><i>Crew :</i> <span class="response-style"><?=$this->crew?></span></li>
              <li><i>Passengers :</i> <span class="response-style"><?=$this->passengers?></span></li>
              <li><i>Cargo capacity :</i> <span class="response-style"><?=$this->capacity?></span></li>
              <li><i>Vehicle Class :</i> <span class="response-style"><?=$this->vehicle_class?></span></li>
              <li><i>Films :</i> 
              <ol>
                  <?php 
                    foreach($this->movies as $key){
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
  $var_model = $response_data->model;
  $var_manufacturer = $response_data->manufacturer;
  $var_length = $response_data->length;
  $var_max_atmosphering_speed = $response_data->max_atmosphering_speed;
  $var_crew = $response_data->crew;
  $var_passengers = $response_data->passengers;
  $var_capacity = $response_data->cargo_capacity;
  $var_vehicle_class = $response_data->vehicle_class;
  $var_movies = $response_data->films;



  $vehicle = new Vehicles($var_name,$var_model,$var_manufacturer,$var_length,$var_max_atmosphering_speed,$var_crew,$var_passengers,$var_capacity,$var_vehicle_class,$var_movies);

}


?>