<?php
require_once ("database.php");

use sys4soft\Database;

define('MYSQL_CONFIG',[
 'host'=>'localhost',
 'database'=>'bd_stock',
 'username'=>'root',
 'password'=>'',
]);

$db= new Database(MYSQL_CONFIG);

//select
//$results = $db->execute_query("SELECT * from stock ");

//inset
// $parametro=[':produto'=>'produto tres',':quantidade'=>200];
// $results = $db->execute_non_query('INSERT INTO stock(produto,quantidade) VALUES (:produto,:quantidade)', $parametro);
 
//update 
//$parametro =[':id'=>3,':quantidade'=>60];
//$results = $db->execute_non_query('UPDATE stock SET quantidade = :quantidade WHERE id = :id',$parametro);

//delete
//$parametro =[':id'=>3];
//$results = $db->execute_non_query('DELETE FROM stock WHERE id = :id',$parametro);

//echo "<pre>";
//print_r($results);
//echo "</pre>";
?>



