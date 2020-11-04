<?php
function autoReplyMail($name,$email,$subj){
    $to  = $email;
    $d = date('Y');
    $subject ='Auto-Reply GỤỌ';
    $message = 'Your message have been received. Thank you for contacting us. We will get back to you as soon as possible.';
    $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<table  width="90%" align="center">
  <tr>
  	<td>
  		Hi '.$name.', '.$message.'
  	</td>
  </tr>
  <tr style="color: #AC8989;">
  	<td>
  	<hr>
		<u>Support Team GỤỌ</u>
		<br />
		For more detail contact us:<br />
		Email:support@guoapplications.com
  	</td>
  </tr>
  <tr align="center" style="color: #B17071">
  	<td>
  		&copy; '.$d.'. GỤỌ Applications Ltd
  	</td>
  </tr>
</table>
</body>
</html>';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: SchoolPAL <support@schoolpal.app>' . "\r\n";
    $retval = @mail($to,$subject,$content,$headers);
    if($retval = true){
        return   'Mail sent successfully';
    }else{
        return  'Internal error. Mail fail to send';
    }
}

function contactUsMail($name,$email,$message){
    $to  = 'support@guoapplications.com';
    $subject = 'Contact Us Message';
    $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<table  width="90%" align="center">
	  <tr style="border-bottom: 2px solid #1B1717;">
		
	  </tr>
	  <tr>
		<td>
			'.$message.'
		</td>
	  </tr>
	  <tr align="right">
		<td>
			<strong>Name: '.$name.'<br />
			Email: '.$email.'</strong>
		</td>
	  </tr>
	</table>
	</body>
	</html>';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: GỤỌ <support@guoapplications.com>' . "\r\n";
    $retval = @mail($to,$subject,$content,$headers);
    if($retval = true){
        autoReplyMail($name,$email,$subject);
        return  'Mail sent successfully';
    }else{
        return 'Internal error. Mail fail to send';
    }
}
if(isset($_POST['submit'])){
    $msg = contactUsMail($_POST['name'],$_POST['email'],$_POST['message']);
}
?>
<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
           <!-- <h2>Contact Us</h2>
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>-->
        </div>
        <?php require_once ("downloadAppHold.php")?>
    </div>
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container-fluid">
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <!--CONTACT FORM START-->
                    <div class="comment-form">
                        <form action="" method="post">
                            <div class="container-fluid">
                                <h5 class="text-uppercase">Email Us</h5>
                                <?php if(!empty($msg) || !empty($msg2)){?>
                                    <div class="row">
                                        <div id="go" class=" col-lg-12">
                                            <p>
                                            <div id="go" class="alert alert-danger" style="text-align: left; color:#61B831;">
                                                <?php if(!empty($msg)){ print @$msg.'<br />';};?><?php print @$msg2;?> </div>
                                            </p>
                                        </div>
                                    </div>
                                <?php }?>
                                <div class="form-group" >
                                    <input class="form-control" type="text" required name="name" placeholder="Name" style="margin-bottom: 8px">
                                </div>
                                <div class="form-group" >
                                    <input class="form-control" type="email" required name="email" placeholder="Email" style="margin-bottom: 6px">
                                </div>
                                <div class="form-group" >
                                    <textarea name="message" class="form-control" required style=" margin-bottom: 8px" rows="4" placeholder="Message"></textarea>
                                </div>

                                <div id='recaptcha' class="g-recaptcha"
                                     data-sitekey="6LfdENAZAAAAADQN3Dm-EoQse6pxSJ0Jo45JrsDR"
                                     data-callback="onSubmit"
                                     data-size="invisible">
                                </div>

                                <div class="form-group">
                                    <button class="guoBtn" type="submit" name="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--CONTACT FORM END-->
                </div>
                <div class="col-md-6">
                    <!--LOCATION INFO START-->
                    <div class="kode-location">
                        <h5 class="text-uppercase">Contact Customer Care</h5>
                        <p><?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience.</p>
                    </div>
                    <!--LOCATION INFO END-->
                    <div class="contact-info">
                        <?php   foreach ($response_array->return_data as $responses){ ;?>
                        <ul>
                            <li>
                                <a href="whatsapp://send?phone=<?php echo $responses->whatsAppPhone ?>&text=How Can We Be Of Service?">
                                    <i class="fa fa-whatsapp border-red"></i>
                                </a>
                                <h4>WhatsApp</h4>
                                <a href="whatsapp://send?phone=<?php echo $responses->whatsAppPhone ?>&text=How Can We Be Of Service?">
                                    <p style="color: black; font-size: 12px" class="fonts-10"> <?php echo $responses->whatsAppPhone ?></p>
                                </a>
                            </li>
                            <li>
                                <a href="tel:<?php echo $responses->siteOfficialPhone ?>">
                                    <i class="fa fa-phone border-yellow"></i>
                                </a>
                                <h4>Phone</h4>
                                <a href="tel:<?php echo $responses->siteOfficialPhone ?>">
                                    <p style="color: black; font-size: 12px" class="fonts-10"> <?php echo $responses->siteOfficialPhone ?></p>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?php echo $responses->siteMail ?>">
                                    <i class="fa fa-envelope border-blue"></i>
                                </a>
                                <h4>Email</h4>
                                <a href="mailto:<?php echo $responses->siteMail ?>">
                                    <p style="color: black; font-size: 12px" class="fonts-10"><?php echo $responses->siteMail ?></p>
                                </a>
                            </li>
                        </ul>
                        <?php  }; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
    <!--NEWSLETTER START-->
    <?php require_once ("footer.php")?>
</div>
<!--WRAPPER END-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php require_once ("e_script.php")?>