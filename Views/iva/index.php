<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">IVA</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <div class="input-group-append">
                            <a href="index.php?c=iva&a=create" class="btn btn-success btn-lg">Inserir</a>
                        </div>
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <td>Percentagem</td>
                        <td>Descrição</td>
                        <td>Em Vigor</td>
                        <td>Ações</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($iva as $value) { ?>
                    <tr>
                      <td><?= $value->percentagem ?></td>
                      <td><?= $value->descricao ?></td>
                      <td><?= $value->emvigor ?></td>
                      <td>
                        <a href"index.php?c=iva&a=show&id=<?=$value->id?>" class="btn btn-info"><i class="fas fa-scroll"></i></a>
                        <a href"index.php?c=iva&a=edit&id=<?=$value->id?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a href"index.php?c=iva&a=delete&id=<?=$value->id?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
