
        <form onsubmit="validateForm()" action="user" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="field">
                <label for="">name</label>
                <span class="errorMsg" name="nameError">Field is required!</span>
                <input required type="name" name="name">
            </div>
            <div class="field">
                <label for="">email</label>
                <span class="errorMsg" name="emailError">Field is required!</span>
                <input required type="email" name="email">
            </div>
            <div class="field">
                <label for="">password</label>
                <span class="errorMsg" name="passwordError">Field is required!</span>
                <input required type="password" name="password">
            </div>
            <div class="field">
                <label for="">repeat password</label>
                <span class="errorMsg" name="repeatPasswordError">Field is required!</span>
                <input required type="password" name="repeatePassword">
            </div>
            <input type="submit" value="Sign Up">
        </form>
        <div class="altern">
            <span>Already have an account?</span>
            <a href="user?action=signIn">Sign in</a>
        </div>
