

function formv(frm)
{

	if((frm.userid.value=="")||(frm.password.value==""))alert("Enter Username/password first ");
	else document.forms["myform1"].submit();
}

function formalbum(frm)
{
	if((frm.album_name.value=="")||(frm.album_price.value=="")||(isNaN(frm.album_price.value)))alert("Enter Album Name And Price First With Valid Data");
	else document.forms["myform1"].submit();
}

function formartist(frm)
{
    	if(frm.artist_name.value=="")alert("Enter Artrist Name First ");
	else document.forms["myform1"].submit();
}

function formvRegister(frm)
{
    	if((frm.useremail.value=="")||(frm.userid.value=="")||(frm.password.value=="")||(frm.username.value==""))alert("Enter ID EMAIL PASSWORD and NAME ");
	else document.forms["myform1"].submit();
}

function formvEdit(frm)
{
    	if((frm.password.value=="")||(frm.username.value==""))alert("Enter PASSWORD and NAME ");
	else document.forms["myform1"].submit();
}

function check()
{
var ans=confirm("R u sure to delete ?");
if(ans){return true;}
else return false;
	
}

function checkformval(frm,i)
{
	
	var bool=0;
	for(var j=1;j<=i;j++)
	{
		
		if((frm['marks' + j].value=="")||(isNaN(parseInt(frm['marks' + j].value))==true))bool=1;
		
	}
	if(bool==1)
	{
		alert("Fill out all fields without any non-number value");
	}
	else 
	{
		document.forms["myform"].submit();
	}

	
}


function checkformval2(frm,i)
{
	
	var bool=0;
	for(var j=1;j<=i;j++)
	{
	
		
		
		if((frm['marks' + j].value=="")||(isNaN(parseInt(frm['marks' + j].value))==true))bool=1;
		
	}
	if(bool==1)
	{
		alert("Fill out all fields without any non-number value");
	}
	else 
	{
		document.forms["myform"].submit();
	}

	
}


function set(frm,i)
{
	var sum=0;
	var bool=0;
	for(var j=1;j<=i;j++)
	{
		sum+=parseInt(frm['perc' + j].value);
		if((frm['outof' + j].value=="")||(isNaN(parseInt(frm['outof' + j].value))==true))bool=1;
		
	}
	if((sum!=100)||(bool==1))
	{
		alert("Have to make total 100% where u did "+sum+"% and fill out all field");
	}
	else 
	{
		document.forms["myform1"].submit();
	}
}

function update(frm,i)
{
	//var ch=frm.outof1.value;
	var sum=0;
	var bool=0;
	for(var j=1;j<=i;j++)
	{
		sum+=parseInt(frm['perc' + j].value);
		if((frm['outof' + j].value=="")||(isNaN(parseInt(frm['outof' + j].value))==true))bool=1;
		
	}
	if((sum!=100)||(bool==1))
	{
		alert("Have to make total 100% where u did "+sum+"% and fill out all field");
	//	window.location.reload();
		//window.location.href=window.location.href;
		//document.forms["myform"].submit();
	}
	else document.forms["myform2"].submit();
}