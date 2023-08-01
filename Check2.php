<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correctAnswers = 0;
  $tolerance = 0.01;

  for ($i = 0; $i < 3; $i++) {
    $number1 = floatval($_POST["number1_$i"]);
    $number2 = floatval($_POST["number2_$i"]);
    $operation = $_POST["operation_$i"];
    $userAnswer = floatval($_POST["answer_$i"]);

    $expectedAnswer = $number1 + $number2;

    if (abs($userAnswer - $expectedAnswer) < $tolerance) {
      $correctAnswers++;
    }
  }

  for ($i = 3; $i < 6; $i++) {
    $number1 = floatval($_POST["number1_$i"]);
    $number2 = floatval($_POST["number2_$i"]);
    $operation = $_POST["operation_$i"];
    $userAnswer = floatval($_POST["answer_$i"]);

    $expectedAnswer = $number1 - $number2;

    if (abs($userAnswer - $expectedAnswer) < $tolerance) {
      $correctAnswers++;
    }
  }

  for ($i = 6; $i < 9; $i++) {
    $number1 = floatval($_POST["number1_$i"]);
    $number2 = floatval($_POST["number2_$i"]);
    $operation = $_POST["operation_$i"];
    $userAnswer = floatval($_POST["answer_$i"]);

    $expectedAnswer = $number1 * $number2;

    if (abs($userAnswer - $expectedAnswer) < $tolerance) {
      $correctAnswers++;
    }
  }

  for ($i = 9; $i < 12; $i++) {
    $number1 = floatval($_POST["number1_$i"]);
    $number2 = floatval($_POST["number2_$i"]);
    $operation = $_POST["operation_$i"];
    $userAnswer = floatval($_POST["answer_$i"]);

    if ($number2 != 0) {
      $expectedAnswer = $number1 / $number2;
    } else {
      $expectedAnswer = "Невизначено";
    }

    if (abs($userAnswer - $expectedAnswer) < $tolerance) {
      $correctAnswers++;
    }
  }
} else {
  echo "Невірний метод запиту.";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Результат</title>
</head>
<body>
  <h2>Результат перевірки</h2>
  <p>Кількість правильних відповідей: <?php echo $correctAnswers; ?></p>
</body>
</html>
