<?php
  $arrayTitle = ["apple", "banana", "cherry", "date"];
  $subtitle = ['есть', 'нет', 'есть', 'нет', 'есть'];
  $images = array_slice(scandir('../public/image'), 2);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputTitle = $_POST["input_title"];
    $inputSubtitle = $_POST["input_subtitle"];

    $arrayTitle[] = $inputTitle;
    $subtitle[] = $inputSubtitle;

    header("Location: index.php");
    exit();
  }
?>

<div class="container">

  <?php for ($i = 0; $i < count($arrayTitle) ; $i++): ?>

  <div class="card card-modal">
    <div class="card__image">
      <img src="../public/image/<?php echo $images[$i]?>" alt="">
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