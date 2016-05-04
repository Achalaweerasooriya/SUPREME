<!--new projects table-->
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-6">
            <h2>Assigned Projects Queue</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
						<thead>
                            <tr>
								<th>Project ID</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Dead Line</th>
								<th>Description</th>
								<th>Language</th>
								<th>Framework</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php foreach ($projectsqueue->result_array() as $row): ?>
							<tr>
								<td><?php echo $row['project_id'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['start_date'];?></td>
								<td><?php echo $row['deadline'];?></td>
								<td><?php echo $row['description'];?></td>
								<td><?php echo $row['language'];?></td>
								<td><?php echo $row['framework'];?></td>
                                                                <td><a href="<?php echo base_url();?>feedback_Controller/index" style="color: #000000;"><input type="button" value="FeedBack"/></a></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				</div>
		</div>
	</div>