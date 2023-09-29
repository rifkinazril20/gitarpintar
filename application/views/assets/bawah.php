<footer class="main-footer">
    <div class="footer-left">
        Gitar Pintar <?php echo date("Y") ?>
    </div>
    <div class="footer-right">
    </div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<!-- <script src="assets/js/app.min.js"></script> -->
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {

        $(document).ready(function() {
            //datatables
            table = $('#dt').DataTable({

                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                }, ],
                "aLengthMenu": [
                    [5, 10, 30, 50, 100],
                    [5, 10, 30, 50, 100]
                ],
                "language": {
                    zeroRecords: "Maaf data tidak ditemukan",
                    info: "_START_ s/d _END_ dari _TOTAL_ data",
                    infoEmpty: "0 sampai 0 dari 0 data",
                    infoFiltered: "(disaring dari _MAX_ total data)",
                    searchPlaceholder: 'Cari...',
                    search: '',
                    lengthMenu: '_MENU_ Item/Halaman',
                },

            });

        });
    });
</script>

<?php if ($this->session->flashdata("msg") == "hapus") { ?>
    <script>
        Swal.fire(
            "Informasi",
            "Data berhasil dihapus!",
            "success"
        );
    </script>
<?php }  ?>
<?php if ($this->session->flashdata("msg") == "success") { ?>
    <script>
        Swal.fire(
            "Informasi",
            "Data berhasil disimpan!",
            "success"
        );
    </script>
<?php }  ?>
<?php if ($this->session->flashdata("msg") == "edit") { ?>
    <script>
        Swal.fire(
            "Informasi",
            "Data berhasil diubah!",
            "success"
        );
    </script>
<?php }  ?>
<?php if ($this->session->flashdata("msg") == "error") { ?>
    <script>
        Swal.fire(
            "Informasi",
            "Ada kesalah sistem!",
            "error"
        );
    </script>
<?php }  ?>