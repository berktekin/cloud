<?php   

try{
$db=new PDO("mysql:host=attendance1-mysqldbserver.mysql.database.azure.com;dbname=mysqldatabase8658;charset=utf8","mysqldbuser@attendance1-mysqldbserver","Brk1997brk");
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>
