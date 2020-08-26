<html>
	<head>
		<title>Item</title>
	</head>
	
	<body>
		<img src="MARVEL.jpg" style="width:100%; height:100%; position:absolute; top:0; left:0; z-index:-5000;">
		<form action=""   method="post"   style="border:2px solid #a91cb0;   background-color: #a4f9ef7F;   text-align:center;">		
			<table align="center"   style=" font-style: italic;   font-size:20pt;   font-weight:Bold; ">
				<tr>
					<td>Enter Item No: </td>
					<td> <input name="Item_No" type="value"> </td>
				</tr>
				<tr>
					<td>Enter Item Description: </td>
					<td> <input name="Description" type="text"> </td>
				</tr>
				<tr>
					<td>Enter Item Price: </td>
					<td> <input name="Price" type="text"> </td>
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
				$a=$_REQUEST['Item_No'];
				$b=$_REQUEST['Description'];
				$c=$_REQUEST['Price'];

				$q="insert into Item values($a,'$b','$c')";
				$result=mysqli_query($con,$q);
			}

			if(isset($_REQUEST['y']))
			{
				$disp="select * from Item";
				$result=mysqli_query($con,$disp);
				echo '<table border=10 align="center" style="border:2px solid #a91cb0; background-color: #bebdf5; font-style: italic; font-size:18;">';
					echo '<tr><th>Item_No</th><th>Description</th><th>Price</th></tr>';

					while($row=mysqli_fetch_array($result))
					{
						echo'<tr>';
							echo '<td>'.$row['Item_No'].'</td>';
							echo '<td>'.$row['Description'].'</td>';
							echo '<td>'.$row['Price'].'</td>';
						echo'</tr>';

					}

				echo '</table>';
			}

			mysqli_close($con);
		?>

	</body>
</html>