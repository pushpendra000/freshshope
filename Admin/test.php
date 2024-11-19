<?php
		$sql="SELECT * FROM tbl_team";
		$tbl=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($tbl))
		{		
		?>
			<option value="<?php echo $row["Team_id"]; ?>"<?php if(isset($_REQUEST["ddteamShow"]) && $_REQUEST["ddteamShow"]== $row["Team_id"]) echo 'selected' ?> ><?php echo $row["Team_name"]; ?></option>

		<?php
		}	
		?>
		</select>	