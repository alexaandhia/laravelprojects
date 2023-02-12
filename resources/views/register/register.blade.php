<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/logosmk.png" type="x-icon">
    <title>Form Registrasi </title>
    <!-- css untuk select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- jika menggunakan bootstrap4 gunakan css ini  -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <!-- cdn bootstrap4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

<style>
    body {
        background-image: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(assets/img/gedung.jpg);
    }
</style>


    <div class="title text-center mt-5 mb-3 text-light">
        <h2>Form Pendaftaran PPDB </h2>
        <h6>SMK Wikrama Bogor TP. 2023-2024</h6>
    </div>
    
    <div class="container-xl mb-5 text-light" style="justify-content: center; display: flex; ">
        <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <form class="settings-form px-5" action="{{route('student.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 d-flex justify-content-around nisn-jk" style="gap: 10px">

                            <div class="mb-1">
                                <label for="setting-input-3"><b>NISN</b></label>
                                <input name="nisn" type="number" class="form-control  {{ $errors->has('nisn') ? ' is-invalid' : '' }}" style="width: 300px" id="setting-input-1"  placeholder="Masukan NISN">
                                @if ($errors->has('nisn'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('nisn') }}
                                </span>
                                 @endif 
                            </div>

                            <div class="mb-1">
                                <label for="setting-input-3"><b>Jenis Kelamin</b></label>
                                <select name="jk" class="form-select  {{ $errors->has('jk') ? ' is-invalid' : '' }}" id="setting-input-3" style="width: 300px">
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for=""><b>Nama Lengkap</b></label>
                            <input name="nama_lengkap" type="text" class="form-control {{ $errors->has('nama_lengkap') ? ' is-invalid' : '' }}" id="setting-input-1" placeholder="Masukan Nama Lengkap">
                            @if ($errors->has('nama_lengkap'))
                            <span class="invalid-feedback">
                                {{ $errors->first('nama_lengkap') }}
                            </span>
                            @endif 
                        </div>
                           

                        <div class="mb-3 d-flex justify-content-around" style="gap:10px">
                        <div class="mb-1">
                            <label for=""><b>Asal Sekolah</b></label>
                            <select class="form-select {{ $errors->has('sekolah') ? ' is-invalid' : '' }}" id="sekolah" name="asal_sekolah"
                                onchange="tampilakanSekolahInput()">
                                <option disabled selected>Asal Sekolah</option>
                                <option value="sekolah_lainnya">Lainnya</option>
                                <option value="SMP">SMP</option>
                                <option value="SMPN">SMPN</option>
                                <option value="SMPS">SMPS</option>
                                <option value="MTS">MTS</option>
                                <option value="PONPES">PONPES</option>
                                <option value="BOARDING SCHOOL">BOARDING SCHOOL</option>
                            </select>
                        </div>

                        <div class="mb-3" id="sekolah_lainnya" style="display: none;">
                            <label for="setting-input-2" class="form-label">Nama Sekolah Lainnya </label>
                            <input type="text" name="asal_sekolah_lainnya" class="form-control {{ $errors->has('asal_sekolah_lainnya') ? ' is-invalid' : '' }}" id="setting-input-2" placeholder="Nama Sekolah">
                        </div>

                        <div class="mb-1">
                            <label for="setting-input-3" class="form-label"><strong>Email </strong></label>
                            <input name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="setting-input-2" style="width: 340px" placeholder="Masukan Email Anda">
                            @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                             @endif 
                        </div>
                        </div>

                        <div class="mb-1">
                            <label for="setting-input-3" class="form-label">Nomor Handphone</label>
                            <input name="no_hp" type="number" class="form-control {{ $errors->has('no_hp') ? ' is-invalid' : '' }}" id="setting-input-3" placeholder="Contoh: 08---">
                            @if ($errors->has('no_hp'))
                            <span class="invalid-feedback">
                                {{ $errors->first('no_hp') }}
                            </span>
                             @endif 
                        </div>

                        <div class="mb-3 d-flex justify-content-around" style="gap:10px">
                            <div class="mb-1">
                                <label for="setting-input-2" class="form-label">Nomor HP Ayah </label>
                                <input name="no_hp_ayah" type="number" class="form-control {{ $errors->has('no_hp_ayah') ? ' is-invalid' : '' }}" id="setting-input-2" style="width: 340px" placeholder="Contoh: 08---" >
                                @if ($errors->has('no_hp_ayah'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('no_hp_ayah') }}
                                </span>
                                 @endif 
                            </div>
                            <div class="mb-1">
                                <label for="setting-input-3" class="form-label">Nomor HP Ibu</label>
                                <input name="no_hp_ibu" type="number" class="form-control {{ $errors->has('no_hp_ibu') ? ' is-invalid' : '' }}" style="width: 340px"  id="setting-input-3" placeholder="Contoh: 08-----">
                                @if ($errors->has('no_hp_ibu'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('no_hp_ibu') }}
                                </span>
                                 @endif 
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary position-absolute top-100 start-50" style="color: white">Registrasi</button>
                        <a href="/" class="btn btn-danger">Back</a>

                    </form>
                    
                </div>


            </div>

        </div>
 

    </div>
    <!-- wajib jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
                $("#sekolah").select2({
                    theme: 'bootstrap4',
                    placeholder: "Please Select"
                });
    
            });
    </script>


    <script>
        function tampilakanSekolahInput() {
            var sekolah = document.getElementById("sekolah").value;
            var sekolahLainnya = document.getElementById("sekolah_lainnya");
            if (sekolah == "sekolah_lainnya") {
                sekolahLainnya.style.display = "";
            }else {
                sekolahLainnya.style.display = "none";
            }
        } 
    </script>



</body>

</html>