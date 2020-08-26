<?php

	$con=mysqli_connect("localhost","root","","restaurant");

	$disp="select Restaurant.Serial_No,Restaurant.Name as RName,Restaurant.Address,Cashier.Id_No as CID,Cashier.Name as CName,Cashier.Restaurant_No,Manager.Id_No as MID,Manager.Name as MName,Manager.Restaurant_No,Manager.Contact_No from Restaurant inner join Cashier on Restaurant.Serial_No=Cashier.Restaurant_No inner join Manager on Restaurant.Serial_No=Manager.Restaurant_No";
	 


		$result=mysqli_query($con,$disp);
		echo '<table border=10 align="center" style="border:2px solid #a91cb0; background-color: #bebdf5; font-style: italic; text-align:center;font-size:18;">';
			echo '<tr><th>Serial_No</th><th>Restaurant Name</th><th>Address</th><th>Cashier Id_No</th><th>Cashier Name</th><th>Restaurant_No</th><th>Manager Id_No</th><th>Manager Name</th><th>Restaurant_No</th><th>Contact_No</th></tr>';

			while($row=mysqli_fetch_array($result))
			{
				echo'<tr>';
					echo '<td>'.$row['Serial_No'].'</td>';
					echo '<td>'.$row['RName'].'</td>';
					echo '<td>'.$row['Address'].'</td>';
					echo '<td>'.$row['CID'].'</td>';
					echo '<td>'.$row['CName'].'</td>';
					echo '<td>'.$row['Restaurant_No'].'</td>';
					echo '<td>'.$row['MID'].'</td>';
					echo '<td>'.$row['MName'].'</td>';
					echo '<td>'.$row['Restaurant_No'].'</td>';
					echo '<td>'.$row['Contact_No'].'</td>';
				echo'</tr>';

			}

		echo '</table>';

	mysqli_close($con);
?>