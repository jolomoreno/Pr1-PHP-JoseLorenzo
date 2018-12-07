<?php require './templates/head.php' ?>
    <section id="create_usuarios" class="">
        <div class="container">
            <h1 class="cover-heading">Crear usuarios</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="../users/create_user.php" method="POST" class="form-signin text-left">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="username">Usuario</label>
                                <input
                                        id="username"
                                        class="form-control inputMio"
                                        name="username"
                                        type="text"
                                        placeholder="NombreUsuario"
                                        required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input
                                        id="email"
                                        class="form-control inputMio"
                                        name="email"
                                        type="email"
                                        placeholder="email@dominio.com"
                                        required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="enabled">Enabled</label>
                                <select name="enabled" id="enabled" class="form-control inputMio">
                                    <option value="1" >Si</option>
                                    <option value="0" selected>No</option>
                                </select>
                                <button id="btnRegistroForm" type="submit" class="btn btn-primary btn-md">Enviar</button>
                            </div>
                            <div class="col-md-6">
                                <label for="password">Contraseña</label>
                                <input
                                        id="password"
                                        class="form-control inputMio"
                                        name="password"
                                        type="password"
                                        placeholder="Tu contraseña"
                                        required>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
<?php require './templates/tail.php' ?>
