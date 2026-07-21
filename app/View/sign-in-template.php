
        <form action="user?action=login" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="field">
                <label for="">email</label>
                <input name='email' required type="email">
            </div>
            <div class="field">
                <label for="">password</label>
                <input name="password" required type="password">
            </div>
            <?php if($data != null) {?>
                <div style="color: red;"><?=$data?></div>
            <?php }?>
            <input type="submit" value="Sign In">
        </form>
        <div class="altern">
            <span>Dont have an account?</span>
            <a href="user?action=signUpForm">Create new</a>
        </div>
