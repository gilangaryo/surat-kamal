<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan</title>
    
    <style type="text/css">
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #ffffff;
        }
        /* .rangkasurat {
            width: 980px;
            margin: 0 auto;
            background-color: #fff;
            height: 500px;
            padding: 20px;
        } */
        .headerAtas {
            
            border-bottom: 5px solid #000;
            padding: 2px;
            width: 100%;
        }
        .tengah {
            text-align: center;
            line-height: 5px;
            padding-right: 100px;
        }
        .row{
            margin-top: 20px
        }
        .lampiran{
            margin-top: 20px;
        }
        .atasbawah{
            margin: 0px;
        }
    </style>
</head>
<body onload="window.print()">
    <div class="rangkasurat">
        <table class="headerAtas">
            <tr>
                <td><img src="./sukoharjo.jpg" width="90px"></td>
                <td class="tengah">
                    <h2>PEMERINTAH KABUPATEN SUKOHARJO</h2>
                    <h2>KECAMATAN BULU</h2>
                    <h2>DESA KAMAL</h2>
                    <p >Alamat: Jl. Raya Bulu - Sanggang Km 2.5 No. Telp, Kode Pos 57563</p>
                    <p></p>
                </td>
            </tr>
        </table>
        <div id="lampiran" class="lampiran">
            No Kode Desa/Kelurahan<br />
            33 11 022002
          </div>
          <br>
    </div>

    <div class="tengah">
        <p>SURAT KETERANGAN PENGANTAR</p>
        <br>
        <p>Nomor: {{ $nomor }}</p>
    
    </div>
    <div class="content">
        
        <p>Yang bertanda tangan dibawah ini kami Kepala Desa Kamal Kecamatan Bulu Kabupaten Sukoharjo, Menerangkan bahwa:</p>

        <table style="width:100%; border-collapse:collapse; table-layout:fixed; margin: 0px;">
            <tr>
                <td style="width:20%; text-align:left; ">Nama</td>
                <td style="width:10%; text-align:center;">:</td>
                <td style="width:60%;">
                    <p class="atasbawah">{{ $nama }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left; ">Tempat, tanggal lahir</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $tempat_tanggal_lahir }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Kewarganegaraan</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $kewarganegaraan }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;"> Agama</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $agama }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left; ">Pekerjaan</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $pekerjaan }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Tempat Tinggal</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $tempat_tinggal }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left; ">NIK</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $nik }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left; ">Keperluan</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $keperluan }}</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Berlaku Mulai</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $berlaku_mulai }} s/d Selesai</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Keterangan Lain-Lain</td>
                <td style="text-align:center;">:</td>
                <td>
                    <p class="atasbawah">{{ $keterangan_lain }}</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="tengah">
        <p>Demikian untuk menjadikan maklum bagi yang berkepentingan</p>
        <p>Nomor............................................................</p>
        <p>Tanggal..........................................................</p>
        <br>
        
    
    </div>

    <table style="width:100%;  table-layout:fixed; margin: 0px; ">
        <tr>
           
            <td style="width:25%; text-align:center;">
                <div class="tanda_tangan" id="ybs" >
                    <br>
                    <div class="kosong">Yang Bersangkutan</div>
                    <br>
                    <br>
                    <br>
                    <div id="nama_pemohon" style="text-transform:uppercase;">{{ $nama }}</div>
                </div>   
            </td>
            <td style="width:50%; text-align:left;">
                <!-- <div class="tanda_tangan" id="ybs" >
                    <br>
                    <div class="kosong">Yang Bersangkutan</div>
                    <br>
                    <br>
                    <br>
                    <div id="nama_pemohon" style="text-transform:uppercase;">{{ $nama }}</div>
                </div>    -->
            </td>
            <td style="width:30%; text-align:center;">
                <div class="tanda_tangan" >
                    <div >Kamal, {{ $tanggal }}</div>
                    <div class="kosong" id="pejabat">KEPALA DESA KAMAL</div>
                    <div id="nama_pejabat">
                        <br>
                        <br>
                        <br>
                        <span style="text-transform:uppercase;">{{ $kepala_desa }}</span>
                    </div>
                </div>
            </td>
            
        </tr>
        
        <tr >
            <td style="width:25%; text-align:center;">
                <!-- <div class="tanda_tangan" id="ybs" >
                    <br>
                    <div class="kosong">Yang Bersangkutan</div>
                    <br>
                    <br>
                    <br>
                    <div id="nama_pemohon" style="text-transform:uppercase;">{{ $nama }}</div>
                </div>    -->
            </td>
            
            <td style="width:50%; text-align:center;">
                <div class="tanda_tangan" id="ybs" >
                    <br>
                    <div >Mengetahui,</div>
                    <div class="kosong" id="pejabat">Camat Bulu</div>
                    <br>
                    <br>
                    <br>
                    <div id="nama_pemohon" style="text-transform:uppercase;">......................................</div>
                </div>   
            </td>
            <td style="width:25%; text-align:center;">
                <!-- <div class="tanda_tangan" >
                    <div >Kamal, {{ $tanggal }}</div>
                    <div style=" text-align:left;"  class="kosong" id="pejabat">Kepala Desa</div>
                    <div id="nama_pejabat">
                        <br>
                        <br>
                        <br>
                        <span style="text-transform:uppercase;">{{ $kepala_desa }}</span>
                    </div>
                </div> -->
            </td>
            
           
            
        </tr>
    </table>
     
    
</body>
</html>
