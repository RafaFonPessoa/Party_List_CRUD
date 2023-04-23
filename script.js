function showList() 
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if(this.readyState == 4 && this.status == 200)  
        {
            document.getElementById("list_body").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "show_list.php", true);
    xhttp.send();
}

function clearList()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            showList();
        }
    };
    xhttp.open("POST", "clear_list.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}
