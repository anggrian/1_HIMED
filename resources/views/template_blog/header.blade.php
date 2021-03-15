<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}" />
	<link rel="stylesheet" href="{{ asset('style_frontend/assett/navbar/navbar.css')}}">

        <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">

        <title>Blog Himed</title>
    </head>
    <body>
            	<!-- HEADER -->
	@include('frontend.navbar')
	        <!-- /HEADER -->