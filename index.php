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
    console_log("This is Button1 that is selected", $GLOBALS['$verify_clicked']);
    exec("php configure.php", $output, $retval);
    console_log($output);
    console_log($retval);
}
function button2()
{
    console_log("This is Button2 that is selected");
}
include_once "header.php";


?>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">tbRC</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
        </header>
        <main class="px-3 mt-5">
            <br>
            <br>
            <img src="./images/logo-light.png" alt="decorative">
            <h1> Router Configurator</h1>
            <p class="lead">tbRC is a all in one router configurator to retrieve,track,update and exclude ASN's.
                It can also send emails to operators who don\'t use irr databases.</p>
            <p>Before starting the process, you must verify that your installation is okay and ready to configure
                other routers.</p>
            <span class="mb-5">&nbsp;</span>
            <form id="verify-install-form" method="post" onsubmit="'.button1().'">

                <input type="submit" value="Verify Installation " name="button1"
                    class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                </input>
            </form>

        </main>

        <br>
        <br>
        <br>
        <footer class="mt-auto text-white-50 lh-sm fs-6 fw-lighter">


            <span class="fs-6 fw-lighter"> &copy; 2022 <a href="https://tech-bridge.biz/"
                    class="text-white">Techbridge</a></span>
        </footer>

    </div>


    <script>
        var form = document.getElementById("verify-install-form");
        function handleForm(event) { event.preventDefault(); };
        form.addEventListener("submit", handleForm);
// '
    </script>
    if($retval){



    // echo $output_str;
    }else{
    <!-- Button trigger modal -->
    <button id="verify-install-button" type="button" class="btn btn-primary d-none" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $output_str = implode(" ", $output);
                    echo $output_str, "test"; ?>
                    // triggers modal
                    //
                    <script>
                    // const modal_trigger_button= document.getElementById("verify-install-button");
                    //
                    // modal_trigger_button.click();
                    </script>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    }

</body>
