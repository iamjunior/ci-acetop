jQuery(function($) {
  //initiate dataTables plugin
  var myTable =
  $('#demo-table')
  //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
  .DataTable( {
    bAutoWidth: false,
    "aoColumns": [
      { "bSortable": false }, null,null,null,null,null,null,
      { "bSortable": false }
    ],
    "aaSorting": [],

    select: {
      style: 'multi'
    }
    } );

    
  })