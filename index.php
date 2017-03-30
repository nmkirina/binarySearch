
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container well">
            <div class="hero-unit">
                <h1>Поиск числа в массиве</h1>
                <p>
                    Для начала, создайте массив упорядоченных целых чисел
                </p>
                <form action="generate.php">
                    <button type="submit" class="btn btn-primary btn-large">Сгенерировать</button>
                </form>
                
                <?php if(isset($_SESSION['numArray'])):
                    $numArray = $_SESSION['numArray'];
                    ?>
                <form action="find.php" method="POST">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <?php foreach ($numArray as $id => $value):?>
                                    <th><?= $id?></th>
                                <?php endforeach;?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($numArray as $id => $value):?>
                                    <td><?= $value?></td>
                                    <input type="hidden" name="<?= $id?>" value="<?= $value?>">
                                <?php endforeach;?>
                            </tr>
                        </tbody>
                    </table>
                
                        <p>
                            Теперь задайте число и запустите поиск.
                        </p>
                        <input type="number" name="number"  value="<?= isset($_SESSION['number']) ? $_SESSION['number'] : 0?>">
                        <button type="submit" class="btn btn-primary btn-large">Найти</button>
                    </form>
                <?php endif;?>
                <?php if (isset($_SESSION['index'])):?>
                    <p>
                        Искомый индекс:  <strong><?= $_SESSION['index']?></strong>
                    </p>
                    
                <?php endif;?>
            </div>
        </div>
    </body>
</html>
