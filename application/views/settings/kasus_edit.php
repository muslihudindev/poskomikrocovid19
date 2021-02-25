<?php
defined('BASEPATH') or exit('No direct script access allowed');
$result = $result[0];
?>
<!-- Breadcrumbs -->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
  <li class="breadcrumb-item">Settings</li>
  <li class="breadcrumb-item"><a href="<?= base_url() ?>settings/kasus">Kasus</a></li>
  <li class="breadcrumb-item active">Edit Kasus</li>
</ol>

<form method="POST" action="">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" value="<?= $result["id"] ?>">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">RW</label>
    <div class="col-1">
      <input class="form-control" readonly type="text" value="<?= $result["rw"] ?>" placeholder="" name="rw">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">RT</label>
    <div class="col-1">
      <input class="form-control" readonly type="text" value="<?= $result["rt"] ?>" placeholder="" name="rt">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Kasus</label>
    <div class="col-1">
      <input class="form-control" type="number" value="<?= $result["kasus"] ?>" placeholder="" name="kasus">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-10">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </div>


</form>