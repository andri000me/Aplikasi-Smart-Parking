<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="<?= base_url() ?>assets/jquery/dist/jquery.min.js">
</script>
<script src="<?= base_url() ?>assets/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>
<script src="<?= base_url() ?>assets/sweetalert2/dist/sweetalert2.all.min.js">
</script>

<?php if($this->session->flashdata('Pesan')): ?>
<!-- doing this-->
<?= $this->session->flashdata('Pesan') ?>
<?php else: ?>
<script>
$(document).ready(function() {
    let timerInterval
    Swal.fire({
        title: 'Memuat...',
        timer: 1000,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {

    })
});
</script>
<?php endif; ?>

<script>

function lodingklik() {
    let timerInterval
    Swal.fire({
        title: 'Memuat...',
        onBeforeOpen: () => {
            Swal.showLoading()
        },
        onClose: () => {}
    }).then((result) => {

    })
};
</script>