function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  //Make a loop that will continue until no switching has been done:
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    //Loop through all table rows (except the first, which contains table headers):
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      //Get the two elements you want to compare, one from current row and one from the next:
      x = rows[i].getElementsByTagName("TD")[2];
      y = rows[i + 1].getElementsByTagName("TD")[2];
      //check if the two rows should switch place:
      if (Number(x.innerHTML) > Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      //If a switch has been marked, make the switch and mark that a switch has been done:
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

//write a list
var listnum=1;


function numberlist(a,src,p,mon,day){
  var ss1,date1,date2;
  var mon0=["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
  if (day<10){
    date2=mon0[mon]+" 0"+day;
    if(mon<10) date1="2019-0"+mon+"-0"+day;
    else date1="2019-"+mon+"-0"+day;
  } else{
    date2=mon0[mon]+" "+day;
    if(mon<10) date1="2019-0"+mon+"-"+day;
    else date1="2019-"+mon+"-"+day;
  }

  a=a+" ";



  ss1="<tr><td><time datetime='"+date1+" 12:27' title='"+date1+" 12:27:36 PM'>"+date2+"<time></td>\n<td><a href='"+src+"' target='_blank'> "+a+listnum+"</a></td>\n<td>"+p+"</td></tr>";
    document.write(ss1);
    listnum++;

  
}

function randomlist(a,src,p){
  var num0= 20+Math.floor(Math.random()*21);
  var i,j,p1,a1,a2,a3,a4,ss1;
  var day1=["Mon", "Tue", "Wed", "Thu", "Fri", "Sat","Sun"];
  a=a+" ";

  for(i=0;i<num0;i++){
    a1=Math.floor(Math.random()*21);
    j=Math.floor(a1/7);
    if(a1<4){
      a2="2019-01-"+(a1+28);
      a3="Jan "+(a1+28);
      a4=day1[j]+" "+(a1+28)+" Jan";
    }else if(a1<13){
      a2="2019-02-0"+(a1-3);
      a3="Feb 0"+(a1-3);
      a4=day1[j]+" 0"+(a1-3)+" Feb";
    }else {
      a2="2019-02-"+(a1-3);
      a3="Feb "+(a1-3);
      a4=day1[j]+" "+(a1-3)+" Feb";
    }
    
    p1=Math.floor((1+Math.random()*2)*p);

    ss1="<tr><td><time datetime='"+a2+" 12:27' title='"+a4+" 12:27:36 PM'>"+a3+"<time></td>\n<td><a href='"+src+"' target='_blank'> "+a+(listnum+i)+"</a></td>\n<td>"+p1+"</td></tr>";
    document.write(ss1);
  }
  listnum+=num0;
}
