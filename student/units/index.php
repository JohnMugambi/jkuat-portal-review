<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Units</h5>
		</div>
		<div class="card-body">
            <table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="10%">
					<col width="20%">
					<col width="25%">
					<col width="30%">
					<col width="10%">

				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Unit Code</th>
						<th>Unit Name</th>
						<th>Unit Descritpion</th>
						<th>Registration Status</th>
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
						<td>
							<p>Approved</p>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Curriculum</h5>
		</div>
		<div class="card-body">
            <table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="10%">
					<col width="20%">
					<col width="25%">
					<col width="30%">
					<col width="5%">
					<col width="5%">


				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Unit Code</th>
						<th>Unit Name</th>
						<th>Unit Descritpion</th>
						<th>Year</th>
						<th>Sem</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$i = 1;
					$qry = $conn->query("SELECT * FROM tblUnits ");

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
						<td>
                            <small class="truncate"><?php echo $row['year'] ?></small>
                        </td>
						<td>
                            <small class="truncate"><?php echo $row['semester'] ?></small>
                        </td>
						
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>