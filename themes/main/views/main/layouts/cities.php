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
                <form class="navbar-form navbar-left" role="search">

                    <div class="form-group">
                        <div class="input-group" style="width: 210px;">
                            <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                      </span>
                        </div><!-- /input-group -->
                    </div>

                </form>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-globe" style='margin-right: 10px;'></span>
                            Азия
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Азия</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Европа</a></li>
                                <li><a href="#">Северная Америка</a></li>
                                <li><a href="#">Африка</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Китай</a>
                    </li>
                    <li class="divider"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Гонконг</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://expo.getbootstrap.com">Дмитрий Батищев</a></li>
                    <li><a href="http://expo.getbootstrap.com"><span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="http://blog.getbootstrap.com"><span class="glyphicon glyphicon-off"></span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-question-sign"></span> Информация
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-camera"></span> Фотографии
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-film"></span> Видео
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-home"></span> Отели
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-cutlery"></span> Рестораны
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Покупки
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-book"></span> Музеи
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-question-sign"></span> Советы
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="row">
        <div class="heading-image" style="background-image: url('/content/cities/hong-kong/background.jpg'); background-position: center -219px;">
            <h1>Гонконг</h1>
            <div class="coordinates">22.1707° N, 114.0927° W</div>
        </div>
        <div class="col-md-9" style="background: #fff;">
            <?php echo $content; ?>
        </div>
        <div class="col-md-3">

        </div>
    </div>

    <footer>
        <div class="container">
            <p>Ск</p>
        </div>
    </footer>

</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/admin/js/bootstrap.min.js"></script>
</body>