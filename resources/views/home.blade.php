
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hüseyin Alkan | Case Study</title>

    <!-- Bootstrap core CSS -->
    <link href="{{route('home')}}/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{route('home')}}/pricing.css" rel="stylesheet">
</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Hüseyin Alkan</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Anasayfa</a>
        <a class="p-2 text-dark" href="#">Proje</a>
        <a class="p-2 text-dark" href="#">İletişim</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Giriş Yap</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Döviz Raporu</h1>
    <p class="lead text-success"> Sistemdeki döviz verileri karşılaştırılarak en düşük ücrete ait sonuçlar listeleniyor. </p>
    <small> Aşağıdaki fiyatlar sisteme birden fazla kaynaktan verilerin çekilmesiyle aktarılıyor. </small>
</div>

<div class="container">
    @if($dolar&&$euro&&$siterlin)
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Dolar</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{$dolar->price_amount}} <small class="text-muted">  $</small></h1>
                <h5>{{$dolar->api_name}}</h5>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Euro</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{$euro->price_amount}} <small class="text-muted"> €</small></h1>
               <h5> {{$euro->api_name}}</h5>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Sterlin (Pound)</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{$siterlin->price_amount}} <small class="text-muted"> £</small></h1>
                <h5>{{$siterlin->api_name}}</h5>
            </div>
        </div>
    </div>
    @else
        <div class=" px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h4 class="text-danger">Sistemde listelenecek veri bulunamadı!</h4>
            <small>lütfen apilerden verileri çekmek için komut satırında <b>Php artisan ApiDataInsert:start</b> kodunu çalıştırın.</small>
        </div>
    @endif

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">&copy; 2020</small>
            </div>
            <div class="col-6 col-md">
                <h5>Kurumsal</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Anasayfa</a></li>
                    <li><a class="text-muted" href="#">Proje</a></li>
                    <li><a class="text-muted" href="#">İletişim</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Hakkımızda</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Vizyon</a></li>
                    <li><a class="text-muted" href="#">Misyon</a></li>
                    <li><a class="text-muted" href="#">Gizlilik</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
</body>
</html>
