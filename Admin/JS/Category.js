function validInsert()
{
	var Title=document.getElementById("txt_title").value;
    
	if(Title == "")
	{
		alert("Enter Details");
		return false;
	}

    var Photo=document.getElementById("fu_Photo").value;
	if(Photo == "")
	{
		alert("Please Choose File");
		return false;
	}
	return true;
}