<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Timetable</h5>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="5%">
					<col width="10%">
					<col width="5%">
					<col width="5%">
					<col width="15%">
					<col width="10%">
					<col width="15%">
				</colgroup>
				<!-- course name -->
						
            	<small class="truncate"><?php echo $course ?></small>
                        
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Day</th>
						<th>From</th>
						<th>To</th>
						<th>Lecturer</th>
						<th>Unit code</th>
						<th>Unit name</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$i = 1;
					$qry = $conn->query("SELECT * FROM tblTimetable WHERE year=$academic_year && semester=$semester ");

					while($row= $qry->fetch_assoc()):
						$row['id'] = strip_tags(stripcslashes(html_entity_decode($row['id'])));
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<!-- day -->
						<td><?php echo ucwords($row['day']) ?></td>
						<!-- from -->
						<td>
                            <?php echo ucwords($row['time_start']) ?>
						</td>
						<!-- time to -->
						<td>
                            <p class=""><?php echo ucwords($row['time_end']) ?></p>
                        </td>
						<!-- Lecturer -->
						<td>
							<?php echo ucwords($row['lecturer']) ?>
                        </td>
						<!-- unit code -->
						<td>
                            <?php echo ucwords($row['unit_code']) ?>
                        </td>
						<!-- unit name -->
						<td>
                            <p class=""><?php echo ucwords($row['unit_name']) ?></p>
                        </td>
						
						
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>