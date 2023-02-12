@extends('landpage.layout')
@section('content')
<br><br><br>

    
<div class="one" href = "#home">
<style>
    body {
        background-image: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(assets/img/gedungrpl.png);
        background-repeat: no-repeat;
        color: white;
    }
    </style>
    
    <h1 class="font-weight-bold mb-3">PPDB SMK WIKRAMA</h1>
    <p class="mb-5">Segera daftar dan bergabung menjadi bagian SMK WIKRAMA BOGOR! <br> padamu negeri, kami berjanji lulus wikrama siap membangun negeri</p>
    <a class="btn btn-warning" href="/register" style="width: 10rem;">Daftar sekarang</a>
    <br>

</div>

<br><br><br><br><br><br><br><br>

<div class="two">
            <div class="rounded shadow p-5 bg-white">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-0 text-center">
                        <h3 class="font-weight-bold text-capitalize h5 text-black ">MOTTO</h3>
                        <p class="regular text-muted">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <h3 class="font-weight-bold text-capitalize h5 text-black ">AFIRMASI</h3>
                        <p class="regular text-muted">Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <h3 class="font-weight-bold text-capitalize h5 text-black ">ATITUDE</h3>
                        <p class="regular text-muted">Aku ada lingkunganku <br> bahagia</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>

<div class="three bg-dark bg-opacity-50 rounded text-center p-5">
    <section id="jurusan" class="jurusan">
<div class="row">
      <div class="col-lg-4">
      <img src= "{{ ('assets/img/rpl.png') }}" width= "140" height= "140" class="rounded-circle">
        <h2 class="fw-normal">PPLG</h2>
        <p>Pengembangan Perangkat Lunak dan Gim, jurusan IT yang berfokus pada web developing, mobile dan game develop.</p>
        <p><a class="btn btn-secondary" href="#">More &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src= "{{ ('assets/img/tkj.png') }}" width= "140" height= "140" class="rounded-circle">
        <h2 class="fw-normal">TJKT</h2>
        <p>Teknik Jaringan Komputer dan telekomunikasi, berfokus pada jaringan, perangkat keras, dan network.</p>
        <p><a class="btn btn-secondary" href="#">More &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src= "{{ ('assets/img/bdp.png') }}" width= "140" height= "140" class="rounded-circle">
        <h2 class="fw-normal">Pemasaran</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">More &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src= "{{ ('assets/img/dkv.png') }}" width= "140" height= "140" class="rounded-circle">
        <h2 class="fw-normal">DKV</h2>
        <p>Desain Komunikasi Visual</p>
        <p><a class="btn btn-secondary" href="#">More &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src= "{{ ('assets/img/logo-wk.png') }}" width= "140" height= "140" class="rounded-circle">
        <h2 class="fw-normal">MPLB</h2>
        <p>Manajemen Perkantoran dan Layanan Bisnis</p>
        <p><a class="btn btn-secondary" href="#">More &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src= "{{ ('assets/img/logo-wk.png') }}" width= "140" height= "140" class="rounded-circle">
        <h2 class="fw-normal">Pariwisata</h2>
        <p>Terbagi dalam Perhotelan dan Kuliner.</p>
        <p><a class="btn btn-secondary" href="#">More &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    </section>
</div>

<br><br><br><br><br><br>

<div class="four">

<section id="tentang" class="tentang">

     <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="200px" height="400px" src= "{{ ('assets/img/gedung.jpg') }}" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></img>
            <!-- <img src= "{{ ('assets/img/gedung.jpg') }}" width="80%" height="30%" class="bd-placeholder-img card-img-top"> -->
            <div class="card-body text-dark">
            <h1>SMK WIKRAMA</h1>
    <p>SMK Wikrama Bogor adalah salah satu SMK unggulan yang telah berdiri <br> sejak 1996 dibawah naungan Yayasan Prawitama.
         Menyediakan 7 jurusan dari 3 bidang keahlian yang berbeda.
     </p>

            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://smkwikrama.sch.id" type="button" class="btn btn-sm btn-outline-secondary">Selengkapnya</a>                
                </div>
              </div>
            </div>
          </div>
        </div>

</section>
</div>

<div class="five p-5">
  <section id="media" class="media bg-primary bg-opacity-50 rounded">
  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Media Wikrama</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <img class="bi" src= "{{ ('assets/img/www.png') }}" width="35px" height="35px"></img>
        </div>
        <div>
          <h3 class="fs-2">Website</h3>
          <a href="https://smkwikrama.sch.id" class="btn btn-outline-light">
            Kunjungi
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <img class="bi" src= "{{ ('assets/img/ig.png') }}" width="35px" height="35px"></img>
        </div>
        <div>
          <h3 class="fs-2">Instagram</h3>
          <a href="https://www.instagram.com/smkwikrama/" class="btn btn-outline-light">
            Kunjungi
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <img class="bi" src= "{{ ('assets/img/yt.png') }}" width="35px" height="35px"></img>
        </div>
        <div>
          <h3 class="fs-2">Youtube</h3>
          <a href="https://www.youtube.com/@multimediawikrama7482" class="btn btn-outline-light">
            Kunjungi
          </a>
        </div>
      </div>

    </div>
  </div>

  </section>
</div>

<div class="seven">
<div class="container">
  <footer class="py-5 border-top">
    <div class="row">
    <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
        <img src= "{{ ('assets/img/logo-wk.png') }}" width= "200" height= "200" class="rounded-circle">

        </ul>
    </div>
      <div class="col-3 py-5 col-md-3 mb-3 p-5">
        <h5>SMK WIKRAMA</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Alamat:</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">  </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">prohumasi@smkwikrama.net</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2022 12108296</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</div>

@endsection