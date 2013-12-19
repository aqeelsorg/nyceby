<head>
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/main_page.css"/>
          
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/animate-custom.css"/>
</head>