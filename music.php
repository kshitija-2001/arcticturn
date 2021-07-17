<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <link rel="stylesheet" href="css/music.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

</head>

<body>
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li class="space">
                <a href="#">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        Blogs
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-plane-departure fa-2x"></i>
                    <span class="nav-text">
                        Travel
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-heart fa-2x"></i>
                    <span class="nav-text">
                        Relax
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-sitemap fa-2x"></i>
                    <span class="nav-text">
                        Organize
                    </span>
                </a>

            </li>
        </ul>

        <ul class="logout">
            <li>
                <a href="logout.php">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="cardCase">
        <script>
            $('nav ul li.btn span').click(function() {
                $('nav ul div.items').toggleClass("show");
                $('nav ul li.btn span').toggleClass("show");
            });
        </script>

        <div class="playlist">
            <iframe src="https://open.spotify.com/embed/playlist/0B1cW8x7Mopg6Du5BJ4spM" width="100%" height="300" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <iframe src="https://open.spotify.com/embed/playlist/1uJbwrwEhDEhrOXGqYzXit" width="100%" height="300" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="cardCase">
</body>

</html>