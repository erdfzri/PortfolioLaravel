<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>My Portfolio</title>
</head>
<body>
    <header>
        <div class="logo">
            My<span style="color: red;">Portfolio</span>
        </div>
        <nav>
            <!-- Di Jero nav iye ku urang jien class deui ajang pas di buka di mobile/hp awal na aya 3 button jadi garis 3 -->
            <!-- Maneh tinggali aya fucnt onclick, iye funct jang ngajalankeun event klick di javascript -->
            <!-- Scroll ka handap aya script javascript na  -->
            <div class="menu-icon" onclick="toggleMenu()"> 
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul>
                <li><a href="index.html" onclick="toggleMenu()">Home</a></li>
                <li><a href="#about" onclick="toggleMenu()">About Me</a></li>
                <li><a href="#kontak" onclick="toggleMenu()">Contact</a></li>
            </ul>
        </nav>
    </header>

   
        <div class="section1" id="about">
            <div class="about-container">
                <div class="logo">
                    <img src="img/WhatsApp Image 2023-11-25 at 23.01.28.jpeg" alt="Portfolio Logo">
                </div>
            </div>
        </div>
   
    
    <section class="skil" id="projects">
        <div class="container2">
           <h1>About Me</h1>
        </div>
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="img/basket.JPG" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Hobi Saya</h2>
                            <p>Saya ingin sedikit bercerita tentang hobi saya,ya betul hobi saya adalah bermain basket,pertama tama saya mengenal basket ketika saya bersekolah di SMPN 2 Ciawi,awalnya saya hanya ingin berolahraga mengecilkan badan tetapi saya mulai menyukai olahraga ini hingga akhirnya basket menjadi life style hidup saya sampe sekarang,mungkin sampai saya tua. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="img/family.JPG" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">My Family My Team!!!</h2>
                            <p>Keluarga bagi saya benar benar menjadi rumah buat saya,saya sangat beruntung mempunyai kedua orang tua yang selalu memprioritaskan anaknya hingga membuat saya merasa nyaman ketika dirumah,keluarga juga yang selalu mendukung saya untuk menjadi apapun itu hobi saya,jurusan saya sekarang,semuanyaaa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="/img/laut.JPG" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Main</h2>
                            <p>Dibalik hobi saya yang suka olahraga saya juga tidak melupakan waktu bermain bersama teman-teman,ini foto saya ketika di pantai,meskipun tidak ada jaringan internet tapi saya cukup senang ketika menikmati indahnya alam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="skill-container">
            <div class="html">
                <h3>HTML</h3>
                <p>adalah bahasa yang digunakan untuk membuat halaman web. Bagi yang berkecimpung di dunia perangkat gadget dan ilmu komputer, pasti sudah tidak asing lagi dengan berbagai kode di dalamnya. HTML adalah kependekan dari Hypertext Markup Language.</p>
            </div>
            <div class="css">
                <h3>CSS</h3>
                <p>CSS adalah bahasa Cascading Style Sheet dan biasanya digunakan untuk mengatur elemen tampilan yang tertulis dalam bahasa markup, seperti HTML. CSS berfungsi untuk memisahkan konten dari tampilan visualnya di situs.</p>
            </div>
            <div class="js">
                <h3>JAVASCRIPT</h3>
                <p>JavaScript adalah bahasa pemrograman yang digunakan developer untuk membuat halaman web yang interaktif.</p>
            </div>
       

            <div class="ruby">
                <h3>RUBY</h3>
                <p>adalah bahasa pemrograman berbasis skrip yang berorientasi pada objek. Ruby bersifat open source, biasanya digunakan untuk membangun dan mengembangkan aplikasi web yang sederhana dan cepat.</p>
            </div>
            <div class="phyton">
                <h3>PYTHON</h3>
                <p>Python adalah bahasa pemrograman yang banyak digunakan dalam aplikasi web, pengembangan perangkat lunak, ilmu data, dan machine learning (ML). Developer menggunakan Python karena efisien dan mudah dipelajari serta dapat dijalankan di berbagai platform. Perangkat lunak Python dapat diunduh secara gratis, terintegrasi baik dengan semua tipe sistem, dan meningkatkan kecepatan pengembangan.</p>
            </div>
            <div class="c">
                <h3>C++</h3>
                <p>adalah bahasa pemrograman komputer yang merupakan evolusi dari keluarga bahasa C yang sudah ada. Sebagai bahasa yang berorientasi pada objek yang memberikan struktur jelas pada program dan memungkinkan kode untuk digunakan ulang, C++ dapat menurunkan biaya pengembangan.</p>
            </div>
        </div>
   

    <footer>
    <div class="contact-container">
        <div class="text" id="kontak">
            <h2>Contact Information</h2>
        </div>
        
        <div class="contact-info">
            <div class="contact-item">
                <i class='bx bxl-whatsapp'></i> 085693381217
            </div>
            <div class="contact-item">
                <i class='bx bxl-instagram'></i> erdfzri
            </div>
            <div class="contact-item">
                <i class='bx bxs-envelope'></i> erdiekafazri@smkwikrama.sch.id
            </div>
        </div>
    </div>
</footer>

    <script>
        function toggleMenu() {
            var nav = document.querySelector('nav ul');
            nav.classList.toggle('show');
        }
    </script>
</body>
</html>
