/*
1)Only Alpha xxx//dd

2)Alpha Numeric txt
3)Number ttx
4)Email txx
5)Password Match
6)Password Length
7)Text Length
8)ComboBox 'Select' cmb
9)Radio Button rbt

*/
	//alpha,numeric,alphanum,combobox,radio
function validate(ele)
{
	var str4=true;
	var numstr=true;
	var alphanum=true;
	var cmb=true;
	var rad=true;
	var email=true;
	var file=true;
	var blank=true;
	var excelfile=true;
	var excelfile1=true;
	var pwd=true;
	var alpha=true;//dd
	
	for (var i=0;i<ele.length;i++)
  	{
			//alert("Element Name: "+ele.elements[i].name+"\nIndex: "+i);
			
			if(ele.elements[i].name.substring(0,3)=='pwd')
			{
				pwd=check_password(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='txt')
			{
				alphanum=check_alpha(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='ttt')
			{
				blank=check_blank(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='ttx')
			{
				numstr=check_num(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='txx')
			{
				email=email1(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='cmb' || ele.elements[i].name.substring(0,4)=='1cmb')
			{
				cmb=check_cmb(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='rbt')
			{
				//rad =check_rad(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,4)=='file')
			{
				file=check_file(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='pdf') //PDF File
			{
				pdf=check_pdffile(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,5)=='1file')
			{
				excelfile=check_excelfile(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,6)=='11file')
			{
				excelfile1=check_excelfile1(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='uex')//Excel File Update
			{
				excelfile=check_excelfile(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='iex') //Excel File Insert 
			{
				excelfile1=check_excelfile1(ele.elements[i]);
			}
			if(ele.elements[i].name.substring(0,3)=='xxx')//dd
			{
				alpha=check_alphanum(ele.elements[i]);
			}
	}
	if(numstr==true && alphanum==true && cmb==true && rad==true && email==true && file==true && blank==true && excelfile==true && excelfile1==true && pwd==true && alpha==true)//dd
	{
		str4=true;
	}
	else
	{
		str4=false;
	}
  	return str4;
}
function check_password(ele)
{
	var char1=true;
	var valid_char=/^[a-zA-Z0-9\-/ ]+$/;
	p1=document.getElementById('pwdpassword').value;
	p2=document.getElementById('cpwpassword').value;
	document.getElementById('pwdpassword1').innerHTML="";
	document.getElementById('cpwpassword1').innerHTML="";
	document.getElementById('pwdpassword').style.border='';
	document.getElementById('cpwpassword').style.border='';
//if(valid_char.test(ele.value)==false)
	if(p1 == '')
	{
		document.getElementById('pwdpassword1').innerHTML="Enter Password";
		document.getElementById('pwdpassword1').style.color='red';
		document.getElementById('pwdpassword1').style.textTransform='uppercase';
		document.getElementById('pwdpassword1').style.fontWeight='bold';
		document.getElementById('pwdpassword').style.border='2px solid red';
		char1=false;
	}
	else if(p1.length < 6)
	{
		document.getElementById('pwdpassword1').innerHTML="Password Must Be Grater Than 6 Character ";
		document.getElementById('pwdpassword1').style.color='red';
		document.getElementById('pwdpassword1').style.textTransform='uppercase';
		document.getElementById('pwdpassword1').style.fontWeight='bold';
		document.getElementById('pwdpassword').style.border='2px solid red';
		char1=false;
	}
	else if(p1.length > 15)
	{
		document.getElementById('pwdpassword1').innerHTML="Password Must Be Less Than 15 Character";
		document.getElementById('pwdpassword1').style.color='red';
		document.getElementById('pwdpassword1').style.textTransform='uppercase';
		document.getElementById('pwdpassword1').style.fontWeight='bold';
		document.getElementById('pwdpassword').style.border='2px solid red';
		char1=false;
	}
	
	if(p2 == '')
	{
		document.getElementById('cpwpassword1').innerHTML="Enter Confirm Password";
		document.getElementById('cpwpassword1').style.color='red';
		document.getElementById('cpwpassword1').style.textTransform='uppercase';
		document.getElementById('cpwpassword1').style.fontWeight='bold';
		document.getElementById('cpwpassword').style.border='2px solid red';
		char1=false;		
	}
	else if(p1 != p2)
	{
		document.getElementById('cpwpassword1').innerHTML="Password Doses Not Match";
		document.getElementById('cpwpassword1').style.color='red';
		document.getElementById('cpwpassword1').style.textTransform='uppercase';
		document.getElementById('cpwpassword1').style.fontWeight='bold';
		document.getElementById('cpwpassword').style.border='2px solid red';
		char1=false;		
	}
	return char1;
}
function check_file(fld) 
{
	if(fld.value.length>0)
	{
		if(!/(\.bmp|\.png|\.gif|\.jpg|\.jpeg)$/i.test(fld.value)) 
		{
			document.getElementById(fld.name+1).innerHTML="Select Valid Image (e.g .jpg .jpeg .png .gif .bmp)";
			document.getElementById(fld.name+1).style.color='red';
			document.getElementById(fld.name+1).style.textTransform='uppercase';
			document.getElementById(fld.name+1).style.fontWeight='bold';
			return false;   
		} 
		else
		{
			document.getElementById(fld.name+1).innerHTML="";
			return true;
		}
	}
	else
	{
		document.getElementById(fld.name+1).innerHTML="";
		return true;
	}
}

function check_blank(ele)
{
	var char1=true;
	document.getElementById(ele.name+1).innerHTML="";
	//alert(ele.value.length);
	if(ele.value=="")
	{
		document.getElementById(ele.name+1).style.color='red';
		document.getElementById(ele.name+1).style.textTransform='uppercase';
		document.getElementById(ele.name+1).style.fontWeight='bold';
		var msg=ele.name.substring(3).replace("_"," ");
		document.getElementById(ele.name+1).innerHTML="Enter the "+msg;
		char1=false;
	}
	return char1;
}
function check_alphanum(ele)
{
	var char1=true;
	var valid_char=/^[a-zA-Z0-9\-/ ]+$/;
	document.getElementById(ele.name+1).innerHTML="";
		document.getElementById(ele.name).style.border='';
	//if(valid_char.test(ele.value)==false)
	if(ele.value=="")
	{
		var msg=ele.name.substring(3).replace("_"," ");
		document.getElementById(ele.name+1).innerHTML="Enter the "+msg;
		document.getElementById(ele.name+1).style.color='red';
		document.getElementById(ele.name+1).style.textTransform='uppercase';
		document.getElementById(ele.name+1).style.fontWeight='bold';
		document.getElementById(ele.name).style.border='2px solid red';
		char1=false;
	}
	return char1;
}
function check_cmb(ele)
{
	//alert(ele.value);
	var comb=true;
	document.getElementById(ele.name+1).innerHTML="";
	document.getElementById(ele.name).style.border='';
//	alert(ele.value);
	if(ele.value=='select')
	{
		document.getElementById(ele.name+1).innerHTML="Please select any value";
		document.getElementById(ele.name+1).style.color='red';
		document.getElementById(ele.name+1).style.textTransform='uppercase';
		document.getElementById(ele.name+1).style.fontWeight='bold';
		document.getElementById(ele.name).style.border='2px solid red';
		comb=false;
	}
	return comb;
}
function check_num(ele)
{
	var char=true;
	var valid_char=/^[0-9 ]+$/;
	document.getElementById(ele.name+1).innerHTML="";
	document.getElementById(ele.name).style.border='';
	if(ele.value!="")
	{
		if(valid_char.test(ele.value)==false)
		{
			document.getElementById(ele.name+1).innerHTML="Please enter only Numbers";
			document.getElementById(ele.name+1).style.color='red';
			document.getElementById(ele.name+1).style.textTransform='uppercase';
			document.getElementById(ele.name+1).style.fontWeight='bold';
			document.getElementById(ele.name).style.border='2px solid red';
			char=false;
		}
		/*Code Added To Max Phone Limit 15 by meraj 8/3/16 */
		else
		{
			if(ele.value.length > 15)
			{
				document.getElementById(ele.name+1).innerHTML="Please enter Valid Numbers";
				document.getElementById(ele.name+1).style.color='red';
				document.getElementById(ele.name+1).style.textTransform='uppercase';
				document.getElementById(ele.name+1).style.fontWeight='bold';
				document.getElementById(ele.name).style.border='2px solid red';
				char=false;
			}
		}
	}
	else if(ele.value=="")
	{
			var msg=ele.name.substring(3).replace("_"," ");
			document.getElementById(ele.name+1).innerHTML="Please enter "+msg;
			document.getElementById(ele.name+1).style.color='red';
			document.getElementById(ele.name+1).style.textTransform='uppercase';
			document.getElementById(ele.name+1).style.fontWeight='bold';
			document.getElementById(ele.name).style.border='2px solid red';
			char=false;			
	}
	return char;
}
function email1(ele)
{
	var valid_char= /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	var char=true;
	document.getElementById(ele.name+1).innerHTML="";
	document.getElementById(ele.name).style.border='';
	if(ele.value!="")
	{
		if(valid_char.test(ele.value)==false)
		{
			document.getElementById(ele.name+1).innerHTML="Please Enter Valid Email ID";
			document.getElementById(ele.name+1).style.color='red';
			document.getElementById(ele.name+1).style.textTransform='uppercase';
			document.getElementById(ele.name+1).style.fontWeight='bold';
			document.getElementById(ele.name).style.border='2px solid red';
			char=false;
		}
	}
	else if(ele.value == "")
	{
			document.getElementById(ele.name+1).innerHTML="Please Enter Email ID";
			document.getElementById(ele.name+1).style.color='red';
			document.getElementById(ele.name+1).style.textTransform='uppercase';
			document.getElementById(ele.name+1).style.fontWeight='bold';
			document.getElementById(ele.name).style.border='2px solid red';
			char=false;		
	}
	return char;
}
function check_excelfile1(fld) 
{
	if(!/(\.csv|\.xls|\.xlsx)$/i.test(fld.value)) 
	{
		document.getElementById(fld.name+1).innerHTML="Select Valid Excel File ";
		document.getElementById(fld.name+1).style.color='red';
		document.getElementById(fld.name+1).style.textTransform='uppercase';
		document.getElementById(fld.name+1).style.fontWeight='bold';
		return false;   
	} 
	else
	{
		document.getElementById(fld.name+1).innerHTML="";
		return true;
	}
}
function check_excelfile(fld) 
{
	if(fld.value != "" )
	{
		if(!/(\.csv|\.xls|\.xlsx)$/i.test(fld.value)) 
		{
			document.getElementById(fld.name+1).innerHTML="Select Valid Excel File ";
			document.getElementById(fld.name+1).style.color='red';
			document.getElementById(fld.name+1).style.textTransform='uppercase';
			document.getElementById(fld.name+1).style.fontWeight='bold';
			return false;   
		} 
		else
		{
			document.getElementById(fld.name+1).innerHTML="";
			return true;
		}
	}
	else
		return true;
}
function check_pdffile(fld)
{
	if(fld.value.length>0)
	{
		if(!/(\.pdf)$/i.test(fld.value)) 
		{
			document.getElementById(fld.name+1).innerHTML="Select PDF File";
			document.getElementById(fld.name+1).style.color='red';
			document.getElementById(fld.name+1).style.textTransform='uppercase';
			document.getElementById(fld.name+1).style.fontWeight='bold';
			return false;   
		} 
		else
		{
			document.getElementById(fld.name+1).innerHTML="";
			return true;
		}
	}
	else
	{
		document.getElementById(fld.name+1).innerHTML="";
		return true;
	}
}
function check_alpha(ele)//dd
{
	var char1=true;
	var valid_char=/^[a-zA-Z]+$/;
	document.getElementById(ele.name+1).innerHTML="";
	document.getElementById(ele.name).style.border='';
	//if(valid_char.test(ele.value)==false)
	if(ele.value!="")
	{
		if(valid_char.test(ele.value)==false)
		{
			document.getElementById(ele.name+1).innerHTML="Please enter only Alpha";
			document.getElementById(ele.name+1).style.color='red';
			document.getElementById(ele.name+1).style.textTransform='uppercase';
			document.getElementById(ele.name+1).style.fontWeight='bold';
			document.getElementById(ele.name).style.border='2px solid red';
			char1=false;
		}
	}
	else if(ele.value=="")
	{
			var msg=ele.name.substring(3).replace("_"," ");
			document.getElementById(ele.name+1).innerHTML="Please enter "+msg;
			document.getElementById(ele.name+1).style.color='red';
			document.getElementById(ele.name+1).style.textTransform='uppercase';
			document.getElementById(ele.name+1).style.fontWeight='bold';
			document.getElementById(ele.name).style.border='2px solid red';
			char1=false;			
	}

	return char1;
}
