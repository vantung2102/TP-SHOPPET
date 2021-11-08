<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
      href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
      crossorigin="anonymous"
    >

    <!-- Theme Styles -->
    <link href="<?= load_css('connect.min') ?>" rel="stylesheet" />
    <link href="<?= load_css('admin') ?>" rel="stylesheet" />
    <script src="<?= load_js('jquery-3.4.1.min')?>"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="<?= load_js('connect')?>"></script>


  </head>
  <body>

      <div class="loader">
        <div class="spinner-grow text-primary" role="status">
          <span class="sr-only"></span>
        </div>
      </div>
      <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="page-sidebar">
          <div class="logo-box">
            <a href="#" class="logo-text">Connect</a>
            <a href="#" id="sidebar-close">
              <i class="material-icons">close</i>
            </a>
            <a href="#" id="sidebar-state">
              <i class="material-icons">adjust</i>
              <i class="material-icons compact-sidebar-icon">panorama_fish_eye</i>
            </a>
          </div>
          <div class="page-sidebar-inner slimscroll">
            <ul class="accordion-menu">
              <li class="sidebar-title">Apps</li>
              <li class="active-page">
                <a href="index.html" class="active"
                  ><i class="material-icons-outlined">dashboard</i>Dashboard</a
                >
              </li>
              <li>
                <a href="mailbox.html"
                  ><i class="material-icons-outlined">inbox</i>Mailbox</a
                >
              </li>
              <li>
                <a href="profile.html"
                  ><i class="material-icons-outlined">account_circle</i>Profile</a
                >
              </li>
              <li>
                <a href="file-manager.html"
                  ><i class="material-icons">cloud_queue</i>File Manager</a
                >
              </li>
              <li>
                <a href="calendar.html"
                  ><i class="material-icons-outlined">calendar_today</i
                  >Calendar</a
                >
              </li>
              <li>
                <a href="todo.html"><i class="material-icons">done</i>Todo</a>
              </li>
              <li class="sidebar-title">UI Elements</li>
              <li>
                <a href="#"
                  ><i class="material-icons">text_format</i>Styles<i
                    class="material-icons has-sub-menu"
                    >add</i
                  ></a
                >
                <ul class="sub-menu">
                  <li>
                    <a href="styles-typography.html">Typography</a>
                  </li>
                  <li>
                    <a href="styles-code.html">Code</a>
                  </li>
                  <li>
                    <a href="styles-tables.html">Tables</a>
                  </li>
                  <li>
                    <a href="styles-icons.html">Icons</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href=""
                  ><i class="material-icons">apps</i>Components<i
                    class="material-icons has-sub-menu"
                    >add</i
                  ></a
                >
                <ul class="sub-menu">
                  <li>
                    <a href="ui-alerts.html">Alerts</a>
                  </li>
                  <li>
                    <a href="ui-badge.html">Badge</a>
                  </li>
                  <li>
                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                  </li>
                  <li>
                    <a href="ui-buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="ui-card.html">Card</a>
                  </li>
                  <li>
                    <a href="ui-collapse.html">Collapse</a>
                  </li>
                  <li>
                    <a href="ui-dropdowns.html">Dropdowns</a>
                  </li>
                  <li>
                    <a href="ui-list-group.html">List Group</a>
                  </li>
                  <li>
                    <a href="ui-modal.html">Modal</a>
                  </li>
                  <li>
                    <a href="ui-pagination.html">Pagination</a>
                  </li>
                  <li>
                    <a href="ui-popovers.html">Popovers</a>
                  </li>
                  <li>
                    <a href="ui-progress.html">Progress</a>
                  </li>
                  <li>
                    <a href="ui-spinners.html">Spinners</a>
                  </li>
                  <li>
                    <a href="ui-toast.html">Toast</a>
                  </li>
                  <li>
                    <a href="ui-tooltips.html">Tooltips</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"
                  ><i class="material-icons">card_giftcard</i>Extended<i
                    class="material-icons has-sub-menu"
                    >add</i
                  ></a
                >
                <ul class="sub-menu">
                  <li>
                    <a href="extended-select2.html">Select2</a>
                  </li>
                  <li>
                    <a href="extended-datatables.html">Data Tables</a>
                  </li>
                  <li>
                    <a href="extended-blockui.html">Block UI</a>
                  </li>
                  <li>
                    <a href="extended-session.html">Session Timeout</a>
                  </li>
                  <li>
                    <a href="extended-tree.html">Tree View</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="charts.html"
                  ><i class="material-icons">bar_chart</i>Charts</a
                >
              </li>
              <li>
                <a href="forms.html"><i class="material-icons">input</i>Forms</a>
              </li>
              <li class="sidebar-title">Other</li>
              <li>
                <a href=""
                  ><i class="material-icons">star_border</i>Pages<i
                    class="material-icons has-sub-menu"
                    >add</i
                  ></a
                >
                <ul class="sub-menu">
                  <li>
                    <a href="404.html">404</a>
                  </li>
                  <li>
                    <a href="500.html">500</a>
                  </li>
                  <li>
                    <a href="sign-in.html">Sign In</a>
                  </li>
                  <li>
                    <a href="sign-up.html">Sign Up</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"
                  ><i class="material-icons">bookmark_border</i>Documentation</a
                >
              </li>
              <li>
                <a href="#"
                  ><i class="material-icons">access_time</i>Change Log</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="page-container">
        <div class="page-header">
          <nav class="navbar navbar-expand">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <ul class="navbar-nav">
                  <li class="nav-item small-screens-sidebar-link">
                      <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                  </li>
                  <li class="nav-item nav-profile dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="../../assets/images/avatars/profile-image-1.png" alt="profile image">
                          <span>Nancy Moore</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                          <a class="dropdown-item" href="#">Settings &amp; Privacy</a>
                          <a class="dropdown-item" href="#">Switch Account</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Log out</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                  </li>
              </ul>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a href="#" class="nav-link">Projects</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">Tasks</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">Reports</a>
                      </li>
                  </ul>
              </div>
              <div class="navbar-search">
                  <form>
                      <div class="form-group">
                          <input type="text" name="search" id="nav-search" placeholder="Search...">
                      </div>
                  </form>
              </div>
          </nav>
        </div>
        <div class="page-content">
                    <div class="page-info">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                            </ol>
                        </nav>
                        <div class="page-options">
                            <a href="#" class="btn btn-primary">Add Event</a>
                        </div>
                    </div>
                    <div class="main-wrapper">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="calendar" class="fc fc-ltr fc-bootstrap" style=""><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><h2>November 2021</h2></div><div class="fc-center"><div class="btn-group"><button type="button" class="fc-dayGridMonth-button btn btn-primary active">month</button><button type="button" class="fc-timeGridWeek-button btn btn-primary">week</button><button type="button" class="fc-timeGridDay-button btn btn-primary">day</button></div></div><div class="fc-right"><div class="btn-group"><button type="button" class="fc-prev-button btn btn-primary" aria-label="prev"><span class="fa fa-chevron-left"></span></button><button type="button" class="fc-next-button btn btn-primary" aria-label="next"><span class="fa fa-chevron-right"></span></button></div><button type="button" class="fc-today-button btn btn-primary" disabled="">today</button></div></div><div class="fc-view-container"><div class="fc-view fc-dayGridMonth-view fc-dayGrid-view" style=""><table class="table-bordered"><thead class="fc-head"><tr><td class="fc-head-container "><div class="fc-row table-bordered"><table class="table-bordered"><thead><tr><th class="fc-day-header  fc-sun"><span>Sun</span></th><th class="fc-day-header  fc-mon"><span>Mon</span></th><th class="fc-day-header  fc-tue"><span>Tue</span></th><th class="fc-day-header  fc-wed"><span>Wed</span></th><th class="fc-day-header  fc-thu"><span>Thu</span></th><th class="fc-day-header  fc-fri"><span>Fri</span></th><th class="fc-day-header  fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class=""><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 729px;"><div class="fc-day-grid"><div class="fc-row fc-week table-bordered fc-rigid" style="height: 121px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-other-month fc-past" data-date="2021-10-31"></td><td class="fc-day  fc-mon fc-past" data-date="2021-11-01"></td><td class="fc-day  fc-tue fc-past" data-date="2021-11-02"></td><td class="fc-day  fc-wed fc-past" data-date="2021-11-03"></td><td class="fc-day  fc-thu fc-past" data-date="2021-11-04"></td><td class="fc-day  fc-fri fc-past" data-date="2021-11-05"></td><td class="fc-day  fc-sat fc-today alert alert-info" data-date="2021-11-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2021-10-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-mon fc-past" data-date="2021-11-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-past" data-date="2021-11-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-past" data-date="2021-11-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-past" data-date="2021-11-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-past" data-date="2021-11-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-today alert alert-info" data-date="2021-11-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td rowspan="6"></td><td class="fc-event-container" rowspan="6"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">All Day Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="6"></td><td rowspan="6"></td><td rowspan="6"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td></tr><tr><td rowspan="5"></td><td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+5 more</a></div></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">8p</span> <span class="fc-title">Dinner</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered fc-rigid" style="height: 121px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-future" data-date="2021-11-07"></td><td class="fc-day  fc-mon fc-future" data-date="2021-11-08"></td><td class="fc-day  fc-tue fc-future" data-date="2021-11-09"></td><td class="fc-day  fc-wed fc-future" data-date="2021-11-10"></td><td class="fc-day  fc-thu fc-future" data-date="2021-11-11"></td><td class="fc-day  fc-fri fc-future" data-date="2021-11-12"></td><td class="fc-day  fc-sat fc-future" data-date="2021-11-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-11-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-11-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-11-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-11-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-11-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-11-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-11-13"><span class="fc-day-number">13</span></td></tr></thead><tbody><tr><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Long Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered fc-rigid" style="height: 121px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-future" data-date="2021-11-14"></td><td class="fc-day  fc-mon fc-future" data-date="2021-11-15"></td><td class="fc-day  fc-tue fc-future" data-date="2021-11-16"></td><td class="fc-day  fc-wed fc-future" data-date="2021-11-17"></td><td class="fc-day  fc-thu fc-future" data-date="2021-11-18"></td><td class="fc-day  fc-fri fc-future" data-date="2021-11-19"></td><td class="fc-day  fc-sat fc-future" data-date="2021-11-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-11-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-11-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-11-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-11-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-11-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-11-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-11-20"><span class="fc-day-number">20</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered fc-rigid" style="height: 121px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-future" data-date="2021-11-21"></td><td class="fc-day  fc-mon fc-future" data-date="2021-11-22"></td><td class="fc-day  fc-tue fc-future" data-date="2021-11-23"></td><td class="fc-day  fc-wed fc-future" data-date="2021-11-24"></td><td class="fc-day  fc-thu fc-future" data-date="2021-11-25"></td><td class="fc-day  fc-fri fc-future" data-date="2021-11-26"></td><td class="fc-day  fc-sat fc-future" data-date="2021-11-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-11-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-11-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-11-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-11-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-11-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-11-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-11-27"><span class="fc-day-number">27</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered fc-rigid" style="height: 121px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-future" data-date="2021-11-28"></td><td class="fc-day  fc-mon fc-future" data-date="2021-11-29"></td><td class="fc-day  fc-tue fc-future" data-date="2021-11-30"></td><td class="fc-day  fc-wed fc-other-month fc-future" data-date="2021-12-01"></td><td class="fc-day  fc-thu fc-other-month fc-future" data-date="2021-12-02"></td><td class="fc-day  fc-fri fc-other-month fc-future" data-date="2021-12-03"></td><td class="fc-day  fc-sat fc-other-month fc-future" data-date="2021-12-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-11-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-11-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-11-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-12-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-12-04"><span class="fc-day-number">4</span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" href="http://google.com/"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered fc-rigid" style="height: 124px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-other-month fc-future" data-date="2021-12-05"></td><td class="fc-day  fc-mon fc-other-month fc-future" data-date="2021-12-06"></td><td class="fc-day  fc-tue fc-other-month fc-future" data-date="2021-12-07"></td><td class="fc-day  fc-wed fc-other-month fc-future" data-date="2021-12-08"></td><td class="fc-day  fc-thu fc-other-month fc-future" data-date="2021-12-09"></td><td class="fc-day  fc-fri fc-other-month fc-future" data-date="2021-12-10"></td><td class="fc-day  fc-sat fc-other-month fc-future" data-date="2021-12-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2021-12-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2021-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2021-12-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-12-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-12-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-12-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-12-11"><span class="fc-day-number">11</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      
  </body>
</html>
        
