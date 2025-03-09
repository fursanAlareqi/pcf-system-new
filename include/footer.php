<footer class="footer">
	<div class="container-fluid">

		<div class="copyright ml-auto">
			2022, made with <i class="fa fa-heart heart text-danger"></i> by houdaifa
		</div>
	</div>
</footer>
</div>
</div>
</div>
<script src="../js/jquery-latest.js"></script>
<!-- add datagridview -->
<script type="text/javascript">
	$(document).ready(function() {
		var table = $('#data-table').DataTable({
			"order": [],
			"columnDefs": [{
				"targets": [4, 5, 6],
				"orderable": false,
			}, ],
			"pageLength": 25
		});
		$(document).on('click', '.delete', function() {
			var id = $(this).attr("id");
			if (confirm("Are you sure you want to remove this?")) {
				window.location.href = "invoice.php?delete=1&id=" + id;
			} else {
				return false;
			}
		});
	});
</script>

<script>
	$(document).ready(function() {
		$('.number_only').keypress(function(e) {
			return isNumbers(e, this);
		});

		function isNumbers(evt, element) {
			var charCode = (evt.which) ? evt.which : event.keyCode;
			if (
				(charCode != 46 || $(element).val().indexOf('.') != -1) && // “.” CHECK DOT, AND ONLY ONE.
				(charCode < 48 || charCode > 57))
				return false;
			return true;
		}
	});
</script>
<!-- end add datagridview -->
<!-- select withe search -->
<script src="assets/js/setting-demo2.js"></script>
<script src="https://aj	ax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/bootstrap-select.js"></script>
<script>
	function createOptions(number) {
		var options = [],
			_options;

		for (var i = 0; i < number; i++) {
			var option = '<option value="' + i + '">Option ' + i + '</option>';
			options.push(option);
		}

		_options = options.join('');

		$('#number')[0].innerHTML = _options;
		$('#number-multiple')[0].innerHTML = _options;

		$('#number2')[0].innerHTML = _options;
		$('#number2-multiple')[0].innerHTML = _options;
	}

	var mySelect = $('#first-disabled2');

	createOptions(4000);

	$('#special').on('click', function() {
		mySelect.find('option:selected').prop('disabled', true);
		mySelect.selectpicker('refresh');
	});

	$('#special2').on('click', function() {
		mySelect.find('option:disabled').prop('disabled', false);
		mySelect.selectpicker('refresh');
	});

	$('#basic2').selectpicker({
		liveSearch: true,
		maxOptions: 1
	});
</script>

<!-- <script src="../assets/js/add_filter.js"> </script> -->
<!-- end select with search  -->

<!-- export table to ecale file have complite code in header.php -->
<script>
	// var table2excel = new Table2Excel();

	// document.getElementById('export').addEventListener('click', function() {
	// 	table2excel.export(document.querySelectorAll('table'));
	// });
	$(document).ready(function() {

		if ($('#admin-pagination').length) {

			$('#export').hide();

			$search = `
            <div class="card">   
            <form  class='row p-3'>
	        <div class="form-group form-floating-label col-6">
         	<label for="from_date">From Date</label>
	     	<input type="date"  name="from_date" id="from_date" class='form-control input-border' placeholder="From Date" required> 
              </div>

        <div class="form-group form-floating-label col-6">
         	<label for="to_date">To Date</label>
	     	<input type="date"  name="to_date" id="to_date" class='form-control input-border' placeholder="From" required> 
        </div>

             
        <div>
           <center>
             <button type='submit' id="export" class="btn btn-success">Export to excel</button>
	     </center>
        </div>
      
      </form>
     </div>
    `;
			$('.content .page-inner').prepend($search);

			// $('#export').parent().addClass('d-flex gap-4 align-items-ceneter');
			// $('#export').before(`<form class='p-2' id='export-form' action='?export'> 
			// <label for="from_date">From Date</label>
			// <input type="date"  name="from_date" id="from_date" placeholder="From" required> 

			// <label for="to_date">To Date</label>
			// <input type="date"  name="to_date" id="to_date" placeholder="From" required> 
			// </form>`);
		} else {
			var table2excel = new Table2Excel();

			document.getElementById('export').addEventListener('click', function() {
				table2excel.export(document.querySelectorAll('table'));
			});
		}




	});
</script>
<!-- end export -->

<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>


<!-- jQuery UI -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="assets/js/plugin/chart-circle/circless.min.js"></script>

<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="assets/js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="assets/js/setting-demo.js"></script>

<script src="../../assets/js/setting-demo2.js"></script>
<script>
	$(document).ready(function() {

		$('#basic-datatables').DataTable({});

		$('.mt-4').DataTable({
			"pageLength": 10,
			paging: false,
			info: false,
			searching: $('#admin-pagination').length ? false : true,
			// serverSide: true,
			initComplete: function() {
				this.api().columns().every(function() {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo($(column.footer()).empty())
						.on('change', function() {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search(val ? '^' + val + '$' : '', true, false)
								.draw();
						});

					column.data().unique().sort().each(function(d, j) {
						select.append('<option value="' + d + '">' + d + '</option>')
					});
				});
			}
		});

		// Add Row
		$('#add-row').DataTable({
			"pageLength": 5,
		});

		var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

		$('#addRowButton').click(function() {
			$('#add-row').dataTable().fnAddData([
				$("#addName").val(),
				$("#addPosition").val(),
				$("#addOffice").val(),
				action
			]);
			$('#addRowModal').modal('hide');

		});
	});
</script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	$(function() {
		$("#country").select2();
	});
</script>

<?php
$sql = "select * from forms where  sender_name=? and auth=?  and send=? and message=? ORDER BY `forms`.`message` ASC";
$stm = $con->prepare($sql);
$stm->execute(array($_SESSION['user']['id'], 'True', 'False', 'False'));
if ($stm->rowCount() > 0) {
	$forms = $stm->fetch();
	$step = $forms['step'];
	$id = $forms['id'];
	echo "<script>swal('تم المصادقة على $step ', 'يرجاء البدء في المرحلة التالية', {
              icon : 'success',
              buttons: {        			
                  confirm: {
                      className : 'btn btn-success'
                  }
              },
          });</script>";
	$sql = "update forms set message=?  where id=? ";
	$stm = $con->prepare($sql);
	$stm->execute(array('True', $id));
}
$sql = "select * from forms where  sender_name=? and auth=?  and send=? and falidemessage=? ORDER BY `forms`.`falidemessage` ASC";
$stm = $con->prepare($sql);
$stm->execute(array($_SESSION['user']['id'], 'False', 'True', 'False'));
if ($stm->rowCount() > 0) {
	$forms = $stm->fetch();
	$step = $forms['step'];
	$id = $forms['id'];
	echo "<script>swal('تم  رفص عملية  $step ', 'يرجاء اعادة  ارسال نموذج  $step', {
              icon : 'error',
              buttons: {        			
                  confirm: {
                      className : 'btn btn-danger'
                  }
              },
          });</script>";
	$sql = "update forms set falidemessage=?  where id=? ";
	$stm = $con->prepare($sql);
	$stm->execute(array('True', $id));
}

?>
<?php include "sex_diagram.php"; ?>



<!-- set defualt value -->


<!-- <script>
	$(document).ready(function() {

		$('form').submit(function(event) {
			// event.preventDefault();
			// Check and set default values for empty fields
			$('form input').each(function() {
				var inputType = $(this).attr('type');
				var value = $(this).val();

				if (inputType === 'date' && value === '') {
					$(this).val('0001-01-01');
				} else if (inputType === 'number' && value === '') {
					$(this).val(0);
				}
			});

			// Allow the form to submit normally after modifying the values
		});
	});
</script> -->

</body>

</html>