<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Account | CRWebsite</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
        Welcome Admin
	</div>
	<div id="div_subhead">
        <ul id = "menu">
            <il><a href="show_account.php">Account</a></il>
            <il><a href="show_room.php">Room</a></il>
            <il><a href="show_section.php">Section</a></il>
            <il><a href="show_course.php">Course</a></il>
        </ul>			
	</div>
	<div id="div_main">
        <div id= "div_left">
            <ul>
                <li><a href="add_account.php">Add</a></li>
                <li><a href="show_account.php">Show</a></li>
                <li><a href="accountprofile.php">Go to profile</a></li>
            </ul>
        </div>
		<div id="div_content" class="form"> 
            <?php 
                if(isset($_POST['submit'])) {
                    $f_name = $_POST['firstname'];
                    $l_name = $_POST['lastname'];
                    $email = $_POST['email'];
                    $type= $_POST['type'];
                    $username = $_POST['email'];
                    $pass = $_POST['password'];
                    ###raw image can be input inside database
                    $image = $_POST['image'];
                    $regisdate = $_POST['regisdate'];

                    $q="INSERT INTO account(f_name, l_name, email, username, passwd, user_picture, `type`, regis_date) VALUES ('$f_name','$l_name','$email','$username', '$pass', '$image','$type', '$regisdate');";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "INSERT failed. Error: ".$mysqli->error ;
                        return false;
                    }
                }
            ?>
            <div>
                <h2>Account</h2>
                <div>
                    <table>
                        <col width="10%">
                        <col width="20%">
                        <col width="20%">
                        <col width="5%">
                        <col width="10%">
                        <col width="10%">
                        <col width = "5%">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Added By</th>
                            <th>Register Date</th>
                        </tr>
                        <?php
                            $q="select * from account";
                            $result=$mysqli->query($q);
                            if(!$result){
                                echo "Select failed. Error: ".$mysqli->error ;
                                return false;
                            } 
                            while($row=$result->fetch_array()){ ?>
                        <tr>
                            <td><?=$row['f_name']?></td>
                            <td><?=$row['l_name']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['type']?></td>
                            <td><?=$row['admin_id']?></td>
                            <td><?=$row['regis_date']?></td>
                            <td style="background-color: #d23390; text-align: center;"><a href="delete.php?accountid=<?=$row['user_id']?>">X</a></td>
                        </tr>
                        <?php }?>
                    </table>
                </div>
            </div>
		</div>
	    <div id="div_footer">  
	</div>
</div>
</body>
</html>


