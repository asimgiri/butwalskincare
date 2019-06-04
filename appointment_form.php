
<?php include 'includes/header.php'; ?>

<!-- Start Banner -->
<div class="inner-banner about-us-banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <h1>BOOK APPOINTMENT</h1>

          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
  </ol>
</nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Banner -->

<!-- Start Contact Us -->
<div class="form-wrapper padding-lg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 appointment-outer">
        <div class="appointment-form">
          <div class="form-wrapper">
            <form class="form" action="#" method="post">
              <div class="row input-row">
                <div class="col-sm-6">
                  <input name="name" placeholder="Name*" type="text" required="">
                </div>
                <div class="col-sm-6">
                  <select class="select-box">
                    <option selected>--- Select Gender ---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="row input-row">
                <div class="col-sm-6">
                  <select class="select-box">
                    <option selected>--- Select Service ---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <select class="select-box">
                    <option selected>--- Select Doctor ---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="row input-row">
                <div class="col-sm-6 calendar-row">
                  <input name="date" placeholder="Date*" type="date" required="">
                </div>
                <div class="col-sm-6 time-row">
                  <i class="fa  fa-phone" aria-hidden="true"></i>
                  <input name="phone" placeholder="Mobile/Contact No*" type="text" required="">
                </div>
              </div>
              <div class="row textarea">
                <div class="col-sm-12">
                  <textarea name="message" class="message" id="exampleFormControlTextarea1" placeholder="MESSAGE" rows="3"></textarea>
                </div>
              </div>
              <div class="row button">
                <div class="col-sm-12 book-btn">
                  <button class="btn">Book An Appointment</button>
                  <div class="msg"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Contact Us -->


<?php include 'includes/footer.php'; ?>
