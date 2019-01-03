// JavaScript Document


function showUser(str) 
{
  if (str=="") 
  {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest)
  {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else 
  { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() 
  {
    if (this.readyState==4 && this.status==200) 
	{
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","bill_edit.php?q="+str,true);
  xmlhttp.send();			
  
}




function showUser2(str) 
{
  if (str=="") 
  {
    document.getElementById("txtHint2").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest)
  {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhtt=new XMLHttpRequest();
  }
  else 
  { // code for IE6, IE5
    xmlhtt=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhtt.onreadystatechange=function() 
  {
    if (this.readyState==4 && this.status==200) 
	{
		
      document.getElementById("txtHint2").innerHTML=this.responseText;
    }
  }
  xmlhtt.open("GET","bill2_edit.php?q="+str,true);
  xmlhtt.send();			
  
}
function cal()
{
	
 var price=document.getElementById("txtHint2").value;
 var quantity=parseInt(document.getElementById("quan").value);
 var p=price*quantity;
 document.getElementById("total").value=p;
}