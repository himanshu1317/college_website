<?php
include("header.php");
?>
<div class="row  m-0 " style="background-image: url(images/bgimg.webp); background-size: cover; ">
  <!-- outer content -->

  <!-- student log in form start -->
  <div class="col-sm-4 mx-auto">
    <div class="col  mt-4 p-2 bg-secondary-subtle text-center">
      <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Login Student</h3>
    </div>
    <form class="p-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded" action="user/login_code.php" method="post" style="height: 70;" onsubmit="return btn();">
      <div class="mb-3">
        <!-- email  -->
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" name="loginname" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <!-- password -->
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="loginpass" id="pass">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label me-4" for="exampleCheck1">Check me out</label>
        <span id="sp"></span>
      </div>
      <div class="row text-center  mt-4">
        <!--submit button -->
        <button type="submit" class="btn btn-danger w-100 ">Submit</button>
      </div>

      <!-- Button trigger modal -->


      <!-- start model for registretion -->


      <div class=" justify-content-between mt-3 text-primary row">
        <div class="col-6 d-flex">
          <a href="#" style="text-decoration: none; ">Forgate password</a>
        </div>
        <!-- registretion form -->
        <div class="col-6 d-flex"><a type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
           <p>Create new account?</p>
</a></div>
      </div>
    </form>
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h1 class="modal-title text-light fs-5" id="staticBackdropLabel">Register new student</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="user/reg_code.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
              </div>

              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile No.</label>
                <input type="number" class="form-control" name="mobile" id="mob" placeholder="Enter Mobile No.">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="mob" placeholder="Enter Password">
              </div>

              <div class="row">
                <div class="col-sm-6 text-center">
                  <div class="btn btn-danger">Get OTP</div>
                </div>

                <div class="col-sm-6">
                  <div class="mb-3">
                    <!-- <label for="mobile" class="form-label">Mobile No.</label> -->
                    <input type="number" class="form-control w-75" id="mob" placeholder="ENter OTP">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <!-- <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <button type="submit" class="btn btn-danger">Register</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="col text-start bg-danger p-3 text-light" style="font-size: small;">

  Disclaimer | Privacy Policy | Accessibility Statement | Copyright Statement | Terms & Conditions | Sitemap | Contact
  Us | Tenders | FAQ
  <br>

  © This is the unofficial website of Government Polytechnic Jaunpur , jaunpur.
</div>
</div>

</div>

</div>

</body>

</html>