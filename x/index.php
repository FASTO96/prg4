
<?php


include("conf.php");

try{
    $dbc = new pdo ($tx,$userdb,$passdb);
    echo 2;
}


catch(PDOEXCEPTOIN $e)
{

    echo $e;
}
?>

