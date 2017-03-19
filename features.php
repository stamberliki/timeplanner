<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Features - Zerotype Website Template</title>
</head>
<body class="app">
	<div id="headerApp">
		<div class="logo">
		</div>
		<ul id="navigationApp">
			<li>
				<a href="" id="newSched">Create New Time Schedule</a>
			</li>
			<li>
				<a data-toggle="modal" href="#AddModal">Add</a>
			</li>
			<li>
				<a data-toggle="modal" class="EditBtn" href="">Edit</a>
			</li>
			<li class="printBtn">
			</li>
		</ul>
	</div>

	<div id="contents">
		<table class="tableSelect" id="tableFormat">
			<thead>
				<tr>
					<th>Time</th>
					<th>Description</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>

	</div>

	<div id="AddModal" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal">&times;</button>
	              <h4 class="modal-title">Add Schedule</h4>
	            </div>
	            <div class="modal-body">
	            	<center>
						<table id="add">
							<tr><td>Time In: </td><td><input type="text" name="timepicker" class="time_element" id="timeIn" /></td></tr>
							<tr><td>Time Out: </td><td><input type="text" name="timepicker" class="time_element" id="timeOut"/></td></tr>
							<tr><td>Description: </td><td><input type="text" id="Desc"></td></tr>
							<tr><td>Remarks: </td><td><input type="text" id="Remarks" name="roomCampus" placeholder="optional"></td></tr>
						</table>
					</center>
	            </div>
	            <div class="modal-footer">
	            	<button class="addBtn">Add</button>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="EditModal" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal">&times;</button>
	              <h4 class="modal-title">Edit Schedule</h4>
	            </div>
	            <div class="modal-body">
	            	<center>
						<table id="add">
							<tr><td>Time In: </td><td><input type="text" name="editTimeIn" class="time_element" id="timeIn" /></td></tr>
							<tr><td>Time Out: </td><td><input type="text" name="editTimeOut" class="time_element" id="timeOut"/></td></tr>
							<tr><td>Description: </td><td><input type="text" name="editDesc" id="Desc"></td></tr>
							<tr><td>Remarks: </td><td><input type="text" id="Remarks" name="editRemarks" placeholder="optional"></td></tr>
						</table>
					</center>
	            </div>
	            <div class="modal-footer">
	            	<button class="editSubmit">Done</button>
	            	<button class="remove">Remove</button>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="newDialog" title="Create New Schedule">
	  <p>Are you sure you want to create a new schedule?</p>
	</div>
	<div id="deleteDialog" title="Create New Schedule">
	  <p>Are you sure you want to delete this row?</p>
	</div>

</body>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="assets/css/timepicki.css">
<link rel="stylesheet" href="assets/css/mainCSS.css" type="text/css">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.buttons.min.js"></script>
<script src="assets/js/timepicki.js"></script>
<script src="assets/js/mainJS.js"></script>
<script src="assets/js/pdfmake.min.js"></script>
<script src="assets/js/vfs_fonts.js"></script>
<script src="assets/js/jszip.min.js"></script>
<script src="assets/js/buttons.html5.min.js"></script>
</html>