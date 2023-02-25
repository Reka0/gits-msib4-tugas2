<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,500;1,700;1,800&display=swap" rel="stylesheet"><title>Personal Web</title>
    <link rel="stylesheet" href="style.css">
    <!-- Icons feather -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="" class="navbar-logo">Fatahillah</a>        
        
        <div class="navbar-nav">
            <a href="#">Home</a>    
            <a href="#about">About</a>    
            <a href="#contact">Contact</a>    
        </div>
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home Start -->
    <section class="home" id="home">
        <div class="row">
            <main class="content">
                <h2>Nama saya <span>Fatahillah Rezika Bill Haq</span></h2>
                <p>Saya lulusan dari SMK Luqman Al-Hakim Kudus jurusan <span>Rekayasa Perangkat Lunak</span>, dan sekarang sedang menyelesaikan  <span>S1 Sistem Informasi</span> di Universitas Muhammadiyah Kudus. Salam Kenal</p>
                <a href="#" class="cta">Next....</a>
            </main>
            <div class="home-img">
                <img src="image/new-bg.jpeg" alt="">
            </div>
        </div>
    </section>
    <!-- Home End -->

    <!-- About Start -->
    <section class="about" id="about">
        <div class="parallax">
            <div class="tentang">
                <h2>Fatahillah Rezika Bill Haq</h2>
                <p>Berusia 21 tahun, tinggal di Kudus Jawa tengah, saya sedang kuliah di Universitas Muhammadiyah Kudus jurusan S1 Sistem Informasi, menekuni di bidang coding dan ingin membangun karir sebagai programer.</p>
                <div class="mt-10">
                    <p>Check my Instagram</p>
                    <a href="https://www.instagram.com/fillusion.0/" target="_blank"><button class="btn-cta">Go</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Contact Start -->
    <section class="contact" id="contact">
        <h2>Hubungi saya</h2>

        <div class="row">
            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="No Telp">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>

    </section>
    <!-- Contact End -->

    <!-- Footer Start -->
    <footer>
        <div class="social">
            <a href="mailto:fatahbillhaq123@gmail.com" target="_blank"><i data-feather="mail"></i></a>
            <a href="https://www.instagram.com/fillusion.0/" target="_blank"><i data-feather="instagram"></i></a>
            <a href="https://t.me/Reika0" target="_blank"><i data-feather="send"></i></a>
        </div>
        <div class="credit">
            <p>Created by <a href="">Fatahillah</a>. | &copy; 2023</p>
        </div>
    </footer>
    <!-- Footer End -->

    <script>
        feather.replace()
    </script>

    <script src="js/script.js"></script>
</body>
</html>