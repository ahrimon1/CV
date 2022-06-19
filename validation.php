<?php
$username = "";
$passcheck = "";
$gendercheck = "";
$skillscheck = "tadas";
$deptcheck = "";
$addresscheck = "";
$isPost=false;


if(isset($_POST["loginbtn"]))
{
	$isPost=true;
	if($_POST["uname"]!=""){
		$username=$_POST["uname"];
	}
	if($_POST["pass"]!=""){
		$passcheck=$_POST["pass"];
	}
	
	
	if($_POST["dept"]!=""){
		$deptcheck=$_POST["dept"];
	}
	if($_POST["address"]!=""){
		$addresscheck=$_POST["address"];
	}
}
?>


<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">

<?php
if($isPost==true && $username =="")
{
		echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>

Password:<input type="password" id="pass" name="pass">

<?php
if($isPost==true && $passcheck =="")
{
		echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>

<?php
if (isset($_POST["gender"])){
		$gendercheck="True";
	}
?>

Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others


<?php
if($isPost==true && $gendercheck != "True")
{
		echo "<span style='color:red;'><small>Required</small></span>";
}
?>

<br><br>


<?php
if (isset($_POST["skills"])){
		$skillscheck ="True";
		
	}
?>

Skills:<input type="checkbox" name="skills[]" value="C++">C++ 
<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="Csharp">Csharp


<?php
if($isPost==true && $skillscheck != "True")
{
		echo "<span style='color:red;'><small>Required</small></span>";
}
?>

<br><br>
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select>

<?php
if($isPost==true && $deptcheck =="")
{
		echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>

Address:<textarea name="address" rowspan="4" colspan="30"></textarea>

<?php
if($isPost==true && $addresscheck =="")
{
		echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
<input type="submit" value="Log In" name="loginbtn"><br><br>





</form>