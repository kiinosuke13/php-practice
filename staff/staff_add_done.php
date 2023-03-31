<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
<?php

try 
{
    $staff_name=$_POST['name'];
    $staff_pass=$_POST['pass'];

    $staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $pwd='';
    $user='shopuser';

    $db = new PDO($dsn,$pwd,$user);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'INSERT INTO shop(name,password)VALUES(?,?)';
    $stmt=$db->prepare($sql);
    $data[]=$staff_name;
    $data[]=$staff_pass;
    $stmt->execute($data);

    $db=null;

    print$staff_name;
    print'さんを追加しました。<br/>';
    
} 
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>

<a href="staff_list.php">戻る</a>
</body>
</html>