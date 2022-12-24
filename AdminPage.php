<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        div.header {
            height: 70px;
            background-color: blue;
            color: white;
        }
        div.header .profile {
            font-size: 25px;            
            padding-top: 10px;
        }
        div.activity {
            float: right;
            cursor: pointer;
            position: relative;
        }
        div.option {
            display: none;
        }
        div.activity:hover div.option {
            display: block;
             color: yellow;
             position: relative;
             background-color: blue;
             text-align: center;
        }
        div.option ul li {
            list-style-type: none;
            background-color: blue;
        }
        div.option ul li a {
            color: white;
            text-decoration: none;
            position: relative;
            font-size: 15px;
        }
        div.option ul li a:hover {
            color: yellowgreen;
        }
    </style>
</head>
<body>
    <div class="header">
        <?php
            session_start(); 
            if(isset($_SESSION['User'])):
        ?>
        <div class="profile">
            <?php echo "WELCOME ADMIN ".$_SESSION['User']; ?>
            <div class="activity">
                ACTIVITIES
                <div class="option">
                    <ul>
                        <li><a href="newAdminAdd.php">ADD ADMIN</a></li>
                        <li>
                            <?php 
                                echo '<a href="AdminPage.php?logout">LOG OUT</a>'; 
                                if(isset($_GET['logout'])) {
                                    session_destroy();
                                    header('location: AdminLoginPage.php');
                                } else {
                                    //header('location: AdminLoginPage.php');
                                }
                             endif; ?>
                        </li>
                    </ul>
         
                </div>
            </div>
        </div>
    </div>  
</body>
</html>