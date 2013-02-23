<html>
    <head>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script>
            function changeTitle(){
                var jqxhr = $.ajax( "/jsmulan-sandbox/content.php" )
                .done(function(msg) { $("#title").append(msg); });
            }
        </script>
        <title>
            Autoloader Test
        </title>
    </head>
    <body>
        <div id="title"></div>
        <button onclick="changeTitle()">Click</button>
    </body>
</html>