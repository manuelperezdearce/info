<form action="index?controller=user&action=login" method="post" class="max-w-[600px] m-auto">
    <h2 class="h2">
        Módulo de Acceso
    </h2>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" maxlength="10" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" maxlength="10" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Mantener sesión.</label>
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>