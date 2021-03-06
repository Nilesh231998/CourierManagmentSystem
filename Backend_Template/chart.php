<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Charts</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php include('header.php');?>
		<hr />
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li class="active">
		
									<strong>Charts</strong>
							</li>
							</ol>
					<h2>Charts</h2>
		
		<br />
		
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						<div class="panel-title">Morris Charts</div>
				
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td width="50%">
									<strong>Area Chart</strong>
									<br />
									<div id="chart10" style="height: 300px"></div>
								</td>
								<td>
									<strong>Line Chart</strong>
									<br />
									<div id="chart8" style="height: 300px"></div>
								</td>
							</tr>
						</tbody>
					</table>
					
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td width="50%">
									<strong>Bar Charts</strong>
									<br />
									
									<div id="chart3" style="height: 250px"></div>
								</td>
								<td>
									<strong>Bars Stacked</strong>
									<br />
									<div id="chart4" style="height: 250px"></div>
								</td>
							</tr>
						</tbody>
					</table>
					
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td width="33%">
									<strong>Donut Charts</strong>
									<br />
									<div id="chart5" style="height: 250px"></div>
								</td>
								<td width="33%">
									<strong>Colored</strong>
									<br />
									<div id="chart6" style="height: 250px"></div>
								</td>
								<td width="33%">
									<strong>Formatted</strong>
									<br />
									<div id="chart7" style="height: 250px"></div>
								</td>
							</tr>
						</tbody>
					</table>
					
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<strong>Line Chart</strong>
									<br />
									<div id="chart9" style="height: 300px"></div>
								</td>
							</tr>
						</tbody>
					</table>
				
				</div>
			
			</div>
		</div>
		
		
		
		<div class="row">
		</div>
		
		
		
		
		
		<div class="row">
			<div class="col-md-7">
				
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						<div class="panel-title">Peity Charts - Minimal Charts</div>
				
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th width="15%">Graph</th>
								<th>Data Type</th>
								<th width="30%">Total</th>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<td>
									<span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
								</td>
								<td>
									Realtime Stats - Currently Active Users
								</td>
								<td>
									<span class="label label-info">Online</span>
									<span id="peity-right-now">10 users</span>
								</td>
							</tr>
							
							<tr>
								<td>
									<span class="line">3,5,1,6,2,1,1,6,7</span>
								</td>
								<td>
									Visits
								</td>
								<td>
									16,436
								</td>
							</tr>
							
							<tr>
								<td>
									<span class="line">2,4,4,1,2,3,1,1,2,6,5,1,7,8,4,2,3</span>
								</td>
								<td>
									Unique Visits
								</td>
								<td>
									11,321
								</td>
							</tr>
							
							<tr>
								<td>
									<span class="bar">5,3,9,6,5,9,7,3,5,2,7,3,2,9,10,6,4,9,7,8</span>
								</td>
								<td>Bounce Rate</td>
								<td>35.42%</td>
							</tr>
							
							<tr>
								<td>
									<span class="bar">4,5,1,6,7,7,3,2,9,10,6,4,9,7,1,3,9,10,12</span>
								</td>
								<td>New Visits <span class="label label-success">3.39% Increase</span></td>
								<td>12.67%</td>
							</tr>
							
							<tr>
								<td>
									<span class="pie">60.1,39.9</span>
								</td>
								<td>
									New Visitor vs Returning Visitor
								</td>
								<td>
									60.1% / 39.9%
								</td>
							</tr>
							
							<tr>
								<td>
									<span class="pie">84.6,15.4</span>
								</td>
								<td>
									Direct vs Referral
								</td>
								<td>
									84.6% / 15.4%
								</td>
							</tr>
						</tbody>
					</table>
				
				</div>
			
			</div>
			
			<div class="col-md-5">
				
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						<div class="panel-title">Rickshaw Charts</div>
				
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					
					<div class="panel-body">
						
						<strong>Stacked Area</strong>
						<br />
						
						<div id="chart1"></div> 
						
					</div>
					
					
					<div class="panel-body">
						
						<strong>Mixture</strong>
						<br />
						
						<div id="chart2"></div> 
						
					</div>
					
				</div>
				
			</div>
		</div>
		
		
		
		<script type="text/javascript">
		jQuery(document).ready(function($) 
		{
			$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
			$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
			$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
			$('.bar-2').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
			$('.pie-2').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
			$('.linechart').sparkline();
		
		
			$(".pie-large").sparkline([3,2,5], {
				type: 'pie',
				width: '150px ',
				height: '150px',
				sliceColors: ['#ee4749', '#c13638','#fe9193']
				
			});
		
			$(".line-large").sparkline([5,6,7,9,10,5,3,4,5,4,6,7, ], {
				type: 'line',
				width: '320px ',
				height: '150px',
				lineColor: '#ff4e50',
				highlightLineColor: '#ff8889',
				highlightSpotColor: '#b22425',
				minSpotColor: '#ff4e50',
				maxSpotColor: '#ff4e50',
				fillColor: '#f79696',
				lineWidth: 2,
				spotRadius: 4.5,
				normalRangeColor: '#ed4949'
			});
		
		
			$(".bar-large").sparkline([5,6,7,2,1,0,4,3,5,7,2,4], {
				type: 'bar',
				barColor: '#ff6264',
				height: '150px',
				barWidth: 10,
				barSpacing: 2
			});			
		});
		</script>
		
		
		<h2>Sparkline Charts</h2>
		<br />
		
		<div class="row">
			<div class="col-md-12">
			
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">User Activity</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
						
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Activity</th>
								<th>Name</th>
								<th>Position</th>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<td><span class="inlinebar">4,3,5,4,5,6</span></td>
								<td>Art Ramadani</td>
								<td>CEO</td>
							</tr>
							
							<tr>
								<td><span class="inlinebar-3">5,3,2,5,4,5</span></td>
								<td>Arlind Nushi</td>
								<td>Co-Founder</td>
							</tr>
							
							<tr>
								<td><span class="inlinebar-2">1,3,4,5,3,5</span></td>
								<td>Filan Fisteku</td>
								<td>Member</td>
							</tr>
							
							<tr>
								<td><span class="bar-2">1:4,2:3,3:2,4:1</span></td>
								<td>Arber Nushi</td>
								<td>Manager</td>
							</tr>
							
							<tr>
								<td><span class="pie-2">3,4,6</span></td>
								<td>Eroll Maxhuni</td>
								<td>Developer</td>
							</tr>
		
							<tr>
								<td><span class="linechart">5,3,2,5,4,5,7,6,3</span></td>
								<td>Arjan Halili</td>
								<td>Pre-Press Designer</td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
		
		
		<div class="row">
		
			<div class="col-md-4">
			
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Large Chart Pie</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						<p>Was certainty remaining engrossed applauded sir how discovery. Bore tall nay many many time yet less. Doubtful for answered one fat indulged margaret sir shutters together. </p>
						<br />
						
						<div class="text-center">
							<span class="pie-large"></span>
						</div>
					</div>
				</div>
				
			</div>
		
			<div class="col-md-4">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Large Line Chart</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						<p>Was certainty remaining engrossed applauded sir how discovery. Bore tall nay many many time yet less. Doubtful for answered one fat indulged margaret sir shutters together. </p>
						<br />
						
						<div class="text-center">
							<span class="line-large"></span>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-md-4">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Large Bar Chart</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						<p>Was certainty remaining engrossed applauded sir how discovery. Bore tall nay many many time yet less. Doubtful for answered one fat indulged margaret sir shutters together. </p>
						<br />
						
						<div class="text-center">
							<span class="bar-large"></span>
						</div>
					</div>
				</div>
			</div>
		
		</div>
		
		
		<?php include('footer.php');?>
	</div>

		
	
	
	
	
</div>





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/jquery.peity.min.js"></script>
	<script src="assets/js/neon-charts.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>