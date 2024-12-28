<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OLM Web | Admin</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Menyertakan jQuery -->
</head>

<body class="h-full font-poppins">
    <div class="flex h-full min-h-full">
        <div class="relative w-full max-w-[250px]">
            <x-sidebar></x-sidebar>
        </div>
        <main>
            <x-admin-header></x-admin-header>
            <div class="ml-0 lg:ml-64">
                {{ $slot }}
            </div>
        </main>
    </div>
    
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', () => {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });

        // AJAX script to update last active
        setInterval(function() {
            $.ajax({
                url: "{{ route('update.last.active') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}" // Sertakan token CSRF
                },
                success: function(response) {
                    console.log('Last active updated successfully.');
                },
                error: function(xhr) {
                    console.error('Error updating last active:', xhr);
                }
            });
        }, 60000); // Update setiap 60 detik (60000 ms)
    </script>
</body>

</html>