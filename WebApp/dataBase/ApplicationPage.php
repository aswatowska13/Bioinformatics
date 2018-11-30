<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">

</head>
<body>
<div class="header">
  <h1><center>BIO DATA</center></h1>

<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Application</a>
</div>
<div class="content">
  <div class="functions">
    <input type="file"
       id="dbfile" name="file"
       accept=".csv">
      <button class="button" type="button" style="vertical-align:middle"><span>Connect</span></button>
  <div class="graphs"><canvas id="myCanvas" width="400" height="300" style="border:1px solid #000000;">
  </canvas></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
