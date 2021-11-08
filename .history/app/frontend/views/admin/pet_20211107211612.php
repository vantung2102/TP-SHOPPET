<div class="page-content">
  <div class="page-info">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thú cưng</li>
      </ol>
    </nav>
  </div>
  <div class="main-wrapper" style="padding-top:0">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="section-body mt-4">
            <div class="container-fluid">
              <div class="tab-content">
                <div class="tab-pane active" id="Courses-all">
                  <div class="row row-deck">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                      <div class="card">
                        <a href="#"
                          ><img
                            class="card-img-top"
                            src="<?= load_images('pet','1.jpg') ?>"
                            alt=""
                        /></a>
                        <div class="card-body d-flex flex-column">
                          <h5>
                            <a href="courses-details.html"
                              >PHP Development Course</a
                            >
                          </h5>
                          <div class="text-muted">
                            dòng này chưa mô tả balalalala
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-vcenter mb-0">
                            <tbody>
                            <tr>
                                <td class="tx-medium">Số Lượng</td>
                                <td class="text-right">Màu</td>
                                <td class="text-right">Giới tính</td>
                              </tr>
                              <tr>
                                <td class="tx-medium">2</td>
                                <td class="text-right">Trắng</td>
                                <td class="text-right">Đực</td>
                              </tr>
                              <tr>
                                <td class="tx-medium">Giá Cũ</td>
                                <td class="text-right">Giá Mới</td>
                              </tr>
                              <tr>
                                <td class="tx-medium">12000</td>
                                <td class="text-right">13000</td>
                              </tr>
                              <tr>
                                <td class="text-right">Giống</td>
                                <td class="text-right">Canada</td>

                              </tr>
                             
                              <tr>
                                <td>
                                  <i class="fa fa-users text-warning"></i>
                                </td>
                                <td class="tx-medium">Students</td>
                                <td class="text-right">125+</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                       
                      </div>
                    </div>
                    
                   
                  </div>
                </div>
                <div class="tab-pane" id="Courses-add">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Department Basic Info</h3>
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
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Department Name "
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Head of Department"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input
                              type="number"
                              class="form-control"
                              placeholder="No. of Students "
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input
                              data-provide="datepicker"
                              data-date-autoclose="true"
                              class="form-control"
                              placeholder="Department Start Date"
                            />
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea
                              rows="4"
                              class="form-control no-resize"
                              placeholder="Brief"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary">
                            Submit
                          </button>
                          <button
                            type="submit"
                            class="btn btn-outline-secondary btn-default"
                          >
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Staff Member Account Info</h3>
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
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Email"
                            />
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Phone"
                            />
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary">
                            Submit
                          </button>
                          <button
                            type="submit"
                            class="btn btn-outline-secondary btn-default"
                          >
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="Courses-add-Boot">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Add Department</h3>
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
                          >Department Name
                          <span class="text-danger">*</span></label
                        >
                        <div class="col-md-7">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label"
                          >Head Of Department</label
                        >
                        <div class="col-md-7">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label"
                          >Department Start Date
                          <span class="text-danger">*</span></label
                        >
                        <div class="col-md-7">
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
                          >Student Capacity
                          <span class="text-danger">*</span></label
                        >
                        <div class="col-md-7">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label"
                          >Department Details
                          <span class="text-danger">*</span></label
                        >
                        <div class="col-md-7">
                          <textarea
                            rows="4"
                            class="form-control no-resize"
                            placeholder="Please type what you want..."
                          ></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label"></label>
                        <div class="col-md-7">
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
