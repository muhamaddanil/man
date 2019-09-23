<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h5 class="m-0 text-dark"><?php echo $block_header ?></h5>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <h6 class="container-fluid">
      <h6 class="row clearfix">
        <h6 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h6 class="card">
            <h6 class="card-header">
              <h6 class="row clearfix" style="margin-bottom:-30px">
                <h6 class="col-md-6">
                  <h6>
                    <?php echo strtoupper($header) ?>
                    <small><?php echo $sub_header ?></small>
                  </h6>
                </h6>
                <!-- search form -->
                <div class="col-md-6">
                  <div class="row clearfix">
                    <div class="col-md-2">

                      <div class="row clearfix">
                        <select class="form-control show-tick" id="limit" name="" onchange="changeLimit()">
                          <option value="10">10</option>
                          <option value="20">20</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select>
                      </div>

                    </div>
                    <div class="col-md-10">
                      <form method="get" action="<?php echo site_url($current_page) ?>">
                        <div class="row clearfix">
                          <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" style="margin-bottom:0px!important">
                            <div class="form-group">
                              <div class="form-line">
                                <input type="text" name="key" required class="form-control" placeholder="Pencarian" value="<?php echo ($key) ? $key : '' ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                            <div class="btn-group">
                              <button type="submit" class="btn btn-warning btn-md m-l-15 waves-effect"><i class="material-icons">search</i></button>
                              <a href="<?php echo site_url($current_page); ?>" type="button" class="btn btn-warning btn-md m-l-15 waves-effect"><i class="material-icons">refresh</i></a>
                            </div>
                            <a href="<?php echo site_url($current_page . '/create') ?>" class="btn btn-lg btn-primary">Tambah</a>
                          </div>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </h6>
            </h6>

            <div class="body table-responsive">
              <?php echo $alert ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <?php foreach ($table_header as $kh => $vh) : ?>
                      <th><?php echo $vh ?></th>
                    <?php endforeach; ?>
                    <th>Hak Akses</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  if (!empty($for_table)) : //if array data in not empty, show table
                    $no = $number;
                    foreach ($for_table as $key => $value) :
                      $no++;
                      ?>
                      <tr>
                        <th scope="row"><?php echo $no ?></th>
                        <?php foreach ($table_header as $kh => $vh) : ?>
                          <?php if ($kh == 'status') $value->{$kh} = ($value->{$kh} == 1) ? 'Active' : 'Non-Active'; ?>
                          <td><?php echo $value->{$kh} ?></td>
                        <?php endforeach; ?>
                        <td><a href="<?php echo site_url('setting/groupaccess?id=' . $value->id) ?>" class="btn btn-info btn-md waves-effect">Hak Akses</a></td>
                        <td style="text-align:center">
                          <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">settings</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                              <li><a href="<?php echo site_url($current_page . '/detail/' . $value->id) ?>" class=" waves-effect waves-block">Detail</a></li>
                              <li><a href="<?php echo site_url($current_page . '/edit/' . $value->id) ?>" class=" waves-effect waves-block">Edit</a></li>
                              <li><a href="<?php echo site_url($current_page . '/delete/' . $value->id) ?>" class="waves-effect waves-block">Delete</a></li>

                            </ul>
                          </div>
                        </td>
                      </tr>
                    <?php
                      endforeach;
                    else :
                      ?>
                    <h3>Data Tidak Ditemukan</h3>
                  <?php endif; ?>
                </tbody>
              </table>
              <div class="text-center">
                <?php if (isset($links)) echo $links ?>
              </div>
            </div>
          </h6>
        </h6>
      </h6>
    </h6>
  </section>
</div>