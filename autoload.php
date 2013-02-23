<html>
    <head>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script>
            function myFunction(){
                document.getElementById("demo").innerHTML="Hello World";
            }

            function changeTitle(){
                var jqxhr = $.ajax( "/jsmulan-sandbox/content.php" )
                .done(function() { alert("success"); })
                .fail(function() { alert("error"); })
                .always(function() { alert("complete"); });
                
                alert( jqxhr );
            }
        </script>
        <title>
            Autoloader Test
        </title>
    </head>
    <body>
        <div id="title">
            
        </div>
        <p id="demo"></p>
        <a href="/jsmulan-sandbox/content.php">content</a>
        <button onclick="changeTitle()">Click</button>
        <button onclick="myFunction()">Click me</button>
    </body>
</html>