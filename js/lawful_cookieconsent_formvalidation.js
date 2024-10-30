
function check(){

	var cond=true;
	
	if(document.contact.sname.value.length==0){
		alert("Please enter your color.");
		if(cond==true){
			document.contact.sname.focus();
		}
		cond=false;
		return false;
	}	
	else if(!checkMail_sname(document.contact.sname.value)){
		alert("Background must contain a valid letters and number.\n");
		if(cond==true){
			document.contact.sname.focus();
		}
		cond=false;
		return false;
	}
	function checkMail_sname(sname){
	var x = sname;
	//var filter  = /^([a-zA-Z'])+([a-zA-Z-' ])+([a-zA-Z'])+$/;
	var filter  = /^#[0-9a-zA-Z'][0-9a-zA-Z-' ]+[0-9a-zA-Z']?$/;
	if (filter.test(x)){
	 return true;
	}
	else {
	  return false;
	}
	}

	
	
	
	if(document.contact.oname.value.length==0){
		alert("Please enter your button background-color.");
		if(cond==true){
			document.contact.oname.focus();
		}
		cond=false;
		return false;
	}	
	else if(!checkMail_oname(document.contact.oname.value)){
		alert("Button background color must contain a valid letters and number.\n");
		if(cond==true){
			document.contact.oname.focus();
		}
		cond=false;
		return false;
	}
	function checkMail_oname(oname){
	var x = oname;
	var filter  = /^#[0-9a-zA-Z'][0-9a-zA-Z-' ]+[0-9a-zA-Z']?$/;
	if (filter.test(x)){
	 return true;
	}
	else {
	  return false;
	}
	}





	if(document.contact.oemail.value.length==0){
		alert("Please enter your button-text color.");
		if(cond==true){
			document.contact.oemail.focus();
		}
		cond=false;
		return false;
	}	
	else if(!checkMail_oemail(document.contact.oemail.value)){
		alert("Button text-color must contain a valid letters and number.\n");
		if(cond==true){
			document.contact.oemail.focus();
		}
		cond=false;
		return false;
	}
	function checkMail_oemail(oemail){
	var x = oemail;
	var filter  = /^#[0-9a-zA-Z'][0-9a-zA-Z-' ]+[0-9a-zA-Z']?$/;
	if (filter.test(x)){
	 return true;
	}
	else {
	  return false;
	}
	}



if(document.contact.country.value.length==0){
		alert("Please enter your position.");
		if(cond==true){
			document.contact.country.focus();
		}
		cond=false;
		return false;
	}	
	else if(!checkMail_country(document.contact.country.value)){
		alert("Position must contain a Valid letters and minus character.\n");
		if(cond==true){
			document.contact.country.focus();
		}
		cond=false;
		return false;
	}
	function checkMail_country(country){
	var x = country;
	//var filter  = /^([a-zA-Z'])+([a-zA-Z-' ])+([a-zA-Z'])+$/;
	var filter  = /^[a-zA-Z'][a-zA-Z-' ]+[a-zA-Z']?$/;
	if (filter.test(x)){
	 return true;
	}
	else {
	  return false;
	}
	}












}
