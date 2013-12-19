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


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/parallaxstyle.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/modernizr.custom.28468.js"></script>
	
<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.akordeon.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/blog.css"/>

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
 <div class="recent_comm">
 <h3>Recent comments</h3>
 </div>
 	<div id="da-slider" class="da-slider">
	<div class="da-slide">
    <div class="recentcomment_box1">
     <div class="recent_img">
     <img src="<?php echo base_url(); ?>template/img/coverphoto.jpg"/>
        <label>word mountains</label> 
     </div>
         
<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,... </p>
					<!--<a href="#" class="da-link">Read more</a>-->
                    </div><!-----recentcomment_box1------>
                              
                    
  	</div><!-----------da-slide-------------->
    
    <div class="da-slide">
                
<p>fffftFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind 
                 </p>
					<!--<a href="#" class="da-link">Read more</a>-->
  	</div>
             
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
</div><!-----------da-slider------------>

<div class="search_blog">
<input type="search" results="2" name="term" autosave="unique" placeholder="Search">
</div>
<div class="blogpost_area">
<h1>Blogs</h1>
<h1 style="float: right;
width: 23%;">Popular Post</h1>
<div class="blog_page">

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->

<div class="blogs_1">
<div class="date">
<label>25<p style="font-size: 12px;color: #383838;width: 100%;text-align: center;">June 13</p></label>
</div>
<a href="#">
 <label style="float:left;">Word Mountains</label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
 <p> behind the word</p>
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo base_url(); ?>template/img/comment.png" style="margin-left: 9%;"/>
 <h5>24</h5>
 </a>
 </div>
</div><!----------blogs_1----------->



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