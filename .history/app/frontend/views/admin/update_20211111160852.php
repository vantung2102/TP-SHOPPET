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

<div class="tab-pane" id="Student-add">
  <div class="row clearfix">
    <div class="col">
      <div class="card">
        <form class="card-body">
          <div class="form-group row">
            <label class="col-md-3 col-form-label"
              >Tên thú cưng <span class="text-danger">*</span></label
            >
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Nhập tên" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label"
              >Mã thú cưng <span class="text-danger">*</span></label
            >
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="" />
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
              >Giống <span class="text-danger">*</span></label
            >
            <div class="col-md-9">
              <input
                data-provide="datepicker"
                data-date-autoclose="true"
                class="form-control"
                placeholder=""
              />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label"
              >Giới tính <span class="text-danger">*</span></label
            >
            <div class="col-md-9">
              <select class="form-control input-height" name="department">
                <option value="">Select...</option>
                <option value="Category 1">Đực</option>
                <option value="Category 2">Cái</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label"
              >Giá cũ <span class="text-danger">*</span></label
            >
            <div class="col-md-9">
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label"
              >Giá mới <span class="text-danger">*</span></label
            >
            <div class="col-md-9">
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Ảnh </label>
            <div class="col-md-9">
              <div class="dropify-wrapper">
                <div class="dropify-loader"></div>
                <div class="dropify-errors-container">
                  <ul></ul>
                </div>
                <input type="file" class="dropify" /><button
                  type="button"
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
                <button type="submit" class="dropify-clear">Xác nhận</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
