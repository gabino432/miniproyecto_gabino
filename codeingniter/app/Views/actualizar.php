<body>
  <div class="container">
  <h1>Actualizar registro</h1>
    <div class="row">
      <div class="col-sm-12">
      <form method="POST" action="<?php echo base url('/index.php/actualizar') ?>">
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
             <label for="nombre">Nombre: </label>
          <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre?>" required>
            <label for="apaterno">Apellido paterno:</label>
            <input type="text" name="apaterno" id="apaterno" class="form-control" value="<?php echo $apaterno ?>" required>
            <label for="amaterno">Apellido materno:</label>
     <input type="text" name="amaterno" id="amaterno" class="form-control" value="<?php echo $amaterno" required>
      <button class="btn btn-warning form-control">Editar</button>
        </form>
      </div>
    </div>
</div>
