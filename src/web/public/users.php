<?php require './templates/head.php' ?>
<?php require '../users/list_users.php' ?>
    <section id="usuarios" class="">
        <div class="container">
            <h1 class="cover-heading">Usuarios</h1>
            <hr>
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
                                <th> <?php echo ($user->isEnabled()) ? 'Yes' : 'No' ?></th>
                                <th> <?php echo ($user->isAdmin()) ? 'Yes' : 'No' ?></th>
                                <th scope="col"><a href="#"><span class="glyphicon glyphicon-search"></span></a></th>
                                <th scope="col"><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></th>
                                <th scope="col"><a href="#"><span class="glyphicon glyphicon-trash"></span></a></th>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php require './templates/tail.php' ?>
