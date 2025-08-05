<?php 
    session_start();
    if($_SESSION['login']==false){
        header("Location: ../index.php?pesan=belum_login");  
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Store | About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include'navbar2.php' ?>

    <!-- Banner -->
    <div class="container-fluid banner3 d-flex align-items-center">
        <div class="container">
            <h2 class="text-white text-center">About Us</h2>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container fs-5 text-center">
            <!-- Your text content here -->
            <p>Islamic Store adalah proyek UAS yang bertujuan untuk menciptakan sebuah platform daring yang menyediakan berbagai produk-produk berkualitas dengan tema Islami. Kami berkomitmen untuk menyediakan pengalaman belanja yang menyenangkan dan memuaskan bagi para pelanggan kami. Dengan menggabungkan keahlian desain dan teknologi, kami bertekad untuk menciptakan sebuah website penjualan yang tidak hanya mudah digunakan tetapi juga mempersembahkan estetika Islami yang memikat. Di Islamic Store, kami percaya bahwa setiap produk yang kami tawarkan adalah cerminan dari nilai-nilai Islam yang mendalam, seperti kejujuran, keramahan, dan kepedulian terhadap sesama. Kami berharap website kami dapat menjadi tempat yang ramah dan inspiratif bagi semua orang yang ingin memperkaya hidup mereka dengan barang-barang Islami berkualitas.
</p>
        </div>
    </div>

    <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>Pemuda Hijrah</h3>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container text-center d-flex flex-wrap justify-content-center mt-4 mb-3">
            <!-- Card Section -->
            
                <div class="card mx-2 my-3 border-0" style="width: 18rem;">
                    <img src="../image/Nurilyas.jpg" class="card-img-top rounded-circle" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Nur Ilyas (2022310075)</h5>
                        <p class="card-text">Informatics engineering student at Bina Insani University</p>
                    </div>
                    <div class="card-body">
                        <a href="https://www.instagram.com/ehhyas?igsh=Y2hmYmQ5em5lYmNv" class="card-link" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="card mx-2 my-3 border-0" style="width: 18rem;">
                    <img src="../image/HANIF.jpg" class="card-img-top rounded-circle" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Hanif Lukmanul Hakim (2022310035)</h5>
                        <p class="card-text">Informatics engineering student at Bina Insani University</p>
                    </div>
                    <div class="card-body">
                        <a href="https://www.instagram.com/luqmanaru?igsh=MWgyNWRyemYyOGI3Nw==" class="card-link" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="card mx-2 my-3 border-0" style="width: 18rem;">
                    <img src="../image/Danurfaqih.jpg" class="card-img-top rounded-circle" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Danur Faqih <br> (2022310081)</h5>
                        <p class="card-text">Informatics engineering student at Bina Insani University</p>
                    </div>
                    <div class="card-body">
                        <a href="https://www.instagram.com/dnfaqh_?igsh=Y3oxNjlrM29rdzgw" class="card-link" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="card mx-2 my-3 border-0" style="width: 18rem;">
                    <img src="../image/Davidradeva.jpg" class="card-img-top rounded-circle" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Davidra Deva <br> (2022310041)</h5>
                        <p class="card-text">Informatics engineering student at Bina Insani University</p>
                    </div>
                    <div class="card-body">
                        <a href="https://www.instagram.com/dvdrdvv?igsh=eGFrN3Z0anBuNmx3" class="card-link" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="card mx-2 my-3 border-0" style="width: 18rem;">
                    <img src="../image/Imamfajar.jpg" class="card-img-top rounded-circle" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Imam Fajar Hudaya (2022310087)</h5>
                        <p class="card-text">Informatics engineering student at Bina Insani University</p>
                    </div>
                    <div class="card-body">
                        <a href="https://www.instagram.com/imam.fha?igsh=MWF5b3FiYnl0dzV5aA==" class="card-link" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
        </div>
    </div>

    <?php include'footer.php'; ?>
</body>
</html>
