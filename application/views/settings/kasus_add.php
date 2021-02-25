<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Breadcrumbs -->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
  <li class="breadcrumb-item">Settings</li>
  <li class="breadcrumb-item"><a href="<?= base_url() ?>settings/kasus">Kasus</a></li>
  <li class="breadcrumb-item active">Add Kasus</li>
</ol>

<form method="POST" action="<?= base_url() ?>settings/kasus">
  <input type="hidden" name="action" value="add">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">RW</label>
    <div class="col-1">
      <input class="form-control" type="text" placeholder="" name="rw">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">RT</label>
    <div class="col-1">
      <input class="form-control" type="text" placeholder="" name="rt">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Kasus</label>
    <div class="col-1">
      <input class="form-control" type="number" placeholder="" name="kasus">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-10">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </div>


</form>