@extends('layouts.app')

@section('content')
<body>
    <header>
        <div class="containter-fluid">
            <div class="row" style="height:680px; width:auto; background-color:gray; max-width:1326px;">
                <div class="col-12 text-center" style="padding-top: 20px;">
                    <h1 style="color: white;">BIENVENIDO</h1>
                </div>
                <div class="col-12 text-center align-self-center">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid rounded" width="600px" src="{{URL::asset('/images/1.png')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded" width="600px" src="{{URL::asset('/images/2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded" width="600px" src="{{URL::asset('/images/3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-5">
                    <h2>OMG</h2>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.iconscout.com/icon/free/png-256/javascript-2752148-2284965.png" alt="JSLogo">
                        <div class="card-body">
                            <h5 class="card-title">Javascript</h5>
                            <h6 class="card-subtitle mb-2 text-muted">wow wow so cool</h6>
                            <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blank" class="card-link">Saber más...</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://pngimg.com/uploads/php/php_PNG7.png" alt="PHPLogo">
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                            <h6 class="card-subtitle mb-2 text-muted">damn i don't understand</h6>
                            <a href="https://www.php.net/manual/es/intro-whatis.php" target="_blank" class="card-link">Saber más...</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://1000marcas.net/wp-content/uploads/2020/11/Python-logo.jpg" alt="PythonLogo">
                        <div class="card-body">
                            <h5 class="card-title">Python</h5>
                            <h6 class="card-subtitle mb-2 text-muted">yeh boi yeh boi</h6>
                            <a href="https://www.python.org" target="_blank" class="card-link">Saber más...</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.logo.wine/a/logo/Go_(programming_language)/Go_(programming_language)-Logo.wine.svg" alt="GOLogo">
                        <div class="card-body">
                            <h5 class="card-title">GO</h5>
                            <h6 class="card-subtitle mb-2 text-muted">El nuevo capo</h6>
                            <a href="https://keepcoding.io/blog/lenguaje-de-programacion-go-caracteristicas/" target="_blank" class="card-link">Saber más...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

@endsection
