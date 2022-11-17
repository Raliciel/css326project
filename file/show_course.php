<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Course | CRWebsite</title>
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
                <li><a href="add_course.php">Add</a></li>
                <li><a href="show_course.php">Show</a></li>
                <li><a href="accountprofile.php">Go to profile</a></li>
            </ul>
        </div>
		<div id="div_content" class="form"> 
            <?php 
                if(isset($_POST['submit'])) {
                    $courseid = $_POST['courseid'];
                    $coursename = $_POST['coursename'];
                    $grade = $_POST['coursegrade'];
                    $teacher = $_POST['courseteacher'];
                    $regisdate = $_POST['regisdate'];
                    $userid = $_COOKIE["idsharing"]; 
                    #problem is in sql file, `course_id`,`course_name`, 'grade_to_learn`,`teacher_id', `regis_date` and WE'RE MISSING ADMIN_ID
                    $q="INSERT INTO course(course_id, course_name, grade_to_learn, teacher_id, regis_date, admin_id) 
                    VALUES ('$courseid' ,'$coursename', '$grade', '$teacher', '$regisdate', '$userid');";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "INSERT failed. Error: ".$mysqli->error ;
                        return false;
                    }
                }
            ?>
            <h2>Course</h2>

            <table>
                <col width="10%">
                <col width="20%">
                <col width="5%">
                <col width="20%">
                <col width="20%">
                <col width="10%">
                <col width = "5%">
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Grade</th>
                    <th>Teacher</th>
                    <th>Admin</th>
                    <th>Register Date</th>
                </tr>
                <?php
                    $q="select c.course_id, c.course_name, c.grade_to_learn, c.teacher_id, teacher.f_name as teacher_name, c.admin_id, admin.f_name as admin_name, c.regis_date from course c join account admin join account teacher where c.admin_id = admin.user_id and c.teacher_id = teacher.user_id";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                        return false;
                    } 
                    while($row=$result->fetch_array()){ ?>
                    <tr>
                        <td><?=$row['course_id']?></td>
                        <td><?=$row['course_name']?></td>
                        <td><?=$row['grade_to_learn']?></td>
                        <td><?=$row['teacher_name']?></td>
                        <td><?=$row['admin_name']?></td>
                        <td><?=$row['regis_date']?></td>
                        <td style="background-color: #d23390; text-align: center;"><a href="delete.php?courseid=<?=$row['course_id']?>">X</a></td>
                    </tr>
                <?php }?>
            </table>
		</div>
	    <div id="div_footer">  	
	</div>
</div>
</body>
</html>


