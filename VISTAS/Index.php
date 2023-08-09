<!DOCTYPE html>
<html lang="en">
<head>
    <title>timegrid.io</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="image/favicon.png" />
    
    <link rel="stylesheet" href="css/app.min.css">

    <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <link rel="manifest" href="/manifest.json">

    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Montserrat);
    @import url(https://fonts.googleapis.com/css?family=Arvo);

    h1 {font-family: 'Montserrat', sans-serif;}
    .jumbotron {
        color:#fff;
        background-color: #367FA9;
    }
	.image-container {
		position: relative;
		display: inline-block;
		width: 100px;
		height: 100px;
		background-size: cover;
		background-position: center center;
		border-radius: 4px;
	}
    #inspire {font-family: 'Arvo', serif;}
    .panel{
    	text-align: center;
    	border: none;
    	box-shadow: none;
    }
    </style>

</head>
<body>
<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>
            <img class="hidden-xs hidden-sm" src="image/timegrid-logo-white.png" />
            timegrid.io
        </h1>
        <p class="hidden-xs" id="inspire">La agenda de citas para profesionales exitosos.</p>
        <div class="row">
        	<div class="col-xs-12">
                <span class="btn-group">
                    <a class="btn btn-success" href="https://timegrid.estelapp.net.pe/public/register">Empecemos</a>
                    <a class="btn btn-default" href="https://timegrid.estelapp.net.pe/public/login">Iniciar Sesión</a>
            	</span>
        	</div>
        </div>
    </header>

    <!-- Features -->
    <div class="row">

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail panel">
            	<div class="image-container" style="background-image:url(jumbo/optimize.png)"></div>
                <div class="caption">
                    <h3>Optimiza</h3>
                    <p>Asigna las citas por tí para que puedas dedicarte a lo que importa. Tu tiempo vale.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail panel">
            	<div class="image-container" style="background-image:url(jumbo/contact.png)"></div>
                <div class="caption">
                    <h3>Fideliza</h3>
                    <p>Mantiene a todos tus contactos organizados para que tu cartera de clientes esté siempre vigente.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail panel">
            	<div class="image-container" style="background-image:url(jumbo/do.png)"></div>
                <div class="caption">
                    <h3>Profesionaliza</h3>
                    <p>Le da a tus clientes el servicio que merecen, porque realmente lo merecen.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail panel">
            	<div class="image-container" style="background-image:url(jumbo/love.png)"></div>
                <div class="caption">
                    <h3>Libera</h3>
                    <p>Es hora de aprovechar el tiempo ahorrado y tomar unas buenas vacaciones.</p>
                </div>
            </div>
        </div>

    </div><!-- /.row -->
</div>
</body>
<!-- Scripts --
<script src="js/app.min.js"></script>
<script>
    $(document).ready(function () {

        $('.lang').on('click', function(){

            sessionStorage.language = $(this).data('lang');
        });

        if (typeof(Storage) !== "undefined") {
            if (sessionStorage.language) {
                $('#myModal').modal('hide');
            } else {
                $('#myModal').modal('show');
            }
        } else {
            alert('storage does not work on this browser');
        }
    });

</script>

!-- Modal --
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content--
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Select a Language</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    @foreach ($availableLanguages as $locale => $language)
                            <div class="col-md-3 text-center">
                                {!! link_to_route('lang.switch', $language, $locale, ['class' => 'lang', 'data-lang' => $locale]) !!}
                            </div>
                    @endforeach

                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>
</html>
-->