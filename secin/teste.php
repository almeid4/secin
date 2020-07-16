<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('public/dist/css/adminlte.min.css')?>">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/md5.min.js" type="text/javascript"></script>
  </head>
  <body class="hold-transition login-page">
    <div class="box-inner" role="main">
    <img src="https://mail.ufopa.edu.br/logo-mail.png" id="logo" alt="Webmail - UFOPA">
    <form action="autenticacao" method="post" name="form">
         <div class="input-group mb-3">
            <input type="hidden" class="form-control" name="_token" value="">
            <input type="hidden" class="form-control" name="_task" value="login">
            <input type="hidden" class="form-control" name="_action" value="login">
            <input type="hidden" class="form-control" name="_timezone" id="rcmlogintz" value="America/Santarem">
            <input type="hidden" class="form-control" name="_url" id="rcmloginurl">
            <input type="text"   name="_usuario" >
            <input type="password"   name="_password">
            <div class="row">

            <div class="col-6">
                <button type="submit" id="rcmloginsubmit" class="loginbtn btn btn-primary btn-block mb-2">Entrar</button>
            </div>

            </div>
         </div>
    </form>


    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script>
        $(document).on('click', '.loginbtn', function(){

            var usuario = $('[name="_usuario"]').val();
            var senha = $('[name="_password"]').val();
            var hash = CryptoJS.MD5(senha).toString();
            alert(hash);
          $.ajax({
               type: "POST",
               url: "https://ufopa.edu.br/apis/test/",
               dataType: "json",
               contentType: "application/json;charset=utf-8",
               data: {login:usuario, secret:hash},
               beforeSend: function(){
                alert('veio aqui');
               },
               success: function(res){
                 alert('success');
               },
               error: function(res){
               // console.log(res.status_code);
                      alert('sucerrcess');
               },
               complete: function(){
                   alert('sem retorno');
               }
           });
        });
    </script>
  </body>
</html>

