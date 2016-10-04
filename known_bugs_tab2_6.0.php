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
          <h1 class="heading">Known bugs Android 6.0 - Galaxy Tab 2</h1>
      </div>
    </div>

    <div class="container">
      <div class="jumbotron">
        <p>WIP - Needs update - feel free to <a href="https://github.com/andi34/andi34.github.io">help</a>.</p>
        <br />
        <p><b>General Android 6.0 bugs</b></p>
        <ul>
          <p>Audio stuttering on some games:</p>
          <ul>
            <li>To fix it you will have to use a root explorer and delete system/etc/permissions/android.hardware.audio.low_latency.xml (well, this isn't a proper fix but a good workaround until it is fixed properly</li>
          </ul>
        </ul>
        <br />
        <p><b>CyanogenMod 13.0</b></p>
        <ul>
          <p>Chromecast not working</p>
          <ul>
            <li>There is no fix for it at the moment, something CyanogenMod merged broke it (works fine on Omni 5.1 and AOSP 5.1)</li>
          </ul>
        </ul>
        <br />
        <p><b>OmniRom 6.0</b></p>
        <br />
        <p><b>Slim6</b></p>
        <ul>
          <p>No "All Apps" button</p>
          <ul>
            <li>SlimLauncher currently has an issue with the "All Apps" button on Tablets, it is missing by default. To add the "All Apps" button longpress on your Homescreen and click on "WIDGETS". Scroll down to "SlimLauncher", touch and hold it to place it on your Homescreen. Now choose "All apps" from the SlimLauncher shortcuts menu. Now you can longpress on the new generated Shortcut to place it in the Launcher Dock to access it from every Homescreen.</li>
          </ul>
        </ul>
        <br />
      </div>
    </div>
      
    <?php include('include/footer.html') ?>
      
  </body>
</html>
