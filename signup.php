<?php include("header.html"); ?>


<div class="landing">
    <img class="img" src="logo.png" alt="logo" height="75" width="75">
    <h2> Sign Up </h2>
    
    <form action="signup-submit.php" method="post">    
        <label><b>User Name:</b></label>
        <br>
        <br> 
        <input required type="text" id="uname" name="user" size="32" maxlength="32" pattern="([a-zA-Z\s]){2,}">   
        <br>
        <br>
        <br>
        <br>
        <br>
        <input class="button" type="submit" value="Sign Up">
    </form>     
 </div>

<?php include("footer.html"); ?>