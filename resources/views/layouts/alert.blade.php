@if (session('success'))
        <div class="alert alert-success fade-in-from-right p-3" role="alert"
            style="position: fixed; right: 20px; bottom: 20px">
            <div class="message">{{ session('success') }}</div>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger fade-in-from-right p-3" role="alert"
            style="position: fixed; right: 20px; bottom: 20px">
            <div class="message">{{ session('error') }}</div>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    @endif

    <script>
        // Fungsi untuk menghilangkan notifikasi flash setelah 5 detik
        function hideFlashMessage() {
            var flashMessages = document.querySelectorAll(".alert");
            flashMessages.forEach(function(message) {
                var progress = message.querySelector(".progress");
                var width = 0;
                var interval = setInterval(function() {
                    width += 10;
                    progress.style.width = width + '%';
                    if (width >= 100) {
                        clearInterval(interval);
                        setTimeout(function() {
                            message.style.display = "none";
                        }, 300); // Ganti nilai 300 dengan nilai fadeOut yang diinginkan (dalam milidetik)
                    }
                }, 500); // Waktu interval untuk menghitung progress bar (dalam milidetik)
            });
        }

        // Panggil fungsi hideFlashMessage ketika halaman selesai dimuat
        document.addEventListener("DOMContentLoaded", function() {
            hideFlashMessage();
        });
    </script>