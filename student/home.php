<?php 
    
?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
        <div class="card-header">
			<h5 class="card-title " style="font-weight: bolder;">Your details</h5>
		</div>
		<div class="card-body">
            <p style="font-size:0.9rem ;">Registration no :<?php echo "
            $reg_no"
            ?></p>
            <p>Programme :<?php echo "
            $course"
            ?></p>
            <p>Current academic year : <?php echo "
            $academic_year "
            ?></p>
            <p>Current semester : <?php echo "
            $semester "
            ?></p>
		</div>
	</div>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h5 class="card-title" style="font-weight: bolder;" >Current Registered units :</h5>
        </div>
		<div class="card-body">
            <table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="10%">
					<col width="20%">
					<col width="25%">
					<col width="40%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Unit Code</th>
						<th>Unit Name</th>
						<th>Unit Descritpion</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$i = 1;
					$qry = $conn->query("SELECT * FROM tblUnits WHERE semester=$semester && year=$academic_year");

					while($row= $qry->fetch_assoc()):
						$row['unit_description'] = strip_tags(stripcslashes(html_entity_decode($row['unit_description'])));
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td>
                            <?php echo ucwords($row['unit_code']) ?>
						</td>
						<td>
                            <p class=""><?php echo ucwords($row['unit_name']) ?></p>
                        </td>
						<td>
                            <small class="truncate"><?php echo $row['unit_description'] ?></small>
                        </td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

