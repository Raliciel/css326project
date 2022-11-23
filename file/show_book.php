<?php require_once('connect.php');
$userid = $_COOKIE["idsharing"];   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking | CRWebsite</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
       Welcome Teacher
	</div>
	<div id="div_subhead">
        <ul id = "menu">
            <il><a href="add_book.php">Add Book</a></il>
            <il><a href="show_book.php">View Book</a></il>
        </ul>			
	</div>
	<div id="div_main">
        <div id= "div_left">
            <ul>
                <li><a href="accountprofile.php">Go to profile</a></li>
            </ul>
        </div>
        <div id="div_content" class="form"> 
            <?php 
                if(isset($_POST['submit'])) {
                    $courseid = $_POST['courseid'];
                    $sectionid = $_POST['sectionid'];
                    $roomid = $_POST['roomid'];
                    $teacherid = $_POST['teacherid'];
                    $bookdate = $_POST['bookdate'];
                    $starttime = $_POST['starttime'];
                    $endtime = $_POST['endtime'];
                    $createdate = $_POST['createdate'];
                    $q="INSERT INTO booking(course_id, section_id, room_id, teacher_id, book_date, book_strattime, book_endtime, create_date) 
                    VALUES ('$courseid' ,'$sectionid', '$roomid', '$teacherid', '$bookdate', '$starttime', '$endtime', '$createdate');";
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
                <col width="5%">
                <col width="5%">
                <col width="10%">
                <col width="30%">
                <col width="10%">
                <col width = "5%">
                <tr>
                    <th>Course ID</th>
                    <th>Section</th>
                    <th>Room</th>
                    <th>Building</th>
                    <th>Date</th>
                    <th>Create on</th>
                </tr>
                <?php
                    $q="select b.course_id, b.section_id, r.room_id, r.building_name, b.book_date, b.book_strattime, b.book_endtime, b.create_date 
                        from booking b join room r on b.room_id = r.room_id where b.teacher_id = $userid";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                        return false;
                    } 
                    while($row=$result->fetch_array()){ ?>
                    <tr>
                        <td><?=$row['course_id']?></td>
                        <td><?=$row['section_id']?></td>
                        <td><?=$row['room_id']?></td>
                        <td><?=$row['building_name']?></td>
                        <td><?=$row['book_date']?>: <?=$row['book_strattime']?> - <?=$row['book_endtime']?></td>
                        <td><?=$row['create_date']?></td>
                        <td style="background-color: #d23390; text-align: center;"><a href="delete.php?courseid=<?=$row['course_id']?>&sectionid=<?=$row['section_id']?>&roomid=<?=$row['room_id']?>&accountid=<?=$row['account_id']?>">X</a></td>
                    </tr>
                <?php }?>
            </table>
		</div>
	    <div id="div_footer">  	
	</div>
</div>
</body>
</html>


