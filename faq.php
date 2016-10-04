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

        <p><b>How to flash a Rom properly?</b></p>
        <ul>
          <li>backup all important files (e.g. contacts) and store them on your MicroSD-Card or on your PC/Laptop</li>
          <li>copy the rom and gapps you like to install to your MicroSD-Card (make sure Gapps match the Android version of the Rom!)</li>
          <li>boot into your custom recovery</li>
          <li>make a backup of your current running rom and store it on your MicroSD-Card or on your PC/Laptop (some of the following are named slight different depending on the recovery you use)</li>
          <ul>
            <li>wipe cache</li>
            <li>wipe dalvic cache</li>
            <li>wipe/format system</li>
            <li>wipe/format data</li>
            <li>reboot your recovery once!</li>
            <li>flash rom</li>
            <li>flash gapps</li>
            <li>reboot and give your device some time to do it's first boot!</li>
          </ul>
          <a href="./faq/faq_twrp.php" class="btn btn-raised btn-primary btn-block" id="btn">Tutorial with screenshots</a>
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
        <p><b>What's the difference between the "old" and the "new" kernel source you are using?</b></p>
        <ul>
          <p>First of all: the biggest part of our new kernel was done by Ziyan @ XDA-Developers. The kernel is the heart of our roms. Some words about "new" kernel:</p>
          <ul>
            <li>based on official <a href="http://git.omapzoom.org/?p=kernel/omap.git;a=shortlog;h=refs/heads/p-android-omap-3.0-dev">omap4 kernel source (p-android-omap-3.0-dev branch)</a></li>
            <li>merged Stable 3.0.101 kernel source <a href="https://kernel.googlesource.com/pub/scm/linux/kernel/git/stable/linux-stable/+/linux-3.0.y">linux-stable/linux-3.0.y</a></li>
            <li>full commit history</li>
            <li>BCMDHD updated to 1.88.45 from 3.4 Kernel source (<b>Note:</b> The Samsung BCMDHD used to read the factory MAC address from /efs. Accessing the filesystem in-kernel is a very bad practice, but what can we expect from Samsung? We now calculate the MAC address based on the SoC Die ID: this is unique for all devices, and ensures that the same device will always have the same MAC address, not a randomly generated one.)</li>
            <li>last_kmsg support</li>
            <li>big debloat before adding Tab2 specific driver, boardfiles, etc. on top of the "new" kernel</li>
            <li>use dynamic tiler allocations (more free ram available)</li>
            <li>auto detect tab2 variant on boot (read out lcd_panel_id command line parameter from our bootloader to detect the board type)</li>
            <li>added a property (/sys/board_properties/type) to show the board type, used by userspace drivers to configure stuff accordingly</li>
            <div class="alert alert-primary">
              <div class="alert-icon">
                <i class="material-icons">info</i>
              </div>
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <b>Note:</b>
              <p>Some rom changes depend on this property (e.g load proper sensor driver, audio config etc.) - old custom kernel don't use the porperty and will cause issues on those roms!</p>
            </div>
            <li>One kernel source for all Android Versions (4.4 and newer, only different defconfig for 4.4 Roms)</li>
          </ul>
          <p>We now use the new kernel on all of our roms (Android 5.1 an newer, but we also switched to it on some of the official 4.4 Roms like CM 11.0). <a href="https://github.com/OMAP4-AOSP/android_kernel_samsung_espresso/commits/stable">Kernel Source can be found here</a> , <a href="https://github.com/OMAP4-AOSP/android_kernel_samsung_espresso/commits/history">History from cleanup and update here</a>.</p>
        </ul>
        <br />
        <hr />
        <p><b>How to change the bootlogo of my Galaxy Tab2?</b></p>
        <ul>
          <p>There's a great tutorial by Ketut Kumajaya which i have slight updated and added</p>
          <a href="./faq/faq_bootlogo.php" class="btn btn-raised btn-primary btn-block" id="btn">The Tutorial can be found here.</a>
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
