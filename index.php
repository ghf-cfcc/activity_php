
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<html>
  
    <body>
        <h1>Exploring Basic PHP Elements</h1>
        <p>Gavin Fritz</p>
        <p>The current date is: <?php echo date('Y-m-d'); ?></p>
        <?php 
            $string1 = "ghfritz";
            $integer1 = 297;
            $boolean1 = true;

            function CFCCusername($string1, $integer1) 
                {return "CFCC username is $string1 $integer1";}
            
            echo "<h2>" . CFCCusername($string1, $integer1) . "</h2>";
            echo "<p>PHP runs on the server while Javascript usually runs in the browser. PHP source code is hidden, while Javascript is visible and can be inspected using a web browser.</p>";
        ?>

    
    </body> 

</html>
