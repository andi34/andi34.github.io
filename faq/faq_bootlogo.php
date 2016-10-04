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
        <h2>Modify Samsung Galaxy Tab 2 Boot Logo</h2>
        <p>Inital tutorial by <a href="http://forum.xda-developers.com/showthread.php?t=1898377">Ketut P. Kumajaya</a>, slight updated (also made the extract-script work again).</p>
        <br />
        <p><b>1.</b> Over Terminal Emulator or "adb shell", dump your original param.lfs (/dev/block/mmcblk0p4)</p>
        <pre><code>su
        <br />cat /dev/block/mmcblk0p4 > /sdcard/mmcblk0p4.lfs</code></pre>
        <br />
        <p><b>2.</b> Copy your param.lfs (mmcblk0p4.lfs) to your PC or pull it from your device over adb</p>
        <pre><code>adb pull /sdcard/mmcblk0p4.lfs</code></pre>
        <br />
        <p><b>3.</b> Unpack <a href="http://forum.xda-developers.com/attachment.php?attachmentid=3843436&d=1471291845">param-tools-new.zip</a> on your Linux computer or Cygwin environment for Windows user (untested)</p>
        <pre><code>unzip param-tools-new.zip</code></pre>
        <br />
        <p><b>4.</b> Copy your param.lfs to param-tools folder and then create a working folder for manipulate boot logo</p>
        <pre><code>cd param-tools
        <br />mkdir work
        <br />cd work</code></pre>
        <br />
        <p><b>5.</b> Extract all jpg files from param.lfs</p>
        <pre><code>../extract-jpg.sh ../mmcblk0p4.lfs</code></pre>
        <br />
        <p><b>6.</b> Create your own boot logo (or use the <a href="http://forum.xda-developers.com/attachment.php?attachmentid=3843437&d=1471291849">examples from Ketut Kumajaya</a>), the size no larger than the official jpg-files!</p>
        <br />
        <p><b>7.</b> Save the original boot logo</p>
        <br />
        <p><b>8.</b> Replace the original boot logo with your own boot logo</p>
        <div class="alert alert-primary">
          <div class="alert-icon">
            <i class="material-icons">warning</i>
          </div>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b>Warning!</b>
          Depending on your param.lfs the picture names might be different, it could be you have to replace "5.jpg" and "8.jpg" or "11.jpg" and "15.jpg"</b>
        </div>
        <br />
        <p><b>9.</b> Inject your modification back to param.lfs and save it as param-new.lfs</p>
        <pre><code>../inject-jpg.sh ../mmcblk0p4.lfs ../mmcblk0p4-new.lfs</code></pre>
        <br />
        <p><b>10.</b> Confirm your new param.lfs by extracting it (same like on Step 5, only the filename changed), check the resulted image</p>
        <pre><code>../extract-jpg.sh ../mmcblk0p4-new.lfs</code></pre>
        <br />
        <p><b>11.</b> Copy the new param.lfs to your P31xx/P51xx sdcard or push it to your device via adb</p>
        <pre><code>adb push mmcblk0p4-new.lfs /sdcard/mmcblk0p4-new.lfs</code></pre>
        <br />
        <p><b>12.</b> Over Terminal Emulator or "adb shell", copy your new param.lfs to /dev/block/mmcblk0p4. Reboot to recovery once after that.</p>
        <pre><code>su
        <br />cat /sdcard/mmcblk0p4-new.lfs > /dev/block/mmcblk0p4
        <br />reboot recovery</code></pre>
        <div class="alert alert-primary">
          <div class="alert-icon">
            <i class="material-icons">warning</i>
          </div>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b>Warning!</b>
          Reboot into recovery when flash completed to prevent USB connection problems!</b>
        </div>
        <br />
        <p><b>13.</b> Done! Enjoy your new bootlogo!</p>
        <img src="../res/bootlogo/final_result.jpg" class="img-responsive" />
        <br />
        <br />

        <a href="../faq.php" class="btn btn-raised btn-primary"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back to FAQ</a>
      </div>
    </div>
    
    <?php include('../include/footer.html') ?>
      
  </body>
</html>
