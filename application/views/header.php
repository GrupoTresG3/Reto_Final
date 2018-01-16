<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>

    <style type="text/css">

    body {
    background: #08121A ;
    margin:0;
    padding:0;
    font-family: 'Source Sans Pro', 'sans-serif';
    
    color: white;
    
}

* {
    margin:0;
    padding:0;
}

table {
    width: 100%;
    text-align: left;
}

th, td {
    padding: 10px 10px;
}

th {
    color: white;
    background: #151E29 none repeat-x scroll left top;
}

td {
    border-bottom: 1px solid #1F2023;
}

a {
    color: white;
    border-bottom: 0px solid #6B7480;
    text-decoration: none;
}

h1 {
	font-size: 200%;
}

#cabecera {
	border: 40px solid #474F58;
	background-color: #474F58;
	border-radius: 6px;
}

.width {
    max-width: 1100px;
    margin: 0 auto;
}


#container {
    width: auto;
    margin: 0 auto;
}
#centro{
	margin-top: 50px;
	font-weight: bold;
}

#centro2{
	margin-bottom: 50px;
	font-weight: bold;
}

#margenEditar {
	margin-top: 50px;
	margin-bottom: 50px;
	font-weight: bold;
}

@media screen and (max-width: 740px) {

    body { 
        font-size: 0.8em; 
    }   

    table {
        display: block;
        overflow-x: auto;
    }
    
    header { 
        text-align:center; 
    }
}


@media screen and (max-width: 540px) {

    body { 
        font-size: 0.8em; 
    }

    header { 
        text-align: center; 
        padding: 10px 0 5px; 
    }

    table {
        display: block;
        overflow-x: auto;
    }

    .prueba {
    	font-size: 11pt;
    }
}


</style>

<!--<link rel="stylesheet" href=<? base_url()?>"css/styles.css" type="text/css"/>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src=<? base_url()?>"js/jquery.js"></script>
<script type="text/javascript" src=<? base_url()?>"js/slider.js"></script>
<script type="text/javascript" src=<? base_url()?>"js/superfish.js"></script>

<script type="text/javascript" src=<? base_url()?>"js/custom.js"></script>
<script type="text/javascript" src=<? base_url()?>"js/funciones.js"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

</head>
<body>
    <div id="container" class="width">
        <br>

        <div id="cabecera">
        <?php 
            echo $_SERVER['DOCUMENT_ROOT'];
         ?>
       </div>
