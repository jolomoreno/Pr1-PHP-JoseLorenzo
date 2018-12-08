<?php require './templates/head.php' ?>
<?php require '../users/list_users.php' ?>
<?php require '../results/list_one_result.php' ?>
    <section id="create_resultados" class="">
        <div class="container">
            <h1 class="cover-heading">Resultado</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="../results/update_result.php" method="POST" class="form-signin text-left">
                        <div class="row">
                            <div class="col-md-6">
                                <input
                                        name="id"
                                        type="hidden"
                                        value="<?php echo $result->getId() ?>">
                                <label for="result">Resultado</label>
                                <input
                                        id="result"
                                        class="form-control inputMio"
                                        name="result"
                                        type="number"
                                        min="1"
                                        placeholder="<?php echo $result->getResult() ?>"
                                        value="<?php echo $result->getResult() ?>"
                                        <?php echo $op ?>
                                        required>
                                <?php ($op==='readonly') ? '' : print '
                                    <button id="btnRegistroForm" type="submit" class="btn btn-primary btn-md">Enviar</button>
                                ' ?>
                            </div>
                            <div class="col-md-6">
                                <label for="user">User</label>
                                <select name="user" id="user" class="form-control inputMio" <?php echo $op = ($op==='readonly') ? 'disabled': '' ?>>
                                    <option value="<?php echo $result->getUser()->getId() ?>" ><?php echo $result->getUser()->getUsername() ?></option>
                                    <?php foreach ($users as $user) {
                                        if($user->getId()!==$result->getUser()->getId()){?>
                                            <option value="<?php echo $user->getId() ?>" ><?php echo $user->getUsername() ?></option>
                                        <?php  } ?>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php require './templates/tail.php' ?>
