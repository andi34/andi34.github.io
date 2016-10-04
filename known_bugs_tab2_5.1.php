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
          <h1 class="heading">Known bugs Android 5.1 - Galaxy Tab 2</h1>
      </div>
    </div>

    <div class="container">
      <div class="jumbotron">
        <p>WIP - Needs update - feel free to <a href="https://github.com/andi34/andi34.github.io">help</a>.</p>
        <br />
        <p><b>General Android 5.1 bugs</b></p>
        <ul>
          <p>Audio stuttering on some games:</p>
            <ul>
              <li>To fix it you will have to use a root explorer and delete system/etc/permissions/android.hardware.audio.low_latency.xml (well, this isn't a proper fix but a good workaround until
                  it is fixed properly</li>
            </ul>
        </ul>
        <br />

        <p><b>CyanogenMod 12.1</b></p>
        <ul>
          <p>Chromecast not working</p>
            <ul>
              <li>There is no fix for it at the moment, something CyanogenMod merged broke it (works fine on Omni 5.1 and AOSP 5.1)</li>
            </ul>
        </ul>
        <br />

        <p><b>OmniRom 5.1</b></p>
        <ul>
          <p>- needs to be added -</p>
        </ul>
        <br />

        <p><b>SlimLP</b></p>
        <ul>
          <p>Chromecast not working</p>
            <ul>
              <li>There is no fix for it at the moment, something SlimRoms merged broke it (works fine on Omni 5.1 and AOSP 5.1)</li>
            </ul>
          <br />
        </ul>
      </div>
    </div>
      
    <?php include('include/footer.html') ?>
      
  </body>
</html>
