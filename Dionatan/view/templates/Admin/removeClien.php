<?php
$message = "Cliente não encontrado !!";
if ($data) {
    $message = $data['msg'];
}
?>
<div class="direita">
    <h1 class="page-header">Administrar Cliente</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                Deletar Cliente
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($message): ?>
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php echo $message; ?>
                                </div>
                                <a href="<?php echo $this->url?>ACliente" class="btn btn-primary">Voltar</a>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
  </div>
        <div class="tam"></div>
