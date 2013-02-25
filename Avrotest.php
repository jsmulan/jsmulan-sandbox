<?php
    $input = $_Get['characters'];
    $input = preg_replace( '@\s@', '', $input );
var_dump( $input );
?>
<html>
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <form action="Avrotest.php" method="GET">
            <input type="text" name="characters" id="characters">
            
            <input type="submit" value="Save">
        </form>
    </body>
</html>