function validate() {
    if(document.stuForm.txt_category.value=="") {
        alert("Please provide your Category! ");
        document.stuForm.txt_category.focus();
        return false; }
    if(document.stuForm.txt_name.value=="") {
        alert("Please provide your Name! ");
        document.stuForm.txt_name.focus();
        return false; }
    if(document.stuForm.txt_dob.value=="") {
        alert("Please provide your Date of Birth! ");
        document.stuForm.txt_dob.focus();
        return false; }
    if(document.stuForm.txt_city.value=="") {
        alert("Please provide your City! ");
        document.stuForm.txt_city.focus();
        return false; }
    if(document.stuForm.txt_state.value=="") {
        alert("Please provide your State! ");
        document.stuForm.txt_state.focus();
        return false; }
    if(document.compForm.t_contact.value=="" || isNaN(document.compForm.t_contact.value) || document.compForm.t_contact.value!=10) {
        alert("Please provide your Contact Number in the format 123! ");
        document.compForm.t_contact.focus();
        return false; }
    var email=document.stuForm.txt_email.value;
    atpos=txt_email.indexOf("@");
    dotpos=txt_email.lastIndexOf(".");
    if(txt_email=="" || atpos<1 || (dotpos-atpos<2)) {
        alert("Please Enter Correct Email Id! ");
        document.stuForm.txt_email.focus();
        return false; }
    if(document.stuForm.txt_add.value=="") {
        alert("Please provide your Address! ");
        document.stuForm.txt_add.focus();
        return false; }
    if((stuForm.txt_gender[0].checked==false) && (stuForm.txt_gender[1].checked==false)) {
        alert("Please choose your Gender:Male or Female! ");
        document.stuForm.txt_category.focus();
        return false; }
    if(document.stuForm.txt_matric.value=="") {
        alert("Please provide your 10th Percentage! ");
        document.stuForm.txt_matric.focus();
        return false; }
    if(document.stuForm.txt_inter.value=="") {
        alert("Please provide your 12th Percentage! ");
        document.stuForm.txt_inter.focus();
        return false; }
    
    return true;
    }