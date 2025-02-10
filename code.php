<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    
</head>
<body>
    <form>
    <label for="fname" required>First name:</label><br>
        <
        <input type="text" id="fname" name="fname" value="Ash"><br>
        <input type="text" id="lname" name="lname" value="Hoyos"><br>
        <input type="submit" value="submit">
    </form>
    <div class="container" style="margin-top: 50px">
        <?php
         if(isset($_POST['sumbit'])){ }

         
            if(is_numeric($_POST['number1'])&& is_numeric($_POST['number2'])){
                

            

            }

                if($_POST['operation'] == 'plus')
                {
                    $total = $_POST['number1'] + $_POST['number2'];
            
            
                }
                if($_POST['operation'] == 'minus')
                {
                    $total = $_POST['number1'] - $_POST['number2'];
                
                }
                if($_POST['operation'] == 'times')
                {
                    $_total = $_POST['number1'] * $_POST['number2'];
                
                }
                if($_POST['operation'] == 'divide by')
                {
                   $total = $_POST['number1'] / $_POST['number2'];
                }

                echo "<h1>{$_POST['number1']{$_POST['operation']{$_POST['number2']} = {$total}</h1>";
            }
            else {
            }
        }
            
            } else {
            
        


          }


         
         ?>
         

         
    
</body>
</html>