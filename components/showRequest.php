<?php
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
    $checkboxValue = isset($_POST["input_checkbox"]) ? "Available" : "Not Available";

    echo "Title: " . $title . "<br>";
    echo "Image: " . $image . "<br>";
    echo "Availability: " . $checkboxValue . "<br>";
  }
?>