<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yuyu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>TUTORIAL</title>
</head>
<body>
    <header>
        <div id="sign-in">
            <img src="images/user.png" alt="icon">
            <?php if(!str_contains(explode('/', $_SERVER['REQUEST_URI'])[2], 'user')):?>
                <a href='user?action=signIn'>Sign in</a>
            <?php else:?>
                <a href='animals'>Home</a>
            <?php endif?>
        </div>
    </header>
    <main>
            <?php include 'app/View/' . $content ?>
    </main>
    <footer>
        <div id="contacts">
            <span>CONTACTS</span>
            <span>test@mail.ru</span>
            <span>888888888</span>
            <span>Sandow, Saddd</span>
        </div>
    </footer>
</body>
</html>