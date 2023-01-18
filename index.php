<?php

$verify_clicked = false;
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

if (array_key_exists('button1', $_POST)) {
    button1();



} else if (array_key_exists('button2', $_POST)) {
    exec("php configure.php");

}


function button1()
{
    $GLOBALS['$verify_clicked'] = !$GLOBALS['$verify_clicked'];
    console_log("This is Button1 that is selected",$GLOBALS['$verify_clicked']);
    exec("php configure.php",$output,$retval);
    console_log($output);
    console_log($retval);
}
function button2()
{
    console_log("This is Button2 that is selected");
}
echo '<head>';
echo '';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>tbRC | Router Configurator</title>';
echo '<!-- <script src="./index.js"></script> -->';
echo '<link rel="icon" type="image/x-icon" href="favicon/favicon-light.ico">';
echo '<link rel="stylesheet" href="./cover.css">';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"';
echo 'integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"';
echo 'integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"';
echo 'crossorigin="anonymous"></script>';
echo '</head>';
echo '';
echo '';
echo '<body class="d-flex h-100 text-center text-white bg-dark">';
echo '';
echo '<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">';
echo '<header class="mb-auto">';
echo '<div>';
echo '<h3 class="float-md-start mb-0">tbRC</h3>';
echo '<nav class="nav nav-masthead justify-content-center float-md-end">';
echo '<a class="nav-link active" aria-current="page" href="#">Home</a>';
echo '<a class="nav-link" href="#">Features</a>';
echo '<a class="nav-link" href="#">Contact</a>';
echo '</nav>';
echo '</div>';
echo '</header>';
echo '';
echo '<main class="px-3 mt-5">';
echo '';
echo '<br>';
echo '<br>';


echo '<img src="./images/logo-light.png" alt="decorative">';
echo '<h1> Router Configurator</h1>';
echo '<p class="lead">tbRC is a all in one router configurator to retreive,track,update and exclue asn\'s. It can also send emails to operators who don\'t use irr databases.</p>';
echo '<p>Before starting the process, you must verify that your installation is okay and ready to configure other routers.</p>';
// echo '<span class="mb-5">&nbsp;</span>';
echo '<form id="verify-install-form" method="post" onsubmit="'.button1().'">';

echo '<input type="submit" value="Verify Installation " name="button1" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">';
echo '</input>';
echo '</form>';
echo '</main>';
echo '';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<footer class="mt-auto text-white-50 lh-sm fs-6 fw-lighter">';
echo '';
echo '';
echo '<span class="fs-6 fw-lighter"> &copy; 2022 <a href="https://tech-bridge.biz/" class="text-white">Techbridge</a></span>';
echo '</footer>';
echo '</div>';

echo '<script>';
echo 'var form = document.getElementById("verify-install-form");';
echo 'function handleForm(event) { event.preventDefault(); }';
echo 'form.addEventListener("submit", handleForm);';
// echo ''
echo '</script>';
if($retval){
   
    
    
    // echo $output_str;
}else{
    echo '<!-- Button trigger modal -->';
    echo '<button id="verify-install-button" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">';
    echo 'Launch demo modal';
    echo '</button>';
    echo '';
    echo '<!-- Modal -->';
    echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    echo '<div class="modal-dialog">';
    echo '<div class="modal-content">';
    echo '<div class="modal-header">';
    echo '<h5 class="modal-title text-dark" id="exampleModalLabel">Error</h5>';
    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    echo '</div>';
    echo '<div class="modal-body">';
    $output_str=implode(" ",$output);
    echo $output_str,"test";
    // triggers modal 
    // echo '<script>';
    // echo 'const modal_trigger_button= document.getElementById("verify-install-button");';
    // echo '';
    // echo 'modal_trigger_button.click();';
    // echo '</script>';
    echo '</div>';
    echo '<div class="modal-footer">';
    echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
    echo '<button type="button" class="btn btn-primary">Understood</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</body>';




?>