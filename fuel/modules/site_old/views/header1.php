<?php 
	ini_set('display_errors', 1);
	$this->load->view('includes/header'); 
	$this->load->helper('html');
	$this->load->helper('url');
	$this->load->helper('form');
?>
<head>
    <!--<title><?php // echo (!empty($seo_title)) ? $seo_title .' - ' : ''; echo $this->config->item('company_name'); ?></title>-->
<?php // if(isset($meta)):?>
	<?php // echo $meta;?>
<?php // else:?>
<!--<meta name="Keywords" content="Shopping Cart, eCommerce, Code Igniter">
<meta name="Description" content="Go Cart is an open source shopping cart built on the Code Igniter framework">-->
<?php // endif;?>


<?php
//with this I can put header data in the header instead of in the body.
//if(isset($additional_header_info))
//{
//	echo $additional_header_info;
//}

?>

</head>
<body>



<div class="header">
<div class="inner">

<h1 class="logo">

<a href="#"><img src="<?php echo base_url() ?>/template/img/band_Logo8.png" width="30" height="30" style="margin-left:47px;margin-top: -16px"/></a>

<a href="<?php echo site_url(); ?>site/index" style="
margin-left: 40px;"><!--<img src="<?php echo base_url() ?>/template/img/logotext.png" width="100" height="42" style="margin-top: 3px;
margin-left:9px;"/>--><p>N</p>yceby</a>
<img src="<?php echo base_url() ?>/template/img/colon.png" width="18" height="30" style="margin-top: 11px;"/>
</h1>

<ul id="nav" style="margin-left: 2%;">
	<li class="top"><a href="#nogo1" class="top_link"><span><?php echo lang('catalog');?></span></a>
     <ul class="sub">
			<li><a href="#nogo3" class="fly">By Category</a>
					<ul class="textarea">
						<li><a href="#nogo4">Americana</a></li>
						<li><a href="#nogo5" style="margin-left: 11px;">Antique</a></li>
						<li><a href="#nogo6">Architecture</a></li>
                        <li><a href="#nogo4" style="margin-left: 11px;">Art</a></li>
						<li><a href="#nogo5">Cameras</a></li>
						<li><a href="#nogo6" style="margin-left: 11px;">Cars & Motorcycles	</a></li>
                        <li><a href="#nogo4">Clocks & Watches</a></li>
						<li><a href="#nogo5" style="margin-left: 11px;">Coins, Currency, Stamps</a></li>
						<li><a href="#nogo6">Collectibles</a></li>
                        <li><a href="#nogo4" style="margin-left: 11px;">DIY & Crafts</a></li>
						<li><a href="#nogo5">Design</a></li>
						<li><a href="#nogo6" style="margin-left: 11px;">Electronics</a></li>
                        <li><a href="#nogo4">Faberge</a></li>
						<li><a href="#nogo5" style="margin-left: 11px;">Furniture</a></li>
						<li><a href="#nogo6">Gadgets</a></li>
                        <li><a href="#nogo4" style="margin-left: 11px;">History & Military</a></li>
						<li><a href="#nogo5">Holiday</a></li>
						<li><a href="#nogo6" style="margin-left: 11px;">Kid’s Fashion</a></li>
                        <li><a href="#nogo6">Kitchen</a></li>
                        <li><a href="#nogo4" style="margin-left: 11px;">Luxury Estate</a></li>
						<li><a href="#nogo5">Memorabilia</a></li>
						<li><a href="#nogo6" style="margin-left: 11px;">Men’s Fashion</a></li>
                        <li><a href="#nogo4">Paper & Writings</a></li>
						<li><a href="#nogo5" style="margin-left: 11px;">Photography </a></li>
						<li><a href="#nogo6">Sports & Outdoor</a></li>
                        <li><a href="#nogo4" style="margin-left: 11px;">Technology</a></li>
						<li><a href="#nogo5">Tools & Machines</a></li>
						<li><a href="#nogo6" style="margin-left: 11px;">Toy, Games, & Dolls</a></li>
                        <li><a href="#nogo6">Travel	</a></li>
                        <li><a href="#nogo6" style="margin-left: 11px;">Vintage</a></li>
                        <li><a href="#nogo6">Women’s Fashion</a></li>
					</ul>
			</li></ul>
    
    </li>
	
		<li class="top"><a href="#nogo2" id="products" class="top_link" style="border-right: 1px solid #505050;"><span class="down">Help</span></a>
		<ul class="sub">
			<li><a href="<?php echo base_url();?>site/about">About Us</a>
			</li>
            <li><a href="<?php echo base_url();?>user/signup" >Business</a>
				
			</li>
			<li><a href="#nogo3">Contact Us</a>
				
			</li>
            <li><a href="#nogo3">FAQ</a>
				
			</li>
            <li><a href="#nogo3">Terms of Service</a>
					
			</li>
            <li><a href="#nogo3">Privacy</a>
					
			</li>
            <li><a href="#nogo3">Copyright</a>
					
			</li>
            </ul></li>
</ul>

<?php echo form_open('site/search', 'class="search_form" style="width:31%"');?>
	 <input type=search results=2 name=term autosave="unique" placeholder="Search"/>
<?php echo form_close();?>

<div class="lan_pop" style="margin-left: 0px;width: 10%;">
 <ul id="nav">
	<li class="top"><a href="#nogo1" class="top_link" style="border-right: 1px solid #505050;"><span>English</span></a>
    <ul class="sub" style="width: 180px; padding: 5px 0px 0px 12px;">
			<li><a href="#nogo3" >Catala</a></li>
            <li><a href="#nogo3" >dansk</a></li>
            <li><a href="#nogo3" >Ελληνικά</a></li>
            <li><a href="#nogo3" >English</a></li>
            <li><a href="#nogo3" >Español</a></li>
            <li><a href="#nogo3" >Eesti</a></li>
            <li><a href="#nogo3" >Basque</a></li>
            <li><a href="#nogo3" >Filipino</a></li>
            <li><a href="#nogo3" >français</a></li>
            <li><a href="#nogo3" >Hindi</a></li>
            <li><a href="#nogo3" >Indonesian</a></li>
            <li><a href="#nogo3" >Íslenska</a></li>
            <li><a href="#nogo3" >Italiano</a></li>
            <li><a href="#nogo3" >Lithuanian</a></li>
            <li><a href="#nogo3" >Nederlands</a></li>
            <li><a href="#nogo3" >norsk</a></li>
            <li><a href="#nogo3" >Polski</a></li>
            <li><a href="#nogo3" >Português (br)</a></li>
            <li><a href="#nogo3" >Português (pt)</a></li>
            <li><a href="#nogo3" >Română</a></li>
            <li><a href="#nogo3" >Русский</a></li>
            <li><a href="#nogo3" >Slovenský</a></li>
            <li><a href="#nogo3" >Suomi</a></li>
            <li><a href="#nogo3" >svenska</a></li>
            <li><a href="#nogo3" >Thai</a></li>
            <li><a href="#nogo3" >Türkçe</a></li>
            <li><a href="#nogo3" >日本語</a></li>
            
            
            </ul>
    
    </li></ul>
</div>

<!--<div class="wrapper" style="float: left;
width: 8%;
margin-left: 2%;">

  </div> -->


<!--         <div class="cart12_text">
<p>Your cart is empty</p>
</div>-->
         
        </div>
    
       
  </div>
		
		
		
		<?php if ($this->session->flashdata('error')):?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('error');?>
			</div>
		<?php endif;?>
		
		<?php if (!empty($error)):?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $error;?>
			</div>
		<?php endif;?>
		