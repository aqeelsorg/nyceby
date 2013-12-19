 <?php 	
		//$this->load->view('includes/header'); 
 
		$this->load->helper('html');
		$this->load->helper('url');
?>
<head>
     <link rel="stylesheet" href="<?php echo base_url();?>/template/css/bootstrap.min.css" type="text/css" media="screen" />
	
        <link rel="stylesheet" href="<?php echo base_url();?>/template/css/bootstrap-responsive.min.css" type="text/css" media="screen" />
        
</head>
<body style="background: none;">
<?php if ($this->go_cart->total_items()==0):?>
<!--	<div class="alert alert-info">
		<a class="close" data-dismiss="alert">×</a>
		<?php echo lang('empty_view_cart');?>
	</div>-->
<?php else: ?>

	 <div class="main_container">
     <div class="addtocart_page">
     <div class="add_bk">
             <div class="container_12" style="float:left;margin-top:98px;">	
<!--	<div class="page-header">
		<h2><?php echo lang('your_cart');?></h2>
	</div>-->
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
                                <a class="btn btn-large btn-primary" href="<?php echo base_url().'front-modules/checkout' ?>" ><?php echo lang('form_checkout');?></a>
			<?php endif; ?>
			
		</div>
	</div>

</form>
</div>
</div>
</div>
<?php endif; ?>
</div>
</body>
<div id="footer">
<?php 
            $this->load->view('site/footer');
    ?>
</div>