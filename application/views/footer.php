<footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2019 <div class="bullet"></div> <a href="https://fb.com/afdalrdh/" target="_blank">Afdal RDH.</a>
                </div>
                <div class="footer-right">
                    SMK Negeri 1 Cimahi
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url().'assets/js/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?= base_url().'assets/js/stisla.js'; ?>"></script>
    <script src="<?= base_url().'DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js'; ?>" type="text/javascript" ></script>
    <script src="<?= base_url().'DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js'; ?>" type="text/javascript" ></script>
    <script src="<?= base_url().'DataTables/pdfmake.min.js'; ?>" type="text/javascript" ></script>
    <script src="<?= base_url().'DataTables/jszip.min.js'; ?>" type="text/javascript" ></script>
    <script type="text/javascript" src="<?= base_url().'assets/js/dataTables.buttons.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url().'assets/js/jszip.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url().'assets/js/pdfmake.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url().'assets/js/vfs_fonts.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url().'assets/js/buttons.html5.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url().'assets/js/buttons.print.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url().'assets/js/buttons.colVis.min.js'; ?>"></script>
    <script src="<?= base_url().'assets/js/bootstrap-datetimepicker.min.js';?>"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() . 'assets/js/scripts.js'; ?>"></script>
    <script src="<?= base_url() . 'assets/js/custom.js'; ?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('#table_id').DataTable({
                mark: true,
                dom: 'Bfrtip',
                "pageLength":10,
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show All']
                ],
                buttons: [
                    'pageLength',
                    // {
                    //     extend: 'copyHtml5',
                    //     exportOptions: {
                    //         columns: ':visible'
                    //     }
                    // },
                    {
                        extend: 'excelHtml5',
                        title: 'Data Penumpang',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    // {
                    //     extend: 'csvHtml5',
                    //     exportOptions: {
                    //         columns: ':visible'
                    //     }
                    // },
                    // {
                    //     extend: 'print',
                    //     exportOptions: {
                    //         columns: ':visible'
                    //     }
                    // },
                    {
                        extend: 'pdfHtml5',
                        download: 'open',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ],
                columDefs: [{
                    targets: -1,
                    visible: false
                }]
        })
    } );
    </script>
</body>

</html> 