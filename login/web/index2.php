<?php
 include_once '../lib/helpers.php';
 include_once '../view/partials/head.php';
?>
<a href="<?php echo getUrl('Login','Login','getLogin'); ?>">me rio?</a>
<?php
if(isset($_GET['modulo'])){
    resolve();
}

include_once '../view/partials/footer.php';
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
     
</body>
</html>