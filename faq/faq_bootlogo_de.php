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
        <li><a href="../faq_de.php">FAQ</a></li>
        <li class="active">Tutorial</li>
      </ul>
      <div class="jumbotron">
        <h2>Modify Samsung Galaxy Tab 2 Boot Logo</h2>
        <p>Inital tutorial by <a href="http://forum.xda-developers.com/showthread.php?t=1898377">Ketut P. Kumajaya</a>, slight updated (also made the extract-script work again).</p>
        <br />
        <p><b>1.</b> Ueber die App "Terminal Emulator" oder mit "adb shell" erstellt ihr euch ein Abbild eurer originalen param.lfs (sitzt auf folgender Patition: /dev/block/mmcblk0p4)</p>
        <pre><code>su
        <br />cat /dev/block/mmcblk0p4 > /sdcard/mmcblk0p4.lfs</code></pre>
        <br />
        <p><b>2.</b> Nun kopiert ihr eure param.lfs (mmcblk0p4.lfs) auf euren PC (am Besten schiebt ihr eine Kopie davon noch an eine andere Stelle, sicher ist sicher). Alternativ kann es natuerlich per "adb pull" vom Tab geholt werden.</p>
        <pre><code>adb pull /sdcard/mmcblk0p4.lfs</code></pre>
        <br />
        <p><b>3.</b> Nun laded ihr euch das <a href="http://forum.xda-developers.com/attachment.php?attachmentid=3843436&d=1471291845">param-tools-new.zip</a> herunter und entpackt es.</p>
        <pre><code>unzip param-tools-new.zip</code></pre>
        <br />
        <p><b>4.</b> Nun kopiert ihr eure param.lfs ("mmcblk0p4.lfs") in den "param-tools"-Ordner und erstellt einen neuen Ordner als Arbeitsbereich in den ihr wechselt:</p>
        <pre><code>cd param-tools
        <br />mkdir work
        <br />cd work</code></pre>
        <br />
        <p><b>5.</b> Jetzt muessen wir alle jpg-Bilder aus der param.lfs entpacken, hierzu gebt ihr im Terminal folgendes ein:</p>
        <pre><code>../extract-jpg.sh ../mmcblk0p4.lfs</code></pre>
        <br />
        <p><b>6.</b>  Nun erstellt ihr euer eigenes Bootlogo, die Datei-Groesse darf allerdings die der Original jpg-Dateien nicht ueberschreiten! (Oder nutzt die <a href="http://forum.xda-developers.com/attachment.php?attachmentid=3843437&d=1471291849">Beispiele von Ketut Kumajaya</a>)</p>
        <br />
        <p><b>7.</b> Im Ordner "work" habt ihr nun saemtliche jpg Dateien. Sucht euch das Original Bootlog, 7 und 10.1 Zoll und speichert es an sicherer Stelle.</p>
        <br />
        <p><b>8.</b> Nun fuegt euer neues Bootlogo ein, kontrolliert nochmal, dass ihr sie auch richtig benannt habt!</p>
        <div class="alert alert-primary">
          <div class="alert-icon">
            <i class="material-icons">warning</i>
          </div>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b>Achtung!</b>
           Je nach param.lfs sind es die Dateien "5.jpg" und "8.jpg", kann aber auch "11.jpg" und "15.jpg" sein"</b>
        </div>
        <br />
        <p><b>9.</b> Fertig? Ok, nun packen wir die jpg-Dateien wieder zurueck in unser param.lfs (mmcblk0p4.lfs) und geben ihm gleich einen neuen Namen.</p>
        <pre><code>../inject-jpg.sh ../mmcblk0p4.lfs ../mmcblk0p4-new.lfs</code></pre>
        <br />
        <p><b>10.</b> Hat alles geklappt? Das ueberpruefen wir, indem wir unser neues param.lfs entpacken, wie oben schon, nur das wir diesmal eine andere Quelle haben (../mmcblk0p4-new.lfs anstatt ../mmcblk0p4.lfs).</p>
        <p>Schaut nach, ob eure Bootlogo jpg Dateien enthalten sind, wenn nicht, dann ist etwas schief gegangen (Dateien groesser als Original?)</p>
        <pre><code>../extract-jpg.sh ../mmcblk0p4-new.lfs</code></pre>
        <br />
        <p><b>11.</b> Sind die Bootlogo-Dateien da, die ihr eingefuegt hattet, dann koennt ihr nun die neue param.lfs auf die SD-Karte eures Geraetes schieben, oder aber auch per "adb push".</p>
        <pre><code>adb push mmcblk0p4-new.lfs /sdcard/mmcblk0p4-new.lfs</code></pre>
        <br />
        <p><b>12.</b> Mit dem Terminal Emulator oder per "adb shell" koennt ihr nun euer neues param.lfs auf euer Geraet (auf /dev/block/mmcblk0p4) einspielen. Danach einmal ins Recovery booten!</p>
        <pre><code>su
        <br />cat /sdcard/mmcblk0p4-new.lfs > /dev/block/mmcblk0p4
        <br />reboot recovery</code></pre>
        <div class="alert alert-primary">
          <div class="alert-icon">
            <i class="material-icons">warning</i>
          </div>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b>Warning!</b>
          Reboot ins Recovery ist notwendig, um USB-Verbindungsprobleme zu vermeiden!</b>
        </div>
        <br />
        <p><b>13.</b> Herzlichen Glueckwunsch! Euer neues Bootlogo sollte euch nun beim Starten des Tabs begruessen!</p>
        <img src="../res/bootlogo/final_result.jpg" class="img-responsive" />
        <br />
        <br />

        <a href="../faq_de.php" class="btn btn-raised btn-primary"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back to FAQ</a>
      </div>
    </div>
    
    <?php include('../include/footer.html') ?>
      
  </body>
</html>
