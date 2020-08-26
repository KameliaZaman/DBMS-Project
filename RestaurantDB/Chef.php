<html>
	<head>
		<title>Chef</title>
	</head>
	
	<body>
		<img src="MARVEL.jpg" style="width:100%; height:100%; position:absolute; top:0; left:0; z-index:-5000;">
		<form action=""   method="post"   style="border:2px solid #a91cb0;   background-color: #a4f9ef7F;   text-align:center;">		
			<table align="center"   style=" font-style: italic;   font-size:20pt;   font-weight:Bold; ">
				<tr>
					<td>Enter Chef ID: </td>
					<td> <input name="Id_No" type="value"> </td>
				</tr>
				<tr>
					<td>Enter Chef Name: </td>
					<td> <input name="Name" type="text"> </td>
				</tr>

				<tr>
					<td> <input name="x" type="submit" value="SAVE">
					 <input name="y" type="submit" value="DISPLAY"> </td>
				</tr>

			</table>
		</form>

		<?php

			$con=mysqli_connect("localhost","root","","restaurant");
		
			if(isset($_REQUEST['x']))
			{
				$a=$_REQUEST['Id_No'];
				$b=$_REQUEST['Name'];

				$q="insert into Chef values($a,'$b')";
				$result=mysqli_query($con,$q);
			}

			if(isset($_REQUEST['y']))
			{				
				$disp="select * from Chef";
				$result=mysqli_query($con,$disp);
				echo '<table border=10 align="center"   style="border:2px solid #a91cb0; background-color: #bebdf5; font-style: italic; font-size:18;">';
					echo '<tr><th>Id_No</th><th>Name</th></tr>';

					while($row=mysqli_fetch_array($result))
					{
						echo'<tr>';
							echo '<td>'.$row['Id_No'].'</td>';
							echo '<td>'.$row['Name'].'</td>';
						echo'</tr>';

					}

				echo '</table>';
			}

			mysqli_close($con);
		?>

	</body>
</html>