<div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-5">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021 Dinas Kominfo Kabupaten Kediri</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script>
            // Fungsi menampilkan nama file di file input
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    </body>
</html>