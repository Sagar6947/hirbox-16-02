<?php $this->load->view('candidate/includes/footer-link'); ?>
<script>
        ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                        console.error(error);
                });
</script>

<script>
        $('input').attr('autocomplete', 'off');

        $(function() {
                $("input[name='number']").on('input', function(e) {
                        $(this).val($(this).val().replace(/[^0-9]/g, ''));
                });
        });
</script>