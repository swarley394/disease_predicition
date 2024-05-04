<html>  
<head>  
    <title>PHP login system</title>   
    <link rel = "stylesheet" type = "text/css" href = "loginstyle.css">   
</head>  
<body> 
<body style="background-image: url('image/bg.png');">
        <section class="header">
            <nav>
                 <div class="name" >Disease Prediction </div>  

                <div class="nav-links">
                    <ul>
                        <li>
                            <a href="index.php"> Home </a>
                        </li>
                        <li>
                            <a href="login.php"> Login </a>
                        </li>
                        <li>
                            <a href="blog.html"> Blogs </a>
                        </li>
                        <li>
                            <a href="contact.html"> Contact Us </a>
                        </li>
                    </ul>
                </div>         
            </nav>
        </section>

<div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                    <p>Create your account.<br>It's totally free.</p>
                    <a href="" class="btn">Sign Up</a>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>           
                        <div id = "frm">  
                            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                                <p>  
                                    <label> Username <span>*</span> </label>  
                                    <input type = "text" id ="user" name  = "user" placeholder="Username"/>  
                                </p>  
                                <p>  
                                    <label> Password<span>*</span> </label>  
                                    <input type = "password" id ="pass" name  = "pass" placeholder="Password"/>  
                                </p>  
                                <p>     
                                    <input type =  "submit" id = "btn" value = "Sign In" />  
                                </p>  
                                <p>
                                    <a href="">Forget password?</a>
                                </p>
                            </form>  
                        </div>  
                        </div>
            </div>
        </div>
</div>

    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
    </body>
</html>