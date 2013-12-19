<?php 
	
	ini_set('display_errors', 1);
	 
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.easing.1.3.js"></script>
	<script  type="text/javascript" src="<?php echo base_url();?>/template/js/autoGrid.min.js"></script>
	<script  type="text/javascript" src="<?php echo base_url();?>/template/js/site.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/easySlider1.7.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/stuHover.js"></script>    
  <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.tabSlideOut.v1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/lightview.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.kinetic.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.tmpl.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/template/js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.gritter.min.js"></script> 	
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/notifications.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.notyfy.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.akordeon.js"></script>
         
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>/template/css/style.css" type="text/css" media="screen" />
	
        <link rel="stylesheet" href="<?php echo base_url();?>/template/css/main.css" type="text/css" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/style.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/lightview.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/pro_drop_1.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/tagit-stylish-yellow.css"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/modal.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/MenuMatic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/gridGallery.css"/>
        <link href="<?php echo base_url();?>/template/css/jquery.notyfy.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/template/css/default.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/stylegrid.css"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/glyphicons.css"/>
	
	
	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/indexstyle-light.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.gritter.css"/>
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery-ui-1.9.2.custom.min.css"/>
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
<style>
        #element {
    text-align: center;
    padding-top: 6px;
}
        </style>
<script>
    function disp_compact()
    {
        
        document.getElementById("show_normal").style.display = "none";
        document.getElementById("show_grid").style.display = "none";
        document.getElementById("show_compact").style.display = "inline";
    }
    
    function disp_grid()
    {
        //alert("hi");
        document.getElementById("show_normal").style.display = "none";
        document.getElementById("show_grid").style.display = "inline";
        document.getElementById("show_compact").style.display = "none";

    }
    
    function disp_preview()
    {
        document.getElementById("show_normal").style.display = "inline";
        document.getElementById("show_grid").style.display = "none";
        document.getElementById("show_compact").style.display = "none";

    }
</script>

        
<script>
  function validate_tumblr_data(id)
  {
      //alert(id);
        var sessionValue = '<?php $buyer_info = $this->session->userdata('buyer');
                                     echo json_encode($buyer_info['id']); ?>';
                
                
                //alert(sessionValue);
                if(sessionValue=='null')
                {
                        $('#gritter-notice-wrapper2'+id).show();
                }
                
  }
</script>	


<script type="text/javascript">
function changeText(p_id,s_id,id) 
{
    //alert("hi");
    var controller = 'product';
     var base_url = '<?php echo base_url();  ?>';
    //var element = document.getElementById('element' + id);
    var icon_wishit  = document.getElementById('icon_wishit' + id);
//alert(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id);
      $.get(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id, function(data) {
                       //alert($('#wishelement' + id).html());
                        if(data==1)
                         {
                              $('#success_msg').show();
                              if ($('#element' + id).html() === 'Niceit') 
                             
                                {   
                                    
                                     $('#element' + id).html("Nyce'd");
                                    icon_wishit.className = 'wishied';
                                }
                                else
                                    {
                                      $('#element' + id).html("Niceit");

                                      icon_wishit.className = 'icon_wishit';     

                                    }
                         }
                         });
     
 
}

</script> 


<script>
function changeText1(id) 
{
//    var element = document.getElementById('element' + idElement);
//	
//	if (element.innerHTML === 'Niceit') element.innerHTML = "Nyce'd";
//	
//	else
//	 	element.innerHTML = "Added";
//	 	
//	 	var element = document.getElementById('element' + id);
    var element1 = document.getElementById('comelement' + id);
	
	//if (element.innerHTML === 'Niceit') element.innerHTML = "Nyce'd";
	
	if (element1.innerHTML === 'Compare') element1.innerHTML = "Added";
//   
}

</script>

<script id="previewTmpl" type="text/x-jquery-tmpl">
			<div id="ib-img-preview" class="ib-preview">
                <img src="${src}" alt="" class="ib-preview-img"/>
                <span class="ib-preview-descr" style="display:none;">${description}</span>
                <div class="ib-nav" style="display:none;">
                    <span class="ib-nav-prev">Previous</span>
                    <span class="ib-nav-next">Next</span>
                </div>
                <span class="ib-close" style="display:none;">Close Preview</span>
                <div class="ib-loading-large" style="display:none;">Loading...</div>
            </div>		
</script>
<script id="contentTmpl" type="text/x-jquery-tmpl">	
			<div id="ib-content-preview" class="ib-content-preview">
                <div class="ib-teaser" style="display:none;">{{html teaser}}</div>
                <div class="ib-content-full" style="display:none;">{{html content}}</div>
                <span class="ib-close" style="display:none;">Close Preview</span>
            </div>
</script>



<script type="text/javascript">
        $(function() {

                $(' #da-thumbs > li ').each( function() { $(this).hoverdir({
                        hoverDelay : 75
                }); } );

        });
</script>  	
                
<script type="text/javascript"> 
		
        function add_my_wish(p_id,s_id,id)
        {

                var controller = 'product';
                var base_url = '<?php echo base_url();  ?>';
                
                var sessionValue = '<?php $buyer_info = $this->session->userdata('buyer');
                                     echo json_encode($buyer_info['id']); ?>';
                
                
                //alert(sessionValue);
                if(sessionValue=='null')
                {
                        $('#gritter-notice-wrapper1'+id).show();
                }
                
               else
                {

                $.get(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id, function(data) {

                 if(data==1)
                 {
                      $('#success_msg').show();
                    //  alert($('#wishelement' + id).html());
                      if ($('#wishelement' + id).html() == 'Niceit') 
                      {   
                            $('#wishelement' + id).html("Nyce'd");
                      }


                 }


              });
        }}
</script>   


<script type="text/javascript"> 
		
		function add_my_wish2(p_id,s_id,id)
                {
                     
                        var controller = 'product';
                        var base_url = '<?php echo base_url();  ?>';
//alert(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id);
                        $.get(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id, function(data) {
                 // alert("hi");
                         if(data==1)
                         {
                              $('#notyfy_message').show();
                            //  alert($('#wishelement' + id).html());
                              if ($('#wishelement2' + id).html() == 'Niceit') 
                              {   
                                    $('#wishelement2' + id).html("Nyce'd");
                              }
                              
                             
                         }
                              
 
                      });
                }
</script> 


<script type="text/javascript">
    $(document).ready(function () {
        $('#buttons').akordeon();
        $('#button-less').akordeon({ buttons: false, toggle: true, itemsOrder: [2, 0, 1] });
    });
</script>

<script>
function changeBg(){

 document.getElementById("myLayer1").style.display = "inline";
 document.getElementId("myLayer").style.display = "none";


}
</script>


<script type="text/javascript">
    $(function(){
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',
            pathToTabImage: '<?php echo base_url();?>/template/img/crownslide.png',
            imageHeight: '141px',                     
            imageWidth: '40px',                       
            tabLocation: 'right',                     
            speed: 300,                               
            action: 'click',                          
            topPos: '120%',                          
            leftPos: '20px',                          
            fixedPosition: false                      
        });

    });

</script>

<script type="text/javascript">
function add_tumblr_data(){	
   //var tum_search  = document.getElementById('tum_search');
   var tum_search=$("#tum_search").val();
   
   var postData = {
  'tum_search' : tum_search
  
};
        var controller = 'site';
            var base_url = '<?php echo base_url();  ?>';
      //    alert(tum_search);
//                $.ajax({
//                    'type' : 'POST',
//                    'url' : base_url + controller + '/add_tumblr_data',
//                     //  'dataType': "json",
//                    ' data' : postData,
//                    'success' : function(data){  



$.post(base_url + controller + '/add_tumblr_data',{tum_search:$('#tum_search').val()}, function(data) {
                       //  alert(data);
		
				$("#tumblrPosts").html(data);
                        
                   });
              //  });
    }
</script>
<script type="text/javascript" src="http://platform.tumblr.com/v1/share.js"></script>
</head>
<body>

<div class="header">
<div class="inner">

<h1 class="logo">

<a href="#"><img src="<?php echo base_url() ?>/template/img/band_Logo8.png" width="30" height="30" style="margin-left:47px;margin-top: -16px"/></a>

<a href="<?php echo site_url(); ?>site/index" style="
margin-left: 45px;"><!--<img src="<?php echo base_url() ?>/template/img/logotext.png" width="100" height="42" style="margin-top: 3px;
margin-left:9px;"/>--><p>N</p>yceby</a>

</h1>

<ul id="nav" style="margin-left: 2%;">
	<li class="top"><a href="#nogo1" class="top_link"><span>Catalog</span></a>

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
						<li><a href="#nogo6" style="margin-left: 11px;">Kidâ€™s Fashion</a></li>
                        <li><a href="#nogo6">Kitchen</a></li>
                        <li><a href="#nogo4" style="margin-left: 11px;">Luxury Estate</a></li>
						<li><a href="#nogo5">Memorabilia</a></li>
						<li><a href="#nogo6" style="margin-left: 11px;">Menâ€™s Fashion</a></li>
                        <li><a href="#nogo4">Paper & Writings</a></li>
						<li><a href="#nogo5" style="margin-left: 11px;">Photography </a></li>
						<li><a href="#nogo6">Sports & Outdoor</a></li>
                        <li><a href="#nogo4" style="margin-left: 11px;">Technology</a></li>
						<li><a href="#nogo5">Tools & Machines</a></li>
						<li><a href="#nogo6" style="margin-left: 11px;">Toy, Games, & Dolls</a></li>
                        <li><a href="#nogo6">Travel	</a></li>
                        <li><a href="#nogo6" style="margin-left: 11px;">Vintage</a></li>
                        <li><a href="#nogo6">Womenâ€™s Fashion</a></li>
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

<?php echo form_open('site/search', 'class="search_form" style="width:31%"');?>
	 <input type=search results=2 name=term autosave="unique" placeholder="Search"/>
<?php echo form_close();?>

<div class="lan_pop" style="margin-left: 0px;width: 10%;">
 <ul id="nav">
	<li class="top"><a href="#nogo1" class="top_link" style="border-right: 1px solid #505050;"><span>English</span></a>
    <ul class="sub" style="width: 180px; padding: 5px 0px 0px 12px;">
			<li><a href="#nogo3" >Catala</a></li>
            <li><a href="#nogo3" >dansk</a></li>
            <li><a href="#nogo3" >Î•Î»Î»Î·Î½Î¹ÎºÎ¬</a></li>
            <li><a href="#nogo3" >English</a></li>
            <li><a href="#nogo3" >EspaÃ±ol</a></li>
            <li><a href="#nogo3" >Eesti</a></li>
            <li><a href="#nogo3" >Basque</a></li>
            <li><a href="#nogo3" >Filipino</a></li>
            <li><a href="#nogo3" >franÃ§ais</a></li>
            <li><a href="#nogo3" >Hindi</a></li>
            <li><a href="#nogo3" >Indonesian</a></li>
            <li><a href="#nogo3" >Ã�slenska</a></li>
            <li><a href="#nogo3" >Italiano</a></li>
            <li><a href="#nogo3" >Lithuanian</a></li>
            <li><a href="#nogo3" >Nederlands</a></li>
            <li><a href="#nogo3" >norsk</a></li>
            <li><a href="#nogo3" >Polski</a></li>
            <li><a href="#nogo3" >PortuguÃªs (br)</a></li>
            <li><a href="#nogo3" >PortuguÃªs (pt)</a></li>
            <li><a href="#nogo3" >RomÃ¢nÄƒ</a></li>
            <li><a href="#nogo3" >Ð ÑƒÑ�Ñ�ÐºÐ¸Ð¹</a></li>
            <li><a href="#nogo3" >SlovenskÃ½</a></li>
            <li><a href="#nogo3" >Suomi</a></li>
            <li><a href="#nogo3" >svenska</a></li>
            <li><a href="#nogo3" >Thai</a></li>
            <li><a href="#nogo3" >TÃ¼rkÃ§e</a></li>
            <li><a href="#nogo3" >æ—¥æœ¬èªž</a></li>
            
            
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
				<a class="close" data-dismiss="alert" style="top: 70px;">Ã—</a>
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
			  	   <p class="acc_text">Have an account?<a href="#login_form" id="login_pop" style="text-decoration: none;
			color: #BBBBBB;font-weight: bold;padding-left: 6px;">Log In</a>
		</p>
			   <input type="submit" style="cursor:pointer;" value="Sign Up" class="bt_sign"/>
		
		<?php  echo form_close();  ?>
	<a class="close" href="#close" style="top:0;"></a>
	</div>
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
            <li><a href="<?php echo site_url('user/logout');?>" >Logout</a></li>
            
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
        <div class="popup" style="background-color: rgba(255, 255, 255, 0.22);">
        <div class="join_register" style="height: 468px;top: 0;">
		
		<h2>Log In to NyceBy</h2>
            <p>Enter your username and password for log in to NyceBy.</p>
			
					<?php if ($this->session->flashdata('login_message')):?>
			<div id="user_message"  class="alert alert-error">
				<a class="close" data-dismiss="alert">Ã—</a>
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

			echo form_input($data); ?>  Remember me
            </div>
            <input type="submit" name="submit" style="cursor:pointer;" value="Log In" class="bt_log" />
			<?php
                    echo anchor('#join_form', 'Create Account','style="float: right;
width: 42%;
margin-top: 24px;
text-align: right;
margin-right: 2%;"');
                    echo form_close(); 
           ?>
		    <a class="close" href="#close" style="top:0;"></a>
            </div>
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
				<a class="close" data-dismiss="alert">Ã—</a>
				<?php echo $this->session->flashdata('error');?>
			</div>
		<?php endif;?>
		
		<?php if (!empty($error)):?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">Ã—</a>
				<?php echo $error;?>
			</div>
		<?php endif;?>
		
		<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.easing.1.3.js"></script> 
  	
  
	<script type="text/javascript">
			(function($) {
				$.fn.parallaxSlider = function(options) {
					var opts = $.extend({}, $.fn.parallaxSlider.defaults, options);
					return this.each(function() {

						var $pxs_container 	= $(this),
						o 				= $.meta ? $.extend({}, opts, $pxs_container.data()) : opts;
						
						//the main slider
						var $pxs_slider		= $('.pxs_slider',$pxs_container),
						//the elements in the slider
						$elems			= $pxs_slider.children(),
						//total number of elements
						total_elems		= $elems.length,
						//the navigation buttons
						$pxs_next		= $('.pxs_next',$pxs_container),
						$pxs_prev		= $('.pxs_prev',$pxs_container),
						//the bg images
						$pxs_bg1		= $('.pxs_bg1',$pxs_container),
						$pxs_bg2		= $('.pxs_bg2',$pxs_container),
						$pxs_bg3		= $('.pxs_bg3',$pxs_container),
						//current image
						current			= 0,
						//the thumbs container
						$pxs_thumbnails = $('.pxs_thumbnails',$pxs_container),
						//the thumbs
						$thumbs			= $pxs_thumbnails.children(),
						//the interval for the autoplay mode
						slideshow,
						//the loading image
						$pxs_loading	= $('.pxs_loading',$pxs_container),
						$pxs_slider_wrapper = $('.pxs_slider_wrapper',$pxs_container);
							
						//first preload all the images
						var loaded		= 0,
						$images		= $pxs_slider_wrapper.find('img');
							
						$images.each(function(){
							var $img	= $(this);
							$('<img/>').load(function(){
								++loaded;
								if(loaded	== total_elems*2){
									$pxs_loading.hide();
									$pxs_slider_wrapper.show();
										
									//one images width (assuming all images have the same sizes)
									var one_image_w		= $pxs_slider.find('img:first').width();
							
									/*
									need to set width of the slider,
									of each one of its elements, and of the
									navigation buttons
									 */
									setWidths($pxs_slider,
									$elems,
									total_elems,
									$pxs_bg1,
									$pxs_bg2,
									$pxs_bg3,
									one_image_w,
									$pxs_next,
									$pxs_prev);
							
									/*
										set the width of the thumbs
										and spread them evenly
									 */
									$pxs_thumbnails.css({
										'width'			: one_image_w + 'px',
										'margin-left' 	: -one_image_w/2 + 'px'
									});
									var spaces	= one_image_w/(total_elems+1);
									$thumbs.each(function(i){
										var $this 	= $(this);
										var left	= spaces*(i+1) - $this.width()/2;
										$this.css('left',left+'px');
											
										if(o.thumbRotation){
											var angle 	= Math.floor(Math.random()*41)-20;
											$this.css({
												'-moz-transform'	: 'rotate('+ angle +'deg)',
												'-webkit-transform'	: 'rotate('+ angle +'deg)',
												'transform'			: 'rotate('+ angle +'deg)'
											});
										}
										//hovering the thumbs animates them up and down
										$this.bind('mouseenter',function(){
											$(this).stop().animate({top:'-10px'},100);
										}).bind('mouseleave',function(){
											$(this).stop().animate({top:'0px'},100);
										});
									});
										
									//make the first thumb be selected
									highlight($thumbs.eq(0));
										
									//slide when clicking the navigation buttons
									$pxs_next.bind('click',function(){
										++current;
										if(current >= total_elems)
											if(o.circular)
												current = 0;
										else{
											--current;
											return false;
										}
										highlight($thumbs.eq(current));
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										o.speed,
										o.easing,
										o.easingBg);
									});
									$pxs_prev.bind('click',function(){
										--current;
										if(current < 0)
											if(o.circular)
												current = total_elems - 1;
										else{
											++current;
											return false;
										}
										highlight($thumbs.eq(current));
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										o.speed,
										o.easing,
										o.easingBg);
									});
							
									/*
									clicking a thumb will slide to the respective image
									 */
									$thumbs.bind('click',function(){
										var $thumb	= $(this);
										highlight($thumb);
										//if autoplay interrupt when user clicks
										if(o.auto)
											clearInterval(slideshow);
										current 	= $thumb.index();
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										o.speed,
										o.easing,
										o.easingBg);
									});
							
								
							
									/*
									activate the autoplay mode if
									that option was specified
									 */
									if(o.auto != 0){
										o.circular	= true;
										slideshow	= setInterval(function(){
											$pxs_next.trigger('click');
										},o.auto);
									}
							
									/*
									when resizing the window,
									we need to recalculate the widths of the
									slider elements, based on the new windows width.
									we need to slide again to the current one,
									since the left of the slider is no longer correct
									 */
									$(window).resize(function(){
										w_w	= '750';
										//w_w	= $(window).width();
										setWidths($pxs_slider,$elems,total_elems,$pxs_bg1,$pxs_bg2,$pxs_bg3,one_image_w,$pxs_next,$pxs_prev);
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										1,
										o.easing,
										o.easingBg);
									});

								}
							}).error(function(){
								//alert('here')
							}).attr('src',$img.attr('src'));
						});
							
							
							
					});
				};
				
				//the current windows width
				//var w_w				= $(window).width();
				var w_w				= '760';
				
				var slide			= function(current,
				$pxs_slider,
				$pxs_bg3,
				$pxs_bg2,
				$pxs_bg1,
				speed,
				easing,
				easingBg){
					var slide_to	= parseInt(-w_w * current);
					$pxs_slider.stop().animate({
						left	: slide_to + 'px'
					},speed, easing);
					$pxs_bg3.stop().animate({
						left	: slide_to/2 + 'px'
					},speed, easingBg);
					$pxs_bg2.stop().animate({
						left	: slide_to/4 + 'px'
					},speed, easingBg);
					$pxs_bg1.stop().animate({
						left	: slide_to/8 + 'px'
					},speed, easingBg);
				}
				
				var highlight		= function($elem){
					$elem.siblings().removeClass('selected');
					$elem.addClass('selected');
				}
				
				var setWidths		= function($pxs_slider,
				$elems,
				total_elems,
				$pxs_bg1,
				$pxs_bg2,
				$pxs_bg3,
				one_image_w,
				$pxs_next,
				$pxs_prev){
					/*
					the width of the slider is the windows width
					times the total number of elements in the slider
					 */
					var pxs_slider_w	= w_w * total_elems;
					$pxs_slider.width(pxs_slider_w + 'px');
					//each element will have a width = windows width
					$elems.width(w_w + 'px');
					/*
					we also set the width of each bg image div.
					The value is the same calculated for the pxs_slider
					 */
					$pxs_bg1.width(pxs_slider_w + 'px');
					$pxs_bg2.width(pxs_slider_w + 'px');
					$pxs_bg3.width(pxs_slider_w + 'px');
					
					/*
					both the right and left of the
					navigation next and previous buttons will be:
					windowWidth/2 - imgWidth/2 + some margin (not to touch the image borders)
					 */
					var position_nav	= w_w/2 - one_image_w/2 + 3;
					$pxs_next.css('right', position_nav + 'px');
					$pxs_prev.css('left', position_nav + 'px');
				}
				
				$.fn.parallaxSlider.defaults = {
					auto			: 0,	//how many seconds to periodically slide the content.
											//If set to 0 then autoplay is turned off.
					speed			: 1000,//speed of each slide animation
					easing			: 'jswing',//easing effect for the slide animation
					easingBg		: 'jswing',//easing effect for the background animation
					circular		: true,//circular slider
					thumbRotation	: true//the thumbs will be randomly rotated
				};
				//easeInOutExpo,easeInBack
			})(jQuery);
		</script>

    <script type="text/javascript">
			$(function() {
				var $pxs_container	= $('#pxs_container');
				$pxs_container.parallaxSlider();
			});
        </script>
    <script type="text/javascript" src="<?php echo base_url();?>/template/js/index.js"></script>
  
   
		