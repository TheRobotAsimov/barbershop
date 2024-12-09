
function validacion(){
    if(document.frm1.email.value.length==0){
        document.getElementById("email").focus();
        return false;
    }
    frm1.submit();

}
