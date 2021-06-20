<?php

$name ="";
$error_n= "";
$error = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["name"]))
        {
            $error = true;
            $error_n= "Empty";
        // echo "hello";
            

        }
        elseif(is_numeric($_POST["name"]))
        {
            $error_n= "number no allow";
    
        }
        
        else
        {
            $name =htmlspecialchars($_POST["name"]);
        }
    }

$uname ="";
$error_un= "";
$uerror = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["uname"]))
            {
                $uerror = true;
                $error_un= "Empty";
            // echo "hello";
            }

        elseif(is_numeric($_POST["uname"]))
            {
                $error_un= "number no allow";
        
            }

        elseif(!strlen($_POST["uname"]) >= 6) 
            {

                $error_un= " at least 6 characters ";

            }

        else
            {
                $uname =htmlspecialchars($_POST["uname"]);
            }
    }

$pname ="";
$error_p= "";
$perror = false;



    function PasswordCheck($pname) {
        global $error_p;
        $hasSpecialChar = false;
        $hasUpperCase = false;
        $hasLowerCase = false;
        $hasLength = false;


        if(strlen($pname) >= 8) {
            $hasLength = true;
        }
            //$str = "Hello world. It's a beautiful day.";
        $split = str_split($pname,1);
        //$array = array($split);
        for ($i = 0; $i <count($split);$i++)
        {
            if( "#" == $split[$i] || "!"==$split[$i]){
            //echo $split[$i]."<br>";
            $hasSpecialChar = true;
            // break;
            }

            if(ctype_upper($split[$i])) {
                $hasUpperCase = true;
            }

            if(ctype_lower($split[$i])) {
                $hasLowerCase = true;
            }
            // else
            // {
            //     // $error_p= "Special characters are Missing !! ";
            // //echo "not found";
            // // break;
            //     $hasSpecialChar = true;
            // }

            
        
        } 

            if($hasLength && $hasSpecialChar && $hasUpperCase && $hasLowerCase) {
                return 1;
            } else {

                $error_p = "some thing Wrong...";
                return 0;
            }



    
    }
        

    if(isset($_POST["submit"]))
    {
        echo PasswordCheck(htmlspecialchars($_POST["password"]));
            if (empty($_POST["password"]))
            {
                $perror = true;
                $error_p= "Empty";
            // echo "hello";
                

            }
            elseif(is_numeric($_POST["password"]))
            {
                $error_p= "number no allow";
        
            }
            
            // elseif()
            // {
                



            // }
    }

$cpname ="";
$error_cp= "";
$cperror = false;

if(isset($_POST["submit"]))
{

    if (empty($_POST["cpassword"]))
    {
        $cperror = true;
        $error_cp= "Empty";
       // echo "hello";
        

    }
    if ($_POST["password"]==$_POST["cpassword"])
    {
    //     //$cperror = true;
    //     $error_cp= "Empty";
    //    // echo "hello";
        $cpname =htmlspecialchars($_POST["cpassword"]);

    }

    else
    {
        // $cpname =htmlspecialchars($_POST["cpassword"]);
        $error_cp = "Password does not match";
    }
}

$mail ="";
$error_e= "";
$eerror = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["mail"]))
        {
            $eerror = true;
            $error_e= "Empty";
        // echo "hello";
            

        }
        elseif(is_numeric($_POST["mail"]))
        {
            $error_e= "number no allow";
    
        }
        else
        {
            $mail =htmlspecialchars($_POST["mail"]);
        }
    }  

$code ="";
$error_code= "";
$code_error = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["code"]))
        {
            $code_error = true;
            $error_code= "Empty";
        // echo "hello";
            

        }
        // elseif(is_numeric($_POST["code"]) )
        // {
        //     $error_code= "number no allow";
    
        // }
        else
        {
            $code =htmlspecialchars($_POST["code"]);
        }
    } 

$phone ="";
$error_phone= "";
$phone_error = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["phone"]))
        {
            $phone_error = true;
            $error_phone= "Empty";
        //    // echo "hello";
            
            

        }
        elseif(is_numeric($_POST["phone"]) )
        {
            $phone =htmlspecialchars($_POST["phone"]);
    
        }
        else
        {
            // $phone =htmlspecialchars($_POST["phone"]);
            $error_phone= "Charectar is not allow";

        }
    } 


$adress ="";
$error_adress= "";
$adress_error = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["adress"]))
        {
            $adress_error = true;
            $error_adress= "Empty";
        //    // echo "hello";
            
            

        }
        elseif(is_numeric($_POST["adress"]) )
        {
            //$phone =htmlspecialchars($_POST["adress"]);
            $error_adress= "number is not allow";
    
        }
        else
        {
            $adress =htmlspecialchars($_POST["adress"]);
            //$error_adress= "Charectar is not allow";

        }
    } 

$city ="";
$error_city= "";
$city_error = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["city"]))
        {
            $city_error = true;
            $error_city= "Empty";
        //    // echo "hello";
            
            

        }
        elseif(is_numeric($_POST["city"]) )
        {
            //$phone =htmlspecialchars($_POST["adress"]);
            $error_city= "number is not allow";
    
        }
        else
        {
            $city =htmlspecialchars($_POST["city"]);
            //$error_adress= "Charectar is not allow";

        }
    } 

$state ="";
$error_state= "";
$state_error = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["state"]))
        {
            $state_error = true;
            $error_state= "Empty";
        //    // echo "hello";
            
            

        }
        elseif(is_numeric($_POST["state"]) )
        {
            //$phone =htmlspecialchars($_POST["adress"]);
            $error_state= "number is not allow";
    
        }
        else
        {
            $state =htmlspecialchars($_POST["state"]);
            //$error_adress= "Charectar is not allow";

        }
    } 

$pcode ="";
$error_pcode= "";
$pcode_error = false;

    if(isset($_POST["submit"]))
    {
        if (empty($_POST["pcode"]))
        {
            $pcode_error = true;
            $error_pcode= "Empty";
        //    // echo "hello";
            
            

        }
        elseif(is_numeric($_POST["pcode"]) )
        {
           
            $pcode =htmlspecialchars($_POST["pcode"]);
    
        }
        else
        {
            // $phone =htmlspecialchars($_POST["phone"]);
            $error_pcode= "Charectar is not allow";

        }
    }

    function dayPrint()
    {
        for($d = 0; $d<= 30;$d++)
        {
            // $day = array($d[$d]);
            echo "<option>$d</option>";
        }
       // $day = array("1","2","3","4","5","6","7","8","9");


    }

    function monthPrint()
    {
        $months = array("January","February","March","April","May","Jun","July","August","September","October","November","December");

        foreach($months as $m)
        {
            echo "<option>$m</option>";
        }

    }


    function yearPrint()
    {
        for($y = 1990; $y<= 2021;$y++)
        {
            // $day = array($d[$d]);
            echo "<option>$y</option>";
        }
       


    }




?>





<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
 <form action= "" method ="POST">
<table border ="1">

<tr>
<td> Name : </td>
<td><input type="text"name ="name"><span style="color:red"><?php echo $error_n; ?></span> </td>

</tr>

<tr>
    <td> UserName : </td>
    <td><input type="text"name ="uname"><span style="color:red"><?php echo $error_un; ?></span> </td>
    </tr>

    <tr>
        <td> Password : </td>
        <td><input type="password"name ="password"><span style="color:red"><?php echo $error_p; ?></span> </td>
        </tr>

        <tr>
            <td> Confirm Password : </td>
            <td><input type="password"name ="cpassword"><span style="color:red"><?php echo $error_cp; ?></span> </td>
            </tr>

            <tr>
                <td> Email : </td>
                <td><input type="text"name ="mail"><span style="color:red"><?php echo $error_e; ?></span> </td>
                </tr>
                <tr>
                    <td> Phone : </td>
                    <td>
                        <input type="text"name ="code" placeholder="code"><span style="color:red"><?php echo $error_code; ?></span>
                        -
                        <input type="text"name ="phone" placeholder="Number"><span style="color:red"><?php echo $error_phone; ?></span>
                     </td>
                
                   

                    </tr>

                    <tr>
                        <td> Address : </td>
                        <td><input type="text"name ="adress" placeholder="Street Adress"><span style="color:red"><?php echo $error_adress; ?></span><br>
                            <input type="text"name ="city" placeholder="City"><span style="color:red"><?php echo $error_city; ?></span>
                            -
                            <input type="text"name ="state" placeholder="State"><span style="color:red"><?php echo $error_state; ?></span><br>
                            <input type="text"name ="pcode" placeholder="Postal/Zip Code"> <span style="color:red"><?php echo $error_pcode; ?></span>
                        </td>

                        


                    </tr>
                    <tr>

                        <td>Brith Date : </td>
                        <td>
                            <select name="day">
                                <option value="">Day</option>
                                <?php
                                     dayPrint();
                                ?>
                             </select>

                             <select name="month">
                                 <option value="">Month</option> 
                                 <?php
                                     monthPrint();
                                ?>
                             </select>

                            <select name="year"> 
                                <option value="">Year</option>
                                <?php
                                     yearPrint();
                                ?>
                            </select>

                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Gender : 
                        </td>
                        <td>
                            <input type="radio"name = "gender" >Male 
                            <input type="radio"name = "gender" > Female
                            
                        </td>
                        


                    </tr>
                    <tr>
                        <td>Where did you hear about us ?
                        </td>
                        <td>
                            <input type="checkbox"name="opt"> A Friend or Colleague<br>
                            <input type="checkbox"name="opt"> Google<br>
                            <input type="checkbox"name="opt"> Blog Post<br>
                            <input type="checkbox"name="opt"> News Article


                        </td>

                    </tr>

                    <tr>
                        <td>Bio </td>
                        <td>
                            
                            <textarea></textarea>
                            

                        </td>


                    </tr>
                    <tr>
                        <td>
                            
                            <input type="submit" name ="submit" value="register">
                        </td>
                    </tr>
                    


 </table>
</form>   




    
</body>


</html>

<?php



echo $name;

echo $uname;
echo $mail;
echo $code;
echo $phone;
echo $adress;
echo $city;
echo $state;

echo $pcode;







?>
