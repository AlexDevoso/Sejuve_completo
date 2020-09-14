<?php

if (isset($_SESSION['login'][1])) {
	?>
<div aria-live="polite" aria-atomic="true" style="">
  <!-- Position it -->
  <div  style="position: absolute; top: 50; right: 10;">

   
    <div class="toast shadow"  role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
      <div class="toast-header">
        <strong class="mr-auto">Sejuve</strong>
        <small class="text-muted">
<script type="text/javascript">
function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
document.getElementById('txt').innerHTML=h+":"+m;
setTimeout('time()',50000);
}
</script>
</head>
<body onload="time()">
<div id="txt"></div></small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
         <img width="10" src="../imagens/sistema/toast/close.png">
        </button>
      </div>
      <div class="toast-body">
        <img src="../imagens/sistema/toast/success.png" class="" alt="...">
              <?php
    $a = $_SESSION['login'][1];
    echo $a;
	
?>
      </div>
    </div>
  </div>
</div>
</body>



    

	
	<?php
}
	$_SESSION['login'][1] = null;

?>

<?php
  if(isset($_SESSION['login'][2])){
 ?>


<div aria-live="polite" aria-atomic="true" style="">
  <!-- Position it -->
  <div style="position: absolute; top: 50; right: 10;">

   
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="50000">
      <div class="toast-header">
        
        <strong class="mr-auto">Sejuve</strong>
        <small class="text-muted"> <script type="text/javascript">
function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
document.getElementById('txt').innerHTML=h+":"+m;
setTimeout('time()',50000);
}
</script>
</head>
<body onload="time()">
<div id="txt"></div> </small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <img width="10" src="../imagens/sistema/toast/close.png">
        </button>
      </div>
      <div class="toast-body">
        <img src="../imagens/sistema/toast/erro.png" class="" alt="...">
              <?php
    $a = $_SESSION['login'][2];
    echo $a;
  
?>
      </div>
    </div>
  </div>
</div>
</body>





<?php

}
  $_SESSION['login'][2] = null;

?>