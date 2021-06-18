<?php
// $str = "Hello world. It's a beautiful day.";
// $split = str_split($str,1);
//$array = array($split);

// for ($i = 0; $i <count($split);$i++)
// {
//         if( "+" == $split[$i] || "5"==$split[$i])
//         {
//         //echo $split[$i]."<br>";
//         break;
//         }
        // else
        // {
        // echo "not found";
        // break;

        // }
// }
//print_r ($array);

            function monthsPrint() {
                $months = array("JAN", "FEB", "MAR");

                foreach($months as $m) {
                    echo "<option>$m</option>";
                }

                
            }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<form action="" method="GET">
    <select name="month">
            <option value="">DAY</option>
            <!-- <option value="">JAN</option> -->
            <?php
            monthsPrint();
            ?>
    </select>

<?php

echo $_GET['month'];
?>
    <input type="submit" value="submit" name="submit">

</form>
   
</body>
</html>