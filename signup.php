<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="signup.css">>
</head>
<script>
        function validateForm(){
            var pass = document.getElementById('password').value;
            var email = document.getElementById('email').value;
            var fn = document.getElementById('fname').value;
            var ln = document.getElementById('lname').value;
            var tel = document.getElementById('mobile').value;
            var patt = new RegExp("^[\\w\\.]+@{1}[a-zA-Z]+\\.[a-z]+$");
            var pat = new RegExp("^[\\d]{10}$")            
            var re = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
            var name = /[^a-zA-Z]/
            if(fn=="" || fn==null || name.test(fn.toString())){
                alert("Enter a valid first name.");
                return false;
            }
            if(ln=="" || ln==null ||name.test(ln.toString())){
                alert("Enter a valid last name.");
                return false;
            }
           
            if(tel=="" || tel==null || tel.toString().length!=10 || !pat.test(tel.toString())){
                alert("Enter Valid mobile number");
                return false;
            }
            if(email=="" || email==null || !patt.test(email.toString())){
		        alert("Enter a valid email.");
		        return false;
	        }
            
            if(pass=="" || pass==null){
                alert("password must not be empty.");
                return false;
            }
            if(!re.test(pass.toString())){
                alert("Password must contain minimum eight characters, at least one letter, one number and one special character");
                return false;
            }
            
            return true;
        }
</script>
<body>
		<div class="box">
            <h1>Signup</h1>
        <form onsubmit="return validateForm()" action= "createuser.php" method="post">
        	<div class="inputbox">
                 <input type="text" name="fname" id="fname" required=""  >
                 <label>FirstName</label>
            </div>
            <div class="inputbox">
                 <input type="text" name="lname" id="lname" required="">
                 <label>LastName</label>
            </div>
           <div class="inputbox">
                 <input type="text" name="email" id="email" required="" >
                 <label>Email</label>
            </div>
            <div class="inputbox">
                 <input type="number" name="mobNo" id="mobile" required="">
                 <label>MobileNo.</label>
            </div>
            <div class="inputbox">
                 <input type="date" name="date" id="dob">
                 <label>D.O.B</label>
            </div>
            <div class="inputbox">
                 <input type="password" name="password" id="password" required="">
                 <label>Password</label>
            </div>
           
            <div class="inputbox">
                 <input type="text" name="Address" id="Address" required="">
                 <label>Address</label>
            </div>
             <div>
            	<label>Gender  </label>
                 <input type="radio" name="gender" value="male" checked> <label>Male</label>
                 <input type="radio" name="gender" value="female"> <label>Female</label>
                 
            </div><br>
            <div >
            	<label>Types:   </label>
                <label> Meals</label><input type="checkbox" name="types" id="student" value="v" checked><label>Laundry</label><input type="checkbox" id="bachelor" name="types" value="b"><label>Balcony</label><input type="checkbox" name="types" id="other" value="c" checked>
                 
            </div><br>
            <?php
            if(isset($_GET["msg"])){
                echo $_GET["msg"];
            }?>
            <div >
            	<label>State:</label>
                 <select name="state">
  					<option value="select">select</option>
  					<option value="delhi">delhi</option>
 					<option value="mumbai">mumbai</option>
  					<option value="kolkata">kolkata</option>
 					<option value="chennai">chennai</option>
  					<option value="bangalore">bangalore</option>
  					<option value="goa">goa</option>
  					</select>
            </div><br>

           <center><input type="submit" name="" value="Signup"></center>
        </form>
    </div>

</body>
</html>>