<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Solicitar Cota</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Alterar solicitação</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?= base_url('solicitacao/atualizamodulo2')?>" method="post">
    <div class="row">
    <div class="col-md">
        <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Dados da alteração</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
            <?php
                getMsg('msgCadastro');

            ?>
            <?php foreach ($data_solicitacoes as $row) {?>
            <div class="form-group">
            <label for="inputName">Título do Plano</label>
            <input type="text" id="inputName" class="form-control" name="titulo2" value="<?= $row->titulo2?>">
            </div>
            <div class="form-group">
            <label for="inputStatus">Opção 1</label>
            <select id="inputStatus" class="form-control custom-select" id="op11" name="op11">
                <option selected>Selecione uma opção</option>
                <option>PIBIC/CNPq</option>
                <option>PIBIT/CNPq</option>
                <option>PIBIC/AF-CNPq</option>
                <option>PIBIC-AF/Indígena/UFOPA</option>
                <option>PIBIC-AF/Quilombola/UFOPA</option>
                <option>PIBIC/UFOPA</option>
                <option>PIBIC-AF/UFOPA</option>
            </select>
			</div>
			<div class="form-group">
            <label for="inputStatus">Opção 2</label>
            <select id="inputStatus" class="form-control custom-select" id="op12" name="op12">
                <option selected>Selecione uma opção</option>
                <option>PIBIC/CNPq</option>
                <option>PIBIT/CNPq</option>
                <option>PIBIC/AF-CNPq</option>
                <option>PIBIC-AF/Indígena/UFOPA</option>
                <option>PIBIC-AF/Quilombola/UFOPA</option>
                <option>PIBIC/UFOPA</option>
                <option>PIBIC-AF/UFOPA</option>
            </select>
            </div>
         <?php } ?>
        </div>
        </div>
        <!-- /.card -->
    </div>
    </div>
    <div class="row">
    <div class="col-12 mb-2">
        <a href="<?= base_url('homepage')?>" class="btn btn-secondary">Voltar</a>
        <input type="submit" value="Salvar" class="btn btn-success float-right">
    </div>
    </div>
    </form>
</section>
<!-- /.content -->


