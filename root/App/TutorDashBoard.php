<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/ExamDataService.php") ?>


<?php
// Start the session
session_start();
$_SESSION['Contact']=false;





if(!isset($_SESSION["UserId"]))
{
    header("Location: ../index.php");
}

if(isset($_POST['ViewProfile'])){
    header("Location: ./TutorProfile.php");
}

if(isset($_POST['EditProfile'])){
    header("Location: ./EditProfile.php");
}

if(isset($_POST['ViewResult'])){
    header("Location: ./TutorExamResultProfile.php");
}


if(isset($_POST['LogOutButton'])){
    session_destroy();
    header("Location: ../index.php");

}
$examNames=GetAllExamNames();
foreach ($examNames as $examName){

    if(isset($_POST[$examName['ExamName']])){
        $_SESSION['ExamName']=$examName['ExamName'];
        header("Location: ./ExamPage.php");
    }

}




?>



<?php

$tutor=getTutorbyId($_SESSION['UserId']);

$mail=$tutor['Email'];



?>
<html>

	<body>
	<head>
	<style>
	div.pp
		{
			padding-left: 25px;
			padding-top: 10px;
		}
		
		div.mail
		{
			padding-right: 25px;
			padding-bottom: 10px;
		}
		
		.dropbtn
		{
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
		}

	.dropdown
		{
    position: relative;
    display: inline-block;
		}

	.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 300px;
    box-shadow: 0px 12px 300px 0px rgba(0,0,0,0.2);
    z-index: 1;
		}

	.dropdown-content a {
    color: black;
    padding: 12px 30px;
    text-decoration: none;
    display: block;
		}

	.dropdown-content a:hover {background-color: #f1f1f1}

	.dropdown:hover .dropdown-content {
    display: block;
		}

	.dropdown:hover .dropbtn {
    background-color: #3e8e41;
	}
	</style>
	</head>
	<body>
    <form action = "" method = "post" style="overflow: hidden;">
	
	<div class="pp">  <h1>tutorsHUB</h1> </div>
	
		
		<div class="mail" align="right">
		<table>
		<tr>
			<td> <?php echo $mail; ?>
			</td>
			<td>&nbsp;</td>
			
			
			
			<td>
                <input type="submit" name="LogOutButton" value="Log Out" />
            </td>
		
		</tr>
		
		</table>
	
	</div>
	<hr>
	
		
		<br>
        <div  style="float: left; width:350px; border-right:2px solid #666666; margin-right:10px; display: block; ">
                <h1>PROFILE</h1>

                <input type="submit" name="EditProfile" value="Edit Profile" />
                <input type="submit" name="ViewProfile" value="View Profile" />
                <input type="submit" name="ViewResult" value="View Result" />

        </div>
        <div style="float:left; width:600px; ">Schedule</div>
        <div  style="float: right; width:350px; border-left:2px solid #666666; padding-left:10px; display: block;">
            <h1>EXAM</h1>
            <?php
            $examNames=GetAllExamNames();

            foreach ($examNames as $examName){
                echo "<input type='submit' name=$examName[ExamName] value=$examName[ExamName] />";

            }
            ?>


        </div>

    </form>
			<br/>
			<br/>
			

		
		

		
		
	</form>
	</body>
	
</html>
		