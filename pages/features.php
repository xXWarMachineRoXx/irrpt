<?php


include "../php/components/header.php";


?>

<body data-bs-theme="dark">
    <div class="d-flex  text-center ">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

            <?php echo pHeader(); ?>
        </div>
    </div>
    <div class="d-flex mt-5 text-center  ">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
           

            <div class="container" >
                <div class="card">
                    <h5 class="card-header">Fetch</h5>
                    <div class="card-body">
                        <h5 class="card-title">IRR  Prefix Management</h5>
                        <p class="card-text">Manage IRR prefixes that includes querying a server, checking against exclusions, storing approved prefixes, aggregating them, tracking changes, and sending notifications.</p>
                        <a href="fetch.php" class="btn btn-primary ">Configure Fetch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>