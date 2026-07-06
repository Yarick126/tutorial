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
            <a href="sign-in-template.php">Sign in</a>
        </div>
    </header>
    <?php require_once 'Animals.php'?>
    <main>
        <?php
            $dog = new Animals('dog','Haski', 12, 'male');
            $cat = new Animals('cat','Cary', 1, 'male');
            $zebra = new Animals('zebra','Zoro', 14, 'female');
            $horse = new Animals('horse','Dolo', 22, 'female');
            $donkey = new Animals('donkey','Sari', 10, 'male');
            $cow = new Animals('cow','Sad', 9, 'male');
            $bull = new Animals('bull','Korp', 24, 'male');
            $monkey = new Animals('monkey','Jolls', 8, 'male');
        ?>
        <span id="animals-count">Animals count: <?=Animals::showAmount()?></span>
        <div id="animals-cards">
            <article class="card">
                <div class="animal"><?="Kind: " . $dog->kind?></div>
                <div class="name"><?="Name: " . $dog->name?></div>
                <div class="age"><?="Age: " . $dog->age?></div>
                <div class="sex"><?="Sex: " . $dog->sex?></div>
            </article>
            <article class="card">
                <div class="animal"><?="Kind: " . $cat->kind?></div>
                <div class="name"><?="Name: " . $cat->name?></div>
                <div class="age"><?="Age: " . $cat->age?></div>
                <div class="sex"><?="Sex: " . $dog->sex?></div>
            </article>
            <article class="card">
                <div class="animal"><?="Kind: " . $zebra->kind?></div>
                <div class="name"><?="Name: " . $zebra->name?></div>
                <div class="age"><?="Age: " . $zebra->age?></div>
                <div class="sex"><?="Sex: " . $zebra->sex?></div>
            </article>
            <article class="card">
                <div class="animal"><?="Kind: " . $horse->kind?></div>
                <div class="name"><?="Name: " . $horse->name?></div>
                <div class="age"><?="Age: " . $horse->age?></div>
                <div class="sex"><?="Sex: " . $horse->sex?></div>
            </article>
            <article class="card">
                <div class="animal"><?="Kind: " . $donkey->kind?></div>
                <div class="name"><?="Name: " . $donkey->name?></div>
                <div class="age"><?="Age: " . $donkey->age?></div>
                <div class="sex"><?="Sex: " . $donkey->sex?></div>
            </article>
            <article class="card">
                <div class="animal"><?="Kind: " . $cow->kind?></div>
                <div class="name"><?="Name: " . $cow->name?></div>
                <div class="age"><?="Age: " . $cow->age?></div>
                <div class="sex"><?="Sex: " . $cow->sex?></div>
            </article>
            <article class="card">
                <div class="animal"><?="Kind: " . $bull->kind?></div>
                <div class="name"><?="Name: " . $bull->name?></div>
                <div class="age"><?="Age: " . $bull->age?></div>
                <div class="sex"><?="Sex: " . $bull->sex?></div>
            </article>
            <article class="card">
                <div class="animal"><?="Kind: " . $monkey->kind?></div>
                <div class="name"><?="Name: " . $monkey->name?></div>
                <div class="age"><?="Age: " . $monkey->age?></div>
                <div class="sex"><?="Sex: " . $monkey->sex?></div>
            </article>
        </div>

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