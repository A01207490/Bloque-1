function validateform(theForm) {
	if (theForm.type1.checked == false && theForm.type2.checked == false){
		alert ('Please select at least one type of game!');
		return false;
	} else if(theForm.company1.checked == false && theForm.company2.checked == false){
		alert ('Please select at least one company!');
		return false;
	} else { 	
		return true;
	}
}

