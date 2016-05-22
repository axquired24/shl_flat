<div class="container-fluid"><!-- Container body -->
	<div id="home" class="row bg1">
		<div class="container">
			<div class="col-lg12">				
				<h2 class="text-center color0"> Software House Lampung <br />
				<small class="color2">The Great Solution For Your IT Problems.</small></h2>
				<p align="center"><img class="img-responsive" src="img/welcome-01.png" alt="Welcome" /><br />
				<a href="#about" class="btn btn-lg btn-warning">Baca Lebih Lanjut</a>
				</p>
				
			</div>
		</div>
	</div>
	<div id="about" class="row bg0">
		<div class="container">
			<div class="col-lg-2">
				<img src="img/flat_icon/pin.png" alt="" class="img-responsive" />
			</div>
		
			<div class="col-lg-10">				
				<h1>SIAPA KAMI?</h1>
				<p class="text-justify">
				<strong>Software House Lampung</strong> adalah perusahaan yang bergerak di bidang IT Solution / Informatics Technology Solution. Kami bergerak khususnya di bidang App Development, Web Development, Server Building dan Domain dan Hosting di Lampung. 
Dengan di dukung oleh Programer dan Tekhnisi yang professional di bidangny. Sehingga kami bisa memberikan pelayanan prima bagi para pelanggan, Terutama di bidang bisniss dan pendidikan.
				</p>
				<p>Produk Kami  di antaranya :</p>
				<ol>
				  <li>Program Pendaftaran Online Untuk  Tingkat SD / SMP / SMA / SMK</li>
				  <li>Perpusatkaan Online / Offline,  Tingkat SD / SMP / SMA / SMK</li>
				  <li>Website News / Berita, Website  Penjualan, Website Informasi, Edukasi dan Company Profile</li>
				  <li>Di bidang server : Router, Proxy,  Web Server, Network Management menggunakan teknologi Open Source maupun License.</li>
				</ol>
				<p>Pengembangan  terus kami lakukan guna memberikan kenyamanan dan keamanan dari  pelayanan-pelayanan yang kami berikan.</p>
			</div>
		</div>
	</div>
	<div id="artikel" class="row bg6">
		<div class="container">
			<div class="page-header well-sm"><h1 class="color2">ARTIKEL <small> Kumpulan artikel terbaik dari SHL</small></h1></div>
				<!-- Kategori artikel -->
				<div class="container well well-sm">
				<div class="btn-group">
				<a href="#" class="btn btn-default" disabled="disabled"><strong>Kategori:</strong> </a>
				<a href="#" class="btn btn-default">Web Design</a>
				<a href="#" class="btn btn-default">Desktop Programming</a>
				<a href="#" class="btn btn-default">Networking</a>
				<a href="#" class="btn btn-default">Hardware</a>
				<a href="#" class="btn btn-default">Graphic Design</a>
				<a href="#" class="btn btn-default">Free Download</a>
				<a href="#" class="btn btn-default">Internet</a>
				<a href="#" class="btn btn-default">Marketing Tips</a>
				<a href="./?page=more/artikel_kategori" class="btn btn-warning">Semua Artikel >> </a>                                
				</div>
				</div>

			<?php for($i=1; $i<=3; $i++){ ?>
				<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img src="img/konten img/football.jpg" alt="...">
				  <div class="caption">
					<h3>Thumbnail label</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.</p>
					<p><a href="./?page=more/artikel" class="btn btn-warning" role="button">Baca selengkapnya</a></p>
				  </div>
				</div>
				</div>
			<?php }; ?>
			<div class="clearfix"></div>
		</div>
	</div>
	<div id="galeri" class="row bg4">
		<div class="container">
			<div class="page-header" style="border-bottom-color:#2D85D3;"><h1 class="text-primary">Galeri <small class="color0"> Foto dan Video SHL</small></h1></div>
			<div class="col-lg-8"><img src="img/konten img/football.jpg" class="img-responsive"><br></div>
			<div class="col-lg-4">
				<img src="img/konten img/football.jpg" class="img-responsive"><br>
				<img src="img/konten img/football.jpg" class="img-responsive">
			</div>
		<div class="clearfix"></div><br>
			<div align="center">
			<a href="./?page=more/galeri" class="btn btn-lg btn-primary">Lihat Semua Foto dan Video</a>
			</div>
		</div>
	</div>
	<div id="order" class="row bg0">
	  <div class="container">
		  <div class="page-header text-center well"><h1>Website Template <small>Pilih template kesukaanmu, dan pake semaumu</small></h1><br />
		  <small>*) Klik pada gambar untuk info template</small>
		  </div>
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
			<a href="./?page=more/template_list" class="text-center btn btn-lg btn-primary btn-block">Cek template lainnya >></a>			
		</div>
		
		</div><!-- Close container -->
	</div><!-- Close Row -->

	<div id="hosting" class="row bg6">
	  <div class="container">
		  <div class="page-header"><h1>Hosting Plan <small>Pilih paket sesuai kebutuhanmu</small></h1></div>
			
			<div class="col-lg-3">                            
			<?php
			$ok ="<span class='text-success glyphicon glyphicon-ok'></span>";
			$ko ="<span class='text-danger glyphicon glyphicon-remove'></span>";
			//include "inc/content/hosting_table1.php"; //table1    
			?>
				<a href="#" data-toggle="modal" data-target="#myhosting1" title="Standar Shared Hosting"><img src="img/flat_icon/hosting1.png" class="img-responsive" /></a>
			</div>
			
			<div class="col-lg-3">                
			<?php //include "inc/content/hosting_table2.php"; //table2 ?>                
				<a href="#" data-toggle="modal" data-target="#myhosting2" title="Professional Shared Hosting"><img src="img/flat_icon/hosting2.png" class="img-responsive" /></a>
			</div>         

			<div class="col-lg-3">
			<?php //include "inc/content/hosting_table3.php"; //table3 ?>
				<a href="#" data-toggle="modal" data-target="#myhosting3" title="Standar Premium Hosting"><img src="img/flat_icon/hosting3.png" class="img-responsive" /></a>			
			</div>         

			<div class="col-lg-3">
			<?php //include "inc/content/hosting_table4.php"; //table4 ?>
				<a href="#" data-toggle="modal" data-target="#myhosting4" title="Semi Dedicated"><img src="img/flat_icon/hosting4.png" class="img-responsive" /></a>			
			</div>         
	  </div><!-- Close container -->
	</div><!-- Close Row -->
	
	<div id="lain" class="row bg3">
		<div class="container">      	
			<div class="col-lg-5"><div class="page-header"><h1>Download Area</h1></div>
				<div class="list-group">
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">112 downloads</span> SHL Free Web Template</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">12 downloads</span> SHL Word Filtering Apps</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">24 downloads</span> SHL Guides</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">8 downloads</span> SHL Trending Topics</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">72 downloads</span> Design Resources psd</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">112 downloads</span> SHL Free Web Template</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">12 downloads</span> SHL Word Filtering Apps</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">24 downloads</span> SHL Guides</a>
				  <a href="#" class="list-group-item"><span class="label label-success pull-right">8 downloads</span> SHL Trending Topics</a>
				  <a href="#" class="list-group-item active"><span class="label label-success pull-right">Click Here</span> Need more?</a>
				</div>                
			</div>
			<div class="col-lg-6 col-lg-offset-1">
				<div class="page-header"><h1>SHL Events</h1></div>
					<div class="list-group">
					<?php for($i=0; $i<9; $i++){ ?>
					  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-star text-warning"></span> 
					  <span class="label label-warning pull-right">24 September 2014</span> SHL Bagi-bagi template</a>
					<?php }; ?>
					  <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-star text-warning"></span> 
					  <span class="label label-warning pull-right">>>></span> Event lainnya?</a>		
					</div>                
				
			</div><br><br>
		</div><!-- Container -->
	</div><!-- /row -->
	<div id="langganan" class="row bg3">
		<div class="container">
			<div class="col-lg-12">
				<div class="page-header"><h2>Berlangganan <small class="color0">Berita dan Fitur terbaru dari SHL</small></h2></div>
				<div class="input-group input-group-lg">
				  <input type="text" placeholder="emailkamu@domain.com" class="form-control">
				  <span class="input-group-btn">
					<button class="btn btn-warning" type="button">Berlangganan</button>
				  </span>
				</div><!-- /input-group -->                
			</div>
		</div><!-- Container -->
	</div><!-- /row -->
	
	<div id="kontak" class="row bg5">
	  <div class="container">
		<div class="page-header"><h1 class="color0">Kontak Kami</h1></div>
		<div class="col-lg-6">
			<address class="color0">
			  <strong>Software House Lampung</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">Phone :</abbr> (123) 456-7890
			</address>
		<div class="well">
			Google Maps Here.
		</div>
		
			
			<address class="color0">
			  <strong>Silahkan kirim pesan ke email kami</strong><br>
			  <a class="btn btn-default" href="mailto:#">first.last@example.com</a>
			</address>
		
		</div>
		<div class="col-lg-6">
			<form role="form" method="post" class="color0">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="email" class="form-control" id="nama" placeholder="Nama kamu">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="emailkamu@domain.com">
				</div>
				<div class="form-group">
					<label for="pesan">Pesan</label>
					<textarea class="form-control" id="pesan" placeholder="Pesan kamu"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Kirim pesan ke SHL</button>
			</form>
		</div>            
	  </div>
	</div>

</div><!-- END container body -->

<?php
	$modal_h = array(
					"id"=>array("hosting1","hosting2","hosting3","hosting4"),
					"title"=>array("Standar Shared Hosting","Shared Hosting Professional","Standar Premium Hosting","Semi Dedicated")
					);
	for($d=0; $d<count($modal_h["id"]); $d++){
 ?>
<!-- Modal -->
<div class="modal fade" id="my<?php echo $modal_h["id"][$d]; ?>" tabindex="-1" role="dialog" aria-labelledby="my<?php echo $modal_h["id"][$d]; ?>Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $modal_h["title"][$d]; ?></h4>
      </div>
      <div class="modal-body">
        <?php include "inc/content/hosting_table".($d+1).".php"; ?>
      </div>
    </div>
  </div>
</div>
<?php };?>