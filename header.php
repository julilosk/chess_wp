<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Федерация шахмат Алтайского края</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-reboot.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap-grid.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/font.css"> -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <!-- <link rel="stylesheet" href="../../css/style.min.css">    -->
    <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/logo1.png">
  
    <?php 
        wp_head();
    ?>
        
</head>

<body>
    <header id="up" class="top-header">
        <div class="container">
            <div class="row top-header__block">
                <div class="top-header__headline">
                    <div class="top-header__logo">
                        <a href="/">  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo_white.svg" alt="logo" class="top-header__img"> </a>
                    </div>    
                    <div  class="top-header__title ">
                        <h1> Федерация шахмат Алтайского края</h1>
                        <span class="top-header__subtitle">общественная организация</span>
                    </div>
                </div>
            
                <div class="social ">
                    <a href="#" class="social__icon" target="_blank"><img  src="<?php echo bloginfo('template_url'); ?>/assets/icons/facebook-f-brands.svg" alt="facebook" ></a>
                    <a  href="#" class="social__icon" target="_blank"><img  src="<?php echo bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="instagram" ></a>    
                    <a  href="#" class="social__icon" target="_blank"> <img  src="<?php echo bloginfo('template_url'); ?>/assets/icons/user-alt-solid.svg" alt="private"></a>
                </div>
            </div>
        </div>
    </header>

    <nav> 
        <div class="container">
            <div class="menu row">
                 <ul class="menu__block">

                     <li class="menu__item"><a  href="../../pages/news/all.html" class="menu__link"> Новости</a>
                        <ul>
                             <li><a href="../../pages/news/all.html">Все новости<!-- Последние --></a></li>
                             <li><a href="../../pages/news/inform.html">Объявления</a></li>
                             <!-- <li><a href="../../pages/news/press.html">Пресса</a></li> -->
                             <li><a href="../../pages/news/photos.html">Фотогалерея</a></li>
                        </ul>                                       
                     </li>     
 
                     <li class="menu__item"><a href="../../pages/tournaments/tournaments.html"  class="menu__link">Турниры</a>
                         <ul class="menu__sub-menu">
                            <li><a href="../../pages/tournaments/tournaments.html">Все турниры</a></li>
                             <li><a href="../../pages/tournaments/calendar.html">Календарь</a></li>
                             <li ><a href="../../pages/tournaments/translation.html">Трансляция</a></li>                            
                         </ul> 
                     </li>
 
                     <li class="menu__item"><a href="../../pages/federation/federation.html"  class="menu__link">Федерация</a>
                         <ul class="menu__sub-menu">
                            <li><a href="../../pages/federation/federation.html">Общая информация</a></li>
                            <li><a href="../../pages/federation/dokumentyi.html">Документы</a></li> 
                            <li><a href="../../pages/federation/pravlenie.html">Структура</a></li>
                            <li><a href="../../pages/federation/projects.html">Программы и проекты</a></li>
                            <!-- <li><a href="../../pages/federation/chlenstvo.html">Членство</a></li>    -->
                         </ul>
                     </li>
 
                     <li class="menu__item"><a href="../../pages/chessplayers/teams.html"  class="menu__link">Шахматисты</a>
                        <ul class="menu__sub-menu">                             
                             <li><a href="../../pages/chessplayers/teams.html">Сборные</a></li>
                             <li><a href="../../pages/chessplayers/champions_kray.html">Чемпионы <!-- Алтайского края --></a></li>
                             <li><a href="../../pages/chessplayers/rating.html">Рейтинг-лист</a></li>
                        </ul>  
                     </li> 
                    
                     <li class="menu__item"><a href="../../pages/chess_schools/schools.html"  class="menu__link">Клубы и школы</a>
                         <ul class="menu__sub-menu">
                            <li><a href="../../pages/chess_schools/schools.html">Секции</a></li>
                            <li><a href="../../pages/chess_schools/kraevoy-shahmatnyiy-klub.html"> Краевой шахматный клуб</a></li>                               
                            <li><a href="../../pages/chess_schools/akademiya.html">Академия</a></li>
                         </ul>
                     </li>
                    
                     <li class="menu__item"><a href="../../pages/shop/shop.html"  class="menu__link">Магазин</a></li>
                 </ul>
                 <form>
                     <input type="text" placeholder="">
                     <button type="submit"><img  src="<?php echo bloginfo('template_url'); ?>/assets/icons/search-solid.svg" alt="фейсбук" ></button>
                 </form>
            </div>
        </div>
 
        <div class="hamburger">
             <span></span>
             <span></span>
             <span></span>
         </div>
    </nav>  
    <section>   