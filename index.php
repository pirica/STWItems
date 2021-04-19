<head>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

<style>
.fortnite-btn {
  	background: linear-gradient(#fefb72, #fefca3);
	font-family: 'Luckiest Guy';
}
  
.fortnite-btn-inner {
  	background: linear-gradient(#ede801, #fefb72);
	transform: skew(-5deg);
	color: #343F65;
}



body{
 background-image: url("background.JPG")
}
</style>
</head>
<body>
<?php include 'nav.php'; ?>
</div>
<div id="130">
<br/>
<br/>
<a href="data130.php"><img style="width: 15%; height: auto;" src="130.JPG"</img></a>
<figcaption style="color: yellow;">5 armi 130</figcaption>
</div>
<button class="fortnite-btn flex items-center justify-center h-32 w-64">
	<span class="fortnite-btn-inner p-3 pt-5 w-11/12 text-5xl truncate">Compra ora</span>
	</button>
<script src="https://www.paypal.com/sdk/js?currency=USD&client-id=AYhdeM09MsZ6UtYCMg1WNDQ2b49eG61bnsMpIYIVJriKtChd0hDAbXmeqvMeqXoBAvGW_zsuR82gEZaZ"></script>
<div style="background-color: green;display: none;" id="transition">Ordine effettuato correttamente, ti contatteremo al più presto!</div>

<div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '0.01'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name);
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
</body>