<form action="">
    <div class="container w-50 d-flex justify-content-center title">
        <h2 class="text-center">Registrate con nosotros</h2>
    </div>
    <div class="container w-50">
        <h3>Datos personales</h3>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" id="lastname" class="form-control">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">

        <label for="phone">Teléfono</label>
        <input type="text" name="phone" id="phone" class="form-control">

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control">

        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
    <div class="container w-50">
        <h3>Dirección</h3>
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address" class="form-control">

        <label for="city">Ciudad</label>
        <select name="city" id="city" class="form-control">
            <option value="1">Ciudad 1</option>
            <option value="2">Ciudad 2</option>
            <option value="3">Ciudad 3</option>
        </select>

        <label for="state">Estado</label>
        <select name="state" id="state" class="form-control">
            <option value="1">Estado 1</option>
            <option value="2">Estado 2</option>
            <option value="3">Estado 3</option>
        </select>

        <label for="zip">Código postal</label>
        <input type="text" name="zip" id="zip" class="form-control">

        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
<style>
    .title {
        background-color: #a71c1c;
        color: #fff;
    }
</style>