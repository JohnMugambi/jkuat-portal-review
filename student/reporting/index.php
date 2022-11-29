<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Reporting</h5>
		</div>
		<div class="card-body" style="display: flex; flex-direction:column;">
			<div style="display: flex; flex-direction:column;">
				<div>			
					<h5 class="card-title">Report for new session : </h5>
				</div>
				<div  style="margin-top: 10px;">
					<button class="btn btn-primary btn-sm" form="about_c">Report </button>
				</div>
				</div>
				<div style="display: flex; flex-direction:column; margin-top:20px;">
					<div style="margin-bottom:10px ;">
						<h5 class="card-title">Reported sessions </h5>
					</div>
					<div>
						<table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="10%">
					<col width="30%">
					<col width="30%">
					<col width="25%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Session</th>
						<th>Reporting status</th>
						<th>Report type</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$i = 1;
					$qry = $conn->query("SELECT * FROM tblSessionReporting WHERE reg_no='$reg_no'");

					if(!$qry){
					die(mysqli_error($conn));
					}
					while($row= $qry->fetch_assoc()):
						$row['id'] = strip_tags(stripcslashes(html_entity_decode($row['id'])));
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td>
                            <?php echo ucwords($row['session']) ?>
						</td>
						<td>
                            <p class=""><?php echo ucwords($row['report_status']) ?></p>
                        </td>
						<td>
							<!-- Report status -->
                        </td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
					</div>
				</div>
			</div>
			
	</div>
</div>