<?php
$current_url = admin_url( "admin.php?page=".$_REQUEST["page"] );
if(isset($_REQUEST['Submit']) && trim($_REQUEST['Submit']) == "Update")	{
				$name=sanitize_text_field($_REQUEST['sname']);
				$oname=sanitize_text_field($_REQUEST['oname']);
				$oemail=sanitize_text_field($_REQUEST['oemail']);
				$coun=sanitize_text_field($_REQUEST['country']);
				$link=sanitize_text_field($_REQUEST['welcometitle']);
				$wmess=sanitize_text_field($_REQUEST['welcommess']);
				$result = $wpdb->query($wpdb->prepare( "UPDATE wc_lawful_cookie_consent SET  
						popbg = '$name',
						btnbg='$oname',
						btntxt='$oemail',
						position='$coun',
						linkpage='$link',
						eumessage='$wmess'" ));
			if ($result){
			header("location:$current_url&msg=edit");
			}
}		

		$p_name = "";
		$p_oname = "";
		$p_oemail = "";
		$p_count = "";
		$link="";
		$p_wmess="";
		$result = $wpdb->get_results($wpdb->prepare("SELECT * FROM wc_lawful_cookie_consent"));
		if($result)
		{
			foreach($result as $row)
			{
				$p_name = sanitize_text_field($row->popbg);	   
		   		$p_oname = sanitize_text_field($row->btnbg);
				$p_oemail = sanitize_text_field($row->btntxt);
				$p_count = sanitize_text_field($row->position);
				$link = sanitize_text_field($row->linkpage);
				$p_wmess = sanitize_text_field($row->eumessage);
				
			}
		}
		
		
?>

<div style="float:none" class="well-3 center-block-3 col-md-4-3">
			
	<form action="" method="post" enctype="multipart/form-data" name="contact">
		<span style="color:red">
		<?php
		if(isset($_REQUEST['msg']))
		{
			echo esc_html($mess[$_REQUEST['msg']]); 
		}
		?>
		</span><br />
		<h3><?php echo 'Lawful Cookie Consent Admin Page';?></h3>
		
          <label>*Popup-background:</label>
          <br />
            <input style="width:100%" required="required" name="sname" type="text" id="sname" value="<?php echo esc_html($p_name);?>" />
          <br />
          <label>*Button-background-color:</label>
          <br />
		  <input style="width:100%" required="required" name="oname" type="text" id="oname" value="<?php echo esc_html($p_oname);?>" />
		  <br />
          <label>*Button-text-color:</label>
          <br />
		  <input style="width:100%" required="required" name="oemail" type="text" id="oemail" value="<?php echo esc_html($p_oemail);?>" />
		  
          
        <br />
		  <label>*Position(select your option):</label>
		  <br />
				<select style="width:100%;max-width: 100%;" required id="country" name="country" size="1">
					<option value="<?php echo esc_html($p_count); ?>" disabled selected><?php echo esc_html($p_count); ?></option>
					<option value="top"<?php if(isset($_POST['country']) == "top") echo "selected";?>>Top position</option>
					<option value="bottom"<?php if(isset($_POST['country']) == "bottom") echo "selected";?>>Bottom Position</option>
					<option value="top-left"<?php if(isset($_POST['country']) == "top-left") echo "selected";?>>Top-left position</option>
					<option value="top-right"<?php if(isset($_POST['country']) == "top-right") echo "selected";?>>Top-right Position</option>
					<option value="bottom-left"<?php if(isset($_POST['country']) == "bottom-left") echo "selected";?>>Bottom-left position</option>
					<option value="bottom-right"<?php if(isset($_POST['country']) == "bottom-right") echo "selected";?>>Bottom-right Position</option>
				</select>
		  
		 <br />
		  
         
          <label>*Link(Cookie notice href) </label>
          <br />
          <input style="width:100%" name="welcometitle" type="text" id="welcometitle" value="<?php echo esc_html($link);?>" />
		 <br />
         <label">*Message </label>
         <br />
         <textarea  name="welcommess" rows="10" style="width:100%" id="welcommess"><?php echo esc_html($p_wmess);?>
         </textarea>
		  
          
         <br />
         <div style="clear:both">
					<br />
		 </div> 
       
         <input name="Submit" type="submit" class="btn" id="submit" value="Update" onclick="return check();"/>
       
        </form>
    
		</div>
