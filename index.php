<?php
session_start();
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href = "node_modules/bootswatch/dist/darkly/bootstrap.css">
        <title>Sessions</title>
    </head>
    <body>


<?php
if(isset($_SESSION['name']) && isset($_SESSION['visits'])){
    ?> <p>Hello <bold><?= $_SESSION['name'] ?></bold> Your visits : <?php echo $_SESSION['visits']++?></p>
    <?php
}else{
    $_POST['nameVisitor'] = "";
    ?>

    <form method="POST" action="index.php">
        <div class="mb-3">
            <label for="nameVisitor" class="form-label">Name :</label>
            <input type="text" class="form-control" id="nameVisitor" name="nameVisitor" aria-describedby="nameHelp">
            <button type="submit" class="btn btn-primary">Use my name!</button>
        </div>

    </form>
<?php
    if(isset($_POST['nameVisitor'])){
        $name = $_POST['nameVisitor'];
        echo $name . "<br>";
        $_SESSION['name'] = $name;
        $_SESSION['visits'] = 0;
        header("index.php");
    }


}

?>

    </body>
</html>
