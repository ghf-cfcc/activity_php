/**
Add the following elements to index.php:

A heading 1 with the text “Exploring Basic PHP Elements”
A paragraph with your first and last name
A paragraph with the current date
Using PHP, include the following:

Define at least three different types of variables (e.g., string, integer, boolean)
A user-defined function that uses at least two of your variables
An echo statement to display the results in a heading 2
An echo statement comparing JavaScript and PHP in a paragraph. */

<DOCTYPE html>
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
