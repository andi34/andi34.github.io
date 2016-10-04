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
        <li class="active">Android 5.1.1 R38 for OMAP4</li>
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
<p><h2><a href="#" id="android_bootable_recovery-show" class="showLink" onclick="show('android_bootable_recovery');return false;">+</a><a href="#" id="android_bootable_recovery-hide" class="hideLink" onclick="hide('android_bootable_recovery');return false;">-</a>&nbsp;<a name="android_bootable_recovery" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_bootable_recovery">android_bootable_recovery</a></h2>
<div id="android_bootable_recovery"><a href="https://github.com/OMAP4-AOSP/android_bootable_recovery/commit/b830e8b">b830e8b</a> :  updater: Allow devices to suppress BLKDISCARD<br />
</div></p>

<p><h2><a href="#" id="android_build-show" class="showLink" onclick="show('android_build');return false;">+</a><a href="#" id="android_build-hide" class="hideLink" onclick="hide('android_build');return false;">-</a>&nbsp;<a name="android_build" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_build">android_build</a></h2>
<div id="android_build"><a href="https://github.com/OMAP4-AOSP/android_build/commit/988b8ca">988b8ca</a> :  Redo BOARD_CUSTOM_BOOTIMG_MK support<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/1812af2">1812af2</a> :  Remove nulls from the edify generator.<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/afd0710">afd0710</a> :  Fix ro.build.product not found by ota_from_target_files in some cases<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/33bb89f">33bb89f</a> :  Allow devices to specify certain ro. props via TARGET_UNIFIED_DEVICE<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/ede18f4">ede18f4</a> :  Allow override of device asserts, including multi-device support.<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/8a6e755">8a6e755</a> :  build: Ensure /system unmounted at install start<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/67fed3c">67fed3c</a> :  Add TARGET_EXTRA_C{PP}FLAGS.<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/d151e7d">d151e7d</a> :  Add mcpu=cortex-a9 when building for Cortex-A9.<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/3d8499b">3d8499b</a> :  add support for overriding build.prop settings.<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/25c47a9">25c47a9</a> :  Allow a device to generically define its own headers<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/e54f38c">e54f38c</a> :  Make the kernel image format parametric instead of a chain of if/elses<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/c475612">c475612</a> :  kernel.mk: Use standard toolchain paths<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/49b9e20">49b9e20</a> :  envsetup: set OUT_DIR to an absolute path always<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/70384d6">70384d6</a> :  build: Fix kernel.mk typos<br />
<a href="https://github.com/OMAP4-AOSP/android_build/commit/e6276d9">e6276d9</a> :  build: Inline kernel building as a buildtime task By arcee<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_av-show" class="showLink" onclick="show('android_frameworks_av');return false;">+</a><a href="#" id="android_frameworks_av-hide" class="hideLink" onclick="hide('android_frameworks_av');return false;">-</a>&nbsp;<a name="android_frameworks_av" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_av">android_frameworks_av</a></h2>
<div id="android_frameworks_av"><a href="https://github.com/OMAP4-AOSP/android_frameworks_av/commit/3ae8463">3ae8463</a> :  camera: Fix inclusion of CameraParametersExtra.h<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_av/commit/b8ee6bd">b8ee6bd</a> :  camera: allow device to append camera parameters<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_av/commit/700967b">700967b</a> :  libstagefright: add missing TI color format case<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_av/commit/457f4aa">457f4aa</a> :  libstagefright: Make it possible to skip OMX buffer reallocation<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_base-show" class="showLink" onclick="show('android_frameworks_base');return false;">+</a><a href="#" id="android_frameworks_base-hide" class="hideLink" onclick="hide('android_frameworks_base');return false;">-</a>&nbsp;<a name="android_frameworks_base" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_base">android_frameworks_base</a></h2>
<div id="android_frameworks_base"><a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/d803e72">d803e72</a> :  framework: fix screenshot and rotation animation for devices with abnormal hw rotation<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/0e97f5f">0e97f5f</a> :  telephony: SignalStrengh: Don't calculate a LTE snr if the srq is invalid<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_base/commit/44cc8fe">44cc8fe</a> :  Camera2 legacy: retry EGL config without EGL_RECORDABLE_ANDROID<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_native-show" class="showLink" onclick="show('android_frameworks_native');return false;">+</a><a href="#" id="android_frameworks_native-hide" class="hideLink" onclick="hide('android_frameworks_native');return false;">-</a>&nbsp;<a name="android_frameworks_native" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_native">android_frameworks_native</a></h2>
<div id="android_frameworks_native"><a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/8b16f8f">8b16f8f</a> :  surfaceflinger: Consolidate display orientation compensation hooks<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/1b40377">1b40377</a> :  Fix boot animation rotation problem when ro.sf.hwrotation is set to 90 or 270<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/baee184">baee184</a> :  surfaceflinger: odd hw rotation (90/270) patch for swapping width/height<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/6d15e31">6d15e31</a> :  surfaceflinger: Reimplement hwrotation<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/8c88f69">8c88f69</a> :  Fix for landscape thumbnail images on GLES11RenderEngine<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_native/commit/389b2a5">389b2a5</a> :  Add back support for glReadPixels screenshot path.<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_opt_telephony-show" class="showLink" onclick="show('android_frameworks_opt_telephony');return false;">+</a><a href="#" id="android_frameworks_opt_telephony-hide" class="hideLink" onclick="hide('android_frameworks_opt_telephony');return false;">-</a>&nbsp;<a name="android_frameworks_opt_telephony" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony">android_frameworks_opt_telephony</a></h2>
<div id="android_frameworks_opt_telephony"><a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/1ff7452">1ff7452</a> :  telephony: DataConnection: support old RILs<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/e508a74">e508a74</a> :  RIL: set responseHardwareConfig() and responseICC_IOBase64() protected<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/a03cd00">a03cd00</a> :  RIL: squashed support for old RIL<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/5971bc2">5971bc2</a> :  MCC to ISO country code mapping corrected<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/fc491be">fc491be</a> :  RIL: set responseCellInfoList protected to override in sub classes<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/d090adb">d090adb</a> :  RIL: mark mInstanceId as protected<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/ef5277c">ef5277c</a> :  Allow a device to include its own RIL subclass<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/3e4a49c">3e4a49c</a> :  telephony: Use reflection to create command interface (RIL class)<br />
<a href="https://github.com/OMAP4-AOSP/android_frameworks_opt_telephony/commit/dee2f2b">dee2f2b</a> :  RIL: Make RIL subclassable<br />
</div></p>

<p><h2><a href="#" id="android_hardware_ril-show" class="showLink" onclick="show('android_hardware_ril');return false;">+</a><a href="#" id="android_hardware_ril-hide" class="hideLink" onclick="hide('android_hardware_ril');return false;">-</a>&nbsp;<a name="android_hardware_ril" class="nonLink">Project:</a> <a href="https://github.com/OMAP4-AOSP/android_hardware_ril">android_hardware_ril</a></h2>
<div id="android_hardware_ril"><a href="https://github.com/OMAP4-AOSP/android_hardware_ril/commit/b8d9853">b8d9853</a> :  rild: Don't use the clientId argument with non-qcom hardware<br />
<a href="https://github.com/OMAP4-AOSP/android_hardware_ril/commit/1869585">1869585</a> :  libril: allow board to provide libril<br />
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
