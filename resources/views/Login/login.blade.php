<!doctype html>
<html lang="en">

<head>
    <title>PPDB 2023 - 2024</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fajarafrizal.my.id/ppdb/assets/css/main.css">
</head>

<body style=" background-image: linear-gradient(to right, #263dc0, #162a60, #130153);">
    @if (Session::get('success')) <div class="alert alert-success role="alert"> {{ session('success') }} </div>
    
    @endif
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url('assets/images/ppdb.jpg');">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Login</h3>
                                </div>

                            </div>
                            <form action="{{ route('loginpage') }}" class="signin-form" method="POST">
                                @csrf
                                                                                                                
                                <div class="form-group mb-3">
                                    <h4>Masuk ke Akun PPDB-mu </h4>
                                    <label class="label" for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="Masukan Email"
                                        name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Masukan Password"
                                        name="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"77d8c5793b2c7d43","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>

        <section class="has-bg-img py-0">
            <div class="container">
                <div class="footer">
                    <div class="footer-lists">
                        <ul class="list">
                            <li class="list-head">
                                <h6 class="font-weight-bold">ABOUT US</h6>
                            </li>
                            <li class="list-body">
                                <a href="#" class="logo">
                                    <img src="https://fajarafrizal.my.id/ppdb/assets/imgs/logo2.png"
                                        >
                                    <h6>SMK WIKRAMA BOGOR</h6>
                                </a>
                                <p>SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa.</p>
                            </li>
                        </ul>
                        <ul class="list">
                            <li class="list-head">
                                <h6 class="font-weight-bold">USEFUL LINKS</h6>
                            </li>
                            <li class="list-body">
                                <div class="row">
                                    <div class="col">
                               <a href="/beranda">Beranda</a>
                               <a href="/jurusan">Jurusan</a>
                               <a href="/tentang">Tentang Kami</a>
                               <a href="/testimoni">  Testimoni</a>
                           </div>
                           <div class="col">
                               <a href="/kontak">Hubungi Kami</a>
                               <a href="{{ route('login') }}"></a>
                           </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list">
                            <li class="list-head">
                                <h6 class="font-weight-bold">CONTACT INFO</h6>
                            </li>
                            <li class="list-body">
                                <p>Contact us and we'll get back to you within 24 hours.</p>
                       <p><i class="ti-location-pin"></i>         <p> Jl. Raya Wangun No.21, RT.01/RW.06,</p>
                       <p>Sindangsari, Kec. Bogor Tim., Kota Bogor,</p>
                       <p> Jawa Barat 16146</p></p>
                       <p><i class="ti-email"></i> prohumasi@smkwikrama.sch.id</p>
                                <div class="social-links">
                                    <a href="javascript:void(0)" class="link"><i
                                            class="ti-facebook"></i></a>
                                    <a href="javascript:void(0)" class="link"><i
                                            class="ti-twitter-alt"></i></a>
                                    <a href="javascript:void(0)" class="link"><i
                                            class="ti-google"></i></a>
                                    <a href="javascript:void(0)" class="link"><i
                                            class="ti-pinterest-alt"></i></a>
                                    <a href="javascript:void(0)" class="link"><i
                                            class="ti-instagram"></i></a>
                                    <a href="javascript:void(0)" class="link"><i
                                            class="ti-rss"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



        <script>
            $(".theSelect").select2();
        </script>
        <script>
            function checkvalue(val) {
                if (val === "lainnya") {
                    document.getElementById('lainnya1').style.display = 'block';
                } else {
                    document.getElementById('lainnya1').style.display = 'none';
                }
            }
        </script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

</body>

</html>
