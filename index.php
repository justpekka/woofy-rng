<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Woof!</title>
</head>
<body>

  <h1>RNG configuration panel.</h1>

  <form action="/result.php" method="get">
    <input type="radio" name="rng-type" id="rng-single"><label for="rng-single">Single type dice</label>
    <input type="radio" name="rng-type" id="rng-multiple"><label for="rng-multiple">Multiple type dice</label>

    <div class="input-group" id="rng-single-container">
      <input type="text" name="purpose" id="purpose">
      <input type="text" name="total-dice" id="total-dice">
      <select name="dice-type" id="dice-type">
        <option value="d-6">d-6</option>
        <option value="d-10">d-10</option>
        <option value="d-20">d-20</option>
      </select>
    </div>

    <div class="input-group" id="rng-multiple-container">

    </div>
  </form>


</body>
</html>