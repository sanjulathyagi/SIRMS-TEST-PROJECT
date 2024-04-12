<?php
ob_start();
include_once '../init.php';

$link = "Appointments Management";
$breadcrumb_item = "Appointments";
$breadcrumb_item_active = "Scan QR";
?> 
<script src="../../qr_scanner/instascan.min.js" type="text/javascript"></script>
<div class="row">
    <div class="col-4">
    <video id="scan_job" height="200" width="285" class="border border-1 border-black"></video>        
    <br>
<button type="button"  class="btn btn-success"onclick="scanjob()">Scan</button>
<button type="button" class="btn btn-warning" onclick="stopscan()">Stop</button>



    </div>
    <div class="col-md-8">

    </div>
</div>
<?php
$content = ob_get_clean();
include '../layouts.php';
?>
<script>
    function scanjob() {
        let scanner = new Instascan.Scanner({video: document.getElementById('scan_job')});
        scanner.addListener('scan', function (content) {
            findAppointment(content);
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
    }

    function stopscan() {
        const video = document.querySelector('video');
        const mediaStream = video.srcObject;
        const tracks = mediaStream.getTracks();
        tracks[0].stop();
        tracks.forEach(track => track.stop())
    }
    
    function findAppointment(appointmentid){
        window.location.href ="http://localhost/bittest/system/appointments/qr_scan.php?appointmentid="+appointmentid
    }
</script>