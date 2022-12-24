<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        <?php include "AdminFormStyle.css"; ?>
    </style>
</head>
<body>
    <div class="admin">
        <div class="text">
            ADMIN LOGIN
        </div>
        <form action="AdminLoginPage.php" method="POST">
            <input type="email" placeholder="EMAIL" name="Email" required><br>
            <input type="password" placeholder="PASSWORD" name="Password" required>
            <input type="submit" name="submit-button" value="SUBMIT">
        </form>
    </div>
    <?php
        $db = mysqli_connect('localhost','root','','Ecommerce') or die('Something went wrong!!!');
        if(isset($_POST['submit-button'])) {
            if(empty($_POST['Email']) || empty($_POST['Password'])) {
                header('location: AdminLoginPage.php');
            } else {
                $query = "select * from admin where Email = '".$_POST['Email']."' and Password = '".$_POST['Password']."' ";
                $result = mysqli_query($db,$query);
                if(mysqli_fetch_assoc($result)) {
                    $queryForName = "select * from admin where Email = '".$_POST['Email']."' and Password = '".$_POST['Password']."' ";
                    $NameOfUser = mysqli_query($db,$queryForName);
                    $row = mysqli_fetch_assoc($NameOfUser);
                    session_start();
                    $_SESSION['User'] = $row['Name'];
                    header('location: AdminPage.php');
                } else {
                    header('location: AdminLoginPage.php');
                }
            }
        }
    ?>
</body>
</html>