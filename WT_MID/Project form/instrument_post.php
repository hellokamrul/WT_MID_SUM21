<?php



function instrumentPrint()
{
    $type = array("Guiter","Ukulele","Violin","Projector","PS4","Music Player");

    foreach($type as $m)
    {
        echo "<option>$m</option>";
    }

}

function locationPrint()
{
    $location = array("Kuril","Bashundhara","Mirpur","Gazipur","Dhanmondi");
    foreach($location as $l)
    {
        echo "<option>$l</option>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <form action="" method="post">
        <h1>Instrument Post Form</h1>
  
    <table>

        <tr>
            <td>Post Title </td>
            <td><input type="text"name="title"></td>
        </tr>

        <tr>
            <td>Instrument Type</td>
            <td>
                <!-- <select name="type">
                    <option value="">Select</option>
                    <option value="">Guiter</option>
                    <option value="">Ukulele</option>
                    <option value=""> Violin</option>
                    <option value=""></option>
                </select> -->
                <select name="type">
                    <option value="">Select</option> 
                    <?php
                        instrumentPrint();
                   ?>
                </select>
                
               
                
            </td>
        </tr>

        <tr>
            <td>Rate</td>
            <td><input type="text"></td>
        </tr>

        <tr>

            <td>Pysical Condition</td>
            <td>
                
                    <input type="radio"name="condition">Good
                    <input type="radio"name="condition">Very Good
                    <input type="radio"name="condition">Excellent
                
            </td>
        </tr>


        <tr>
            <td>Location</td>
            <!-- <td>
                <select name="location">
                    <option value="">Select</option>
                    <option value="location">Kuril</option>
                    <option value="location">Bashundhara</option>
                    <option value="location">Mirpur</option>
                    <option value="location">Gazipur</option>
                </select>
            </td> -->
            <td>
                <select name="location">
                    <option value="location">Select</option>
                    <?php 
                        locationPrint();
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Adress</td>
            <td><textarea name="adress"></textarea></td>
        </tr>

        

       <tr>
           <td>
               <input type="submit"name="submit">
           </td>
       </tr>


    </table>
</form>



</body>
</html>