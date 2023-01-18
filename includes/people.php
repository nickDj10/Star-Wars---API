<?php 
  class People {
    private $name;
    private $birth_year;
    private $height;
    private $mass;
    private $homeworld;
    private $films;


    public function __construct($name,$birth_year,$height,$mass,$homeworld,$films){
      $this->name = $name;
      $this->birth_year = $birth_year;
      $this->height = $height;
      $this->mass = $mass;
      $this->homeworld = $homeworld;
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
                <li><i>Birth Year :</i> <span class="response-style"><?=$this->birth_year?></span></li>
                <li><i>Height :</i> <span class="response-style"><?=$this->height?></span></li>
                <li><i>Mass :</i> <span class="response-style"><?=$this->mass?></span></li>
                <li><i>Planet :</i>
                    <?php 
                            $planet = getData($this->homeworld);
                            $target = "planets";
                            echo "<a class='response-style' href='single_page.php?url=$planet->url&type=$target'>$planet->name</a>";
                        ?>
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
  $var_birth_year = $response_data->birth_year;
  $var_height = $response_data->height;
  $var_mass = $response_data->mass;
  $var_homeworld = $response_data->homeworld;
  $var_films = $response_data->films;




  $people = new People($var_name,$var_birth_year,$var_height,$var_mass,$var_homeworld,$var_films);

}


?>
