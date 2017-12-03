<div class="container" >
<div class="signupcontainer">
    <h2>Signup Form</h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('users/register'); ?>
        <div class="signupform">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">

            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password2">
            <div class="clearfix">
                <button type="button" class="cancelbtn2">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    <?php echo form_close(); ?>
</div>
