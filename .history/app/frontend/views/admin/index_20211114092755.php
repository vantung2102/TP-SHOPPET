<div class="page-content">
  <div class="page-info">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thú cưng</li>
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
                      >Danh sách thú cưng</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Student-add"
                      >Thêm thú cưng</a
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
                              placeholder="Mã thú cưng"
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
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Giống"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <select
                            class="form-control input-height"
                            name="department"
                          >
                            <option value="">Giá...</option>
                            <option value="1">0 - 1tr</option>
                            <option value="2">1tr - 2tr</option>
                            <option value="3">2tr-5tr</option>
                            <option value="4">Hơn 5tr</option>
                          </select>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <select
                            class="form-control input-height"
                            name="department"
                          >
                            <option value="">Tuổi...</option>
                            <option value="1">0 - 1</option>
                            <option value="2">1 - 2</option>
                            <option value="3">2 - 3</option>
                            <option value="4">Hơn 3</option>
                          </select>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <a
                            href="javascript:void(0);"
                            class="btn btn-sm btn-primary btn-block"
                            title=""
                            >Tìm kiếm</a
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
                          <th>Mã thú cưng</th>
                          <th>Tên</th>
                          <th>Số lượng</th>
                          <th>Màu</th>
                          <th>Giới tính</th>
                          <th>Giống</th>
                          <th>Tuổi</th>
                          <th>Giá cũ</th>
                          <th>Giá mới</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>

                      <?php foreach ($data['pets'] as $data): $id = $data['id']; ?>
                        <tbody>
                          <tr>
                            <td><?= $data['id_pet'] ?></td>
                            <td><?= $data['name'] ?></td>
                            <td><?= $data['count'] ?></td>
                            <td><?= $data['color'] ?></td>
                            <td><?= $data['sex'] ?></td>
                            <td><?= $data['specie'] ?></td>
                            <td><?= $data['age'] ?></td>
                            <td><?= $data['old_price'] ?></td>
                            <td><?= $data['new_price'] ?></td>
                            <td>
                              <!-- <button
                                type="button"
                                class="btn btn-icon btn-sm"
                                title="View"
                              >
                                <i class="fa fa-eye"></i>
                              </button> -->
                              <a href="<?= base_url("admin/update&id_pet=$id") ?>">
                                <button
                                  type="button"
                                  class="btn btn-icon btn-sm"
                                  title="Edit"
                                >
                                  <i class="fa fa-edit"></i>
                                </button>
                              </a>
                              
                              <a href="<?= base_url("admin/delete&id_pet=$id") ?>">
                                <button
                                  type="button"
                                  class="btn btn-icon btn-sm js-sweetalert"
                                  title="Delete"
                                  data-type="confirm"
                                >
                                  <i class="fa fa-trash text-danger"></i>
                                </button>
                              </a>
                              
                            </td>
                          </tr>
                        </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>

                <div class="tab-pane" id="Student-add">
                  <div class="row clearfix">
                    <div class="col">
                      <div class="card">

                          <form action="<?= base_url("admin/processUpload") ?>" class="card-body" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Tên thú cưng
                                <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input
                                  type="text"
                                  class="form-control"
                                  name="name"
                                />
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Mã thú cưng
                                <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input
                                  type="text"
                                  class="form-control"
                                  name="id_pet"
                                />
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Tuổi
                                <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input
                                  type="text"
                                  class="form-control"
                                  name="age"
                                />
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Số lượng <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="count"/>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label">Màu</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="color"/>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label">Mô tả</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="description"/>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Loại
                                <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input
                                  data-provide="datepicker"
                                  data-date-autoclose="true"
                                  class="form-control"
                                  name="specie"
                                />
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Giới tính <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <select
                                  class="form-control input-height"
                                  name="sex"
                                >
                                  <option value="">Select...</option>
                                  <option value="Đực">Đực</option>
                                  <option value="Cái">Cái</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Giá cũ
                                <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="old_price"/>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Giá mới
                                <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="new_price"/>
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
                                  <input type="file" name="avatar" >
                                  <button
                                    type="submit"
                                    class="dropify-clear"
                                    
                                  >
                                    Loại bỏ
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"> </label>
                              <div class="col-md-9">
                                <div class="dropify-wrapper">
                                  <div class="dropify-loader"></div>
                                  <div class="dropify-errors-container">
                                    <ul></ul>
                                  </div>
                                  <button type="submit" class="dropify-clear">
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
