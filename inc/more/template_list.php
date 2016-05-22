<div class="container-fluid bgArtikel">
	<div class="container">
		<div class="row">
			<div class="page-header"><h1 class="color0">WEB TEMPLATE</h1></div>
				<!-- Kategori Template -->
				<div class="container well well-sm">
					<div class="btn-group">
						<a href="#" class="btn btn-default" disabled="disabled"><strong>Kategori:</strong> </a>
						<a href="#" class="btn btn-default"><strong>Terpopuler</strong></a>
						<a href="#" class="btn btn-default">Portofolio</a>
						<a href="#" class="btn btn-default">Website Profile</a>
						<a href="#" class="btn btn-default">Website Sekolah</a>
						<a href="#" class="btn btn-default">Online Store</a>
						<a href="#" class="btn btn-default">News Website</a>
						<a href="#" class="btn btn-primary">Order Your Own</a>
					</div>
				</div>			
		</div> <!-- /row -->
	</div> <!-- /container -->
</div> <!-- /container fluid -->

	<div class="row bg0">
	  <div class="container">
			<br><br>
		<div class="col-lg-12">
			<?php 
				$img_title= array(
								array(array(1,"Lotus Nature"),array(2,"Focus Template"),array(3,"Industrial Corporation")),
								array(array(4,"Print Store"),array(5,"Quaso | We Think Globally"),array(6,"Quack Folio")),
								array(array(7,"Brasil Travel Agency"),array(8,"Globex Corporation"),array(9,"Gerico"))									
								);
			for($i=0; $i<=2; $i++){ ?>
			 
			<div class="row">
				<div class="col-lg-4">
				<a href="./?page=more/template_detail"><img src="img/konten img/web<?php echo $img_title[$i][0][0]; ?>.jpg" width="500" height="500" class="img-responsive img-rounded" title="<?php echo $img_title[$i][0][1]; ?>"></a><br>
				</div>
				<div class="col-lg-4">
				<a href="./?page=more/template_detail"><img src="img/konten img/web<?php echo $img_title[$i][1][0]; ?>.jpg" width="500" height="500" class="img-responsive img-rounded" title="<?php echo $img_title[$i][1][1]; ?>"></a><br>
				</div>
				<div class="col-lg-4">
				<a href="./?page=more/template_detail"><img src="img/konten img/web<?php echo $img_title[$i][2][0]; ?>.jpg" width="500" height="500" class="img-responsive img-rounded" title="<?php echo $img_title[$i][2][1]; ?>"></a><br>
				</div>                                    
			</div>
			<div class="clearfix"></div><br>
			<?php }; ?>
		</div>

		<div align="center" class="row"><br><br>
			<div class="btn-group btn-group-lg">
				<a href="#" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a href="#" class="btn btn-lg btn-default">1</a>				
				<a href="#" class="btn btn-lg btn-default">2</a>				
				<a href="#" class="btn btn-lg btn-default">3</a>				
				<a href="#" class="btn btn-lg btn-default">4</a>				
				<a href="#" class="btn btn-lg btn-default">5</a>				
				<a href="#" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>				
			</div><br><br>
		</div><!-- /row -->		
		
		</div><!-- Close container -->
	</div><!-- Close Row -->
