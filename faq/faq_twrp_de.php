<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../include/head.html') ?>
    <title>Custom Rom Development by Android-Andi @ XDA</title>
    
  </head>
  <body id="page-top" class="single">
    <?php include('../include/nav.html') ?>
    
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../faq.php">FAQ</a></li>
        <li class="active">Tutorial</li>
      </ul>
      <div class="jumbotron">
        <h2>How to wipe in TWRP properly?</h2>
        <br />
        <p><b>1.</b> After TWRP booted click on "Wipe"</p>
        <img src="../res/twrp/1.png" class="img-responsive" />
        <br />
        <p><b>2.</b> Click on "Format Data"</p>
        <img src="../res/twrp/2.png" class="img-responsive" />
        <br />
        <div class="alert alert-primary">
          <div class="alert-icon">
            <i class="material-icons">warning</i>
          </div>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b>Warning!</b>
          Format Data will format your internal Storage! Make sure you have made a backup of important data! <b>This can't be undone!</b>
          <br />
          <b>Note:</b> This step is needed to use encryption on your internal storage, "Format Data" will keep some space for the "footer" which is needed by encryption!
        </div>
        <br />
        <p><b>3.</b> Type "yes" and confirm format action</p>
        <img src="../res/twrp/3.png" class="img-responsive" />
        <br />
        <p><b>4.</b> Once format data is done click on the "Back" button.</p>
        <br />
        <img src="../res/twrp/4.png" class="img-responsive" />
        <br />
        <p><b>5.</b> Now click on "Advanced Wipe"</p>
        <img src="../res/twrp/5.png" class="img-responsive" />
        <br />
        <p><b>6.</b> Check</p>
        <ul>
          <li>Dalvic / ART Cache</li>
          <li>System</li>
          <li>Cache</li>
        </ul>
        <br />
        <img src="../res/twrp/6.png" class="img-responsive" />
        <br />
        <p><b>7.</b> Swipe to confirm wipe action</p>
        <br />
        <p><b>8.</b> Once wipe is done, click on the back button to go back to TWRPs main screen. Click on the "Reboot" button.</p>
        <img src="../res/twrp/7.png" class="img-responsive" />
        <br />
        <p><b>9.</b> Click on "Recovery", after that Swipe to reboot.</p>
        <img src="../res/twrp/8.png" class="img-responsive" />
        <br />
        <img src="../res/twrp/9.png" class="img-responsive" />
        <br />
        <p><b>10.</b> Done! Wait until your device rebooted into recovery, now you can flash any rom (made for your device) you like.</p>
        <br />
        <br />

        <a href="../faq_de.php" class="btn btn-raised btn-primary"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back to FAQ</a>
      </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <p class="text-muted"><a href="https://github.com/andi34" target="_blank">Android-Andi</a> &copy; 2016</p>
        </div>
    </footer>
  
    <?php include('../include/footer.html') ?>
      
  </body>
</html>
