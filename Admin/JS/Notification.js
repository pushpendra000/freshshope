function validInsert()
{
	var Category=document.getElementById("ddl_Category").value;

	if(Category == "" || Category == 0)
	{
		alert("Select Category and Enter Details");
		document.getElementById("ddl_Category").focus();
		return false;
	}

	var Title=document.getElementById("txt_title").value;
    
	if(Title == "")
	{
		alert("Enter Title");
		return false;
	}

    var Title=document.getElementById("txt_date").value;
    
	if(Title == "")
	{
		alert("Enter Date");
		return false;
	}

    var Title=document.getElementById("txt_shortdescription").value;
    
	if(Title == "")
	{
		alert("Enter Shortdescription");
		return false;
	}

    var Title=document.getElementById("txt_fulldescription").value;
    
	if(Title == "")
	{
		alert("Enter Fullescription");
		return false;
	}

    var Title=document.getElementById("txt_author").value;
    
	if(Title == "")
	{
		alert("Enter Author");
		return false;
	}


    var Photo=document.getElementById("fu_Photo").value;
	if(Photo == "")
	{
		alert("Please Choose File");
		return false;
	}

    var Photo=document.getElementById("fu_Photo2").value;
	if(Photo == "")
	{
		alert("Please Choose File");
		return false;
	}
	return true;
}