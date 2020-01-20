<?php
$conn = mysqli_connect('localhost', 'root','su,11oL','police_station');
if(mysqli_connect_error()){
    echo 'error';
}
if(isset($_POST['user'])){
    $uname =$_POST ['user'];
    $pname =$_POST ['pass'];
    $sql="select * from station_head where Username ='".$uname."' and Password = '".$pname."' limit 1";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        echo "you are successful";
        
    } 
    else{
        echo "incorrect form";
        exit();
    }
    
}

?>
  
<!DOCTYPE html>
<html>

<head>
    <title>login</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   
<div class="login_box">
        <h1>Login</h1>
        <form method = "POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="textbox">
            <input id = "name" type="text" placeholder="username" name="user" value="">
        </div>
        <div class="textbox">
            <input id = "pass" type="password" placeholder="password" name="pass" value="">
        </div>
        
        <input type="submit" name = "submit" value = "login" class = "btn" onclik >
        </form>
 
        <!-- <a id = "new" href = "html.html" target = "_self">
            <button class=" btn " type="button " name=" " value="" >signin</button>
        </a>  -->
    </div>
 
</body>

</html>