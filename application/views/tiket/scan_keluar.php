<body>
    <div style="background-color: blue; height: 60px; "><center><h2 class="pt-3 fw-bold" style="color: white;">Scan QR</h2></center></div>
    <center><h4 style="margin-top: 100px;" >Silahkan scan terlebih dahulu<br> untuk Keluar</h4></center>
    <div class="container"><center><video id="preview" width="100%"></video></center></div>
    <form ></form>
      <!-- Modal -->
    <div class="close">
        <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" style="display: block;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="position: relative; margin-left: 35%;">Smart Parking</h5>
                    </div>
                    <div class="modal-body">
                        <p>Terimakasih sudah parkir</p>
                        <form method="POST" action="<?php echo base_url().'tiket/scan_keluar1'?>" ><input type="hidden" id="qr_code" name="qr_code">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary " style="position: relative; margin-right: 2%;" value="OK"></input>
                        </form>
                       <button type="button" class="btn btn-dark" id="close2" style="position: absolute; margin-right: 20%">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    </div>

    <script type="text/javascript">
        let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
        scanner.addListener('scan', function (content) {
            $("#qr_code").val(content);
            $(document).ready(function(){
                $(".close").addClass("open");

                $("#close2").click(function(){
                    $(".close").removeClass("open");
                });
            });
        });
        Instascan.Camera.getCameras().then(function (cameras) {
          if (cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            alert('No cameras found.');
        }
    }).catch(function (e) {
      console.error(e);
  });

</script>
</body>
</html>

 