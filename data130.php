<!-- <head>
<style>
body{
	background-image: url("background.JPG")
}
.fortnite-btn {
  	background: linear-gradient(#fefb72, #fefca3);
	font-family: 'Luckiest Guy';
}
  
.fortnite-btn-inner {
  	background: linear-gradient(#ede801, #fefb72);
	transform: skew(-5deg);
	color: #343F65;
}
</style>
<script src="https://www.paypal.com/sdk/js?currency=USD&client-id=AYhdeM09MsZ6UtYCMg1WNDQ2b49eG61bnsMpIYIVJriKtChd0hDAbXmeqvMeqXoBAvGW_zsuR82gEZaZ"></script>
</head>
<body>
<img style="width: 50%; height: auto;" src="130.JPG"</img>
<h4 style="color:yellow; text-align:left;">5 Armi 130 casuali 1.50$</h4>

<div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '1.50'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transazione completata, verrai contattato al piu presto ' + details.payer.name.given_name);
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
</body>
-->

<!DOCTYPE html>
<html>
<head>
    <title>Checkout Card</title>
    <link href='https://www.soengsouy.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="Style.css">
	<style>
	body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
}
h2{
    text-align:left;
}

* {
    box-sizing: border-box;
}

.error {
    color: red;
    border-color: red;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -10px;
}

.col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
}

.col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
}

.col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
}

.col-25,.col-50,.col-75 {
    padding: 0 16px;
}

.container {
    background-color: #FFFFFF;
    padding: 3px 18px 13px 18px;
    border: 1px solid lightgrey;
    border-radius: 3px;
    box-shadow: 0 0 2rem 0 rgba(168, 180, 194, 0.37);
}


input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid rgb(130, 26, 26);
    border-radius: 1px;
}

label {
    margin-bottom: 10px;
    display: block;
}

.icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
}

.btn {
    background-color: #01BAEF;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);

}

.btn:hover {
    background-color: #0CBABA;
}

a {
    color: #2196F3;
}

hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns 
    stack on top of each other instead of next to each other (also change the direction 
    - make the "cart" column go on top) 
*/
@media (max-width: 800px) {
    .row {
        flex-direction: column-reverse;
    }
    .col-25 {
        margin-bottom: 20px;
    }
}
</style>
</head>
<body>



                        <label for="ntel">Numero di Telefono</label>
                        <input type="text" id="ntel" name="ntel" placeholder="+39 3330001112222"required>
                        <label for="namegame">Nome in Gioco</label>
                        <input type="text" id="namegame" name="namegame" placeholder="Jhon"required>
                        </div>
                    </div>
                </div>
                <form method="post" action="buy130.php">
				<textarea>Note aggiuntive</textarea>
				<input type="submit">


</form>
<?php


if($_POST["message"]) {



}


?>
				
            </form>
        </div>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate(
        roles: {

            ntel: {
                required: true,
            },
            namegame: {
                required: true,
           
        },
        messages: {
            namegame:"Per favore, inserisci il tuo nome in gioco*",
            ntel:"Per favore, inserisci il tuo numero di telefono.*"
        },
    });
</script>
</body>
</html>