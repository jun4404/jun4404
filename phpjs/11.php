<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
  <h1>JavaScript</h1>
  <ul>
  <script>
    list = new Array("김준환", "우정우", "이기백", "박기진","권도영");
    i = 0;
    while(i < list.length){
      document.write("<li>"+list[i]+"</li>");
      i = i + 1;
    }
  </script>
</ul>
  <h1>php</h1>
  <ul>
  <?php
    $list = array("김준환", "우정우", "이기백", "박기진","권도영");
    $i = 0;
    while($i <count($list)){
      echo "<li>".$list[$i]."</li>";
      $i = $i + 1;
    }
   ?>
  </ul>
</body>
</html>
