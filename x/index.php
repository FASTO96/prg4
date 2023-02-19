
<?php


include("conf.php");

try{
    $dbc = new pdo ($tx,$userdb,$passdb);
    echo 1;
}


catch(PDOEXCEPTOIN $e)
{

    echo $e;
}
?>

