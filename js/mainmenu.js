/*main-menu*/


// 1 show or close main menu by mouse over
	function menu_show(){
		main_menu.style.display="block";
	}

	function menu_close(){
		main_menu.style.display="none";
	}


// 2 search function
function search_working(){
	var search_input=document.search_on_list.search_text.value;
	if(search_input==""){
		alert("empty imput");
		return false;
	}
	return true;
}
// 3 contact us and about us
	// 3-1  closeall div
	function closecontact(){
		about_section.style.display="none";
		contact_section.style.display="none";
		window0.style.display = "none";
	}

	// 3-3 open div for contact or about
	function opencontact(a){
		window0.style.display="block";
		about_section.style.display="none";
		contact_section.style.display="none";
		if(a==1)
			about_section.style.display="block";
		else
			contact_section.style.display="block";	
	
	}
	// 3-3 submit contact form
	function submitcontact(){
		var contactname=document.form_contact.name_contact.value;
		if (!check_contactname(contactname)){
			document.form_contact.name_contact.value="";	
			document.form_contact.name_contact.focus();
			return false;
		} 
		var contactemail=document.form_contact.email_contact.value;
		if (!check_contactemail(contactemail)){
			document.form_contact.email_contact.value="";
			document.form_contact.email_contact.focus();
			return false
		} 				
		var contactphone=document.form_contact.phone_contact.value;
		if (!check_contactphone(contactphone)){
			document.form_contact.phone_contact.value="";
			document.form_contact.phone_contact.focus();
			return false
		} 	
		var contactmessage=document.form_contact.message_contact.value;
		if (!check_contactmessage(contactmessage)){
			document.form_contact.message_contact.focus();
			return false
		} 	

		alert("Thank you for contacting us.");
		document.form_contact.name_contact.value="";
		document.form_contact.email_contact.value="";
		document.form_contact.phone_contact.value="";
		document.form_contact.message_contact.value="";
		closecontact();
		return true;	
	}


	// 3-2 contact form validation
	function check_contactname(contactname) {		
		var pattern=/[0123456789~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/;
		if (contactname=="") {
			alert ("Please type in your name.");		
			return false;
		} else if (pattern.test(contactname)) {
			alert("No numbers or special characters are allowed in name.");
			return false;
		}
		return true;
	}

	function check_contactemail(contactemail){		
		if (contactemail=="") {
			alert("Please enter your @jhu.edu email.");			
			return false;
		} else if (!(contactemail.includes("@jhu.edu"))) {
			alert("Please enter your @jhu.edu email.");				
			return false;
		}
		return true;
	}

	function check_contactphone(contactphone) {
		var pattern=/[qwertyuiopasdfghjklzxcvbnm~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/;
		if (pattern.test(contactphone)) {
			alert("Only numbers are allowed in phone.");
			return false;
		}
		return true;
	}
	function check_contactmessage(contactmessage) {
		if (contactmessage=="") {
			alert ("Please type in your message.");
			return false;
		} 
		return true;
	}	


//4 change color on page by click
	// 4.1 [write a box of color showing in the page], input rgb
	var color_page_value_list=1;
	function wcolor(a1,a2,a3){
		document.write("<label class='color_container'><input type='radio' name='color_page' value='"+color_page_value_list+"'  onclick='change_c("+a1+","+a2+","+a3+")'/><span class='color_mark' style='background-color: rgb("+a1+","+a2+","+a3+");''></span></label>");
		color_page_value_list++;
	}

	// 4.2 [change color] (no valid check), direct for radio, cite by color-input/random/text-input, input rgb
	function change_c(a1,a2,a3){
	    var c1= document.getElementsByClassName("topbar1");
	    var c2= document.getElementsByClassName("container-start");
	    var c3= document.getElementsByClassName("container-end");

	    var cc=[c1,c2,c3];
	    var i,j;
	    for(i=0;i<cc.length;i++)
		    for(j=0;j<cc[i].length;j++){
		    	cc[i][j].style.backgroundColor="rgb("+a1+","+a2+","+a3+")";
		    }

	    var i=155;
	    if(a1+a2+a3>580){
	    	a1=(255-a1>i)?(255-i-a1):0;
	    	a2=(255-a2>i)?(255-i-a2):0;
	    	a3=(255-a3>i)?(255-i-a3):0;
	    }else{
	    	a1=(a1>i)?(255+i-a1):255;
	    	a2=(a2>i)?(255+i-a2):255;
	    	a3=(a3>i)?(255+i-a3):255;
	    }
	    main_menu.style.color="rgb("+a1+","+a2+","+a3+")";
	}

	// 4.3 [input-text display + radio10 color/checked change], for random/input-color/input-text, input rgb
	function change_cr(a1,a2,a3){
		document.colorform.cr0.value=a1;
		document.colorform.cg0.value=a2;
		document.colorform.cb0.value=a3;
		color_r_and_c.style.backgroundColor="rgb("+a1+","+a2+","+a3+")";
		document.colorform.color_page.value=10;
	}


	// 4.4 for random, [create random color + input-text display + radio10 + change color]
	function change_c_random(){
		var a1=Math.floor(Math.random()*256);
		var a2=Math.floor(Math.random()*256);
		var a3=Math.floor(Math.random()*256);
	
		change_cr(a1,a2,a3);
		change_c(a1,a2,a3);
	}

	// 4.5 for color-input, [input-text display + radio10 + change color]
	function change_c_inputcolor(a0){	
		var rgb=a0.value.slice(1);
		rgb=parseInt(rgb,16);
		var a1,a2,a3;
		
		a1=Math.floor((rgb/256/256));
		a3=rgb%(256);
		a2=Math.floor(rgb/256);
		a2-=a1*256;
		
		change_cr(a1,a2,a3);
		change_c(a1,a2,a3);
	}

	// 4.6 for ok in text-input, [check valid + radio10 + change color]
	function change_c_inputtext(a1,a2,a3){
		//check validation of input
		if((a1=="")||isNaN(a1)||(a1>255)||(a1<0)){
			alert("invalid input r");
			return;
		} 
		if((a2=="")||isNaN(a1)||(a2>255)||(a2<0)){
			alert("invalid input g");
			return;
		} 
		if((a3=="")||isNaN(a1)||(a3>255)||(a3<0)){
			alert("invalid input b");
			return;
		}
		a1=Math.floor(a1);
		a2=Math.floor(a2);
		a3=Math.floor(a3); 

		change_cr(a1,a2,a3);
		change_c(a1,a2,a3);
	}

	//4.7 for remember
	function remember_c(){
		// the function now can only get rgb
		var a1,a2,a3;
		var ccc=document.colorform.color_page.value;
		if(ccc==9){			a1=40; a2=40; a3=40;}
		else if (ccc==10) {
			var tmp=color_r_and_c.style.backgroundColor;
			tmp=tmp.slice(4);
			var i,j=0,p=0;
			var a123=[0,0,0];
			for(i=1;i<tmp.length;i++){;
				if((tmp.charAt(i)==",")||(tmp.charAt(i)==")")){
					a123[p]=tmp.slice(j,i);
					p++;j=i+2;
				}
			}
			a1=a123[0];a2=a123[1];a3=a123[2];
		}else if (ccc==1) { a1=255;a2=255;a3=255;
		}else if (ccc==2) { a1=172;a2=194;a3=232;
		}else if (ccc==3) { a1=130;a2=180;a3=255;
		}else if (ccc==4) { a1=81; a2=122;a3=167;
		}else if (ccc==5) { a1=19; a2=47; a3=88;
		}else if (ccc==6) { a1=55; a2=71; a3=159;
		}else{				a1=25; a2=200;a3=170;
		}
		alert("r="+a1+"\ng="+a2+"\nb="+a3);		
		// store to db
	}

