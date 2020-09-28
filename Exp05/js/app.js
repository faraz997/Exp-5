function validateForm() {
    var x= document.forms["myForm"]["phone"].value;
    var fname = document.forms["myForm"]["fname"].value;
    var lname = document.forms["myForm"]["lname"].value;
    var dob = document.forms["myForm"]["dob"].value;
    var gender = document.forms["myForm"]["gender"].value;
    var address = document.forms["myForm"]["address"].value;
    var email= document.forms["myForm"]["email"].value;
    var username= document.forms["myForm"]["username"].value;
    var pwd = document.forms['myForm']['pwd'].value;
    var cpwd = document.forms['myForm']['cpwd'].value;
    var phoneno = /^\d{10}$/;
    if(fname=="" && lname=="" ){
      alert("Please provide vaild Name.. ");
      return false; 
    }
    if(lname=="" ){
      alert("Please provide vaild LastName.. ");
      return false; 
    }
    if(dob=="" ){
      alert("fill date of birth.. ");
      return false; 
    }
    if(gender=="" ){
      alert("please choose the gender");
      return false; 
    }
    if(address=="" ){
      alert("Please provide vaild Address.. ");
      return false; 
    }
    if(email=="" ){
      alert("Please Correct your email id.. ");
      return false; 
    }
    if(x=="" ){
      alert("Please fill the number ");
      return false; 
    }
    if(username=="" ){
      alert("Please fill user name. ");
      return false; 
    }
    if(pwd=="" ){
      alert("Please fill the password ");
      return false; 
    }
    if(cpwd=="" ){
      alert("Please fill the confirm password ");
      return false; 
    }
     
    else if(pwd != cpwd){
      alert('Your password is not matching...');
       return false;
      }
  else if((x.match(phoneno)))
        {
      return true;
        }
      else
        {
        // alert("please to form completely...");
        alert("Please provide vaild Number. ");
        // alert("Please enter 10 digit mobile number. ");
        return false;
        }
  } 
 