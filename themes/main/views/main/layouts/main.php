<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/main/css/app.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">

    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
        <div class="container">
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../getting-started">Getting started</a>
                    </li>
                    <li>
                        <a href="../css">CSS</a>
                    </li>
                    <li class="active">
                        <a href="../components">Components</a>
                    </li>
                    <li>
                        <a href="../javascript">JavaScript</a>
                    </li>
                    <li>
                        <a href="../customize">Customize</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Expo</a></li>
                    <li><a href="http://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Фотографии</a></li>
                    <li><a href="#">Видео</a></li>
                    <li><a href="#">Отели</a></li>
                    <li><a href="#">Рестораны</a></li>
                    <li><a href="#">Музеи</a></li>
                    <li><a href="#">Советы</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="row">
        <div class="col-md-9">

            <?php echo $content; ?>
        </div>
        <div class="col-md-3 sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Сообщения</a></li>
                <li><a href="#">Друзья</a></li>
            </ul>
        </div>
    </div>

</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/admin/js/bootstrap.min.js"></script>
</body>