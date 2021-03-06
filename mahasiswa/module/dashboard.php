                    <?php 
                        //include config
                        include_once('../library/config.php');
                        //include environment
                        include('../library/environment.php');
                        //include koneksi
                        include('./library/database.php');
                        //var session nim
                        $var = $_SESSION['nim'];
                        //query
                        $query  = "SELECT * FROM view_mahasiswa WHERE nim = '$var'";
                        $result =  mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                $nim            = $row['nim'];
                                $nama_mhs       = $row['nama_mhs'];
                                $kode_tahun     = $row['kode_tahun'];
                                $kode_jurusan   = $row['kode_jurusan'];
                                $semester       = $row['semester'];
                            }

                            //var data nim
                            $var = $_SESSION['nim'];
                            //Data mentah yang ditampilkan ke tabel    
                            include ('../library/database.php');
                            $query  = "SELECT * FROM skripsi WHERE nim = '$var'";
                            $result =  mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                  $nim         = $row['nim'];
                                  $nama        = $row['mahasiswa'];
                                  $judul1      = $row['judul1'];
                                  $description1= $row['desjudul1'];
                                  $status1     = $row['status_judul1']; 
                                  $judul2      = $row['judul2'];
                                  $description2= $row['desjudul2'];
                                  $status2     = $row['status_judul2'];
                                  $pembimbing1 = $row['pembimbing1'];
                                  $pembimbing2 = $row['pembimbing2'];
                                  $kelas       = $row['kelas'];
                                } 
                            error_reporting('0');     
                            //status judul 1    
                            if($status1 == '0')
                            {
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #0b6e84;margin-top:20px">
                                            Belum Dikoreksi
                                          </div>';

                            }elseif($status1 == '1'){
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px">
                                            Judul Diterima
                                          </div>';
                            }elseif($status1 == '2'){
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #840b0b;margin-top:20px">
                                            Judul Ditolak
                                          </div>';
                            }else{
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #bb6f11;margin-top:20px">
                                            Status Tidak Diketahui
                                          </div>';
                            }
                            //status judul 2 
                            if($status2 == '0')
                            {
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #0b6e84;margin-top:20px">
                                            Belum Dikoreksi
                                          </div>';
                            }elseif($status2 == '1'){
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px">
                                            Judul Diterima
                                          </div>';
                            }elseif($status2 == '2'){
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #840b0b;margin-top:20px">
                                            Judul Ditolak
                                          </div>';
                            }else{
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #bb6f11;margin-top:20px">
                                            Status Tidak Diketahui
                                          </div>';
                            }                                
                                                                          
                    ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-6">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-notebook"></i> Panduan Pengisian Pengajuan Judul Skripsi
                </div>
                  <div class="panel-body">                
                    <ul class="list-unstyled">
                      <li style="margin-bottom:10px"><i class="fa fa-info-circle color-green"></i> Mahasiswa wajib memasukkan 2 judul (tidak boleh kurang ) dan memlilih pembimbing 1 dan 2.</li>
                      <li><i class="fa fa-info-circle color-green"></i> Mahasiswa harus menyertai judul dengan keterangan pendek yang menerangkan.</li>
                        <ul class="list-unstyled">
                            <li style="margin-left:20px"><i class="fa fa-arrow-circle-right color-green"></i> Tujuan atau alasan dipilihnya judul tersebut.</li>
                            <li style="margin-left:20px"><i class="fa fa-arrow-circle-right color-green"></i> Apa saja yang akan dihasilkan oleh judul tersebut.</li>
                      <li style="margin-top:10px"><i class="fa fa-info-circle color-green"></i> Mahasiswa dapat menyertakan gambar (jpeg) yang berisikan diagram (DFD atau FLOWCART atau yang lainnya) untuk menerangkan judul yang dipilih.</li>      
                        </ul>
                    </ul>
                  </div>
              </div>
              </div>

            <div class="col-md-6">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-user"></i> Detail Account
                </div>
                  <div class="panel-body">                
                          <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th class="text-center" width="15%">Atrribute</th>
                                  <th class="text-center" width="35%">Value</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>NIM</td>
                                  <td><?php echo $nim ?></td>
                                </tr>
                                <tr>
                                  <td>Nama Mahasiswa</td>
                                  <td><?php echo $nama_mhs ?></td>
                                </tr>
                                <tr>
                                  <td>Semester</td>
                                  <td><?php echo $semester ?></td>
                                </tr>                                                            
                              </tbody>
                            </table>     
                            </div> 
                  </div>
              </div>
              </div>              
              </div>


            <div class="row"> 
            <?php 
              //include 
              include_once('../library/environment.php');
              //include koneksi
              include_once('../library/database.php');
              //var data
              $nim = $_SESSION['nim'];
              //query checking
              $query = "SELECT nim FROM skripsi WHERE nim = '$nim'";
              $result =  mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)){
                $register = $row['nim'];
              }

            ?>
            <?php if(isset($register) =='') { ?>
            <div class="col-md-12">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
              <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul</div>
                <div class="panel-body">
                    <a href="media.php?action=ajukan-judul&token=<?php echo SHA1(MD5(SHA1(MD5($_SESSION['nim'])))) ?>?source=dashboard" class="btn btn-success"><i class="pe-7s-note2"></i> Ajukan Judul Baru</a>
                </div>
              </div>
              </div>
            <?php }else{ ?>
            <div class="col-md-12">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
              <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul</div>
              <div class="panel-body">                
                      <div id="chart-grafik">
                      </div>
                      <div class="col-md-6">
                        <div class="table-responsive">
                        <div class="alert alert-info text-center" style="background-color:#158873">
                          Judul Skripsi 1
                        </div>
                          <table class="table table-bordered table-striped" style="font-family:'ubuntu'">
                            <thead>
                              <tr>
                                <th class="text-center" width="5%">Atrribute</th>
                                <th class="text-center" width="35%">Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Status Judul</td>
                                <td><?php if(isset($button1)) { echo $button1; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>                            
                              <tr>
                                <td>Judul Skripsi</td>
                                <td><?php if(isset($judul1)) { echo $judul1; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                              <tr>
                                <td>Desciptions Judul</td>
                                <td><?php if(isset($description1)) { echo $description1; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                              <tr>
                                <td>Dosen Pembimbing</td>
                                <td><?php $i=0;
                                      foreach($kPembimbing1 as $pemb1){
                                        if($pembimbing1 == $i++)
                                          echo $pemb1;
                                      }
                                    ?></td>
                              </tr>              
                            </tbody>
                          </table>     
                          </div>              
                          </div>

                          <div class="col-md-6">
                            <div class="table-responsive">
                            <div class="alert alert-info text-center" style="background-color:#158873">
                              Judul Skripsi 2
                            </div>
                              <table class="table table-bordered table-striped" style="font-family:'ubuntu'">
                                <thead>
                                  <tr>
                                    <th class="text-center" width="5%">Atrribute</th>
                                    <th class="text-center" width="35%">Value</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Status Judul </td>
                                    <td><?php if(isset($button2)) { echo $button2; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                                  </tr>                                
                                  <tr>
                                    <td>Judul Skripsi</td>
                                    <td><?php if(isset($judul2)) { echo $judul2; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                                  </tr>
                                  <tr>
                                    <td>Desciptions Judul</td>
                                    <td><?php if(isset($description2)) { echo $description2; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                                  </tr> 
                                  <tr>
                                    <td>Dosen Pembimbing</td>                                   
                                    <td><?php $i=0;
                                      foreach($kPembimbing2 as $pemb2){
                                        if($pembimbing2 == $i++)
                                          echo $pemb2;
                                        }
                                        ?>
                                    </td>
                                  </tr>                                                                                
                                </tbody>
                              </table>  
                              </div>          
                          </div>       
                      </div>
                    </div>    
                    </div>
                    <?php } ?>                                    
                </div>

            </div>
        </div>