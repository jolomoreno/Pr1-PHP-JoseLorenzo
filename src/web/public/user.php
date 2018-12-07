<?php require './templates/head.php' ?>
<?php require '../users/list_one_user.php' ?>
    <section id="create_usuarios" class="">
        <div class="container">
            <h1 class="cover-heading">Usuario</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="../users/update_user.php" method="POST" class="form-signin text-left">
                        <div class="row">
                            <div class="col-md-6">
                                <input
                                        name="id"
                                        type="hidden"
                                        value="<?php echo $user->getId() ?>">
                                <label for="username">Usuario</label>
                                <input
                                        id="username"
                                        class="form-control inputMio"
                                        name="username"
                                        type="text"
                                        placeholder="<?php echo $user->getUsername() ?>"
                                        value="<?php echo $user->getUsername() ?>"
                                        <?php echo $op ?>
                                        required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input
                                        id="email"
                                        class="form-control inputMio"
                                        name="email"
                                        type="email"
                                        placeholder="<?php echo $user->getEmail() ?>"
                                        value="<?php echo $user->getEmail() ?>"
                                        <?php echo $op ?>
                                        required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="enabled">Enabled</label>
                                <select name="enabled" id="enabled" class="form-control inputMio" <?php echo $op = ($op==='readonly') ? 'disabled': '' ?>>
                                    <option value="1" <?php echo ($user->isEnabled()) ? 'selected': '' ?>>Si</option>
                                    <option value="0" <?php echo ($user->isEnabled()) ? '': 'selected' ?>>No</option>
                                </select>
                                <?php ($op==='disabled') ? '' : print '<button id="btnRegistroForm" type="submit" class="btn btn-primary btn-md">Enviar</button>' ?>
                            </div>
                            <div class="col-md-6">
                                <label for="password">Contraseña</label>
                                <input id="password"
                                       class="form-control inputMio"
                                       name="password"
                                       type="password"
                                       placeholder="*********"
                                       <?php echo $op ?>
                                       required>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
<?php require './templates/tail.php' ?>
