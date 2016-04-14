<div class="row">		
	<div id="prefix_293579052339" class="app-alerts alert alert-danger fade in " role="alert" id="success-alert">
		<button class="close" aria-hidden="true" data-dismiss="alert" type="button"></button>
		<?= $this->Flash->render() ?>
	</div>
	<div class="col-md-12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="portlet box purple">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i>Add Job
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
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form id="form_sample_1" action="<?php echo SITE_URL;?>users/addjob" method="POST" class="form-horizontal">
					<div class="form-body">
						<div class="alert alert-danger display-hide">
							<button class="close" data-close="alert"></button>
							You have some form errors. Please check below.
						</div>									
						<div class="alert alert-success display-hide">
							<button class="close" data-close="alert"></button>
							Your form validation is successful!
						</div>

						<div class="col-md-6">								
							<div class="form-group">
								<label class="control-label col-md-4">Job Title
									<span class="required">*</span>
								</label>
								<div class="col-md-8">
									<input type="text" name="title" data-required="1" class="form-control" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4">Description
									<span class="required">*</span>
								</label>									    
								<div class="col-md-8">
									<input type="text" name="description" class="form-control" />
								</div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Job Ref.									    
								</label>

								<div class="col-md-8">
									<input type="text" name="job_ref" class="form-control" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4">Company Name										
								</label>
								<div class="col-md-8">
									<input type="text" name="company"  class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Salary										
								</label>
								<div class="col-md-8">
									<input type="text" name="salary"  class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Address										
								</label>
								<div class="col-md-8">
									<input type="text" name="address"  class="form-control"/>
								</div>
							</div>		


							<div class="form-group">
								<label class="control-label col-md-4">Email

								</label>
								<div class="col-md-8">
									<input type="text" name="email" class="form-control"/>
								</div>
							</div>
						</div>
						<div class="col-md-6"> 
							<div class="form-group">
								<label class="control-label col-md-4">URL										
								</label>
								<div class="col-md-8">
									<input type="text" name="web-url" class="form-control"/>
									<span class="help-block">
										e.g: http://www.demo.com or http://demo.com
									</span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4">Phone										
								</label>
								<div class="col-md-8">
									<input type="text" name="phone" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Contact Name										
								</label>
								<div class="col-md-8">
									<input type="text" name="contact" class="form-control"/>
								</div>
							</div>							

							<div class="form-group">
								<label class="control-label col-md-4">Advertised On									
								</label>
								<div class="col-md-8">
									<select class="form-control select2me" name="advertised_in">
										<option value="">Select...</option>
										<option value="Company">Company</option>
										<option value="Seek.com.au">Seek.com.au</option>
										<option value="News Paper">News Paper</option>												
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4">Advertised Date</label>

								<div class="col-md-8">
									<div class="input-group input-medium date datepicker" data-date="01-01-2016" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
										<input class="form-control" readonly="" type="text" name="advertised">
										<span class="input-group-btn">
											<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</input>
								</div>
								<!-- /input-group -->
								<span class="help-block">
									Select date
								</span>    

							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-md-4">Closing Date</label>
							<div class="col-md-8">
								<div class="input-group input-medium date datepicker" data-date="01-01-2016" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
									<input class="form-control" readonly="" type="text" name="closing">
										<span class="input-group-btn">
											<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</input>
								</div>
								<!-- /input-group -->
								<span class="help-block">
									Select date
								</span>    
							</div>
						</div>
					</div><!--End Form body -->
					<div>								 
						<div class="form-actions fluid">
							<div >
								<button type="submit" class="btn green">Submit</button>
								<button type="button" class="btn default">Cancel</button>
							</div>
						</div>
					</div>
				</form><!-- END FORM-->
			</div>				
		</div> <!-- End Box purple -->		
	</div><!-- END VALIDATION STATES-->
</div>
