<?php 
/*
* If you want to edit this just your content
  find <div id="root">
    and start your content uder this div id.
  Example
  --------
    <div id="root">
      .............
      .............
        Content
      .............
      .............
    </div>



  @Any one can use this template it's open source.
    I've found this
    ------------------
      * @overview es6-promise - a tiny implementation of Promises/A+.
      * @copyright Copyright (c) 2014 Yehuda Katz, Tom Dale, Stefan Penner and contributors (Conversion to ES6 API by Jake Archibald)
      * @license   Licensed under MIT license
      * See https://raw.githubusercontent.com/stefanpenner/es6-promise/master/LICENSE
      * @version   v4.2.5+7f2b526d

  @this is file for create pdf
    PDF Deatailse below noe
      -----------------------
      Name                : Sample of (Northern College Bangladesh, SPL Practical Coverpage)
      Paper size          : A4
      Main Content Area   : <duv id="root"> //this id is required !important.

*/

      // get value from form
      $Name = $_POST['name'];
      $Registration_No = $_POST['registrationNo'];
      $Id = $_POST['id'];
   

      // Variable
      $name = $Name;
      $registrationNo = $Registration_No;
      $id = $Id;

      // chcek data form filled or not then redirect
      if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('Location: index.php');
      }
 ?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Northern College Bangladesh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- stylsheet -->
    <link rel="stylesheet" type="text/css" href="coverpage.css">
  </head>
  <body>
    <br><br>

    <!-- Button to generate PDF. -->
    <span>go to for </span><button onclick="test()">Make PDF</button><br>
    <!-- button for print -->
    <span>go to for </span><button onclick="myFunction()">Print this page</button>

    <!-- Main A4 Size Area - Div to capture. -->
    <div id="root">

      <!-- bacnkground image and logo -->
      <div class="area_cbc"></div>

      <div class="cn">  
      <div class="content">

        <!-- information content -->
        <h1 class="dept_cse">Department <br> of <br> Computer Science & Engineering [502]</h1>
        <div class="topic">
          <h2>
            <u>Topic</u>
          </h2>
          <h3><i>Structured Programming Language [510202]</i></h3>
        </div>

        <!-- submitted by -->
        <div class="submittedBy">
          <h3><b><u>Submitted By:</u></b></h3>
          <div class="submittedByUnder">
            <table>
              <tr><td><b>Name</b></td><td class="sb2td"><b>: <?php echo $name; ?></b></td></tr>
              <tr><td><b>Registration No</b></td><td class="sb2td">: <?php echo $registrationNo; ?></td></tr>
              <tr><td><b>Type</b></td><td class="sb2td">: Regular</td></tr>
              <tr><td><b>Batch</b></td><td class="sb2td">: 10<sup>th</sup></td></tr>
              <tr><td><b>ID</b></td><td class="sb2td">: <?php echo $id; ?></td></tr>
            </table>
          </div>
        </div>

        <!-- dubmitted to -->
        <div class="submittedTo">
          <h3><b><u>Submitted To:</u></b></h3>
          <div class="submittedToUnder">
            <table>
              <tr><td><b>Teacher's Name</b></td><td class="st2td"><b>: Imdad Amin Nidhro</b></td></tr>
              <tr><td><b>Designation</b></td><td class="st2td">: </td></tr>
            </table>
          </div>
        </div>

        <!-- signature content -->
        <div class="sigArea">
          <div class="saleft">
            <p>...............................</p>
            <p>Teacher's Signature</p>
          </div>
          <div class="saright">
            <p>.................................</p>
            <p>Teacher's Signature</p>
          </div>
        </div><!-- end .sigArea -->

      </div><!-- end .content -->
    </div><!-- End A4 size Area #root -->
    </div>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include html2pdf bundle. -->
    <script src="js/htmlToPdf.js"></script>
    <script>
      function test() {
        // Get the element.
        var element = document.getElementById('root');

        // Generate the PDF.
        html2pdf().from(element).set({
          margin: 0,
          filename: 'ncb.pdf',
          html2canvas: { scale: 2 },
          jsPDF: {orientation: 'portrait', unit: 'in', format: 'A4', compressPDF: false}
        }).save();
      }
    </script>

    <!-- print button -->
    <script>
      function myFunction() {
          window.print();
      }
    </script>

  </body>
</html>