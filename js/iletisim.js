function emailkontrol(frm){
var email=frm.email.value;
    var atpos=email.indexof("@");
    var dotpos=email.lastIndexof(".");
    if(atpos<1 || dotpos<atpos+2 || dotpos+2==email.lenght){
        alert("Geçerli Bir Email Adresi Giriniz");
        return false;

    }
    else{
        alert("Email Geçerli")
        return true;
    }
}
function validateForm(){
    var x =document.forms("form")("name").value;
    if(x==null||x==""){
        alert("Lütfen İsim Alanını Doldurunuz");
        return false;
    }
    var y =document.forms("form")("soyad").value;
    if(y==null||y==""){
        alert("Lütfen Soyad Alanını Doldurunuz");
        return false;
    }
    var z =document.forms("form")("email").value;
    if(z==null||z==""){
        alert("Lütfen Email Alanını Doldurunuz");
        return false;
    }
    var a =document.forms("form")("mesaj").value;
    if(a==null||a==""){
        alert("Lütfen Mesaj Alanını Doldurunuz");
        return false;
    }


}
