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
          <h1 class="heading">GApps</h1>
      </div>
    </div>

    <div class="container">
      <div class="jumbotron">
        <p>Please make sure using the right GApps for your Android Version!</p>
        <p>There's different sources of GApps you can use, some examples for you:</p>
        <ul>
          <li><a href="http://forum.xda-developers.com/android/software/app-minimal-gapps-gapps-lp-20150107-1-t2997368">GApps by Deltadroid</a></li>
          <li><a href="http://opengapps.org">Open GApps Project</a>
          <br />
          <a href="http://forum.xda-developers.com/android/software/pa-gapps-continuation-t3098071">Open GApps Project on XDA-Developers</a></li> 
        </ul>
        <p>Please use the XDA Threads if you have problems with the GApps packages or questions about them.</p>
        <div class="alert alert-primary">
          <div class="alert-icon">
            <i class="material-icons">warning</i>
          </div>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Important notes for Android 6.0:</h4>
          <p>Installing GApps tends to be problematic: in order to try to avoid installation issues, be sure to install GApps immediately after installing the ROM, before booting the system for the first time.</p>
          <p><b>Maybe needed (check the gapps xda thread for more information):</b> After the initial bootup finished, be sure to go into Settings -> Apps, and grant every permission to every Google application - most importantly, Google Play services. In the case of an upgrade you also might need to re-install the GApps package, as upgrading wipes /system. You shouldn't need to re-set the permissions afterwards.</p>
          <p><b>One more note:</b> DO NOT set up your Google account until you grant all permissions, otherwise you will be stuck on the initial setup.
        </div>
      </div>
    </div>
      
    <?php include('include/footer.html') ?>
      
  </body>
</html>
