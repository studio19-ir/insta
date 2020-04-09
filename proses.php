<?php
error_reporting(1);
$user = $_POST['uname'];
if($user != ""){
	require_once 'instagram.php';
	$story = new instagram_story();

//Print info
    $story->getStory($user);
}else{
	echo '<div class="alert alert-danger alert-atas" ><strong><b>
Please enter a username...
	</b> </strong> </div><br><br>';
	die();
	}
?>
