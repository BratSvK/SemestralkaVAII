<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Project Board</title>
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/all.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/events.css')?>" type="text/css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_XutZaq6kFoCFVsGC1TCwWCHZmz1VLII">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    <script type="module" src="{{ URL::asset('js/events.js') }}" defer></script>
    <!-- <script src="assets/scripts/app.js" defer></script> zatial len zalozenie hlavicky pre JavaScript defer sluzi na vykonanie po zobrazeni HTML stránky -->
</head>

<body>
<div class="container">

    @yield("content")
</div>



<!--Pata-->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                    Gajdy
                </p>
            </div>
        </div>
    </div>
    <!-- <button id="stop-analytics-btn">Stop Analytics</button> -->
</footer>
</body>

</html>
