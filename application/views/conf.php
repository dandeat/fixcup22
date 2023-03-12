	 
	 	  <style>
	 	  	  	#tbl_pkm tr{
	 	  	  		border-bottom: 1px solid #f4f6f9;
	 	  	  	}
	 	  	  </style>
	 	  	  <div class="modal fade bd-example-modal" id="ktpmdl" tabindex="-1" role="dialog" aria-labelledby="Review PKM" aria-hidden="true">
	 	  		  <div class="modal-dialog modal-dialog-centered modal" role="document">
	 	  		    <div class="modal-content">
	 	  		      <div class="modal-header">
	 	  		        <h5 class="modal-title" id="exampleModalCenterTitle">View KTP</h5>
	 	  		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	 	  		          <span aria-hidden="true">&times;</span>
	 	  		        </button>
	 	  		      </div>
	 	  		      <div class="modal-body">
	 	  		      	<div style="width:100%; height: 260px;" class="bg-dark" >
                            <center>
                              <img src="#"  id="ktpimg" style="max-height: 260px;max-width: 100%;" alt="No Image">
                            </center>
                        </div>
	 	  		      </div>
	 	  		    </div>
	 	  		  </div>
	 	  	  </div>
	 	  	  		<div class="row">
	 	  	  	<section class="col-lg-12 connectedSortable">
	 	              <div class="card ">
	 	                <div class="card-header ">
	 	                  <h3 class="card-title">Data Konfirmasi Pembayaran</h3>
	 	                </div>
	 	                <div class="card-body">
	 	  				<div class="row">
	 	  					<div class="col-12">
	 	  					<table id="compe" class="table table-bordered table-hover" style="width: 100%">
	 	  						<thead>
	 	  						<tr>
	 	  							<th width="10px">No</th>
	 	  							<th width="200px">Jenis Pembayaran</th>
	 	  							<th>Nama / Nama Team</th>
	 	  							<th width="200px">Email</th>
	 	  							<th width="100px">Kewajiban</th>
	 	  							<th width="100px">Payment</th>
	 	  							<th width="150px">Status</th>
	 	  							<th width="120px">#</th>
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

	 	  	  	$('.acc').click(function(e){
	 	  	  		e.preventDefault();
	 	  	  		Toast.fire({
	 	  	  			icon: 'warning',
	 	                  title: 'Apakah Anda yakin Ingin Memverifikasi Konfirmasi Pembayaran?',
	 	                  showCloseButton: true,
	 	  			    showCancelButton: true,
	 	  			    focusCancel: true,
	 	  			    showConfirmButton: true,
	 	                  confirmButtonText: '<i class="fas fa-check"></i> Yes',
	 	              }).then((result) => {
	 	              	if (result.isConfirmed) {
	 	  	            	var id = $(this).attr('dt-id');
			 	  	  		$.post('PembayaranData',{id:id}).done(function(dt){
			 	  	  			var d = JSON.parse(dt);
			 	  	  			if (d['res'] == 'success') {
			 	  	  				Toast.fire({
				                    icon: 'success',
				                        title: 'Data Konfirmasi Berhasil di Verifikasi.',
				                        showConfirmButton: false,
				                        timer: 4000,
				                    });
				                    location.reload();
			 	  	  			}
			 	  	  		})
	 	  	            }
	 	  		    });
	 	  	  		
	 	  	  	})

	 	  	  	$('.ktp').click(function(e){
	 	  	  		e.preventDefault();
	 	  	  		console.log('click');
	 	  	  		$('#ktpmdl').modal('show');
	 	  	  		$('#ktpimg').attr('src','<?=base_url()?>/assets/file_struk/'+$(this).attr('data-src'));	 	  	  		
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
		            	// { responsivePriority: 2, targets: 2 },
		            	{ responsivePriority: 2, targets: 6 },
		            	{ responsivePriority: 3, targets: 7 },
		        	]
	 	  	    });
	 	  	  });
	 	  	</script>