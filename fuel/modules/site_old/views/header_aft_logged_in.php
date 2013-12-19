<?php $this->load->view('includes/header'); 
$this->load->helper('html');
$this->load->helper('url');
?>
<head>  
   
        
  
       <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.akordeon.js"></script>
  
<script type="text/javascript" >
$(document).ready(function()
{

$(".account").click(function()
{
var X=$(this).attr('id');
if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0'); 
}
else
{
$(".submenu").show();
$(this).attr('id', '1');
}

});

//Mouse click on sub menu
$(".submenu").mouseup(function()
{
return false
});

//Mouse click on my account link
$(".account").mouseup(function()
{
return false
});


//Document Click
$(document).mouseup(function()
{
$(".submenu").hide();
$(".account").attr('id', '');
});
});
</script>
        

    


<style type="text/css">
        .demobar
        {
            height: 90px;
            line-height: 90px;
        }
        .demobar .fleft
        {
            float: left;
            margin-left: 10px;
        }
        .demobar .fright
        {
            float: right;
            margin-top: 14px;
            margin-right: 10px;
        }
		.dropdown 
{
color: #555;
margin: 3px -22px 0 0;
width: 143px;
position: relative;
height: 17px;
text-align:left;
float:left;
left: 23px;
}
.submenu
{
background: #FFF;
position: absolute;
top: 43px;
left: -149px;
z-index: 100;
width: 252px;
display: none;
margin-left: 10px;
padding:3px 0 5px;
border-radius: 6px;
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.45);

}
.dropdown li a 
{
color: #555555;
display: block;
font-family: arial;
font-weight: bold;
padding: 6px 15px;
cursor: pointer;
text-decoration:none;
}

.dropdown li a:hover
{
background:#155FB0;
color: #FFFFFF;
text-decoration: none;
}
a.account 
{
font-size: 11px;
line-height: 16px;
color:#CACACA;
position: absolute;
z-index: 110;
display: block;
padding: 11px 0 0 30px;
height: 28px;
width: 74%;
margin:0px 0 0 0px;
text-decoration: none;
background: url(images/arrow.png) 94px 17px no-repeat;
cursor: pointer;
font-weight: bold;
}
.root
{
list-style:none;
margin:0px;
padding:0px;
font-size: 11px;
padding: 11px 0 0 0px;

}
    </style>

 <script type="text/javascript">
function makeConfirm(id,i)
{
   alert(id);
   var controller = 'user';
    var base_url = '<?php echo base_url();  ?>';
   // alert(base_url + controller+ '/add_follows/'+id+'/'+id1);
    $.get(base_url + controller+ '/add_new_follower/'+id, function(data) {
  // alert(data);
  if(data.status == true);{
      $('#add_follower'+i).remove();
     alert("ok");
  }
    });
}
</script>  


 <script type="text/javascript">
function rejectFollower(id,i)
{
   alert(id);
   var controller = 'user';
    var base_url = '<?php echo base_url();  ?>';
   // alert(base_url + controller+ '/add_follows/'+id+'/'+id1);
    $.get(base_url + controller+ '/reject_follower/'+id, function(data) {
  // alert(data);
  if(data.status == true);{
      $('#add_follower'+i).remove();
     alert("ok");
  }
    });
}
</script> 

<script type="text/javascript">
function rejectConfirmation(id,i)
{

     alert(id);
   var controller = 'user';
    var base_url = '<?php echo base_url();  ?>';
   // alert(base_url + controller+ '/add_follows/'+id+'/'+id1);
    $.get(base_url + controller+ '/reject_follower_confirmation/'+id, function(data) {
  // alert(data);
  if(data.status == true);{
      $('#add_follower'+i).remove();
     alert("ok");
  }
    });
    
  }
   
</script> 


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



<ul id="nav">
	<li class="top"><a href="#nogo1" class="top_link"><span>Collect</span></a>
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
            <li><a href="<?php echo base_url();?>seller_registration/signup" class="fly">Business</a>
					<ul class="textarea" style="width: 72px;
height: 78px;">
						<li><a href="#nogo4">Contact Us</a></li>
						<li><a href="#nogo5">Antique</a></li>
						<li><a href="#nogo6">Architecture</a></li>
                                                <li><a href="#nogo4">Art</a></li>
                                                <li><a href="<?php echo base_url();?>seller_registration/signup">Register</a></li>
                        </ul>
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

	<form class="search_form">

 <input type=search results=2 name=s autosave="unique" placeholder="Search"/>

</form>

 <ul id="nav" style="left:0;">
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


<div class="lan_pop">
 <a href="#">Add<i class="plus"></i></a>
  <a href="#" style="padding-right: 14px;
height: 40px;
border-right: 1px solid #505050;"><i class="diary"></i></a>


   	 
<nav id="colorNav" style="float: left;
width: 47%;">
<ul style="margin: 16px -7px;">
<li class="green" style="float: left;top: -16px;
height: 44px;">
                                 <a href="#"><img src="<?php echo base_url() ?>/template/img/24.png" width="24" height="24" style="top: 9px;
position: absolute;
left: 14px;
bottom: 0;"/></a>
					
					<ul>
					<div class="akordeon" id="button-less">
            <div class="akordeon-item expanded">
               <div class="akordeon-item-head">
                <i class="message"></i>
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                          Follows                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        
                        
                        
                        <?php 
                        $buyer_info = $this->session->userdata('buyer');
                        $b_name=$buyer_info['username'];
                        
                        
                        if($rejectfollower=$this->session->userdata('rejectfollower'))
                        {
                       //var_dump($rejectfollower);exit;
                        $limit=count($rejectfollower);
                        for($i=0;$i<$limit;$i++)
                       { ?>
                        <div id="add_follower<?php echo $i ?>">     
                       <label class="followers_in_add"><?php echo $rejectfollower['rejectfollowers'.$i]['username'].' rejected your request'; ?></label>
                        <a href="javascript:void()" class="minimal-indent-ok" onClick="rejectConfirmation('<?php echo $rejectfollower['rejectfollowers'.$i]['f_id'] ?>','<?php echo $i ?>');">Ok</a>
                        <hr style="border: 1px solid rgb(95, 136, 151); margin:0;float:left;width:100%;">
                        </div>
                       
      <?php      } }  else {
     
 //echo "no new followers";
          
 }
                       if($Newfollower=$this->session->userdata('Newfollower'))
                        {
                      // var_dump($Newfollower);exit;
                        $limit=count($Newfollower);
                        for($i=0;$i<$limit;$i++)
                       { ?>
                        <div id="add_follower<?php echo $i ?>" style="float:left;">     
                       <label class="followers_in_add"><?php echo $Newfollower['Newfollowers'.$i]['username'].' wants to follow you'; ?></label>
                       <label class="followers_date"><?php  echo $Newfollower['Newfollowers'.$i]['created_on']; ?></label>
                       
                                                <a href="javascript:void()" class="button_reject" onClick="rejectFollower('<?php echo $Newfollower['Newfollowers'.$i]['u_id'] ?>','<?php echo $i ?>');">Reject</a>
                        <a href="javascript:void()" class="button_confirm" onClick="makeConfirm('<?php echo $Newfollower['Newfollowers'.$i]['u_id'] ?>','<?php echo $i ?>');">Confirm</a>
                        

                          <hr style="border: 1px solid rgb(95, 136, 151); margin:0;float:left;width:100%;">
                        </div>
                     
                       
      <?php      } }  else {
     
 //echo "no new followers";
          
 }
//                    
//                        
                        
                        
                        $follower=$this->session->userdata('follower');
                        
                        $limit=count($follower);
                 
                  for($i=0;$i<$limit;$i++)
                  { 
                      if($i%2 == 0) {
                      ?> 
                            <div class="notification">
					<label><?php  echo $follower['followers'.$i]['created_on']; ?></label>
					<div class="notifi_comment">
                          <span><?php echo $b_name; ?> followed by <?php  echo $follower['followers'.$i]['username']; ?>  </span>
                            </div>
				<div style="float:left;width:12%;height: 12px;"></div>	
                            </div>
			<?php } else {?>
                        
                        <div class="notification1">
					<label><?php  echo $follower['followers'.$i]['created_on']; ?></label>
					<div class="notifi_comment1">
                          <span> <?php echo $b_name; ?> followed by <?php  echo $follower['followers'.$i]['username']; ?></span>
                            </div>
				<div style="float:left;width:12%;height: 12px;"></div>	
                            </div>
                        
                        
                        <?php } } ?>
                        
                    </div>
                    <div class="indent"><a href="" class="minimal-indent">View All</a></div>
                </div>
				</div>
          
            <div class="akordeon-item">
                <div class="akordeon-item-head">
                <i class="comment"></i>
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                            Comments                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        <?php 
                  $comment=$this->session->userdata('comment');
                 // var_dump($comment);exit;
                  $limit=count($comment);
                  //$i=0;
                  for($i=0;$i<$limit;$i++)
                  { 
                      if($i%2 == 0) {
                      ?>
                            <div class="notification">
                                <?php // if($comment['comments'.$i]['tum_product']==1) 
                                        
//                                        echo "its tumbler product"; else ?> 
                               <a href="<?php echo base_url().'site/product/'.$comment['comments'.$i]['p_id'].'/'.$comment['comments'.$i]['wish_cnt'] ?>" ><?php echo $comment['comments'.$i]['name'] ?></a>
					<label><?php  echo $comment['comments'.$i]['created_on']; ?></label>
					<div class="notifi_comment">
                          <span> <?php  echo $comment['comments'.$i]['message']; ?></span>
                          <span style="float: right;"> <?php  echo $comment['comments'.$i]['username']; ?></span>
                            </div>
				<div style="float:left;width:12%;height: 8px;"></div>	
                            </div>
			<?php } else {?>
                        
                        <div class="notification1">
                            <a href="<?php echo base_url().'site/product/'.$comment['comments'.$i]['p_id'].'/'.$comment['comments'.$i]['wish_cnt'];?>" ><?php echo $comment['comments'.$i]['name'] ?></a>
					<label><?php  echo $comment['comments'.$i]['created_on']; ?></label>
					<div class="notifi_comment1">
                          <span> <?php  
                          
                          
                          echo substr($comment['comments'.$i]['message'],0,20); ?></span>
                          <span style="float: right;"> <?php  echo $comment['comments'.$i]['username']; ?></span>
                            </div>
				<div style="float:left;width:12%;height: 8px;"></div>	
                            </div>
                        
                        <?php } } ?>
                     
                    </div>
                     
					<div class="indent"><a href="" class="minimal-indent">View All</a></div>
					
                </div>
            </div>

           <div class="akordeon-item">
                <div class="akordeon-item-head">
                 <i class="share"></i>
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                            Shares                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        <p>
                            Nullam congue erat id felis tristique tincidunt. In tincidunt mi sit amet sapien
                          ornare facilisis. Suspendisse lacus elit, consequat non rutrum vel, vestibulum quis  
                    </div>
                    <div class="indent"><a href="" class="minimal-indent">View All</a></div>
                </div>
            </div>
               <div class="akordeon-item">
                <div class="akordeon-item-head">
                <i class="invite"></i>
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                            Invites                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        Donec tortor velit, volutpat id adipiscing ut, tincidunt vitae mi. Duis imperdiet
                        egestas fermentum. Sed a leo mauris. Vestibulum metus libero, condimentum commodo                    </div>
                    
                    
                <div class="indent"><a href="" class="minimal-indent">View All</a></div>
                </div>
            </div>
                <div class="akordeon-item">
                <div class="akordeon-item-head">
                 <i class="bid"></i>
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                            Won Bid                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        Donec tortor velit, volutpat id adipiscing ut, tincidunt vitae mi. Duis imperdiet
                        egestas fermentum. Sed a leo mauris. Vestibulum metus libero, condimentum commodo                    </div>
                <div class="indent"><a href="" class="minimal-indent">View All</a></div>
                </div>
            </div>
			        <div class="akordeon-item">
                <div class="akordeon-item-head">
                <i class="sold"></i>
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                          Item Sold                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        Donec tortor velit, volutpat id adipiscing ut, tincidunt vitae mi. Duis imperdiet
                        egestas fermentum. Sed a leo mauris. Vestibulum metus libero, condimentum commodo                    </div>
                <div class="indent"><a href="" class="minimal-indent">View All</a></div>
                </div>
            </div>
        </div>
    </ul>
				</li>
    <li class="red">

    <button class="btn btn-5 btn-5a icon-cart" style="width: 100%;background: none;border: none;line-height: 0;box-shadow: none;">
        <span><a href="#" class="bt_cart"><i class="cart_ic"></i></a></span>
    </button>	

    <ul class="in_cartarea">
            <?php
			$subtotal = 0;
                        if ($this->go_cart->total_items()==0){ ?>
<!--                            <div class="alert alert-info">
		<a class="close" data-dismiss="alert">×</a>-->
		<?php //echo lang('empty_view_cart');?>
<!--	</div>-->
             <?php           }else{

			foreach ($this->go_cart->contents() as $cartkey=>$product){
   
                            
                            ?>
            
    <li>
<?php 

 $jsonData=$product['images'];
                               
                             $phpArray = json_decode($jsonData);
                            
                           //  var_dump(reset($phpArray));exit;
                             $imageArray =reset($phpArray);
                              $myimage = $imageArray->filename;
                          
//                            foreach ($imageArray as $key => $value)  
//                            {
//                                 $myimage= $value;
?>
        <img src="<?php echo base_url() ?>uploads/images/thumbnails/<?php echo $myimage; ?>" class="cartarea_img" width="80" height="70" />
        <?php //}  ?> 
        <a href="#" class="cart_text" style="color: #463A3A;margin: 0;float: left;width: 40%;font-size: 14px;margin-top: -15px;"> 
                <?php echo $product['name']; ?>
            </a>
            <a href="javascript:void();"  onclick="if(confirm('<?php echo lang('remove_item');?>')){window.location='<?php echo site_url('site/remove_item/'.$cartkey);?>';}"   class="remove_item" style="color: #4F89A0;margin: 0;width: 32%;float: left;font-size: 11px;margin-top: -18px;">
                Remove<i class="remove"></i>
            </a>
            <span class="quantity"><?php echo $product['quantity'] ?> × <span class="amount"><?php echo format_currency($product['price']);?></span></span>			
    </li>
            <a href="#" style="float: left;color: #353535;width: 37%;font-size: 14px;">
                Subtotal
            </a>
            <span style="float: left;margin-top: 15px;width: 19%;text-align: right;">
                <?php echo format_currency($product['price']*$product['quantity']); ?>
            </span>
    Grand total
    <?php echo format_currency($this->go_cart->total()); ?>
    
<!--            <a href="#" class="view_bt" style="padding: 0px;width: 25%;height: 26px;line-height: 28px;padding-left: 14px;float: right;background: #DAAA54;letter-spacing: 1px;color: #FFF; margin-right: 2%;">
                View Cart
            </a>-->
            <a href="<?php echo base_url().'checkout' ?>" class="checkout_bt" style="padding: 0px;width: 25%;height: 26px;line-height: 28px;padding-left: 8px;float: right;">
                Checkout
            </a>
            <a href="#" style="width: 12%;height: 36px;"></a>
                                                
                                                
        <?php }} ?>                      
    </ul>
        
</li>

        </ul></nav></div>


	<div class="lan_pop" style="margin-left: 0px;width: 8%;">
 <ul id="nav" style="left:19px;">
	<li class="top"><a href="#nogo1" class="top_link" style="border-right: 1px solid #313131;padding-left: 0px;"><span>Account</span></a>
    <ul class="sub" style="width: 100px; padding: 5px 0px 10px 5px;">
			
            <li><a href="<?php echo base_url() ?>user/my_account" >My Account</a></li>
            <li><a href="#nogo3" >My Download</a></li>
           <li><a href="<?php echo base_url() ?>user/logout" >Logout</a></li>
            
            </ul>
    
    </li></ul>
</div>	






        	
		
        </div>
        </div>
        
   