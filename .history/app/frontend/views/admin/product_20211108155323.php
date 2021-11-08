<div class="page-content">
  <div class="page-info">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
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
                      >Danh sách sản phẩm</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Student-add"
                      >Thêm sản phẩm</a
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
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Mã sản phẩm"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Tên"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <select
                            class="form-control input-height"
                            name="department"
                          >
                            <option value="">Giá...</option>
                            <option value="Category 1">Computer</option>
                            <option value="Category 2">Mechanical</option>
                            <option value="Category 3">Mathematics</option>
                            <option value="Category 3">Commerce</option>
                          </select>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <select
                            class="form-control input-height"
                            name="department"
                          >
                            <option value="">Phân loại...</option>
                            <option value="Category 1">Computer</option>
                            <option value="Category 2">Mechanical</option>
                            <option value="Category 3">Mathematics</option>
                            <option value="Category 3">Commerce</option>
                          </select>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
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
                          <th>Mã sản phẩm</th>
                          <th>Tên sản phẩm</th>
                          <th>Số lượng</th>
                          <th>Màu</th>
                          <th>Phân loại</th>
                          <th>Giá cũ</th>
                          <th>Giá mới</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>A20</td>
                          <td>Chó phốc sơn</td>
                          <td>7</td>
                          <td>Vàng</td>
                          <td>Đực</td>
                          <td>12000</td>
                          <td>30000</td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-icon btn-sm"
                              title="View"
                            >
                              <i class="fa fa-eye"></i>
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
                <div class="tab-pane" id="Student-add">
                  <div class="row clearfix">
                    <div class="col">
                      <div class="card">
                        <form class="card-body">
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Tên sản phẩm
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Nhập tên"
                              />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Số lượng <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label">Màu</label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label">Mô tả</label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Giá cũ
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Giá mới
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Ảnh </label
                            >
                            <div class="col-md-9">
                              <div class="dropify-wrapper">
                                <div class="dropify-loader"></div>
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <input type="file" class="dropify" />
                                <button
                                  type="button"
                                  class="dropify-clear"
                                >
                                  Xóa
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-9">
                              <div class="dropify-wrapper">
                                <div class="dropify-loader"></div>
                                <div class="dropify-errors-container">
                                  <ul></ul>
                                </div>
                                <input type="file" class="dropify" />
                                <button
                                  type="button"
                                  class="dropify-clear"
                                >
                                  Xác nhận
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
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
  </div>
</div>
