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
            ADMIN REGISTRATION
        </div>
        <form action="newAdminAdd.php" method="POST">
            <input type="text" placeholder="Name" name="Name" required>
            <input type="email" placeholder="EMAIL" name="Email" required><br>
            <input type="password" placeholder="PASSWORD" name="Password" required>
            <input type="submit" name="submit-button" value="SUBMIT">
        </form>
    </div>
    <?php
        session_start();
         $db = mysqli_connect('localhost','root','','Ecommerce') or die('Something went wrong!!!');
         if(isset($_POST['submit-button'])) {
                 $query = "insert into admin values('".$_POST['Name']."','".$_POST["Email"]."','".$_POST["Password"]."')";
                 if(mysqli_query($db,$query)) {
                    $_SESSION['success'] = "Admin Added Successfully!";
                    header('location: AdminPage.php');
                 }
        }
    ?>
</body>
</html>