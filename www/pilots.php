<?php

include('connection.php');

// Pilot info in the table. 
// id
// photo
// firstName
// lastName
// callsign
// about
// favoritePlane
// quote
// sponsors
// youTube
// instagram
// field1
// field2
// field3

if($_GET['action'] == 'add_pilot')
{
	$sql = "INSERT INTO pilots VALUES(
	'',
	'images/shane_mcdowell.jpg',
	'Shane',
	'McDowell',
	'flashgangster',
	'Shane is the co-founder of Dallas FPV Wing Club. Shane is best-known for his durability testing of Team Legit wings.',
	'Team Legit FG36 / Team Legit FOHDY',
	'\"Put your hands on the oodles of noodles\" - Blue Streak',
	'Team Legit',
	'http://youtube.com/users/flashgangster|Flashgangster',
	'http://instagram.com/flashgangster|@flashgangster',
	'',
	'',
	'')";
	
	if ($conn->query($sql) === TRUE)
	{
		echo "New record created successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();	
}
else
{
	
	if($_GET['pilotID'] == null)
	{
		$sql = "SELECT * FROM pilots";
	}
	else 
	{
		$sql = "SELECT * FROM pilots WHERE ID='" . $_GET['pilotID'] . " ORDER BY ID";
	}
	
	$result = $conn->query($sql);
		
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) 
		{
?>

					<tr>
						<td><a href='<?php echo '?pilotID=' . $row['id']; ?>'><img src='<?php echo $row['photo']; ?>' width='150px'></a></td>
						<td valign='top'>
							<h2>Callsign: <?php echo $row['callsign']; ?></h2>
							<table cellpadding='5' cellspacing='3'>
								<tr style='background:#F2F2F2;'>
									<td width='150px'><b>About:</b></td><td><?php echo $row['about']; ?></td>
								</tr>
								<tr style='background:#F2F2F2;'>
									<td width='150px'><b>Favorite plane:</b></td><td><?php echo $row['favoritePlane']; ?></td>
								</tr>
								<tr style='background:#F2F2F2;'>
									<td><b>Quote:</b></td><td><?php echo $row['quote']; ?></a></i></td>
								</tr>
								<tr style='background:#F2F2F2;'>
									<td><b>Sponsors:</b></td><td><a href='' target='blank'><?php echo $row['sponsors']; ?></a></td>
								</tr>
								<tr style='background:#F2F2F2;'>
									<td><b>YouTube</b></td><td>
									<?php 
										$youTube = explode("|",$row['youTube']);
									?>
										<a href='<?php echo $youTube[0]; ?>' target='blank'><?php echo $youTube[1]; ?></a>
									</td>
								</tr>																
								<tr style='background:#F2F2F2;'>
									<td><b>Instagram</b></td><td>
										<?php
											$instagram = explode("|",$row['instagram']);
										?>
										<a href='<?php echo $instagram[0]; ?>' target='blank'><?php echo $instagram[1]; ?></a></td>
								</tr>								 
							</table>
						</td>
					</tr>

<?
		}
	}
}

?>