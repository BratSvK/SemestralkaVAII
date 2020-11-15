<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Project Board</title>
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/all.min.css')?>" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>


    <!-- <script src="scripts/app.js" defer></script> -->
</head>

<body>

<!-- Dalsi postup a tooltipy-->
<template id="tooltip">
    <h2>More Info</h2>
    <p></p>
</template>
<header id="main-header">

    <nav class="navbar navbar-expand-lg navbar-light  justify-content-between ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="logo">

            <a class="navbar-brand" href="posts"></a>

        </div>


        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="posts">
                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                             class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd"
                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                        Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="creation">
                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                             class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                        Creation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events">
                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                             class="bi bi-calendar-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                        </svg>
                        Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="eshop">
                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                             class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                        </svg>
                        Shop</a>
                </li>
            </ul>
        </div>

    </nav>

</header>
<!-- Hlavny obsah-->


<div class="container">
    <div class="row">
        <!-- Statistika-->
        <ul class="info rounded list-group col-md-2">
            <li class="list-group-item d-flex justify-content-between align-items-center ">Active: <span
                    class="badge badge-primary badge-pill">{{count($activePosts)}}</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Finished: <span
                    class="badge badge-primary badge-pill">{{count($othersPosts)}}</span></li>

            <li class="list-group-item d-flex justify-content-between align-items-center">Main Goal: <span
                    class="badge badge-primary badge-pill"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-check"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
            </svg></span></li>
        </ul>
        <!-- Konci panel Statistika-->

        <div class="col-md-10">

            <!--  panel Aktivne-->
            <section id="active-projects">
                <header>
                    <h2>Active Projects</h2>
                </header>
                <ul>
                    <!--nacitanie Postov-->

                    @foreach($activePosts as $Apost)

                        <li id="{{$Apost->id}}" data-extra="{{$Apost->info}}" class="card" draggable="true">
                            @if($Apost->is_main)

                                <h2> <span> <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                 class="bi bi-exclamation-square text-danger"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path
                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                      </svg></span> {{$Apost->title}}
                                </h2>

                            @else
                                <h2>{{$Apost->title}}</h2>
                            @endif
                            <p>{{$Apost->body}}</p>
                            <button class="alt">More Info</button>
                            <button>Finish</button>
                        </li>
                    @endforeach


                </ul>
            </section>
            <!-- panel Finished-->
            <section id="finished-projects">
                <header>
                    <h2>Finished Projects</h2>
                </header>
                <ul>
                    @foreach($othersPosts as $Opost)

                        <li id="{{$Opost->id}}" data-extra="{{$Opost->info}}" class="card" draggable="true">
                            @if($Opost->is_main)

                                <h2> <span> <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                 class="bi bi-exclamation-square text-danger"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path
                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                      </svg></span> {{$Opost->title}}
                                </h2>

                            @else
                                <h2>{{$Opost->title}}</h2>
                            @endif
                            <p>{{$Opost->body}}</p>
                            <button class="alt">More Info</button>
                            <button>Finish</button>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
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
