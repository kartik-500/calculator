<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title>Calculator</title>
	<style>
	*{
			text-align: center;
			margin: 0;
			padding: 0;
	}
	body{

	}
	.outline{
	  margin: 0 auto;
	  display: block;
	  padding: 10px;
	  border: 2px solid grey ;
	  width: 50%;
	  margin-top: 15%;
	  padding-bottom: 5%;
	}
	input{
		margin: 5px auto;
		padding: 0 auto;
		display: block;
		margin-bottom: 5px;
	}
	.form-control{
		width: 50%;
		margin: 0 auto;
		text-align: center;
	}
	.btn-danger{
		margin: 5px auto;
	}
	</style>
</head>
<?php
$aErr = $bErr = $res = "";
if(isset($_POST['sub']))
{		if (empty($_POST["a"])) {
    	$aErr = "First Number is required";
    	return aErr;
  	}
		if (empty($_POST["b"])) {
    	$bErr = "Second Number is required";
    	return bErr;
  	}
	$txt1=$_POST['a'];
	$txt2=$_POST['b'];
	$oprnd=$_POST['sub'];
	
	if($oprnd=="Addition")
	$res=$txt1+$txt2;
	else if($oprnd=="Substraction")
		$res=$txt1-$txt2;
		else if($oprnd=="Multipliaction")
		$res=$txt1*$txt2;
		else if($oprnd=="Division")
			$res=$txt1/$txt2;
}
?>
<body class="outline">
<form method=post>
	<div class="container"></div>
	<font color="Blue" align="center">
		<h1 align="center"><b>Welcome to calculator</b>
		</h1>
	<input type="Number" name="a" placeholder="Enter the First Number" class="form-control" value="<?= $txt1 ?>">
	<span class="error"><?php echo $aErr;?></span>
	<input type="Number" name="b" placeholder="Enter the Second Number" class="form-control" value="<?= $txt2 ?>">
	<span class="error"><?php echo $bErr;?></span>
	<input type="Submit"  class="btn btn-default" name="sub" value="Addition">	
	<input type="Submit"  class="btn btn-default" name="sub" value="Substraction">	
	<input type="Submit"  class="btn btn-default" name="sub" value="Multipliaction">	
	<input type="Submit"  class="btn btn-default" name="sub" value="Division">
	</center>
	<?php echo "<br><input type='text' value='$res' class='form-control'/>";
	?>