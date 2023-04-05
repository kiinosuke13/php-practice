<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
<?php
if(isset($_POST['edit']) === true) 
{
    $staff_code=$_POST['staffcode'];

    header('Location:staff_edit.php?staff_code=$staff_code');
    exit;
}
if(isset($_POST['delete']) === true)
{
    $staff_code=$_POST['staffcode'];
    header('Location:staff_delete.php?staff_code=$staff_code');
    exit;
}
?>
</body>
</html>