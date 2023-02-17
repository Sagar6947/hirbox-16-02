<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/node-waves/waves.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="<?= base_url() ?>assets/candidate/libs/pace-js/pace.min.js"></script>

<!-- twitter-bootstrap-wizard js -->
<script src="<?= base_url() ?>assets/candidate/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/twitter-bootstrap-wizard/prettify.js"></script>

<!-- form wizard init -->
<script src="<?= base_url() ?>assets/candidate/js/pages/form-wizard.init.js"></script>
<script src="<?= base_url() ?>assets/candidate/js/app.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/js/pages/form-advanced.init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>assets/candidate/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/candidate/js/pages/form-editor.init.js"></script>


<!-- Required datatable js -->
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/candidate/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url() ?>assets/candidate/js/pages/datatables.init.js"></script>

<script src="<?= base_url() ?>assets/candidate/js/app.js"></script>


<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    $(document).ready(function() {

        filter_data();

        function filter_data() {

            var action = 'fetch_data';
            var currency = $('.currency').val();


            $.ajax({
                url: "<?= base_url('Candidate/getcurrency') ?>",
                method: "POST",
                data: {
                    currency: currency
                },
                success: function(data) {
                    console.log(data);
                    $('#currencyid').html(data);
                }
            });
        }

        $('.currency').change(function() {
            var currency = $('.currency').val();
            console.log(currency);
            filter_data();
        });



    });
</script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function() {
            $(this).remove();
        });
    }, 4000);
</script>