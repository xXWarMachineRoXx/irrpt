<?php


include "../php/components/header.php";


?>
<body data-bs-theme="dark">
  <div class="d-flex  text-center ">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

      <?php echo pHeader(); ?>
    </div>
  </div>
  <div class="d-flex mt-5   ">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">

      <div class="bd-example ">
        <div class="text-center">
          <h3>IRRDB</h3>
          <caption>This tables lists the IRR Objects being tracked right now. <br> </caption>
          <caption>If update email is set to "none" or is blank, no email will be sent.</caption>

        </div>
        <br>
       
    
        <div class="d-flex justify-content-between ">
        <h5> IRRDB</h3>
          <div class="search-container ">

            <input type="text" class="form-control search-input mr-2 d-none mb-0 " placeholder="Search IRRs">
            <i class="fas fa-close d-none input-icons pe-auto pe-cursor"></i>
            <i class="fas fa-search pe-cursor"></i>

          </div>
          <button class="btn btn-primary d-none">Search</button>
        </div>
        <table class="table table-bordered rounded-top mt-3 text-center align-content-center">
          <thead>
            <tr>
              <th><input class="" type="checkbox" value="" id="flexCheckDefault"></th>
              <th>ASN <br><span style="font-size: x-small;" class="text-muted fw-lighter">Autonomous System Numbers</span></th> 
              <th >IRR Object <br><span style="font-size: x-small;" class="text-muted fw-lighter">(AS-SET/AUT-NUM)</span></th>
              <th>Status<br><span style="font-size: x-small;" class="text-muted fw-lighter">(Error, Pending, Tracking, Done)</span></th>
              <th>Update Email<br><span style="font-size: x-small;" class="text-muted fw-lighter">noc@example-customer-a.com</span></th>
              <!-- <th>ASN <br></th>
              <th >IRR Object <br></th>
              <th>Column 4<br></th>
              <th>Column 5<br></th> -->

            </tr>
          </thead>
          <tbody>
            <tr>
              <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
              <td> 2</td>
              <td> 3</td>
              <td> 4</td>
              <td> 5</td>

    
            </tr>
           
          </tbody>
        </table>
        <script>
          $(".fa-search").click(function () {
            $(".search-input").toggleClass("d-none");
            $(".fa-search").addClass('d-none');
            $(".fa-close").removeClass("d-none");

          });
          $(".fa-close").click(function () {
            $(".search-input").toggleClass("d-none");
            $(".fa-search").removeClass('d-none');
            $(".fa-close").addClass("d-none");

          });
        </script>
      </div>
    </div>
  </div>
