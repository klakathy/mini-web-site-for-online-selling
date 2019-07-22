
// submit post form

	function submitpost(){
		var jhuEmail=document.Form.itememail.value;
		if (!(jhuEmail.includes("@jhu.edu"))){
			document.Form.itememail.value="";
			document.Form.itememail.focus();
			alert("wrong email");
			return false;
		} 
		if(!checkprice())return false;
		if(!checkplace())return false;
		var phone=document.Form.itemphone.value;
		if(isNaN(phone))return false;

		alert("Succseeful");
		return true;
	}
// validation


function checkprice(){
	var price=document.Form.itemprice.value;
	if(isNaN(price)){
		alert ("invalid price");
		document.Form.itemprice.focus();
		return false;
	}else if(price<=0){
		alert ("invalid price");
		document.Form.itemprice.focus();
		return false;
	}
	return true;
}

function checkplace(){
	var place=document.Form.itemplace.value;
	if(place==3){
		var place2=document.Form.otherplace.value;
		if(place2==""){
			alert ("other place required");
			document.Form.otherplace.focus();
			return false;
		}
	}
	return true;
}


//description textarea auto expand
    function text_extend(a,b) {
    	a.style.height="190px";
    	var aa=a.scrollHeight+b;
    	a.style.height=aa+"px";
    }

//allow more picture and display immediately
  function showimg(a0){
    for(var i=0; i<a0.files.length; i++){
      var img1=new FileReader(); 
      img1.readAsDataURL(a0.files[i]);
      img1.onload=function(){
        var node1= document.createElement("img");
        node1.src=this.result;
        preshowimage.appendChild(node1);      
      };
    }
    preshowinput.insertBefore(a0,preshowinput.childNodes[0].nextSibling);
    preshowinput.childNodes[0].innerHTML="<span></span><input type='file' name='picture[]' accept='image/*' multiple oninput='showimg(this)' />";
    //console.log(preshowinput.childNodes[0].innerHTML);
  }

//reset: description textarea && picture show
    function text_shrink(){
    	mess1.style.height="200px";
    	preshowimage.innerHTML="";
    	preshowinput.innerHTML='<label><span></span><input type="file" name="picture[]" accept="image/*" multiple oninput="showimg(this)" /></label>';
    }



