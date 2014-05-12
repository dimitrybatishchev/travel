<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="navbar navbar-static-top bs-docs-nav navbar-inverse" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">Админка</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/sign/out">Выйти</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="/admin/news/index">Новости</a>
                </li>
                <li>
                    <a href="/admin/newsCategories/index">Категории новостей</a>
                </li>
                <li>
                    <a href="/admin/pages/index">Страницы</a>
                </li>
                <li>
                    <a href="/admin/clients/index">Клиенты</a>
                </li>
                <li>
                    <a href="/admin/mainSliderImages/index">Главный слайдер</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9"><?php echo $content; ?></div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/admin/js/bootstrap.min.js"></script>
</body>