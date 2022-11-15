<?php
require("connection.php");
?>
<html>
<head>
<title>HTML_NEW</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>ADMIN LOGIN</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username" name="adminname">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="password">
        </div>
        
        <button type="submit" name="login">LOGIN </button>

    </form>
</div>
<?php
if(isset($_POST['login']))
{
    $query="SELECT * FROM `admin_login` WHERE 'admin_name'='$_POST[adminname]' and 'admin_password'='$_POST[password]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
       echo "correct";
        }
       else
       {
        echo "incorrect";
       }
}

?>


</body>
</html>