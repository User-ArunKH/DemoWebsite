function validation(){
    const fusername = document.getElementById('fname').value;
    const lusername = document.getElementById('lname').value;
   const password = document.getElementById('pass').value;
   const passwordConfirm = document.getElementById('cpass').value;
   
   
     ///^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
   const phone=document.getElementById('phone').value;
   const email=document.getElementById('email').value;
    
    if (fusername==''|| lusername==''){
        alert('Username is required');
        //this will prevent you from submitting the form unless the validation is completed. 
        return false;
      }
    
    else if (email=="") {
      alert('Email is required and must be in a valid format');
    
      return false;
    }
   else if (phone=="" ||phone.length!=10) {
      alert('Phone number is required and must be 10 digits');
     return false;
  }
    else if (password === '' || password.length<8) {
      alert('Password is required and make sure it contains minimum 8 characters');  
      return false;
    }
  
    // check that the password and password confirm fields match
    else if (password !== passwordConfirm) {
      alert('Password and confirm password must match');
      return false;
    }
    else{
    // if the email is valid, submit the form 
    alert("Signup success");
    window.location.replace("./loginform.php")//you can redirect to login page here instead of alert 
    //document.getElementById('signup-form').submit();
    }
}