<link href="../../../bs3_dist/css/bootstrap.css" rel="stylesheet" />
<?php
	// Disini tempat foto/video yang sudah dikategorikan. Semua kategori menggunakan 1 file ini, hanya di olah menggunakan PHP. Untuk video beda sendiri.
?>
<div class="container-fluid bg6">
	<div class="container">
		<h2> Foto Terbaru <small>Event</small></h2>
		<?php for($d=0; $d<2; $d++){ ?>		
		<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-6">
							<a href="#" data-toggle="modal" data-target="#zoomImage"><img title="" class="img-responsive img-rounded" src="img/konten img/Tulips.jpg" data-original-title="Image Caption"></a>
						</div>
						<div class="col-sm-6">
							<a href="#"><img title="" class="img-responsive img-rounded" src="img/konten img/Koala.jpg" data-original-title="Image Caption"></a>
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-6">
							<a href="#"><img title="" class="img-responsive img-rounded" src="img/konten img/Penguins.jpg" data-original-title="Image Caption"></a>
						</div>
						<div class="col-sm-6">
							<a href="#"><img title="" class="img-responsive img-rounded" src="img/konten img/Koala.jpg" data-original-title="Image Caption"></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-6">
							<a href="#" data-toggle="modal" data-target="#zoomImage"><img title="" class="img-responsive img-rounded" src="img/konten img/Tulips.jpg" data-original-title="Image Caption"></a>
						</div>
						<div class="col-sm-6">
							<a href="#"><img title="" class="img-responsive img-rounded" src="img/konten img/Koala.jpg" data-original-title="Image Caption"></a>
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-6">
							<a href="#"><img title="" class="img-responsive img-rounded" src="img/konten img/Penguins.jpg" data-original-title="Image Caption"></a>
						</div>
						<div class="col-sm-6">
							<a href="#"><img title="" class="img-responsive img-rounded" src="img/konten img/Koala.jpg" data-original-title="Image Caption"></a>
						</div>
					</div>
				</div>				
		</div><!-- /row --><br>

		<?php }; // Tutup for diawal ?>
		
		<div class="row">
			<h2 class="text-center">
				<a class="btn btn-default" href="#" title="Previous"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="btn btn-default"href="#" title="Page 1">1</a> 				
				<a class="btn btn-default"href="#" title="Page 2">2</a> 				
				<a class="btn btn-default"href="#" title="Page 3">3</a> 				
				<a class="btn btn-default"href="#" title="Next"><span class="glyphicon glyphicon-chevron-right"></span></a> 				
			</h2>
		</div><!-- /row -->
		<div class="row">
			<div class="page-header"><h2>Browse Galleri Folder <small>Foto/Video</small></h2></div>					
		<?php 
			$Tulisan = array("Video SHL","Event SHL","SHL Design","SHL Profile");
			for($d=0; $d<4; $d++){ ?>
			<div class="col-lg-3">			
				<div class="well well-sm">					
					<h2 class="text-center"><a class="text-muted" href="#" title="<?php echo $Tulisan[$d]; ?>"><span class="glyphicon glyphicon-folder-open"></span></a><br /><br /><small><?php echo $Tulisan[$d]; ?></small></h2>
				</div>
			</div>
		<?php }; ?>		
		</div><!-- /row -->
		
	</div> <!-- /container -->
</div> <!-- /container fluid -->

<!-- Modal -->
<div class="modal fade" id="zoomImage" tabindex="-1" role="dialog" aria-labelledby="zoomImageLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="zoomImageLabel">Tulips</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive img-rounded" src="img/konten img/Tulips.jpg" title="Image Caption">
      </div>
    </div>
  </div>
</div>