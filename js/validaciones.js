function validar_code()
{
    var nombre, url, expresion1,expresion2;
    nombre=document.getElementById("name_code").value;
    url=document.getElementById("url_code").value;
    
    expresion1=new RegExp(/^https+\w/);
    if(nombre === "" || url==="")
    {
        alert("Please fill all inputs");
        return false;
    }else{
        if(nombre.length>100)
        {
            alert("Name length is too long");
            return false;
        }else{
            if(url.length>100)
            {
                alert("URL length is too long");
                return false;
            }
        }
    }

    if(!expresion1.test(url))
    {
        alert("URL need to be a link, it must begin whit 'https'");
        return false;
    }
    
    // formato https://github.com/UIS-MACV/basictools
    
}