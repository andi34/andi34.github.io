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
        <li class="active">Android 4.4.4 R2.0.1 for OMAP4</li>
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
<div id="android_build"><a href="https://github.com/OMAP4-AOSP/android_build/commit/e6397d8">e6397d8</a> :  build: Build with colors<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/3421a28">3421a28</a> :  otapackage: proper zip naming<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/a16c626">a16c626</a> :  build: add ASCII Logo to edify script<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/be0e2ea">be0e2ea</a> :  Allow override of device asserts, including multi-device support<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/9e96fef">9e96fef</a> :  Allow override of device asserts, including multi-device support.<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/eb6df8d">eb6df8d</a> :  Allow a device to generically define its own headers<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/9beb964">9beb964</a> :  envsetup: set OUT_DIR to an absolute path always<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/7379040">7379040</a> :  build: Inline kernel building as a buildtime task<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_base-show" class="showLink" onclick="show('android_frameworks_base');return false;">+</a><a href="#" id="android_frameworks_base-hide" class="hideLink" onclick="hide('android_frameworks_base');return false;">-</a>&nbsp;<a name="android_frameworks_base" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_base">android_frameworks_base</a></h2>
<div id="android_frameworks_base"><a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/5e6ccc8">5e6ccc8</a> :  framework: fix screenshot and rotation animation for devices with abnormal hw rotation<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/c61004c">c61004c</a> :  Telephony: Add support for NETWORK_TYPE_GSM<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/31bc615">31bc615</a> :  telephony: hide needsOldRilFeature<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/5fec665">5fec665</a> :  Signal strength: add more checks to signal strength, so it doesn't fall under the range of poor signal and automatically assumes a gsm signal, actually checks if all values are true and not valid then pass it on to lte or gsm. This fixes cases when gsm signal is not valid and lte is active. When lte is active and shows a really weak and gsm signal is not avalible due some broken vendor ril or just running cdma lte and a few others senario creates this issue.<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/c6a4c19">c6a4c19</a> :  Framework: Fix GSM signal strength<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/4276b03">4276b03</a> :  telephony: SignalStrengh: Don't calculate a LTE snr if the srq is invalid<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_native-show" class="showLink" onclick="show('android_frameworks_native');return false;">+</a><a href="#" id="android_frameworks_native-hide" class="hideLink" onclick="hide('android_frameworks_native');return false;">-</a>&nbsp;<a name="android_frameworks_native" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_native">android_frameworks_native</a></h2>
<div id="android_frameworks_native"><a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/fd733dd">fd733dd</a> :  surfaceflinger: Consolidate display orientation compensation hooks<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/8dacf3d">8dacf3d</a> :  surfaceflinger: odd hw rotation (90/270) patch for swapping width/height<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/db2a95f">db2a95f</a> :  Fix boot animation rotation problem when ro.sf.hwrotation is set to 90 or 270<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/df929ca">df929ca</a> :  surfaceflinger: Reimplement hwrotation<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/01a51f7">01a51f7</a> :  sf: Always use opengles for screen capture<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/2a58e48">2a58e48</a> :  Support forcing all screenshots into a CPU consumer<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/1765335">1765335</a> :  Revert "remove support for glReadPixels screenshot path"<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_opt_telephony-show" class="showLink" onclick="show('android_frameworks_opt_telephony');return false;">+</a><a href="#" id="android_frameworks_opt_telephony-hide" class="hideLink" onclick="hide('android_frameworks_opt_telephony');return false;">-</a>&nbsp;<a name="android_frameworks_opt_telephony" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony">android_frameworks_opt_telephony</a></h2>
<div id="android_frameworks_opt_telephony"><a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/ac9d7d2">ac9d7d2</a> :  Fix Data stop while calling<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/2fd092a">2fd092a</a> :  Fix Signal Bars only showing little signal<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/54dd285">54dd285</a> :  telephony: DataConnection: support old RILs<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/d968def">d968def</a> :  RIL: squashed support for old RIL<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/257f411">257f411</a> :  fw_opt_telephony: Fix RIL for all Samsung devices<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/45e99b5">45e99b5</a> :  PhoneFactory: fall back to default RIL if custom RIL Class fails<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/8701d6a">8701d6a</a> :  RIL: Make RIL subclassable<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/3819479">3819479</a> :  telephony: Use reflection to create command interface (RIL class)<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/f01b435">f01b435</a> :  Allow a device to include its own RIL subclass<br />
</div></p>

<p><h2><a href="#" id="android_hardware_ril-show" class="showLink" onclick="show('android_hardware_ril');return false;">+</a><a href="#" id="android_hardware_ril-hide" class="hideLink" onclick="hide('android_hardware_ril');return false;">-</a>&nbsp;<a name="android_hardware_ril" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_hardware_ril">android_hardware_ril</a></h2>
<div id="android_hardware_ril"><a href="https://github.com/OMAP4-AOSP/android_hardware_ril/commit/6e2a47b">6e2a47b</a> :  libril: allow board to provide libril<br />
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
