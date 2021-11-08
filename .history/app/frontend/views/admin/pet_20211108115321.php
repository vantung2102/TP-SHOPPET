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
                            <option value="">Tuổi...</option>
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
                          <th>Mã thú cưng</th>
                          <th>Tên</th>
                          <th>Số lượng</th>
                          <th>Màu</th>
                          <th>Giới tính</th>
                          <th>Giống</th>
                          <th>Tuổi</th>
                          <th>Giá cũ</th>
                          <th>Giá mới</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>A20</td>
                          <td>Chó phốc sơn</td>
                          <td>5</td>
                          <td>Vàng</td>
                          <td>Đực</td>
                          <td>Canada</td>
                          <td>3</td>
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
                    <div class="col-lg-8 col-md-12 col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Basic Information</h3>
                          <div class="card-options">
                            <a
                              href="#"
                              class="card-options-collapse"
                              data-toggle="card-collapse"
                              ><i class="fe fe-chevron-up"></i
                            ></a>
                            <a
                              href="#"
                              class="card-options-remove"
                              data-toggle="card-remove"
                              ><i class="fe fe-x"></i
                            ></a>
                          </div>
                        </div>
                        <form class="card-body">
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >First Name
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Enter First name"
                              />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Last Name
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Last name"
                              />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Roll No <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Registration Date
                              <span class="text-danger">*</span></label
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
                              >Class <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <select
                                class="form-control input-height"
                                name="department"
                              >
                                <option value="">Select...</option>
                                <option value="Category 1">Computer</option>
                                <option value="Category 2">Mechanical</option>
                                <option value="Category 3">Mathematics</option>
                                <option value="Category 3">Commerce</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Gender <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <select
                                class="form-control input-height"
                                name="gender"
                              >
                                <option value="">Select...</option>
                                <option value="Category 1">Male</option>
                                <option value="Category 2">Female</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Mobile No.
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Parents Name
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Parents Mobile No.
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Date Of Birth
                              <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Address <span class="text-danger">*</span></label
                            >
                            <div class="col-md-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                              >Profile Picture</label
                            >
                            <div class="col-md-9">
                              <div class="dropify-wrapper">
                                <div class="dropify-message">
                                  <span class="file-icon"></span>
                                  <p>Drag and drop a file here or click</p>
                                  <p class="dropify-error">
                                    Ooops, something wrong appended.
                                  </p>
                                </div>
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
                                <div class="dropify-preview">
                                  <span class="dropify-render"></span>
                                  <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                      <p class="dropify-filename">
                                        <span class="file-icon"></span>
                                        <span
                                          class="dropify-filename-inner"
                                        ></span>
                                      </p>
                                      <p class="dropify-infos-message">
                                        Drag and drop or click to replace
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <small id="fileHelp" class="form-text text-muted"
                                >This is some placeholder block-level help text
                                for the above input. It's a bit lighter and
                                easily wraps to a new line.</small
                              >
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Account Information</h3>
                          <div class="card-options">
                            <a
                              href="#"
                              class="card-options-collapse"
                              data-toggle="card-collapse"
                              ><i class="fe fe-chevron-up"></i
                            ></a>
                            <a
                              href="#"
                              class="card-options-remove"
                              data-toggle="card-remove"
                              ><i class="fe fe-x"></i
                            ></a>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row clearfix">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-primary">
                                Submit
                              </button>
                              <button
                                type="submit"
                                class="btn btn-outline-secondary"
                              >
                                Cancel
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Account Information</h3>
                          <div class="card-options">
                            <a
                              href="#"
                              class="card-options-collapse"
                              data-toggle="card-collapse"
                              ><i class="fe fe-chevron-up"></i
                            ></a>
                            <a
                              href="#"
                              class="card-options-remove"
                              data-toggle="card-remove"
                              ><i class="fe fe-x"></i
                            ></a>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" />
                          </div>
                          <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" />
                          </div>
                          <div class="form-group">
                            <label>LinkedIN</label>
                            <input type="text" class="form-control" />
                          </div>
                          <div class="form-group">
                            <label>Behance</label>
                            <input type="text" class="form-control" />
                          </div>
                          <div class="form-group">
                            <label>dribbble</label>
                            <input type="text" class="form-control" />
                          </div>
                          <button type="submit" class="btn btn-primary">
                            Submit
                          </button>
                          <button
                            type="submit"
                            class="btn btn-outline-secondary"
                          >
                            Cancel
                          </button>
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
</div>
