<?php   

try{
$db=new PDO("mysql:host=lotteru-mysqldbserver.mysql.database.azure.com;dbname=datas;charset=utf8","Mert2312@lotteru-mysqldbserver","Me1997rt");
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>