<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";

if(!isset($_SESSION["userName"]))
header("Location:index.php");

	$cn=getCon();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Management System | Dashboard</title>
<?php include('link.php');?>
</head>

	
	<?php include('header.php');?>
    	
		
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					
					
					<div class="panel-body">
					
					<div class="row">
			<div class="col-sm-12">
				<div class="well">
					<h1><?php echo date("M  d ,Y");?></h1>
				</div>
			</div>
		</div>
					
					
						<?php echo $msg;?>
								<?php
								//echo "TOTAL COURIER = ";
								$query="select count('courier_id')  from couriermast ";
								$rows=fectchRecored($query);
								//echo $rows[0] ;
								
								
								$query="select count('emp_id')  from employee ";
								$rows1=fectchRecored($query);
								//echo $rows1[0] ;
								
								$query="select count('suboffice_id')  from sub_branch ";
								$rows2=fectchRecored($query);
								//echo $rows2[0] ;
								
								$query="select count('client_id')  from clientmast ";
								$rows3=fectchRecored($query);
								//	echo $rows3[0] ;
									?>
									
		<div class="row">
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="<?php echo  $rows1[0];?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Employee </h3>
					<p>who update our services.</p>
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="<?php echo  $rows2[0];?>" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Total Branches</h3>
					<p>this is the average value.</p>
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php  echo $rows[0]?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Total Courier</h3>
					<p> till date courier.</p>
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
					<div class="num" data-start="0" data-end="<?php  echo $rows3[0]?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h3>Registered users</h3>
					<p>on our site right now.</p>
				</div>
		
			</div>
		</div>
									
<!--  chart 1 row complete -->	


<div class="row">
			<div class="col-sm-12">
		
				<div class="panel panel-primary" id="charts_env">
		
					<div class="panel-heading">
						<div class="panel-title">Months Reports</div>
		
						<div class="panel-options">
							<ul class="nav nav-tabs">
								<li class=""><a href="#area-chart" data-toggle="tab">Area Chart</a></li>
								<li class="active"><a href="#line-chart" data-toggle="tab">Line Charts</a></li>
								<li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li>
							</ul>
						</div>
					</div>
		
					<div class="panel-body">
		
						<div class="tab-content">
		
							<div class="tab-pane" id="area-chart">
								<div id="area-chart-demo" class="morrischart" style="height: 300px"></div>
							</div>
		
							<div class="tab-pane active" id="line-chart">
								<div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
							</div>
		
							<div class="tab-pane" id="pie-chart">
								<div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
							</div>
		
						</div>
		
					</div>
				</div>
		
			</div>
		
			
		</div>
<?php
$colorsArray = "'#707f9b', '#455064', '#242d3c', '#006666', '#009999', '#669999', '#669966'";
$q = "SELECT c1.courier_type_name,COUNT(*) as count FROM couriertype as c1, couriermast as c2 WHERE c1.courier_type_id = c2.courier_type_id group by c1.courier_type_id";
//echo $q;
$rs = executeQuery($q);
$strCourierType = "";
while($row = fetchAll($rs))
{
	$strCourierType.="{label: \"".$row['courier_type_name']."\", value: ".$row['count']."},";
}
$strCourierType=substr($strCourierType,0,strlen($strCourierType)-1);
?>
		
		<br />			
<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Sample Toastr Notification
			setTimeout(function()
			{
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
					"toastClass": "black",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
		
				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
			}, 222222222);
		
		
			// Sparkline Charts
			$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
			$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
			$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
			$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
			$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
			$('.linechart').sparkline();
			$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
			$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );
		
		
			$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
				type: 'bar',
				barColor: '#485671',
				height: '80px',
				barWidth: 10,
				barSpacing: 2
			});
		
		
			// JVector Maps
			var map = $("#map");
		
			map.vectorMap({
				map: 'europe_merc_en',
				zoomMin: '3',
				backgroundColor: '#383f47',
				focusOn: { x: 0.5, y: 0.8, scale: 3 }
			});
		
		
		
			// Line Charts
			var line_chart_demo = $("#line-chart-demo");
		
			var line_chart = Morris.Line({
				element: 'line-chart-demo',
				data: [
					{ y: '2013', a: 100, b: 90 },
					{ y: '2014', a: 75,  b: 65 },
					{ y: '2015', a: 50,  b: 40 },
					{ y: '2016', a: 75,  b: 65 },
					{ y: '2017', a: 50,  b: 40 },
					{ y: '2018', a: 75,  b: 65 },
					{ y: '2019', a: 100, b: 90 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['October 2020', 'November 2020'],
				redraw: true
			});
		
			line_chart_demo.parent().attr('style', '');
		
		
			// Donut Chart
			var donut_chart_demo = $("#donut-chart-demo");
		
			donut_chart_demo.parent().show();
		
			var donut_chart = Morris.Donut({
				element: 'donut-chart-demo',
				data: [
				<?php echo $strCourierType;?>
				],
				colors: [<?php echo $colorsArray;?>]
			});
		
			donut_chart_demo.parent().attr('style', '');
		
		
			// Area Chart
			var area_chart_demo = $("#area-chart-demo");
		
			area_chart_demo.parent().show();
		
			var area_chart = Morris.Area({
				element: 'area-chart-demo',
				data: [
					{ y: '2013', a: 100, b: 90 },
					{ y: '2014', a: 75,  b: 65 },
					{ y: '2015', a: 50,  b: 40 },
					{ y: '2016', a: 75,  b: 65 },
					{ y: '2017', a: 50,  b: 40 },
					{ y: '2018', a: 75,  b: 65 },
					{ y: '2019', a: 100, b: 90 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Series A', 'Series B'],
				lineColors: ['#303641', '#576277']
			});
		
			area_chart_demo.parent().attr('style', '');
		
		
		
		
			// Rickshaw
			var seriesData = [ [], [] ];
		
			var random = new Rickshaw.Fixtures.RandomData(50);
		
			for (var i = 0; i < 50; i++)
			{
				random.addData(seriesData);
			}
		
			var graph = new Rickshaw.Graph( {
				element: document.getElementById("rickshaw-chart-demo"),
				height: 193,
				renderer: 'area',
				stroke: false,
				preserve: true,
				series: [{
						color: '#73c8ff',
						data: seriesData[0],
						name: 'Upload'
					}, {
						color: '#e0f2ff',
						data: seriesData[1],
						name: 'Download'
					}
				]
			} );
		
			graph.render();
		
			var hoverDetail = new Rickshaw.Graph.HoverDetail( {
				graph: graph,
				xFormatter: function(x) {
					return new Date(x * 1000).toString();
				}
			} );
		
			var legend = new Rickshaw.Graph.Legend( {
				graph: graph,
				element: document.getElementById('rickshaw-legend')
			} );
		
			var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
				graph: graph,
				legend: legend
			} );
		
			setInterval( function() {
				random.removeData(seriesData);
				random.addData(seriesData);
				graph.update();
		
			}, 500 );
		});
		
		
		function getRandomInt(min, max)
		{
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		</script>


		
		
		<div class="row">
			<div class="col-sm-8">
				<div class="panel panel-primary panel-table">
					<div class="panel-body">	
					</div>
				</div>
				
			</div>
		</div>
		
		<script type="text/javascript">
		jQuery(document).ready(function($) 
		{
			// Sample Toastr Notification
			setTimeout(function()
			{			
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
					"toastClass": "black",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
		
				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
			}, 3000);
			
			// Sparkline Charts
			$(".top-apps").sparkline('html', {
			    type: 'line',
			    width: '50px',
			    height: '15px',
			    lineColor: '#ff4e50',
			    fillColor: '',
			    lineWidth: 2,
			    spotColor: '#a9282a',
			    minSpotColor: '#a9282a',
			    maxSpotColor: '#a9282a',
			    highlightSpotColor: '#a9282a',
			    highlightLineColor: '#f4c3c4',
			    spotRadius: 2,
			    drawNormalOnTop: true
			 });
		
			$(".monthly-sales").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5,4,5,6,7,8,6,7,6,3,2], {
				type: 'bar',
				barColor: '#ff4e50',
				height: '55px',
				width: '100%',
				barWidth: 8,
				barSpacing: 1
			});	
			
			$(".pie-chart").sparkline([2.5,3,2], {
			    type: 'pie',
			    width: '95',
			    height: '95',
			    sliceColors: ['#ff4e50','#db3739','#a9282a']
			});
		    
		    
			$(".daily-visitors").sparkline([1,5,5.5,5.4,5.8,6,8,9,13,12,10,11.5,9,8,5,8,9], {
			    type: 'line',
			    width: '100%',
			    height: '55',
			    lineColor: '#ff4e50',
			    fillColor: '#ffd2d3',
			    lineWidth: 2,
			    spotColor: '#a9282a',
			    minSpotColor: '#a9282a',
			    maxSpotColor: '#a9282a',
			    highlightSpotColor: '#a9282a',
			    highlightLineColor: '#f4c3c4',
			    spotRadius: 2,
			    drawNormalOnTop: true
			 });
		
		
			$(".stock-market").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5], {
			    type: 'line',
			    width: '100%',
			    height: '55',
			    lineColor: '#ff4e50',
			    fillColor: '',
			    lineWidth: 2,
			    spotColor: '#a9282a',
			    minSpotColor: '#a9282a',
			    maxSpotColor: '#a9282a',
			    highlightSpotColor: '#a9282a',
			    highlightLineColor: '#f4c3c4',
			    spotRadius: 2,
			    drawNormalOnTop: true
			 });
		
			 
			 $("#calendar").fullCalendar({
				header: {
					left: '',
					right: '',
				},
				
				firstDay: 1,
				height: 200,
			});
		});
		
		
		function getRandomInt(min, max) 
		{
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		</script>
		

				
					</div>
				
				</div>
			
			</div>
		</div>
	<?php include('footer.php');?>
	</div>
</div>



	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="../Backend_Template/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="../Backend_Template/assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="../Backend_Template/assets/js/gsap/main-gsap.js"></script>
	<script src="../Backend_Template/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../Backend_Template/assets/js/bootstrap.js"></script>
	<script src="../Backend_Template/assets/js/joinable.js"></script>
	<script src="../Backend_Template/assets/js/resizeable.js"></script>
	<script src="../Backend_Template/assets/js/neon-api.js"></script>
	<script src="../Backend_Template/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="../Backend_Template/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="../Backend_Template/assets/js/jquery.sparkline.min.js"></script>
	<script src="../Backend_Template/assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="../Backend_Template/assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="../Backend_Template/assets/js/raphael-min.js"></script>
	<script src="../Backend_Template/assets/js/morris.min.js"></script>
	<script src="../Backend_Template/assets/js/toastr.js"></script>
	<script src="../Backend_Template/assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="../Backend_Template/assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="../Backend_Template/assets/js/neon-demo.js"></script>



</body>



</html>