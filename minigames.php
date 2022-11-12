<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="selections">
    <button class="selection" data-selection="rock">✊</button>
    <button class="selection" data-selection="paper">✋</button>
    <button class="selection" data-selection="scissors">✌</button>
  </div>
  <div class="results">
    <div>
      You
      <span class="result-score" data-your-score>0</span>
    </div>
    <div data-final-column>
      Computer
      <span class="result-score" data-computer-score>0</span>
    </div>
    <!-- <div class="result-selection winner">✊</div>
    <div class="result-selection">✌</div> -->
  </div>
  <button onclick="location.href = 'feed.php';" id="myButton">Back to home</button>
</body>
</html>