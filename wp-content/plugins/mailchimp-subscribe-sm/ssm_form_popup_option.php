<?php
function ssm_form_popup_option($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;

    


?>

<style type="text/css">
    .formLayout_1
    {

        
        padding: 10px;
        width: 550px;
        margin: 10px;

        

    }
    
    .formLayout_1 label 
    {
        display: block;
        width: 195px;
        float: left;
        margin-bottom: 20px;
        margin-left: 20px;
    }
    .formLayout_1 input{
         display: block;
        float: left;
        margin-bottom: 20px;

    }
 
    .formLayout_1 label
    {
        text-align: right;
        padding-right: 20px;
        font-size: 16px;
        font-weight: bold;
    }
 
    br
    {
        clear: left;
    }

    </style>
	<div class='formLayout_1'> 	
	<br>
	<h2>PopUp Options For Subscribe Form</h2>
	<br>
	<br>
	<label for='sm_popup_active'>Enable PopUp :</label>
	<select name='sm_popup_active' id='sm_popup_active'>
	<option>Select</option>
	<option value='true' disabled > Enable</option>
	<option value='false'>Disable</option>
	</select>

	<br>
	<br>

	<label for='smf_popup_overlay_color'>OverLay Color : </label>
     <input type='text' class='color_picker' name='smf_popup_overlay_color' data-alpha="true" value=''/>
     <br>
     <br>
     <label for='smf_popup_overlay_color'>PopUp Delay <span style='font-size:11px;'>(In seconds)</span> : </label>
    <input type='number' name='smf_popup_delay' value='5'/>
    <br>
    <br>

	<label for='smf_popup_close_color'>Close Link Color : </label>
     <input type='text' class='color_picker' name='smf_popup_close_color' data-alpha="true" value=''/>
     <br>
     <br>
     <label for='smf_popup_close_text'>Close Link Text :</label>
     <input type='text' name='smf_popup_close_text' value='' style="width:300px;">
     <br>
     <br>

	</div>

  <div style='width:100%;text-align:center; background:#e3e3e3;height:60px;border-left:5px solid #a7d142;'>
<a href="http://web-settler.com/mailchimp-subscribe-form/" style='float: left;font-size: 19px; margin: 20px 0 0 10px;'id='pr_msg_link'><i>Unlock PopUp and more amazing features Click Here</i></a>
  <?php submit_button('Update');?>
</div>

<?php

}
?>