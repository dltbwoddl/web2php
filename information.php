<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/information.php">web</a>
    <ol>
        <li><a href="/information.php?id=css">css</a></li>
        <li><a href="/information.php?id=html">html</a></li>
        <li><a href="/information.php?id=javascript">javascript</a></li>
        <li><a href="/information.php?id=mysql">mysql</a></li>
        <li><a href="/information.php?id=php">php</a></li>
    </ol>
    <?php    
    $name = $_GET['id'];
    if(isset($name)){
        echo $name;
        echo file_get_contents("phppr/".$name.".txt");
    } else{
        echo 'welcome';
    }
    ?>
</body>
</html>