<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link 
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
        />
        <link rel="stylesheet" href="<?= load_css('base') ?>">
        <link rel="stylesheet" href="<?= load_css('admin') ?>">
    </head>
    <body>
        <div class="loader">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
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
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;">
                    <div class="page-sidebar-inner slimscroll" style="overflow: hidden; width: auto; height: 250px;">
                        <ul class="accordion-menu">
                            <li class="sidebar-title">
                                Apps
                            </li>
                            <li class="active-page">
                                <a href="index.html" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                            </li>
                            <li>
                                <a href="mailbox.html"><i class="material-icons-outlined">inbox</i>Mailbox</a>
                            </li>
                            <li>
                                <a href="profile.html"><i class="material-icons-outlined">account_circle</i>Profile</a>
                            </li>
                            <li>
                                <a href="file-manager.html"><i class="material-icons">cloud_queue</i>File Manager</a>
                            </li>
                            <li>
                                <a href="calendar.html"><i class="material-icons-outlined">calendar_today</i>Calendar</a>
                            </li>
                            <li>
                                <a href="todo.html"><i class="material-icons">done</i>Todo</a>
                            </li>
                            <li class="sidebar-title">
                                UI Elements
                            </li>
                            <li>
                                <a href="#"><i class="material-icons">text_format</i>Styles<i class="material-icons has-sub-menu">add</i></a>
                                <ul class="sub-menu" style="display: none;">
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
                                <a href=""><i class="material-icons">apps</i>Components<i class="material-icons has-sub-menu">add</i></a>
                                <ul class="sub-menu" style="display: none;">
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
                                <a href="#"><i class="material-icons">card_giftcard</i>Extended<i class="material-icons has-sub-menu">add</i></a>
                                <ul class="sub-menu" style="display: none;">
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
                                <a href="charts.html"><i class="material-icons">bar_chart</i>Charts</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="material-icons">input</i>Forms</a>
                            </li>
                            <li class="sidebar-title">
                                Other
                            </li>
                            <li>
                                <a href=""><i class="material-icons">star_border</i>Pages<i class="material-icons has-sub-menu">add</i></a>
                                <ul class="sub-menu" style="display: none;">
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
                                <a href="#"><i class="material-icons">bookmark_border</i>Documentation</a>
                            </li>
                            <li>
                                <a href="#"><i class="material-icons">access_time</i>Change Log</a>
                            </li>
                        </ul>
                    </div>
                    <div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 6px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 0px; z-index: 99; right: 0px; height: 30px;">
                    </div>
                    <div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>