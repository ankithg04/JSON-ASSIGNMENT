<?php
include('include/header.php');
?>
<script type="text/javascript">
	document.getElementById("one").classList.remove('current_page_item');
	document.getElementById("two").classList.remove('current_page_item');
	document.getElementById("three").classList.add('current_page_item');
</script>
<div id="main">
		<div id="welcome">
			<div class="title">
				<h2>View User</h2>
				
			</div>
		</div>
	<div >
		<style type="text/css">
		table {
			width:100%;
			border-collapse: collapse;
			border: 1px solid black;
		}
		th{
			border-bottom:1px solid black;
			
			background-color:#2de4af  ;
		}
		td{
			
			background-color:  #feff00bd;
		}
		table,th,td{

				
			}
		}
			
		</style>
			<form  method="post">
				<table >
					<tr><th >User Name</th><th >Email</th><th>Address</th></tr>
					<?php
					$jsondata=file_get_contents('one.csv');
					$arraydata=json_decode($jsondata);
					foreach ($arraydata as $key => $value) {
						$i=0;
						echo '<tr>';
							foreach ($value as $key => $value) {
								$i++;
								if($i<=3)
									echo '<td>'.$value.'</td>';
							}
							echo "</tr>";
						}	

					?>
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
