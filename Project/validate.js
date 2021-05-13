function val_lemail()
{
	var email = document.getElementById("lemail").value;
	email = email.trim();
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (re.test(email))
	  {
	    document.getElementById("check-lemail").innerHTML = " &nbsp;";
	    return true;
	  }
	document.getElementById("check-lemail").innerHTML = "<b>Invalid Email ID!</b>";
	return false;	 
}

function val_lpass()
{
	var pass = document.getElementById("lpass").value;
	pass = pass.trim();
	if (pass.length < 6)
	{
		document.getElementById("check-lpass").innerHTML = "<b>Invalid password!</b>";
		return false;
	}
	document.getElementById("check-lpass").innerHTML = "&nbsp;";
	return true;
}

function val_rfname()
{
	var fname = document.getElementById("rfname").value;
	fname = fname.trim();
	if (fname.length == 0)
	{
		document.getElementById("check_rfname").innerHTML = "<b>Cannot be empty!</b>";
		return false;
	}
	document.getElementById("check_rfname").innerHTML = "&nbsp;";
	return true;
}

function val_rlname()
{
	var lname = document.getElementById("rlname").value;
	lname = lname.trim();
	if (lname.length == 0)
	{
		document.getElementById("check_rlname").innerHTML = "<b>Cannot be empty!</b>";
		return false;
	}
	document.getElementById("check_rlname").innerHTML = "&nbsp;";
	return true;
}

function val_remail()
{
	var email = document.getElementById("remail").value;
	email = email.trim();
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (re.test(email))
	  {
	    document.getElementById("check_remail").innerHTML = "&nbsp;";
	    return true;
	  }
	document.getElementById("check_remail").innerHTML = "<b>Invalid Email ID!</b>";
	return false;	 
}

function val_rpass()
{
	var psw = document.getElementById("rpass").value;
	psw = psw.trim();
	var re1 = /[a-z]/;
	var re2 = /[A-Z]/;
	var re3 = /[!@#\$%\^\&*\)\(+=._-]/;
	var re4 = /[0-9]/;
	if (psw.length < 6 || psw.length > 18 || !(re1.test(psw) && re2.test(psw) && re3.test(psw) && re4.test(psw)))
	{
	    if (psw.length < 6 || psw.length > 18)
	    {
	      document.getElementById("tlen").innerHTML = "&#10006;";
	    }
	    else {
	      document.getElementById("tlen").innerHTML = "&#10004;";
	    }
	    if (!re1.test(psw))
	    {
	      document.getElementById("tlow").innerHTML = "&#10006;";
	    }
	    else {
	      document.getElementById("tlow").innerHTML = "&#10004;"
	    }
	    if (!re2.test(psw))
	    {
	      document.getElementById("tup").innerHTML = "&#10006;";
	    }
	    else {
	      document.getElementById("tup").innerHTML = "&#10004;";
	    }
	    if (!re3.test(psw))
	    {
	      document.getElementById("tsp").innerHTML = "&#10006;";
	    }
	    else {
	      document.getElementById("tsp").innerHTML = "&#10004;";
	    }
	    if (!re4.test(psw))
	    {
	      document.getElementById("tdg").innerHTML = "&#10006;";
	    }
	    else {
	      document.getElementById("tdg").innerHTML = "&#10004;";
	    }
	    return false;
	}

	document.getElementById("tlen").innerHTML = "&#10004;";
	document.getElementById("tup").innerHTML = "&#10004;";
	document.getElementById("tlow").innerHTML = "&#10004;";
	document.getElementById("tdg").innerHTML = "&#10004;";
	document.getElementById("tsp").innerHTML = "&#10004;";
	return true;		
}

function val_adminuname()
{
	var uname = document.getElementById("admin-uname").value;
	uname = uname.trim();
	if (uname.length == 0)
	{
		document.getElementById("check-adminuname").innerHTML = "<b>Cannot be empty!</b>";
		return false;
	}
	document.getElementById("check-adminuname").innerHTML = "&nbsp;";
	return true;
}

function val_adminpass()
{
	var passw = document.getElementById("admin-pass").value;
	passw = passw.trim();
	if (passw.length == 0)
	{
		document.getElementById("check-adminpass").innerHTML = "<b>Invalid password!</b>";
		return false;
	}
	document.getElementById("check-adminpass").innerHTML = "&nbsp;";
	return true;
}