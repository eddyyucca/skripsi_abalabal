<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user_karyawan') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/prosestambah_riwayatpelatihan') ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td width=20%>Bidang Pelatihan</td>
                                <td>
                                    <input type="text" name="bidang" class="form-control" required placeholder="Bidang Pelatihan">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Penyelenggara</td>
                                <td>
                                    <input type="text" name="penyelenggara" class="form-control" required placeholder="Penyelenggara">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Periode</td>
                                <td>
                                    <input type="text" name="periode" class="form-control" required placeholder="Periode">
                                </td>
                            </tr>

                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>

                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>