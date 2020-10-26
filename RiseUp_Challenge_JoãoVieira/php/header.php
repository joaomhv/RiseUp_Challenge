<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="JoãoVieira" content="CityQuiz">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Sweetalert2 -->
        <!-- <link href="vendor/sweetalert/sweetalert.css" rel="stylesheet"> -->

        <!-- Custom css -->
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        
        <!-- Datatable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="vendor/fontawesome5.13.1/fontawesome-free-5.13.1-web/css/all.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    </head>

    <body>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-center">
                        RiseUp<br>
                        Challenge
                    </h3>
                    <!-- <img src="img/RiseUp.png" class="imagem mt-3" alt="img/twoImpulseLogo.png"></img> -->
                </div>
    
                <ul class="list-unstyled components">
                   
                    <li>
                        <a class="text-write pl-4" href="index.php"> <i class="fas fa-list mr-3"></i>User list</a>
                    </li>
                    <li>
                        <a class="text-write pl-4" href="insertUser.php"><i class="fas fa-plus mr-3"></i>Insert User</i></a>
                    </li>
                </ul>
    
                <ul class="list-unstyled CTAs">
                    <li>
                        <p class="text-center"> João Vieira | 2020 </p>
                    </li>
                </ul>
            </nav>
    
            <!-- Page Content  -->
            <div id="content">
    
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
    
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                        </button>
                    </div>
                </nav>