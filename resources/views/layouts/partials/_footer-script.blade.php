<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>


<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


{{--<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>--}}
{{--<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>--}}
{{--<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>--}}
{{--<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>--}}
{{--<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>--}}
{{--<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>--}}
{{--<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>--}}





<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>


@toastr_js
@toastr_render


<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    $(function () {
        $("#datatable").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,
        });
    });


    $('.sa-delete').on('click' , function (){
        let formId = $(this).data('form-id');

        console.log(formId)
        swal({
            title: "Are you sure ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $('#' + formId).submit();
                }
            });
    })



</script>



@stack('scripts')
