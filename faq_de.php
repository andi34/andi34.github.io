<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('include/head.html') ?>
    <title>Custom Rom Development by Android-Andi @ XDA</title>
    
  </head>
  <body id="page-top">
    <?php include('include/nav.html') ?>

    <div class="jumbotron">
      <div class="container">
          <h1 class="heading">FAQ - Frequently Asked Questions</h1>
      </div>
    </div>
      
    <div class="container">
      <div class="jumbotron">

        <p><b>Wie flashe ich eine Rom richtig?</b></p>
        <ul>
          <li>macht ein Backup von allen wichtigen Daten (z.B. Kontakte) und speichert diese auf eurer MicroSD-Karte oder auf eurem PC/Laptop</li>
          <li>Kopiert die Rom und Gapps die ihr flashen woll auf eure MicroSD-Karte (Die Gapps muessen zur Android-Version passen!!)</li>
          <li>Bootet euer Custom Recovery (z.B. TWRP)</li>
          <li>Macht ein Backup eurer jetzigen Rom auf die MicroSD-Karte, bei Bedarf speichert es auf eurem PC/Laptop</li>
          <ul>
            <li>wipe cache</li>
            <li>wipe dalvic cache</li>
            <li>wipe/format system</li>
            <li>wipe/format data</li>
            <li>Jezte einmal das Recovery neustarten</li>
            <li>Rom flashen</li>
            <li>Gapps flashen</li>
            <li>Reboot! Gebt der Rom ein paar Minuten zum starten, der erste Start kann immer etwas dauern.</li>
          </ul>
          <a href="./faq/faq_twrp.php" class="btn btn-raised btn-primary btn-block" id="btn">Tutorial mit Screenshots</a>
        </ul>
        <br />
        <hr />
        <p><b>What Rom do i use on my Galaxy Tab2?</b></p>
        <ul>
          <li>You can use a device specific rom for your device (discontinued), the Rom name need to match your model.</li>
          <li>
            You can use a unifed Rom for your device.
            <ul>
              <li>GT-P3110, GT-P3113, GT-P5110 and GT-P5113 user: flash "espressowifi" Roms</li>
              <li>GT-P3100 and GT-P5100 user: flash "espresso3g" Roms</li>
            </ul><br />
            <div class="alert alert-primary">
              <div class="alert-icon">
                <i class="material-icons">info</i>
              </div>
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <b>Note:</b>
              Your device get detected automatically on unified builds and loads proper driver and config at boot! You shouldn't notice any difference compared to the device specific builds (only changed romname).
          </div>
        </ul>
        <br />
        <hr />
        <p><b>How to re-calibrate the compass on my Tab 2?</b></p>
        <ul>
          <li>The compass sensor is calculated from the accelerometer and magnetic field sensors. If the values reported by the compass sensor are not right, you can re-calibrate the magnetic field sensor with the following steps:</li>
          <ul>
            <pre><code>adb shell stop geomagneticd
            <br />adb shell rm /data/sensors/yas.cfg
            <br />adb shell rm /data/sensors/yas-backup.cfg
            <br />adb shell start geomagneticd</code></pre>
          </ul>
          <li>Now start an application using the compass sensor. Move the device in every direction, with a rotation around each axis: the device should now be re-calibrated.</li>
        </ul>
        <br />
        <hr />
        <p><b>Rom installation failed on "error 7" in recovery, what can i do?</b></p>
        <p>Best will be to post a recovery.log. There's an option inside your recovery to create one.</p>
        <p>You can get the log to your PC using adb:</p>
        <p>$ adb pull /path/to/log/log.name</p>
        <br />
        <p>If this is not possible for your: tell the whole message you get! There are different "error 7" messages out!</p>
        <ul>
          <li>it could be you used a recovery for a different device (p3100, p3110, p5100 and p5110 had a own recovery in the past!)</li>
          <li>it could be you flashed a file/rom not made for your device</li>
          <li>it could be your recovery is to old (official CWM is to old, a lot of user still use it)</li>
        </ul>
        <br />
        <hr />
        <p><b>How to enable root access?</b></p>
        <p>Custom Roms like CyanogenMod and SlimRoms are pre-rooted by default, you only need to enable it.</p>
        <ul>
          <li>Settings -> About Tablet / About Phone</li>
          <li>7 x tab on the Build number (you'll get a notification that you are a developer now / enabled developer options)</li>
          <li>Settings -> Developer options  -> Root access</li>
          <li>set root access to "Apps and ADB"</li>
        </ul>
          <div class="alert alert-primary">
            <div class="alert-icon">
              <i class="material-icons">info</i>
            </div>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Note:</b>
            OmniRom and AOSP aren't pre-rooted, you need to use <a href="http://forum.xda-developers.com/showthread.php?t=1538053">SuperSu</a> or the <a href="http://forum.xda-developers.com/android/software-hacking/wip-selinux-capable-superuser-t3216394">OpenSource SuperUser</a> to get rooted.
          </div>
        <br />
        <hr />
        <p><b>How do i get proper logs?</b></p>
        <p>Well, there are some apps out (e.g. Syslog App) which can help getting usefull logs, but i prefer using adb to get those logs:
        <ul>
          <li>Logcat:</li>
            <pre><code>adb shell logcat > logcat.txt</code></pre>
            <p>(abort/stop logging pressing <kbd><kbd>ctrl</kbd> + <kbd>c</kbd></kbd> on your keyboard)</p>
          <li>Radio Logcat:</li>
            <pre><code>adb logcat -b radio -v time -d > logcat_radio.log</code></pre>
          <li>Dmesg:</li>
            <pre><code>adb shell dmesg > dmesg.txt</code></pre>
          <li>last_kmsg:</li>
            <pre><code>adb shell su -c "cat /proc/last_kmsg" > last_kmsg.txt</code></pre>
          <li>audit.log:</li>
            <p>(make sure root is enabled!)</p>
            <pre><code>adb root
            <br />adb pull /data/misc/audit/audit.log</code></pre>
        </ul>
        <br />
        <hr />
        <p><b>Was ist der Unterschied zwischen dem "alten" und "neuen" Kernel Quellcode den Ihr nutzt??</b></p>
        <ul>
          <p>Vorweg: Die meiste Arbeit hat Ziyan @ XDA-Developers erledigt. Der Kernel ist das Herz unserer Roms. Ein Paar Worte zum "neuen" Kernel:</p>
          <ul>
            <li>Basiert auf dem offiziellem <a href="http://git.omapzoom.org/?p=kernel/omap.git;a=shortlog;h=refs/heads/p-android-omap-3.0-dev">OMAP4 Kernel Quellcode (p-android-omap-3.0-dev branch)</a></li>
            <li>Update auf 3.0.101 <a href="https://kernel.googlesource.com/pub/scm/linux/kernel/git/stable/linux-stable/+/linux-3.0.y">linux-stable/linux-3.0.y</a></li>
            <li>Komplette Aenderungs-Historie</li>
            <li>BCMDHD Update auf 1.88.45 vom 3.4 Kernel(<b>Info:</b> Samsungs BCMDHD hat vorher die Mac Adresse aus /efs ausgelesen. Aus Sicht der Sicherheit eine sehr sehr schlechte Sache, dass ein Kernel diese Rechte auf das Dateisystem hat. Was anderes von Samsung erwartet? Die Mac adresse wird jetzt auf Basis des SOC erstellt und sollte genauso einmalig sein.)</li>
            <li>last_kmsg Support</li>
            <li>Samsungs Source entmuellt bevor die Treiber etc. hinzugefuegt wurden</li>
            <li>dynamic tiler allocations (mehr freier Ram verfuegbar)</li>
            <li>Die Tab2 Variante wird beim Starten automatisch erkannt (Der lcd_panel_id command line parameter aus dem Bootloader wird ausgelesen um das richtige Geraet zu erkennen)</li>
            <li>Neues property (/sys/board_properties/type) um den Board Typ anzuzeigen</li>
            <div class="alert alert-primary">
              <div class="alert-icon">
                <i class="material-icons">info</i>
              </div>
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <b>Info:</b>
              <p>Machne Aenderungen basieren auf diesem "property" (z.B. um die richtigen Sensor Treiber oder Audio-Config fuer euer Geraet zu laden) - Aeltere Roms nutzen dies nicht, deshalb kann es zu Problemen kommen, wenn ihr alte Custom Kernel auf den neuen Roms nutzt!</p>
            </div>
            <li>Ein Kernel Quellcode fuer alle Android Versions (4.4 und neuer, 4.4 Roms nutzen jedoch eine eigene defconfig)</li>
          </ul>
          <p>Wir nutzen den "neuen" auf allen unserern Roms (Android 5.1 und neuer, aber auch auf manchen alten offiziellen 4.4 Roms wie z.B. CM 11.0). <a href="https://github.com/OMAP4-AOSP/android_kernel_samsung_espresso/commits/stable">Den Kernel Quellcode findet ihr hier</a> , <a href="https://github.com/OMAP4-AOSP/android_kernel_samsung_espresso/commits/history">Historie vom "entmuellen" hier</a>.</p>
        </ul>
        <br />
        <hr />
        <p><b>Wie kann ich das Einschalt Logo/Bild auf meinem Galaxy Tab2 ändern?</b></p>
        <ul>
          <p>Es gibt ein schoenes Tutorial von Ketut Kumajaya, welches ich uebersetzt, aktualisiert und hier bereit stelle.</p>
          <a href="./faq/faq_bootlogo_de.php" class="btn btn-raised btn-primary btn-block" id="btn">Das Tutorial findet ihr hier.</a>
        </ul>
        <br />
        <hr />
        <b>I can't change my rom, wipe / format doesn't work. Nothing changed after flashing with Odin.</b></p>
        <p>16 GB Tab 2 have a known faulty EMMC (MAG2GA). It can happen, that your EMMC get "read only", so you can't perform any write actions (also you can't format) anymore.</p>
        <ul>
          <p>From the EMMC data sheet:</p>
          <p><i><b>5.1.7 End of Life Management:</b></p>
          <p>The end of device life time is defined when there is no more available reserved block for bad block management in the device. When the device reaches to end of its life time, device shall change its state to permanent write protection state. In this case, write operation is not allowed any more but read operation are still allowed.</b></p>
          <p>But, reliability of the operation can not be guaranteed after end of life.</b></p></i>
        </ul>
        <p>On a faulty EMMC firmware it happens a lot faster.</p>
        <p><b>What are the symptoms?</b></p>
        <ul>
          <li>Uninstalled apps and deleted files are back after a reboot</li>
          <li>Formating the storage doesn't work (after reboot the old rom and apps are back)</li>
          <li>You can flash whatever you like via Odin - it showes "passed" but after reboot nothing changed (e.g. still no StockRom or still the old Recovery you had previously installed) </li>
          <li>... there might be some more, but only to mention some ...</li>
        </ul>
        <p>In most cases, the issue can be fixed by a EMMC firmware update, but you need someone who's able to do it (possible via ISP, nothing you can do esylie at home yourself). In some bad cases you need to find someone who can replace your EMMC.</p>
        <br />
      </div>
    </div>
      
    <?php include('include/footer.html') ?>
      
  </body>
</html>
