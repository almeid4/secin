<html>
 <body>
  <head>
   <title>
     run
   </title>
  </head>

   <form method="post">

    <input type="submit" value="GO" name="GO">
   </form>
 </body>
</html>

<?php
	echo("Mensagem\n");
	
	//$command = escapeshellcmd("python3 /var/www/html/ufopa-system/application/views/site/requested2.py");
	
	$result_last_line = system('python3 /var/www/html/ufopa-system/application/views/site/requested2.py');
	echo "Result : ".$result_last_line;
	
	echo "success";
	
?>

