<div class="container">
  <div class="row">
    
    <div class="tab-pane fade" id="register">
      <h3 class="mb-4">Registrarse</h3>
        <form method="post" action="/controller/signin.php">
          <div class="mb-3">
            <label for="registerName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="registerName" placeholder="Nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="registerEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="registerEmail" placeholder="ejemplo@correo.com" name="email" required>
          </div>
          <div class="mb-3">
            <label for="registerPassword" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="registerPassword" placeholder="Contraseña" name="password" required>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="signin">Registrarse</button>
          </div>
        </form>
    </div>

  </div>
</div>