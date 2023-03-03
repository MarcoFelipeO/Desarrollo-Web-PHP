<?php
require 'vendor/autoload.php';
$access_token = '';
MercadoPago\SDK::setAccessToken('TEST-7305492594771839-062718-947218cdcc116d282fd3aeea39f7eda9-161142146');

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->id = '1';
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 10000;
$item->currency_id = "CLP";


$preference->items = array($item);
$preference->save();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/style_MP.css" rel="stylesheet">
  <script src="https://sdk.mercadopago.com/js/v2"></script>

</head>

<body>
  <center>
    <div class="checkout-btn"></div>
    <script>
      // Agrega credenciales de SDK
      var public_key = 'TEST-25bb443e-95c5-4344-b511-63d743e91c55';
      const mp = new MercadoPago(public_key, {
        locale: "es-CL",
      });

      // Inicializa el checkout
      mp.checkout({
        preference: {
          id: '<?php echo $preference->id; ?>'
        },
        render: {
          container: '.checkout-btn',
          label: 'Pagar',
        }
      });
    </script>
    </div>
  </center>
</body>

</html>