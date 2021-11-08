<style>
  tr,
  table * {
    border: none !important;
    border-color: none !important;
  }

  button {
    background-color: none !important;
  }
</style>

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
                      >List View</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      href="#Student-profile"
                      >Profile</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Student-add"
                      >Add</a
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
                              placeholder="Roll No."
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Name"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Department"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="input-group">
                            <input
                              data-provide="datepicker"
                              data-date-autoclose="true"
                              class="form-control"
                              placeholder="Admission Date"
                            />
                          </div>
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
                          <th>Roll No.</th>
                          <th>Name</th>
                          <th></th>
                          <th>Department</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Admission Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>A25</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar1.jpg"
                              alt=""
                            />
                          </td>
                          <td><span class="font-16">Ken Smith</span></td>
                          <td>Science</td>
                          <td>ken@gmail.com</td>
                          <td>(417) 646-7483</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>A26</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar2.jpg"
                              alt=""
                            />
                          </td>
                          <td><span class="font-16">Gerald K Smith</span></td>
                          <td>M.C.A.</td>
                          <td>Gerald@gmail.com</td>
                          <td>(154) 646-2486</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>A25</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar3.jpg"
                              alt=""
                            />
                          </td>
                          <td><span class="font-16">Ken Smith</span></td>
                          <td>Mechanical</td>
                          <td>ken@gmail.com</td>
                          <td>(417) 646-8377</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>A27</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar4.jpg"
                              alt=""
                            />
                          </td>
                          <td><span class="font-16">Alice A Smith</span></td>
                          <td>M.B.B.S.</td>
                          <td>Patricia@gmail.com</td>
                          <td>(753) 646-4931</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>A17</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar5.jpg"
                              alt=""
                            />
                          </td>
                          <td><span class="font-16">Ken Smith</span></td>
                          <td>Arts</td>
                          <td>ken@gmail.com</td>
                          <td>(417) 646-7642</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>A11</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar6.jpg"
                              alt=""
                            />
                          </td>
                          <td>
                            <span class="font-16">Corrine M Johnson</span>
                          </td>
                          <td>Mechanical</td>
                          <td>Gladys@gmail.com</td>
                          <td>(349) 646-8377</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>A12</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar7.jpg"
                              alt=""
                            />
                          </td>
                          <td><span class="font-16">Alan Johnson</span></td>
                          <td>Music</td>
                          <td>ken@gmail.com</td>
                          <td>(648) 646-8523</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>A23</td>
                          <td class="w60">
                            <img
                              class="avatar"
                              src="../assets/images/xs/avatar8.jpg"
                              alt=""
                            />
                          </td>
                          <td><span class="font-16">John Smith</span></td>
                          <td>Civil</td>
                          <td>Corrine@gmail.com</td>
                          <td>(417) 646-7845</td>
                          <td>04 Jan, 2019</td>
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
                              <i class="fa fa-trash-o text-danger"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="Student-profile">
                  <div class="row">
                    <div class="col-xl-4 col-md-12">
                      <div class="card">
                        <div class="card-body w_user">
                          <div class="user_avtar">
                            <img
                              class="rounded-circle"
                              src="../assets/images/sm/avatar2.jpg"
                              alt=""
                            />
                          </div>
                          <div class="wid-u-info">
                            <h5>Dessie Parks</h5>
                            <p class="text-muted m-b-0">
                              119 Peepee Way, Hilo, HI, 96720
                            </p>
                            <ul class="list-unstyled">
                              <li>
                                <h5 class="mb-0">270</h5>
                                <small>Followers</small>
                              </li>
                              <li>
                                <h5 class="mb-0">310</h5>
                                <small>Following</small>
                              </li>
                              <li>
                                <h5 class="mb-0">908</h5>
                                <small>Liks</small>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">About Me</h3>
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
                          <p>
                            Hello I am Celena Anderson a Clerk in Xyz College
                            USA. I love to work with all my college staff and
                            seniour professors.
                          </p>
                          <ul class="list-group">
                            <li class="list-group-item">
                              <b>Gender </b>
                              <div class="pull-right">Female</div>
                            </li>
                            <li class="list-group-item">
                              <b>Department</b>
                              <div class="pull-right">Mechanical</div>
                            </li>
                            <li class="list-group-item">
                              <b>Email </b>
                              <div class="pull-right">test@example.com</div>
                            </li>
                            <li class="list-group-item">
                              <b>Phone</b>
                              <div class="pull-right">1234567890</div>
                            </li>
                            <li class="list-group-item">
                              <div class="clearfix">
                                <div class="float-left">
                                  <strong>Study</strong>
                                </div>
                                <div class="float-right">
                                  <small class="text-muted">35%</small>
                                </div>
                              </div>
                              <div class="progress progress-xxs">
                                <div
                                  class="progress-bar bg-pink"
                                  role="progressbar"
                                  style="width: 35%"
                                  aria-valuenow="35"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="clearfix">
                                <div class="float-left">
                                  <strong>Cricket</strong>
                                </div>
                                <div class="float-right">
                                  <small class="text-muted">72%</small>
                                </div>
                              </div>
                              <div class="progress progress-xxs">
                                <div
                                  class="progress-bar bg-blue"
                                  role="progressbar"
                                  style="width: 72%"
                                  aria-valuenow="72"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="clearfix">
                                <div class="float-left">
                                  <strong>Music</strong>
                                </div>
                                <div class="float-right">
                                  <small class="text-muted">60%</small>
                                </div>
                              </div>
                              <div class="progress progress-xxs">
                                <div
                                  class="progress-bar bg-green"
                                  role="progressbar"
                                  style="width: 60%"
                                  aria-valuenow="60"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-footer text-center">
                          <div class="row">
                            <div class="col-md-4 col-sm-4 col-6">
                              <div class="font-18 font-weight-bold">37</div>
                              <div>Projects</div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                              <div class="font-18 font-weight-bold">51</div>
                              <div>Tasks</div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                              <div class="font-18 font-weight-bold">61</div>
                              <div>Uploads</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-8 col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Timeline Activity</h3>
                          <div class="card-options">
                            <a
                              href="#"
                              class="card-options-collapse"
                              data-toggle="card-collapse"
                              ><i class="fe fe-chevron-up"></i
                            ></a>
                            <a
                              href="#"
                              class="card-options-fullscreen"
                              data-toggle="card-fullscreen"
                              ><i class="fe fe-maximize"></i
                            ></a>
                            <a
                              href="#"
                              class="card-options-remove"
                              data-toggle="card-remove"
                              ><i class="fe fe-x"></i
                            ></a>
                            <div class="item-action dropdown ml-2">
                              <a
                                href="javascript:void(0)"
                                data-toggle="dropdown"
                                ><i class="fe fe-more-vertical"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  href="javascript:void(0)"
                                  class="dropdown-item"
                                  ><i class="dropdown-icon fa fa-eye"></i> View
                                  Details
                                </a>
                                <a
                                  href="javascript:void(0)"
                                  class="dropdown-item"
                                  ><i class="dropdown-icon fa fa-share-alt"></i>
                                  Share
                                </a>
                                <a
                                  href="javascript:void(0)"
                                  class="dropdown-item"
                                  ><i
                                    class="dropdown-icon fa fa-cloud-download"
                                  ></i>
                                  Download</a
                                >
                                <div class="dropdown-divider"></div>
                                <a
                                  href="javascript:void(0)"
                                  class="dropdown-item"
                                  ><i class="dropdown-icon fa fa-copy"></i> Copy
                                  to</a
                                >
                                <a
                                  href="javascript:void(0)"
                                  class="dropdown-item"
                                  ><i class="dropdown-icon fa fa-folder"></i>
                                  Move to</a
                                >
                                <a
                                  href="javascript:void(0)"
                                  class="dropdown-item"
                                  ><i class="dropdown-icon fa fa-edit"></i>
                                  Rename</a
                                >
                                <a
                                  href="javascript:void(0)"
                                  class="dropdown-item"
                                  ><i class="dropdown-icon fa fa-trash"></i>
                                  Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="summernote" style="display: none">
                            Hello there,
                            <br />
                            <p>
                              The toolbar can be customized and it also supports
                              various callbacks such as <code>oninit</code>,
                              <code>onfocus</code>, <code>onpaste</code> and
                              many more.
                            </p>
                            <p>Please try <b>paste some texts</b> here</p>
                          </div>
                          <div
                            class="note-editor note-frame panel panel-default"
                          >
                            <div class="note-dropzone">
                              <div class="note-dropzone-message"></div>
                            </div>
                            <div class="note-toolbar panel-heading">
                              <div class="note-btn-group btn-group note-style">
                                <div class="note-btn-group btn-group">
                                  <button
                                    type="button"
                                    class="
                                      note-btn
                                      btn btn-default btn-sm
                                      dropdown-toggle
                                    "
                                    tabindex="-1"
                                    data-toggle="dropdown"
                                    title=""
                                    data-original-title="Style"
                                  >
                                    <i class="note-icon-magic"></i>
                                    <span class="note-icon-caret"></span>
                                  </button>
                                  <div class="dropdown-menu dropdown-style">
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="p"
                                        ><p>p</p></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="blockquote"
                                        ><blockquote>Quote</blockquote></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="pre"
                                      >
                                        <pre>Code</pre>
                                      </a>
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="h1"
                                        ><h1>Header 1</h1></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="h2"
                                        ><h2>Header 2</h2></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="h3"
                                        ><h3>Header 3</h3></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="h4"
                                        ><h4>Header 4</h4></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="h5"
                                        ><h5>Header 5</h5></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="h6"
                                        ><h6>Header 6</h6></a
                                      >
                                    </li>
                                  </div>
                                </div>
                              </div>
                              <div class="note-btn-group btn-group note-font">
                                <button
                                  type="button"
                                  class="
                                    note-btn
                                    btn btn-default btn-sm
                                    note-btn-bold
                                  "
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Bold (CTRL+B)"
                                >
                                  <i class="note-icon-bold"></i></button
                                ><button
                                  type="button"
                                  class="
                                    note-btn
                                    btn btn-default btn-sm
                                    note-btn-underline
                                  "
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Underline (CTRL+U)"
                                >
                                  <i class="note-icon-underline"></i></button
                                ><button
                                  type="button"
                                  class="note-btn btn btn-default btn-sm"
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Remove Font Style (CTRL+\)"
                                >
                                  <i class="note-icon-eraser"></i>
                                </button>
                              </div>
                              <div
                                class="note-btn-group btn-group note-fontname"
                              >
                                <div class="note-btn-group btn-group">
                                  <button
                                    type="button"
                                    class="
                                      note-btn
                                      btn btn-default btn-sm
                                      dropdown-toggle
                                    "
                                    tabindex="-1"
                                    data-toggle="dropdown"
                                    title=""
                                    data-original-title="Font Family"
                                  >
                                    <span class="note-current-fontname"
                                      >Muli</span
                                    >
                                    <span class="note-icon-caret"></span>
                                  </button>
                                  <div
                                    class="
                                      dropdown-menu
                                      note-check
                                      dropdown-fontname
                                    "
                                  >
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Arial"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Arial"
                                          >Arial</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Arial Black"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Arial Black"
                                          >Arial Black</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Comic Sans MS"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Comic Sans MS"
                                          >Comic Sans MS</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Courier New"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Courier New"
                                          >Courier New</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Helvetica"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Helvetica"
                                          >Helvetica</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Impact"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Impact"
                                          >Impact</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Tahoma"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Tahoma"
                                          >Tahoma</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Times New Roman"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span
                                          style="font-family: Times New Roman"
                                          >Times New Roman</span
                                        ></a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="javascript:void(0);"
                                        data-value="Verdana"
                                        class=""
                                        ><i class="note-icon-check"></i>
                                        <span style="font-family: Verdana"
                                          >Verdana</span
                                        ></a
                                      >
                                    </li>
                                  </div>
                                </div>
                              </div>
                              <div class="note-btn-group btn-group note-color">
                                <div
                                  class="note-btn-group btn-group note-color"
                                >
                                  <button
                                    type="button"
                                    class="
                                      note-btn
                                      btn btn-default btn-sm
                                      note-current-color-button
                                    "
                                    tabindex="-1"
                                    title=""
                                    data-original-title="Recent Color"
                                    data-backcolor="#FFFF00"
                                  >
                                    <i
                                      class="note-icon-font note-recent-color"
                                      style="background-color: rgb(255, 255, 0)"
                                    ></i></button
                                  ><button
                                    type="button"
                                    class="
                                      note-btn
                                      btn btn-default btn-sm
                                      dropdown-toggle
                                    "
                                    tabindex="-1"
                                    data-toggle="dropdown"
                                    title=""
                                    data-original-title="More Color"
                                  >
                                    <span class="note-icon-caret"></span>
                                  </button>
                                  <div class="dropdown-menu">
                                    <li>
                                      <div class="btn-group">
                                        <div class="note-palette-title">
                                          Background Color
                                        </div>
                                        <div>
                                          <button
                                            type="button"
                                            class="
                                              note-color-reset
                                              btn btn-default
                                            "
                                            data-event="backColor"
                                            data-value="inherit"
                                          >
                                            Transparent
                                          </button>
                                        </div>
                                        <div
                                          class="note-holder"
                                          data-event="backColor"
                                        >
                                          <div class="note-color-palette">
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #000000;
                                                "
                                                data-event="backColor"
                                                data-value="#000000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#000000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #424242;
                                                "
                                                data-event="backColor"
                                                data-value="#424242"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#424242"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #636363;
                                                "
                                                data-event="backColor"
                                                data-value="#636363"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#636363"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9c9c94;
                                                "
                                                data-event="backColor"
                                                data-value="#9C9C94"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9C9C94"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #cec6ce;
                                                "
                                                data-event="backColor"
                                                data-value="#CEC6CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CEC6CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #efefef;
                                                "
                                                data-event="backColor"
                                                data-value="#EFEFEF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#EFEFEF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #f7f7f7;
                                                "
                                                data-event="backColor"
                                                data-value="#F7F7F7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#F7F7F7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffffff;
                                                "
                                                data-event="backColor"
                                                data-value="#FFFFFF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFFFFF"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ff0000;
                                                "
                                                data-event="backColor"
                                                data-value="#FF0000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FF0000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ff9c00;
                                                "
                                                data-event="backColor"
                                                data-value="#FF9C00"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FF9C00"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffff00;
                                                "
                                                data-event="backColor"
                                                data-value="#FFFF00"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFFF00"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #00ff00;
                                                "
                                                data-event="backColor"
                                                data-value="#00FF00"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#00FF00"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #00ffff;
                                                "
                                                data-event="backColor"
                                                data-value="#00FFFF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#00FFFF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #0000ff;
                                                "
                                                data-event="backColor"
                                                data-value="#0000FF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#0000FF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9c00ff;
                                                "
                                                data-event="backColor"
                                                data-value="#9C00FF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9C00FF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ff00ff;
                                                "
                                                data-event="backColor"
                                                data-value="#FF00FF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FF00FF"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #f7c6ce;
                                                "
                                                data-event="backColor"
                                                data-value="#F7C6CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#F7C6CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffe7ce;
                                                "
                                                data-event="backColor"
                                                data-value="#FFE7CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFE7CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffefc6;
                                                "
                                                data-event="backColor"
                                                data-value="#FFEFC6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFEFC6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #d6efd6;
                                                "
                                                data-event="backColor"
                                                data-value="#D6EFD6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#D6EFD6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #cedee7;
                                                "
                                                data-event="backColor"
                                                data-value="#CEDEE7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CEDEE7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #cee7f7;
                                                "
                                                data-event="backColor"
                                                data-value="#CEE7F7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CEE7F7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #d6d6e7;
                                                "
                                                data-event="backColor"
                                                data-value="#D6D6E7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#D6D6E7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e7d6de;
                                                "
                                                data-event="backColor"
                                                data-value="#E7D6DE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E7D6DE"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e79c9c;
                                                "
                                                data-event="backColor"
                                                data-value="#E79C9C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E79C9C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffc69c;
                                                "
                                                data-event="backColor"
                                                data-value="#FFC69C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFC69C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffe79c;
                                                "
                                                data-event="backColor"
                                                data-value="#FFE79C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFE79C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #b5d6a5;
                                                "
                                                data-event="backColor"
                                                data-value="#B5D6A5"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#B5D6A5"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #a5c6ce;
                                                "
                                                data-event="backColor"
                                                data-value="#A5C6CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#A5C6CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9cc6ef;
                                                "
                                                data-event="backColor"
                                                data-value="#9CC6EF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9CC6EF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #b5a5d6;
                                                "
                                                data-event="backColor"
                                                data-value="#B5A5D6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#B5A5D6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #d6a5bd;
                                                "
                                                data-event="backColor"
                                                data-value="#D6A5BD"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#D6A5BD"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e76363;
                                                "
                                                data-event="backColor"
                                                data-value="#E76363"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E76363"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #f7ad6b;
                                                "
                                                data-event="backColor"
                                                data-value="#F7AD6B"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#F7AD6B"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffd663;
                                                "
                                                data-event="backColor"
                                                data-value="#FFD663"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFD663"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #94bd7b;
                                                "
                                                data-event="backColor"
                                                data-value="#94BD7B"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#94BD7B"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #73a5ad;
                                                "
                                                data-event="backColor"
                                                data-value="#73A5AD"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#73A5AD"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #6badde;
                                                "
                                                data-event="backColor"
                                                data-value="#6BADDE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#6BADDE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #8c7bc6;
                                                "
                                                data-event="backColor"
                                                data-value="#8C7BC6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#8C7BC6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #c67ba5;
                                                "
                                                data-event="backColor"
                                                data-value="#C67BA5"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#C67BA5"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ce0000;
                                                "
                                                data-event="backColor"
                                                data-value="#CE0000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CE0000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e79439;
                                                "
                                                data-event="backColor"
                                                data-value="#E79439"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E79439"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #efc631;
                                                "
                                                data-event="backColor"
                                                data-value="#EFC631"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#EFC631"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #6ba54a;
                                                "
                                                data-event="backColor"
                                                data-value="#6BA54A"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#6BA54A"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #4a7b8c;
                                                "
                                                data-event="backColor"
                                                data-value="#4A7B8C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#4A7B8C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #3984c6;
                                                "
                                                data-event="backColor"
                                                data-value="#3984C6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#3984C6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #634aa5;
                                                "
                                                data-event="backColor"
                                                data-value="#634AA5"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#634AA5"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #a54a7b;
                                                "
                                                data-event="backColor"
                                                data-value="#A54A7B"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#A54A7B"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9c0000;
                                                "
                                                data-event="backColor"
                                                data-value="#9C0000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9C0000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #b56308;
                                                "
                                                data-event="backColor"
                                                data-value="#B56308"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#B56308"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #bd9400;
                                                "
                                                data-event="backColor"
                                                data-value="#BD9400"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#BD9400"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #397b21;
                                                "
                                                data-event="backColor"
                                                data-value="#397B21"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#397B21"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #104a5a;
                                                "
                                                data-event="backColor"
                                                data-value="#104A5A"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#104A5A"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #085294;
                                                "
                                                data-event="backColor"
                                                data-value="#085294"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#085294"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #311873;
                                                "
                                                data-event="backColor"
                                                data-value="#311873"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#311873"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #731842;
                                                "
                                                data-event="backColor"
                                                data-value="#731842"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#731842"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #630000;
                                                "
                                                data-event="backColor"
                                                data-value="#630000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#630000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #7b3900;
                                                "
                                                data-event="backColor"
                                                data-value="#7B3900"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#7B3900"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #846300;
                                                "
                                                data-event="backColor"
                                                data-value="#846300"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#846300"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #295218;
                                                "
                                                data-event="backColor"
                                                data-value="#295218"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#295218"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #083139;
                                                "
                                                data-event="backColor"
                                                data-value="#083139"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#083139"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #003163;
                                                "
                                                data-event="backColor"
                                                data-value="#003163"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#003163"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #21104a;
                                                "
                                                data-event="backColor"
                                                data-value="#21104A"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#21104A"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #4a1031;
                                                "
                                                data-event="backColor"
                                                data-value="#4A1031"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#4A1031"
                                              ></button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="btn-group">
                                        <div class="note-palette-title">
                                          Foreground Color
                                        </div>
                                        <div>
                                          <button
                                            type="button"
                                            class="
                                              note-color-reset
                                              btn btn-default
                                            "
                                            data-event="removeFormat"
                                            data-value="foreColor"
                                          >
                                            Reset to default
                                          </button>
                                        </div>
                                        <div
                                          class="note-holder"
                                          data-event="foreColor"
                                        >
                                          <div class="note-color-palette">
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #000000;
                                                "
                                                data-event="foreColor"
                                                data-value="#000000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#000000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #424242;
                                                "
                                                data-event="foreColor"
                                                data-value="#424242"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#424242"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #636363;
                                                "
                                                data-event="foreColor"
                                                data-value="#636363"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#636363"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9c9c94;
                                                "
                                                data-event="foreColor"
                                                data-value="#9C9C94"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9C9C94"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #cec6ce;
                                                "
                                                data-event="foreColor"
                                                data-value="#CEC6CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CEC6CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #efefef;
                                                "
                                                data-event="foreColor"
                                                data-value="#EFEFEF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#EFEFEF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #f7f7f7;
                                                "
                                                data-event="foreColor"
                                                data-value="#F7F7F7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#F7F7F7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffffff;
                                                "
                                                data-event="foreColor"
                                                data-value="#FFFFFF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFFFFF"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ff0000;
                                                "
                                                data-event="foreColor"
                                                data-value="#FF0000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FF0000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ff9c00;
                                                "
                                                data-event="foreColor"
                                                data-value="#FF9C00"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FF9C00"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffff00;
                                                "
                                                data-event="foreColor"
                                                data-value="#FFFF00"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFFF00"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #00ff00;
                                                "
                                                data-event="foreColor"
                                                data-value="#00FF00"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#00FF00"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #00ffff;
                                                "
                                                data-event="foreColor"
                                                data-value="#00FFFF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#00FFFF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #0000ff;
                                                "
                                                data-event="foreColor"
                                                data-value="#0000FF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#0000FF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9c00ff;
                                                "
                                                data-event="foreColor"
                                                data-value="#9C00FF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9C00FF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ff00ff;
                                                "
                                                data-event="foreColor"
                                                data-value="#FF00FF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FF00FF"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #f7c6ce;
                                                "
                                                data-event="foreColor"
                                                data-value="#F7C6CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#F7C6CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffe7ce;
                                                "
                                                data-event="foreColor"
                                                data-value="#FFE7CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFE7CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffefc6;
                                                "
                                                data-event="foreColor"
                                                data-value="#FFEFC6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFEFC6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #d6efd6;
                                                "
                                                data-event="foreColor"
                                                data-value="#D6EFD6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#D6EFD6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #cedee7;
                                                "
                                                data-event="foreColor"
                                                data-value="#CEDEE7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CEDEE7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #cee7f7;
                                                "
                                                data-event="foreColor"
                                                data-value="#CEE7F7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CEE7F7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #d6d6e7;
                                                "
                                                data-event="foreColor"
                                                data-value="#D6D6E7"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#D6D6E7"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e7d6de;
                                                "
                                                data-event="foreColor"
                                                data-value="#E7D6DE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E7D6DE"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e79c9c;
                                                "
                                                data-event="foreColor"
                                                data-value="#E79C9C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E79C9C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffc69c;
                                                "
                                                data-event="foreColor"
                                                data-value="#FFC69C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFC69C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffe79c;
                                                "
                                                data-event="foreColor"
                                                data-value="#FFE79C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFE79C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #b5d6a5;
                                                "
                                                data-event="foreColor"
                                                data-value="#B5D6A5"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#B5D6A5"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #a5c6ce;
                                                "
                                                data-event="foreColor"
                                                data-value="#A5C6CE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#A5C6CE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9cc6ef;
                                                "
                                                data-event="foreColor"
                                                data-value="#9CC6EF"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9CC6EF"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #b5a5d6;
                                                "
                                                data-event="foreColor"
                                                data-value="#B5A5D6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#B5A5D6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #d6a5bd;
                                                "
                                                data-event="foreColor"
                                                data-value="#D6A5BD"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#D6A5BD"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e76363;
                                                "
                                                data-event="foreColor"
                                                data-value="#E76363"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E76363"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #f7ad6b;
                                                "
                                                data-event="foreColor"
                                                data-value="#F7AD6B"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#F7AD6B"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ffd663;
                                                "
                                                data-event="foreColor"
                                                data-value="#FFD663"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#FFD663"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #94bd7b;
                                                "
                                                data-event="foreColor"
                                                data-value="#94BD7B"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#94BD7B"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #73a5ad;
                                                "
                                                data-event="foreColor"
                                                data-value="#73A5AD"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#73A5AD"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #6badde;
                                                "
                                                data-event="foreColor"
                                                data-value="#6BADDE"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#6BADDE"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #8c7bc6;
                                                "
                                                data-event="foreColor"
                                                data-value="#8C7BC6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#8C7BC6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #c67ba5;
                                                "
                                                data-event="foreColor"
                                                data-value="#C67BA5"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#C67BA5"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #ce0000;
                                                "
                                                data-event="foreColor"
                                                data-value="#CE0000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#CE0000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #e79439;
                                                "
                                                data-event="foreColor"
                                                data-value="#E79439"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#E79439"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #efc631;
                                                "
                                                data-event="foreColor"
                                                data-value="#EFC631"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#EFC631"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #6ba54a;
                                                "
                                                data-event="foreColor"
                                                data-value="#6BA54A"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#6BA54A"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #4a7b8c;
                                                "
                                                data-event="foreColor"
                                                data-value="#4A7B8C"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#4A7B8C"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #3984c6;
                                                "
                                                data-event="foreColor"
                                                data-value="#3984C6"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#3984C6"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #634aa5;
                                                "
                                                data-event="foreColor"
                                                data-value="#634AA5"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#634AA5"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #a54a7b;
                                                "
                                                data-event="foreColor"
                                                data-value="#A54A7B"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#A54A7B"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #9c0000;
                                                "
                                                data-event="foreColor"
                                                data-value="#9C0000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#9C0000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #b56308;
                                                "
                                                data-event="foreColor"
                                                data-value="#B56308"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#B56308"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #bd9400;
                                                "
                                                data-event="foreColor"
                                                data-value="#BD9400"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#BD9400"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #397b21;
                                                "
                                                data-event="foreColor"
                                                data-value="#397B21"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#397B21"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #104a5a;
                                                "
                                                data-event="foreColor"
                                                data-value="#104A5A"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#104A5A"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #085294;
                                                "
                                                data-event="foreColor"
                                                data-value="#085294"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#085294"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #311873;
                                                "
                                                data-event="foreColor"
                                                data-value="#311873"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#311873"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #731842;
                                                "
                                                data-event="foreColor"
                                                data-value="#731842"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#731842"
                                              ></button>
                                            </div>
                                            <div class="note-color-row">
                                              <button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #630000;
                                                "
                                                data-event="foreColor"
                                                data-value="#630000"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#630000"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #7b3900;
                                                "
                                                data-event="foreColor"
                                                data-value="#7B3900"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#7B3900"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #846300;
                                                "
                                                data-event="foreColor"
                                                data-value="#846300"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#846300"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #295218;
                                                "
                                                data-event="foreColor"
                                                data-value="#295218"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#295218"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #083139;
                                                "
                                                data-event="foreColor"
                                                data-value="#083139"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#083139"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #003163;
                                                "
                                                data-event="foreColor"
                                                data-value="#003163"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#003163"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #21104a;
                                                "
                                                data-event="foreColor"
                                                data-value="#21104A"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#21104A"
                                              ></button
                                              ><button
                                                type="button"
                                                class="note-color-btn"
                                                style="
                                                  background-color: #4a1031;
                                                "
                                                data-event="foreColor"
                                                data-value="#4A1031"
                                                title=""
                                                data-toggle="button"
                                                tabindex="-1"
                                                data-original-title="#4A1031"
                                              ></button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                  </div>
                                </div>
                              </div>
                              <div class="note-btn-group btn-group note-para">
                                <button
                                  type="button"
                                  class="note-btn btn btn-default btn-sm"
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Unordered list (CTRL+SHIFT+NUM7)"
                                >
                                  <i
                                    class="note-icon-unorderedlist"
                                  ></i></button
                                ><button
                                  type="button"
                                  class="note-btn btn btn-default btn-sm"
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Ordered list (CTRL+SHIFT+NUM8)"
                                >
                                  <i class="note-icon-orderedlist"></i>
                                </button>
                                <div class="note-btn-group btn-group">
                                  <button
                                    type="button"
                                    class="
                                      note-btn
                                      btn btn-default btn-sm
                                      dropdown-toggle
                                    "
                                    tabindex="-1"
                                    data-toggle="dropdown"
                                    title=""
                                    data-original-title="Paragraph"
                                  >
                                    <i class="note-icon-align-left"></i>
                                    <span class="note-icon-caret"></span>
                                  </button>
                                  <div class="dropdown-menu">
                                    <div
                                      class="
                                        note-btn-group
                                        btn-group
                                        note-align
                                      "
                                    >
                                      <button
                                        type="button"
                                        class="note-btn btn btn-default btn-sm"
                                        tabindex="-1"
                                        title=""
                                        data-original-title="Align left (CTRL+SHIFT+L)"
                                      >
                                        <i
                                          class="note-icon-align-left"
                                        ></i></button
                                      ><button
                                        type="button"
                                        class="note-btn btn btn-default btn-sm"
                                        tabindex="-1"
                                        title=""
                                        data-original-title="Align center (CTRL+SHIFT+E)"
                                      >
                                        <i
                                          class="note-icon-align-center"
                                        ></i></button
                                      ><button
                                        type="button"
                                        class="note-btn btn btn-default btn-sm"
                                        tabindex="-1"
                                        title=""
                                        data-original-title="Align right (CTRL+SHIFT+R)"
                                      >
                                        <i
                                          class="note-icon-align-right"
                                        ></i></button
                                      ><button
                                        type="button"
                                        class="note-btn btn btn-default btn-sm"
                                        tabindex="-1"
                                        title=""
                                        data-original-title="Justify full (CTRL+SHIFT+J)"
                                      >
                                        <i class="note-icon-align-justify"></i>
                                      </button>
                                    </div>
                                    <div
                                      class="note-btn-group btn-group note-list"
                                    >
                                      <button
                                        type="button"
                                        class="note-btn btn btn-default btn-sm"
                                        tabindex="-1"
                                        title=""
                                        data-original-title="Outdent (CTRL+[)"
                                      >
                                        <i
                                          class="note-icon-align-outdent"
                                        ></i></button
                                      ><button
                                        type="button"
                                        class="note-btn btn btn-default btn-sm"
                                        tabindex="-1"
                                        title=""
                                        data-original-title="Indent (CTRL+])"
                                      >
                                        <i class="note-icon-align-indent"></i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="note-btn-group btn-group note-table">
                                <div class="note-btn-group btn-group">
                                  <button
                                    type="button"
                                    class="
                                      note-btn
                                      btn btn-default btn-sm
                                      dropdown-toggle
                                    "
                                    tabindex="-1"
                                    data-toggle="dropdown"
                                    title=""
                                    data-original-title="Table"
                                  >
                                    <i class="note-icon-table"></i>
                                    <span class="note-icon-caret"></span>
                                  </button>
                                  <div class="dropdown-menu note-table">
                                    <div class="note-dimension-picker">
                                      <div
                                        class="
                                          note-dimension-picker-mousecatcher
                                        "
                                        data-event="insertTable"
                                        data-value="1x1"
                                        style="width: 10em; height: 10em"
                                      ></div>
                                      <div
                                        class="
                                          note-dimension-picker-highlighted
                                        "
                                      ></div>
                                      <div
                                        class="
                                          note-dimension-picker-unhighlighted
                                        "
                                      ></div>
                                    </div>
                                    <div class="note-dimension-display">
                                      1 x 1
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="note-btn-group btn-group note-insert">
                                <button
                                  type="button"
                                  class="note-btn btn btn-default btn-sm"
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Link (CTRL+K)"
                                >
                                  <i class="note-icon-link"></i></button
                                ><button
                                  type="button"
                                  class="note-btn btn btn-default btn-sm"
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Picture"
                                >
                                  <i class="note-icon-picture"></i></button
                                ><button
                                  type="button"
                                  class="note-btn btn btn-default btn-sm"
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Video"
                                >
                                  <i class="note-icon-video"></i>
                                </button>
                              </div>
                              <div class="note-btn-group btn-group note-view">
                                <button
                                  type="button"
                                  class="
                                    note-btn
                                    btn btn-default btn-sm btn-fullscreen
                                  "
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Full Screen"
                                >
                                  <i class="note-icon-arrows-alt"></i></button
                                ><button
                                  type="button"
                                  class="
                                    note-btn
                                    btn btn-default btn-sm btn-codeview
                                  "
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Code View"
                                >
                                  <i class="note-icon-code"></i></button
                                ><button
                                  type="button"
                                  class="note-btn btn btn-default btn-sm"
                                  tabindex="-1"
                                  title=""
                                  data-original-title="Help"
                                >
                                  <i class="note-icon-question"></i>
                                </button>
                              </div>
                            </div>
                            <div class="note-editing-area">
                              <div class="note-handle">
                                <div class="note-control-selection">
                                  <div class="note-control-selection-bg"></div>
                                  <div
                                    class="note-control-holder note-control-nw"
                                  ></div>
                                  <div
                                    class="note-control-holder note-control-ne"
                                  ></div>
                                  <div
                                    class="note-control-holder note-control-sw"
                                  ></div>
                                  <div
                                    class="note-control-sizing note-control-se"
                                  ></div>
                                  <div
                                    class="note-control-selection-info"
                                  ></div>
                                </div>
                              </div>
                              <textarea class="note-codable"></textarea>
                              <div
                                class="note-editable panel-body"
                                contenteditable="true"
                                style="height: 200px"
                              >
                                Hello there,
                                <br />
                                <p>
                                  The toolbar can be customized and it also
                                  supports various callbacks such as
                                  <code>oninit</code>, <code>onfocus</code>,
                                  <code>onpaste</code> and many more.
                                </p>
                                <p>Please try <b>paste some texts</b> here</p>
                              </div>
                            </div>
                            <div class="note-statusbar">
                              <div class="note-resizebar">
                                <div class="note-icon-bar"></div>
                                <div class="note-icon-bar"></div>
                                <div class="note-icon-bar"></div>
                              </div>
                            </div>
                            <div
                              class="modal link-dialog"
                              aria-hidden="false"
                              tabindex="-1"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Insert Link</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label>Text to display</label
                                      ><input
                                        class="note-link-text form-control"
                                        type="text"
                                      />
                                    </div>
                                    <div class="form-group">
                                      <label
                                        >To what URL should this link go?</label
                                      ><input
                                        class="note-link-url form-control"
                                        type="text"
                                        value="http://"
                                      />
                                    </div>
                                    <div class="checkbox">
                                      <label
                                        ><input type="checkbox" checked="" />
                                        Open in new window</label
                                      >
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      href="javascript:void(0);"
                                      class="
                                        btn btn-primary
                                        note-link-btn
                                        disabled
                                      "
                                      disabled=""
                                    >
                                      Insert Link
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="modal"
                              aria-hidden="false"
                              tabindex="-1"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Insert Image</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div
                                      class="
                                        form-group
                                        note-group-select-from-files
                                      "
                                    >
                                      <label>Select from files</label
                                      ><input
                                        class="note-image-input form-control"
                                        type="file"
                                        name="files"
                                        accept="image/*"
                                        multiple="multiple"
                                      />
                                    </div>
                                    <div
                                      class="form-group note-group-image-url"
                                      style="overflow: auto"
                                    >
                                      <label>Image URL</label
                                      ><input
                                        class="
                                          note-image-url
                                          form-control
                                          col-md-12
                                        "
                                        type="text"
                                      />
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      href="javascript:void(0);"
                                      class="
                                        btn btn-primary
                                        note-image-btn
                                        disabled
                                      "
                                      disabled=""
                                    >
                                      Insert Image
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="modal"
                              aria-hidden="false"
                              tabindex="-1"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Insert Video</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group row-fluid">
                                      <label
                                        >Video URL?
                                        <small class="text-muted"
                                          >(YouTube, Vimeo, Vine, Instagram,
                                          DailyMotion or Youku)</small
                                        ></label
                                      ><input
                                        class="
                                          note-video-url
                                          form-control
                                          span12
                                        "
                                        type="text"
                                      />
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      href="javascript:void(0);"
                                      class="
                                        btn btn-primary
                                        note-video-btn
                                        disabled
                                      "
                                      disabled=""
                                    >
                                      Insert Video
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="modal"
                              aria-hidden="false"
                              tabindex="-1"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Help</h4>
                                  </div>
                                  <div
                                    class="modal-body"
                                    style="max-height: 300px; overflow: scroll"
                                  >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>ENTER</kbd></label
                                    ><span>Insert Paragraph</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+Z</kbd></label
                                    ><span>Undoes the last command</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+Y</kbd></label
                                    ><span>Redoes the last command</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>TAB</kbd></label
                                    ><span>Tab</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>SHIFT+TAB</kbd></label
                                    ><span>Untab</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+B</kbd></label
                                    ><span>Set a bold style</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+I</kbd></label
                                    ><span>Set a italic style</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+U</kbd></label
                                    ><span>Set a underline style</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+SHIFT+S</kbd></label
                                    ><span>Set a strikethrough style</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+BACKSLASH</kbd></label
                                    ><span>Clean a style</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+SHIFT+L</kbd></label
                                    ><span>Set left align</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+SHIFT+E</kbd></label
                                    ><span>Set center align</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+SHIFT+R</kbd></label
                                    ><span>Set right align</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+SHIFT+J</kbd></label
                                    ><span>Set full align</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+SHIFT+NUM7</kbd></label
                                    ><span>Toggle unordered list</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+SHIFT+NUM8</kbd></label
                                    ><span>Toggle ordered list</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+LEFTBRACKET</kbd></label
                                    ><span>Outdent on current paragraph</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+RIGHTBRACKET</kbd></label
                                    ><span>Indent on current paragraph</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+NUM0</kbd></label
                                    ><span
                                      >Change current block's format as a
                                      paragraph(P tag)</span
                                    >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+NUM1</kbd></label
                                    ><span
                                      >Change current block's format as H1</span
                                    >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+NUM2</kbd></label
                                    ><span
                                      >Change current block's format as H2</span
                                    >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+NUM3</kbd></label
                                    ><span
                                      >Change current block's format as H3</span
                                    >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+NUM4</kbd></label
                                    ><span
                                      >Change current block's format as H4</span
                                    >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+NUM5</kbd></label
                                    ><span
                                      >Change current block's format as H5</span
                                    >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+NUM6</kbd></label
                                    ><span
                                      >Change current block's format as H6</span
                                    >
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+ENTER</kbd></label
                                    ><span>Insert horizontal rule</span>
                                    <div class="help-list-item"></div>
                                    <label
                                      style="width: 180px; margin-right: 10px"
                                      ><kbd>CTRL+K</kbd></label
                                    ><span>Show Link Dialog</span>
                                  </div>
                                  <div class="modal-footer">
                                    <p class="text-center">
                                      <a
                                        href="http://summernote.org/"
                                        target="_blank"
                                        >Summernote 0.8.2</a
                                      >
                                      ·
                                      <a
                                        href="https://github.com/summernote/summernote"
                                        target="_blank"
                                        >Project</a
                                      >
                                      ·
                                      <a
                                        href="https://github.com/summernote/summernote/issues"
                                        target="_blank"
                                        >Issues</a
                                      >
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="timeline_item">
                            <img
                              class="tl_avatar"
                              src="../assets/images/xs/avatar1.jpg"
                              alt=""
                            />
                            <span
                              ><a href="javascript:void(0);">Elisse Joson</a>
                              San Francisco, CA
                              <small class="float-right text-right"
                                >20-April-2019 - Today</small
                              ></span
                            >
                            <h6 class="font600">
                              Hello, 'Im a single div responsive timeline
                              without media Queries!
                            </h6>
                            <div class="msg">
                              <p>
                                I'm speaking with myself, number one, because I
                                have a very good brain and I've said a lot of
                                things. I write the best placeholder text, and
                                I'm the biggest developer on the web card she
                                has is the Lorem card.
                              </p>
                              <a
                                href="javascript:void(0);"
                                class="mr-20 text-muted"
                                ><i class="fa fa-heart text-pink"></i> 12
                                Love</a
                              >
                              <a
                                class="text-muted"
                                role="button"
                                data-toggle="collapse"
                                href="#collapseExample"
                                aria-expanded="false"
                                aria-controls="collapseExample"
                                ><i class="fa fa-comments"></i> 1 Comment</a
                              >
                              <div
                                class="collapse p-4 section-gray mt-2"
                                id="collapseExample"
                              >
                                <form class="well">
                                  <div class="form-group">
                                    <textarea
                                      rows="2"
                                      class="form-control no-resize"
                                      placeholder="Enter here for tweet..."
                                    ></textarea>
                                  </div>
                                  <button class="btn btn-primary">
                                    Submit
                                  </button>
                                </form>
                                <ul
                                  class="
                                    recent_comments
                                    list-unstyled
                                    mt-4
                                    mb-0
                                  "
                                >
                                  <li>
                                    <div class="avatar_img">
                                      <img
                                        class="rounded img-fluid"
                                        src="../assets/images/xs/avatar4.jpg"
                                        alt=""
                                      />
                                    </div>
                                    <div class="comment_body">
                                      <h6>
                                        Donald Gardner
                                        <small class="float-right font-14"
                                          >Just now</small
                                        >
                                      </h6>
                                      <p>
                                        Lorem ipsum Veniam aliquip culpa laboris
                                        minim tempor
                                      </p>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="timeline_item">
                            <img
                              class="tl_avatar"
                              src="../assets/images/xs/avatar4.jpg"
                              alt=""
                            />
                            <span
                              ><a href="javascript:void(0);" title=""
                                >Dessie Parks</a
                              >
                              Oakland, CA
                              <small class="float-right text-right"
                                >19-April-2019 - Yesterday</small
                              ></span
                            >
                            <h6 class="font600">
                              Oeehhh, that's awesome.. Me too!
                            </h6>
                            <div class="msg">
                              <p>
                                I'm speaking with myself, number one, because I
                                have a very good brain and I've said a lot of
                                things. on the web by far... While that's
                                mock-ups and this is politics, are they really
                                so different? I think the only card she has is
                                the Lorem card.
                              </p>
                              <div class="timeline_img mb-20">
                                <img
                                  class="width100"
                                  src="../assets/images/gallery/1.jpg"
                                  alt="Awesome Image"
                                />
                                <img
                                  class="width100"
                                  src="../assets/images/gallery/2.jpg"
                                  alt="Awesome Image"
                                />
                              </div>
                              <a
                                href="javascript:void(0);"
                                class="mr-20 text-muted"
                                ><i class="fa fa-heart text-pink"></i> 23
                                Love</a
                              >
                              <a
                                class="text-muted"
                                role="button"
                                data-toggle="collapse"
                                href="#collapseExample1"
                                aria-expanded="false"
                                aria-controls="collapseExample1"
                                ><i class="fa fa-comments"></i> 2 Comment</a
                              >
                              <div
                                class="collapse p-4 section-gray mt-2"
                                id="collapseExample1"
                              >
                                <form class="well">
                                  <div class="form-group">
                                    <textarea
                                      rows="2"
                                      class="form-control no-resize"
                                      placeholder="Enter here for tweet..."
                                    ></textarea>
                                  </div>
                                  <button class="btn btn-primary">
                                    Submit
                                  </button>
                                </form>
                                <ul
                                  class="
                                    recent_comments
                                    list-unstyled
                                    mt-4
                                    mb-0
                                  "
                                >
                                  <li>
                                    <div class="avatar_img">
                                      <img
                                        class="rounded img-fluid"
                                        src="../assets/images/xs/avatar4.jpg"
                                        alt=""
                                      />
                                    </div>
                                    <div class="comment_body">
                                      <h6>
                                        Donald Gardner
                                        <small class="float-right font-14"
                                          >Just now</small
                                        >
                                      </h6>
                                      <p>
                                        Lorem ipsum Veniam aliquip culpa laboris
                                        minim tempor
                                      </p>
                                      <div class="timeline_img mb-20">
                                        <img
                                          class="width150"
                                          src="../assets/images/gallery/7.jpg"
                                          alt="Awesome Image"
                                        />
                                        <img
                                          class="width150"
                                          src="../assets/images/gallery/8.jpg"
                                          alt="Awesome Image"
                                        />
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="avatar_img">
                                      <img
                                        class="rounded img-fluid"
                                        src="../assets/images/xs/avatar3.jpg"
                                        alt=""
                                      />
                                    </div>
                                    <div class="comment_body">
                                      <h6>
                                        Dessie Parks
                                        <small class="float-right font-14"
                                          >1min ago</small
                                        >
                                      </h6>
                                      <p>
                                        It is a long established fact that a
                                        reader will be distracted by the
                                        readable content of a page when looking
                                      </p>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="timeline_item">
                            <img
                              class="tl_avatar"
                              src="../assets/images/xs/avatar7.jpg"
                              alt=""
                            />
                            <span
                              ><a href="javascript:void(0);" title=""
                                >Rochelle Barton</a
                              >
                              San Francisco, CA
                              <small class="float-right text-right"
                                >12-April-2019</small
                              ></span
                            >
                            <h6 class="font600">
                              An Engineer Explains Why You Should Always Order
                              the Larger Pizza
                            </h6>
                            <div class="msg">
                              <p>
                                I'm speaking with myself, number one, because I
                                have a very good brain and I've said a lot of
                                things. I write the best placeholder text, and
                                I'm the biggest developer on the web by far...
                                While that's mock-ups and this is politics, is
                                the Lorem card.
                              </p>
                              <a
                                href="javascript:void(0);"
                                class="mr-20 text-muted"
                                ><i class="fa fa-heart text-pink"></i> 7 Love</a
                              >
                              <a
                                class="text-muted"
                                role="button"
                                data-toggle="collapse"
                                href="#collapseExample2"
                                aria-expanded="false"
                                aria-controls="collapseExample2"
                                ><i class="fa fa-comments"></i> 1 Comment</a
                              >
                              <div
                                class="collapse p-4 section-gray mt-2"
                                id="collapseExample2"
                              >
                                <form class="well">
                                  <div class="form-group">
                                    <textarea
                                      rows="2"
                                      class="form-control no-resize"
                                      placeholder="Enter here for tweet..."
                                    ></textarea>
                                  </div>
                                  <button class="btn btn-primary">
                                    Submit
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
