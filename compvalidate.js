function validate() {
    if(document.compForm.t_name.value=="") {
        alert("Please provide your Company Name! ");
        document.compForm.t_name.focus();
        return false; }
    if(document.compForm.t_esta.value=="") {
        alert("Please provide your Established Year! ");
        document.compForm.t_esta.focus();
        return false; }
    atpos=t_email.indexOf("@");
    dotpos=t_email.lastIndexOf(".");
    if(txt_email=="" || atpos<1 || (dotpos-atpos<2)) {
        alert("Please Enter Correct Email Id! ");
        document.compForm.t_email.focus();
        return false; }
    if(document.compForm.t_contact.value=="" || isNaN(document.compForm.t_contact.value) || document.compForm.t_contact.value!=10) {
        alert("Please provide your Contact Number in the format 123! ");
        document.compForm.t_contact.focus();
        return false; }
    if(document.compForm.t_hr.value=="") {
        alert("Please provide your HR Name! ");
        document.compForm.t_hr.focus();
        return false; }
    var email=document.compForm.t_id.value;
     atpos=t_email.indexOf("@");
    dotpos=t_email.lastIndexOf(".");
    if(txt_email=="" || atpos<1 || (dotpos-atpos<2)) {
        alert("Please enter correct Id! ");
        document.compForm.t_id.focus();
        return false; }
     if(document.compForm.t_username.value=="") {
        alert("Please provide your Username! ");
        document.compForm.t_username.focus();
        return false; }
    
    if(document.compForm.t_pass.value=="" || isNaN(document.compForm.t_pass.value) || document.compForm.t_pass.value >8) {
        alert("Please provide your Password in more than 8 characters! ");
        document.compForm.t_pass.focus();
        return false; }
    return true;
}