<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="maulziskan">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Sistem Manajemen Sekolah Pride HS</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <style>
  table, th, td {
  border: 2px solid black;
  border-collapse:collapse;
}
</style>
</head>
<body>
  <div class="container">
      <table style="width:100%">
        <tr>
          <th colspan="4">
        <center>PRIDE HOMESCHOOLING CINERE</center><br/>
      <center>ELEMENTARY,JUNIOR & SENIOR HIGH SCHOOL</center><br/>
      <center><b>DAILY PROGRESS REPORT</center></b><br/>
        <?php
        $b=$belajarharian_cetak;

        function hari_indo($tanggal){
          $hari=array(1=>'Senin',
          'Selasa',
          'Rabu',
          'Kamis',
          'Jumat',
          'Sabtu',
          'Minggu'
        );

        $num=date('N',strtotime($tanggal));
        return $hari[$num];
        }
        
         

          function tanggal_indo($tanggal){
          $bulan=array(1=>'Januari',
           'Februari',
           'Maret',
           'April',
           'Mei',
           'Juni',
           'Juli',
           'Agustus',
           'September',
           'Oktober',
           'November',
           'Desember'    
        );
        $split=explode('-',$tanggal);
        return $split[2].' '.$bulan[ (int)$split[1]].' '.$split[0];
        } 
                
          ?>
     
        <center><label>Hari/Tanggal : </label> <?php echo hari_indo($b->tgl_belajar).", ".tanggal_indo($b->tgl_belajar);?>&emsp;&emsp;&emsp;&emsp;
        <label>Jam :</label><?php echo $b->jam_mulai;?></center></th></tr>
        <tr>
          <th style="width:30%"><center>NAMA SISWA</center></th>
          <th style="width:30%"><center>MATERI</center></th>
          <th style="width:40%"><center>PENCAPAIAN SISWA</center></th>
        </tr>
        <tr>
          <td><center><?php echo $b->nama_siswa;?></center></br>
          <center>(<?php echo $b->nama_kelas;?>)</center>
          </td>
          <td><center><?php echo $b->nama_mapel;?></center>
          </td>
          <td><center><?php echo $b->pencapaian_siswa;?></center>
          </td>
        </tr>
        <tr>
          <th style="width:30%"><center>NAMA GURU</center></th>
          <th style="width:30%"><center>STANDAR KOMPETENSI</center></th>
          <th style="width:40%"><center>SARAN GURU</center></th>
        </tr>
        <tr>
          <td><center><?php echo $b->nama_guru;?></center><br/></td>
          <td><center><?php echo $b->standar_kompetensi;?></center><br/></td>
          <td><center><?php echo $b->saran_guru;?></center><br/></td>
        </tr>
        <tr>
          <th><center>PENILAIAN SIKAP SISWA **</center></th>
          <th><center>NILAI</center></th>
          <th><center>NILAI TES FORMATIF **</center></th>
        </tr>
        <tr><td>1. Ketertarikan thd Materi Pelajaran</td>
            <td><center><?php echo $b->ketertarikan;?></td></center>
            <td rowspan="8"><center><?php echo $b->nilai_tesformatif;?></center></td>
        </tr>
        <tr><td>2. Tingkat Keaktifan/Keterlibatan</td>
            <td><center><?php echo $b->keaktifan;?></td></center>
        </tr>
        <tr><td>3. Kedisiplinan</td>
            <td><center><?php echo $b->kedisiplinan;?></td></center>
        </tr>
        <tr><td>4. Ketekunan</td>
            <td><center><?php echo $b->ketekunan;?></td></center>
        </tr>
        <tr><td>5. Konsentrasi</td>
          <td><center><?php echo $b->konsentrasi;?></td></center>
        </tr>
        <tr><td>6. Semangat & Antusiasme</td>
            <td><center><?php echo $b->antusiasme;?></td></center>
        </tr>
        <tr><td>7. Kesopanan</td>
            <td><center><?php echo $b->kesopanan;?></td></center>
        </tr>
        <tr><td>8. Motivasi Berprestasi</td>
            <td><center><?php echo $b->motivasi;?></td></center>
        </tr>
        <tr><td>9. Kemandirian</td>
            <td><center><?php echo $b->kemandirian;?></td></center>
            <td rowspan="2">* Jika Guru mengadakan Tes/Quiz<br/>
            ** A= Baik Sekali, B= Baik, C=Cukup, D= Kurang, E=Kurang Sekali</td>
        </tr>
        <tr><td>10. Happiness</td>
            <td><center><?php echo $b->happiness;?></td></center>
        </tr>
        

        
        
         
         
         
         

        
        



      </table>

<script type="text/javascript">
			window.print();
		</script>

</body>
</html>