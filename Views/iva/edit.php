<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
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
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Iva</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?c=iva&a=store" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="percentagemInput">Percentagem</label>
                    <input type="number" max="100" class="form-control" name="percentagem" id="percentagemInput" placeholder="Percentagem" value="<?= $iva->percentagem ?>" >
                  </div>
                  <div class="form-group">
                    <label for="descricaoInput">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="descricaoInput" value="<?= $iva->descricao ?>" placeholder="Descrição">
                  </div>
                  <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="emvigor" id="vigorCheck" <?= $iva->emvigor?>>
                    <label class="form-check-label" for="vigorCheck">Em Vigor</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
