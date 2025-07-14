<?php
    $characters = [
        ["name" => "Nero", "title" => "THE YOUNG DEVIL HUNTER", "weapon" => "Red Queen", "image_url" => "https://www.wallpaperflare.com/static/360/245/223/devil-may-cry-5-nero-devil-may-cry-devil-may-cry-man-wallpaper.jpg"],
        ["name" => "V", "title" => "THE MYSTERIOUS ONE", "weapon" => "Grimoire", "image_url" => "https://pbs.twimg.com/media/Dt0-gbTUcAALF3m?format=jpg&name=4096x4096"],
        ["name" => "Dante", "title" => "THE LEGENDARY DEVIL HUNTER", "weapon" => "Rebellion", "image_url" => "https://pbs.twimg.com/media/DppleIRV4AAPD-f?format=jpg&name=4096x4096"],
        ["name" => "Vergil", "title" => "THE ALPHA AND OMEGA!", "weapon" => "Yamato", "image_url" => "https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.6435-9/55664423_2314458478787773_1858613519289679872_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=0b6b33&_nc_ohc=emygNrOIElAQ7kNvwGrt_4A&_nc_oc=AdkTMj1X5NXTQS3UiJl0uej9xgsQZnJ9nuNKC_AFlKC282qYo-WiuOZ-PibjYnANSZY&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&_nc_gid=lLW4yEDehVgDasLtM8S1rw&oh=00_AfImefeT9ygefnwv7F2bDkEEDYTtOejEzhY2ymODOP1Mig&oe=684944E3"]
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <title>DMC5 Characters</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/design.css">
    <link rel="stylesheet" href="./assets/css/mainstyles.css">
    <link rel="stylesheet" href="./assets/css/character_cards.css">
</head>
<body>
    <div class="dmc5-logo">
        <img src="./assets/img/DMC5logo.png" alt="DMC5 Logo">
        <h1>Devil May Cry 5 Characters</h1>
    </div>
    <div class="character-list">
        <?php foreach ($characters as $character): ?>
            <div class="character">
                <img src="<?php echo $character['image_url']; ?>" alt="<?php echo $character['name']; ?>">
                <div class="character-info">
                    <h2><?php echo $character['name']; ?></h2>
                    <p>Title: <?php echo $character['title']; ?></p>
                    <p>Weapon: <?php echo $character['weapon']; ?></p>

                    <?php if ($character['name'] === "Vergil"): ?>
                        <div class="special-quote-container">
                            <p class="special-quote">“Might controls everything!”</p>
                        </div>
                    <?php endif; ?>

                    <a href="page/<?php echo ucfirst(strtolower($character['name'])); ?>Page/<?php echo $character['name']; ?>.php" class="character-button">View <?php echo $character['name']; ?>'s Page</a>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</body>
</html>
