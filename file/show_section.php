<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Section | CRWebsite</title>
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
                <li><a href="add_section.php">Add</a></li>
                <li><a href="show_section.php">Show</a></li>
                <li><a href="accountprofile.php">Go to profile</a></li>
            </ul>
        </div>
		<div id="div_content" class="form"> 
        <?php 
                if(isset($_POST['submit'])) {
                    $secgrade = $_POST['secgrade'];
                    $size = $_POST['size'];
                    $regisdate = $_POST['regisdate'];
                    $userid = $_COOKIE["idsharing"]; 
                    $q = "INSERT INTO section (grade, section_size, regis_date, admin_id) VALUES ('$secgrade', '$size', '$regisdate', '$userid')";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "INSERT failed. Error: ".$mysqli->error ;
                        return false;
                    }
                }
            ?> 
            <h2>Section</h2>
            <table>
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="30%">
                <col width="30%">
                <col width="5%">
                <tr>
                    <th>ID</th>
                    <th>Grade</th>
                    <th>Size</th>
                    <th>Admin</th>
                    <th>Register Date</th>
                </tr>
                <?php
                    $q="select * from section, account where section.admin_id = account.user_id";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                        return false;
                    } 
                    while($row=$result->fetch_array()){ ?>
                    <tr>
                        <td><?=$row['section_id']?></td>
                        <td><?=$row['grade']?></td>
                        <td><?=$row['section_size']?></td>
                        <td><?=$row['f_name']?></td>
                        <td><?=$row['regis_date']?></td>
                        <td style="background-color: #d23390; text-align: center;"><a href="delete.php?sectionid=<?=$row['section_id']?>">X</a></td>
                    </tr>
                <?php }?>
            </table>
		</div>
	    <div id="div_footer">  	
	</div>
</div>
</body>
</html>


