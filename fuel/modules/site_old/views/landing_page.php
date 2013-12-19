<?php 
        
 
		$this->load->helper('html');
		$this->load->helper('url');
                
                 if($this->customer_model->is_logged_in(false, false))
		{
                        $this->load->view('site/header_aft_logged_in');
                }
                else 
                {
                        $this->load->view('site/header');	 
                }
 
		$this->load->helper('html');
		$this->load->helper('url');
?>


        
<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.min.js"></script>
       
<script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.min.js"></script>
      
<script type="text/javascript" src="<?php echo base_url();?>/template/js/lightview.js"></script>


  

<link rel="stylesheet" href="<?php echo base_url();?>/template/css/bootstrap.min.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo base_url();?>/template/css/bootstrap-responsive.min.css" type="text/css" media="screen" />

<script src="<?php echo base_url();?>/template/js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-1.4.2.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/glyphicons.css"/>
        
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/indexstyle-light.css"/>



<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/parallaxstyle.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/modernizr.custom.28468.js"></script>
	
<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.akordeon.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>

<script type="text/javascript">
            $(function() {
			
				$('#da-slider').cslider();
				
			});
</script>
<style>
.da-slider
{position: relative;
height:180px;
width: 47%;
margin-top:0px;
float:left;
margin-bottom: 15px;
box-shadow: none;
border:none;
}
.da-slide
{position:relative;
float:left;
}
.da-slide img
{width:25px;
height:25px;
margin-right: 3%;
float:left;
border: 1px solid #83919C;
}
.da-slide p
{color: #CECECE;
top: 13px;
width: 88%;
font-size: 11px;
float: left;
left: 0;
position: relative;
margin-left: 5%;
line-height: 18px;
text-align: justify;
}

.da-arrows span.da-arrows-prev
{left:4px;
}
.da-arrows span
{background:none;
top: 42%;
}
.da-dots span
{border: 1px solid #7A7A7A;
background:none;
}
.da-dots
{bottom:0;
}
</style>
</head>

<body>
<div style="width:100%; background:#000; float:left;">

<div class="blogpost_area" style="margin-top: 50px;">

<h1 style="float: right;
width: 23%;">Popular Post</h1>
<div class="blog_page" style="border: none;
margin-top: 10px;">

<div class="bloglanding_page">
<label>Word Mountains Vokalia</label>
<div class="img_bloglanding">
 <img src="<?php echo base_url(); ?>template/img/coverphoto.jpg"/>
</div>
<div class="load_image"></div>

<p>The Ultimate CSS Gradient Editor was created by Alex Sirota (iosart). If you like this tool, check out ColorZilla for more advanced tools such as eyedroppers, color pickers, palette editors and website analyzers.
As you might know, HTML5 introduced many exciting features for Web developers. One of the features is the ability to specify gradients using pure CSS3, without having to create any images and use them as repeating backgrounds for gradient effects.
Important: You'll need a recent version of Firefox, Chrome, Safari, Opera or IE to use this Gradient Generator. The resulting CSS gradients are cross-browser - they will work in these browsers and will also fall back to a simpler gradient in older versions of Internet Explorer.</p> 
<div class="posted_by">
<h5>Posted by :</h5>
<span>behind the word</span>
</div>


<div class="landingpage_category">
<h2>Category :</h2>
<ul>
<li><a href="#">Chain pattern</a></li>
<li><a href="#">Enterprise Patterns</a></li>
<li><a href="#">method invocation</a></li>
<li><a href="#">holder idiom</a></li>
</ul>
</div><!-------------landingpage_category------------->
<div style="width:80%; height:20px; float:left;"></div>
</div><!----------------bloglanding_page----------------->

<div class="landingpage_commntbox">
<textarea name=""></textarea>
<a href="#"><input type="submit" value="Comment"/></a>
</div>


<div style="width:80%; height:20px; float:left;"></div>
</div><!--------------blog_page------------>


<div class="popular_post">

<div class="postdisplay_1">
<div class="popularpost_img">
<img src="<?php echo base_url(); ?>template/img/coverphoto.jpg" width="60" height="60" style="border-radius: 40px;
border: 2px solid #3D3D3D;"/>
</div>
<a href="#"><label>countries Vokalia and Consonantia, there live the blind texts</label></a>

<div class="popularpost_date">
<span>13 June 2013</span>
</div>
</div><!------------postdisplay_1--------------->

<div class="postdisplay_2">
<div class="popularpost_img2">
<img src="<?php echo base_url(); ?>template/img/coverphoto.jpg" width="60" height="60" style="border-radius: 40px;
border: 2px solid #3D3D3D;"/>
</div>
<a href="#"><label>countries Vokalia and Consonantia, there live the blind texts</label></a>

<div class="popularpost_date2">
<span>13 June 2013</span>
</div>
</div><!------------postdisplay_2--------------->

<div class="postdisplay_1">
<div class="popularpost_img">
<img src="<?php echo base_url(); ?>template/img/coverphoto.jpg" width="55" height="55" style="border-radius: 40px;
border: 2px solid #3D3D3D;"/>
</div>
<a href="#"><label>countries Vokalia and Consonantia, there live the blind texts</label></a>

<div class="popularpost_date">
<span>13 June 2013</span>
</div>
</div><!------------postdisplay_1--------------->

<div class="postdisplay_2">
<div class="popularpost_img2">
<img src="<?php echo base_url(); ?>template/img/coverphoto.jpg" width="60" height="60" style="border-radius: 40px;
border: 2px solid #3D3D3D;"/>
</div>
<a href="#"><label>countries Vokalia and Consonantia, there live the blind texts</label></a>

<div class="popularpost_date2">
<span>13 June 2013</span>
</div>
</div><!------------postdisplay_2--------------->


</div><!----------popular_post-------------->


</div><!----------blogpost_area------------->


</div>
<div id="footer" style="top: 0;">
<?php 
            $this->load->view('site/footer');
 ?>
</div>	
</body>