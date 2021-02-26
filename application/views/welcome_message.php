<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>



<!-- Breadcrumbs -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active">My Dashboard</li>
</ol>

<!-- Area Chart Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-area-chart"></i> Grafik Sebaran Covid 19
    </div>
    <div class="card-block">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">
        Updated <?php echo date('d-m-Y H:i:s') ?>
    </div>
</div>

<div class="row">

    <div class="col-lg-12">

        <!-- Example Bar Chart Card -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bar-chart"></i> Data Sebaran Covid 19
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-12">
                        <canvas id="myBarChart" width="100" height="50"></canvas>
                    </div>
                    
                </div>
            </div>
            <div class="card-footer small text-muted">
                Updated <?php echo date('d-m-Y H:i:s') ?>
            </div>
        </div>

    </div>