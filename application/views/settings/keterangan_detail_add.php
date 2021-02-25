<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Breadcrumbs -->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
  <li class="breadcrumb-item">Settings</li>
  <li class="breadcrumb-item"><a href="<?= base_url() ?>settings/keterangan">Keterangan</a></li>
  <li class="breadcrumb-item active">Add Keterangan</li>
</ol>

<form method="POST" action="<?= base_url() ?>settings/keterangan_detail">
  <input type="hidden" name="action" value="add">
  <input type="hidden" name="id_keterangan" value="<?= $id_keterangan?>">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Keterangan</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="" name="ket">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Jumlah</label>
    <div class="col-1">
      <input class="form-control" type="number" placeholder="" name="jml">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-10">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </div>


</form>