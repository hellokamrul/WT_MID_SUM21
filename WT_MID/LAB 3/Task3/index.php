<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php
  $length = 8;
  $width = 4;
  if($length==$width)
  {
      echo "The shape is a square";
  }

  else{
  $perimeter = 2*(8+4);
  echo "Perimeter =".$perimeter,"<br>";
  $Area = $length*$width;
  echo "Area = ". $Area;
  }
  
  ?>  


    
</body>
</html>