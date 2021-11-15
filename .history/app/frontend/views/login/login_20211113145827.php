<div class="full-page">
  <div id="login-form" class="login-page">
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>

        <button type="button" onclick="login()" class="toggle-btn DK">
          ĐĂNG NHẬP
        </button>

        <button type="button" onclick="register()" class="toggle-btn DK">
          ĐĂNG KÝ
        </button>
      </div>
      <form id="login" class="input-group-login">
        <input
          type="text"
          class="input-filed"
          placeholder="Email"
          required
          name="email"
        />
        <input
          type="password"
          class="input-filed"
          placeholder="Mật khẩu"
          required
          name="password"
        />
        <button type="submit" class="submit-btn" onclick="test();">
          <a href="index.html">Đăng Nhập</a>
        </button>
      </form>

      <form id="register" class="input-group-register">
        <input
          type="text"
          class="input-filed"
          placeholder="Tên Đăng Nhập"
          required
          name="name"
        />
        <input
          type="text"
          class="input-filed"
          placeholder="Nhập SĐT"
          required
          name="phone"
        />
        <input
          type="email"
          class="input-filed"
          placeholder="Nhập Email"
          required
          name="email"
        />
        <input
          type="password"
          class="input-filed"
          placeholder="Nhập Mật Khẩu"
          required
          name="password"
        />
        <input
          type="password"
          class="input-filed"
          placeholder="Nhập Lại Mật Khẩu"
          required
          name="re_password"
        />
        <button type="submit" class="submit-btn">Đăng Ký</button>
      </form>
    </div>
  </div>
</div>
