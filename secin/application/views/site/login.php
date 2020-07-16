<!--<div class="login-form">

    <?php

    getMsg('msgCadastro');

    ?>

    <form action="<?= base_url('login')?>" method="post">

        <h2 class="text-center">Login</h2>       

        <div class="form-group">

            <input type="text" class="form-control" placeholder="Email" name="email" required="required">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">

        </div>

        <div class="form-group">

            <button type="submit" style="background-color: #7FBB00; color: white;" class="btn btn-block">Entrar</button>

        </div>

        <div class="clearfix">

            <label class="pull-left checkbox-inline"><input type="checkbox"> relembre-me</label>

            <a href="#" class="pull-right">Esqueceu sua senha?</a>

        </div>        

    </form>

    <p class="text-center"><a type="button" class="btn btn-success" href="<?= base_url('login/cadastrar') ?>">REALIZAR MEU CADASTRO</a></p>

</div>-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SECIN - Sistema especial para Cotas Institucionais | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('public/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('public/dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">SECIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça login para iniciar sua sessão</p>
      <?php

      errosValidacao();
      getMsg('msgCadastro');

      ?>
      <form action="<?= base_url('login')?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha" name="senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block mb-2">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Recuperar senha</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('login/cadastrar') ?>" class="text-center">Novo registro</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('public/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('public/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('public/dist/js/adminlte.min.js')?>"></script>

</body>
</html>
