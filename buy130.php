<head>
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
<?php include 'nav.php'; ?>
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