<div class="box-principal">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Agregar un nueva noticia</h3>
        </div>
        <div class="panel body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Titulo</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Precio</label>
                            <input type="number" class="form-control" name="precio" required>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Imagen</label>
                            <input class="form-control" name="imagen" id="imagen" type="file" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Registrar</button>
                            <button type="reset" class="btn btn-warning">Borrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>