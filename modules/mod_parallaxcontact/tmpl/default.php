<?php

// no direct access
defined('_JEXEC') or die ('Restricted access'); 

$doc = JFactory::getDocument();
$path = 'index.php?option=com_ajax&amp;module=parallaxcontact';
$csite_name	= $app->getCfg('sitename');
$email_error_msg = JText::_('Please fill with the correct email address');

//session_name("parallaxcontact");


if ($enable_captcha) {
    $_SESSION['n1'] = rand(1,40);
    $_SESSION['n2'] = rand(1,40);
    $_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];
}

$js = "

jQuery(document).ready(function() {

    jQuery('#form-button').click(function () {

        var name = jQuery('#form-name').val();
        var email = jQuery('#form-email').val();
		var enable_captcha = ".$enable_captcha.";
        var captcha = jQuery('#form-captcha').val();
        var expect = ".$_SESSION['expect'].";
        var message = jQuery('#form-message').val();
		var submitted = jQuery('#submitted').val();
        var error = 0;

		var vars = 'name=' + name + ', email=' + email + ', captcha=' + captcha + ', expect=' + expect + ', message=' + message;
		
		
        if (name === '' || email === '' || captcha === '' ) {
            
			document.getElementById('alert').innerHTML = '<div id=\"details-error\" class=\"text-error\"><i class=\"typcn typcn-warning\"></i> ".$error_msg."</div>';
			jQuery('#alert').fadeIn(200);
			jQuery('#details-error').css('display', 'block');
			error = 1;
        } else {

			if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
            
				document.getElementById('alert').innerHTML = '<div id=\"details-error\" class=\"text-error\"><i class=\"typcn typcn-warning\"></i> ".$email_error_msg."</div>';
				//jQuery('#details-error').fadeIn(200);
				jQuery('#alert').fadeIn(200);
				jQuery('#details-error').css('display', 'block');
				error = 1;
			
			}
            
			/*
			if (captcha !== expect) {
				
				document.getElementById('alert').innerHTML = '<div id=\"details-error\" class=\"text-error\"><i class=\"typcn typcn-warning\"></i> Please enter the correct captcha</div>';
				//jQuery('#details-error').fadeIn(200);
				jQuery('#alert').fadeIn(200);
				jQuery('#details-error').css('display', 'block');
				error = 1;
			}
			*/
			
		}

        
		var dataString = {
            'option'    : 'com_ajax',
            'module'    : 'parallaxcontact',
            'name'      : name,
            'email'     : email,
            'enable_captcha' : enable_captcha,
            'captcha'   : captcha,
            'message'   : message,
            'expect'    : expect,
            'submitted' : submitted,
            'format'    : '{$format}'
        };

        if (error === 0) {
			
            jQuery.ajax({
                type: 'POST',
                data: dataString,
                success: function (response) {
					
					if(response){
						document.getElementById('alert').innerHTML = response;
                    }
					
                    jQuery('#alert').fadeIn(1000);
					var errorId = document.getElementById('details-error');
					var successId = document.getElementById('form-sent');
					if ( errorId ) {
						jQuery('#details-error').css('display', 'block');
					} else {
						if ( successId ) { jQuery('#form-sent').css('display', 'block'); }
					}
                    
                },
                error: function(response) {
                    if(response){
                        jQuery('#alert').fadeIn(1000);
						jQuery('#details-error').css('display', 'block');
					}
                }
            });
            return false;
        }

    });
	
});
";
$doc->addScriptDeclaration($js);
?>
    

<section class="contact">
	<div id="alert"></div>
<?php if ($pretext){ ?>
  
<p class="text-intro"><?php echo $pretext; ?></p>

<?php } ?>
<div id="contact-form-globbersthemes">
<div id="f-contact"><?php echo $module_Parallax_Contact ;?></div>


<form id="contactform" class="container" name="contactform" action="<?php echo $path; ?>" method="post" enctype="multipart/form-data">
<div class="container_12">
<div class="grid_6">
<div id="block-name">
<h5 class="text-label"><?php echo $name_label; ?></h5> 
<input id="form-name" type="text" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" />
</div>
</div>

<div class="grid_6">
<div id="block-email">
<h5 class="text-label"><?php echo $email_label; ?></h5>
<input id="form-email" type="text" value="<?php if (isset($_POST['email'])) echo ($_POST['email']); ?>" />
</div>
</div>
</div>

<div class="container_12">
<div class="grid_12">
<div id="block-message">
<h5 class="text-label"><?php echo $message_label; ?></h5><input id="form-message" type="text" value="<?php if(isset($_POST['message'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['message']); } else { echo $_POST['message']; } } ?>" />
</h5>
</div>
</div>
</div>



<?php if ($enable_captcha) { ?>
<div class="container_12">
<div class="grid_6">
<!-- <div id="block-captcha">
<h5 class="text-label-captcha"><?php echo stripslashes($captcha_label); ?> <?php echo $_SESSION['n1'] .' + ' . $_SESSION['n2'] . ' = '; ?> 
</h5>
<input id="form-captcha" type="text" name="captcha" 
value="<?php if (isset($_POST['captcha'])) echo ($_POST['captcha']); ?>"
placeholder="" />
</div> -->
</div>

<?php } ?>
<div class="grid_6">
<div id="block-button">
<h5><?php echo $submit_label; ?></h5><input type="hidden" name="submitted" id="submitted" value="true" /></h5>
</div>
</div>
</div>
</div>





</form>





</section>		
<!-- end contact form module -->



