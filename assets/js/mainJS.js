$(document).ready(function(){
	$(".time_element").timepicki();
    var TimeSched = $('table.tableSelect').DataTable({
    	"iDisplayLength": -1,
    	"lengthChange": false,
    	"bFilter": false,
    	"bPaginate": false,
    	"sDom": "rt",
        fixedHeader: true,
        "language":{
            "emptyTable": "Click add to set your first schedule"
        }
    });
 	var isSelected = 0;
    var print = new $.fn.dataTable.Buttons(TimeSched, {
         buttons: [
            {
                extend: 'pdfHtml5',
                text: 'Print',
                title: ' ',
            }]
    }).container().appendTo($('.printBtn'));
    var row;

 	$('.tableSelect tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            isSelected = 0;
        }
        else {
            TimeSched.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
			isSelected = 1;
            row = TimeSched.row( this ).data();
            $("input[name='editTimeIn']").val(row[0].substr(0,8));
            $("input[name='editTimeOut']").val(row[0].substr(11,8));
            $("input[name='editDesc']").val(row[1]);
            $("input[name='editRemarks']").val(row[2]);
            }
    	});

    $('.EditBtn').click(function(){
    	if (!Boolean(isSelected)){
    		alert("Please select first a row to Edit");
    	}
    	else{
    		$("#EditModal").modal('show');
    	}
    });


    $('.editSubmit').click(function(){
        row[0] = $("input[name='editTimeIn']").val()+$("input[name='editTimeOut']").val();
        row[1] = $("input[name='editDesc']").val();
        row[2] = $("input[name='editRemarks']").val();
        TimeSched.rows().invalidate().draw();
        $("#EditModal").modal('hide');
    });

    $('.remove').click(function(){
        $('#deleteDialog').dialog('open');
    });

    $('a#newSched').click(function(e){
        e.preventDefault();
        $('#newDialog').dialog('open');
    });

    $('#deleteDialog').dialog({
        autoOpen: false,
        resizable: false,
        draggable: false,
        height: 'auto',
        width: 600,
        modal: true,
        buttons:{
            'Yes':function(){
                TimeSched.row('.selected').remove().draw( false );
                isSelected = 0;
                $(this).dialog("close");
                $("#EditModal").modal('hide');
            },
            'No':function(){
                $(this).dialog("close");
                $("#EditModal").modal('hide');
            }
        }
    });

    $('#newDialog').dialog({
        autoOpen: false,
        resizeable: false,
        height: 'auto',
        width: 400,
        modal: true,
        buttons:{
            'Yes':function(){
                TimeSched.row('.selected').remove().draw( false );
                $(this).dialog("close");
                $("#EditModal").modal('hide');
            },
            'No':function(){
                $(this).dialog("close");
                $("#EditModal").modal('hide');
            }
        }
    });

    $('.addBtn').on( 'click', function () {
        var timeIn = $("#timeIn").val();
        var timeOut = $("#timeOut").val();
        var desc = $("#Desc").val();
        var remarks = $("#Remarks").val();
        if ( timeIn == '' || timeOut == '' || desc == ''){
            alert("Please fill up required fields");
        }
        else{
            TimeSched.row.add( [
                timeIn+" - "+timeOut,
                desc,
                remarks
            ]).draw( false );
            $("#timeIn").val('');
            $("#timeOut").val('');
            $("#Desc").val('');
            $("#Desc").val('');
            $("#AddModal").modal('hide');
        }
    });

});

