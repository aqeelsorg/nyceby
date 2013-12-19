<?php 

 if($this->customer_model->is_logged_in(false, false))
		{
                    $this->load->view('site/header_aft_logged_in');
                }
                else 
                    {
                        $this->load->view('site/header1');	 
                }
ini_set('display_errors', 1);
$this->load->view('includes/header'); 
$this->load->view('site/header1');
        
 
		$this->load->helper('html');
		$this->load->helper('url');
?>
<head>
    <script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.min.js"></script>
</head>
 <?php if ($this->session->flashdata('message')):?>
			<div class="alert alert-info" style="margin-top: 73px;">
				<a class="close" data-dismiss="alert" style="background: none;
top: 78px;
right: 2%;cursor:pointer;">×</a>
				<?php echo $this->session->flashdata('message');?>
			</div>
		<?php endif;?>

<div class="register_page">

		<div class="join_register" style="background:rgba(252, 252, 252, 0.58); height:326px;">
		
		 <h2>Join NyceBy</h2>

            <p>Create your account on NyceBy.</p>
		<?php if ($this->session->flashdata('registration_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert" style="top: 70px;">×</a>
				<?php echo $this->session->flashdata('registration_message');?>
			</div>
		<?php endif;?>


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
              		   <div>
			<?php
				$data = array(
				  'name'        => 'city',
				  'id'          => 'city',
				  'placeholder' => "City.."
				);
				echo form_input($data);
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
		
	<?php   echo form_close(); ?>
	</div>
	</div>
    
    
    <!------------------REGISTER---------------->
    
    <div class="divider"></div>
    
    
    <div class="register_page" style="margin-left: 8%;">

		<div class="join_register" style="background:rgba(252, 252, 252, 0.58);height:326px;">
		
		 <h2>Join NyceBy</h2>

            <p>Enter your username and password for log in to NyceBy.</p>
		<?php if ($this->session->flashdata('registration_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert" style="top: 70px;">×</a>
				<?php echo $this->session->flashdata('registration_message');?>
			</div>
		<?php endif;?>


		<?php  echo form_open('user/login');  ?>
		
			<div class="login_reg">
			<?php
			
				$data = array(
              'name'        => 'email',
              'id'          => 'email',
			  'placeholder' => "Enter your Email.."
            );

			echo form_input($data);
			?>
			  </div>
			   <div  class="login_reg" style="margin-bottom: 8px;">
			<?php
				$data = array(
				  'name'        => 'password',
				  'id'          => 'password',
				  'placeholder' => "Enter your password.."
				);
				echo form_password($data);
			?>
               </div>
	
    <input type="hidden" name="checklogin" value="1"/>
			   <input type="submit" name="submit" style="cursor:pointer;" value="Log In" class="bt_sign"/>
		<?php   echo form_close(); ?>
		
	</div>
	</div>