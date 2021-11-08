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
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>chó con</td>
                            <td>2000000</td>
                            <td>2</td>
                            <td>4000000</td>
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
                        <thead>
                          <tr>
                            <th>Tên</th>
                            <th>Lê Văn Tùng</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>chó con</td>
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
  