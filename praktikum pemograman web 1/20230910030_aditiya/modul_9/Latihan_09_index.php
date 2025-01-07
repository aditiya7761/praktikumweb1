<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Alumni</title>
    <!-- Bootstrap 5 CSS -->
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body{
            margin:0;/Menghilangkan margin default dari body/
        }
        .jumbotron-bg{
            background-image: url('/20230910030_aditiya/modul_9/image/Header-Home.jpg');/URL gambar latang belakang/
            background-size: cover;
            background-position: center;
            color: white;/Warna teks jumbotron/
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #555;
        }

        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form textarea {
            height: 100px;
        }

        form button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #218838;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background: #f1f1f1;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        ul li strong {
            color: #28a745;
        }
    </style>
</head>
<body>
    <!-- Bagian Atas: jumbotron dengan latar belakang gambar -->
    <header class="jumbotron-bg text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 text-bold">Selamat Datang di Website Kami</h1>
            <p class="lead">Ini adalah contoh jumbotron dengan latar belakang gambar dibagian atas halaman.</p>
        </div>
    </header>

    <div class="container-fluid my-4">
        <div class="row">
            <!-- Bagian kiri: Menu -->
            <?php include "Latihan_09_menu.php";?>
            <!-- Bagian tengah: artikel -->
            <main class="col-md-10">
                <article>
                    <?php
                        extract($_GET);
                        if(isset($menu)){
                            if($menu == "index"){
                                include "Latihan_09_index.php";
                            } else if($menu == "about"){
                                include "Latihan_09_about.php";
                            } else if($menu == "alumni"){
                                include "Latihan_09_ralumni.php";
                            } else if($menu == "calumni"){
                                include "Latihan_09_calumni.php";
                            } else if($menu == "ualumni"){
                                include "Latihan_09_ualumni.php";
                            } else if($menu == "Buku_tamu"){
                                include "Buku_tamu.php";
                            } else if($menu == "bursa_kerja"){
                                include "bursa_kerja.php";
                            } else if($menu == "penelusuran_alumni"){
                                include "penelusuran_alumni.php";
                            }
                             else {
                                // include "Latihan_09_index.php";
                            }
                        }
                    ?>
                </article>
            </main>
        </div>
    </div>

    <!-- Bagian bawah: footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Website Kami. All rights reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>