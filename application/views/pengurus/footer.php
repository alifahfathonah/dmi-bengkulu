    
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>&copy; <?= date("Y") ?> Hak Cipta <strong>Dewan Masjid Indonesia - DMI</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->

    <!-- jquery
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/flot/jquery.flot.js"></script>
    <script src="<?= base_url('notika/') ?>js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url('notika/') ?>js/flot/curvedLines.js"></script>
    <script src="<?= base_url('notika/') ?>js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/knob/jquery.knob.js"></script>
    <script src="<?= base_url('notika/') ?>js/knob/jquery.appear.js"></script>
    <script src="<?= base_url('notika/') ?>js/knob/knob-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('notika/') ?>js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/bootstrap-select/bootstrap-select.js"></script>
    <!-- cropper JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/cropper/cropper.min.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/summernote/summernote-updated.min.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/wave/waves.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/wave/wave-active.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/notification/bootstrap-growl.min.js"></script>
    <!-- autosize JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/autosize.min.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/plugins.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/data-table/data-table-act.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/chat/moment.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/chat/jquery.chat.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?= base_url('notika/') ?>js/main.js"></script>
    <script src="<?= base_url('notika/') ?>js/Blob.js"></script>
    <script src="<?= base_url('notika/') ?>js/canvas-toBlob.js"></script>
    <script src="<?= base_url('notika/') ?>js/canvas-to-blob.min.js"></script>


    <script type="text/javascript">
        $('.summernote2').summernote({
            height: "200px"
        });

        $('.summernote4').summernote({
            height: "400px"
        });

        $('.summernote5').summernote({
            height: "500px"
        });

        $(document).ready(function() {
             $('#data-table').DataTable();
        });

        function notifyMe(type, title, message){
            $.growl({
                icon: '',
                title: title,
                message: message,
                url: ''
            },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                            from: 'top',
                            align: 'center'
                    },
                    offset: {
                        x: 20,
                        y: 85
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 3000,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                    },
                    icon_type: 'class',
                    template: '<div data-growl="container" class="alert" role="alert">' +
                                    '<button type="button" class="close" data-growl="dismiss">' +
                                        '<span aria-hidden="true">&times;</span>' +
                                        '<span class="sr-only">Close</span>' +
                                    '</button>' +
                                    '<span data-growl="icon"></span>' +
                                    '<b><span data-growl="title"></span></b>&nbsp' +
                                    '<span data-growl="message"></span>' +
                                    '<a href="#" data-growl="url"></a>' +
                                '</div>'
            });
        };

    </script>

</body>

</html>