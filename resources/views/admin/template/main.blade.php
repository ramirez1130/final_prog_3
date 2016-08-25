<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('section') | Panel de Control</title>
	<?= \Html::style('css/bootstrap.min.css') ?>
</head>
<body class="container">
    @include('admin.template.nav')

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">@yield('section')</h3>
            </div>

            @yield('content')
        </div>

    <?= \Html::script('js/jquery-3.1.0.min.js') ?>
    <?= \Html::script('js/bootstrap.min.js') ?>
</body>
</html>