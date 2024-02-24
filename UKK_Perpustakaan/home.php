<div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
          <?php
            if($_SESSION['user']['level'] !='peminjam'){
          ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Kategori</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            echo mysqli_num_rows(mysqli_query($koneksi,"SELECT*FROM kategoribuku"));
                        ?> 
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Buku</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                            echo mysqli_num_rows(mysqli_query($koneksi,"SELECT*FROM buku"));
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Ulasan</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                      <?php
                            echo mysqli_num_rows(mysqli_query($koneksi,"SELECT*FROM ulasan"));
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
              if($_SESSION['user']['level'] !='peminjam'){
            ?>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                            echo mysqli_num_rows(mysqli_query($koneksi,"SELECT*FROM user"));
                        ?> 
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
              }
              ?>
            <div class="container-fluid">
              <div class="card">
                <div class="card-body">
                    <table class="table table-flush">
                      <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Level</th>
                            <th>Tanggal Login</th>
                        </tr>
                         <tr>
                            <td><?php echo $_SESSION['user']['nama']; ?></td>
                            <td><?php echo $_SESSION['user']['alamat']; ?></td>
                            <td><?php echo $_SESSION['user']['level']; ?></td>
                            <td><?php echo date('d-m-y');?></td>
                        </tr>
                        </thead>
                    </table>
                  </div>
              </div>
            </div>