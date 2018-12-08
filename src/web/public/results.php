<?php $page='results'; ?>
<?php require './templates/head.php' ?>
<?php require '../results/list_results.php' ?>
<section id="usuarios" class="">
    <div class="container">
        <h1 class="cover-heading">Resultados</h1>
        <hr>
        <div class="buttons">
            <a id="btnRegistro" class="btn btn-primary btn-mdms" href="create_results.php">Alta resultado</a>
            <a id="btnDelete" class="btn btn-danger btn-md" href="../results/delete_results.php" onclick="return confirm('¿Realmente deseas eliminar TODOS los registros?');">Eliminar resultados</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th scope="row">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Result</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($results as $result) {?>
                        <tr>
                            <th> <?php echo $result->getId() ?></th>
                            <th> <?php echo $result->getUser() ?></th>
                            <th> <?php echo $result->getResult() ?></th>
                            <th> <?php echo $result->getTime() ?></th>
                            <th><a href="result.php<?php echo '?id='.$result->getId() ?>&op=read"><span class="glyphicon glyphicon-search"></span></a></th>
                            <th><a href="result.php<?php echo '?id='.$result->getId() ?>&op=update"><span class="glyphicon glyphicon-pencil"></span></a></th>
                            <th><a href="../results/delete_one_result.php<?php echo '?id='.$result->getId() ?>"
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
