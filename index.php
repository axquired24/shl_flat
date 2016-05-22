<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="AxQuired24">
	<title>Template Website Software House Lampung</title>
    
    <!-- BS3 Core CSS -->
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" />
	<link href="customcss.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <style>
		body{
			background-image:url(web_image/gradient-bg.jpg);
			background-attachment: fixed;
			background-position: top;
			padding-top:51px;
		  /* Margin bottom by footer height */
  			padding-bottom: 0px;
			}
		
		.navbar > .container > ul.nav > li.active{
			background-color: blue;
		}
		
		/* Sticky Footer style */
		#footer {
		  position: relative;
		  display: block;
		  bottom: -1;
		  left:0;
		  width: 100%;
		  
		  
		  /* Set the fixed height of the footer here */
		  height: 60px;
		  background-color: #f5f5f5;
		}		
		#footer > .container {
		  padding-right: 15px;
		  padding-left: 15px;
		  padding-top:15px;
		}		
	</style>
</head>

<body>
	<?php include('inc/core/navbar.php'); 
		$page = $_GET['page'];
		if(!empty($page)){
			include"inc/".$page.".php";		
		}else{
			include"default_page.php";
		}
	?>


<!-- FOOTER -->
	<?php include('inc/core/footer.php'); ?>
<!-- END of FOOTER -->                 

<!-- JQuery and Bootstrap js -->
<script src="../bs3_dist/js/jquery.js"></script>
<script src="../bs3_dist/js/bootstrap.min.js"></script>
<?php if(!empty($_GET[page])){
		echo "";
	  }else{
	  	echo "<script src=smoothscroll.js></script>"; // Aktifkan smooth scroll dihalaman awal saja
	  }
?>
		
<script type="text/javascript">
	$('body').scrollspy({ target: '.navbar-collapse' });
	$("a").tooltip({placement:"bottom"});
	$("abbr").tooltip({placement:"bottom"});
	$("img").tooltip({placement:"top"});
	$(".tip-bottom").tooltip({placement:"bottom"});
</script>  
</body>
</html>
