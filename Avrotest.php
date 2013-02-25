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
    $file = fopen( 'output.txt', 'w' );
    fwrite( $file, $results );
    fclose( $file );
?>
<html>
    <head>
        <title>
            Avro Test
        </title>
    </head>
    <body>
        <?php if( FALSE == empty( $results ) ){ ?>
        <h2><?php echo $results; ?></h2>
        <?php } ?>
        <form action="Avrotest.php" method="GET">
            <input type="text" name="characters" id="characters" maxlength="32" >
            
            <input type="submit" value="Save">
        </form>
    </body>
</html>