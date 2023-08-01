<!DOCTYPE html>
<html>
<head>
  <title>Генератор прикладів</title>
</head>
<body>
  <h2>Генератор прикладів</h2>

  <?php
  for ($i = 0; $i < 3; $i++) {
    $number1 = random_int(-100, 100);
    $number2 = random_int(-100, 100);
    $operation = '+';
  ?>

    <h3>Приклад <?php echo $i + 1; ?>:</h3>
    <p><?php echo $number1; ?> <?php echo $operation; ?> <?php echo $number2; ?></p>
    <form action="Check2.php" method="POST">
      <input type="hidden" name="number1_<?php echo $i; ?>" value="<?php echo $number1; ?>">
      <input type="hidden" name="number2_<?php echo $i; ?>" value="<?php echo $number2; ?>">
      <input type="hidden" name="operation_<?php echo $i; ?>" value="<?php echo $operation; ?>">
      <label for="answer_<?php echo $i; ?>">Введіть відповідь:</label>
      <input type="number" id="answer_<?php echo $i; ?>" name="answer_<?php echo $i; ?>" required>
      <br>
      <br>
      <?php
  }
  ?>

<?php
  for ($i = 3; $i < 6; $i++) {
    $number1 = random_int(-100, 100);
    $number2 = random_int(-100, 100);
    $operation = '-';
  ?>

    <h3>Приклад <?php echo $i + 1; ?>:</h3>
    <p><?php echo $number1; ?> <?php echo $operation; ?> <?php echo $number2; ?></p>
    <form action="Check2.php" method="POST">
      <input type="hidden" name="number1_<?php echo $i; ?>" value="<?php echo $number1; ?>">
      <input type="hidden" name="number2_<?php echo $i; ?>" value="<?php echo $number2; ?>">
      <input type="hidden" name="operation_<?php echo $i; ?>" value="<?php echo $operation; ?>">
      <label for="answer_<?php echo $i; ?>">Введіть відповідь:</label>
      <input type="number" id="answer_<?php echo $i; ?>" name="answer_<?php echo $i; ?>" required>
      <br>
      <br>
      <?php
  }
  ?>
  <?php
  for ($i = 6; $i < 9; $i++) {
    $number1 = random_int(-100, 100);
    $number2 = random_int(-100, 100);
    $operation = '*';
  ?>

    <h3>Приклад <?php echo $i + 1; ?>:</h3>
    <p><?php echo $number1; ?> <?php echo $operation; ?> <?php echo $number2; ?></p>
    <form action="Check2.php" method="POST">
      <input type="hidden" name="number1_<?php echo $i; ?>" value="<?php echo $number1; ?>">
      <input type="hidden" name="number2_<?php echo $i; ?>" value="<?php echo $number2; ?>">
      <input type="hidden" name="operation_<?php echo $i; ?>" value="<?php echo $operation; ?>">
      <label for="answer_<?php echo $i; ?>">Введіть відповідь:</label>
      <input type="number" id="answer_<?php echo $i; ?>" name="answer_<?php echo $i; ?>" required>
      <br>
      <br>
      <?php
  }
  ?>
  <?php
  for ($i = 9; $i < 12; $i++) {
    $number1 = random_int(-100, 100);
    $number2 = random_int(-100, 100);
    $operation = '/';
  ?>

    <h3>Приклад <?php echo $i + 1; ?>:</h3>
    <p><?php echo $number1; ?> <?php echo $operation; ?> <?php echo $number2; ?></p>
    <form action="Check2.php" method="POST">
      <input type="hidden" name="number1_<?php echo $i; ?>" value="<?php echo $number1; ?>">
      <input type="hidden" name="number2_<?php echo $i; ?>" value="<?php echo $number2; ?>">
      <input type="hidden" name="operation_<?php echo $i; ?>" value="<?php echo $operation; ?>">
      <label for="answer_<?php echo $i; ?>">Введіть відповідь:</label>
      <input type="number" id="answer_<?php echo $i; ?>" name="answer_<?php echo $i; ?>" step="0.01" required>
      <br>
      <br>
      <?php
  }
  ?>
      <input type="submit" value="Перевірити">
    </form>

</body>
</html>
