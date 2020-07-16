<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified JavaScript -->
    </head>
    <body>
      

    
    <!-- Include all compiled plugins (below), or include individual files as needed

      -->

    <script>
       $( document ).ready(function() {
    alert( "ready!" );
    

    $.ajax({
               type: "POST",
               dataType:'text',
               url: "file:///var/www/html/ufopa-system/application/views/site/requested.py",
               data: {login:'fabio.lobato', secret:'53f8ec6a8f4ced38eeec2c2d50d780c2'},
               success: function (response) { alert(response) }, error: function(xhr, status, error) { var err = eval("(" + xhr.responseText + ")"); alert(error.Message); } 

             })
    alert( "but not totally" );
              });
    </script>


  </body>
</html>

