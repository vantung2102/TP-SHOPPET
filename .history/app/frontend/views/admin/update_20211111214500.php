<div class="page-content">
  <div class="page-info">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thú cưng</li>
        <li class="breadcrumb-item active" aria-current="page">Cgie sửa thú cưng</li>
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
                <div class="tab-pane active" id="Student-add">
                  <div class="row clearfix">
                    <div class="col">
                      <div class="card">

                          <form action="<?= base_url("admin/processUpdate?id_pet=$id") ?>" class="card-body" method="post" enctype="multipart/form-data">
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
                                  value="<?= $data['name'] ?>"
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
                                  value="<?= $data['id_pet'] ?>"
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
                                  value="<?= $data['age'] ?>"
                                  name="age"
                                />
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Số lượng <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input type="text" class="form-control" value="<?= $data['count'] ?>" name="count"/>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label">Màu</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" value="<?= $data['color'] ?>" name="color"/>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label">Mô tả</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" value="<?= $data['description'] ?>" name="description"/>
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
                                  value="<?= $data['specie'] ?>"
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
                                <input type="text" class="form-control" value="<?= $data['old_price'] ?>" name="old_price"/>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 col-form-label"
                                >Giá mới
                                <span class="text-danger">*</span></label
                              >
                              <div class="col-md-9">
                                <input type="text" class="form-control" value="<?= $data['new_price'] ?>" name="new_price"/>
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
                                  <input type="file"  name="avatar" value="<?= $data['img'] ?>">
                                  <button
                                    type="submit"
                                    class="dropify-clear"
                                    
                                  >
                                    Remove
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