<?php
include_once "header.php";
include_once "modal.php";
include_once "utils.php";
include_once "footer.php";
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
            <form id="verify-install-form" method="post" onsubmit='<?php button1(); ?>'>
            <?php
                    switch ($GLOBALS['retval']) {
                        case 0:
                            # code...
                            echo modal('Sucess', 'No error');
                            break;
                        
                        case 1:
                            echo modal('Error', ' Please check your Installation');
                            break;
                    }
                    
                   
                ?>
                <input type="submit" value="Verify Installation " name="button1"
                    class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                </input>
               
            </form>
        </main>
        <br>
        <br>
        <br>
        <?php footer(); ?>
    </div>
    <script>
        var form = document.getElementById("verify-install-form");
        function handleForm(event) { event.preventDefault(); };
        form.addEventListener("submit", handleForm);
    </script>
</body>