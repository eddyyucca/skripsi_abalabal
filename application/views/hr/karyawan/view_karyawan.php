<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('hr/karyawan') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <div class="card-body">
                <?= $pesan ?>

                <div class="row">
                    <div class="col-4">
                        <img class="shadow" <?php
                                            if ($data->foto == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php
                                                                                                                        } else {
                                                                                                                            ?> src="<?= base_url('assets/foto_profil/' . $data->foto) ?>" <?php
                                                                                                                                                                                        } ?> "
                              alt=" Sarana" class="card-img-top" data-holder-rendered="true" style="height: 275px; width: 225px; display: block;">
                    </div>
                    <div class="col-6">
                        <a href="<?= base_url('user_karyawan/cetak_idcard/' . $data->id_karyawan) ?>" class="btn btn-primary mt-2">Mine Permit</a>
                        <a href="<?= base_url('user_karyawan/riwayat_pendidikan/' . $data->id_karyawan) ?>" class="btn btn-primary mt-2">Cetak Data Diri</a>
                        <a href="<?= base_url('hr/reset_password/' . $data->id_karyawan) ?>" class="btn btn-danger mt-2">Reset Password</a>
                        <hr>

                        <table class="mt-1 ml-1">
                            <tr>
                                <td> ID Karyawan</td>
                                <td>: <?= $data->id_karyawan ?> </td>
                            </tr>
                            <tr>
                                <td> Nama</td>
                                <td>: <?= $data->nama_lengkap ?> </td>
                            </tr>
                            <tr>
                                <td> Departemen</td>
                                <td>: <?= $data->nama_dep ?> </td>
                            </tr>
                            <tr>
                                <td> Jabatan </td>
                                <td>: <?= $data->nama_jabatan ?> </td>
                            </tr>
                            <tr>
                                <td> TTL </td>
                                <td>: <?= $data->tempat ?> <?= $data->ttl ?> </td>
                            </tr>
                            <tr>
                                <td> Alamat </td>
                                <td>: <?= $data->alamat_saat_ini ?> </td>
                            </tr>
                            <tr>
                                <td> Email </td>
                                <td>: <?= $data->email ?> </td>
                            </tr>
                            <tr>
                                <td> No Telpon </td>
                                <td>: <?= $data->no_telp ?> </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#pendidikan" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pendidikan">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Pendidikan</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="pendidikan">
                        <div class="card-body">
                            <?php
                            if ($pendidikan == false) {
                                echo "-- Data Kosong --";
                            } else { ?>
                                <?php foreach ($pendidikan as $pen) { ?>
                                    <table border="0">
                                        <tr>
                                            <td>Tingkatan</td>
                                            <td> : <?= $pen->tingkat_pendidikan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Sekolah</td>
                                            <td> : <?= $pen->nama_sekolah ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Jurusan</td>
                                            <td> : <?= $pen->nama_jurusan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kota Pendidikan </td>
                                            <td> : <?= $pen->kota_pendidikan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Pendidikan </td>
                                            <td> : <?= $pen->tahun_pendidikan ?></td>
                                        </tr>
                                        <!-- <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr> -->
                                    </table>
                                    <hr>
                                    </tr>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#rw_pekerjaan" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="rw_pekerjaan">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Pekerjaan</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="rw_pekerjaan">
                        <div class="card-body">
                            <?php
                            if ($riwayat_pekerjaan == false) {
                                echo "-- Data Kosong --";
                            } else { ?>
                                <?php foreach ($riwayat_pekerjaan as $rp) { ?>
                                    <table border="0">
                                        <tr>
                                            <td>Nama Perusahaan</td>
                                            <td> : <?= $rp->nama_perusahaan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bidang Usaha Jurusan</td>
                                            <td> : <?= $rp->bidang_usaha ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan Terakhir</td>
                                            <td> : <?= $rp->jab_terakhir ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gaji Terakhir</td>
                                            <td> : <?= $rp->gaji_terakhir ?></td>
                                        </tr>
                                        <tr>
                                            <td>Periode</td>
                                            <td> : <?= $rp->periode ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alasan Berhenti</td>
                                            <td> : <?= $rp->alasan_berhenti ?></td>
                                        </tr>

                                    </table>
                                    <hr>
                                    </tr>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#datapasangan" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="datapasangan">
                        <h6 class="m-0 font-weight-bold text-primary">Data pasangan</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="datapasangan">
                        <div class="card-body">
                            <?php
                            if ($pasangan == false) {
                                echo "-- Data Kosong --";
                            } else { ?>
                                <?php foreach ($pasangan as $s) { ?>
                                    <table border="0">

                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td> : <?= $s->nama_lengkap_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Panggilan</td>
                                            <td> : <?= $s->nama_panggilan_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>TTL</td>
                                            <td> : <?= $s->tempat_pasangan  ?> <?= $s->ttl_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>No KTP</td>
                                            <td> : <?= $s->no_ktp_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td> : <?= $s->alamat_saat_ini_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan</td>
                                            <td> : <?= $s->pendidikan_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>No Telpon</td>
                                            <td> : <?= $s->telpon_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td> : <?= $s->agama_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Warganegara</td>
                                            <td> : <?= $s->warganegra_pasangan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Suku</td>
                                            <td> : <?= $s->suku_pasangan ?></td>
                                        </tr>

                                    </table>
                                    <hr>
                                    </tr>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#dataanak" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="dataanak">
                        <h6 class="m-0 font-weight-bold text-primary">Data Anak</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="dataanak">
                        <div class="card-body">
                            <?php
                            if ($pasangan == false) {
                                echo "-- Data Kosong --";
                            } else { ?>
                                <?php foreach ($anak as $a) { ?>
                                    <table border="0">

                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td> : <?= $a->nama_lengkap_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Panggilan</td>
                                            <td> : <?= $a->nama_panggilan_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>TTL</td>
                                            <td> : <?= $a->tempat_anak  ?> <?= $a->ttl_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>No KTP</td>
                                            <td> : <?= $a->no_ktp_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td> : <?= $a->alamat_saat_ini_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan</td>
                                            <td> : <?= $a->tingkat_pendidikan_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>No Telpon</td>
                                            <td> : <?= $a->no_telp_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td> : <?= $a->agama_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>Warganegara</td>
                                            <td> : <?= $a->warganegara_anak ?></td>
                                        </tr>
                                        <tr>
                                            <td>Suku</td>
                                            <td> : <?= $a->suku_anak ?></td>
                                        </tr>

                                    </table>
                                    <hr>
                                    </tr>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#dataortu" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="dataortu">
                        <h6 class="m-0 font-weight-bold text-primary">Data Orang Tua</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="dataortu">
                        <div class="card-body">
                            <?php
                            if ($ortu == false) {
                                echo "-- Data Kosong --";
                            } else { ?>
                                <table border="0">
                                    <tr>
                                        <td align="center" colspan="2">
                                            <hr>
                                            <h3>Data Orang Tua Laki-Laki</h3>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td> : <?= $ortu->nama_lengkap_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Panggilan</td>
                                        <td> : <?= $ortu->nama_panggilan_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>TTL</td>
                                        <td> : <?= $ortu->tempat_ortu_lk  ?> <?= $ortu->ttl_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>No KTP</td>
                                        <td> : <?= $ortu->no_ktp_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td> : <?= $ortu->alamat_saat_ini_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan</td>
                                        <td> : <?= $ortu->tingkat_pendidikan_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Telpon</td>
                                        <td> : <?= $ortu->no_telp_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td> : <?= $ortu->agama_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>Warganegara</td>
                                        <td> : <?= $ortu->warganegara_ortu_lk ?></td>
                                    </tr>
                                    <tr>
                                        <td>Suku</td>
                                        <td> : <?= $ortu->suku_ortu_lk ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <hr>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="center" colspan="2">
                                            <h3>Data Orang Tua Perempuan</h3>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td> : <?= $ortu->nama_lengkap_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Panggilan</td>
                                        <td> : <?= $ortu->nama_panggilan_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>TTL</td>
                                        <td> : <?= $ortu->tempat_ortu_pr  ?> <?= $ortu->ttl_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>No KTP</td>
                                        <td> : <?= $ortu->no_ktp_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td> : <?= $ortu->alamat_saat_ini_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan</td>
                                        <td> : <?= $ortu->tingkat_pendidikan_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Telpon</td>
                                        <td> : <?= $ortu->no_telp_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td> : <?= $ortu->agama_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Warganegara</td>
                                        <td> : <?= $ortu->warganegara_ortu_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Suku</td>
                                        <td> : <?= $ortu->suku_ortu_pr ?></td>
                                    </tr>
                                </table>
                                <hr>
                                </tr>
                            <?php }   ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#overtime" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="overtime">
                        <h6 class="m-0 font-weight-bold text-primary">Overtime</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="overtime">
                        <div class="card-body">
                            <?php if ($overtime == false) {
                                echo '--OVERTIME KOSONG--';
                            } else {
                                echo "Jumlah Overtim Bulan Ini " . $overtime;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
</div>