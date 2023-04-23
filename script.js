function showList() 
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if(this.readyState == 4 && this.status == 200)  
        {
            document.getElementById("itens").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "showList.php", true);
    xhttp.send();
}