<?php 
    include ("Controller/Chemistry-Student-Evaluation-Login-Controllers/Chemistry-Student-Evaluation-Username-and-Password-Handler.php");
    include ("Chemistry-Student-Evaluation-Login-Header.php"); 
?>
<div class="container" id="homePageContainer">
          <title>Chemistry Learning System</title>
          
          <p><strong>Chemistry Department Student Learning System</strong></p>
          <p><strong>Welcome back</strong></p>
          
          <div id="error"><?php if ($error!="") {
    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
    
} ?></div>

    <form method="post" id = "signUpForm">
        <p>Chemistry department</p>
        <fieldset class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Your Email">
        </fieldset>
        <fieldset class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </fieldset>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="stayLoggedIn" value=1> Stay logged in
            </label>
        </div>
        <fieldset class="form-group">
            <input type="hidden" name="signUp" value="1">
            <input class="btn btn-success" type="submit" name="submit" value="Sign Up!">
        </fieldset>
        <p><a class="toggleForms">Log in</a></p>
    </form>

    <form method="post" id = "logInForm">
        <p>Log in using your username and password.</p>
        <fieldset class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Your Email">
        </fieldset>
        <fieldset class="form-group">
            <input class="form-control"type="password" name="password" placeholder="Password">
        </fieldset>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="stayLoggedIn" value=1> Stay logged in
            </label>
        </div>
            <input type="hidden" name="signUp" value="0">
        <fieldset class="form-group">
            <input class="btn btn-success" type="submit" name="submit" value="Log In!">
        </fieldset>
        <p><a class="toggleForms">Sign up</a></p>
    </form>
</div>

<?php include("Chemistry-Student-Evaluation-Login-Footer.php"); ?>