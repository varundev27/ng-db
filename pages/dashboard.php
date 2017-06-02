<section id="sitemap" class="sitemap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
				    <li><a href="#">Home</a></li>
				    <li class="active">Dashboard</li>
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
					<h3 class="heading">Hi <span class="text-red">Varun,</span> Welcome back <span class="block text-xs text-light">Quick Analytic view</span></h3>
				</div>
			</div>
			<div class="col-sm-6">
				<ul class="inline pull-right">
					<li class="quick-report">
						<div class="quick-report-infos">
							<h4><span class="text-xs text-light block">New Order</span>17,456</h4>
						</div>
						<span class="chart-icon"><span class="inlinesparkline">1,4,4,7,5,9,10</span></span>
					</li>
					<li class="quick-report">
						<div class="quick-report-infos">
							<h4><span class="text-xs text-light block">My Balance</span>17,456</h4>
						</div>
						<span class="chart-icon"><span class="inlinesparkline">1,4,4,7,5,9,10</span></span>
					</li>
				</ul>
			</div>
		</div>
		<div class="row" ng-controller="stats">
			<div class="col-sm-6 col-md-3" ng-repeat="x in stats">
				<div class="widget stats bg-white relative">
					<ul class="widget-ctrl inline">
						<li><span><i class="fa fa-refresh"></i></span></li>
					</ul>
					<span class="icon icon-sm radius-50 stats-icon {{x.bgColor}}"><i class="fa {{x.icon}} text-white"></i></span>
					<h4 class="title"><span class="block uppercase text-light">{{x.title}}</span>{{x.total}}</h4>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-3">
				<div class="widget admin-follow text-center">
					<ul class="widget-ctrl inline">
						<li><span><i class="fa fa-refresh"></i></span></li>
						<li><span><i class="fa fa-expand"></i></span></li>
						<li><span><i class="fa fa-trash"></i></span></li>
					</ul>
					<img src="img/user.jpg" class="img-responsive radius-50">
					<h4>Varun Dev <span class="text-xs block">@varundev27</span></h4>
					<a href="" class="v-btn v-btn-primary btn-md block">Follow</a>
					<ul class="inline follow-icons">
						<li><a href="#" class="social fb"><i class="fa fa-facebook"></i></a><span class="block text-xs">1,234</span></li>
						<li><a href="#" class="social tw"><i class="fa fa-twitter"></i></a><span class="block text-xs">3,459</span></li>
						<li><a href="#" class="social gp"><i class="fa fa-google-plus"></i></a><span class="block text-xs">400</span></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="widget our-client" ng-controller="clientListController">
					<ul class="widget-ctrl inline">
						<li><span><i class="fa fa-refresh"></i></span></li>
						<li><span><i class="fa fa-expand"></i></span></li>
						<li><span><i class="fa fa-trash"></i></span></li>
					</ul>
					<div class="widget-header">
						<h4 class="widget-title">Our Client <span class="block text-xs text-light">Let's talk</span></h4>
					</div>
					<div class="widget-content pd-0">
						<form class="form-group">
							<div class="adon-group">
								<input type="" name="" ng-model="search" class="form-control" placeholder="Enter client name...">
								<span class="adon-btn adon-btn-right v-btn v-btn-default"><i class="fa fa-search"></i></span>
							</div>		
						</form>
						<div class="chat-list">
							<ul class="list">
								<li ng-repeat="x in data | filter:search">
									<a href="{{x.url}}" class="relative">
										<span class="chat-icon"><i class="fa fa-comment"></i></span>
										<span class="user-icon {{x.bgColor}}">{{x.firstLetter}}</span>
										<div class="client-info">
											<h4>{{x.clientName}} <span class="block text-xs text-light">{{x.desg}}</span></h4>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="widget">
					<div class="widget-header">
						<div class="widget-title">
							<h4 class="widget-title">Form Jumper</h4>
						</div>
					</div>
					<div class="widget-content">
						<div id="chartdiv3" class="amchart"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="widget total-sales relative">
					<ul class="widget-ctrl inline">
						<li><span><i class="fa fa-refresh"></i></span></li>
						<li><span><i class="fa fa-expand"></i></span></li>
						<li><span><i class="fa fa-trash"></i></span></li>
					</ul>
					<div class="widget-header">
						<h4 class="widget-title">Sales Analytic<span class="block text-xs text-light">Analytic view of sales</span></h4>
					</div>
					<div class="widget-content tbl">
						<div class="circle-chart">
							<div id="chartdiv23" class="amchart"></div>	
						</div>
						<div class="total-sales-info tbl-cell">
							<span class="text-xs text-light">Total sales made all time</span>
							<h4 class="widget-title">$12345</h4>
							<ul class="inline">
								<li><span class="block text-xs text-light">Target</span><h5>$3434</h5></li>
								<li><span class="block text-xs text-light">Today</span><h5>$3434</h5></li>
								<li><span class="block text-xs text-light">All Time</span><h5>$3434</h5></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="widget relative">
					<ul class="widget-ctrl inline">
						<li><span><i class="fa fa-refresh"></i></span></li>
						<li><span><i class="fa fa-expand"></i></span></li>
						<li><span><i class="fa fa-trash"></i></span></li>
					</ul>
					<div class="widget-header">
						<h4 class="widget-title">Activities <span class="block text-xs text-light">Your last activity is posted 4 hours ago</span></h4>
					</div>
					<div class="widget-content">
						<div id="chartdiv" class="amchart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<script type="text/javascript">
    $(function() {
        /** This code runs when everything has been loaded on the page */
        /* Inline sparklines take their values from the widget-contents of the tag */
        $('.inlinesparkline').sparkline(); 

        /* Sparklines can also take their values from the first argument 
        passed to the sparkline() function */
        var myvalues = [10,8,5,7,4,4,1];
        $('.dynamicsparkline').sparkline(myvalues);

        /* The second argument gives options such as chart type */
        $('.dynamicbar').sparkline(myvalues, {type: 'bar', barColor: 'green'} );

        /* Use 'html' instead of an array of values to pass options 
        to a sparkline with data in the tag */
        $('.inlinebar').sparkline('html', {type: 'bar', barColor: 'red'} );
    });
</script>

