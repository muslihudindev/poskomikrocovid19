<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>/resources/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/resources/css/flexbox.css">
    <title>Sistem Informasi Penyebaran Kasus COVID-19 | Kelurahan Bener</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                Sistem Informasi Peta Penyebaran Kasus COVID-19 Kelurahan Bener
            </div>
            <ul>
                <li><a href="#">Tentang Aplikasi</a></li>
                <li><a href="<?=base_url()?>/login">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="page-container">
            <div class="content">
                <article id="php" class="card-simple">
                    <div class="post-content">

                        <div class="container">

                            <div class="box col-10" style="background-color: white;">
                                <div id="image-map" class="center"> 
                                    <img src="<?=base_url()?>/resources/image/kelurahan-bener-peta.png" usemap="#image-map" class="map">
                                    <map name="image-map">
                                    <?php foreach ($koordinat_peta as $row): ?>
                                        <area id="id<?php echo $row['rt'] ?>" target="" alt="RT <?php echo $row['rt'] ?>" title="RT <?php echo $row['rt'] ?> | RW <?php echo $row['rw'] ?> " href="" coords="<?php echo $row['coords'] ?>" data-name="RT <?php echo $row['rt'] ?>" shape="poly">
                                    <?php endforeach ?>
                                    </map> 
                                </div>
                            </div>

                            <div class="box col-2" style="background-color: white;border: white;">
                                <div class="box">
                                    <div style="text-align: center;font-weight: bold;">
                                        KETERANGAN
                                    </div>
                                </div>
                                <div class="box">
                                    <?php foreach ($keterangan as $row): ?>
                                        <div><?php echo $row['ket'] ?> : <?php echo $row['jml'] ?></div>
                                    <?php endforeach ?>
                                    <?php foreach ($keterangan_detail as $row): ?>
                                        <div><?php echo $row['ket'] ?> : <?php echo $row['jml'] ?></div>
                                    <?php endforeach ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </article>
            </div>
            <aside>
                <article class="card-simple">
                    <div class="container">
                        <div class="box">
                            <div style="text-align: center;font-weight: bold;">
                                KATEGORI ZONASI
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="box">
                            <div><i class="fas fa-square" style="color: green;"></i> 0 Kasus </div>
                            <div><i class="fas fa-square" style="color: yellow;"></i> 1 - 5 Kasus</div>
                            <div><i class="fas fa-square" style="color: orange;"></i> 6 - 10 Kasus</div>
                            <div><i class="fas fa-square" style="color: red;"></i> > 10 Kasus</div>
                        </div>
                    </div>
                </article>

                <article class="card-simple" id="data-rt-rw">
                    <!-- DATA RT RW -->
                    <div class="container-rw">
                        <?php foreach ($data_rw as $row): ?>
                        <?php 
                            $CI =& get_instance();
                            
                            $kuning = $row['kasus_kuning']>0 ? $row['kasus_kuning'].' RT ('.$CI->GetJumlahRTTerdampak($row['rw'],'kuning').')' : 0;
                            $oranye = $row['kasus_oranye']>0 ? $row['kasus_oranye'].' RT ('.$CI->GetJumlahRTTerdampak($row['rw'],'oranye').')' : 0;
                            $merah = $row['kasus_merah']>0 ? $row['kasus_merah'].' RT ('.$CI->GetJumlahRTTerdampak($row['rw'],'merah').')' : 0;
                        ?>
                        <div class="box">
                            <div class="text-rw">RW <?php echo $row['rw'] ?> | <?php echo $row['jml_rt'] ?> RT</div>
                            <hr>
                            <div><i class="fas fa-square" style="color: green;"></i> <?php echo $row['jml_rt_0_kasus'] ?> RT</div>
                            <div><i class="fas fa-square" style="color: yellow;"></i> <?php echo $kuning ?></div>
                            <div><i class="fas fa-square" style="color: orange;"></i> <?php echo $oranye ?></div>
                            <div><i class="fas fa-square" style="color: red;"></i> <?php echo $merah ?></div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <!-- <div class="container">
                        <div class="box">
                            <div class="text-rw">RW III</div>
                            <hr>
                            <div><i class="fas fa-square" style="color: green;"></i> 4 RT</div>
                            <div><i class="fas fa-square" style="color: yellow;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: orange;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: red;"></i> 0</div>
                        </div>
                        <div class="box">
                            <div class="text-rw">RW IV</div>
                            <hr>
                            <div><i class="fas fa-square" style="color: green;"></i> 4 RT</div>
                            <div><i class="fas fa-square" style="color: yellow;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: orange;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: red;"></i> 0</div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="box">
                            <div class="text-rw">RW V</div>
                            <hr>
                            <div><i class="fas fa-square" style="color: green;"></i> 4 RT</div>
                            <div><i class="fas fa-square" style="color: yellow;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: orange;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: red;"></i> 0</div>
                        </div>
                        <div class="box">
                            <div class="text-rw">RW VI</div>
                            <hr>
                            <div><i class="fas fa-square" style="color: green;"></i> 4 RT</div>
                            <div><i class="fas fa-square" style="color: yellow;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: orange;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: red;"></i> 0</div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="box">
                            <div class="text-rw">RW VII</div>
                            <hr>
                            <div><i class="fas fa-square" style="color: green;"></i> 4 RT</div>
                            <div><i class="fas fa-square" style="color: yellow;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: orange;"></i> 0</div>
                            <div><i class="fas fa-square" style="color: red;"></i> 0</div>
                        </div>
                        <div class="box" style="color: white;border: white;background-color: white;">
                            <div>RW 000</div>
                            <div>0</div>
                            <div>0</div>
                            <div>0</div>
                            <div>0</div>
                        </div>
                    </div> -->
                    <!-- DATA RT RW -->
                </article>

            </aside>
        </div>

    </main>
    <footer>
        <p> Developed by Team KKN UPY 35 | 2020 &#169; Kelurahan Bener</p>
    </footer>
</body>
</html>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="<?=base_url()?>/resources/js/script.js"></script>
<script type="text/javascript" src="<?=base_url()?>/resources/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/resources/js/jquery.maphilight.min.js"></script>
<script type="text/javascript">
	$(function() {
        <?php foreach ($koordinat_peta as $row): ?>
            var data<?php echo $row['rt'] ?> = {};
        <?php endforeach ?>
	    
        
        $('.map').maphilight();

        // color library
        // merah ff0000
        // hijau 00ff00
        // orange #ffa500
        // yellow #ffff00
        
        <?php foreach ($koordinat_peta as $row): ?>
        <?php 
            if ($row['kasus']==0) {
                $statuswarna = '00ff00';
            } else if ($row['kasus']>=1 && $row['kasus']<=5) {
                $statuswarna = 'ffff00';
            } else if ($row['kasus']>=6 && $row['kasus']<=10) {
                $statuswarna = 'ffa500';
            } else if ($row['kasus']>10) {
                $statuswarna = 'ff0000';
            }
        ?>
        data<?php echo $row['rt'] ?>.alwaysOn = true;
        data<?php echo $row['rt'] ?>.fillColor = '<?php echo $statuswarna ?>';
        data<?php echo $row['rt'] ?>.stroke = false;
        data<?php echo $row['rt'] ?>.fillOpacity = '0.6';
        data<?php echo $row['rt'] ?>.stroke = true;
        data<?php echo $row['rt'] ?>.strokeColor = '0000';
        data<?php echo $row['rt'] ?>.strokeOpacity = 1;
        data<?php echo $row['rt'] ?>.strokeWidth = 2;
	    $('#id<?php echo $row['rt'] ?>').data('maphilight', data<?php echo $row['rt'] ?>).trigger('alwaysOn.maphilight');
        <?php endforeach ?>
     });
</script>