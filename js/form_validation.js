function validate()
{
	bSubmit = true;
	arrReqFields = document.getElementsByClassName("required");
	for (var i=0;i<arrReqFields.length;i++)
	{
		var el = arrReqFields[i];
        var requiredField = el.nextElementSibling;
		switch(el.tagName.toLowerCase())
		{
			case "label":
                
                if (requiredField.tagName.toLowerCase() == "input"){
                    var warningBox = requiredField.nextElementSibling;
                    if(warningBox.tagName.toLowerCase()=="div"){
                        checkValue(requiredField.value, requiredField);
                    }                    
                }
                if(requiredField.tagName.toLowerCase()=="div"){
                    var arrFields = requiredField.getElementsByTagName("input");
                    oneChecked = false;
                    for(var a=0; a<arrFields.length; a++)
                    {
                        var checkBox = arrFields[a];
                        if (checkBox.checked)
                        {
                            oneChecked = true;
                        }
                    }
                    checkValue(oneChecked, requiredField);
                }
                break;
			
            default:
				checkValue(requiredField.value, requiredField);
		}
	}
	return false;
}


function checkValue(fieldValue, thisField)
{
	if(!fieldValue) {
        thisField.classList.add("error");
		bSubmit = false;		
	} else {
		thisField.classList.remove("error");
	}
}