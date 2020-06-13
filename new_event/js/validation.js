/*
1)	pwd_			:-	Password Like "Pattern Match , Length"
2)	aphnum_	        :-	Alpha Numeric Like "A to Z, a to z, 0 to 9 "
3)	aphnums_	:-		Alpha Numeric With Symbol Like "A to Z, a to z, 0 to 9 [.-\/&_!@#$%&*+]"  
3)	blank_		:-	Blank Check
4)	num_			:-	Number Like "0 to 9 "
5)	eml_ 			:-	Email
6)	cmb_ 			:-	ComboBox "Select"
7)	rbt_			:-	Radio Button
8)	img_			:-	Check image file Like ".jpg, .jpeg, .png, .bmp, .gif "
9)	pdf_ 			:-	Check pdf file
10) sht_			:-	Sheet File Like "Excel , CSV"
14) aph_ 			:- Only Alpha Like "A to Z, a to z"
15) cmf_ 			:- Conform Password
*/
function validate(ele)
{
		var flag=0;
		var returnValue=true;
		var numstr=true;
		var alphanum=true;
		var cmb=true;
		var rbt=true;
		var email=true;
		var file=true;
		var blank=true;
		var sheetFile=true;
		var pwd=true;
		var aph=true;
		var cmf=true;
		var alpnums = true;
		for (var i=0;i<ele.length;i++)
		{
				//alert(ele.elements[i].name + " " +i+ " "+ ele.elements[i].value );
				thisElement = ele.elements[i];
				thisElementName = thisElement.name;
				thisElementValue = thisElement.value;
				thisElementId = "#"+thisElement.id;
				thisElementErrorDivId = thisElementId+1;
				thisElementPrefixValue = thisElementName.split("_")[0];
				thisElementWithoutPrefix = thisElementName.split(thisElementPrefixValue+"_")[1];
				//alert(thisElementWithoutPrefix);
				switch(thisElementPrefixValue)
				{
						case "aph":
								aph = checkAlpha(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(aph == false){ flag++; }
						break ;
						case "num":
								numstr = checkNumeric(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(numstr == false){ flag++; }
						break ;
						case "aphnum":
								alphanum = checkAlphaNumeric(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(alphanum == false) { flag++; }
						break ;
						case "aphnums":
								alpnums = checkAlphaNumericWithSymbolic(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(alpnums == false) { flag++; }
						break ;
						case "cmb" :
								cmb = checkCombobox(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(cmb == false){ flag++; }
						break ; 
						case "blank":
								blank = checkBlank(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(blank == false){ flag++; }
						break ; 
						case "eml":
							email = checkEmail(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
							if(email == false){flag++;	}
						break;
						case "img":
							file = checkImageFile(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
							if(file == false){ flag++;	 }
						break;
						case "sht":
								sheetFile = checkSheetFile(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(sheetFile == false) { flag++; }
						break;
						case "pdf":
								pdf = checkPdfFile(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(pdf == false){ flag++; }
						break;
						case "pwd":
								pwd = checkPassword(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(pwd == false){ flag++; }
						break;
						case "phno":
								phno = checkphonenumber(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue);
								if(pwd == false){ flag++; }
						break;
						case "cmf":
								cmf = checkConfirmPassword(ele.elements[i-1],ele.elements[i]);
								if(cmf == false){ flag++; }
						break;
						case "rbt":
								
						break;
				}
		}
		if(numstr == true && alphanum == true && alpnums == true &&cmb == true && rbt == true && email == true && file == true && blank == true && sheetFile == true && pwd == true && aph == true && cmf == true && flag==0)
		{
				returnValue = true;
				//$('.ab-phoenix-loader').show();
		}
		else
		{
				returnValue = false;
		}
		return returnValue;
}
function checkPassword(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/;
	//var strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    //var mediumRegex = /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/;
	
	var returnValue = true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	thisElementValue = trimValue(thisElementId, thisElementValue);
	
	if(thisElementValue != "")
	{	
			if(!strongRegex.test(thisElementValue))
			{
					returnValue=false;
					message = "Password Must contain at least 1 of each (e.g. [0-9] , [A-Z] , [a-z] And [!@#$%^&*] )";
					getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
			else if(thisElementValue.length < 8)
			{
				returnValue=false;
				message = "Password Must Be Greater Than 8 Character ";
				getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
			else if(thisElementValue.length > 32)
			{
				returnValue=false;
				message = "Password Must Be Less Than 32 Character";
				getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
	}
	if(thisElementValue == '')
	{
		returnValue=false;
		message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
		getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}	
	return returnValue;
}
function checkphonenumber(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var strongRegex = /^([0-9])/;
	//var strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    //var mediumRegex = /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/;
	
	var returnValue = true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	thisElementValue = trimValue(thisElementId, thisElementValue);
	if(thisElementValue != "")
	{	
			if(!strongRegex.test(thisElementValue))
			{
					returnValue=false;
					message = "Phone Number Only ON Numeric Value";
					getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
			else if(thisElementValue.length < 10)
			{
				returnValue=false;
				message = "phone Number Must Be Contain 10 digit";
				getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
			else if(thisElementValue.length > 10)
			{
				returnValue=false;
				message = "phone Number Must Be Contain 10 digit";
				getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
	}
	if(thisElementValue == '')
	{
		returnValue=false;
		message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
		getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}	
	return returnValue;
}

function checkConfirmPassword(ele1,ele)
{
	var returnValue=true;
	p1=document.getElementById(ele.name).value;
	p2=document.getElementById(ele1.name).value;
	document.getElementById(ele.name+1).innerHTML="";
	document.getElementById(ele.name).style.border='';
	if(p1 == '')
	{
		var msg=ele.name.substring(3).replace(/_/g," ");
		document.getElementById(ele.name+1).innerHTML="Enter the Confirm "+msg;
		document.getElementById(ele.name+1).style.color='red';
		document.getElementById(ele.name+1).style.textTransform='uppercase';
		document.getElementById(ele.name+1).style.fontWeight='bold';
		document.getElementById(ele.name).style.border='2px solid red';
		document.getElementById(ele.name).style.borderRadius = "25px"; 
		returnValue=false;
	}
	if(p1 != '')
	{
		if(p1 != p2)
		{
				document.getElementById(ele.name+1).innerHTML="New Password And Confirm Password Doesn't Match";
				document.getElementById(ele.name+1).style.color='red';
				document.getElementById(ele.name+1).style.textTransform='uppercase';
				document.getElementById(ele.name+1).style.fontWeight='bold';
				document.getElementById(ele.name).style.border='2px solid red';
				document.getElementById(ele.name).style.borderRadius = "25px"; 
				returnValue=false;
		}
	}
	return returnValue;
}
function checkBlank(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	thisElementValue = trimValue(thisElementId, thisElementValue);
	if(thisElementValue=="")
	{
		returnValue=false;
		message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
		getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}
	return returnValue;
}
function checkAlpha(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var regExp=/^[a-zA-Z ]+$/;	
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);	
	if(thisElementValue != "")
	{				
			thisElementValue = trimValue(thisElementId, thisElementValue);
			if(regExp.test(thisElementValue)==false)
			{
					returnValue=false;
					message = "Please Enter Only Alphabet's. ";
					getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
	}
	else if(thisElementValue == "")
	{
		returnValue=false;
		message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
		getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}
	return returnValue;
}
function checkNumeric(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var regExp=/^[0-9 ]+$/;
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	
	if(thisElementValue != "")
	{
		thisElementValue = trimValue(thisElementId,thisElementValue);
		if(regExp.test(thisElementValue)==false)
		{
			returnValue=false;
			message = "Please Enter Only Numeric Value. ";
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
		}
	}
	else if(thisElementValue == "")
	{
			returnValue=false;
			message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}
	return returnValue;
}

function checkAlphaNumeric(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var regExp = /^[a-zA-Z0-9 ]+$/;
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	
	if(thisElementValue != "")
	{	
			thisElementValue = trimValue(thisElementId,thisElementValue);
			if(!regExp.test(thisElementValue))
			{
					returnValue = false;
					message = "Please Enter Only Alpha Numeric";
					getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
	}
	else if(thisElementValue == "")
	{
			returnValue=false;
			message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}
	return returnValue;
}
function checkAlphaNumericWithSymbolic(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var regExp = /^[a-zA-Z0-9\.\-\\/&_!@#\$%&\*+ ]+$/;
	
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	
	if(thisElementValue != "")
	{	
			thisElementValue = trimValue(thisElementId,thisElementValue);
			if(!regExp.test(thisElementValue))
			{
					returnValue = false;
					message = "Please Enter Only Alpha Numeric And Symbol's Like [-\/&_!@#$%&*.+] ";
					getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			}
	}
	else if(thisElementValue == "")
	{
			returnValue=false;
			message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}
	return returnValue;
}
function checkCombobox(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var regExp=/[Ss][Ee][Ll][Ee][Cc][Tt]$/;
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	
	if(regExp.test(thisElementValue)==true)
	{
			returnValue=false;
			//message = thisElementWithoutPrefix.replace(/_/g," ");
			message = "Please Select Any Value";
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	}
	if($(thisElement).next().hasClass( "select2" ))
	{
		if(regExp.test(thisElementValue)==true){
			$(thisElement).next('span').css({"border":"2px solid red","border-radius":"5px"});
		}
		else{
			$(thisElement).next('span').css({"border":"","border-radius":"0px"});
		}
	}
	return returnValue;
}
function checkEmail(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var regExp= /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	if(thisElementValue != "")
	{
		if(regExp.test(thisElementValue)==false)
		{
			returnValue=false;
			message = "Please Enter The Valid Email";
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
		}
	}
	else if(thisElementValue == "")
	{
			returnValue=false;
			message = "Please Enter The "+thisElementWithoutPrefix.replace(/_/g," ");
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);		
	}
	return returnValue;
}
function checkImageFile(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue) 
{
	var regExp = /(\.bmp|\.png|\.gif|\.jpg|\.jpeg)$/i ;
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	$("#upload").css({"border":"","border-radius":"0px"});
	
	if(thisElementValue.length>0)
	{
		if(!regExp.test(thisElementValue)) 
		{
			returnValue = false;
			message = "Select Valid Image File (e.g .jpg .jpeg .png .gif .bmp)";
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			$("#upload").css({"border":"2px solid red","border-top-left-radius": "20px","border-bottom-left-radius":"20px"});
		} 
	}
	return returnValue;
}
function checkSheetFile(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue) 
{
	var regExp = /(\.csv|\.xls|\.xlsx)$/i ;
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	$("#upload").css({"border":"","border-radius":"0px"});
	
	if(thisElementValue.length>0)
	{
		if(!regExp.test(thisElementValue)) 
		{
			returnValue = false;
			message = "Select Valid Spread Sheet File (e.g .xls .xlsx .csv)";
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			$("#upload").css({"border":"2px solid red","border-top-left-radius": "20px","border-bottom-left-radius":"20px"});
		} 
	}	
	return returnValue;
}
function checkPdfFile(thisElement,thisElementId,thisElementWithoutPrefix,thisElementErrorDivId,thisElementValue)
{
	var regExp = /(\.pdf)$/i ;
	var returnValue=true;
	var message="";
	getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
	$("#upload").css({"border":"","border-radius":"0px"});
	
	if(thisElementValue.length>0)
	{
		if(!regExp.test(thisElementValue)) 
		{
			returnValue = false;
			message = "Select Valid pdf File ";
			getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message);
			$("#upload").css({"border":"2px solid red","border-top-left-radius": "20px","border-bottom-left-radius":"20px"});
		} 
	}
	return returnValue;
}
function getErrorCss(returnValue,thisElementId,thisElementErrorDivId,message)
{
		if(returnValue == true)
		{
				$(thisElementErrorDivId).html(message);
				$(thisElementId).css({"border":"","border-radius":"0px"});
		}
		else if(returnValue == false)
		{
			$(thisElementErrorDivId).html(message);
			$(thisElementErrorDivId).css({"color":"red","text-transform":"uppercase","font-weight":"bold","font-size":"15px"});
			$(thisElementId).css({"border":"2px solid red","border-radius":"20px"});	
		}
}
function trimValue(thisElementId,thisElementValue)
{
		var regExp=/^\s+|\s+$/gm;
		if(regExp.test(thisElementValue))
		{
			thisElementValue = thisElementValue.replace(regExp,"");
			$(thisElementId).val(thisElementValue);
		}
		return thisElementValue;
}