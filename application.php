<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
<script>
    
function subm()
{
    //alert("hii");
    var name =document.getElementById("name").value;
    var lname =document.getElementById("lname").value;
    var father =document.getElementById("fname").value;
    var mother =document.getElementById("mname").value;
    
 var email = document.getElementById("email").value;
//  alert(email);
 var num = document.getElementById("number").value;
// alert(num);
var pemail= /^[a-z0-9._%]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
 var pnum=/^[0-9]{10}$/;
var pname=/^[a-zA-Z]{2,20}$/;
// ----------------------------------------------------------------------------



// =====================================================================================
if(!pname.test(name))
{
  document.getElementById("alert1").classList.add("show");
   document.getElementById("text").innerHTML="Please enter your first name ";
//    document.getElementById("name").style.border=("1px solid red");
   document.getElementById("name").focus();
}
else if(!pname.test(lname))
{
    document.getElementById("alert1").classList.add("show");
   document.getElementById("text").innerHTML="Please enter your last name ";
   document.getElementById("lname").style.border=("1px solid red");
   document.getElementById("lname").focus();
}

else if(!pname.test(father))
{
    document.getElementById("alert1").classList.add("show");
   document.getElementById("text").innerHTML="Please enter your father name ";
//    document.getElementById("fname").style.border=("1px solid red");
   document.getElementById("fname").focus();
}

else if(!pname.test(mother))
{
    document.getElementById("alert1").classList.add("show");
   document.getElementById("text").innerHTML="Please enter your mother name ";
   document.getElementById("mname").style.border=("1px solid red");
   document.getElementById("mname").focus();
}

// number
else if(!pnum.test(num))
{
  document.getElementById("alert1").classList.add("show");
   document.getElementById("text").innerHTML="Please enter valid number ";
//    document.getElementById("number").style.border=("1px solid red");
   document.getElementById("number").focus();
}

else if(!pemail.test(email))
{
  document.getElementById("alert1").classList.add("show");
   document.getElementById("text").innerHTML="Please enter valid email ";
//    document.getElementById("email").style.border=("1px solid red");
   document.getElementById("email").focus();
}
// ---------------------------------------------------------------------------------------------





else
 {
 document.getElementById("alert1").classList.remove("show");
   document.getElementById("email").style.border="1px solid green";
   document.getElementById("number").style.border="1px solid green";
   return true;
  }

return false;

}

function hideit()
{
    document.getElementById("alert1").classList.remove("show");
}

</script>


</head>
  <body>

   <div class="row p-5">
<div class="class container-fluid  bg-body-secondary p-3 shadow rounded border border-secondary-subtle w-75">

    <div class="alert alert-warning alert-dismissible fade  " role="alert" id="alert1">
        <span id="text"></span>
        <button type="button" class="btn-close" onclick="hideit()"></button>
      </div>

    <form  onsubmit=" return subm();">
<div class="col text-center  mb-3"><h3>APPLICATION FORM</h3><hr></div>
<!-- name  -->
<div class="row">
    <label for="name" class="form-label">Name</label>
<div class="col-sm-6">
    <div class="mb-3">
        
    <input type="text" class="form-control" id="name" >
    <p style="font-size: small; padding: 5px;">First Name</p>
  </div>
</div>
<div class="col-sm-6">
    <div class="mb-3">
    <!-- <label for="exampleFormControlInput1" class="form-label">  a</label> -->
    <input type="text" class="form-control" id="lname" >
    <p style="font-size: small; padding: 5px;">Last Name</p>
  </div>
</div>
</div>
<!-- father and mother name -->
<div class="row"> 
   
<div class="col-sm-6">
    <div class="mb-3">
        <label for="fname" class="form-label">Father's Name</label>
    <input type="text" class="form-control" id="fname" >
    <!-- <p style="font-size: small; padding: 5px;">First Name</p> -->
  </div>
</div>
<div class="col-sm-6">
    <div class="mb-3">
    <label for="mname" class="form-label">Mother's Name</label>
    <input type="text" class="form-control" id="mname" >
    <!-- <p style="font-size: small; padding: 5px;">Last Name</p> -->
  </div>
</div>
</div>


<!-- gender name or bithdate -->

<div class="row">
   
<div class="col-sm-6">
    <div class="mb-3">
        <label for="ge" class="form-label">Gender</label>
        <select class="form-select" aria-label="Default select example" id="gender" >
            <option selected>Please Select</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">NA</option>
          </select>
  </div>
</div>
<div class="col-sm-6">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> Date of Birth</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" >
  </div>
</div>


</div>



<!-- mobile number and Email address -->

<div class="row"> 
   
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="mob" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="number" placeholder="+91 000-000-0000" >
        <p style="font-size: small; padding: 5px;">Please enter a valid phone number.</p>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" >
        <p style="font-size: small; padding: 5px;">example@example.com</p>
      </div>
    </div>
    </div>
  
<!-- <div class="row">   -->

<div class="col"><h5>Address</h5><hr></div>





<div class="mb-3">
    <!-- <label for="email" class="form-label">Email</label> -->
    <input type="text" class="form-control" id="street" >
    <p style="font-size: small; padding: 5px;">Street Address</p>
  </div>
 


  <div class="mb-3">
    <!-- <label for="email" class="form-label">Email</label> -->
    <input type="text" class="form-control" id="street" >
    <p style="font-size: small; padding: 5px;">Street Address Line 2</p>
  </div>
 
  <div class="row">

<div class="col-sm-6">
    <div class="mb-3">
        <!-- <label for="email" class="form-label">Email</label> -->
        <input type="text" class="form-control" id="street" >
        <p style="font-size: small; padding: 5px;">City</p>
      </div>
</div>
<div class="col-sm-6">
    <div class="mb-3">
        <!-- <label for="email" class="form-label">Email</label> -->
        <input type="text" class="form-control" id="street" >
        <p style="font-size: small; padding: 5px;">State/Province</p>
      </div>

</div>

  </div>

</div>
</div>

<div class="col text-center p-5">
<input type="submit" class="btn btn-success" >
</div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>