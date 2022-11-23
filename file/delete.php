<?php
	$accountid = $_GET['accountid'];
	$courseid = $_GET['courseid'];
    $roomid = $_GET['roomid'];
    $sectionid = $_GET['sectionid'];
	require_once('connect.php');
	if (isset($accountid)) {
		$q="DELETE FROM account where user_ID=$accountid";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: show_account.php");
	}
	elseif(isset($courseid)) {
		$q="DELETE FROM course where course_id like '$courseid'";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: show_course.php");
	}
    elseif(isset($sectionid)) {
		$q="DELETE FROM section where section_id=$sectionid";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: show_section.php");
	}
    elseif(isset($roomid)) {
		$q="DELETE FROM room where room_id=$roomid";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: show_room.php");
	}

	elseif(isset($roomid) && isset($sectionid) && isset($courseid) && isset($accountid)) {
		$q="DELETE FROM booking where room_id=$roomid and section_id = $sectionid and course_id = $courseid and teacher_id = $accountid";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: show_room.php");
	}
?>
