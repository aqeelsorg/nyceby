<?php 
	ini_set('display_errors', 1);
	$this->load->view('includes/header'); 
	$this->load->helper('html');
	$this->load->helper('url');
	$this->load->helper('form');
?>
<head>
    <title><?php echo (!empty($seo_title)) ? $seo_title .' - ' : ''; echo $this->config->item('company_name'); ?></title>
<?php if(isset($meta)):?>
	<?php echo $meta;?>
<?php else:?>
<meta name="Keywords" content="Shopping Cart, eCommerce, Code Igniter">
<meta name="Description" content="Go Cart is an open source shopping cart built on the Code Igniter framework">
<?php endif;?>


<?php
//with this I can put header data in the header instead of in the body.
if(isset($additional_header_info))
{
	echo $additional_header_info;
}

?>
<script type="text/javascript">
  window.fbAsyncInit = function() {
	  //Initiallize the facebook using the facebook javascript sdk
     FB.init({ 
       appId:'<?php echo $this->config->item('appID'); ?>', // App ID 
	   cookie:true, // enable cookies to allow the server to access the session
       status:true, // check login status
	   xfbml:true, // parse XFBML
	   oauth : true //enable Oauth 
     });
   };
   //Read the baseurl from the config.php file
   (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
	//Onclick for fb login
 $('#facebook').click(function(e) {
    FB.login(function(response) {
	  if(response.authResponse) {
		  parent.location ='<?php echo $base_url; ?>facebook1/fblogin'; //redirect uri after closing the facebook popup
	  }
 },{scope: 'email,read_stream,publish_stream,user_birthday,user_location,user_work_history,user_hometown,user_photos'}); //permissions for facebook
});
   </script>
   <script type="text/javascript" src="<?php echo base_url();?>/template/js/facebook/jquery.min.js"></script>
</head>
<body>



<div class="header">
<div class="inner">

<h1 class="logo">

<a href="#"><img src="<?php echo base_url() ?>/template/img/band_Logo8.png" width="30" height="30" style="margin-left:47px;margin-top: 8px"/></a>

<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url() ?>/template/img/logotext.png" width="100" height="42" style="margin-top: 3px;
margin-left:9px;"/></a>

</h1>

<ul id="nav" style="margin-left: 2%;">
	<li class="top"><a href="#nogo1" class="top_link"><span><?php echo lang('catalog');?></span></a>
    <ul class="sub">
			<li><a href="#nogo3" class="fly">By Category</a>
			<ul class="textarea">
			<li>
			<?php foreach($categories as $cat_menu):?>
			<li><a href="<?php echo site_url().'site/category/'.($cat_menu['category']->id);?>"><?php echo $cat_menu['category']->name;?></a></li>
			<?php endforeach;?>
			</li></ul>
	
			</li></ul>
    
    </li>
	
		<li class="top"><a href="#nogo2" id="products" class="top_link" style="border-right: 1px solid #505050;"><span class="down">Help</span></a>
		<ul class="sub">
			<li><a href="#nogo3">About Us</a>
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

<a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
		
		 <h2>Join priceytag</h2>

            <p>Create your account on priceytag.</p>
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
		<?php  echo form_open('user/register');  ?>
			<div>
			<?php
				$data = array(
              'name'        => 'username',
              'id'          => 'username',
			  'placeholder' => "Enter your UserName.."
            );

			echo form_input($data);
			?>
			  </div>
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
			   <div>
			<?php
				$data = array(
				  'name'        => 'password',
				  'id'          => 'password',
				  'placeholder' => "Enter your password.."
				);
				echo form_password($data);
			?>
               </div>
			   <div>
			<?php
				$data = array(
				  'name'        => 'confirm_password',
				  'id'          => 'confirm_password',
				  'placeholder' => "Please Confirm Password.."
				);
				echo form_password($data);
			?>
              </div>
			   <input type="submit" style="cursor:pointer;" value="Sign Up" class="bt_sign"/>
			   <p class="acc_text">Have an account?<a href="#login_form" id="login_pop" style="text-decoration: none;
			color: #5A5A5A;font-weight: bold;padding-left: 6px;">Log In</a>
		</p>
		<?php  echo form_close();  ?>
	<a class="close" href="#close" style="top:0;"></a>
        </div>
</div>
        
<!--         <div class="cart12_text">
<p>Your cart is empty</p>
</div>-->
         <?php if($this->customer_model->is_logged_in(false, false)):?>
<div class="lan_pop" style="margin-left: 0px;width: 8%;">
 <ul id="nav" style="left:0;">
	<li class="top"><a href="#nogo1" class="top_link" style="border-right: 1px solid #505050;padding-left: 0px;"><span>Account</span></a>
    <ul class="sub" style="width: 100px; padding: 5px 0px 10px 5px;">
			
            <li><a href="#nogo3" >My Account</a></li>
            <li><a href="#nogo3" >My Download</a></li>
            <li><a href=""<?php echo site_url('user/logout');?>" >Logout</a></li>
            
            </ul>
    
    </li></ul>
</div>
<?php else: ?>
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
        <div class="popup">
		<h2>Log In to priceytag</h2>
            <p>Enter your username and password for log in to priceytag.</p>
			
					<?php if ($this->session->flashdata('login_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('login_message');?>
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
			<?php echo form_open('user/login'); ?>
                     <div>
                <label for="login"></label>
                <?php
			
				$data = array(
              'name'        => 'email',
              'id'          => 'email',
			  'placeholder' => "Enter your Email.."
            );

			echo form_input($data);
			?>
            </div>
            <div>
                <label for="password"></label>
              <?php
				$data = array(
				  'name'        => 'password',
				  'id'          => 'password',
				  'placeholder' => "Enter your password.."
				);
				echo form_password($data);
			?>
            </div>
			<div>
                <label for="remember_me"></label>
                <?php
				$data = array(
              'name'        => 'rememberme',
              'id'          => 'rememberme',
			  'type'	=> 'checkbox'
            );

			echo form_input($data); ?>  Remember me
            </div>
            <input type="submit" name="submit" style="cursor:pointer;" value="Log In" class="bt_log" />
			<?php
                    echo anchor('#join_form', 'Create Account');
                    echo form_close(); 
           ?>
		    <a class="close" href="#close" style="top:0;"></a>
        </div>
        	
		</div>

<?php endif; ?> 
        </div>
        </div>
       
<?php if(!empty($base_url) && is_array($base_url)):?>
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						<?php
						$url_path	= '';
						$count	 	= 1;
						foreach($base_url as $bc):
							$url_path .= '/'.$bc;
							if($count == count($base_url)):?>
								<li class="active"><?php echo $bc;?></li>
							<?php else:?>
								<li><a href="<?php echo site_url($url_path);?>"><?php echo $bc;?></a></li> <span class="divider">/</span>
							<?php endif;
							$count++;
						endforeach;?>
 					</ul>
				</div>
			</div>
		<?php endif;?>
		
		
		
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
		