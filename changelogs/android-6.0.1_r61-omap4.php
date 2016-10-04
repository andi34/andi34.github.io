<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../include/head.html') ?>
    <title>Custom Rom Development by Android-Andi @ XDA</title>
    
<script>
function show(sectionId) {
	if (document.getElementById(sectionId)) {
		document.getElementById(sectionId+'-show').style.display = 'none';
		document.getElementById(sectionId+'-hide').style.display = 'inline';
		document.getElementById(sectionId).style.display = 'block';
	}
}

function hide(sectionId) {
	if (document.getElementById(sectionId)) {
		document.getElementById(sectionId+'-show').style.display = 'inline';
		document.getElementById(sectionId+'-hide').style.display = 'none';
		document.getElementById(sectionId).style.display = 'none';
	}
}
</script>

  </head>
  <body id="page-top" class="single">
    <?php include('../include/nav.html') ?>
    <div class="container">
      
      <ul class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../changelogs.php">Changelogs for Devs</a></li>
        <li class="active">Android 6.0.1 R61 for OMAP4</li>
      </ul>

      <div class="jumbotron">
        <div class="row">
          <div class="col-md-12">
          <p>This only includes changes on top of the Android Open Source Project source to compile pure AOSP for OMAP4 Devices.
             The raw log was generated using a modified version of <a href="https://groups.google.com/d/msg/android-building/0DtsHawjs4k/And8o3Dni_UJ">this script</a> written by <a href="https://plus.google.com/112218872649456413744/posts">JBQ</a> and improved by <a href="https://plus.google.com/+AlSutton/posts">Al Sutton</a>.</p>

         <p><b>Please do not copy this without attribution to this site and JBQ for the original script.</b></p>
         </div>
       </div>

       <div class="row">
         <div class="col-md-12">
           <div id="changes">		
           <p><h2><a href="#" id="android_build-show" class="showLink" onclick="show('android_build');return false;">+</a><a href="#" id="android_build-hide" class="hideLink" onclick="hide('android_build');return false;">-</a>&nbsp;<a name="android_build" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_build">android_build</a></h2>
             <div id="android_build">
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/63e19bc">63e19bc</a> :  Avoid accidentally using the host's native 'as' command.<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/c29fa89">c29fa89</a> :  build: add ASCII Logo to edify script<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/5a7398d">5a7398d</a> :  Add cortex-a9 to armv7-a-neon, allow specifying FPU.<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/74afe01">74afe01</a> :  add support for overriding build.prop settings.<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/cb9b08e">cb9b08e</a> :  Allow override of device asserts, including multi-device support.<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/54b8d8f">54b8d8f</a> :  Set kernel gcc version to 4.8 for ARM targets<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/60308eb">60308eb</a> :  envsetup: set OUT_DIR to an absolute path always<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/ffcaaf2">ffcaaf2</a> :  build: Inline kernel building as a buildtime task<br />
             <a href="https://github.com/OMAP4-AOSP/android_build/commit/b19d991">b19d991</a> :  Allow a device to generically define its own headers<br />
             </div></p>

           <p><h2><a href="#" id="android_frameworks_av-show" class="showLink" onclick="show('android_frameworks_av');return false;">+</a><a href="#" id="android_frameworks_av-hide" class="hideLink" onclick="hide('android_frameworks_av');return false;">-</a>&nbsp;<a name="android_frameworks_av" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_av">android_frameworks_av</a></h2>
             <div id="android_frameworks_av">
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_av/commit/490e4fd">490e4fd</a> :  libstagefright: wfd: don't use intra macroblock refresh mode on omap4<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_av/commit/b568be0">b568be0</a> :  libstagefright: Make it possible to skip OMX buffer reallocation<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_av/commit/755ac81">755ac81</a> :  libstagefright: add missing TI color format case<br />
             </div></p>

           <p><h2><a href="#" id="android_frameworks_base-show" class="showLink" onclick="show('android_frameworks_base');return false;">+</a><a href="#" id="android_frameworks_base-hide" class="hideLink" onclick="hide('android_frameworks_base');return false;">-</a>&nbsp;<a name="android_frameworks_base" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_base">android_frameworks_base</a></h2>
             <div id="android_frameworks_base">
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/bcbc6d0">bcbc6d0</a> :  Framework: Fix GSM signal strength<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/0000f64">0000f64</a> :  telephony: SignalStrengh: Don't calculate a LTE snr if the srq is invalid<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/a863337">a863337</a> :  Camera2 legacy: retry EGL config without EGL_RECORDABLE_ANDROID<br />
             </div></p>

           <p><h2><a href="#" id="android_frameworks_native-show" class="showLink" onclick="show('android_frameworks_native');return false;">+</a><a href="#" id="android_frameworks_native-hide" class="hideLink" onclick="hide('android_frameworks_native');return false;">-</a>&nbsp;<a name="android_frameworks_native" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_native">android_frameworks_native</a></h2>
             <div id="android_frameworks_native">
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/6318699">6318699</a> :  system_server BINDER_TYPE_FD driver ashmem accessors<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/e7fcc59">e7fcc59</a> :  system_server BINDER_TYPE_FD sockets using ashmem accessors<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/8158099">8158099</a> :  Fix for landscape thumbnail images on GLES11RenderEngine<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/45c35e8">45c35e8</a> :  libbinder: allow devices to disable ashmem size tracking<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/397fc4d">397fc4d</a> :  Remove warning "using EGL_IMG_context_priority"<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/c008a38">c008a38</a> :  Add back support for glReadPixels screenshot path.<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/8c664b4">8c664b4</a> :  egl: Add back b/10194508 workaround.<br />
             </div></p>

           <p><h2><a href="#" id="android_frameworks_opt_telephony-show" class="showLink" onclick="show('android_frameworks_opt_telephony');return false;">+</a><a href="#" id="android_frameworks_opt_telephony-hide" class="hideLink" onclick="hide('android_frameworks_opt_telephony');return false;">-</a>&nbsp;<a name="android_frameworks_opt_telephony" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony">android_frameworks_opt_telephony</a></h2>
             <div id="android_frameworks_opt_telephony">
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/db8db44">db8db44</a> :  telephony: Add oldril feature setPrefNwTypeOnUnsolConnected.<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/76f9649">76f9649</a> :  RIL: squashed support for old RIL<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/4d483bf">4d483bf</a> :  RIL: forward port support for mQANElements<br />
             <a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/3f2019a">3f2019a</a> :  Squashed support for RIL subclass<br />
             </div></p>

           <p><h2><a href="#" id="android_hardware_ril-show" class="showLink" onclick="show('android_hardware_ril');return false;">+</a><a href="#" id="android_hardware_ril-hide" class="hideLink" onclick="hide('android_hardware_ril');return false;">-</a>&nbsp;<a name="android_hardware_ril" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_hardware_ril">android_hardware_ril</a></h2>
             <div id="android_hardware_ril">
             <a href="https://github.com/OMAP4-AOSP/android_hardware_ril/commit/c00fab9">c00fab9</a> :  libril: allow board to provide libril<br />
             </div></p>

           <p><h2><a href="#" id="android_packages_apps_Camera2-show" class="showLink" onclick="show('android_packages_apps_Camera2');return false;">+</a><a href="#" id="android_packages_apps_Camera2-hide" class="hideLink" onclick="hide('android_packages_apps_Camera2');return false;">-</a>&nbsp;<a name="android_packages_apps_Camera2" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_packages_apps_Camera2">android_packages_apps_Camera2</a></h2>
             <div id="android_packages_apps_Camera2">
             <a href="https://github.com/OMAP4-AOSP/android_packages_apps_Camera2/commit/5cefd4d">5cefd4d</a> :  Fixed Camera2 crash on first camera start.<br />
             </div></p>
           </div>
         </div>
         <a href="../changelogs.php" class="btn btn-raised btn-primary"><i class="material-icons">arrow_back</i> Back to Changelogs</a>
       </div>
     </div>
    </div>

    <?php include('../include/footer.html') ?>
      
  </body>
</html>
