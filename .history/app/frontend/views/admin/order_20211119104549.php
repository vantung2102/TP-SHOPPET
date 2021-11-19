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
      </ol>
    </nav>
  </div>
  <div class="main-wrapper" style="padding-top: 0">
    <div class="row">
      <div class="col">
        <div class="page">
          <div class="section-body">
            <div class="container-fluid">
              <div class="d-flex justify-content-between align-items-center">
                <ul class="nav nav-tabs page-header-tab">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      data-toggle="tab"
                      href="#Student-all"
                      >Danh sách Đơn hàng</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="section-body mt-4">
            <div class="container-fluid">
              <div class="tab-content">
                <div class="tab-pane active" id="Student-all">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Mã đơn hàng"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <a
                            href="javascript:void(0);"
                            class="btn btn-sm btn-primary btn-block"
                            title=""
                            >Search</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
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
                          <th>Mã đơn hàng</th>
                          <th>Họ và tên</th>
                          <th>SĐT</th>
                          <th>Email</th>
                          <th>Địa chỉ</th>
                          <!-- <th>Tổng tiền</th> -->
                          <th>Ngày tạo đơn</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <?php foreach ($data['order'] as $data): $id = $data['id']; $user_id = $data['user_id']; $index = 1; ?>
                      <tbody>
                        <tr>
                          <td><?= $index?></td>
                          <td><?= $data['id']?></td>
                          <td><?= $data['name']?></td>
                          <td><?= $data['phone']?></td>
                          <td><?= $data['email']?></td>
                          <td><?= $data['address']?></td>
                          <!-- <td></td> -->
                          <td><?= $data['order_date']?></td>
                          <td>
                            <a href="<?= base_url("admin/orderDetail?id=$id?user_id=$user_id") ?>">
                              <button
                                type="submit"
                                class="btn btn-icon btn-sm"
                                title="View"
                              >
                                <i class="fa fa-eye"></i>
                            </a>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach;?>
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
