<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="celestia.css">
    <link rel="stylesheet" href="pfb.css">
    <link rel="stylesheet" href="loader.css">
<title>Stake-Take</title>


 <link href="https://stake-take.com/img/Logo3.svg" alt="Stake-Take" rel="icon" type="image/x-icon">
    <script src="lib/jquery/dist/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>  
 

  
  <body>
  <div id="loader" class="loader" style="display: none;">
    <div class="loading-text">
      <span class="loading-text-words">L</span>
      <span class="loading-text-words">O</span>
      <span class="loading-text-words">A</span>
      <span class="loading-text-words">D</span>
      <span class="loading-text-words">I</span>
      <span class="loading-text-words">N</span>
      <span class="loading-text-words">G</span>
    </div>
  </div>
<main> 
<footer>
<p style="margin-top:130px; margin-bottom: 10px; margin-left: 305px; font-size: 9px;"> Powered by Stake-Take <img src="https://stake-take.com/img/logo.svg" alt="Stake-Take" height="20" width="25"> </p>
    </footer>
<form action="celestia.php" method="POST" >
<h1 style="margin-bottom: 30px;"><span>Namespace</span> ID</h1>

  <input class="tags-input" style="width: 470px;" type="text" name="namespaceID" autocomplete="off" placeholder="Enter namespace ID should be 8 bytes">

  <h1 style="margin-bottom: 25px; margin-top: 30px;"><span>Data</span>  Hex-encoded bytes</h1>

  <input class="tags-input" style="width: 470px; " type="text" name="data" autocomplete="off" placeholder="Enter data is in hex-encoded bytes of the raw message">


  <p><button onclick="showLoader()" style="width: 200px; height: 30px; font-size: 13px; margin-top: 30px;"  class="button-23"><h4 style="margin-top: -10px;" href='celestia.php' onclick="showLoader()" target="another"> Submit Transaction</button></p>
 
</form>


<h1> CELESTIA BLOCKSPACERACE-0 </h1>
    
    <img class="imageThumbnail round" src="	https://stake-take.com/img/Celestia.svg" width="60px;" style="margin-left: 210px; margin-top: 50px;">


</main>

<script>
document.addEventListener("keydown", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    return false;
  }
});

function showLoader() {
  sessionStorage.setItem("loaderShown", "true");
  document.getElementById("loader").style.display = "block";
  window.location.href = "celestia.php";
}


function loadCelestia() {
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        document.getElementById("output").innerHTML = xhr.responseText;
        document.getElementById("loader").style.display = "none";
      } else {
        console.error("Ошибка загрузки страницы celestia.php");
      }
    }
  };

  xhr.open("GET", "celestia.php", true);
  xhr.send();
}

  </script>

</body>

</html>

