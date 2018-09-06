
@if(Session::has('message'))

    <script>
        swal({
            position: 'top-end',
            type: 'success',
            title: '{{Session::get('message')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>


@endif
