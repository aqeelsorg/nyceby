 <?php 	
 if($this->customer_model->is_logged_in(false, false))
		{
                    $this->load->view('site/header_aft_logged_in');
                }
                else 
                    {
                        $this->load->view('site/header');	 
                }
 
		$this->load->view('includes/header'); 
		$this->load->helper('html');
		$this->load->helper('url');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pricey Tag</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/elastislide.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/custom.css"/>

<script  type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.magnifier.js"></script>
	
<script type="text/javascript" src="<?php echo base_url();?>/template/js/modernizr.custom.17475.js"></script>
                
<script type="text/javascript" src="<?php echo base_url();?>/template/js/login.js"></script>
   
<script  type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.elastislide.js"></script>

<script  type="text/javascript" src="<?php echo base_url();?>/template/js/squard.js"></script>
    
	<script type="text/javascript"> 
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true
			});
		});	
	</script>

		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
		</script>
 
 <script>
$(document).ready(function(){
  $("myclass").click(function(){
    $("img").attr("width","500");
  });
});
</script>
</head>

<body>
	<div class="main_container">
		<div class="commt_form1 right-sidebar">
		<div class="photo_1" id="primary-img">
		<?php
				$photo	= theme_img('no_picture.png', lang('no_image_available'));
				$product->images	= array_values($product->images);

				if(!empty($product->images[0]))
				{
					$primary	= $product->images[0];
					foreach($product->images as $photo)
					{
						if(isset($photo->primary))
						{
							$primary	= $photo;
						}
					}

					$photo	= '<img class="magnify" data-magnifyby="2.5" width="600" height="450" style="margin-top: 24px;" src="'.base_url().'uploads/images/medium/'.$primary->filename.'" alt="'.$product->seo_title.'"/>';
				}
				echo $photo
				?>
          
          
          
          <!--<img src="http://cf6.thingd.com/default/259552423_217fd1b7fa8d.jpg" class="magnify" data-magnifyby="2.5" width="600" height="450" style="margin-top: 24px;"/>-->
 
   
    </div>
    <div class="sidebar">
    <div class="in_sidebar">
    
   <div class="wrapper">

	<div class="desrcip_tag"><h3 class="descri-_head"><?php echo $product->name;?></h3>
    <p class="dcrip_text" style="line-height:15px;"><?php echo $product->description;?><a href="#" style="color: #0F80C0;">More</a></p>
    
    <ul id="carousel" class="elastislide-list">
        <?php 
			foreach($product->images as $image):?>
			<li><a href="#">
				<img class="span1" onclick="$(this).squard('450', $('.photo_1'));" src="<?php echo base_url().'uploads/images/medium/'.$image->filename;?>" width="60" height="60"/></a>
			</li>		
        <!--<li><a href="#" class="myclass">   <img class="span1"  src="<?php echo base_url().'uploads/images/medium/'.$image->filename;?>" width="60" height="60"/></a></li>-->
		<?php endforeach;?>
	</ul>
                </div>

</div>
<a href="#" class="tag100" style="margin-top: 36px;"><strong class="price" style="color: #92643B;
font-size: 18px;"><?php echo format_currency($product->saleprice); ?></strong> USD<br></a>

	<?php if(!empty($product->sku)):?><?php echo lang('sku');?>: <?php echo $product->sku; ?><?php endif;?>
			
			<?php if((bool)$product->track_stock && $product->quantity < 1 && config_item('inventory_enabled')):?>
			
				<?php echo lang('out_of_stock');?>
			
			<?php endif;?>




<div id="loginContainer" style="width: 96%;
float: left;
height:50px;margin-top: 30px;">
                     <a href="#" id="loginButton"><span>Remote Control Titanic 40" Limited</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                       
                        <span><a href="#">Remote Control Titanic 40" Limited</a></span>
                    </form>
                </div></div>
                  
               <!--     <div class="option-area">
						
							<label for="option1" style="font-size: 13px;
color: #5A5A5A;">Option</label>
							<select name="option_id" id="option_id" class="option select-white selectBox" style="display: none;">
							<option value="112893" soldout="False">Remote Control Titanic 40" Limited</option>
							</select><a class="selectBox option select-white selectBox-dropdown" title="" tabindex="0" style="width: 198px; display: block; margin-top: 14px;margin-bottom: 13px;"><span class="selectBox-label" style="width: 154px; ">Remote Control Titanic 40" Limited</span><span class="selectBox-arrow"></span></a>-->
						
<?php echo form_open('site/add_to_cart', 'class="form-horizontal"');?>
					<input type="hidden" name="cartkey" value="<?php echo $this->session->flashdata('cartkey');?>" />
					<input type="hidden" name="id" value="<?php echo $product->id?>"/>
					
					<?php if(count($options) > 0): ?>
						<?php foreach($options as $option):
							$required	= '';
							if($option->required)
							{
								$required = ' <p class="help-block">Required</p>';
							}
							?>
							<div class="control-group">
								<label class="control-label"><?php echo $option->name;?></label>
								<?php
								/*
								this is where we generate the options and either use default values, or previously posted variables
								that we either returned for errors, or in some other releases of Go Cart the user may be editing
								and entry in their cart.
								*/

								//if we're dealing with a textfield or text area, grab the option value and store it in value
								if($option->type == 'checklist')
								{
									$value	= array();
									if($posted_options && isset($posted_options[$option->id]))
									{
										$value	= $posted_options[$option->id];
									}
								}
								else
								{
									if(isset($option->values[0]))
									{
										$value	= $option->values[0]->value;
										if($posted_options && isset($posted_options[$option->id]))
										{
											$value	= $posted_options[$option->id];
										}
									}
									else
									{
										$value = false;
									}
								}

								if($option->type == 'textfield'):?>
									<div class="controls">
										<input type="text" name="option[<?php echo $option->id;?>]" value="<?php echo $value;?>" class="span4"/>
										<?php echo $required;?>
									</div>
								<?php elseif($option->type == 'textarea'):?>
									<div class="controls">
										<textarea class="span4" name="option[<?php echo $option->id;?>]"><?php echo $value;?></textarea>
										<?php echo $required;?>
									</div>
								<?php elseif($option->type == 'droplist'):?>
									<div class="controls">
										<select name="option[<?php echo $option->id;?>]">
											<option value=""><?php echo lang('choose_option');?></option>

										<?php foreach ($option->values as $values):
											$selected	= '';
											if($value == $values->id)
											{
												$selected	= ' selected="selected"';
											}?>

											<option<?php echo $selected;?> value="<?php echo $values->id;?>">
												<?php echo($values->price != 0)?'('.format_currency($values->price).') ':''; echo $values->name;?>
											</option>

										<?php endforeach;?>
										</select>
										<?php echo $required;?>
									</div>
								<?php elseif($option->type == 'radiolist'):?>
									<div class="controls">
										<?php foreach ($option->values as $values):

											$checked = '';
											if($value == $values->id)
											{
												$checked = ' checked="checked"';
											}?>
											<label class="radio">
												<input<?php echo $checked;?> type="radio" name="option[<?php echo $option->id;?>]" value="<?php echo $values->id;?>"/>
												<?php echo $option->name;?> <?php echo($values->price != 0)?'('.format_currency($values->price).') ':''; echo $values->name;?>
											</label>
										<?php endforeach;?>
										<?php echo $required;?>
									</div>
								<?php elseif($option->type == 'checklist'):?>
									<div class="controls">
										<?php foreach ($option->values as $values):

											$checked = '';
											if(in_array($values->id, $value))
											{
												$checked = ' checked="checked"';
											}?>
											<label class="checkbox">
												<input<?php echo $checked;?> type="checkbox" name="option[<?php echo $option->id;?>][]" value="<?php echo $values->id;?>"/>
												<?php echo($values->price != 0)?'('.format_currency($values->price).') ':''; echo $values->name;?>
											</label>
											
										<?php endforeach; ?>
									</div>
									<?php echo $required;?>
								<?php endif;?>
								</div>
						<?php endforeach;?>
					<?php endif;?>						

<?php if(!config_item('inventory_enabled') || config_item('allow_os_purchase') || !(bool)$product->track_stock || $product->quantity > 0) : ?>
   <?php if(!$product->fixed_quantity) : ?>
           <label for="quantity" style="font-size: 13px;
color: #5A5A5A; float:left;">Quantity</label>
	<span class="input-number" style="display: inline-block; position: relative;"><input type="text"  name="quantity"  id="quantity" class="option number" value="1" min="1"><a href="#btn" class="btn-up" style="position: absolute; top: 8px; right: 5px; height: 11px; padding: 0px 7px;"><span></span></a><a href="#btn" class="btn-down" style="position: absolute; top: 18px; right: 5px; height: 11px; padding: 0px 7px;"><span></span></a></span>
                                                
  <?php endif; ?>
                      <!--  <button sii="60693" sisi="616001" tid="407468508385908175" class="greencart add_to_cart" html_url="/sales/60693/remote-controlled-titanic-boat"><a href="#" style="text-decoration:none;"><i class="ic-cart"></i><strong style="color: #FFF;">Add to Cart</strong></button></a>-->
                      <div id="container_buttons" style="margin-top: 27px;">
                    <p>
<!--                        <a class="a_demo_three" href="#"><i class="ic-cart"></i>
                            Add to Cart
                        </a>-->
                   
                    
                
        <button class="a_demo_three" "><i class="ic-cart"></i> <?php echo lang('form_add_to_cart');?></button>
	 </p></div>		<?php endif; ?>		
                    
                 </form>   
                     
                    


                    <hr style="margin: 28px auto 0px;
width: 267px;
border: 1px solid #F1F1F1;">


<!--<ul class="links_logo">
<li><a href="#" class="badge"><i></i></a></li>
<li><a href="#" class="google"><i></i></a></li>
<li  style="width: 29%;"><a href="#" class="twiter"><span class="tweet" id="l">Tweet</span><i></i></a></li>
<li><a href="#" class="facebook"><span class="like">Like</span><i></i></a></li>
<li><a href="#" class="count" style="text-decoration: none;
color: #303030;"><span class="zero">0</span><i></i></a></li>
</ul>-->
<div class="options" style="opacity: 1; top: 94px; display: block; width:79px; height: 107px;">
     <!-- <a class="option" style="border:none; height:0;">Jakarta</a>
      <a class="option" style="border:none; height:0;">New York</a>
      <a class="option" style="border:none; height:0;">Lyon</a>-->
      <div class="demo" style="width: 300px;">
            <ul>
            
                <li style="width: 36px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-facebook">
                </i></span><span></span> </a></li>
                <li style="width: 36px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-google-plus">
                </i></span><span></span></a> </li>
                <li style="width: 36px;
margin-top: 7px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-twitter">
                </i></span><span></span></a> </li>
                <li style="margin-top: -9px;"><a href="#" class="badge"><i></i></a></li>
            </ul>
        </div>
    </div>

    </div>
   </div>
      
       <div class="button-wrapper" style="float: left;">
					<a href="#">
                    <span><i class="show"></i> </span><br>
						<span class="ic_share">Share</span> 
					</a>
                    <a href="#">
                    <span><i class="color"></i> </span><br>
						<span class="ic_share" style="margin-left: 20%;
margin-top: 19px;color:#EC9F3D;">Colour</span> 
					</a>

 <a href="#">
                    <span><i class="gift"></i> </span><br>
						<span class="ic_share" style="margin-left: 15%;
margin-top: 1px;color: #71BBD8;">Group gift option</span> 
					</a>

					
				</div>

      
      <div class="comment_area">
      <label class="view_commnt">View all comments</label>
      <div class="view_incommnt" style="display:none;">
      </div>
 <script>
    $("label").click(function () {
      $(".view_incommnt").slideToggle("slow");
    });
</script>
     
     <ul class="comment_list">
     <li style="margin-top: 0px;"><a href="#"><img src="http://cf3.thefancy.com/UserImages/sosonja_861adc3bdb99.jpg" width="40" height="40" /></a>
     <span class="name_text"><a href="#">mamta</a></span>
     <p class="text_commnt">Exquisite craftsmanship and demanding</p>
     </li>
     <li><a href="#"><img src="http://cf2.thefancy.com/UserImages/soufianamrij_35e17064d436.jpg" width="40" height="40" /></a>
     <span class="name_text"><a href="#">mamta</a></span>
     <p class="text_commnt">Exquisite craftsmanship and demanding attention to every detail have produced a Limited Edition ...</p>
     </li>
     <li><a href="#"><img src="http://cf2.thefancy.com/UserImages/jamieroquai_7a136cfc5449.jpg" width="40" height="40" /></a>
     <span class="name_text"><a href="#">mamta</a></span>
     <p class="text_commnt">Exquisite craftsmanship</p>
     </li>
     <li><a href="#"><img src="http://cf2.thefancy.com/UserImages/soufianamrij_35e17064d436.jpg" width="40" height="40" /></a>
     <span class="name_text"><a href="#">mamta</a></span>
     <p class="text_commnt">Exquisite craftsmanship and demanding attention to every detail have produced a Limited Edition ...Exquisite craftsmanship and demanding</p>
     </li>
     <li><a href="#"><img src="http://cf3.thefancy.com/UserImages/sosonja_861adc3bdb99.jpg" width="40" height="40" /></a>
     <span class="name_text"><a href="#">mamta</a></span>
     <p class="text_commnt">Exquisite </p>
     </li>
     <li><a href="#"><img src="http://cf4.thefancy.com/UserImages/akeel_munshi_0f8e03a10619.jpg" width="40" height="40" /></a>
    <textarea name="" placeholder="Write a comment..."></textarea>
     </li>
     
     </ul>    
      
      </div>
</div>
   </div>
   <script type="text/javascript">
		$( '#carousel' ).elastislide();
	</script>		
</body>
</html>

