
<?php
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="/css/style_users.css">


 
	
  <title>login</title>
</head>

<body>

  <section class="login" id="login">
<div class="contenedor-login">
    <form method="post">
      <h4>Iniciar Sesion</h4>
      <div class="form-login">
        
        <div class="col-auto">
          <label class="sr-only" for="inlineFormInputGroup">Ingresar usuario</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Usuario">
          </div>
        </div>
        <div class="col-auto">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Ingresar contraseña</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="contraseña">
          </div>
          
        </div>
        <div class="col-auto">
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Rol</option>
            <option value="1">Administracion</option>
            <option value="3">Residente</option>
            <option value="2">Seguridad</option>
            <option value="3">Piscina</option>
          </select>
          
        </div>
        <div class="col-auto">
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Mostrar contraseña
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Recordarme
            </label>
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2">Iniciar</button>
          <button type="submit" class="btn btn-primary mb-2">Cancelar</button>
        </div>
      </div>
    </form>
  </div>
  </section>
 
</body>

</html>
