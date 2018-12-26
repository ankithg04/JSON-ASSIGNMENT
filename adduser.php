<?php
include('include/header.php');
if((isset($_POST["username"]))&&(isset($_POST["Email"]))&&(isset($_POST["address"]))){

if(empty($_POST["username"])||empty($_POST["Email"])||empty($_POST["address"]))
	echo"<script>alert('hello');</script>";
else{
	$arraydata=array();
	$formatdata=array('username' =>$_POST["username"],'Email'=>$_POST["Email"],'address'=>$_POST["address"] );
	//$jsondata=json_encode($formatdata,JSON_PRETTY_PRINT);
	//$data=file_get_contents('one.csv');
	//$data.="\n".$_POST["username"].",".$_POST["Email"].",".$_POST["address"];
	if(file_exists('one.csv'))
	{
		$jsondata=file_get_contents('one.csv');
		$arraydata=json_decode($jsondata);
	}
	$arraydata[]=$formatdata;
	$jsondata=json_encode($arraydata);
	if(file_put_contents('one.csv', $jsondata))
		echo "<script>alert('SUCCESSFULL');</script>";
	else
		echo "<script>alert('UNSUCESSFULL');</script>";
}

	
}
	else
	{
		
	}
?>
<script type="text/javascript">
	document.getElementById("one").classList.remove('current_page_item');
	document.getElementById("two").classList.add('current_page_item');
</script>
<div id="main">
		<div id="welcome">
			<div class="title">
				<h2>Add User</h2>
			</div>
		</div>
	<div >
		<style type="text/css">
			th
			{
				padding-left: 240px
			}
			td
			{
				padding-left: 100px;
			}
			#button{
				width: 351px;
				height: 50px;
				font-size: 30px;
				font-family:  Source Sans Pro , sans-serif;
				font-weight: bold;
				background-color: #2980b9;
				    border: 0px solid rgba(255,255,255,0.08);

			}
		</style>
			<form  method="post">
				<table >
					<tr><th align="left">User Name</th><td><input type="text" name="username"></td></tr>	
					<tr><th align="left">Email id</th><td><input type="Email" name="Email"></td></tr>	
					<tr><th align="left">Address</th><td><textarea name ="address" cols="20px" ></textarea></td></tr>

					<tr><th colspan="2" align="center"><input id="button" type="submit" name="sub"></th></tr>
				</table>	

			</form>




	</div>	

		<div id="copyright">
			<span>Design by <a href="#">Ankith G</a>.</span>
		</div>
	</div>
</div>
</body>
</html>
