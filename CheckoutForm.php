<!DOCTYPE html>
<html>
  <title>Checkout</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <script src="jss/uikit-icons.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/util.js"></script>
  <script src="js/jquery.exzoom.js"></script>
  <script src="js/jquery.steps.js"></script>
  <script src="js/script.js"></script>

  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/uikit.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.exzoom.css">
  <link rel="stylesheet" type="text/css "href="css/file.css">
  <link rel="stylesheet" type="text/css "href="css/jquery.steps.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <style>
  * {
    box-sizing: border-box;
  }

  body {
    background-color: #f1f1f1;
  }

  #regForm {
    background-color: #ffffff;
    
    font-family: Raleway;
    padding: 40px;
    
    min-width: 300px;
  }


    
  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }

  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }



  button:hover {
    opacity: 0.8;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
      width: 15px;
      margin: 0 4px;
      background-color: #ec971f;
      border: none;
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
  }

  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #ec971f99;
  }
  </style>
  <body>
    <?php
      include("include/header.php");
    ?>
    <div class="row">
      <div class="col-md-9" style="margin-top: 40px;">
        <form id="regForm"action="CheckoutForm.php" method="post">
          <h2 style="text-align: center;">FINALISATION DE LA COMMANDE</h2>
          <!-- One "tab" for each step in the form: -->
          <div class="tab">
            
            <h4>Information de livraison</h4>
            <div class="form-group">
              <label for="fname"><i class="fa fa-user"></i>Nom et Prénom</label>
                    <input type="text" id="fname" name="firstname" class="form-control" placeholder="John M. Doe">
            </div>
            
            <div class="form-group">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="john@example.com">
            </div>

            <div class="form-group">
              <label for="adr"><i class="fa fa-address-card-o"></i> Addresse</label>
                    <input type="text" id="adr" name="address" class="form-control" placeholder="542 W. 15th Street">
            </div>
            
            <div class="form-group">
              <label for="city"><i class="fa fa-institution"></i> Ville</label>
                    <input type="text" id="city" name="city" class="form-control" placeholder="New York">
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="state">Region</label>
                          <input type="text" id="state" name="state" class="form-control" placeholder="NY">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="zip">Code Postale</label>
                          <input type="text" id="zip" name="zip" class="form-control" placeholder="10001">  
                </div>
              </div>                
            </div>
                  
          </div>
          <div class="tab">
        
            <h3>Payement</h3>

            <div class="form-group">
            <center>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container" style="margin-bottom: 20px;padding: 7px 0;font-size: 24px;">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
            </center>
          
            </div>

            <div class="form-group">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" class="form-control" placeholder="John More Doe">
            </div>

            <div class="form-group">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" class="form-control" placeholder="1111-2222-3333-4444">
            </div>

            <div class="form-group">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" class="form-control" placeholder="September">
            </div>

            <div class="row"> 
            <div class="col-md-6">
              <div class="form-group">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear"  class="form-control" name="expyear" placeholder="2018">
              </div>
            </div>
          
            <div class="col-md-6">
              <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv"  class="form-control" name="cvv" placeholder="352">
              </div>
            </div>
            </div>

          </div>
        
          <div style="overflow:auto;">

            <div style="float:right;">
              <button style="background-color: #ec971f;color: #ffffff;border: none;font-size: 17px;font-family: Raleway;cursor: pointer;padding: 15px 30px;" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button style="background-color: #ec971f;color: #ffffff;border: none;font-size: 17px;font-family: Raleway;cursor: pointer;padding: 15px 30px;" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
          
          </div>
          <!-- Circles which indicates the steps of the form: -->        
        </form>
      </div>
      
      <div class="col-md-3">
          <div id="order-summary" class="box" style="padding: 40px;margin-top: 40px;">
            <div class="box-hearder">
              <h3>Votre Commande</h3>
            </div>
            
            <h4>Panier <span class="price" style=" float: right;color: grey;color:black"><i class="fa fa-shopping-cart"></i> <b>3</b></span></h4>
              <p><a href="#">Produit1</a> <span class="price">150 DH</span></p>
              <p><a href="#">Produit1</a> <span class="price">150 DH</span></p>
              <p><a href="#">Produit1</a> <span class="price">150 DH</span></p>

              <hr style="border: 1px solid lightgrey;">
              <p>Total <span class="price" style="color:black"><b>750 DH</b></span></p>
          </div>  
      </div>
    </div>
    
    <?php
    include("include/footer.php");
    ?>

    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
    </script>

  </body>
</html>
