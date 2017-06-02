<section id="sitemap" class="sitemap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
				    <li><a href="dashboard.php">Dashboard</a></li>
				    <li class="active captilize">Form Validation</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="dashboard-page" class="wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<div class="page-heading">
					<h3 class="heading">Form Validation <span class="text-xs text-light hide">You can add content here</span></h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<form class="widget" name="myForm">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Form Validation - </h4>
					</div>
					<div class="widget-content">
						<div class="row form-group">
							<div class="col-sm-12">
								<label>Your Name</label>
								<input type="text" name="myName" ng-model="myName" ng-minlength="4" class="form-control" placeholder="" required>
								<div class="ng-error" ng-show="myForm.myName.$dirty && myForm.myName.$invalid">
									<span ng-show="myForm.myName.$error.required">Name is required.</span>
									<span  ng-show="myForm.myName.$error.minlength">Weak</span>
								</div>
							</div>							
						</div>
						<div class="row form-group">
							<div class="col-sm-12">
								<label>Email</label>
								<input type="email" name="myEmail" ng-model="myEmail" class="form-control" placeholder="" required>
								<div class="ng-error" ng-show="myForm.myEmail.$dirty && myForm.myEmail.$invalid">
									<span  ng-show="myForm.myEmail.$error.required">Email is required.</span>
									<span  ng-show="myForm.myEmail.$error.email">Invalid email address.</span>
								</div>
							</div>
						</div>
						<div class="row form-group">							
							<div class="col-sm-12">
								<label>Contact</label>
								<input type="number" name="myContact" ng-model="myContact" ng-minlength="10" ng-maxlength="10" class="form-control" placeholder="" required>
								<div class="ng-error" ng-show="myForm.myContact.$dirty && myForm.myContact.$invalid">
									<span  ng-show="myForm.myContact.$error.required">Contact is required.</span>
									<span  ng-show="myForm.myContact.$error.minlength">Invalid Contact</span>
									<span  ng-show="myForm.myContact.$error.maxlength">Invalid Contact</span>
								</div>
							</div>
						</div>
						<div class="row form-group">							
							<div class="col-sm-12">
								<label>Business Type</label>
								<select class="form-control">
									<option>Individual</option>
									<option>Commercial</option>
									<option>Organisation</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-12">
								<label>Select your Location</label>
								<div class="checkbox">
									<label><input type="checkbox" value="">Delhi</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Mumbai</label>
								</div>
								<div class="checkbox disabled">
									<label><input type="checkbox" value="" disabled>Tamilnaidu</label>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-12">
								<label>Choose your jobs</label>
								<div class="radio">
									<label><input type="radio" name="optradio">Freelancer</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="optradio">Full Time</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio" disabled>Partime</label>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-12">
								<label for="sel1">Select list:</label>
							  	<select multiple class="form-control" id="sel1">
								    <option>1</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-12">
								<label>Message</label>
								<textarea class="form-control" placeholder="Message" rows="4"></textarea>
							</div>
						</div>
					</div>
					<div class="widget-footer">
						<button class="v-btn v-btn-primary">Send</button>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<form class="widget">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Inline Form</h4>
					</div>
					<div class="widget-content">
						<div class="row form-group">
							<div class="col-sm-4">
								<label>First Name</label>
								<input type="text" name="" class="form-control" placeholder="First Name" required>
							</div>
							<div class="col-sm-4">
								<label>Middle Name</label>
								<input type="text" name="" class="form-control" placeholder="Last Name" required>
							</div>
							<div class="col-sm-4">
								<label>Last Name</label>
								<input type="text" name="" class="form-control" placeholder="Middle Name" required>
							</div>							
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label>Email</label>
								<input type="email" name="" class="form-control" placeholder="" required>
							</div>
							<div class="col-sm-4">
								<label>Contact</label>
								<input type="number" name="" class="form-control" placeholder="" required>
							</div>
							<div class="col-sm-4">
								<label>Business Type</label>
								<select class="form-control">
									<option>Individual</option>
									<option>Commercial</option>
									<option>Organisation</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4">Select your Location</label>
							<div class="col-sm-8">
								<div class="checkbox-inline">
									<label><input type="checkbox" value="">Delhi</label>
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" value="">Mumbai</label>
								</div>
								<div class="checkbox-inline disabled">
									<label><input type="checkbox" value="" disabled>Tamilnaidu</label>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4">Select your Location</label>
							<div class="col-sm-8">
								<div class="radio-inline">
									<label><input type="radio" name="optradio">Freelancer</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="optradio">Full Time</label>
								</div>
								<div class="radio-inline disabled">
									<label><input type="radio" name="optradio" disabled>Partime</label>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-12">
								<label for="sel1">Select list:</label>
							  	<select multiple class="form-control" id="sel1">
								    <option>1</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-12">
								<label>Message</label>
								<textarea class="form-control" placeholder="Message" rows="4"></textarea>
							</div>
						</div>
					</div>
					<div class="widget-footer">
						<button class="v-btn v-btn-primary">Send</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form class="widget" action="">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Horizontal Form</h4>
					</div>
					<div class="widget-content">
						<div class="row form-group">
							<label class="col-sm-2 text-right">Full Name</label>
							<div class="col-sm-2">
								<input type="text" name="name" class="form-control" placeholder="Name">
							</div>
							<label class="col-sm-2 text-right">Your Email</label>
							<div class="col-sm-2">
								<input type="email" name="email" class="form-control" placeholder="Email">
							</div>
							<label class="col-sm-2 text-right">Add Contact</label>
							<div class="col-sm-2">
								<input type="nubmer" name="contact" class="form-control" placeholder="Contact">
							</div>
						</div>
					</div>
					<div class="widget-footer text-right">
						<button class="v-btn v-btn-primary">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>