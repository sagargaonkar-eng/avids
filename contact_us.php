<?php

include('navbar.php');

?>
<style>
  <?php include 'avids_tech.css'; ?>
</style>

<div class="container-fluid">
  <div class="row" style="text-align:center; background-color: beige; height: 500px; padding: 30px; font-family: 'Arvo', serif;
font-family: 'Lato', sans-serif;
font-family: 'Patua One', cursive;
font-family: 'Playfair Display', serif; margin-top:102px;" id="office">
    <h2>OFFICE MAP</h2>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15555.69598913229!2d77.609878!3d12.9126063!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14fd3cce0b95%3A0x3fdd0f324193d7a!2sAVIDS%20Technology!5e0!3m2!1sen!2sin!4v1682248115978!5m2!1sen!2sin"
      width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="row " style=" background-color: rgb(228, 220, 220); height: 200px; padding: 30px; font-family: 'Arvo', serif;
font-family: 'Lato', sans-serif;
font-family: 'Patua One', cursive;
font-family: 'Playfair Display', serif;" id="address">
    <div class="col-md-12">
      <h2>ADDRESS,CONTACT,MOBILE</h2>
      <p> Avids Technology
        Ground Floor, 1210, 16th Main Rd, Mahadeshwara Nagar, Stage 2, BTM Layout, Bengaluru, Karnataka 560076 </p>
    </div>

  </div>
  <div class="row " style="text-align: center; background-color: white; padding: 30px; font-family: 'Arvo', serif;
font-family: 'Lato', sans-serif;
font-family: 'Patua One', cursive;
font-family: 'Playfair Display', serif;" id="enquiry">
    <h2>ENQUIRY</h2>
    <div class="col-md-12">
      <p>
        For Enquiries contact us on
        Uma Shankar
        a.umashankar@avidstech.com


        Rishikesh
        rishihm@avidstech.com
      </p>
    </div>

    <div id="form-main">
      <div id="form-div">
        <form class="form" id="form1">

          <p class="name">
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
              placeholder="Name" id="name" />
          </p>

          <p class="companyname">
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
              placeholder="Company Name" id="cname" />
          </p>

          <p class="designation">
            <input name="designation" type="text"
              class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Designation"
              id="designation" />
          </p>

          <p class="location">
            <input name="location" type="text"
              class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Location"
              id="location" />
          </p>

          <p class="email">
            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email"
              placeholder="Email" />
          </p>

          <p class="mobile">
            <input name="mobile" type="number"
              class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Contact"
              id="phno" />
          </p>

          <p class="text">
            <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment"
              placeholder="Box forComment"></textarea>
          </p>


          <div class="submit">
            <input type="submit" value="SEND" id="button-blue" />
            <div class="ease"></div>
          </div>
        </form>
      </div>

    </div>
  </div>