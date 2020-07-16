<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Editar Solicitação</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Editar Solicitação</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?= base_url('solicitacao/atualizamodulo')?>" method="post">
    <div class="row">
    <div class="col-md">
        <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Solicitações</h3>

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
            <input type="text" id="inputName" class="form-control" name="titulo" value="<?= $row->titulo ?>">
            </div>
            <div class="form-group">
            <label for="inputStatus">Opção 1</label>
            <select id="inputStatus" class="form-control custom-select" id="op1" name="op1">
                <option selected>Selecione uma opção</option>
                <option value="PIBIC/CNPq">PIBIC/CNPq</option>
                <option value="PIBIT/CNPq">PIBIT/CNPq</option>
                <option value="PIBIC/AF-CNPq">PIBIC/AF-CNPq</option>
                <option value="PIBIC-AF/Indígena/UFOPA">PIBIC-AF/Indígena/UFOPA</option>
                <option value="PIBIC-AF/Quilombola/UFOPA">PIBIC-AF/Quilombola/UFOPA</option>
                <option value="PIBIC/UFOPA">PIBIC/UFOPA</option>
                <option value="PIBIC-AF/UFOPA">PIBIC-AF/UFOPA</option>
            </select>
			</div>
			<div class="form-group hide">
            <label for="inputStatus">Opção 2</label>
            <select id="inputStatus" class="form-control custom-select" id="op2" name="op2">
            <option selected>Selecione uma opção</option>
                <option value="PIBIC/CNPq">PIBIC/CNPq</option>
                <option value="PIBIT/CNPq">PIBIT/CNPq</option>
                <option value="PIBIC/AF-CNPq">PIBIC/AF-CNPq</option>
                <option value="PIBIC-AF/Indígena/UFOPA">PIBIC-AF/Indígena/UFOPA</option>
                <option value="PIBIC-AF/Quilombola/UFOPA">PIBIC-AF/Quilombola/UFOPA</option>
                <option value="PIBIC/UFOPA">PIBIC/UFOPA</option>
                <option value="PIBIC-AF/UFOPA">PIBIC-AF/UFOPA</option>
            </select>
            </div>
           <?php }?>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
    <div class="row">
    <div class="col-12">
        <a href="<?= base_url('edit') ?>" class="btn btn-secondary">Voltar</a>
        <input type="submit" value="Salvar" class="btn btn-success float-right">
    </div>
    </div>
    </form>
</section>
<!-- /.content -->
