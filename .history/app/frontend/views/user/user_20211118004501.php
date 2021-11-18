<div class="user">
  <div class="grid wide">
    <div class="row">
      <!--Slide bar-->
      <div class="col l-3">
        <div class="user_infor">
          <div class="user_profile">
            <img src="<?= load_images('icon','user.png') ?>" alt="" class="user_profile-img" />
            <div class="user_profile-name">Thanh Tâm</div>
          </div>
          <div class="user_manage">
            <ul class="manage_acount">
              <div class="manage-title">Tài khoản của tôi</div>
              <li class="manage_acount-item arrtitle active">
                <i class="manage-icon fas fa-user"></i>
                <div class="manage_acount-text">Thông tin cá nhân</div>
              </li>
              <li class="manage_acount-item arrtitle">
                <i class="manage-icon fas fa-map-marker-alt"></i>
                <div class="manage_acount-text">Địa chỉ</div>
              </li>
              <li class="manage_acount-item arrtitle">
                <i class="manage-icon fas fa-key"></i>
                <div class="manage_acount-text">Đổi mật khẩu</div>
              </li>
            </ul>
            <ul class="manage_order">
              <div class="manage-title">Đơn hàng của tôi</div>
              <li class="manage_order-item arrtitle">
                <i class="manage-icon far fa-list-alt"></i>
                <div class="manage_acount-text">Đơn hàng</div>
              </li>
              <li class="manage_order-item arrtitle">
                <i class="manage-icon fas fa-bell"></i>
                <div class="manage_acount-text">Thông báo</div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!--Contain-->
      <div class="col l-9">
        <div class="user_contain">
          <!--Thong tin ca nhan-->
          <?php foreach($data['user'] as $data):?>
            <div class="boxDetailInfo active user_my-information">
              <div class="user_my-information-title">
                <h3 class="user_my-information-title-item">Thông tin cá nhân</h3>
                <h3 class="user_my-information-title-item">Liên hệ</h3>
              </div>
              <div class="row">
              
                <div class="col l-7 user_info-detail">
                  <form action="<?= base_url('user/changeUser') ?>" id="form_personal-infor">
                    <div class="information_input">
                      <label for="Fullname" class="information_input-title"
                        >Họ tên</label
                      >
                      <input
                        type="text"
                        name="name"
                        value="<?= $data['name']?>"
                        id="Fullname"
                        placeholder="Họ tên của bạn"
                        class="input-value"
                      />
                      <label for="birthday" class="information_input-title"
                        >Ngày sinh</label
                      >
                      <input
                        type="date"
                        name="birthday"
                        value="<?= $data['birthday']?>"
                        id="birthday"
                        class="input-value"
                      />
                      <label for="sex" class="information_input-title"
                        >Giới tính</label
                      >
                      <div id="information_input-sex">
                        <input type="radio" name="gender" id="male" />
                        <label for="male">Nam</label>
                        <input
                          type="radio"
                          name="gender"
                          id="female"
                          class="information_input-sex--item"
                        />
                        <label for="female">Nữ</label>
                        <input
                          type="radio"
                          name="gender"
                          id="another"
                          class="information_input-sex--item"
                        />
                        <label for="another">Khác</label>
                      </div>
                    </div>
                    <div class="btn_save-change">
                      <button type="submit">Lưu thay đổi</button>
                    </div>
                  </form>
                
                </div>

                <div class="col l-5">
                  <div class="user_info-contact">
                    <div class="user_info-contact--item">
                      <i class="fas fa-phone-alt"></i>
                      <div class="user_info-contact--text">
                        <p>Số điện thoại</p>
                        <p>0945732406</p>
                      </div>
                    </div>
                    <div class="user_info-contact--change">
                      <button class="change_info">Change</button>
                    </div>
                  </div>

                  <div class="user_info-contact">
                    <div class="user_info-contact--item">
                      <i class="fas fa-envelope"></i>
                      <div class="user_info-contact--text">
                        <p>Email</p>
                        <p>tothanhtam@gmail.com</p>
                      </div>
                    </div>
                    <div class="user_info-contact--change">
                      <button class="change_info">Change</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!---Địa chỉ-->
            <div class="boxDetailInfo user_my-address">
              <div class="address-title">
                <div class="address_title-text">Địa chỉ của tôi</div>
                <button class="address_title-btn--add">+ Thêm địa chỉ mới</button>
              </div>
              <div class="address-detail">
                <div class="row user-address">
                  <div class="l-9">
                    <div class="address-detail-infor">
                      <div class="address-detail-name">Tô Thị Thanh Tâm</div>
                      <div class="address-detail-phone">Phone : 0986712344</div>
                      <div class="address-detail-location">
                        Địa chỉ : Xã Thạch Hà, Huyện Hương Khê, Tỉnh Hà Tĩnh
                      </div>
                    </div>
                  </div>
                  <div class="l-3">
                    <div class="address-detail-edit">
                      <button class="address-detail-btn--update">Sửa</button>
                      <button class="address-detail-btn--update">Xoá</button>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="l-9">
                    <div class="address-detail-infor">
                      <div class="address-detail-name">Tô Thị Thanh Tâm</div>
                      <div class="address-detail-phone">Phone : 0986712344</div>
                      <div class="address-detail-location">
                        Địa chỉ : Xã Thạch Hà, Huyện Hương Khê, Tỉnh Hà Tĩnh
                      </div>
                    </div>
                  </div>
                  <div class="l-3">
                    <div class="address-detail-edit">
                      <button class="address-detail-btn--update">Sửa</button>
                      <button class="address-detail-btn--update">Xoá</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
          <!--Đổi mật khẩu-->
          <div class="boxDetailInfo user-password">
            <div class="user-password-title">Thay đổi mật khẩu</div>
            <div class="user-password-cotain">
              <form action="<?= base_url('user/changePassword') ?>" method="post" id="form_password">
                <div class="password_input">
                  <label for="password" class="password-input-title"
                    >Mật khẩu
                  </label>
                  <input
                    type="password"
                    name="old_pass"
                    id="pass"
                    placeholder="Nhập mật khẩu"
                    class="input-pass"
                  />
                  <label for="password" class="password-input-title"
                    >Mật khẩu mới
                  </label>
                  <input
                    type="password"
                    name="new_pass"
                    id="pass"
                    placeholder="Nhập mật khẩu mới"
                    class="input-pass"
                  />
                  <label for="password" class="password-input-title"
                    >Xác nhận mật khẩu
                  </label>
                  <input
                    type="password"
                    name="renew_pass"
                    id="pass"
                    placeholder="Nhập xác nhận mật khẩu"
                    class="input-pass"
                  />
                </div>
                <div class="btn_save-change">
                  <button type="submit">Lưu thay đổi</button>
                </div>
              </form>
              
            </div>
          </div>

          <!--Đơn hàng-->
          <div class="boxDetailInfo user_order">
            <div class="user_order-title">Đơn hàng của tôi</div>
            <table class="tableOrder">
              <thead>
                <tr>
                  <th>Mã đơn</th>
                  <th>Ngày đặt hàng</th>
                  <th>Sản phẩm</th>
                  <th>Số lượng</th>
                  <th>Tổng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1234567</td>
                  <td>12/11/2021</td>
                  <td>Chó Phốc sóc</td>
                  <td>1</td>
                  <td>1.500.000đ</td>
                </tr>
                <tr>
                  <td>1234567</td>
                  <td>15/11/2021</td>
                  <td>Chó Phốc sóc</td>
                  <td>1</td>
                  <td>1.500.000đ</td>
                </tr>
                <tr>
                  <td>1234567</td>
                  <td>16/11/2021</td>
                  <td>Chó Phốc sóc</td>
                  <td>1</td>
                  <td>1.500.000đ</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!--Thông báo-->
          <div class="boxDetailInfo user_notify">
            <div class="user_notify-title">Thông báo của bạn</div>
            <div class="user_notify-item">
              <div class="user_notify-item-detail">
                <img
                  src="<?= load_images('icon','bell.png')?>"
                  alt=""
                  class="user_notify-img"
                />
                <div class="user_notify-text">
                  <div class="user_notify-text--item">Chưa có thông báo</div>
                  <div class="user_notify-text--item">
                    Thông báo bạn nhận được sẽ hiển thị ở đây
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

<script>
        const $ = document.querySelector.bind(document)
        const $$ = document.querySelectorAll.bind(document)

        const arrs = $$('.arrtitle')
        const boxs = $$('.boxDetailInfo')

        arrs.forEach((tab, index) => {
            const box = boxs[index]

            tab.onclick = function () {
                $('.arrtitle.active').classList.remove('active')
                $('.boxDetailInfo.active').classList.remove('active')

                this.classList.add('active')
                box.classList.add('active')
            }
        });
    </script>