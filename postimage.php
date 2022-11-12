<?php include_once "header.php"; ?>
<body>
<div class="wrapper, form signup">
      	<header >Post the Image</header>
      	<form action="#" method="POST">
 	<div  class="field input">
    Caption<br><input type="text" name="caption" placeholder="Caption" required><br>
	<span > "Select Image<br><input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
	<div class="field button">
        <input type="submit" name="submit" value="Upload">
        </div> </span>
      </form>
  <script src="javascript/imagepost.js"></script>
  <button onclick="location.href = 'feed.php';" id="myButton">Home</button>
</body>
</html>