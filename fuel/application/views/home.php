<?php 
		
		$this->load->view('before_login_header.php'); 
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->helper('form');
		``
?>

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

  <div id="login" class="animate form" style=" height:auto;">

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
height:25px;
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
            
            <div style="width:50%; height:40px; float:left;"></div>
            
          <?php echo form_close(); ?>

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
    