<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio | Aditiya</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
     <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" 
    style="background-color:rgb(1, 218, 218)">
        <div class="container">
            <a class="navbar-brand" href="#">Aditiya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <img src="img/poto1.jpg" alt="Aditiya" width="200"
        class="rounded-circle img-thumbnail"/>
        <div class="container">
            <h1>Aditiya</h1>
            <p>Mahasiswa | Data Analyst</p>
        </div>
    </section>

    <!-- About Me -->
    <section id="about" class="py-5">
        <div class="container">
            <div class= "row text-center">
            <h2>About Me</h2>
            <p>Halo, nama saya aditiya, seorang mahasiswa program studi sistem informasi, fakultas ilmu komputer di universitas kuningan. Saat ini,
            saya sedang mendalami pengembangan aplikasi berbasis web, desain ui/ux,
            dan analisis data. dengan tujuan untuk membangun karier yang bermakna di bidang ini.
            Sebagai mahasiswa, saya percaya bahwa pendidikan adalah langkah awal untuk mengubah ide
             menjadi inovasi yang bermanfaat. Selama perjalanan akademik saya, saya telah terlibat dalam berbagai proyek yang membantu saya menerapkan teori ke dalam praktik, termasuk membangun website alumni sederhana
            </p>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-5 bg-light">
        <div class="container">
        <div class= "row text-center">
            <h2>Portfolio</h2>
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card portfolio-item">
                        <img src="img/projek-1.png" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Project 1</h5>
                            <p class="card-text">Web Alumni Uniku. </p>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card portfolio-item">
                        <img src="img/projek-2.png" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Project 2</h5>
                            <p class="card-text">Web Fakultas Ilmu Komputer.</p>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card portfolio-item">
                        <img src="img/projek-3.png" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Project 3</h5>
                            <p class="card-text">Web Alumni fakultas Ilmu Komputer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2>Kontak</h2>
            <form action="contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
        </section>

         <!-- Map -->
          <section id="contact" class="py-5">
          <div class="container">
                <h3>Lokasi</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe 
                        class="embed-responsive-item" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.919639453395!2d108.487140!3d-6.977908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fa18f1a1234ab%3A0x1234567890abcdef!2sUniversitas%20Kuningan!5e0!3m2!1sid!2sid!4v1673882323402!5m2!1sid!2sid" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
          </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 My Portfolio. Aditiya.</p>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm /bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
