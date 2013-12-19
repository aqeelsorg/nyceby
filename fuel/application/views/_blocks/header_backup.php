<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
	<?php if (!empty($is_blog)) : ?>
	<title><?php echo $CI->fuel_blog->page_title($page_title, ' : ', 'right')?></title>
	<?php else : ?>
	<title><?php echo fuel_var('page_title', '')?></title>
	<?php endif ?>
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>" />
	<meta name="description" content="<?php echo fuel_var('meta_description')?>" />

	<?php echo css('main,style,pro_drop_1,modal'); ?>
	<?php echo css($css); ?>
	
	<?php echo js('jquery, main'); ?>
	<?php echo js($js); ?>
	
	<?php if (!empty($is_blog)) : ?>
	<?php echo $CI->fuel_blog->header()?>
	<?php endif; ?>
	<base href="<?php echo site_url()?>" />
	
	<?php  	$this->load->helper('form');  ?>
</head>


<body class="<?php echo fuel_var('body_class', 'Body Class');?>">


<div class="header">
<div class="inner">

<h1 class="logo">

<a href="#"><img src="<?php echo base_url() ?>/template/img/band_Logo8.png" width="30" height="30" style="margin-left:47px;margin-top: -16px"/></a>

<a href="<?php echo site_url(); ?>site/index" style="
margin-left: 45px;"><!--<img src="<?php echo base_url() ?>/template/img/logotext.png" width="100" height="42" style="margin-top: 3px;
margin-left:9px;"/>--><p style="line-height:0px;">N</p>yceby</a>

</h1>

<ul id="nav" style="margin-left: 2%;">
	<li class="top"><a href="#nogo1" class="top_link"><span>Catalog<?php echo lang('catalog');?></span></a>

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
              <li><a href="<?php echo base_url();?>site/terms_service">Terms of Service</a>
					
			</li>
            <li><a href="<?php echo base_url();?>site/privacy_policy">Privacy</a>
					
			</li>
            <li><a href="<?php echo base_url();?>site/copyright">Copyright</a>
					
			</li>
            </ul></li>
</ul>


<div style="width: 35%;float: left;margin-top: 8px;">
	 <input type=search results=2 name=term autosave="unique" placeholder="Search" style="width: 96%;padding: 6px;
line-height: 11px;"/>
</div>


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

<a href="#x" class="overlay" id="join_form"></a>
        <div class="popup" style="background-color: rgba(255, 255, 255, 0.22);">
		<div class="join_register">
		
		 <h2>Join NyceBy</h2>

            <p>Create your account on NyceBy.</p>
		<?php if ($this->session->flashdata('registration_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert" style="top: 70px;">×</a>
				<?php echo $this->session->flashdata('registration_message');?>
			</div>
		<?php endif;?>
		<ul class="sns-major">
						 <div class="demo" style="width: 388px;
margin-left: 8%;">
            <ul>
            
                <li style="width: 90px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-facebook" 
style="font-size: 31px;
padding: 11px;
height: 30px;
border-radius: 50%;
padding-top: 17px;">
                </i></span><span></span> </a></li>
                <li style="width: 90px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-google-plus"
style="font-size: 31px;
padding: 11px;
height: 30px;
border-radius: 50%;
padding-top: 17px;">
                </i></span><span></span></a> </li>
                <li style="width: 90px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-twitter"
style="font-size: 31px;
padding: 11px;
height: 30px;
border-radius: 50%;
padding-top: 17px;">
                </i></span><span></span></a> </li>
        
            </ul>
        </div>
			</ul>
		
		<?php // echo form_open('user/register');  ?>
			<div>
			
			<?php
			
			$data = array(
              'name'        => 'username',
              'id'          => 'username',
			  'placeholder' => "Enter your UserName.."
            );

		//	echo form_input($data);
			?>
			  
			</div>
			<div>
			<?php
			
				$data = array(
              'name'        => 'email',
              'id'          => 'email',
			  'placeholder' => "Enter your Email.."
            );

			//echo form_input($data);
			?>
			  </div>
			   <div>
			<?php
				$data = array(
				  'name'        => 'password',
				  'id'          => 'password',
				  'placeholder' => "Enter your password.."
				);
				//echo form_password($data);
			?>
               </div>
			   <div>
			<?php
				$data = array(
				  'name'        => 'confirm_password',
				  'id'          => 'confirm_password',
				  'placeholder' => "Please Confirm Password.."
				);
				//echo form_password($data);
			?>
              </div>
			  	   <p class="acc_text">Have an account?<a href="#login_form" id="login_pop" style="text-decoration: none;
			color: #BBBBBB;font-weight: bold;padding-left: 6px;">Log In</a>
		</p>
			   <input type="submit" style="cursor:pointer;" value="Sign Up" class="bt_sign"/>
		
		<?php  //echo form_close();  ?>
	<a class="close" href="#close" style="top:0;"></a>
	</div>
        </div>
</div>
        
<!--         <div class="cart12_text">
<p>Your cart is empty</p>
</div>-->
      
<div class="lan_pop" style="margin-left: 0px;width: 8%;">
 <ul id="nav" style="left:0;">
	<li class="top"><a href="#nogo1" class="top_link" style="border-right: 1px solid #505050;padding-left: 0px;"><span>Account</span></a>
    <ul class="sub" style="width: 100px; padding: 5px 0px 10px 5px;">
			
            <li><a href="#nogo3" >My Account</a></li>
            <li><a href="#nogo3" >My Download</a></li>
            <li><a href="<?php echo site_url('user/logout');?>" >Logout</a></li>
            
            </ul>
    
    </li></ul>
</div>

<div class="login_wrap">
 <ul class="bmenu">
 <li>
 <a href="#join_form" class="tag50"><!--<input type="button" value="Join Free" style="background: #222;width: 98%;
padding: 4px;border: 1px solid #4D4D4D;
border-radius: 3px;color: #FFF;height: 36px;
cursor: pointer; font-family:'museo700regular';font-size: 13px;margin-top: 5px;"/>-->Join Free</a>

</li>
<li>	

        <a href="#login_form">Login</a>
           
        </li></ul>

        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup" style="background-color: rgba(255, 255, 255, 0.22);">
        <div class="join_register" style="height: 468px;top: 0;">
		
		<h2>Log In to NyceBy</h2>
            <p>Enter your username and password for log in to NyceBy.</p>
			
					<?php if ($this->session->flashdata('login_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('login_message');?>
			</div>
		<?php endif;?>
            <ul class="sns-major">
                <div class="demo" style="width: 388px;
margin-left:5%;">
            <ul>
            
                <li style="width: 90px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-facebook" 
style="font-size: 31px;
padding: 11px;
height: 30px;
border-radius: 50%;
padding-top: 17px;">
                </i></span><span></span> </a></li>
                <li style="width: 90px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-google-plus"
style="font-size: 31px;
padding: 11px;
height: 30px;
border-radius: 50%;
padding-top: 17px;">
                </i></span><span></span></a> </li>
                <li style="width: 90px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-twitter"
style="font-size: 31px;
padding: 11px;
height: 30px;
border-radius: 50%;
padding-top: 17px;">
                </i></span><span></span></a> </li>
        
            </ul>
        </div>
                
			</ul>
			<?php echo form_open('user/login'); ?>
                     <div>
             
                <?php
			
				$data = array(
              'name'        => 'email',
              'id'          => 'email',
			  'placeholder' => "Enter your Email.."
            );

			echo form_input($data);
			?>
            </div>
            <div style="margin-top: 37px;">
               
              <?php
				$data = array(
				  'name'        => 'password',
				  'id'          => 'password',
				  'placeholder' => "Enter your password.."
				);
				echo form_password($data);
			?>
            </div>
			<div style="margin-top: 20px;
margin-bottom: 5px;
width: 55%;">
                <label for="remember_me"></label>
                <?php
				$data = array(
              'name'        => 'rememberme',
              'id'          => 'rememberme',
			  'type'	=> 'checkbox'
            );

			//echo form_input($data); ?>  Remember me
            </div>
            <input type="submit" name="submit" style="cursor:pointer;" value="Log In" class="bt_log" />
			<?php
                    echo anchor('#join_form', 'Create Account','style="float: right;
width: 42%;
margin-top: 24px;
text-align: right;
margin-right: 2%;"');
                  //  echo form_close(); 
           ?>
		    <a class="close" href="#close" style="top:0;"></a>
            </div>
        </div>
        	
		</div>



        </div>
		<?php echo fuel_nav(array('container_tag_id' => 'topmenu', 'item_id_prefix' => 'topmenu_','var'=>'nav')); ?>