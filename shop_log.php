    
    <link rel="icon" href="farming.png" type="image/png" sizes="16x16">
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <style>







body {
    background: url(euip.jpg) no-repeat center;
    background-size: cover;

    background-attachment: fixed;
    font-family: 'Dosis', sans-serif;
}



*,
:after,
:before {
    box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
    content: '';
    display: table
}

.clearfix:after {
    clear: both;
    display: block
}

a {
    color: inherit;
    text-decoration: none
}

.login-wrap {
    margin: auto;
    max-width: 525px;
    min-height: 800px;
    position: relative;

    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
}

.main_w3agile {
    width: 100%;
    height: 100%;
    position: absolute;
    padding: 5em;
    background: rgba(255, 255, 255, 0.6);



}

.main_w3agile .signin_wthree,
.main_w3agile .signup_wthree {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: all .4s linear;
}

.main_w3agile .sign-in,
.main_w3agile .sign-up,
.login-form .group .check {
    display: none;
}

.main_w3agile .tab {
    font-size: 22px;
    font-weight: 600;
    padding-bottom: 5px;
    margin: 0 15px 10px 0;
    display: inline-block;
    border-bottom: 2px solid transparent;
    color: #777;
    cursor: pointer;
}

.main_w3agile .sign-in:checked+.tab,
.main_w3agile .sign-up:checked+.tab {
    color: #000;
    border-color: #1fcdb4;
}

.login-form {
    min-height: 345px;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d;
    margin-top: 2em;
}

.login-form .group {
    margin-bottom: 15px;
}

.login-form .group .label,
.login-form .group .input,
.login-form .group .button {
    width: 100%;
    color: #fff;
    display: block;
}

.login-form .group .input,
.login-form .group .button {
    border: none;
    border-bottom: 1px solid #1fcdb4;
    padding: 10px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, 0.54);
    letter-spacing: 1px;
    font-size: 1em;
    color: #000;
    outline: none;
}

.login-form .group .button {
    cursor: pointer;
}

.login-form .group .label {
    color: #333;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.login-form .group .button {
    background: #1fcdb4;
}

.login-form .group label .icon {
    width: 15px;
    height: 15px;
    border-radius: 2px;
    position: relative;
    display: inline-block;
    background: #1fcdb4;
    margin-right: 5px;
}

.login-form .group label .icon:before,
.login-form .group label .icon:after {
    content: '';
    width: 10px;
    height: 2px;
    background: #fff;
    position: absolute;
    transition: all .2s ease-in-out 0s;
}

.login-form .group label .icon:before {
    left: 3px;
    width: 5px;
    bottom: 6px;
    transform: scale(0) rotate(0);

}

.login-form .group label .icon:after {
    top: 6px;
    right: 0;
    transform: scale(0) rotate(0);

}

.login-form .group .check:checked+label .icon {
    background: #1fcdb4;
}

.login-form .group .check:checked+label .icon:before {
    transform: scale(1) rotate(45deg);

}

.login-form .group .check:checked+label .icon:after {
    transform: scale(1) rotate(-45deg);

}

.main_w3agile .sign-in:checked+.tab+.sign-up+.tab+.login-form .signin_wthree {
    transform: rotate(0);

}

.main_w3agile .sign-up:checked+.tab+.login-form .signup_wthree {
    transform: rotate(0);
}

#mySidenav a {
  position: absolute;
  left: -10px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#home {
  top: 20px;
  background-color: #555;
}

#customer {
  top: 80px;
  background-color: #555;
}

#farmer {
  top: 140px;
  background-color: #555;
}

</style>



</head>

<body>
 <div id="mySidenav" class="sidenav">
  <a href="index.php" id="home">Home</a>
  <a href="customer_log.php" id="customer">Customer</a>
  <a href="farmer_log.php" id="farmer">Farmer</a>
</div> 

    <section class="login-wrap">
        <div class="main_w3agile">
        
        
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <!-- signin form -->
                <div class="signin_wthree">
                    <form action="rets.php">
                        <div class="group">
                           CONTACT
                            <input  type="number" class="input" name="contact"  value="<?php if(isset($_COOKIE["login"])) { echo $_COOKIE["login"]; } ?>" required>
                        </div>
                        <div class="group">
                            AADHAR NO.
                            <input  type="number" class="input"  name="aadhar"  required>
                        </div>
                                     <div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["login"])) { ?> checked <?php } ?> />
                                                    <label for="remember-me">Remember me</label>
    </div>

                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>


                    </form>
                </div>
                <!-- //signin form -->
                <!-- signup form -->
                <div class="signup_wthree">
                    <form action="shop_log1.php">
                        <div class="group">
                            Name
                            <input  type="text" class="input" name="sname" required>
                        </div>
                        <div class="group">
                            Contact
                            <input  type="number" class="input" name="scontact"  required>
                        </div>
                     <div class="group">
                          Shop Address
                            <input  type="text" class="input" name="saddress" required>
                        </div>

                     <div class="group">
                          District
                            <input  type="text" class="input" name="sdis" required>
                        </div>

                     <div class="group">
                          State
                            <input  type="text" class="input" name="sst" required>
                        </div>

                     <div class="group">
                          Pin
                            <input  type="number" class="input" name="spin"  required>
                        </div>
                            <div class="group">
                Aadhar No.
                   <input  type="number" class="input" name="saadhar"  required>
              </div>
             <div class="group">
                            Shop Name
                            <input  type="text" class="input" name="shname" required>
                        </div>

                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>


                    </form>
                </div>
                <!-- //signup form -->
            </div>
        </div>
    </section>
    <!-- //section -->


</body>
<!-- //Body -->

</html>
