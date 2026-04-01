<?php
$posts = [
 [
   'avatar' => '/img/home.img/Avatar-Vania.png',
   'author' => 'Ваня Денисов', 
   'image' => '/img/home.img/Photo-Vania.jpg',
   'subtitle' => 'Так красиво сегодня на улице! Настоящая зима))
                Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, 
                в городке, занесенном снегом по ручку двери...»',
    'count-like' => '203', 
    'ago' => '2 часа назад',             
 ],
 [
    'avatar' => '/img/home.img/Avatar-Liza.png',
    'author' => 'Лиза Дёмина', 
    'image' => '/img/home.img/Photo-Liza.png',
    'subtitle' => '',
    'count-like' => '534', 
    'ago' => '3 часа назад', 
 ],
];
?>

<!DOCTYPE html>
<html> 
    <head>
        <title>SM|Home</title>
        <meta charset="UTF-8"> 
        <link href="home.css" rel="stylesheet">   
    </head>
    <body>
        <link rel="preconnect" href="https//cdn.jsdelivr.net">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@wikiline/webfont-golos-ui@latest/css/all.css">
        
        <div class="menu">
            <img src="/img/Menu-home.png" alt="Menu-home">
            <img src="/img/Menu-people.png" alt="Menu-people">
            <img src="/img/Menu-add.png" alt="Menu-add">
        </div>

        <div class="news">
            
            <div class="new">

                <div class="header">
                    <img class="avatar" src="/img/home.img/Avatar-Vania.png" alt="Avatar-Vania">
                    <span>Ваня Денисов</span>
                    <img class="edit" src="/img/home.img/Edit.png" alt="Edit">
                </div>
                
                <div class="photo">
                    <p class="count-slide">1/3</p>
                    <img class="photo-vania" src="/img/home.img/Photo-Vania.jpg" alt="snow-street">
                    <img class="slider" src="/img/home.img/Slider-left.png">
                    <img class="slider" src="/img/home.img/Slider-right.png">
                </div>

                <div class="likes">
                    <img class="like" src="/img/home.img/smiley-heart.png" alt="Like">  
                    <p class="count-like"> 203</p>
                </div>

                 <p class="note">Так красиво сегодня на улице! Настоящая зима))
                Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, 
                в городке, занесенном снегом по ручку двери...» </p>
                <div class="addition">
                    <p class="yet">ещё</p>
                    <p class="ago">2 часа назад</p>
                </div>

            </div>

            <div class="new">

                <div class="header">
                    <img class="avatar" src="/img/home.img/Avatar-Liza.png" alt="Avatar-Liza">
                    <span>Лиза Дёмина</span>
                    <img class="edit" src="/img/home.img/Edit.png" alt="Edit">
                </div>
                
                <div class="photo">
                    <p class="count-slide"></p>
                    <img class="photo-liza" src="/img/home.img/Photo-Liza.png" alt="Photo-Liza">
                    <img class="slider" src="/img/home.img/Slider-left.png">
                    <img class="slider" src="/img/home.img/Slider-right.png">
                </div>

                <div class="likes">
                    <img class="like" src="/img/home.img/smiley-heart.png" alt="Like">  
                    <p class="count-like"></p>
                </div>

                <p class="note"></p>

                <div class="addition">
                    <p class="yet">ещё</p>
                    <p class="ago">3 часа назад</p>
                </div>

            </div>

        </div>
    </body>
</html>
