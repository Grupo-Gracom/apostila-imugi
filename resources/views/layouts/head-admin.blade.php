<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-navbutton-color" content="#ffffff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo')</title>
    <!-- <link rel="shortcut icon" href="{{asset('assets/img/icone-imugi.png')}}"> -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,700|Playfair+Display:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style2.css')}}">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    
</head>
<body class="cont">
    <div id="raiz"></div>
    <script>
        $("#raiz").load("menus", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                var menus = JSON.parse($('input[name="list-menus"]').val());
                menus.forEach( m => {
                    $('nav li[data-menu-id="'+m+'"]').css({"display":"block"});
                });
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro: " + xhr.status + ": " + xhr.statusText, 2000);
            }
        });
        
    </script>