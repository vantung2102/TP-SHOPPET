<div class="page-content">
  <div class="page-info">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active" aria-current="page">
          Tài khoản khách hàng
        </li>
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
                      >Danh sách khách hàng</a
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
                        <div class="col-lg-3 col-md-3 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Tên Khách hàng"
                            />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="SĐT"
                            />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Mail"
                            />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
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
                          <th>Tên khách hàng</th>
                          <th>SĐT</th>
                          <th>Email</th>
                          <th>Địa chỉ</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>

                      <?php foreach($data['user'] as $data): ?>
                        <tbody>
                          <tr>
                            <td><?= $data['name'] ?></td>
                            <td><?= $data['phone'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td>
                              <span><?= $data['address'] ?></span>
                            </td>
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
                      <? endforeach; ?>
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
