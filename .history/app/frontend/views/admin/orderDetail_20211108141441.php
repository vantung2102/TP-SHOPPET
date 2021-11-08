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
        <div class="col">
          <div class="page">
            <div class="section-body mt-4">
              <div class="container-fluid">
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
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>A30</td>
                            <td>Le Văn Tùng</td>
                            <td>00000000</td>
                            <td>aa@gmail.com</td>
                            <td>12/45/23</td>
                            <td>
                              <a href="<?= base_url('admin/orderDetail') ?>">
                                <button
                                  type="button"
                                  class="btn btn-icon btn-sm"
                                  title="View"
                                >
                                  <i class="fa fa-eye"></i>
                              </a>
                              </button>
                              <button
                                type="button"
                                class="btn btn-icon btn-sm"
                                title="Edit"
                              >
                                <i class="fa fa-edit"></i>
                              </button>
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
  