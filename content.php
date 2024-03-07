
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Surat Keterangan Aktif Guru</title>
    <style>
            @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");

            body {
              font-family: Roboto, sans-serif;
              font-size: 14px;
              margin: 0;
              padding: 0;
            }

            .kop {
              text-align: center;
              margin-bottom: 20px;
            }

            .kop img {
              max-width: 100px;
            }

            .kop h1 {
              font-size: 18px;
              margin-top: 10px;
              margin-bottom: 5px;
            }

            .kop h2 {
              font-size: 16px;
              margin-bottom: 10px;
            }

            .isi {
              margin-left: 20px;
              margin-right: 20px;
            }

            .paragraf {
              text-align: justify;
              margin-bottom: 10px;
            }

            .ttd {
              text-align: right;
              margin-top: 20px;
            }

            .ttd p {
              margin-bottom: 5px;
            }
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

      body {
        font-family: Roboto, sans-serif;
        font-size: 14px;
        margin: 0;
        padding: 0;
      }

      .kop {
        text-align: center;
        margin-bottom: 20px;
      }

      .kop img {
        max-width: 100px;
      }

      .kop h1 {
        font-size: 18px;
        margin-top: 10px;
    </style>
  </head>
  <body>
    <div class="kop">
      <img
        src="https://publishinglasopa883.weebly.com/uploads/1/2/5/4/125489495/392649916.png"
        alt="Logo Sekolah"
      />
    </div>

    <div class="isi">
      <p class="paragraf">Yang bertanda tangan di bawah ini,</p>

      <table style="width: 100%">
        <tr>
          <td style="width: 20%">Nama</td>
          <td style="width: 2%">:</td>
          <td>[Nama Kepala Sekolah]</td>
        </tr>
        <tr>
          <td>NIP</td>
          <td>:</td>
          <td>[NIP Kepala Sekolah]</td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td>:</td>
          <td>Kepala Sekolah</td>
        </tr>
      </table>

      <p class="paragraf">Menerangkan bahwa:</p>

      <table style="width: 100%">
        <tr>
          <td style="width: 20%">Nama</td>
          <td style="width: 2%">:</td>
          <td>[Nama Guru]</td>
        </tr>
        <tr>
          <td>NIP</td>
          <td>:</td>
          <td>[NIP Guru]</td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td>:</td>
          <td>Guru</td>
        </tr>
      </table>

      <p class="paragraf">
        Benar-benar adalah guru aktif di [Nama Sekolah] sejak [Tanggal Mulai
        Bekerja] sampai dengan saat ini.
      </p>

      <p class="paragraf">
        Surat keterangan ini dibuat untuk keperluan [Keperluan Surat].
      </p>
    </div>
    <?php
    // Receive the parameter from the main PHP file
    if(isset($param)) {
        echo "<h1>$param</h1>";
    } else {
        echo "<h1>No parameter received</h1>";
    }
    ?>
    <p>helloooo</p>
    <?php echo "siuuu"
    ?>
    <div class="ttd">
      <p>Semarang, [Tanggal]</p>
      <p>Kepala Sekolah,</p>
      <br />
      <br />
      <p>[Nama Kepala Sekolah]</p>
      <p>NIP. [NIP Kepala Sekolah]</p>
    </div>
  </body>
</html>
