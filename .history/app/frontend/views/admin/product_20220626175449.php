<style>
    .table td,
    .table th {
        padding: 0;
        text-align: center;
        line-height: 37px;
    }
</style>

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
                                        <a class="nav-link active" data-toggle="tab" href="#Student-all">Danh sách sản
                                            phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Student-add">Thêm sản phẩm</a>
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
                                                        <input type="text" class="form-control" placeholder="Mã sản phẩm" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Tên" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <select class="form-control input-height" name="department">
                                                        <option value="">Giá...</option>
                                                        <option value="Category 1">0 - 500k</option>
                                                        <option value="Category 2">500k - 1tr</option>
                                                        <option value="Category 3">1tr - 2tr</option>
                                                        <option value="Category 3">Hơn 2tr</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <select class="form-control input-height" name="department">
                                                        <option value="">Phân loại...</option>
                                                        <option value="Category 1">Thức ăn</option>
                                                        <option value="Category 2">Đồ chơi</option>
                                                        <option value="Category 3">Phụ kiện</option>
                                                        <option value="Category 3">Quần áo</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-block" title="">Tìm kiếm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive card">
                                        <table class="
                        table table-hover table-vcenter table-striped
                        mb-0
                        text-nowrap
                      ">
                                            <thead>
                                                <tr>
                                                    <th>Mã sản phẩm</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Ảnh</th>
                                                    <th>Số lượng</th>
                                                    <th>Màu</th>
                                                    <th>Phân loại</th>
                                                    <th>Giá cũ</th>
                                                    <th>Giá mới</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($data['product'] as $data) : ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $data['product_id'] ?></td>
                                                        <td><?= $data['name'] ?></td>
                                                        <td>
                                                            <img src="<?= load_images('pet', $data['img']) ?>" style="width: 100px; height: 100px;" />
                                                        </td>
                                                        <td><?= $data['count'] ?></td>
                                                        <td><?= $data['color'] ?></td>
                                                        <td><?= $data['type'] ?></td>
                                                        <td><?= $data['old_price'] ?></td>
                                                        <td><?= $data['new_price'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-icon btn-sm" title="View">
                                                                <i class="fa fa-eye"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-icon btn-sm" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm">
                                                                <i class="fa fa-trash text-danger"></i>
                                                            </button>
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
                                                <form class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Tên sản phẩm
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="Nhập tên" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Số lượng
                                                            <span class="text-danger">*</span></label>
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
                                                        <label class="col-md-3 col-form-label">Giá cũ <span class="text-danger">*</span></label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label">Giá mới <span class="text-danger">*</span></label>
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
                                                                <input type="file" class="dropify" />
                                                                <button type="button" class="dropify-clear">
                                                                    Xóa
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