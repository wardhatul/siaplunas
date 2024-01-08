                    <?php

                    if (isset($data)) {
                        $d = $data->row();
                    ?>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Dashboard</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="desc">Jumlah NOP</span>
                                                    <h2 class="number"><?= isset($d->jumlah_nop) ? $d->jumlah_nop : 'N/A' ?></h2>
                                                    <span class="desc">PBB (Rp.)</span>
                                                    <h4 class="number"><?= isset($d->total_pajak) ? $rupiah($d->total_pajak) : 'N/A' ?></h4>
                                                </div>

                                                <hr>
                                                <a href="<?= base_url() ?>datasppt">
                                                    <i class="fa fa-link"></i> Lihat Data
                                                </a>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c2">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-card"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="desc">Lunas</span>
                                                    <h2 class="number"><?= isset($d->jumlah_nop) ? $d->jumlah_nop : 'N/A' ?></h2>
                                                    <span class="desc">PBB (Rp.)</span>
                                                    <h4 class="number"><?= isset($d->total_pajak) ? $rupiah($d->total_pajak) : 'N/A' ?></h4>
                                                </div>

                                                <hr>
                                                <a href="<?= base_url() ?>pbblunas">
                                                    <i class="fa fa-link"></i> Lihat Data
                                                </a>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c3">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-balance-wallet"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="desc">PBB Terhutang</span>
                                                    <h3 class="number">
                                                        <?php
                                                        if ($d->pajak_terhutang !== null) {
                                                            echo $rupiah($d->pajak_terhutang);
                                                        } else {
                                                            echo 'N/A';
                                                        }
                                                        ?>
                                                    </h3>
                                                </div>

                                                <hr>
                                                <a href="<?= base_url() ?>pbbterhutang">
                                                    <i class="fa fa-link"></i> Lihat Data
                                                </a>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c4">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-chart-donut"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="desc">Presentase Lunas</span>
                                                    <h3 class="number">
                                                        <?php
                                                        if ($d->pajak_terhutang !== null) {
                                                            echo $rupiah($d->pajak_terhutang);
                                                        } else {
                                                            echo 'N/A';
                                                        }
                                                        ?>
                                                    </h3>
                                                </div>

                                                <hr>
                                                <a href="<?= base_url() ?>datasppt">
                                                    <i class="fa fa-link"></i> Lihat Data
                                                </a>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- STATISTIC-->
                            <section class="statistic statistic2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item statistic__item--green">
                                                <?php if ($d->jumlah_nop !== null) : ?>
                                                    <h2 class="number"><?= $d->jumlah_nop ?></h2>
                                                <?php endif; ?>
                                                <span class="desc">Wajib Pajak</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item statistic__item--orange">
                                                <?php if ($d->jumlah_nop !== null) : ?>
                                                    <h2 class="number"><?= $d->jumlah_nop ?></h2>
                                                <?php endif; ?>
                                                <span class="desc">WP Belum Bayar</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item statistic__item--blue">
                                                <?php if ($d->jumlah_nop !== null) : ?>
                                                    <h2 class="number"><?= $d->jumlah_nop ?></h2>
                                                <?php endif; ?>
                                                <span class="desc">WP Lunas</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item statistic__item--red">
                                                <?php if ($d->jumlah_nop !== null) : ?>
                                                    <h2 class="number"><?= $d->jumlah_nop ?></h2>
                                                <?php endif; ?>
                                                <span class="desc">PBB Masuk</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- END STATISTIC-->




                        <?php

                    }
                        ?>