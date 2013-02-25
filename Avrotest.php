<?php
    $input = $_GET['characters'];
    $input = preg_replace( '@\s@', '', $input );
    $input_array = str_split( $input );
    $results = '';
    foreach( $input_array as $key => $char ){
        if( $key%2 != 0 ){
            $results.= $char;
        }
    }
var_dump( $results );
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