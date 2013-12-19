<?php fuel_set_var('layout', ''); ?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
 	<title>FUEL CMS</title>
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	<meta name="keywords" content="<?=fuel_var('meta_keywords')?>" />
	<meta name="description" content="<?=fuel_var('meta_description')?>" />

	<base href="<?=site_url()?>" />
	<style type="text/css" media="screen">
		/***************************************************************
		RESET BROWSER VALUES SO EVERYONE IS THE SAME
		***************************************************************/
		* { outline-style: none; -moz-outline-style: none; -webkit-text-size-adjust: none; }
		h1,h2,h3,h4,h5,h6,pre,code { font-size:1em; }
		ul,ol,li,dl,dt,dd,h1,h2,h3,h4,h5,h6,pre,form,body,html,p,blockquote,fieldset { margin:0; padding:0; }
		input { margin: 0; }
		a img,:link img,:visited img { border: none; }
		ol,ul{list-style:none;}
		th{text-align:left;}
		h1,h2,h3,h4{font-size:100%;}
		q:before,q:after{content:'';}
		pre,code{font:115% monospace; font-size:100%;}
		th{text-align:left;}
		cite,code,th,address{font-style:normal;font-weight:normal;}
		body { font-size:62.5%; }


		/***************************************************************
		TAG STYLES
		***************************************************************/
		body { background: #000 url(http://www.getfuelcms.com/assets/images/bg_waves.jpg) no-repeat top center; font-family: 'Lucida Grande', Arial, sans-serif; color: #fff; font-size: 12px; }
		h1 { font-size: 30px; margin-top: 50px; text-shadow: #000 0px 1px 3px; padding-left: 160px; line-height: 20px; }
		h2 { font-size: 16px; color: #fff; color: #c8d1d9; margin-bottom: 15px; text-shadow: #000 0px 1px 3px; padding-left: 164px; line-height: 28px; }
		h3 { font-size: 16px; color: #ea5b17; margin-bottom: 5px; font-weight: normal; }
		h4 { font-size: 12px; margin-bottom: 5px; }
		a { color: #dc461c; }
		p { margin-bottom: 20px; }
		ul { margin: 0 0 20px 0; }
		ol { list-style: decimal; margin: 0 0 20px 20px; }
		li { margin-bottom: 3px; }

		/***************************************************************
		GENERIC CLASSES 
		***************************************************************/
		.clear { clear: both; height: 0; line-height: 0; font-size: 0; }
		.success { background-color: #6ec461; background-repeat: no-repeat; padding: 2px; }
		.warning { background-color: #ff1; background-repeat: no-repeat; padding: 2px; }
		.error { background-color: #c30; background-repeat: no-repeat; padding: 2px; }
		.important { font-size: 16px; font-weight: bold; }
		/***************************************************************
		MAIN AREAS 
		***************************************************************/
		div#container { 
			-webkit-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.8);
			-moz-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.8);
			width: 600px; margin: 70px auto; border: 1px solid #1e466a; padding: 20px; -moz-border-radius: 10px; -webkit-border-radius: 10px;
			background: -webkit-gradient(linear, left top, left bottom, from(rgba(42, 96, 147, 0.35)), to(#000));
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e466a', endColorstr='#000'); /* for IE */
		 }
		div#logo {  background: transparent url(http://www.getfuelcms.com/assets/images/fuel_logo_sm.png) no-repeat; width: 150px; height: 150px; float: left; }
		div#content { padding: 10px 20px; }
	</style>
</head>
<body>

<?php $this->load->view('_blocks/header'); ?>

<?php $posts = fuel_model('blog_posts', array('find' => 'all', 'limit' => 3, 'order' => 'sticky, date_added desc', 'module' => 'blog')) ?> <?php if (!empty($posts)) : ?> <h2>The Latest from our Blog</h2> <ul> <?php foreach($posts as $post) : ?> <li> <h4><a href="<?php echo $post->url; ?>"><?php echo $post->title; ?></a></h4> <?php echo $post->get_excerpt(200, 'Read More'); ?> </li> <?php endforeach; ?> </ul>  <?php endif; ?>
	
<?php $this->load->view('_blocks/footer')?>	

</body>
</html>