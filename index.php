<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Woof!</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

  <h1>RNG configuration panel.</h1>

  <form action="#" method="get">
    <input type="radio" name="rng-type" id="rng-single" value="rng-single"><label for="rng-single">Single type dice</label>
    <input type="radio" name="rng-type" id="rng-multiple" value="rng-multiple"><label for="rng-multiple">Multiple type dice</label>

    <div class="input-group" id="rng-single-container">
      <input type="text" name="total-dice" id="total-dice">
      <select name="dice-type" id="dice-type">
        <option value="6">d-6</option>
        <option value="10">d-10</option>
        <option value="20">d-20</option>
      </select>
    </div>

    <div class="input-group" id="rng-multiple-container">

    </div>
    <input type="submit" value="Submit">
  </form>


  <script src="script.js" defer></script>
</body>
</html>