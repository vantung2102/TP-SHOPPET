<style>
.table td, .table th{
  padding: 0;
  text-align: center;
  line-height:37px;
}
</style>

<div class="page-content">
    <div class="page-info">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
          <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>

        </ol>
      </nav>
    </div>
    <div class="main-wrapper" style="padding-top: 0">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-6">
          <div class="page">
            <div class="section-body mt-4">
              <div class="container-fluid ">
                <div class="tab-content">
                  <div class="tab-pane active" id="Student-all">
                    <div class="table-responsive card">
                      <table
                        class="
                          table table-hover table-vcenter table-striped
                          mb-0
                          text-nowrap
                        "
                      >
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>ID_ORDER</th>
                            <th>ID_PRODUCT</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                          </tr>
                        </thead>
                        <?php foreach ($data['orderDetail'] as $data): ?>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td><?= $data['order_id'] ?></td>
                              <td><?= $data['pet_id'] ?></td>
                              <td><?= $data['name'] ?></td>
                              <td><?= $data['price'] ?></td>
                              <td><?= $data['num'] ?></td>
                              <td><?= $data['price'] *  $data['num']?></td>
                            </tr>
                          </tbody>
                        <?php endforeach;?>

                        <thead>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Thành tiền</th>
                            <th>12000000</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="page">
            <div class="section-body mt-4">
              <div class="container-fluid ">
                <div class="tab-content">
                  <div class="tab-pane active" id="Student-all">
                    <div class="table-responsive card">
                      <table
                        class="
                          table table-hover table-vcenter table-striped
                          mb-0
                          text-nowrap
                        "
                      >
                      <form action="" method="post">
                        <?php foreach ($data['user'] as $key): ?>
                          <tbody>
                            <tr>
                              <th>Tên</th>
                              <th>Lê Văn Tùng</th>
                            </tr>
                          <!-- </tb> -->
                          <tbody>
                            <tr>
                              <td>Địa chỉ</td>
                              <td>TPHCM</td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                              <td>SĐT</td>
                              <td>0235362</td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                              <td>Email</td>
                              <td>sedfse@gmail.com</td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                              <td>
                              <button
                                  type="button"
                                  class="btn btn-icon btn-sm"
                                  title="Chấp nhận"
                                >
                                  <i class="fa fa-edit"></i>
                                </button>
                              </td>
                              <td>
                                
                                <button
                                  type="button"
                                  class="btn btn-icon btn-sm js-sweetalert"
                                  title="Delete"
                                  data-type="confirm"
                                >
                                  <i class="fa fa-trash text-danger"></i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </form>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

             
              
            </div>

            
          </div>
        </div>
      </div>
    </div>
  </div>
  