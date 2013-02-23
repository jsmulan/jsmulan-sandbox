<html>
    <head>
        <script type="text/javascript" src="js/jquery-1.9.1.js">
             $(document).ready(
                function changeTitle(){
                    var jqxhr = $.ajax( "/jsmulan-sandbox/content.php" )
                    .done(function() { alert("success"); })
                    .fail(function() { alert("error"); })
                    .always(function() { alert("complete"); });
                    
                    alert( jqxhr );
                }
            );
        </script>
        <title>
            Autoloader Test
        </title>
    </head>
    <body>
        <div id="title">
            
        </div>
        <button onclick="changeTitle">Click</button> 
    </body>
</html>