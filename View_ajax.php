<?php
	include "con-flight.inc";
            $sql = "SELECT arcid, acType, adep, ades, eet, route FROM Flight";
            $result = mysqli_query($pripoj,$sql); // vyberie v?etko z tabu?ky
            if (!$result ) {
                die('Invalid query: ' . mysqli_error());
            }
            $pocet_riadkov = mysqli_num_rows($result); // vyberie po?et riadkov
            $pocet_stlpcov = mysqli_num_fields($result); // vyberie po?et st?pcov
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['arcid'];?></td>
			<td><?=$row['acType'];?></td>
			<td><?=$row['adep'];?></td>
			<td><?=$row['ades'];?></td>
            <td><?=$row['eet'];?></td>
            <td><?=$row['route'];?></td>
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}

?>
