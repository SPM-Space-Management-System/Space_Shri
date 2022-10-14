<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job & Career</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('libraries.styles')
</head>

<body>

    @include('components.nav')

    @yield('content')

    @include('components.footer')

    @include('libraries.scripts')
    <script>
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
Livewire.emit('deleteConfirmed')

                }
            })
        });
    </script>

</body>

</html>
