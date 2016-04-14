<script>
	function del(id){
		var add = 'http://localhost/job/users/delete/' + id;
		$.post(add, {success:function(response){
								alert('success');},
					error: function(){
							alert('error');}
					}); 	
}
</script>


			<div class="row">
				<div class="col-md-12">
					<!-- ajax -->
							<div id="ajax-modal" class="modal fade" tabindex="-1">
							</div>
<!-- BEGIN PAGE CONTENT-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Applied Jobs List
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
									<form action="<?php echo SITE_URL;?>users/addjob" method="get">
									<button id="sample_editable_1_new" class="btn green">										
									New Job    <i class="fa fa-plus"></i></a>
									</button>
									</form>
								</div>
								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">
												 Print
											</a>
										</li>
										<li>
											<a href="#">
												 Save as PDF
											</a>
										</li>
										<li>
											<a href="#">
												 Export to Excel
											</a>
										</li>
									</ul>
								</div>
							</div>
							<?php if(!$job) 
								echo 'Sorry No jobs exists!!';
							else { ?>
							<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
									<tr>
										<th>
											 Job title
										</th>
										<th>
											Description
										</th>
										<th>
											 Company	
										</th>
										<th>
											 Job refrence
										</th>
										<th>
											 Applied 
										</th>
										<th>
											 &nbsp;
										</th>
									</tr>
								</thead>
							<tbody>
								<?php foreach ($job as $j){?>								
									<tr class="odd gradeX">
										<td>
											<?php echo $j->title; ?>
										</td>
										<td>
											<?php echo substr($j->description,0,100).' ...'; ?>
											<a class="btn default" href="#responsive" data-toggle="modal">
										 		view more
											</a>
											<!--a href="<?php echo SITE_URL;?>/users/joblist/<?php echo $j->id;?>"><i>view more</i></a-->
										</td>
										<td>
											<?php echo $j->company; ?>
										</td>
										<td>
											 <?php echo $j->job_ref; ?>
										</td>
										<td class="center">
											 <?php echo $j->advertised; ?>
										</td>
										<td>									
											<a href="#" class="btn btn-sm default">
												Edit <i class="fa fa-edit"></i>
											</a>
											<a onclick="del(<?php echo $j->id; ?>)" class="btn btn-sm default">
												Delete <i class="fa fa-times"></i>
											</a>								
										</td>
									</tr>
									<?php } ?>
									<tr>
										<?php $this->Paginator->numbers(); ?>
									</tr>						
							</tbody>							
							</table>
							<?php } ?> <!-- End Else-->
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
							<!-- responsive -->
							<div id="responsive" class="modal fade" tabindex="-1" data-width="760">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Responsive</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-6">
											<h4>Some Input</h4>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
										</div>
										<div class="col-md-6">
											<h4>Some More Input</h4>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
											<p>
												<input class="form-control" type="text">
											</p>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
									<button type="button" class="btn blue">Save changes</button>
								</div>
							</div>
				</div>
			</div>



