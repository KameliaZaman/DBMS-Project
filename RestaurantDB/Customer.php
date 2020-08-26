<html>
	<head>
		<title>Customer</title>
	</head>
	
	<body>
		<img src="MARVEL.jpg" style="width:100%; height:100%; position:absolute; top:0; left:0; z-index:-5000;">		
		<form action=""   method="post"   style="border:2px solid #a91cb0;   background-color: #a4f9ef7F;   text-align:center;">		
			<table align="center"   style=" font-style: italic;   font-size:20pt;   font-weight:Bold; ">
				<tr>
					<td>Enter Customer Name: </td>
					<td> <input name="Name" type="text"> </td>
				</tr>
				<tr>
					<td>Enter Customer Address: </td>
					<td> <input name="Address" type="text"> </td>
				</tr>
				<tr>
					<td>Enter Contact No: </td>
					<td> <input name="Contact_No" type="text"> </td>
				</tr>
				<tr>
					<td>Enter Bill No: </td>
					<td> <input name="Bill_No" type="value"> </td>
				</tr>
				<tr>
					<td>Enter Manager No: </td>
					<td> <input name="Manager_No" type="value"> </td>
				</tr>
				<tr>
					<td>Enter Waiter No: </td>
					<td> <input name="Waiter_No" type="value"> </td>
				</tr>

				<tr>
					<td> <input name="x" type="submit" value="SAVE"><input name="y" type="submit" value="DISPLAY"> </td>
				</tr>
			</table>
		</form>

		<?php

			$con=mysqli_connect("localhost","root","","restaurant");
			
			if(isset($_REQUEST['x']))
			{
				$a=$_REQUEST['Name'];
				$b=$_REQUEST['Address'];
				$c=$_REQUEST['Contact_No'];
				$d=$_REQUEST['Bill_No'];
				$e=$_REQUEST['Manager_No'];
				$f=$_REQUEST['Waiter_No'];

				$q="insert into Customer values('$a','$b','$c',$d,$e,$f)";
				$result=mysqli_query($con,$q);
			}
			
			if(isset($_REQUEST['y']))
			{
				$disp="select * from Customer";
				$result=mysqli_query($con,$disp);
				echo '<table border=10   align="center"   style="border:2px solid #a91cb0;   background-color: #bebdf5;   font-style: italic;   font-size:18;">';
					echo '<tr><th>Name</th><th>Address</th><th>Contact_No</th><th>Bill_No</th><th>Manager_No</th><th>Waiter_No</th></tr>';

					while($row=mysqli_fetch_array($result))
					{
						echo'<tr>';
							echo '<td>'.$row['Name'].'</td>';
							echo '<td>'.$row['Address'].'</td>';
							echo '<td>'.$row['Contact_No'].'</td>';
							echo '<td>'.$row['Bill_No'].'</td>';
							echo '<td>'.$row['Manager_No'].'</td>';
							echo '<td>'.$row['Waiter_No'].'</td>';
						echo'</tr>';
					}

				echo '</table>';
			}

			mysqli_close($con);
		?>

	</body>
</html>