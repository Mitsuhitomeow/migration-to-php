<?php
  $arrayTitle = ["apple", "banana", "cherry", "date"];
  $subtitle = ['есть', 'нет', 'есть', 'нет', 'есть'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["input_title"];
    if ($_FILES["input_image"]["error"] > 0) {
      echo "Ошибка при загрузке файла: " . $_FILES["input_image"]["error"];
    }

    if (isset($_FILES["input_image"]) && $_FILES["input_image"]["error"] == 0) {
        $image = $_FILES["input_image"]["name"];
    } else {
        $image = "No image uploaded";
    }
    $checkboxValue = isset($_POST["input_checkbox"]) ? "ecnm" : "нет";

    echo "Title: " . $title . "<br>";
    echo "Image: " . $image . "<br>";
    echo "Availability: " . $checkboxValue . "<br>";
  }
?>

<div class="container">

  <?php for ($i = 0; $i < count($arrayTitle) ; $i++): ?>

  <div class="card card-modal">
    <div class="card__image">
      <img src="image/<?php echo $images[$i]?>" alt="">
    </div>
    <div class="card-content">
      <h2 class="card__title"><?php echo $arrayTitle[$i]?></h2>
      <p class="card__subtitle"><?php echo $subtitle[$i]?></p>
    </div>
  </div>

  <?php endfor; ?>

  <div class="card trigger">
    <div class="card-content">
      <div class="plus"><p>+</p></div>
    </div>
  </div>

</div>