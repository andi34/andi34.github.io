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
        <h1 class="heading">Custom Rom Development<br />by Android-Andi</h1>
        <p>To make it easy for everyone of us i added a "News" tab to this page. You'll get all important information about latest changes there. This page is still WIP, more to come later. If you find a bug on this page, feel free to help fixing it :), you can <a href="https://github.com/andi34/andi34.github.io" target="_blank">find the source here</a>.</p>
        <a href="https://androidfilehost.com/?w=devices&uid=23329332407587552" target="_blank" class="btn btn-primary" id="btn">To all Downloads</a>
      </div>
    </div>
      
    <div class="alert alert-primary">
      <div class="container">
        <div class="alert-icon">
          <i class="material-icons">warning</i>
        </div>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b>Warning!</b>
        I am not responsible for bricked devices, dead SD cards, thermonuclear war, or you getting fired because the alarm app failed.
        Please do some research if you have any concerns about features included in this Roms & Recoveries before flashing it!
        YOU are choosing to make these modifications, and if you point the finger at me for messing up your device, I will laugh at you.
      </div>
    </div>

    <div class="container">
      <div class="row">
              
        <div class="col-lg-6">
          <h2>Latest Updates</h2>
          <hr />

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

                     </ul>

          <a href="news.php" class="btn btn-primary pull-right btn-simple">All Updates</a>
        </div>
            
        <div class="col-lg-6">
          <h2>Downloads</h2>
          <hr />
                  
          <h3>Samsung Galaxy Tab 2</h3>
          <hr />
          <h4>Roms:</h4>    
          <div class="list-group">
            <a href="roms_tab2_cm.php" class="list-group-item">
              <h4 class="list-group-item-heading">CyanogenMod</h4>
            </a>
            <a href="roms_tab2_omni.php" class="list-group-item">
              <h4 class="list-group-item-heading">OmniRom</h4>
            </a>
            <a href="roms_tab2_slim.php" class="list-group-item">
              <h4 class="list-group-item-heading">SlimRoms</h4>
            </a>
            <a href="roms_tab2_aosp.php" class="list-group-item">
              <h4 class="list-group-item-heading">AOSP</h4>
            </a>
          </div>
          <h4>Extras:</h4>
          <div class="list-group">
            <a href="recoveries_tab2.php" class="list-group-item">
              <h4 class="list-group-item-heading">Recoveries</h4>
            </a>
            <a href="gapps.php" class="list-group-item">
              <h4 class="list-group-item-heading">GApps</h4>
            </a>
          </div>
                  
          <h3>Samsung Galaxy S3 mini</h3>
          <hr/>
          <h4>Roms:</h4>
          <div class="list-group">
            <a href="roms_golden_slim.php" class="list-group-item">
              <h4 class="list-group-item-heading">SlimRoms</h4>
            </a>
          </div>
          <h4>Extras:</h4>
          <div class="list-group">
            <a href="recoveries_golden.php" class="list-group-item">
              <h4 class="list-group-item-heading">Recoveries</h4>
            </a>
            <a href="gapps.php" class="list-group-item">
              <h4 class="list-group-item-heading">GApps</h4>
            </a>
          </div>
        </div>
      </div>
      <hr/>

      <h3><i class="fa fa-share-alt fa-fw" aria-hidden="true"></i> <b>Share this Page:</b></h3>
      <div class="addthis_native_toolbox"></div><br/>

    </div>

    <?php include('include/footer.html') ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-574c7b479f77586f"></script>

  </body>
</html>
