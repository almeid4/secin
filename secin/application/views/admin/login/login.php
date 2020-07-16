<div class="login-form">
    <?php  
    getMsg('msgCadastro');
    ?>
    <form action="<?= base_url('admin/login')?>" method="post">
        <h2 class="text-center">Login Administração</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">
        </div>
        <div class="form-group">
            <button type="submit" style=" color: white;" class="btn btn-block btn-info">Entrar</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> relembre-me</label>
           
        </div>        
    </form>
</div>