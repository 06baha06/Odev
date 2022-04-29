function validateForm(){
    var x=document.forms["form"]["ad"].value;
    var y=document.forms["form"]["soyad"].value;
    var z=document.forms["form"]["mail"].value;
    var v=document.forms["form"]["mesaj"].value;
    var Kontrol=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
    if(x=="")
    {
        alert("Ad boş bırakılamaz");
        return false;
    }
    if(y=="")
    {
        alert("Soyad boş bırakılamaz");
        return false;
    }
    if(z=="")
    {
        alert("Mail boş bırakılamaz");
        return false;
    }
    if(z.match(Kontrol))
    {}
    else{
        alert("Geçerli türde mail girin");
        return false;
    }
    if(v=="")
    {
        alert("Mesaj boş bırakılamaz");
        return false;
    }
}