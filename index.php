<?php
$name_error = $phone_error = $email_error = "";
$name = $phone = $email = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        $name_error = "Name field is required";
    }else{
        $name = test($_POST['name']);
    }
    if(empty($_POST['phone'])){
        $name_error = "phone field is required";
    }else{
        $name = test($_POST['phone']);
    }
    if(empty($_POST['email'])){
        $name_error = "email field is required";
    }else{
        $name = test($_POST['email']);
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = test($_POST['name']);
    $phone = test($_POST['phone']);
    $email = test($_POST['email']);
}
function test($data){
$data = $data;
$data = $data;
$data = $data;
return $data;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation with submit</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
Name : <input type="text" name="name"/><br/><br/>
<span style="color: red;"><?php echo $name_error;?></span><br/>
Phone : <input type="text" name="phone"/><br/><br/>
<span style="color: red;"><?php echo $phone_error;?></span><br/>
Email : <input type="email" name="email"/><br/><br/>
<span style="color: red;"><?php echo $email_error;?></span><br/>
<input type="submit" name="btn" value="Submit"/>
</form>
<?php
echo $name;
echo "<br/>";
echo $phone;
echo "<br/>";
echo $email;

?>
</body>
</html>