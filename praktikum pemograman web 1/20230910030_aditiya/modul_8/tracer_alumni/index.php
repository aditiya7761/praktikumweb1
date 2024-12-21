<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tracer Alumni</h1>

    <form id="alumniForm">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="jurusan" placeholder="Jurusan" required>
        <input type="number" name="tahun_kelulusan" placeholder="Tahun Kelulusan" required>
        <button type="submit">Tambah Alumni</button>
    </form>

    <div id="alumniList"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            loadAlumni();

            $('#alumniForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'add_alumni.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response);
                        loadAlumni();
                    }
                });
            });
        });

        function loadAlumni() {
            $.ajax({
                url: 'view_alumni.php',
                method: 'GET',
                success: function(data) {
                    $('#alumniList').html(data);
                }
            });
        }
    </script>
</body>
</html>
