<?php include_once "partials/navbar.php" ?>

<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
  <div class="container">
    <div class="menus">
      <h2>Donate</h2>
      <ul>
        <li> <a href="index"><i class="fas fa-home"></i> Home</a></li>
        <li><i class="fas fa-angle-double-right"></i> Donate</li>
      </ul>
    </div>
  </div>
</div>


<div class="container p-3 mt-3 shadow">

  <!-- payment with cash -->
  <div class="donate-header">
    <h3 class="text-center fw-bolder pt-4 text-success">Support Betharbel Foundation: Make a Difference Today!</h3>
    <h3 class="text-center fw-bolder pt-4 text-danger pb-5">Donate Now</h3>
    <p>
      To support our mission and make a tangible impact, you can donate to:
    </p>
  </div>
  <div class="donate-content">

    <div class="cash-payment">
      <div class="cash-button text-center pb-3">
        <button class="btn fw-bolder">TRANSFER TO OUR ACCOUNT</button>
      </div>

      <div class="card w-75 p-2 shadow fw-bolder">
        <p>Account Number: 7816464016</p>
        <p>Bank: FCMB</p>
        <p>Account Name: Betharbel Foundation</p>

      </div>

      <h4 class="pt-3 text-decoration-underline"> Ways to Support</h4>

      <p>There are several ways to support Betharbel Foundation:</p>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item border-0">
          <span class="fw-bolder">Donate:</span> Contribute to our general fund or specify a project you'd like to support.
        </li>
        <li class="list-group-item border-0">
          <span class="fw-bolder">Sponsor a Program:</span> Choose a specific program or project that aligns with your values and sponsor it.
        </li>
        <li class="list-group-item border-0">
          <span class="fw-bolder">Collaborate with Us:</span> Partner with us to amplify your impact and create meaningful change.
        </li>
      </ol>

      <p>
        Your support enables us to empower IDPs, vulnerable communities, and marginalized individuals through education, healthcare, and economic empowerment initiatives. Thank you for your generosity!
      </p>
    </div>

    <div>
      <div class="payment-border"></div>
    </div>

    <div class="online-payment">

      <div class="cash-button text-center pb-3">
        <button class="btn fw-bolder">CARD TRANSFER</button>
      </div>

      <form class="form-control" id="paymentForm">

        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email-address" required >
          <label for="email-address">Email address</label>
        </div>

        <div class="form-floating">
          <input type="tel" class="form-control" id="phone" required />
          <label for="phone">Phone number</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" id="first-name" />
          <label for="first-name">First Name</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" id="last-name" />
          <label for="last-name">Last Name</label>
        </div>

        <div class="form-floating">
          <input type="number" class="form-control" id="amount" />
          <label for="amount">Amount</label>
        </div>
        <div class="form-submit">
          <button type="submit" class="btn btn-success"> Proceed </button>
        </div>
      </form>
    </div>
  </div>

</div>




<?php include_once "partials/footer.php"  ?>