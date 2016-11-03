<!DOCTYPE html>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function shutdown() {
    $.get("shutdown.php");
    $("#shutdown h2").show();
}
function reboot() {
    $.get("reboot.php");
    $("#reboot h2").show();
  setTimeout(location.reload.bind(location), 120000);
}
function transmission() {
if ( $("#tr_no_r").is(":visible")) 
 {
    $.get("transmission-start.php");
 }
else
  {
    $.get("transmission-stop.php");
  }
  setTimeout(location.reload.bind(location), 60000);
}
</script>

<html>
  <head>
    <title>Raspberry Control</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- styles: should have reset.css first -->
    <link rel="stylesheet" href= "reset.css">
    <link rel="stylesheet" href= "main.css">
  
  </head>
  <body>

  <div id="fullpage">

    <header onclick="window.location.reload();" role="banner" id="header">


    </header>

    <article id="shutdown" onclick="shutdown()" >
    <h1>POWEROFF</h!>
      <h2 style="display:none;" >Shutting Down! </h1>
    </article>

     <article id="reboot" onclick="reboot()" >
     <h1>REBOOT</H1>
      <h2 style="display:none;" >Rebooting Now! </h1>
    </article>

    <footer role="contentinfo" id="footer" onclick="transmission()">

      <?php exec("ps aux | grep -i 'transmission-daemon' | grep -v grep", $pids);
if(empty($pids)) {
        print '<h1><span id="tr_no_r" >not running!</span><span id="tr_r" style="display:none;" >running OK!</span></h1><h2>START SERVICE </H2>';
} else {
        print '<h1><span id="tr_no_r" style="display:none;" >not running!</span><span id="tr_r" >running OK! </span><h1><h2>STOP SERVICE</H2>';
}; ?>


    </footer>

  </div> <!-- end fullpage -->

  <!-- javascript links -->
  
  </body>

</html>
