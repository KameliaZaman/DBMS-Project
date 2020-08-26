<html>
	<head>
		<title>Manager</title>
	</head>
	
	<body>
		<img src="MARVEL.jpg" style="width:100%; height:100%; position:absolute; top:0; left:0; z-index:-5000;">
		<form action=""   method="post"   style="border:2px solid #a91cb0;   background-color: #a4f9ef7F;   text-align:center;">		
				<table align="center"   style=" font-style: italic;   font-size:20pt;   font-weight:Bold; ">
					<tr>
						<td>Enter Manager ID: </td>
						<td> <input name="Id_No" type="value"> </td>
					</tr>
					<tr>
						<td>Enter Manager Name: </td>
						<td> <input name="Name" type="text"> </td>
					</tr>
					<tr>
						<td>Enter Restaurant No: </td>
						<td> <input name="Restaurant_No" type="value"> </td>
					</tr>
					<tr>
						<td>Enter Contact No: </td>
						<td> <input name="Contact_No" type="text"> </td>
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
				$c=$_REQUEST['Restaurant_No'];
				$d=$_REQUEST['Contact_No'];

				$q="insert into Manager values($a,'$b',$c,'$d')";
				$result=mysqli_query($con,$q);
			}

			if(isset($_REQUEST['y']))
			{
				$disp="select * from Manager";
				$result=mysqli_query($con,$disp);
				echo '<table border=10 align="center" style="border:2px solid #a91cb0; background-color: #bebdf5; font-style: italic; font-size:18;">';
					echo '<tr><th>Id_No</th><th>Name</th><th>Restaurant_No</th><th>Contact_No</th></tr>';

					while($row=mysqli_fetch_array($result))
					{
						echo'<tr>';
							echo '<td>'.$row['Id_No'].'</td>';
							echo '<td>'.$row['Name'].'</td>';
							echo '<td>'.$row['Restaurant_No'].'</td>';
							echo '<td>'.$row['Contact_No'].'</td>';
						echo'</tr>';

					}

				echo '</table>';
			}

			mysqli_close($con);
		?>

	</body>
</html>