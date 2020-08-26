<html>
	<head>
		<title>Restaurant</title>
	</head>
	
	<body>
		<img src="MARVEL.jpg" style="width:100%; height:100%; position:absolute; top:0; left:0; z-index:-5000;">
		<form action=""   method="post"   style="border:2px solid #a91cb0;   background-color: #a4f9ef7F;   text-align:center;">		
			<table align="center"   style=" font-style: italic;   font-size:20pt;   font-weight:Bold; ">
				<tr>
					<td>Enter Restaurant No: </td>
					<td> <input name="Serial_No" type="value"> </td>
				</tr>
				<tr>
					<td>Enter Restaurant Name: </td>
					<td> <input name="Name" type="text"> </td>
				</tr>
				<tr>
					<td>Enter Restaurant Address: </td>
					<td> <input name="Address" type="text"> </td>
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
				$a=$_REQUEST['Serial_No'];
				$b=$_REQUEST['Name'];
				$c=$_REQUEST['Address'];

				$q="insert into Restaurant values($a,'$b','$c')";
				$result=mysqli_query($con,$q);
			}

			if(isset($_REQUEST['y']))
			{
				$disp="select * from Restaurant";
				$result=mysqli_query($con,$disp);
				echo '<table border=10 align="center"   style="border:2px solid #a91cb0; background-color: #bebdf5; font-style: italic; font-size:18;">';
					echo '<tr><th>Serial_No</th><th>Name</th><th>Address</th></tr>';

					while($row=mysqli_fetch_array($result))
					{
						echo'<tr>';
							echo '<td>'.$row['Serial_No'].'</td>';
							echo '<td>'.$row['Name'].'</td>';
							echo '<td>'.$row['Address'].'</td>';
						echo'</tr>';

					}

				echo '</table>';
			}

			mysqli_close($con);
		?>

	</body>
</html>