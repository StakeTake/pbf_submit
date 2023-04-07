<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <style>
      /* Общие стили */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
   
      }

      .container {
        width: 600px;
        height: 800px;
        margin: 0 auto;
        padding: 20px;
        box-sizing: border-box;
        position: relative;
   
      }

      h1 {
        text-align: center;
      }

       .canvas-container {
        width: 100%;
        height: calc(100% - 40px); /* Вычитаем высоту заголовка и устанавливаем высоту .canvas-container */
        overflow: auto; /* Переносим прокрутку в .canvas-container */
        margin-top: 20px; /* Добавьте отступ сверху для .canvas-container */
      }

    </style>
    <link rel="stylesheet" href="celestia.css">
    <link rel="stylesheet" href="curl.css">
    <title>Output</title>
 <link href="https://stake-take.com/img/Logo3.svg" alt="Stake-Take" rel="icon" type="image/x-icon">
    <script src="lib/jquery/dist/jquery.js"></script>

    <script>
   
     function saveFile(content) {
  var fileName = "transaction_celestia_pfb[by_Stake-Take].json";
  var blob = new Blob([content], {type: "application/json"});
  var link = document.createElement("a");
  link.href = window.URL.createObjectURL(blob);
  link.download = fileName;
  document.body.appendChild(link); 
  link.click();
  document.body.removeChild(link); 
}
    </script>
  </head>

  <body>
     <div class="container">
    <main style="transform: translate(0%, -20%);"> 
 
    <div class="canvas-container" style="height: 580px; overflow: auto; width: 500px; transform: translate(0%, -2%);">
    <div class="tags-input" style=" height: 1320px; width: 1100px;">
    <div style="width: 350px; height: 1280px;">
    <?php 

$download = "No download available";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $namespaceID = $_POST['namespaceID'];
  $data = $_POST['data'];
  
  }

if (isset($namespaceID, $data)) {
  $url = '';
  $data1 = array(
      'namespace_id' => $namespaceID,
      'data' => $data,
      'gas_limit' => 80000,
      'fee' => 2000
  );
  $data_string = json_encode($data1, JSON_PRETTY_PRINT);

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_string)
  ));

  $result = curl_exec($ch);
  

  if(curl_error($ch)) {
    echo 'Hey, you made a mistake in curl. Try again!' . curl_error($ch);
} else {
   
   ?>

      <?php 
      
    echo $download=json_encode(json_decode($result, true),JSON_FORCE_OBJECT | JSON_PRETTY_PRINT); 
  
    ?>
    </div>
</div>
</div>

<div class="canvas-container" style="transform: translate(0%, 0%);">
<h1><span>Output</span> result</h1>
</div>
   <div style="margin-top: 30px; transform: translate(0%, 680%);">
    <a href="data:text/json;charset=utf-8,<?php echo rawurlencode($download); ?>" class="button-23" download="transaction_celestia_pfb[by_Stake-Take].json" style="width: 180px; height: 30px; font-size: 13px; margin-top: 10px; margin-left: 160px; transform: translate(89%, 100%);">
  <h4 style="margin: -10px;">Download JSON</h4>
</a>
<a href="https://stake-take.com/celestia/pfb" class="button-23"  style="width: 180px; height: 30px; font-size: 13px; margin-top: 10px; margin-left: 160px; transform: translate(-89%, -30%);">
  <h4 style="margin: -10px;"> ← Back</h4>
</a>
      <p style="margin-top:0px; margin-bottom: 10px; margin-left: 180px; font-size: 9px;"> Powered by Stake-Take <img src="https://stake-take.com/img/logo.svg" alt="Stake-Take" height="20" width="25" /> </p>
  </div>

<?php

}


  curl_close($ch);
  
}

?>




<script>

 var viewport = $(".scrollar-viewport", scrollar);
var systemscrolls = $(".scrollar-systemscrolls", scrollar);
var correct_h = systemscrolls[0].clientHeight - viewport.height(); 
var correct_w = systemscrolls[0].clientWidth - viewport.width(); 

</script>

<script>
window.addEventListener("DOMContentLoaded", function() {
  if (sessionStorage.getItem("loaderShown") === "true") {
 
    sessionStorage.removeItem("loaderShown");

    window.addEventListener("load", function() {
      const loader = window.opener.document.getElementById("loader");
      if (loader) {
        loader.style.display = "none";
      }
    });
  }
});


</script>

</main>
</div>
  </body> 
</html>
