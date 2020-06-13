	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<link rel="stylesheet" href="../Backend_Template/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="../Backend_Template/assets/css/bootstrap.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/neon-core.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/neon-theme.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/neon-forms.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/custom.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/skins/cafe.css">
	<script src="../Backend_Template/assets/js/jquery-1.11.0.js"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

<script type="text/javascript">
		var responsiveHelper;
		var breakpointDefinition = {
		    tablet: 1024,
		    phone : 480
		};
		var tableContainer;
		
			jQuery(document).ready(function($)
			{
				tableContainer = $("#table-1");
				
				tableContainer.dataTable({
					"sPaginationType": "bootstrap",
					"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
					"bStateSave": true,
					
		
				    // Responsive Settings
				    bAutoWidth     : false,
				    fnPreDrawCallback: function () {
				        // Initialize the responsive datatables helper once.
				        if (!responsiveHelper) {
				            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
				        }
				    },
				    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				        responsiveHelper.createExpandIcon(nRow);
				    },
				    fnDrawCallback : function (oSettings) {
				        responsiveHelper.respond();
				    }
				});
				
				$(".dataTables_wrapper select").select2({
					minimumResultsForSearch: -1
				});
			});
		</script>
		

<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var table = $("#table-4").dataTable({
					"sPaginationType": "bootstrap",
					"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
					"oTableTools": {
					},
					
				});
			});
				
		</script>
        
        
		
		<script type="text/javascript">
		jQuery(window).load(function()
		{
			var $ = jQuery;
			
			$("#table-2").dataTable({
				"sPaginationType": "bootstrap",
				"sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },
					null,
					null,
					null,
					null
				]
			});
			
			$(".dataTables_wrapper select").select2({
				minimumResultsForSearch: -1
			});
			
			// Highlighted rows
			$("#table-2 tbody input[type=checkbox]").each(function(i, el)
			{
				var $this = $(el),
					$p = $this.closest('tr');
				
				$(el).on('change', function()
				{
					var is_checked = $this.is(':checked');
					
					$p[is_checked ? 'addClass' : 'removeClass']('highlight');
				});
			});
			
			// Replace Checboxes
			$(".pagination a").click(function(ev)
			{
				replaceCheckboxes();
			});
		});
			
		// Sample Function to add new row
		var giCount = 1;
		
		function fnClickAddRow() 
		{
			$('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount+".2", giCount+".3", giCount+".4", giCount+".5" ]);
			
			replaceCheckboxes(); // because there is checkbox, replace it
			
			giCount++;
		}
		</script>
		
		
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var table = $("#table-3").dataTable({
					"sPaginationType": "bootstrap",
					"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
					"bStateSave": true
				});
				
				table.columnFilter({
					"sPlaceHolder" : "head:after"
				});
			});
		</script>

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="../Backend_Template/assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="../Backend_Template/assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="../Backend_Template/assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="../Backend_Template/assets/js/gsap/main-gsap.js"></script>
	<script src="../Backend_Template/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../Backend_Template/assets/js/bootstrap.js"></script>
	<script src="../Backend_Template/assets/js/joinable.js"></script>
	<script src="../Backend_Template/assets/js/resizeable.js"></script>
	<script src="../Backend_Template/assets/js/neon-api.js"></script>
	<script src="../Backend_Template/assets/js/jquery.dataTables.min.js"></script>
	<script src="../Backend_Template/assets/js/datatables/TableTools.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="../Backend_Template/assets/js/dataTables.bootstrap.js"></script>
	<script src="../Backend_Template/assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="../Backend_Template/assets/js/datatables/lodash.min.js"></script>
	<script src="../Backend_Template/assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="../Backend_Template/assets/js/select2/select2.min.js"></script>
	<script src="../Backend_Template/assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="../Backend_Template/assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="../Backend_Template/assets/js/neon-demo.js"></script>