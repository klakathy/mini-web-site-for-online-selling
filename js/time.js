//show local time & show stay time

var myVar = setInterval(myTimer ,1000);
var d1 = new Date();
var time1h = d1.getHours();
var time1m = d1.getMinutes();
var time1s = d1.getSeconds();
function myTimer() {
 var d2 = new Date();
 document.getElementById("de").innerHTML= d2.toLocaleString('en-US');
 var time2h = d2.getHours()-time1h;
 var time2m = d2.getMinutes()-time1m;
 var time2s = d2.getSeconds()-time1s;
 if(time2s<0){
  time2m--;
  time2s+=60;
 }
 if(time2m<0){
  time2h--;
  time2m+=60;
 }
 if(time2s<10){
  if(time2m<10)
   document.getElementById("stay").innerHTML = time2h+":0"+time2m+":0"+time2s;
  else document.getElementById("stay").innerHTML = time2h+":"+time2m+":0"+time2s;
  }else{
   if(time2m<10)
    document.getElementById("stay").innerHTML = time2h+":0"+time2m+":"+time2s;
   else document.getElementById("stay").innerHTML = time2h+":"+time2m+":"+time2s;
  }
}