<?php
require_once("model/exampleModel.php");
$model = new ExampleModel();

if (isset($_POST["insert"])) {
    $model->insert($_POST["nama"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $result = $model->showData();
    foreach ($result as $value) {
        echo $value["nama"];
    }
    ?>
    <form action="<?= htmlentities($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="nama" id="">
        <button type="submit" name="insert">submit</button>
    </form>
</body>

</html>