// document ready function
$(document).ready(function() { 	        
	//--------------- Data tables ------------------//
	if($('table').hasClass('dynamicTable')){
		$('.dynamicTable').dataTable( {
			"sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-6'i><'col-lg-6'p>>",
			"sPaginationType": "bootstrap",
			"bJQueryUI": false,
			"bAutoWidth": false,
                        "iDisplayLength" : 5,
                        "aLengthMenu" : [5,10,25,50],
			"oLanguage": {
				"sSearch": "<span></span> _INPUT_",
				"sLengthMenu": "<span>_MENU_</span>",
				"oPaginate": { "sFirst": "First", "sLast": "Last" }
			}
		});

		$('.dataTables_length select').uniform();
		$('.dataTables_paginate > ul').addClass('pagination');
		$('.dataTables_filter>label>input').addClass('form-control');
                $('.dataTables_filter').hide();
                
	}
	if($('table').hasClass('dynamicTable1')){
		$('.dynamicTable1').dataTable( {
			"sDom": "<'row'<'col-lg-6'><'col-lg-6'f>r>t<'row'<'col-lg-6'i l><'col-lg-6'p>>",
			"sPaginationType": "bootstrap",
			"bJQueryUI": false,
			"bAutoWidth": false,
            "iDisplayLength" : 5,
            "aLengthMenu" : [5,10,25,50],
			"oLanguage": {
				"sSearch": "<span></span> _INPUT_",
				"sLengthMenu": "<span>_MENU_</span>",
				"oPaginate": { "sFirst": "First", "sLast": "Last" }
			}

		}).columnFilter({ sPlaceHolder: "head:after",
                                         aoColumns: [
                                                     null,
                                                     null,
                                                     { type: "number-range" }
                                                     ]
                });

		$('.dataTables_length select').uniform();
		$('.dataTables_paginate > ul').addClass('pagination');
		$('.dataTables_filter>label>input').addClass('form-control');
                $('.dataTables_filter').hide();
                
	}

	if($('table').hasClass('tableTools')){
		$('.tableTools').dataTable( {
			"sDom": "<'row'<'col-lg-4'l><'col-lg-4'T><'col-lg-4'f>r>t<'row'<'col-lg-4'i><'col-lg-4'i><'col-lg-4'p>>",
			"oTableTools": {
				"sSwfPath": "plugins/tables/dataTables/swf/copy_csv_xls_pdf.swf",
				"aButtons": [
				"copy",
				"print",
					{
						"sExtends":    "collection",
						"sButtonText": 'Save <span class="caret" />',
						"aButtons":    [ "csv", "xls", "pdf" ]
					}
				]
			},
			"sPaginationType": "bootstrap",
			"bJQueryUI": false,
			"bAutoWidth": false,
			"oLanguage": {
				"sSearch": "<span></span> _INPUT_",
				"sLengthMenu": "<span>_MENU_</span>",
				"oPaginate": { "sFirst": "First", "sLast": "Last" }
			}
		});
		$('.dataTables_length select').uniform();
		$('.dataTables_paginate > ul').addClass('pagination');
		$('.dataTables_filter>label>input').addClass('form-control');
	}

	// Set the classes that TableTools uses to something suitable for Bootstrap
	$.extend( true, $.fn.DataTable.TableTools.classes, {
		"container": "btn-group",
		"buttons": {
			"normal": "btn",
			"disabled": "btn disabled"
		},
		"collection": {
			"container": "DTTT_dropdown dropdown-menu",
			"buttons": {
				"normal": "",
				"disabled": "disabled"
			}
		}
	} );

	// Have the collection use a bootstrap compatible dropdown
	$.extend( true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
		"collection": {
			"container": "ul",
			"button": "li",
			"liner": "a"
		}
	} );


});//End document ready functions

//sparkline in sidebar area
var positive = [1,5,3,7,8,6,10];
var negative = [10,6,8,7,3,5,1]
var negative1 = [7,6,8,7,6,5,4]

$('#stat1').sparkline(positive,{
	height:15,
	spotRadius: 0,
	barColor: '#9FC569',
	type: 'bar'
});
$('#stat2').sparkline(negative,{
	height:15,
	spotRadius: 0,
	barColor: '#ED7A53',
	type: 'bar'
});
$('#stat3').sparkline(negative1,{
	height:15,
	spotRadius: 0,
	barColor: '#ED7A53',
	type: 'bar'
});
$('#stat4').sparkline(positive,{
	height:15,
	spotRadius: 0,
	barColor: '#9FC569',
	type: 'bar'
});
//sparkline in widget
$('#stat5').sparkline(positive,{
	height:15,
	spotRadius: 0,
	barColor: '#9FC569',
	type: 'bar'
});

$('#stat6').sparkline(positive, { 
	width: 70,//Width of the chart - Defaults to 'auto' - May be any valid css width - 1.5em, 20px, etc (using a number without a unit specifier won't do what you want) - This option does nothing for bar and tristate chars (see barWidth)
	height: 20,//Height of the chart - Defaults to 'auto' (line height of the containing tag)
	lineColor: '#88bbc8',//Used by line and discrete charts to specify the colour of the line drawn as a CSS values string
	fillColor: '#f2f7f9',//Specify the colour used to fill the area under the graph as a CSS value. Set to false to disable fill
	spotColor: '#e72828',//The CSS colour of the final value marker. Set to false or an empty string to hide it
	maxSpotColor: '#005e20',//The CSS colour of the marker displayed for the maximum value. Set to false or an empty string to hide it
	minSpotColor: '#f7941d',//The CSS colour of the marker displayed for the mimum value. Set to false or an empty string to hide it
	spotRadius: 3,//Radius of all spot markers, In pixels (default: 1.5) - Integer
	lineWidth: 2//In pixels (default: 1) - Integer
});