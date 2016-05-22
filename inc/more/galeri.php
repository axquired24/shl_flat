<link href="../../../bs3_dist/css/bootstrap.css" rel="stylesheet" />

<div class="container-fluid bgGaleri">
	<div class="container">
		<div class="row">
			<div class="page-header"><h1 class="color0">Galeri Foto dan Video</h1></div>
				<!-- Kategori artikel -->
				<div class="container well well-sm">
					<div class="btn-group">
						<a href="#" class="btn btn-default" disabled="disabled"><strong>Kategori:</strong> </a>
						<a href="#" class="btn btn-default">Video SHL</a>
						<a href="./?page=more/galeri&b=kategori" class="btn btn-default">SHL Event</a>
						<a href="#" class="btn btn-default">SHL Profile</a>
						<a href="#" class="btn btn-default">Go go SHL</a>
						<a href="./?page=more/artikel_kategori" class="btn btn-warning">Semua Foto/Video</a>                                
					</div>
				</div>			
		</div> <!-- /row -->
	</div> <!-- /container -->
</div> <!-- /container fluid -->
<?php if($_GET[b]==""){ ?>
<div class="container-fluid bg6">
	<div class="container">
		<div class="row">
			<div class="page-header"><h2>Terfavorit <small>Foto</small></h2></div>
			<div class="col-lg-4">
				<img title="klik untuk zoom" src="img/konten img/Koala.jpg" class="img-responsive img-thumbnail"><br>
				<h3 class="text-center">Di SHL ada koala??<br>
					<small>24 September 2014</small>
				</h3>
			</div>
			<div class="col-lg-4">
				<img title="klik untuk zoom" src="img/konten img/Tulips.jpg" class="img-responsive img-thumbnail"><br>
				<h3 class="text-center">Bunga tulips<br>
					<small>01 Januari 2014</small>
				</h3>
			</div>
			<div class="col-lg-4">
				<img title="klik untuk zoom" src="img/konten img/Penguins.jpg" class="img-responsive img-thumbnail"><br>
				<h3 class="text-center">PES 2015 Cloud Game??<br>
					<small>17 Agustus 2014</small>
				</h3>
			</div>						
		</div> <!-- /row -->
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
		<div class="row">
			<h2> Foto Terbaru <small>Event</small></h2>
				<div class="col-sm-6">
					<a href="#" role="button" data-toggle="modal" data-target=".preview-image"><img title="" class="img-responsive img-rounded" src="img/konten img/Hydrangeas.jpg" data-original-title="Image 1. Click to zoom"></a>
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

<?php }elseif($_GET[b]=="kategori"){
		include"inc/more/galeri_kategori.php";
	}
?>