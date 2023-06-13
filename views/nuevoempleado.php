<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="tab-pane fade" id="register">
        <h3 class="mb-4">Registro nuevo empleado</h3>
        <!-- Código PHP -->
      </div>

      <form method="post">
        <div class="mb-3">
          <label for="registerTypedoc" class="form-label">Tipo documento</label>
          <input type="text" class="form-control" id="registerTypedoc" placeholder="CC, TI, CE" name="tipodocumendo" required>
        </div>
        <div class="mb-3">
          <label for="registerDoc" class="form-label">Numero documento</label>
          <input type="text" class="form-control" id="registerDoc" placeholder="Número documento" name="documento" required>
        </div>
        <div class="mb-3">
          <label for="registerNames" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="registerNames" placeholder="Nombres" name="nombres" required>
        </div>
        <div class="mb-3">
          <label for="registerSecondsname" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="registerSecondsname" placeholder="Apellidos" name="apellidos" required>
        </div>
        <div class="mb-3">
          <label for="registerCarge" class="form-label">Cargo</label>
          <input type="text" class="form-control" id="registerCarge" placeholder="Cargo" name="cargo" required>
        </div>
        <div class="mb-3">
          <label for="registerEmail" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="registerEmail" placeholder="ejemplo@correo.com" name="email" required>
        </div>
        <div class="mb-3">
          <label for="registerTel" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="registerTel" placeholder="Teléfono" name="telefono" required>
        </div>
        <div class="mb-3">
          <label for="registerContactphone" class="form-label">Teléfono de contacto</label>
          <input type="text" class="form-control" id="registerContactphone" placeholder="Tel. Contacto" name="contacto" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="address" placeholder="Dirección de residencia" name="direccion" required>
        </div>
        <div class="mb-3">
          <label for="neighborhood" class="form-label">Barrio</label>
          <input type="text" class="form-control" id="neighborhood" placeholder="Barrio" name="barrio" required>
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">Municipio o ciudad</label>
          <input type="text" class="form-control" id="city" placeholder="Lugar de residencia" name="municipiociudad" required>
        </div>
        <div class="mb-3">
          <label for="departamento" class="form-label">Departamento</label>
          <input type="text" class="form-control" id="departamento" placeholder="Departamento de residencia" name="departamento" required>
        </div>
        <div class="mb-3">
          <label for="registerEPS" class="form-label">EPS</label>
          <input type="text" class="form-control" id="registerEPS" placeholder="Nombre EPS" name="eps" required>
        </div>
        <div class="mb-3">
          <label for="registerARL" class="form-label">ARL</label>
          <input type="text" class="form-control" id="registerARL" placeholder="Nombre ARL" name="arl" required>
        </div>
        <div class="mb-3">
          <label for="registerCaja" class="form-label">Caja compensación</label>
          <input type="text" class="form-control" id="registerCaja" placeholder="Caja compensación" name="cajacompensacion" required>
        </div>
        <div class="mb-3">
          <label for="registerPension" class="form-label">Fondo de pensión</label>
          <input type="text" class="form-control" id="registerPension" placeholder="Fondo pensión" name="pension" required>
        </div>
        <div class="mb-3">
          <label for="dateadmission" class="form-label">Fecha Ingreso</label>
          <input type="date" class="form-control" id="dateadmission" placeholder="Fecha de ingreso" name="ingreso" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>