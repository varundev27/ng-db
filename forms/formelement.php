<section id="sitemap" class="sitemap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
				    <li><a href="dashboard.php">Dashboard</a></li>
				    <li class="active captilize">Form Element</li>
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
					<h3 class="heading">Form Elements <span class="text-xs text-light hide">You can add content here</span></h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="widget">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Switch Buttons</h4>
					</div>
					<div class="widget-content">
						<!-- Rectangular switch -->
						<label class="switch">
							<input type="checkbox">
							<div class="slider"></div>
						</label>
						<!-- Rectangular switch -->
						<label class="switch">
							<input type="checkbox">
							<div class="slider"></div>
						</label>
						<!-- Rounded switch -->
						<label class="switch">
							<input type="checkbox">
							<div class="slider round"></div>
						</label>
						<!-- Rounded switch -->
						<label class="switch">
							<input type="checkbox">
							<div class="slider round"></div>
						</label>
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<form class="widget">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Radio Buttons & Checkbox</h4>
					</div>
					<div class="widget-content">
						<div class="row form-group">
							<label class="col-sm-4">Checkbox</label>
							<div class="col-sm-8">
								<div class="checkbox-inline">
									<label><input type="checkbox" value="">Option 1</label>
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" value="" checked>Option 2</label>
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" value="">Option 3</label>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4">Disabled Checkbox</label>
							<div class="col-sm-8">
								<div class="checkbox-inline">
									<label><input type="checkbox" value="" checked disabled>Checked Disabled</label>
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" value="" disabled="">Disabled</label>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4">Radio Buttons</label>
							<div class="col-sm-8">
								<div class="radio-inline">
									<label><input type="radio" name="optradio">Option 1</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="optradio" checked>Option 2</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="optradio">Option 3</label>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4">Disabled Radio Buttons</label>
							<div class="col-sm-8">
								<div class="radio-inline">
									<label><input type="radio" name="optradio1" checked disabled>Option 2</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="optradio1" disabled>Option 3</label>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<div class="widget">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Select Box & Spinner</h4>
					</div>
					<div class="widget-content">
						<div class="row form-group">
							<label class="col-sm-4">Select Box</label>
							<div class="col-sm-8">
								<select class="form-control">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4">Multi Select Box</label>
							<div class="col-sm-8">
								<select multiple class="form-control">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4">Spinner</label>
							<div class="col-sm-8">
								<input type="number" name="" class="form-control">
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="widget">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Upload Buttons</h4>
					</div>
					<div class="widget-content">
						<div class="adon-group upload-file">
			                <label class="adon-btn adon-btn-left">
			                    <span class="v-btn v-btn-secondary radius-0">
			                        Browse&hellip; <input type="file" style="display: none;" multiple>
			                    </span>
			                </label>
			                <input type="text" class="form-control left" readonly>
			            </div>
			            <div class="adon-group upload-file">
			                <label class="adon-btn adon-btn-right">
			                    <span class="v-btn v-btn-primary radius-0">
			                        Browse&hellip; <input type="file" style="display: none;" multiple>
			                    </span>
			                </label>
			                <input type="text" class="form-control right" readonly>
			            </div>
			            <div class="adon-group upload-file">
			                <label class="adon-btn adon-btn-left">
			                    <span class="v-btn v-btn-secondary radius-0 outline">
			                        Browse&hellip; <input type="file" style="display: none;" multiple>
			                    </span>
			                </label>
			                <input type="text" class="form-control left" readonly>
			            </div>
			            <div class="adon-group upload-file">
			                <label class="adon-btn adon-btn-right">
			                    <span class="v-btn v-btn-primary radius-0 outline">
			                        Browse&hellip; <input type="file" style="display: none;" multiple>
			                    </span>
			                </label>
			                <input type="text" class="form-control right" readonly>
			            </div>
			        </div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="widget">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Upload Buttons Icons</h4>
					</div>
					<div class="widget-content">
						<div class="upload-file-icon inline">
			                <label class="">
			                    <span class="v-btn v-btn-primary radius-50 outline icon icon-md">
			                        <i class="fa fa-upload"></i><input type="file" style="display: none;" multiple>
			                    </span>
			                </label>
			                <span class="block text-xs">Upload File</span>
			            </div>
			            <div class="upload-file-icon inline">
			                <label class="">
			                    <span class="v-btn v-btn-danger radius-50 outline icon icon-md">
			                        <i class="fa fa-upload"></i><input type="file" style="display: none;" multiple>
			                    </span>
			                </label>
			                <span class="block text-xs">Upload File</span>
			            </div>
			            <div class="upload-file-icon inline">
			                <label class="">
			                    <span class="v-btn v-btn-dark radius-50 outline icon icon-md">
			                        <i class="fa fa-upload"></i><input type="file" style="display: none;" multiple>
			                    </span>
			                </label>
			                <span class="block text-xs" id="file-name">Upload File</span>
			            </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="widget">
					<div class="widget-header bdr-btm-1">
						<h4 class="widget-title">Auto Complete</h4>
					</div>
					<div class="widget-content" ng-controller="autoSuggest">
						<div class="auto-suggest-input">
							<input type="text" name="" class="form-control" ng-model="search" placeholder="Search for City">
							<div class="suggestion-box">
								<ul class="suggestion-list list">
									<li ng-repeat="x in data | filter:search"><a href="{{x.url}}">{{x.name}} <span class="pull-right"><b>{{x.state}}</b></span></a></li>
									<li><a href="#" class="active"><span class="text-xs">No more records found</span></a></li>
								</ul>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
