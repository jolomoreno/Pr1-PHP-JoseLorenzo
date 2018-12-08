<?php require './templates/head.php' ?>
<?php require '../users/list_users.php' ?>
    <section id="create_resultados" class="">
        <div class="container">
            <h1 class="cover-heading">Crear resultados</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="../results/create_result.php" method="POST" class="form-signin text-left">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="result">Resultado</label>
                                <input
                                        id="result"
                                        class="form-control inputMio"
                                        name="result"
                                        type="text"
                                        placeholder="NuevoResultado"
                                        required>
                                <button id="btnRegistroForm" type="submit" class="btn btn-primary btn-md">Enviar</button>
                            </div>
                            <div class="col-md-6">
                                <label for="user">User</label>
                                <select name="user" id="user" class="form-control inputMio">
                                    <?php foreach ($users as $user) {?>
                                    <option value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php require './templates/tail.php' ?>
