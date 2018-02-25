<?php
require_once('lib/htm.php');
if(empty($_SESSION['signed_in'])){
	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		?>
        <script src="/assets/js/jquery-3.2.1.min.js"></script>
        <script async src="/assets/js/yeah.js"></script>
        <script src="/assets/js/pace.min.js"></script>
        <script src="/assets/js/favico.js"></script>
        <script src="https://unpkg.com/tippy.js@2.0.9/dist/tippy.all.min.js"></script>
        <meta name="viewport" content="width=device-width,minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="/assets/css/login.css">

        <title>Create an account</title>
        <div class="hb-contents-wrapper"><div class="hb-container hb-l-inside">
            <h2>Sign Up</h2>
            <p>Create a Grandverse account!</p>
        </div>

        <form method="post" enctype="multipart/form-data">
            <div class="hb-container hb-l-inside-half hb-mg-top-none">              

                <div class="auth-input-double">               
                    <label>
                        <input type="text" name="username" maxlength="16" title="Cedar ID" placeholder="User ID" value="">
                    </label>
                    <label>
                        <input type="password" name="password" maxlength="16" title="Password" placeholder="Password">
                    </label>
                    <label>
                        <input type="password" name="confirm_password" maxlength="16" title="Password" placeholder="Confirm Password">
                    </label>
                    <label>
                        <input type="text" name="name" maxlength="16" title="Name" placeholder="Name" value="">
                    </label>
                    <lable>
                        <div style="text-align: center;">
                            <p style="display: inline;">Custom Image:</p>
                            <input name="face-type" type="radio" value="1" checked="" style="margin-left: 5px;display: inline;margin-right: 50px;margin-top: 10px;margin-bottom: 10px;">
                            <p style="display: inline;">Mii:</p>
                            <input name="face-type" type="radio" value="2" style="margin-left: 5px; display: inline;">
                        </div>
                        <div class="custom-face">
                            <p style="display: inline">Profile picture upload: </p>
                            <input type="file" name="face" style="max-width: 230;" accept="image/*">
                        </div>
                        <div class="nnid-face none">
                            <p style="margin: 0;">Enter the NNID for the Mii you want to use.</p>
                            <input type="text" name="face" maxlength="16" placeholder="NNID">
                        </div>
                    </lable>
                </div>
                <input type="submit" name="submit" class="hb-btn hb-is-decide" style="margin-top: 4px;" id="btn_text" value="Sign Up">
            </form>
        </div>

    <?php
    } else {
    	if (isset($_POST['submit'])) {
    		$errors = array();
