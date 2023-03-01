<body>
    <div class="offcanvas offcanvas-end sign-up-canvas" tabindex="-1" id="sign-in-offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <nav class="top-nav">
            <!-- <img class="logo" src="./assets/sanakin-logo.png" alt=""> -->
        </nav>
        <div class="offcanvas-body">

            <div class="container">
                <div class="sign-up-body">
                    <form class="step s1" id="signup-s1" method="POST" required>
                        <h2>Create Account</h2>
                        <div class="account-type-selector">
                            <label class="switch btn-color-mode-switch">
                                <input type="checkbox" name="color_mode" id="color_mode" class="form_data" value="1">
                                <label for="color_mode" data-on="Shopper Account" data-off="Customer Account" class="btn-color-mode-switch-inner"></label>
                            </label>
                        </div>
                        <div class="feilds">
                            <input type="email" class="t-feild form_data" name="newEmail" id="newEmail" placeholder="Email Address">
                            <input type="password" class="t-feild form_data" name="newPassword" id="newPassword" placeholder="Create Password" onkeyup="checkPasswordMatch();">
                            <input type="password" class="t-feild form_data" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" onkeyup="checkPasswordMatch();">
                        </div>
                        <div class="form-group" id="divCheckPasswordMatch"></div>
                        <input type="button" class="con-btn" name="continue" id="submit" onclick="hide1()" value="Continue" disabled>
                    </form>
                    <form class="step s2" id="signup-s2" style="display: none;" action="" method="POST" required>

                        <h2>Email Verification</h2>
                        <img src="./assets/icons/email.svg" alt="">
                        <div class="feilds">
                            <p>Enter the 6 Digits code you received to<br>
                                <span class="orange-text" id="submitedEmail"></span>
                            </p>
                            <input type="numbers" class="t-feild" name="newVCode" id="newVCode" placeholder="6 Digits Code">
                        </div>
                        <input type="button" class="con-btn" name="codeVerifing" id="codeVerifing" onclick="hide2()" value="Submit">
                    </form>

                </div>

            </div>
        </div>
    </div>
</body>
<script src="./js/sign-up.js"></script>

</html>
