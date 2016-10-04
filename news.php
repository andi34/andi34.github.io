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
        <h1 class="heading">News</h1>
      </div>
    </div>
      
    <div class="container">
      <div class="jumbotron">

         <p><b>25.09.2016</b></p>
         <ul>
           <p><b>Galaxy Tab2</b></p>
           <p>Kernel Update</p>
           <ul>
             <li>We re-enabled MMC_CAP_ERASE on our kernel source because of following reasons:</li>
             <ul>
               <li>"moviNAND VHX 4.41 DISCARD feature" is (and always was) added to our kernel which should prevent MAG2GA eMMC (used on most 16GB Tab2 devices) from damage (official Samsung patch)</li>
               <li>even with MMC_CAP_ERASE disabled some Tab2 with MAG2GA eMMC got read only (the reason is an issue in the eMMC firmware - besides MAG2GA eMMC is faulty/bad by default)</li>
               <li>without TRIM emmc lifetime is shorter, it's now possible again on supported eMMC</li>
             </ul>
             <li>Updated P51XX Touch Firmware</li>
           </ul>
           <br />
           <p>What Roms include those changes?</p>
           <ul>
             <li>all builds and recoveries since 24.09.2016</li>
           </ul>
           <br />
           <p><b>NOTE:</b> You might need to use TWRP 3.0.2-6 (uploaded already) to flash the new roms, on Android 4 and 6 old recoveries might work (but better update too).</p>
           <br />
        </ul>

        <p><b>20.09.2016</b></p>
        <ul>
          <p><b>Galaxy Tab2</b></p>
          <p>espresso-common TWRP 3.0.2-5</p>
          <ul>
            <li>Official changes until <a href="https://github.com/omnirom/android_bootable_recovery/commits/99af7666682234f0a75f9ee7d0005c0535704e92" target="_blank">99af766 head</a> from OmniRoms TWRP source (android-7.0 branch)</a></li>
            <li>Support eMMC 4.5. In the past our "new" kernel did not support eMMC 4.5 (some people seem to have newer EMMC). On TWRP it wasn't possible to wipe or flash any files on devices with newer EMMC.</li>
          </ul>
          <br />
          <p>CM 13 update for espressowifi and espresso3g</p>
          <ul>
            <li>Support eMMC 4.5. In the past our "new" kernel did not support eMMC 4.5 (some people seem to have newer EMMC) - that's why some people haven't been able to boot latest builds and got a black screen only.</li>
          </ul>
          <br />
        </ul>

        <p><b>18.09.2016</b></p>
        <ul>
          <p><b>Galaxy Tab2</b></p>
          <p>CM 11 update for espressowifi and espresso3g (no device specific builds)</p>
          <ul>
            <li>Fixed slow bootanimation</li>
            <li>Fixed GPS</li>
          </ul>
          <br />
        </ul>

        <p><b>06.09.2016</b></p>
        <ul>
          <p>espresso-common TWRP 3.0.2-4</p>
          <ul>
            <li>Official changes until <a href="https://github.com/omnirom/android_bootable_recovery/commits/724c5148a5bf341479bf943b0c64ce8d40814148" target="_blank">724c514 head</a> from OmniRoms TWRP source (android-7.0 branch)</a></li>
          </ul>
          <br />
        </ul>

        <p><b>24.08.2016</b></p>
        <ul>
          <p><b>Galaxy Tab2</b></p>
          <p>Notes about latest official CM11 nightly update</p>
          <ul>
            <li>Clean flash might be required because of the following changes:</li>
            <ul>
              <li>a lot of device specific updates (e.g. a lot of OpenSource blobs we already use on Android 5.1 and newer)</li>
              <li>kernel source got replaced with our omap based OpenSource kernel (full change history, a lot debloated)</li>
            </ul>
            <li>There might be a tiny delay between the Samsung logo and the bootanimation. This happens because we disabled the bootloader init (The bootloader init was disabled and the kernel resets everything on boot which is a good thing but delays bootup).  Also your Tab 2 variant get detected by the kernel automatically (read out from bootloader).</li>
            <li>If you have issues to boot your tab after a clean flash, you might need to update your bootloader. I'll provide the files and a tutorial sometimes later this week (maybe next week).</li>
          </ul>
          <br />
        </ul>

        <p><b>14.08.2016</b></p>
        <ul>
          <p><b>espressowifi / espresso3g:</b></p>
          <p>New espresso-common TWRP 3.0.2-3</p>
          <ul>
            <li>Latest TWRP 3 Source</li>
          </ul>
          <br />
          <p><b>golden (GT-I8190):</b></p>
          <p>New TWRP 3.0.2-1</p>
          <ul>
            <li>Latest TWRP 3 Source</li>
            <li>Added "length" on data to keep space for crypto footer. Encryption should work fine now TWRP side (If you have still trouble: it might need some changes on the kernel which comes with your rom).</li>
          </ul>
          <br />
        </ul>
        <p><b>13.08.2016</b></p>
        <ul>
          <p><b>espressowifi / espresso3g:</b></p>
          <p>New unified SlimKat build</p>
          <ul>
            <li>Security updates until 01.08.2016 Android security patch level</li>
          </ul>
          <br />
        </ul>
        <p><b>12.08.2016</b></p>
        <ul>
          <p><b>espressowifi / espresso3g:</b></p>
          <p>Official Slim6 builds started</p>
          <ul>
            <li>Official Slim6 alpha 0.9 available</li>
            <li>Official changelog can be found <a href="https://slimroms.org/">here</a></li>
          </ul>
          <br />
        </ul>
        <p><b>10.08.2016</b></p>
        <ul>
          <p><b>espressowifi / espresso3g:</b></p>
          <p>Slim6 alpha 0.8</p>
          <ul>
            <li>Latest SlimRoms 6 Source</li>
            <li>Official changelog can be found <a href="https://slimroms.org/">here</a></li>
          </ul>
          <br />
          <p>Add "No All Apps button" to known Slim6 bugs and tell how to solve it.</p>
          <br />
          <p><b>S3 mini (I8190):</b></p>
          <p>Initial TWRP 3</p>
          <ul>
            <li>"reboot recovery" option has a small bug, the device reboots ~4 times until it is back in recovery.</li>
          </ul>
          <br />
        </ul>
        <p><b>02.08.2016</b></p>
        <ul>
          <p>Slim6 alpha 0.7</p>
          <ul>
            <li>Latest SlimRoms 6 Source</li>
            <li>Official changelog can be found <a href="https://slimroms.org/">here</a></li>
            <li>Maybe (yes, only maybe) last test build before we can get official weekly support</li>
          </ul>
          <br />
          <p>CM 13</p>
          <ul>
            <li>Latest CyanogenMod 13 Source</li>
          </ul>
          <br />
        </ul>
        <p><b>16.07.2016</b></p>
        <ul>
          <p>Slim6 alpha 0.5</p>
          <ul>
            <li>Latest SlimRoms 6 Source</li>
            <li>Official changelog can be found <a href="https://slimroms.org/">here</a></li>
          </ul>
          <br />
        </ul>
        <p><b>09.07.2016</b></p>
        <ul>
          <p>Multi-Rom Updates for espressowifi and espresso3g</p>
          <ul>
            <li>Slim6 alpha 0.4</li>
            <li>SlimLP</li>
            <li>CM 13.0</li>
            <li>CM 12.1</li>
            <li>Omni 5.1</li>
            <ul>
              <p>What changed?</p>
                <li>latest Rom sources</li>
                <li>device tree cleanup and reorganisation inside the device tree</li>
                <li>Some Kernel changes (clean up the display init sequence without bootloader init)</li>
                <li>
                    Enable dexpreopt with PIC<br />
                    (Our system partitions are relatively large (~1 GB), but our data partitions are relatively small (~4.6 GB on 8 GB variants).<br />
                    In this case, it makes sense to enable WITH_DEXPREOPT_PIC, saving at least 100 MB space on our data partitions.)
                </li>
            </ul>
          </ul>
          <br />
          <p>Note: Omni6 is official now! You can use official nightly builds now!</p>
          <br />
        </ul>
        <p><b>01.07.2016</b></p>
        <ul>
          <p>Initial Slim6 builds for espressowifi and espresso3g</p>
          <ul>
            <li>No "All Apps" button by default. Create a Widget -> SlimLauncher -> choose "All Apps" to solve it</li>
          </ul>
          <br />
          <p>New espresso-common TWRP 3.0.2-2</p>
          <ul>
            <li>Fixed low brightness after screentimeout</li>
          </ul>
          <br />
        </ul>
        <p><b>28.06.2016</b></p>
        <ul>
          <p>New OmniRom 6.0 for espressowifi and espresso3g</p>
          <ul>
            <li>Fixed sensor position on P31XX devices.</li>
            <li>Fixed SIM Pin issues on espresso3g</li>
          </ul>
          <br />
        </ul>
        <p><b>25.06.2016</b></p>
        <ul>
          <p>Initial OmniRom 6.0.1 builds for espressowifi and espresso3g available</p>
          <ul>
            <li>Latest official OmniRom source. Device specific changes are all visisble in OmniRoms device repos.</li>
            <li>
               Currently sensor position isn't set properly on P31xx devices, but it will be fixed on upcoming builds.<br />
               A temporary fix can be found <a href="http://forum.xda-developers.com/showpost.php?p=67475381&postcount=8" target="_blank">here</a>, you simply need to flash it after the Rom from TWRP.
            </li>
            <li>Please note that OmniRom isn't pre-rooted!</li>
            <li>Chromecast should still work on Omni 6.</li>
          </ul>
          <br />
        </ul>
        <p><b>08.06.2016</b></p>
        <ul>
          <p>New CM 13.0 builds for espressowifi and espresso3g available</p>
          <ul>
            <li>Latest CM 13.0 source</li>
            <li>Attempt to fix hotspot</li>
            <li>
               Ziyan fixed the random mac adress:<br />
               The Samsung BCMDHD used to read the factory MAC address from /efs. Accessing the filesystem in-kernel is a very bad practice, but what can we expect from Samsung?<br />
               We now calculate the MAC address based on the SoC Die ID: this is unique for all devices, and ensures that the same device will always have the same MAC address, not a randomly generated one.
            </li>
          </ul>
          <br />
        </ul>
        <p><b>17.05.2016</b></p>
        <ul>
          <p>Some updates on http://andi34.github.io</p>
          <ul>
            <li>Add Rom & Recovery Thread links to the rom pages</li>
            <li>Add Rom logos</li>
            <li>Add CWM and PhilZ Touch links for historical reason</li>
            <li>Fixed some small bugs, fixed navbar for better design and mobile view - thanks to <a href="https://github.com/aykut78" target="_blank">aykut78</a></li>
          </ul>
          <br />
        </ul>
        <p><b>16.05.2016</b></p>
        <ul>
          <p>New CM 13.0 builds for espressowifi and espresso3g available</p>
          <ul>
            <li>Latest CM 13.0 source</li>
            <li>Clean flash recommand because we switched to our new kernel for a final public test before it finally replaces our old, bloated kernel.</li>
            <li><b>NOTE:</b> Booting takes some more time now - there's a delay for up to 10 sec. betweeen the samsung logo and bootanimation (The bootloader init was disabled and the kernel resets everything on boot which is a good thing but delays bootup.)</li>
            <li>Many thanks to XDA's Ziyan for the new kernel! He did the main part of it! (We worked together on it for almost 9 months now - where is the time?!)</li>
            <li>Kernel source will be available on CM's github after this public test to be sure everything works as it should - please respect that the source won't be public before</li>
            <li>Found a bug? Attach a logcat and dmesg on XDA.</li>
          </ul>
          <br />
        </ul>
        <p><b>14.05.2016</b></p>
        <ul>
          <p>espresso-common TWRP 3.0.2-1</p>
          <ul>
            <li>Official changes until <a href="https://github.com/omnirom/android_bootable_recovery/commits/72c87ce3472380ad16267be958923c1d2635dc93" target="_blank">72c87ce head</a> from OmniRoms TWRP source</a></li>
            <li>New kernel with last_kmsg support. <br /><b>NOTE:</b> Booting TWRP takes some more time now. The bootloader init was disabled and the kernel resets everything on boot which is a good thing but delays bootup.</li>
          </ul>
          <br />
        </ul>
        <p><b>11.04.2016</b></p>
        <ul>
          <p>New SlimKat for Samsung S3 mini (GT-I8190) uploaded.
          <br />Includes a bunch of CVE fixes. Enjoy!</p>
          <br />
        </ul>
        <p><b>05.04.2016</b></p>
        <ul>
          <p>Updated TWRP for Samsung Galaxy Tab2 to v3.0.2-0 (Common TWRP).
          <br />Fixes encryption/decryption and some small other updates.</p>
          <br />
        </ul>
        <p><b>03.04.2016</b></p>
        <ul>
          <p>New CM 13 builds for espressowifi and espresso3g uploaded, no device specific changes, only CyanogenMod upstream.
          <br />For changes please check <a href="http://review.cyanogenmod.org/#/q/status:merged" target="_blank">CyanogenMods Gerrit</a></p>
          <br />
          <p>New SlimLP for S3 mini (i8190) uploaded, based on latest official Source, Global Menu added on top of it.
          <br />Videorecording still half broken, only works if you don't record Audio (you can use OpenCamera in that case).</p>
          <br />
          <p>Added my work on S3 mini (i8190) on this page too.</p>
          <br />
        </ul>
        <p><b>02.04.2016</b></p>
        <ul>
          <p>Reworked my github userpage, special thanks to Ziyan!</p>
          <p>Added Known bugs section (much more needs to be added, feel free to help)</p>
          <br />
        </ul>
        <p><b>28.03.2016</b></p>
        <ul>
          <p>Uploaded espresso-common TWRP 3.0.0-2 (updated recovery-kernel for proper last_kmsg support - makes debugging kernel issues much easier).</p>
          <p>I also uploaded some new kernel for latest CM 13 espressowifi and espresso3g builds - please test if you have time!
            <a href="http://forum.xda-developers.com/showpost.php?p=66084616&postcount=711" target="_blank">More information about it here on XDA.</a>
          </p>
          <br />
        </ul>
        <p><b>24.03.2016</b></p>
        <ul>
          <p>CM 12.1 & Omni 5.1 builds and common TWRP are reuploaded (I missed to add a kernel change). Previous 23.03. builds have been removed so you can't download the wrong files anymore.</p>
          <br />
        </ul>
        <p><b>23.03.2016</b></p>
        <ul>
          <p><b>CM 12.1 & Omni 5.1 builds and common TWRP will be reuploaded (I missed to add a kernel change). Current 23.03. builds have been removed. Fixed 23.03. builds and a fixed Common TWRP will be available soon (uploading already).</b></p>
          <br />
          <p>New CM 13 builds available.</p>
          <p>Missed to add "espresso: fade off by default: This fixes orientation glitch on screen-off animation for 7 inch Tab2" - will be fixed on next build.</p>
          <ul>
            <li>libsensors: fix possible null pointer crash</li>
            <li>espresso: set hwrotation on init for 7 inch Tab2 variants</li>
            <li>some updates on kernel commonisation (might fix charging on P5113).</li>
          </ul>
          <br />
          <p>Those Tab2 user who are on "espresso-TWRP" please flash the latest device specific TWRP for your device or use the new Common TWRP to flash latest Roms.</p>
          <ul>
            <li> the "espresso-TWRP" won't be able to flash Roms compiled after 22.03.2016,</li>
            <li>the new "Common TWRP" won't be able to flash Roms compiled before 22.03.2016.</li>
          </ul>
          <p>I am sorry if it confuses some of you, but as i mentioned on 22.03.2016 we would conflict with HTC's "espresso" device if we don't do the renaming.</p>
          <br />
          <p>CM 12.1 & Omni 5.1 builds have been updated:</p>
          <ul>
            <li>libsensors: fix possible null pointer crash</li>
            <li>espresso: fade off by default: This fixes orientation glitch on screen-off animation for 7 inch Tab2.</li>
            <li>espresso: set hwrotation on init for 7 inch Tab2 variants</li>
          </ul>
        </ul>
        <br />
        <p><b>22.03.2016</b></p>
        <ul>
          <p>To avoid conflicts with with HTC's myTouch 3G Slide T-Mobile ("espresso") all upcoming unified builds for GT-P3110, GT-P3113, GT-P5110 and GT-P5113 will be called "espressowifi" instead "espresso".</p>
        </ul>
      </div>
    </div>

    <?php include('include/footer.html') ?>

  </body>
</html>
