	 
	 	  <style>
	 	  	  	#tbl_pkm tr{
	 	  	  		border-bottom: 1px solid #f4f6f9;
	 	  	  	}
	 	  	  </style>
	 	  	  		<div class="row">
	 	  	  	<section class="col-lg-12 connectedSortable">
	 	              <div class="card ">
	 	                <div class="card-header ">
	 	                  <h3 class="card-title">Data Pendaftaran Online Competition</h3>
	 	                </div>
	 	                <div class="card-body">
	 	  				<div class="row">
	 	  					<div class="col-12">
	 	  					<table id="compe" class="table table-bordered table-hover" style="width: 100%">
	 	  						<thead>
	 	  						<tr>
	 	  							<th width="10px">No</th>
	 	  							<th>Nama Team</th>
	 	  							<th width="200px">Email</th>
	 	  							<th width="200px">No Whatsapp</th>
	 	  							<th width="200px">Status Pembayaran</th>
	 	  							<th width="100px">#</th>
	 	  						</tr>
	 	  						</thead>
	 	  						<tbody>
	 	  							<?=$dt?>
	 	  						</tbody>
	 	  					</table>
	 	  					</div>
	 	  				</div>

	 	                </div>
	 	                <!-- /.card-body -->
	 	              </div>
	 	          </section>  
	 	        </div>
	 	        <script>


	 	  	  $(function () {

	 	  	  	var Toast = Swal.mixin({
	 	  	      toast: false,
	 	  	    });

	 	  	  	$('.ktp').click(function(e){
	 	  	  		e.preventDefault();
	 	  	  		console.log('click');
	 	  	  		$('#ktpmdl').modal('show');
	 	  	  		$('#ktpimg').attr('src','<?=base_url()?>/assets/ktp_webinar/'+$(this).attr('data-src'));	 	  	  		
	 	  	  	});

	 	  	  	// $('#tgl_pemasukan').datetimepicker();
	 	  	    var table = $('#compe').DataTable({
	 	  	      "paging": true,
	 	  	      "lengthChange": true,
	 	  	      "searching": true,
	 	  	      "ordering": true,
	 	  	      "info": true,
	 	  	      "autoWidth": true,
	 	  	      "responsive": true,
	 	  	      "pageLength": 10,
	 	  	      "columnDefs": [
		            	{ responsivePriority: 1, targets: 0 },
		            	{ responsivePriority: 2, targets: 1 },
		            	{ responsivePriority: 3, targets: 5 },
		        	]
	 	  	    });
	 	  	  });
	 	  	</script>