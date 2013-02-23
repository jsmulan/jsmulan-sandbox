<html>
    <head>
        <script type="text/javascript" src="js/jquery-1.9.1.js">
            function changeTitle(){
                jQuery.ajax( "content.php" ).done( alert("success") );
            }
        </script>
        <title>
            Autoloader Test
        </title>
    </head>
    <body>
        <div id="title">
            
        </div>
        <button type="button" onclick="changeTitle()">Click</button> 
    </body>
</html>