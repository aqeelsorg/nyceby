 <?php 	
//   $buyer_info = $this->session->userdata('buyer');
//                $b_id=$buyer_info['id'];
// $vars['comments'] = $this->customer_model->get_comments();
//$vars['followers_notification'] = $this->customer_model->get_followers_notification($b_id);
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
<head>
<script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="<?php echo base_url();?>/template/css/bootstrap.min.css" type="text/css" media="screen" />
	
        <link rel="stylesheet" href="<?php echo base_url();?>/template/css/bootstrap-responsive.min.css" type="text/css" media="screen" />
          
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-1.8.3.min.js"></script>
	
         <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.akordeon.js"></script>
        
        
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>

        
       
       <script type="text/javascript">
    $(document).ready(function () {
        $('#buttons').akordeon();
        $('#button-less').akordeon({ buttons: false, toggle: true, itemsOrder: [2, 0, 1] });
    });
</script>
        
        
        </head>

<?php 

if ($this->go_cart->total_items()==0):?>
	<div class="alert alert-info" style="margin-top:4%;">
		<a class="close" data-dismiss="alert" style="background: none;top:11px;">×</a>
		<?php echo lang('empty_view_cart');?>
	</div>
<?php else: ?>
<body style="background: none;">
     <div class="main_container">
	
     <div class="addtocart_page">
     <div class="add_bk">
             <div class="container_12" style="float:left;margin-top:28px;">	
	
	<?php echo form_open('site/update_cart', array('id'=>'update_cart_form'));?>
	
	<?php include('checkout/summary.php');?>
	
	<div class="row" style="width: 94%;
margin: 0 auto;
margin-top: 9px;">
		<div class="span5" style="float: left;">
			<label><?php echo lang('coupon_label');?></label>
			<input type="text" name="coupon_code" class="span3" style="margin:0px;">
			<input class="span2 btn" type="submit" value="<?php echo lang('apply_coupon');?>"/>
			
			<?php if($gift_cards_enabled):?>
				<label style="margin-top:15px;"><?php echo lang('gift_card_label');?></label>
				<input type="text" name="gc_code" class="span3" style="margin:0px;">
				<input class="span2 btn"  type="submit" value="<?php echo lang('apply_gift_card');?>"/>
			<?php endif;?>
		</div>
		
		<div class="span7" style="text-align: right;
float: left;
width: 403px;
margin-top: 21px;">
				<input id="redirect_path" type="hidden" name="redirect" value=""/>
	
				<?php if(!$this->customer_model->is_logged_in(false,false)): ?>
					<input class="btn" type="submit" onClick="$('#redirect_path').val('checkout/login');" value="<?php echo lang('login');?>"/>
					<input class="btn" type="submit" onClick="$('#redirect_path').val('checkout/register');" value="<?php echo lang('register_now');?>"/>
				<?php endif; ?>
					<input class="btn" type="submit" value="<?php echo lang('form_update_cart');?>"/>
					
			<?php if ($this->customer_model->is_logged_in(false,false) || !$this->config->item('require_login')): ?>
				<!--<input class="btn btn-large btn-primary" type="submit" onclick="$('#redirect_path').val('checkout');" value="<?php echo lang('form_checkout');?>"/>-->
                                <a class="btn btn-large btn-primary"   href="<?php echo base_url().'checkout' ?>" ><?php echo lang('form_checkout');?></a>
			<?php endif; ?>
			
		</div>
	</div>

</form>
</div>
</div>
</div>
<?php endif; ?>
</div>
   

<div id="footer">
<?php 
            $this->load->view('site/footer');
 ?>
</div>
    </body>