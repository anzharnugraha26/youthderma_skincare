<script>
        $(document).ready(function() {
        $('#tbl').DataTable();
        });
</script>
    
@if(Session::has('simpan'))
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Data Anda Berhasil Disimpan',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
@endif

@if(Session::has('delete'))
<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Data Anda Sudah terhapus',
    showConfirmButton: false,
    timer: 1500
})
</script>
@endif

@if(Session::has('update'))
<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Data Anda Sudah berhasil di Update',
    showConfirmButton: false,
    timer: 1500
})
</script>
@endif
    