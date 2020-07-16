<div class="login-form">

    <?php  

        errosValidacao();

        getMsg('msgCadastro');

    ?>

    <form action="<?= base_url('admin/login/cadastrar')?>" method="post">

        <h2 class="text-center">Fazer cadastro Admin</h2>  

        <div class="form-group">

            <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required="required">

        </div>     

        <div class="form-group">

            <input type="email" class="form-control" placeholder="Email" name="email" required="required">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" placeholder="Confirme sua senha" required="required" name="senhaconfirmacao">

        </div>

        <div class="form-group">

            <button type="submit" style=" color: white;" class="btn btn-block btn-info">Cadastrar</button>

        </div>

        <div class="clearfix">

            <label class="pull-left checkbox-inline"><input type="checkbox"> relembre-me!</label>

            <a href="<?= base_url('login') ?>" class="pull-right">Já sou cadastrado!</a>

        </div>        

    </form>

    

</div>