<?php 
  class Species {
    private $name;
    private $classification;
    private $average_height;
    private $skin_colors;
    private $average_lifespan;
    private $homeworld;
    private $language;
    private $people;
    private $films;


    public function __construct($name,$classification,$average_height,$skin_colors,$average_lifespan,$homeworld,$language,$people,$films){
      $this->name = $name;
      $this->classification = $classification;
      $this->average_height = $average_height;
      $this->skin_colors = $skin_colors;
      $this->average_lifespan = $average_lifespan;
      $this->homeworld = $homeworld;
      $this->language = $language;
      $this->people = $people;
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
                <li><i>Classification :</i> <span class="response-style"><?=$this->classification?></span></li>
                <li><i>Average Height :</i> <span class="response-style"><?=$this->average_height?></span></li>
                <li><i>Skin Colors :</i> <span class="response-style"><?=$this->skin_colors?></span></li>
                <li><i>Average Lifespan :</i> <span class="response-style"><?=$this->average_lifespan?></span></li>

                <?php
                  if($this->homeworld != null){
                ?>
                <li>
                    <ol>
                      <?php 
                            $planet = getData($this->homeworld);
                            $target = "planets";
                            echo "<i>Homeworld</i> : <a class='response-style' href='single_page.php?url=$planet->url&type=$target'>$planet->name</a>";
                        ?>
                    </ol>
                </li>
                <?php
                  }
                ?>

                <li><i>Language :</i> <span class="response-style"><?=$this->language?></span></li>
                <li><i>Characters :</i>
                  <ol>
                      <?php 
                        foreach($this->people as $key){
                          $characters = getData($key);
                          $target = "people";
                          echo "<li><a class='response-style' href='single_page.php?url=$characters->url&type=$target'>$characters->name</a></li>";
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
  $var_classification = $response_data->classification;
  $var_average_height = $response_data->average_height;
  $var_skin_colors = $response_data->skin_colors;
  $var_average_lifespan = $response_data->average_lifespan;
  $var_homeworld = $response_data->homeworld;
  $var_language = $response_data->language;
  $var_people = $response_data->people;
  $var_films= $response_data->films;




  $species = new Species($var_name,$var_classification,$var_average_height,$var_skin_colors,$var_average_lifespan,$var_homeworld,$var_language,$var_people,$var_films);

}


?>
