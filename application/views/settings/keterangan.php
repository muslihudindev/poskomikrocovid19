<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>



<!-- Breadcrumbs -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Keterangan</li>
</ol>


<!-- Example Tables Card -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Keterangan <a href="<?= base_url() ?>settings/keterangan/add"><button class="btn btn-primary">+</button></a>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($keterangan as $v) { ?>
                        <tr>
                            <td align="center"><?= $v["id"] ?></td>
                            <td align="center"><?= $v["ket"] ?></td>
                            <td align="center"><?= $v["jml"] ?></td>
                            <td>
                                <form method="POST" action="" style="display:inline;"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?= $v["id"] ?>"><input type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" value="Delete"></form> <a href="<?= base_url() ?>settings/keterangan/edit/<?= $v["id"] ?>"><button class="btn btn-primary">Edit</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>