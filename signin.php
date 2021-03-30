<?php include("header.html"); ?>


<div class="landing">
    <center><img src="logo.png" alt="logo" height="75" width="75"></center>
    <h2>Log In</h2>
    
    <form action="signin-submit.php" method="post">    
        <label><b>User Name:</b></label>
        <br>
        <br> 
        <input required type="text" id="uname" name="user" size="32" maxlength="32" pattern="([a-zA-Z\s]){2,}">   
        <br>
        <br>
        <a href="signup.php" id="signup">Not on Mensa Club yet? Sign up</a>
        <br>
        <br>
        <br>
        <input class="button" type="submit" value="Sign In">
    </form>     
</div>

<?php include("footer.html"); ?>