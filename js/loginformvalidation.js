
	// form validation for login useremail: @jhu.edu
	function submit_login(){
		var loginname=document.loginform.loginname.value;
		if (!(loginname.includes("@jhu.edu"))) {
			alert("Please enter your @jhu.edu email.");
			document.loginform.loginname.value="";
			document.loginform.loginname.focus();
			return false;
		}
		return true;
	}
	// form validation for signup useremail
	function submit_signup(){
		var loginname=document.signupform.loginname.value;
		if (!(loginname.includes("@jhu.edu"))) {
			alert("Please enter your @jhu.edu email.");
			document.loginform.loginname.value="";
			document.loginform.loginname.focus();
			return false;
		}
		return true;
	}

