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
            <li class="breadcrumb-item active">Solicitar cota</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?= base_url('solicitacoes')?>" method="post">
    <div class="row">
    <div class="col-md">
        <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Dados das Solicitações</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
            <label for="inputName">Título do Primeiro Plano</label>
            <input type="text" id="inputName" class="form-control" name="titulo">
            </div>
            <div class="form-group">
            <label for="inputStatus">Opção 1</label>
            <select id="inputStatus" class="form-control custom-select" id="op1" name="op1">
                <option selected>Selecione uma opção</option>
                <option>PIBIC/CNPq</option>
                <option>PIBITI/CNPq</option>
                <option>PIBIC/AF-CNPq</option>
                <option>PIBIC-AF/Indígena/UFOPA</option>
                <option>PIBIC-AF/Quilombola/UFOPA</option>
                <option>PIBIC/UFOPA</option>
                <option>PIBIC-AF/UFOPA</option>
            </select>
			</div>
			<div class="form-group">
            <label for="inputStatus">Opção 2</label>
            <select id="inputStatus" class="form-control custom-select" id="op2" name="op2">
                <option selected>Selecione uma opção</option>
                <option>PIBIC/CNPq</option>
                <option>PIBITI/CNPq</option>
                <option>PIBIC/AF-CNPq</option>
                <option>PIBIC-AF/Indígena/UFOPA</option>
                <option>PIBIC-AF/Quilombola/UFOPA</option>
                <option>PIBIC/UFOPA</option>
                <option>PIBIC-AF/UFOPA</option>
            </select>
            </div>
        </div>
        <!-- /.card-body -->
        <hr>
        <div class="card-body">
            <div class="form-group">
            <label for="inputName">Título do Segundo Plano</label>
            <input type="text" id="inputName" class="form-control" name="titulo2">
            </div>
            <div class="form-group">
            <label for="inputStatus">Opção 1</label>
            <select id="inputStatus" class="form-control custom-select" id="op11" name="op11">
                <option selected>Selecione uma opção</option>
                <option>PIBIC/CNPq</option>
                <option>PIBITI/CNPq</option>
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
                <option>PIBITI/CNPq</option>
                <option>PIBIC/AF-CNPq</option>
                <option>PIBIC-AF/Indígena/UFOPA</option>
                <option>PIBIC-AF/Quilombola/UFOPA</option>
                <option>PIBIC/UFOPA</option>
                <option>PIBIC-AF/UFOPA</option>
            </select>
            </div>
        </div>
        </div>
        
        <!-- /.card -->
    </div>
    </div>
    <div class="row">
    <div class="col-12 mb-2">
        <a href="<?= base_url('quantidade') ?>" class="btn btn-secondary">Voltar</a>
        <input type="submit" value="Confirmar solicitação" class="btn btn-success float-right">
    </div>
    </div>
    </form>
</section>
<!-- /.content -->

