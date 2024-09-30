<form action="index?controller=user&action=login" method="post" class="max-w-[600px] m-auto">
    <h2 class="h2">
        Módulo de Registro de Pacientes
    </h2>
    <div class="mb-3">
        <label for="InputName" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" required>
    </div>
    <div class="mb-3">
        <label for="inputApellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="inputApellido" aria-describedby="apellidoHelp" required>
    </div>
    <div class="mb-3">
        <label for="inputIdentificación" class="form-label">Identificación</label>
        <input type="text" class="form-control" id="inputIdentificación" aria-describedby="identificaciónHelp" required>
    </div>
    <div class="mb-3">
        <label for="inputSexo" class="form-label">Sexo</label>
        <select class="form-select" id="inputSexo" aria-describedby="identificaciónHelp" required>
            <option value="0">Masculino</option>
            <option value="1">Femenino</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="inputDireccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="inputDireccion" aria-describedby="DireccionHelp" required>
    </div>
    <div class="mb-3">
        <label for="inputTelefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="inputTelefono" aria-describedby="TelefonoHelp" required>
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="EmailHelp" required>
    </div>
    <div class="mb-3">
        <label for="inputMotivoConsulta" class="form-label">Motivo de la Consulta</label>
        <textarea type="text" class="form-control" id="inputMotivoConsulta" aria-describedby="MotivoConsultaHelp" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="submit" class="btn btn-secondary">Cancelar</button>
</form>