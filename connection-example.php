<?php

$db = new PDO(
'firebird:dbname=192.168.101.119:C:\SelMaticPlus\Database\TEST.FDB', 
'SYSDBA', 
'masterkey',
array(PDO::ATTR_EMULATE_PREPARES => false,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);
     
$res = $db->query("SELECT * FROM DOSTAVKI");

echo '<pre>';
print_r($res->fetchAll());
echo '</pre>';
