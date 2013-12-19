<?php 
		$this->load->view('includes/header'); 
		$this->load->view('header1'); 
		$this->load->helper('html');
		$this->load->helper('url');
?>	


<head>


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/main_page.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/animate-custom.css"/>


<script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/parallaxstyle.css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/modernizr.custom.28468.js"></script>


<script type="text/javascript">
            $(function() {
			
				$('#da-slider').cslider();
				
			});
</script>

<script>
    function validateLoginForm()
    {
        
        var email1 = document.getElementById('email1').value;
	if(email1 == '' || email1 == null)
	{
			//alert("Enter Your First Name");
			//document.getElementById('username').focus();
                        document.getElementById("email1").style.borderColor="#FF0000";
                        document.getElementById("email1").style.borderWidth="2px";
                     
                        //document.getElementById('username_error').innerHTML="Enter Your First Name";
                        $("#email").attr("placeholder", "Please enter valid user name !"); 
			return false;
	}
        
        var password1 = document.getElementById('password1').value;
	if(password1 == '' || password1 == null)
	{
			//alert("Enter Your First Name");
			//document.getElementById('username').focus();
                        document.getElementById("password1").style.borderColor="#FF0000";
                        document.getElementById("password1").style.borderWidth="2px";
                     
                        //document.getElementById('username_error').innerHTML="Enter Your First Name";
                        $("#password1").attr("placeholder", "Please enter valid Password !"); 
			return false;
	}
        
        
        
        
        return true ;
    }
        </script>



<script>
    function validateForm()
    {
        
        var username = document.getElementById('username').value;
	if(username == '' || username == null)
	{
			//alert("Enter Your First Name");
			//document.getElementById('username').focus();
                        document.getElementById("username").style.borderColor="#FF0000";
                        document.getElementById("username").style.borderWidth="2px";
                     
                        //document.getElementById('username_error').innerHTML="Enter Your First Name";
                        $("#username").attr("placeholder", "Please enter your first name"); 
			return false;
	}
        
        if(username != '' )
            {
                document.getElementById("username").style.borderColor="000";
            }
        
        var email = document.getElementById('email').value;
	if(email == '' || email == null)
	{
			
                        document.getElementById("email").style.borderColor="#FF0000";
                        $("#email").attr("placeholder", "Not a valid e-mail address"); 
			return false;
            

	}
        
        var email = document.getElementById('email').value;                       
        var atpos=email.indexOf("@");
        var dotpos=email.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
        {
          $("#email").attr("placeholder", "Not a valid e-mail address");
          return false;
         }
        
        
        
        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirm_password').value;
	if(password != confirm_password )
	{
			alert("Password does not matched..!");
                        document.getElementById('password').focus();
                        document.getElementById('confirm_password').focus();
                       // document.getElementById("email").style.borderColor="#FF0000";
                       // $("#email").attr("placeholder", "enter Valid email id "); 
			return false;
	}
        
        return true ;
        
    }
</script>
                
  
<script type="text/javascript">
    $(function()
{
	$('[data-toggle="notyfy"]').click(function () 
	{
		var self = $(this);
		if(self.data('layout') == 'inline') 
		{
			$(self.data('custom')).notyfy(
			{
				text: text[self.data('type')],
				type: self.data('type'),
				dismissQueue: true,
				buttons: (self.data('type') != 'confirm') ? false : [{
					addClass: 'btn btn-success btn-small glyphicons btn-icon ok_2',
					text: '<i></i> Ok',
					onClick: function ($notyfy) {
						$notyfy.close();
						$(self.data('custom')).notyfy({
							force: true,
							text: 'You clicked "<strong>Ok</strong>" button.',
							type: 'success'
						});
					}
				}, {
					addClass: 'btn btn-danger btn-small glyphicons btn-icon remove_2',
					text: 'Cancel',
					onClick: function ($notyfy) {
						$notyfy.close();
						$(self.data('custom')).notyfy({
							force: true,
							text: 'You clicked "Cancel" button',
							type: 'error'
						});
					}
				}]
			});
			return false;
		}

		notyfy({
			text: notification[self.data('type')],
			type: self.data('type'),
			dismissQueue: true,
			layout: self.data('layout'),
			buttons: (self.data('type') != 'confirm') ? false : [{
				addClass: 'btn btn-success btn-small btn-icon glyphicons ok_2',
				text: '<i></i> Ok',
				onClick: function ($notyfy) {
					$notyfy.close();
					notyfy({
						force: true,
						text: 'You clicked "<strong>Ok</strong>" button',
						type: 'success',
						layout: self.data('layout')
					});
				}
			}, {
				addClass: 'btn btn-danger btn-small btn-icon glyphicons remove_2',
				text: '<i></i> Cancel',
				onClick: function ($notyfy) {
					$notyfy.close();
					notyfy({
						force: true,
						text: '<strong>You clicked "Cancel" button<strong>',
						type: 'error',
						layout: self.data('layout')
					});
				}
			}]
		});
		return false;
	});
	
	/* Gritter Notifications */
	
	/* Global setting override
	$.extend($.gritter.options, {
	    class_name: 'gritter-light', // for light notifications (can be added directly to $.gritter.add too)
	    position: 'bottom-left', // possibilities: bottom-left, bottom-right, top-left, top-right
		fade_in_speed: 100, // how fast notifications fade in (string or int)
		fade_out_speed: 100, // how fast the notices fade out
		time: 3000 // hang on the screen for...
	});
    */

$('.gritter-add-sticky1').click(function()
	{
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'deleted !',
			// (string | mandatory) the text inside the notification
			text: 'delete',
			// (string | optional) the image to display on the left
			//image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: true,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
		
		// You can have it return a unique id, this can be used to manually remove it later using
		/*
		setTimeout(function(){

			$.gritter.remove(unique_id, {
				fade: true,
				speed: 'slow'
			});

		}, 6000)
		*/
		return false;
	});





	$('.gritter-add-sticky').click(function()
	{
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'You are not loggedin!',
			// (string | mandatory) the text inside the notification
			text: 'Please login to add item in your Nycepage',
			// (string | optional) the image to display on the left
			//image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: true,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
              //  alert(unique_id.text);
		
		// You can have it return a unique id, this can be used to manually remove it later using
		/*
		setTimeout(function(){

			$.gritter.remove(unique_id, {
				fade: true,
				speed: 'slow'
			});

		}, 6000)
		*/
		return false;
	});

	$('.gritter-add-regular').click(function()
	{
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a regular notice!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (string | optional) the image to display on the left
			image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: ''
		});

		return false;

	});
	
	$('.gritter-add-primary').click(function()
	{
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a primary notice!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (string | optional) the image to display on the left
			image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'gritter-primary'
		});

		return false;

	});

    $('.gritter-add-max').click(function()
    {
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Deleted',
            // (string | mandatory) the text inside the notification
            text: 'deleted',
            // (string | optional) the image to display on the left
            image: '',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (function) before the gritter notice is opened
            before_open: function(){
                if($('.gritter-item-wrapper').length == 3)
                {
                    // Returning false prevents a new gritter from opening
                    return false;
                }
            }
        });
        return false;
    });

	$('.gritter-add-without-image').click(function()
	{
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a notice without an image!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.'
		});
		return false;
	});

    $('.gritter-add-white').click(function()
    {
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a light notification',
            // (string | mandatory) the text inside the notification
            text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
            class_name: 'gritter-light'
        });
        return false;
    });

});

var notification = [];

notification['alert'] = 'Best check yo self, you\'<strong>re not looking too good</strong>.';
notification['primary'] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
notification['error'] = '<strong>Change a few things up and try submitting again.</strong> This Error message.';
notification['success'] = 'You <strong>successfully</strong> read this important alert message.';
notification['information'] = '<?php echo lang('wishit'); ?>';
notification['warning'] = '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.';
notification['confirm'] = 'Do you want to continue?';
</script> 

              
                
</head>
<body style="background:none;">

			<div id="da-slider" class="da-slider">
            
            		<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/auction-house.jpeg" alt="image01" />
					<div class="yyy" style="margin:0 auto;margin-top: 67px;height:600px; display:block;position: fixed;
top: 0;
bottom: 0;">
<!--<a class="btn btn-info"  data-layout="top" data-type="information" data-toggle="notyfy">-->
 <a class="hiddenanchor" id="toregister"></a>
 <a class="hiddenanchor" id="tologin"></a>
 
<div id="wrapper_main">

  <div id="login" class="animate form" style="margin-left: 8%; height:auto;">

		<div class="join_register" style="background:rgba(252, 252, 252, 0.58);height:auto; float:left;margin-bottom: 8px;">
		
		 <h3 style="
color: #000;
font-size: 18px;
width: 100%;
text-align: center;
margin-top: 20px;
float: left;">Join NyceBy</h3>

            <span style="margin-bottom: 17px;
font-size: 13px;
color: #494949;
width: 77%;
text-align: center;
margin-left: 10%;
font-weight: bold;
float: left;
">Enter your username and password for log in to NyceBy.</span>


		
					<?php if ($this->session->flashdata('login_message')):?>
			<div id="user_message"  class="alert alert-error" style="width: 83%;
margin-left: 4%;">
				<a class="close" data-dismiss="alert" style="background: none;
top: 87px;
left: 461px;">×</a>
				<?php echo $this->session->flashdata('login_message');?>
			</div>
		<?php endif;?>


		<?php  $attributes = array('onsubmit' =>"return validateLoginForm()");
                echo form_open('user/login',$attributes);  ?>
                                     <ul class="sns-major" style="width: 100%;">
                
				<li style="float: left;"><button class="btn-f facebook" style="margin-top: 9px;margin-left: 11%;"><span class="icon ic-fb"><i></i></span> <b>Facebook</b></button></li>
				<li style="float: left;"><button class="btn-g google" id="fancy-g-signin" next="/" data-gapiattached="true" style="margin-top: 9px;margin-left: 19%;"><span class="icon ic-gg"><i></i></span> <b>Google</b></button></li>
				<li><button class="btn-t twitter" style="margin-top: 9px;margin-left: 8%;"><span class="icon ic-tw"><i></i></span> <b>Twitter</b></button></li>
                
			</ul>
                                <div style="float: left;
width: 88%;
margin-left: 11%;">
		
			<div class="login_reg">
			<?php
			
				$data = array(
              'name'        => 'email',
              'id'          => 'email1',
			  'placeholder' => "Enter your Email.."
            );

			echo form_input($data);
			?>
			  </div>
			   <div  class="login_reg" style="margin-top: 8px;">
			<?php
				$data = array(
				  'name'        => 'password',
				  'id'          => 'password1',
				  'placeholder' => "Enter your password.."
				);
				echo form_password($data);
			?>
               </div>
	
    <input type="hidden" name="checklogin" value="1"/>
			   <input type="submit" name="submit" style="cursor:pointer;" value="Log In" class="bt_sign"/>
			   </div>
			   
     
            <div style="width:50%; height:20px; float:left;"></div>
		
		<?php   echo form_close(); ?>
		
		   <div class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</div>
	</div>
	</div>




                        <div id="register" class="animate form" style="padding-bottom:15px; height:auto;">

		<div class="join_register" style="background:rgba(252, 252, 252, 0.58); height:auto; float:left;margin-bottom: 8px;">
		
		 <h3 style="
color: #000;
font-size: 18px;
width: 100%;
text-align: center;
margin-top: 20px;
float: left;">Welcome to NyceBy!</h3>

            <span style="
font-size: 16px;
color: #494949;
 width: 100%;
text-align: center;
font-weight: bold;float: left; margin-bottom:15px;
">Sign up free</span>
                    
<?php if ($this->session->flashdata('message')):?>
			<div class="alert alert-info">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('message');?>
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
		
		<?php if ($this->session->flashdata('registration_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert" style="top: 70px;">×</a>
				<?php echo $this->session->flashdata('registration_message');?>
			</div>
		<?php endif;?>



		<?php  
                
                $attributes = array('onsubmit' =>"return validateForm()");
                echo form_open('user/register',$attributes);  ?>
                
                <div style="float: left;
width: 62%;
margin-left: 0%;">

			<div>
			<?php
			
				$data = array(
              'name'        => 'email',
              'id'          => 'email',
			  'placeholder' => "Email.."
            );

			echo form_input($data);
			?>
			  </div>
			   <div>
			<?php
				$data = array(
				  'name'        => 'password',
				  'id'          => 'password',
				  'placeholder' => "password.."
				);
				echo form_password($data);
			?>
               </div>
			   <div>
			<?php
				$data = array(
				  'name'        => 'confirm_password',
				  'id'          => 'confirm_password',
				  'placeholder' => "Confirm Password.."
				);
				echo form_password($data);
			?>
              </div>
     
              		   <div>
		<select name="">
        <option>Male</option>
        <option>Female</option>
        </select>
              </div>
		          <input type="hidden" name="checkreg" value="1"/>
			   <input type="submit" style="cursor:pointer;" value="Sign Up" class="bt_sign"/>
               </div>
               
       <ul class="sns-major" style="height: 209px;">
                
				<li style="float: left;"><button class="btn-f facebook"><span class="icon ic-fb"><i></i></span> <b>Facebook</b></button></li>
				<li style="float: left;"><button class="btn-g google" id="fancy-g-signin" next="/" data-gapiattached="true"><span class="icon ic-gg"><i></i></span> <b>Google</b></button></li>
				<li><button class="btn-t twitter"><span class="icon ic-tw"><i></i></span> <b>Twitter</b></button></li>
                
			</ul>
            
            <div style="width:50%; height:20px; float:left;"></div>
<?php   echo form_close(); ?>

	<div class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</div>
	</div>
	</div>
    
    
    <!------------------REGISTER---------------->
    

    
</div>



</div>
        <div class="da-img"></div>
				</div>

				<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/1img.jpg" alt="image01" />
					<h2 style="left: 20%;">Build Your NyceBy: Page</h2>
				
					<?php if ($this->session->flashdata('login_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('login_message');?>
			</div>
		<?php endif;?>				<!--<a href="#" class="da-link">Read more</a>-->
                    
					<div class="da-img"></div>
				</div>
                
                
                		<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/1img.jpg" alt="image01" />
					
				<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                 </p>
					<!--<a href="#" class="da-link">Read more</a>-->
                    
					<div class="da-img"></div>
				</div>
                
                
				<div class="da-slide">
                                <img src="<?php echo base_url(); ?>template/img/large/2img.jpg" alt="image01" />
					<h2>Bid, Buy, & Sell Nyceby: Design</h2>

					<div class="da-img"></div>
				</div>
                

				<div class="da-slide">
                           <img src="<?php echo base_url(); ?>template/img/large/2img.jpg" alt="image01" />
<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there </p>
				
					<div class="da-img"></div>
				</div>
				<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/3img.jpg" alt="image01" />
					<h2>Enjoy Top Pick Items from
                    your Favorite Social Networks</h2>

					<div class="da-img"></div>
				</div>
                
                		<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/3img.jpg" alt="image01" />
					<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                     </p>
			
					<div class="da-img"></div>
				</div>
                
                
                
                			<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/4img.jpg" alt="image01" />
					<h2>Invite Friends & Followers to your Nyceby: Profile</h2>
			
					<div class="da-img"></div>
				</div>
                
                			<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/4img.jpg" alt="image01" />
				
						<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                     </p>
				
					<div class="da-img"></div>
				</div>
                
                
                			<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/5img.jpg" alt="image01" />
					<h2>"Nice It" and Share All In One Place</h2>
				
					<div class="da-img"></div>
				</div>
                
                
                			<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/5img.jpg" alt="image01" />
				
						<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                     </p>
		
					<div class="da-img"></div>
				</div>
                
                			<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/6img.jpg" alt="image01" />
					<h2>New York Commerce Exchange By You</h2>
		
					<div class="da-img"></div>
				</div>
                
                			<div class="da-slide">
                <img src="<?php echo base_url(); ?>template/img/large/6img.jpg" alt="image01" />
					
						<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                     </p>

					<div class="da-img"></div>
				</div>
                
                
                
                
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
			



    <div class="invitation_footer" style="clear:both;">
    <ul>
    <li><a href="#" title="About us">About us</a></li>
    <li><a href="<?php echo base_url();?>site/blogwithus" title="Blog with us">Blog with us</a></li>
    <li><a href="#" title="Investor">Investor</a></li>
    <li><a href="#" title="Terms & Conditions">Terms & Conditions</a></li>
    <li><a href="#" title="Help">Help</a></li>
    <li><a href="#" title="Contact us">Contact us</a></li>
    <li><a href="#" title="Privacy">Privacy</a></li>
    </ul>
    </div>
		
</body>
    