<?php
    $title="";
    $title_error="";
    $error = false;
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["title"]))
        {
            $error =true;
            $title_error="This Field is Empty";
        }

        elseif(is_numeric($_POST["title"]))
        {
            $error = true;
            $title_error = "Numeric is not allow ";
        }
        else
        {
            $title = $_POST["title"];
        }
    }

    $type="";
    $type_error ="";
    $error = false;

    if(empty($_POST["type"]))
    {
        $error = true;
        $type_error="please select one";
    }
    else{
        $type = $_POST["type"];
    }





    function typePrint()
    {
        $type = array("Apartment","Room","Penthouse","Duplex","Plaza","Building","Plot");
        foreach($type as $l)
        {
            echo "<option>$l</option>";
        }
    }

    function numberPrint()
    {
        for($i = 1; $i <= 10; $i++)
        {
            echo "<option>$i</option>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <form action="" method="post">
    <h1>Apartment Post Form</h1>

  
    <table>

        <tr>
            <td>Post Title </td>
            <td>
                <input type="text"name="title">
                <?php echo "$title_error" ?>
        </td>
        </tr>

        <tr>
            <td>Apartment Type</td>
            <td>
                <select name="type">
                    <option value ="" >Select</option>
                    <?php
                        echo typePrint();
                    ?>
                    <?php echo "$type_error" ?>
                    
                </select>
                
                
               
                
            </td>
        </tr>

        <tr>
            <td>Rate</td>
            <td><input type="text"></td>
        </tr>

        <tr>

            <td>BedRoom</td>
          
            <td>
                <select name="" id="">
                <option value="">Select</option>

                <?php
                   echo numberPrint();
                ?> 
                </select>
            </td>
        </tr>

        <tr>
            <td>Area</td>
            <td><input type="text"name="area"></td>
        </tr>

        

        <tr>
            <td>Location</td>
            <td>
                <select name="location">
                    <option value="">Select</option>
                    <option value="location">Kuril</option>
                    <option value="location">Bashundhara</option>
                    <option value="location">Mirpur</option>
                    <option value="location">Gazipur</option>
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