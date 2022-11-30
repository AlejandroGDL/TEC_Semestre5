<?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $url = "https://";
    } else{
        $url = "https://";
        $url.= $_SERVER['HTTP_HOST'];
        $url.= $_SERVER['REQUEST_URI'];
        $url; 
    }
$page = $url;

$newpage = "index.php";
$seg = "1";
?>
<html>
    <head>
        <meta http-equiv="refresh" content="3, url=index.php" >
        <title>Progress bar</title>
    </head>
    <body>
        <h1>Progress bar</h1>
    </body>
</html>