var xmlhttp;
 function GetXMLHttp()
 {
	 if(window.XMLHttpRequest)
	 {
		 return new(XMLHttpRequest);
	 }
	 if(window.ActiveXObject)
	 {
		 return new ActiveXObject("Microsoft.XMLHTTP");
	 }
 }
 function select_patient(str)
 {
	 xmlhttp=GetXMLHttp();
	 if(xmlhttp==null)
	 {
		 alert("Empty Result");
	 }
	 var url="select_adpatient.php";
	 url=url+"?x="+str;
	 xmlhttp.onreadystatechange= function()
	 {
		 if(xmlhttp.readyState==4)
		 {
			 document.getElementById("table").innerHTML=xmlhttp.responseText;
		 }
	 }
	 xmlhttp.open("GET",url,true);
	 xmlhttp.send(null);
 }