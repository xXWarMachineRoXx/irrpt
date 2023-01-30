<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tbRC | Router Configurator</title>
    <!-- <script src="./index.js"></script> -->
    <link rel="icon" type="image/x-icon" href="favicon/favicon-light.ico">
    <link rel="stylesheet" href="/irrpt/css/cover.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>
<style>
    .pe-cursor{
        cursor:pointer;
    }
    .input-icons {

       
        position: relative;
        right: -11.5em;

        bottom: 2em;
    }
</style>

<?php

function pHeader()
{

    $sHtml = '<header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">tbRC</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end ">
                    <a class="nav-link " aria-current="page" href="/irrpt">Home</a>
                    <a class="nav-link active" href="/irrpt/pages/features.php">Features</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
        </header>';
    return $sHtml;
}