function validInsert()
{
	var Category=document.getElementById("ddl_Category").value;

	if(Category == "" || Category == 0)
	{
		alert("Select Category");
		document.getElementById("ddl_Category").focus();
		return false;
	}

	var Title=document.getElementById("txt_name").value;
    
	if(Title == "")
	{
		alert("Enter Name");
		return false;
	}

    var Title=document.getElementById("txt_price").value;
    
	if(Title == "")
	{
		alert("Enter Price");
		return false;
	}

    var Title=document.getElementById("txt_Qty").value;
    
	if(Title == "")
	{
		alert("Enter Quantity");
		return false;
	}

    var Title=document.getElementById("txt_description").value;
    
	if(Title == "")
	{
		alert("Enter Description");
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