<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact - Blue Tech</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/fixed_menu.js">
</script>

<!-- Scroll to top button! -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow26.js"></script>

<!-- Social networks -->

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="file://js/buttons.js"></script>
<script type="text/javascript" src="file://js/loader.js"></script>

<script type="text/javascript">stLight.options({publisher: "be0cbfc0-1bfb-4d09-aa85-5b19dd8e07b6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "be0cbfc0-1bfb-4d09-aa85-5b19dd8e07b6", "position": "right","background":"none", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "googleplus", "wordpress"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>


</head>
<body>

<div id="templatemo_wrapper">
	
	 <!-- header part -->
    
    <?php 
	require_once("header.php");
	?>
    
    <!--end of header part -->
   
    <div id="templatemo_main">
      <div id="templatemo_content" class="left">
        <div class="content_wrapper content_mb_30">
            
           	<h2>Contact Us</h2>
                 <div id="contact_form" class="col_2 left">
                <!--
                     <h3>Contact Form</h3>-->
                   <form method="post" name="contact" action="#"> 
                    
                        <div class="col_3">
                            <label for="name">Name:</label>
                            <input name="name" type="text" class="required input_field" id="name" maxlength="30" required="required" placeholder="Your Name..." style="margin-left:2px"/>
                        </div>
                        
                        
                        
                        <div class="clear h10"></div>
                        
                     	 <div class="col_3 left">
                        <label for="phone">Phone:</label>
                          <input name="phone" type="text" class="required input_field" id="phone" maxlength="20" required="required" placeholder="+91-9999999999" pattern="^\+\d{2}\-\d{10}$" Style="margin-left:2px"/>
                        </div>
                        
                      <div class="col_3 no_margin_right" style="clear:left">
                          <label for="email">Email:</label>
                            <input name="email" type="email" class="validate-email required input_field" id="email" maxlength="30" required="required" placeholder="example@domain.com" style="margin-right:2px" />
                        </div>
                  		
                        <div style="clear:left">
                            <label for="email">Subject:</label>
                      	<input name="subject" type="text" class="validate-email required input_field" id="subject" maxlength="40" required="required" placeholder="Main topic of query" style="margin-right:3px" size="20"/>
                    	</div>
                        
                      <div class="clear" ></div>
                      <label for="text">Message:</label> 
                      
                      <textarea id="text" name="text" rows="0" cols="0" required="required" placeholder="Describe your query" style="clear:both; width:298px"></textarea><br />
                        <input type="submit" name="Submit" value="Submit" class="submit_btn left" />
                        <input type="reset" name="Reset" value="Reset" class="submit_btn" style="margin-left:125px;" />
                    </form>
                    
                </div> 
            </div>
            
            <div class="content_wrapper">
            </div>
		</div>
        <div id="templatemo_sidebar" class="right">
       		
                <h3>Advanced Magnetronics</h3>
                Enter address complete here...<br /><br />
                
                Tel:landline<br />
                Mobile: mobile
				
                <div class="clear h30"></div>
				<h3>Location</h3>

                <iframe width="476" height="300" frameborder="0" style="border:0" zoom="25.0" src="https://www.google.com/maps/embed/v1/place?q=Vithal%20Udyognagar%2C%20GIDC%2C%20Vitthal%20Udyognagar%20INA%2C%20Gujarat%20388121%2C%20India&key=AIzaSyBhnJOaMQj-gu-0-t4cf1Lbz4bF1GDCgeE"></iframe><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Vithal%20Udyognagar%2C%20GIDC%2C%20Vitthal%20Udyognagar%20INA%2C%20Gujarat%20388121%2C%20India" style="color:#fff;text-align:left">View Larger Map</a></small>
                
               
      </div>
        <div class="clear"></div>
    </div>
    <!-- footer part --> 

<?php 
require_once("footer.php");
?>

<!-- end of footer-->
</div> <!-- END of templatemo_wrapper -->



</body>
</html>