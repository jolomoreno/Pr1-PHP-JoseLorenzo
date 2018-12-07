<?php require './templates/head.php' ?>
<?php require '../users/list_users.php' ?>
    <section id="usuarios" class="">
        <div class="container">
            <h1 class="cover-heading">Usuarios</h1>
            <hr>
            <div class="buttons">
                <a id="btnRegistro" class="btn btn-primary btn-mdms" href="create_users.php">Alta usuario</a>
                <a id="btnDelete" class="btn btn-danger btn-md" href="../users/delete_users.php" onclick="return confirm('¿Realmente deseas eliminar TODOS los registros?');">Eliminar usuarios</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="row">Id</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Enabled</th>
                                <th scope="col">Is Admin?</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) {?>
                            <tr>
                                <th> <?php echo $user->getId() ?></th>
                                <th> <?php echo $user->getUsername() ?></th>
                                <th> <?php echo $user->getEmail() ?></th>
                                <th> <?php echo ($user->isEnabled()) ? 'Si' : 'No' ?></th>
                                <th> <?php echo ($user->isAdmin()) ? 'Si' : 'No' ?></th>
                                <th><a href="user.php<?php echo '?id='.$user->getId() ?>&op=read"><span class="glyphicon glyphicon-search"></span></a></th>
                                <th><a href="user.php<?php echo '?id='.$user->getId() ?>&op=update"><span class="glyphicon glyphicon-pencil"></span></a></th>
                                <th><a href="../users/delete_one_user.php<?php echo '?id='.$user->getId() ?>"
                                       onclick="return confirm('¿Realmente deseas eliminar el registro?');">
                                            <span class="glyphicon glyphicon-trash"></span></a>
                                </th>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php require './templates/tail.php' ?>
