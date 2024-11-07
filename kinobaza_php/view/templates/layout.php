<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <meta name="description" content="Kinobaza is a portal about cinema" />
    <meta name="keywords" content="Movies, movies online, hd" />
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    
    <div class="main">

        <div class="header">
            <div class="logo">
                <div class="logo_text">
                    <h1><a href="index_ru.html">Kinobaza</a></h1>
                    <h2>Cinema is our passion!</h2>
                </div>
            </div>
            
            <div class="menubar">

                <ul class="menu">
                    <li><a href="index_en.html">Main page</a></li>
                    <li class="selected"><a href="films_en.html">Films</a></li>
                    <li><a href="series_en.html">Series</a></li>
                    <li><a href="rating_en.html">Films rating</a></li>
                    <li><a href="contact_en.html">Contacts></li>
                </ul>

                <nav class="language_switcher">
                    <ul>
                        <li><a href="index_en.html">Русский |  <a href="index_en.html">English</a></a></li>
                    </ul>
                </nav>

            </div>

        </div>  


        <div class="site_content">

            <div class="sidebar_container">

                <div class="sidebar">
                    <h2>Search</h2>
                    <form method="post" action="#" id="search_form" >
                        <input type="search" name="search_field" placeholder="Your request" />
                        <input type="submit" class="btn" value="Search" />
                    </form>
                </div>

                <div class="sidebar">
                    <h2>Sign in</h2>
                    <form method="post" action="#" id="login">

                        <input type="text" name="login_field" placeholder="login" />
                        <input type="password" name="password_field" placeholder="password" />
                        <input type="submit" class="btn" value="Sign in" />
                        <div class="lables_passreg_text">
                            <span><a href="#">Forgot password?</a></span> | <span><a href="#">Registration</a></span>
                        </div>

                    </form>
                </div>

                <div class="sidebar">
                    <h2>News</h2>
                    <span>31.02.2018</span>
                    <p>We have launched an advanced search</p>
                    <a href="#">Read</a>
                </div>

                <div class="sidebar">
                    <h2>Films rating</h2>
                    <ul>
                        <li><a href="show_inter.html">Interstellar</a><span class="rating_sidebar">8.1</span></li>
                        <li><a href="show_matrix.html">Matrix</a><span class="rating_sidebar">8.0</span></li>
                        <li><a href="show_max.html">Mad Max</a><span class="rating_sidebar">7.5</span></li>
                        <li><a href="show_cloud.html">Cloud Atlas</a><span class="rating_sidebar">7.4</span></li>
                    </ul>
                </div>

            </div>
            <div id = 'content' class="content">
            <?php
                echo $content;

            ?>
            </div>

        </div>
        
    <div class="footer">
        <p>
            <a href="index.html">Main page</a> |
            <a href="film.html">Films</a> |
            <a href="series.html">Series</a> |
            <a href="rating.html">Films rating</a> |
            <a href="contact.html">Contacts</a> |
        </p>
        <p>kinopoisk.ru</p>
    </div>

    </div>

</body>
</html>