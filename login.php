<!DOCTYPE html>
<html>
<head>
    <title> Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css"> 
</head>
<script>
    function validateForm() {
         var email = document.getElementById('email').value;
         var patt = new RegExp("^[\\w\\.]+@{1}[a-zA-Z]+\\.[a-z]+$");

            if(email=="" || email==null || !patt.test(email.toString())){
                alert("Enter a valid email.");
                return false;
            }
            return true;
    }
</script>
<body>
    <table>
        <tr><img src="sym.png " width="320" height="170"></tr>
    </table>
     <div class="box">
            <h1>Login</h1>
        <form onsubmit="return validateForm()" action ="loginuser.php" method ="POST">
            <div class="inputbox">
                 <input type="text" name="email" id="email" required="" >
                 <label>Email</label>
            </div>
            <div class="inputbox">
                 <input type="password" name="password" id="password" required="">
                 <label>Password</label>
            </div>
           <center><input type="submit" name="" value="submit"></center>
        </form>
    </div>
</body>
</html>