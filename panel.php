<!DOCTYPE html>
<html>

<head>
  <title>فراگلد | پنل مدیریت</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/bootstrap-theme.css" />
  <link rel="stylesheet" href="assets/bootstrap3-wysihtml5.min.css" />
  <link rel="stylesheet" href="assets/rtl.css" />
  <link rel="stylesheet" href="assets/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/ionicons.min.css" />
  <link rel="stylesheet" href="assets/AdminLTE.css?t=14" />
  <link rel="stylesheet" href="assets/all-skins.min.css" />
  <link rel="stylesheet" href="assets/morris.css" />
  <link rel="stylesheet" href="assets/jquery-jvectormap.css" />
  <link rel="stylesheet" href="assets/daterangepicker.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
  <link rel="shortcut icon" type="image/png" href="assets/FaraGold_Icon192x192.png" />
  <link rel="manifest" href="assets/manifest.json" />
  <style>
    *[data-privateInput="privateInput"] {
      text-align: end;
    }
  </style>
  <script src="assets/bootstrap.min.js"></script>
  <!--<script src="assets/jquery-3.6.0.min.js"></script>-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

  <style>
    #user_list li {
      cursor: pointer;
    }

    /*#pnlMessages{background-color: #f1f2ff;}*/

    #container {
      display: block;
      position: fixed;
      z-index: 1000;
      width: 250px;
      bottom: 0;
      right: 15px;
      background-color: #dededed1 !important;
      padding: 10px;
      max-height: 240px;
      overflow-y: scroll;
      scrollbar-width: thin;
      direction: ltr;
    }

    .btn_request {
      display: block;
      border-radius: 10px;
      width: 75px;
      padding: 5px;
      text-align: center;
      line-height: 20px;
      font-weight: bold;
      color: darkslategray;
      float: right;
    }

    ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 10px;
    }

    ::-webkit-scrollbar-thumb {
      border-radius: 4px;
      background-color: rgba(0, 0, 0, 0.5);
      box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
    }

    fieldset {
      border: 1px solid gray;
      padding: 10px 20px 10px 10px;
      background-color: #f9f9f9;
      border-radius: 10px;
      margin: 5px;
    }

    legend {
      width: unset;
      font-size: 16px;
      padding: 5px;
      border: none;
      padding-top: 0;
      margin: 0;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      background-color: #6a6a6a;
      color: white;
      font-weight: bold;
    }

    .nav-link:hover {
      color: #6a6a6a;
    }

    .nav-item {
      background-color: #ffffec;
      border: 1px dotted #eaba1b;
      flex: 1 1 auto;
      text-align: center;
    }

    .priceLabel {
      color: #3c8dbc;
      direction: ltr;
      max-width: 130px;
    }

    .dropdown input {
      width: 100%;
    }

    /* Style for the dropdown list */
    .dropdown-list {
      position: absolute;
      width: 100%;
      max-height: 200px;
      overflow-y: auto;
      border: 1px solid #ccc;
      display: none;
      z-index: 1;
      background-color: white;
      line-height: 25px;
    }

    /* Style for each item in the dropdown list */
    .dropdown-list-item {
      padding: 8px;
      cursor: pointer;
    }

    /* Style for the selected item in the dropdown list */
    .dropdown-list-item.selected {
      background-color: #f2f2f2;
    }

    #tbl_prices input[type="text"] {
      width: 80px;
    }

    #tbl_prices td {
      padding: 4px 8px;
    }

    .nav-link {
      padding: 0 15px !important;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      background-color: #eaba1b;
      border-radius: unset;
      color: #2b2b2b;
    }

    .nav-link:hover {
      color: #6a6a6a;
    }

    .nav-item {
      background-color: #ffffec;
      border: 1px dotted #eaba1b;
    }

    .nav-right {
      border-top-right-radius: 10px !important;
    }

    .nav-left {
      border-top-left-radius: 10px !important;
    }

    .tab-content2 {
      display: block;
      border: 1px solid #b8b6b6;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      background-color: white;
    }

    .thead-light2 {
      background-color: #dfdfdf;
    }

    .tab-content1 {
      padding: 10px;
      border: 1px solid gray;
      margin: 0 0 20px 0;
      border-radius: 10px 0 10px 10px;
      background-color: white;
    }

    input {
      border-radius: 7px;
      border: 1px solid gray;
    }

    .distict_text {
      color: red;
      font-size: 18px;
    }

    .pnl_notice {
      text-align: center;
      background-color: white;
      margin-top: 20px;
      border: 1px solid gray;
      border-radius: 10px;
      padding: 10px;
    }

    .btn_pager {
      margin: 5px;
      border-radius: 7px;
      border: 1px solid gray;
      width: 35px;
      cursor: pointer;
    }

    .btn_pager.active {
      background-color: #eaba1b !important;
    }

    .fontsize10 {
      font-size: 10px;
    }

    .header_wallet {
      height: 40px;
      color: white;
      padding: 10px;
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
      text-align: right;
      font-weight: bold;
      margin-top: 20px;
    }

    @media (max-width: 760px) {
      #pnl_settings {
        display: none;
      }
    }

    /* new Style sandoq section */
    .tableWrapper {
      display: flex;
      flex-direction: column;
    }

    .custom-table-container {
      position: relative;
      overflow-x: auto;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06);
      border-radius: 0.375rem;
    }

    .custom-table {
      width: 100%;
      text-align: left;
      color: #718096;
      background-color: #f8fafc;
      border-collapse: collapse;
      text-align: right;
    }

    .custom-table thead {
      color: #4a5568;
      text-transform: uppercase;
      background-color: #edf2f7;
      color: #2d3748;
    }

    .custom-table th,
    .custom-table td {
      padding: 1rem;
    }

    .custom-table tbody tr:nth-child(odd) {
      background-color: #fff;
    }

    .custom-table tbody tr:nth-child(even) {
      background-color: #edf2f7;
    }

    .custom-table a {
      color: #3490dc;
      text-decoration: none;
    }

    .tables_wrapper {
      display: flex;
      width: 100%;
      justify-content: space-evenly;
      align-items: start;
    }

    .tables_wrapper .tableWrapper {
      width: 45%;
    }

    .goCenter {
      text-align: center;
    }

    .custom-table-container tr,
    .custom-table-container th {
      text-align: center;
    }

    /* ------------ Toggle Switch------------ */
    .toggle {
      cursor: pointer;
      display: inline-block;
    }

    .toggle-switch {
      display: inline-block;
      background: #ccc;
      border-radius: 16px;
      width: 44px;
      height: 25px;
      position: relative;
      vertical-align: middle;
      transition: background 0.25s;
    }

    .toggle-switch:before,
    .toggle-switch:after {
      content: "";
    }

    .toggle-switch:before {
      display: block;
      background: linear-gradient(to bottom, #fff 0%, #eee 100%);
      border-radius: 50%;
      box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.25);
      width: 18px;
      height: 18px;
      position: absolute;
      top: 4px;
      left: 4px;
      transition: left 0.25s;
    }

    .toggle:hover .toggle-switch:before {
      background: linear-gradient(to bottom, #fff 0%, #fff 100%);
      box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.5);
    }

    .toggle-checkbox:checked+.toggle-switch {
      background: #337bdf;
    }

    .toggle-checkbox:checked+.toggle-switch:before {
      left: 22px;
    }

    .toggle-checkbox {
      position: absolute;
      visibility: hidden;
    }

    .toggle-label {
      margin-left: 5px;
      position: relative;
      top: 2px;
    }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div id="container" class="row main-box" style="display: none"></div>

  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="panel.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">پنل</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div id="pnl_settings" style="width: 80%; float: right; padding: 12px">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; float: right">
              <!-- <input
                  type="checkbox"
                  id="chkStatus"
                  name="chkStatus"
                  value="0"
                  onclick="do_action('status')"
                /> -->
              <label class="toggle">
                <input class="toggle-checkbox" type="checkbox" id="chkStatus" name="chkStatus" value="0" onclick="do_action('status')" />
                <div class="toggle-switch"></div>
                <span class="toggle-label"> وضعیت سامانه</span>
              </label>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; float: right">
              <label class="toggle">
                <input class="toggle-checkbox" type="checkbox" id="chkHandConfirm" name="chkHandConfirm" value="0" onclick="do_action('confirm')" />
                <div class="toggle-switch"></div>
                <span class="toggle-label">تایید دستی معاملات</span>
              </label>
              <!-- <input
                  type="checkbox"
                  id="chkHandConfirm"
                  name="chkHandConfirm"
                  value="0"
                  onclick="do_action('confirm')"
                />
                <label for="chkHandConfirm"> تایید دستی معاملات</label> -->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; float: right">
              <!-- <input
                  type="checkbox"
                  id="chkAutoTransaction"
                  name="chkAutoTransaction"
                  value="0"
                  onclick="do_action('auto_transaction')"
                /> -->
              <!-- <label for="chkAutoTransaction"> تسویه خودکار</label> -->
              <label class="toggle">
                <input class="toggle-checkbox" type="checkbox" id="chkAutoTransaction" name="chkAutoTransaction" value="0" onclick="do_action('auto_transaction')" />
                <div class="toggle-switch"></div>
                <span class="toggle-label">تسویه خودکار</span>
              </label>
            </div>
          </div>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <a href="?Logout">
                <span>خروج</span>
              </a>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-right image">
            <a href="index.php">
              <img class="img-circle" src="assets/FaraGold_Logo1-1.png" style="width: 80px" />
            </a>
          </div>
          <div class="pull-right info" style="padding-right: 5px">
            <label style="font-weight: bold; color: #ecbb1b" class="update-adminName"></label>
            <br />
            <label style="font-size: 10px" class="update-calender"> </label>
            <label id="lbltime" style="font-size: 10px"></label>
            <br />
            <span id="pnl-open-trade-status" style="display: none">
              <img id="imgtradestatus" class="blink" src="assets/open.png" style="width: 25px" />
              <label style="font-weight: bold; color: #26b426; margin-top: 3px">بازار باز است.</label>
            </span>
            <span id="pnl-close-trade-status">
              <img id="imgtradestatus" src="assets/close.png" style="width: 18px" />
              <label style="font-weight: bold; color: red; margin-top: 3px">بازار بسته است.</label>
            </span>
            <!--<a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>-->
          </div>
        </div>

        <ul class="sidebar-menu tree" data-widget="tree">
          <li class="treeview">
            <a href="#" onclick="change_page(1)">خانه</a>
          </li>
          <li class="treeview">
            <a href="#" onclick="change_page(2)">موجودی اولیه</a>
          </li>
          <li class="treeview">
            <a href="#" onclick="change_page(3)">مدیریت اسناد</a>
          </li>
          <li class="treeview">
            <a href="#" onclick="change_page(4)">مدیریت کاربران</a>
          </li>
          <li class="treeview">
            <a href="#" onclick="change_page(5)">گزارش گیری</a>
          </li>
        </ul>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form" style="display: none">
          <div class="input-group">
            <input id="txt_search" type="text" name="q" class="form-control" placeholder="جستجو کاربر" oninput="show_users();" />
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <ul id="user_list" class="sidebar-menu" data-widget="tree" style="display: none"></ul>
        <!-- /.search form -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="display: none">
        <h1>
          داشبورد
          <small>صفحه اصلی</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content" id="pnl_main_content">
        <div id="pnlStatus" class="row main-box" style="display: none; padding: 0 40px 10px 40px"></div>

        <div class="row" style="padding: 10px 20px">
          <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 10px">
            <div id="pnlSettings" class="main-box" style="
                  display: block;
                  min-height: 80px;
                  padding: 0;
                  box-shadow: 0 5px 15px 0 rgb(0 0 0 / 39%);
                  border-radius: 10px;
                ">
              <div style="
                    height: 40px;
                    background-color: green;
                    border-top-right-radius: 10px;
                    border-top-left-radius: 10px;
                    color: white;
                    text-align: right;
                    padding: 10px;
                    font-weight: bold;
                  ">
                تنظیمات سامانه
              </div>
              <div class="row" style="padding: 20px">
                <!--<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: right; float: right">-->
                <!--    <input type="checkbox" id="chkStatus" name="chkStatus" value="0" onclick="do_action('status')">-->
                <!--    <label for="chkStatus"> وضعیت سامانه</label>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: right; float: right">-->
                <!--    <input type="checkbox" id="chkHandConfirm" name="chkHandConfirm" value="0" onclick="do_action('confirm')">-->
                <!--    <label for="chkHandConfirm"> تایید دستی معاملات</label>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: right; float: right">-->
                <!--    <input type="checkbox" id="chkAutoTransaction" name="chkAutoTransaction" value="0" onclick="do_action('auto_transaction')">-->
                <!--    <label for="chkAutoTransaction"> تسویه خودکار</label>-->
                <!--</div>-->

                <div class="col-lg-12 col-md-12 col-sm-12" style="float: right">
                  <fieldset style="padding: 0 10px">
                    <legend>
                      پیام مدیر
                      <img src="assets/edit-icon.png" style="width: 25px; cursor: pointer" onclick="open_window('admin_message')" />
                    </legend>

                    <label id="lblMessage" style="
                          font-size: 12px;
                          font-weight: bold;
                          color: green;
                          line-height: 30px;
                        "></label>
                  </fieldset>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <legend>
                      تراز سامانه
                      <img src="assets/scale2.png" style="
                            width: 30px;
                            cursor: pointer;
                            padding-bottom: 10px;
                            margin: 0 5px;
                          " onclick="open_window('system_balance')" />
                    </legend>

                    <div>
                      <div class="row" style="line-height: 20px">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div>
                            آبشده کل:
                            <label id="lbl_balance_melted_all" class="priceLabel"></label>
                            گرم
                          </div>
                          <div>
                            تمام سکه بانکی:
                            <label id="lbl_balance_bankcoin1" class="priceLabel"></label>
                          </div>
                          <div>
                            نیم سکه بانکی:
                            <label id="lbl_balance_bankcoin2" class="priceLabel"></label>
                          </div>
                          <div>
                            ربع سکه بانکی:
                            <label id="lbl_balance_bankcoin3" class="priceLabel"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <legend>
                      مدیریت صندوق
                      <!-- +++ inja tag Image ro copy paste kon -->
                      <img src="assets/treasure.png" style="
                            width: 30px;
                            cursor: pointer;
                            padding-bottom: 10px;
                            margin: 0 5px;
                          " onclick="openTheModal()" />
                    </legend>

                    <div>
                      <div class="row" style="line-height: 20px">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div>
                            مانده پولی:
                            <label id="lbl_box_cash" class="priceLabel"></label>
                          </div>
                          <div>
                            تمام سکه بانکی:
                            <label id="lbl_box_bankcoin1" class="priceLabel"></label>
                          </div>
                          <div>
                            نیم سکه بانکی:
                            <label id="lbl_box_bankcoin2" class="priceLabel"></label>
                          </div>
                          <div>
                            ربع سکه بانکی:
                            <label id="lbl_box_bankcoin3" class="priceLabel"></label>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div>
                            مانده آبشده:
                            <label id="lbl_box_melted" class="priceLabel"></label>
                          </div>
                          <div>
                            تمام سکه غیر بانکی:
                            <label id="lbl_box_nonbankcoin1" class="priceLabel"></label>
                          </div>
                          <div>
                            نیم سکه غیر بانکی:
                            <label id="lbl_box_nonbankcoin2" class="priceLabel"></label>
                          </div>
                          <div>
                            ربع سکه غیر بانکی:
                            <label id="lbl_box_nonbankcoin3" class="priceLabel"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <legend>تسویه حساب ها</legend>

                    <div>
                      <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          بازدهی کل:
                          <label id="lbl_wallet_cash_all" class="priceLabel"></label>
                          تومان
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          حساب پولی:
                          <label id="lbl_wallet_cash" class="priceLabel"></label>
                          تومان
                        </div>
                      </div>

                      <div class="row" style="line-height: 20px">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div>
                            آبشده کل:
                            <label id="lbl_wallet_melted_all" class="priceLabel"></label>
                            گرم
                          </div>
                          <div>
                            تمام سکه بانکی:
                            <label id="lbl_wallet_bankcoin1" class="priceLabel"></label>
                          </div>
                          <div>
                            نیم سکه بانکی:
                            <label id="lbl_wallet_bankcoin2" class="priceLabel"></label>
                          </div>
                          <div>
                            ربع سکه بانکی:
                            <label id="lbl_wallet_bankcoin3" class="priceLabel"></label>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12" style="display: none">
                          <div>
                            آبشده خالص:
                            <label id="lbl_wallet_melted" class="priceLabel"></label>
                          </div>
                          <div>
                            تمام سکه غیر بانکی:
                            <label id="lbl_wallet_nonbankcoin1" class="priceLabel"></label>
                          </div>
                          <div>
                            نیم سکه غیر بانکی:
                            <label id="lbl_wallet_nonbankcoin2" class="priceLabel"></label>
                          </div>
                          <div>
                            ربع سکه غیر بانکی:
                            <label id="lbl_wallet_nonbankcoin3" class="priceLabel"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </div>

            <!--<div id="pnlMessages" class="main-box" style="display: block; box-shadow: 0 5px 15px 0 rgb(0 0 0 / 39%);margin-top: 30px; border-radius: 10px; padding: 10px;">-->

            <!--</div>-->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 float-sm-right">
            <div class="col-lg-12 col-md-12" style="padding: 10px">
              <table id="tbl_prices" class="table" style="
                    text-align: center;
                    font-size: 14px;
                    font-family: 'Vazir';
                    border-radius: 1em;
                    overflow: hidden;
                    box-shadow: 0 5px 15px 0 rgb(0 0 0 / 39%);
                    margin-bottom: 0;
                  ">
                <thead class="thead-light">
                  <tr>
                    <th colspan="3" style="
                          background-color: #eaba1b;
                          font-size: 16px;
                          font-weight: bold;
                        ">
                      لیست قیمت ها
                    </th>
                  </tr>
                  <tr>
                    <th style="text-align: right">کالا</th>
                    <th style="text-align: center">خرید</th>
                    <th style="text-align: center">فروش</th>
                  </tr>
                </thead>
                <tbody style="line-height: 30px">
                  <tr style="border: 1px solid #dee2e6" id="pnlmelted">
                    <td style="min-width: 100px; text-align: right">آبشده</td>
                    <td>
                      <label class="priceLabel" id="lbl_melted_buy"></label>
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_melted_sell"></label>
                    </td>
                  </tr>
                  <tr style="border: 1px solid #dee2e6" id="pnlbankcoin1">
                    <td style="min-width: 100px; text-align: right">
                      تمام سکه بانکی
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_bankcoin1_buy"></label>
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_bankcoin1_sell"></label>
                    </td>
                  </tr>
                  <tr style="border: 1px solid #dee2e6" id="pnlbankcoin2">
                    <td style="min-width: 100px; text-align: right">
                      نیم سکه بانکی
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_bankcoin2_buy"></label>
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_bankcoin2_sell"></label>
                    </td>
                  </tr>
                  <tr style="border: 1px solid #dee2e6" id="pnlbankcoin3">
                    <td style="min-width: 100px; text-align: right">
                      ربع سکه بانکی
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_bankcoin3_buy"></label>
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_bankcoin3_sell"></label>
                    </td>
                  </tr>
                  <tr style="border: 1px solid #dee2e6" id="pnlnonbankcoin1">
                    <td style="min-width: 100px; text-align: right">
                      تمام سکه غیر بانکی
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_nonbankcoin1_buy"></label>
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_nonbankcoin1_sell"></label>
                    </td>
                  </tr>
                  <tr style="border: 1px solid #dee2e6" id="pnlnonbankcoin2">
                    <td style="min-width: 100px; text-align: right">
                      نیم سکه غیر بانکی
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_nonbankcoin2_buy"></label>
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_nonbankcoin2_sell"></label>
                    </td>
                  </tr>
                  <tr style="border: 1px solid #dee2e6" id="pnlnonbankcoin3">
                    <td style="min-width: 100px; text-align: right">
                      ربع سکه غیر بانکی
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_nonbankcoin3_buy"></label>
                    </td>
                    <td>
                      <label class="priceLabel" id="lbl_nonbankcoin3_sell"></label>
                    </td>
                  </tr>
                  <!--<tr style="border: 1px solid #dee2e6;" id="pnlclosemelted">-->
                  <!--    <td colspan="4">بازار بسته است</td>-->
                  <!--<tr>-->
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Small boxes (Stat box) -->
        <!--<div class="row">-->
        <!--  <div class="col-lg-3 col-xs-6">-->
        <!-- small box -->
        <!--    <div class="small-box bg-aqua">-->
        <!--      <div class="inner">-->
        <!--        <h3>150</h3>-->

        <!--        <p>سفارش جدید</p>-->
        <!--      </div>-->
        <!--      <div class="icon">-->
        <!--        <i class="ion ion-bag"></i>-->
        <!--      </div>-->
        <!--      <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!-- ./col -->
        <!--  <div class="col-lg-3 col-xs-6">-->
        <!-- small box -->
        <!--    <div class="small-box bg-green">-->
        <!--      <div class="inner">-->
        <!--        <h3>53<sup style="font-size: 20px">%</sup></h3>-->

        <!--        <p>افزایش امتیاز</p>-->
        <!--      </div>-->
        <!--      <div class="icon">-->
        <!--        <i class="ion ion-stats-bars"></i>-->
        <!--      </div>-->
        <!--      <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!-- ./col -->
        <!--  <div class="col-lg-3 col-xs-6">-->
        <!-- small box -->
        <!--    <div class="small-box bg-yellow">-->
        <!--      <div class="inner">-->
        <!--        <h3>44</h3>-->

        <!--        <p>کاربران ثبت شده</p>-->
        <!--      </div>-->
        <!--      <div class="icon">-->
        <!--        <i class="ion ion-person-add"></i>-->
        <!--      </div>-->
        <!--      <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!-- ./col -->
        <!--  <div class="col-lg-3 col-xs-6">-->
        <!-- small box -->
        <!--    <div class="small-box bg-red">-->
        <!--      <div class="inner">-->
        <!--        <h3>65</h3>-->

        <!--        <p>بازدید جدید</p>-->
        <!--      </div>-->
        <!--      <div class="icon">-->
        <!--        <i class="ion ion-pie-graph"></i>-->
        <!--      </div>-->
        <!--      <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!-- ./col -->
        <!--</div>-->
        <!-- /.row -->
        <!--<div class="row">-->
        <!--  <section class="col-lg-12 col-md-12">-->
        <!--    <div class="box box-info">-->
        <!--      <div class="box-header">-->
        <!--        <i class="fa fa-info-circle"></i>-->
        <!--        <h3 class="box-title">قالب پنل ادمین فارسی ورژن 2.4.0</h3>-->
        <!-- tools box -->
        <!--        <div class="pull-left box-tools">-->
        <!--          <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>-->
        <!--          </button>-->
        <!--        </div>-->
        <!-- /. tools -->
        <!--      </div>-->
        <!--      <div class="box-body">-->
        <!--        <h5>این قالب به صورت html هست و برای بخش کنترل پنل و مدیریت سایت های مختلف مناسب می باشد.</h5>-->
        <!--        <br><h5><b>ویژگی های قالب :</b></h5>-->
        <!--        <h5>۱- قالب به صورت کامل و حرفه ای فارسی و راست چین شده.</h5>-->
        <!--        <h5>۲- انتخاب تاریخ به صورت شمسی یا دیتا پیکر توسط کتاب خانه باباخانی اضافه شده.</h5>-->
        <!--        <h5>۳- ویرایشگر CK Editor فارسی و راست چین شده.</h5>-->
        <!--        <h5>۴- ویرایشگر TinyMCE فارسی و راست چین شده و به قالب اضافه شده.</h5>-->
        <!--        <h5>۵- همچنین فونت فارسی برای خوانایی بیشتر حروف و اعداد فارسی به قالب افزوده شد.</h5>-->
        <!--        <br>-->
        <!--        <h6><b>قالب توسط حسن شفیعی-->
        <!--               در سایت نت پارادیس منتشر شده است.</b></h6>-->
        <!--        <h6><b>برای دانلود قالب و دریافت آپدیت های آن به این <a href="http://netparadis.com">وب سایت</a> مراجعه کنید.</b></h6>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </section>-->
        <!--</div>-->
        <!-- Main row -->
        <!--<div class="row">-->
        <!-- right col -->
        <!--  <section class="col-lg-7 connectedSortable">-->
        <!-- Custom tabs (Charts with tabs)-->
        <!--    <div class="nav-tabs-custom">-->
        <!-- Tabs within a box -->
        <!--      <ul class="nav nav-tabs pull-left">-->
        <!--        <li class="active"><a href="#revenue-chart" data-toggle="tab">نمودار</a></li>-->
        <!--        <li><a href="#sales-chart" data-toggle="tab">چارت</a></li>-->
        <!--        <li class="pull-right header"><i class="fa fa-inbox"></i> فروش</li>-->
        <!--      </ul>-->
        <!--      <div class="tab-content no-padding">-->
        <!-- Morris chart - Sales -->
        <!--        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>-->
        <!--        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!-- /.nav-tabs-custom -->

        <!-- Chat box -->
        <!--    <div class="box box-success">-->
        <!--      <div class="box-header">-->
        <!--        <i class="fa fa-comments-o"></i>-->

        <!--        <h3 class="box-title">گفتگو</h3>-->

        <!--        <div class="box-tools pull-left" data-toggle="tooltip" title="وضعیت">-->
        <!--          <div class="btn-group" data-toggle="btn-toggle">-->
        <!--            <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>-->
        <!--            </button>-->
        <!--            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="box-body chat" id="chat-box">-->
        <!-- chat item -->
        <!--        <div class="item">-->
        <!--          <img src="assets/icon-192x192.png" alt="user image" class="online">-->

        <!--          <p class="message">-->
        <!--            <a href="#" class="name">-->
        <!--              <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 2:15</small>-->
        <!--              نسترن-->
        <!--            </a>-->
        <!--            فایل مورد نظر شما-->
        <!--          </p>-->
        <!--          <div class="attachment">-->
        <!--            <h4>فایل ضمیمه</h4>-->

        <!--            <p class="filename">-->
        <!--              Theme-thumbnail-image.jpg-->
        <!--            </p>-->

        <!--            <div class="pull-left">-->
        <!--              <button type="button" class="btn btn-primary btn-sm btn-flat">دانلود</button>-->
        <!--            </div>-->
        <!--          </div>-->
        <!-- /.attachment -->
        <!--        </div>-->
        <!-- /.item -->
        <!-- chat item -->
        <!--        <div class="item">-->
        <!--          <img src="assets/icon-192x192.png" alt="user image" class="offline">-->

        <!--          <p class="message">-->
        <!--            <a href="#" class="name">-->
        <!--              <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:15</small>-->
        <!--              نگین-->
        <!--            </a>-->
        <!--            ممنونم-->
        <!--          </p>-->
        <!--        </div>-->
        <!-- /.item -->
        <!-- chat item -->
        <!--        <div class="item">-->
        <!--          <img src="assets/icon-192x192.png" alt="user image" class="offline">-->

        <!--          <p class="message">-->
        <!--            <a href="#" class="name">-->
        <!--              <small class="text-muted pull-left"><i class="fa fa-clock-o"></i> 5:30</small>-->
        <!--              محمد-->
        <!--            </a>-->
        <!--            با تشکر از شما-->
        <!--          </p>-->
        <!--        </div>-->
        <!-- /.item -->
        <!--      </div>-->
        <!-- /.chat -->
        <!--      <div class="box-footer">-->
        <!--        <div class="input-group">-->
        <!--          <input class="form-control" placeholder="Type message...">-->

        <!--          <div class="input-group-btn">-->
        <!--            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!-- /.box (chat box) -->

        <!-- TO DO List -->
        <!--    <div class="box box-primary">-->
        <!--      <div class="box-header">-->
        <!--        <i class="ion ion-clipboard"></i>-->

        <!--        <h3 class="box-title">لیست کارها</h3>-->

        <!--        <div class="box-tools pull-left">-->
        <!--          <ul class="pagination pagination-sm inline">-->
        <!--            <li><a href="#">&laquo;</a></li>-->
        <!--            <li><a href="#">1</a></li>-->
        <!--            <li><a href="#">2</a></li>-->
        <!--            <li><a href="#">3</a></li>-->
        <!--            <li><a href="#">&raquo;</a></li>-->
        <!--          </ul>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- /.box-header -->
        <!--      <div class="box-body">-->
        <!-- See assets/pages/dashboard.js to activate the todoList plugin -->
        <!--        <ul class="todo-list">-->
        <!--          <li>-->
        <!-- drag handle -->
        <!--            <span class="handle">-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                </span>-->
        <!-- checkbox -->
        <!--            <input type="checkbox" value="">-->
        <!-- todo text -->
        <!--            <span class="text">ساخت قالب</span>-->
        <!-- Emphasis label -->
        <!--            <small class="label label-danger"><i class="fa fa-clock-o"></i> ۲ دقیقه</small>-->
        <!-- General tools such as edit or delete-->
        <!--            <div class="tools">-->
        <!--              <i class="fa fa-edit"></i>-->
        <!--              <i class="fa fa-trash-o"></i>-->
        <!--            </div>-->
        <!--          </li>-->
        <!--          <li>-->
        <!--                <span class="handle">-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                </span>-->
        <!--            <input type="checkbox" value="">-->
        <!--            <span class="text">بهینه سازی قالب سایت</span>-->
        <!--            <small class="label label-info"><i class="fa fa-clock-o"></i> ۴ ساعت</small>-->
        <!--            <div class="tools">-->
        <!--              <i class="fa fa-edit"></i>-->
        <!--              <i class="fa fa-trash-o"></i>-->
        <!--            </div>-->
        <!--          </li>-->
        <!--          <li>-->
        <!--                <span class="handle">-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                </span>-->
        <!--            <input type="checkbox" value="">-->
        <!--            <span class="text">ایجاد صفحه فرود سایت</span>-->
        <!--            <small class="label label-warning"><i class="fa fa-clock-o"></i> ۱ روز</small>-->
        <!--            <div class="tools">-->
        <!--              <i class="fa fa-edit"></i>-->
        <!--              <i class="fa fa-trash-o"></i>-->
        <!--            </div>-->
        <!--          </li>-->
        <!--          <li>-->
        <!--                <span class="handle">-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                </span>-->
        <!--            <input type="checkbox" value="">-->
        <!--            <span class="text">تبلیغات سایت</span>-->
        <!--            <small class="label label-success"><i class="fa fa-clock-o"></i> ۳ روز</small>-->
        <!--            <div class="tools">-->
        <!--              <i class="fa fa-edit"></i>-->
        <!--              <i class="fa fa-trash-o"></i>-->
        <!--            </div>-->
        <!--          </li>-->
        <!--          <li>-->
        <!--                <span class="handle">-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                </span>-->
        <!--            <input type="checkbox" value="">-->
        <!--            <span class="text">بررسی اعلان ها</span>-->
        <!--            <small class="label label-primary"><i class="fa fa-clock-o"></i> ۱ هفته</small>-->
        <!--            <div class="tools">-->
        <!--              <i class="fa fa-edit"></i>-->
        <!--              <i class="fa fa-trash-o"></i>-->
        <!--            </div>-->
        <!--          </li>-->
        <!--          <li>-->
        <!--                <span class="handle">-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                  <i class="fa fa-ellipsis-v"></i>-->
        <!--                </span>-->
        <!--            <input type="checkbox" value="">-->
        <!--            <span class="text">طراحی سیستم جدید</span>-->
        <!--            <small class="label label-default"><i class="fa fa-clock-o"></i> ۲ ماه</small>-->
        <!--            <div class="tools">-->
        <!--              <i class="fa fa-edit"></i>-->
        <!--              <i class="fa fa-trash-o"></i>-->
        <!--            </div>-->
        <!--          </li>-->
        <!--        </ul>-->
        <!--      </div>-->
        <!-- /.box-body -->
        <!--      <div class="box-footer clearfix no-border">-->
        <!--        <button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> جدید</button>-->
        <!--      </div>-->
        <!--    </div>-->
        <!-- /.box -->

        <!-- quick email widget -->
        <!--    <div class="box box-info">-->
        <!--      <div class="box-header">-->
        <!--        <i class="fa fa-envelope"></i>-->

        <!--        <h3 class="box-title">ایمیل</h3>-->
        <!-- tools box -->
        <!--        <div class="pull-left box-tools">-->
        <!--          <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"-->
        <!--                  title="Remove">-->
        <!--            <i class="fa fa-times"></i></button>-->
        <!--        </div>-->
        <!-- /. tools -->
        <!--      </div>-->
        <!--      <div class="box-body">-->
        <!--        <form action="#" method="post">-->
        <!--          <div class="form-group">-->
        <!--            <input type="email" class="form-control" name="emailto" placeholder="ایمیل">-->
        <!--          </div>-->
        <!--          <div class="form-group">-->
        <!--            <input type="text" class="form-control" name="subject" placeholder="موضوع">-->
        <!--          </div>-->
        <!--          <div>-->
        <!--            <textarea class="textarea" placeholder="متن ایمیل"-->
        <!--                      style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>-->
        <!--          </div>-->
        <!--        </form>-->
        <!--      </div>-->
        <!--      <div class="box-footer clearfix">-->
        <!--        <button type="button" class="pull-left btn btn-default" id="sendEmail">ارسال-->
        <!--          <i class="fa fa-arrow-circle-left"></i></button>-->
        <!--      </div>-->
        <!--    </div>-->

        <!--  </section>-->
        <!-- /.right col -->
        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <!--  <section class="col-lg-5 connectedSortable">-->

        <!-- Map box -->
        <!--    <div class="box box-solid bg-light-blue-gradient">-->
        <!--      <div class="box-header">-->
        <!-- tools box -->
        <!--        <div class="pull-left box-tools">-->
        <!--          <button type="button" class="btn btn-primary btn-sm daterange pull-left" data-toggle="tooltip"-->
        <!--                  title="Date range">-->
        <!--            <i class="fa fa-calendar"></i></button>-->
        <!--          <button type="button" class="btn btn-primary btn-sm pull-left" data-widget="collapse"-->
        <!--                  data-toggle="tooltip" title="Collapse" style="margin-left: 5px;">-->
        <!--            <i class="fa fa-minus"></i></button>-->
        <!--        </div>-->
        <!-- /. tools -->

        <!--        <i class="fa fa-map-marker"></i>-->

        <!--        <h3 class="box-title">-->
        <!--          بازدید ها-->
        <!--        </h3>-->
        <!--      </div>-->
        <!--      <div class="box-body">-->
        <!--        <div id="world-map" style="height: 250px; width: 100%;"></div>-->
        <!--      </div>-->
        <!-- /.box-body-->
        <!--      <div class="box-footer no-border">-->
        <!--        <div class="row">-->
        <!--          <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">-->
        <!--            <div id="sparkline-1"></div>-->
        <!--            <div class="knob-label">بازدید ها</div>-->
        <!--          </div>-->
        <!-- ./col -->
        <!--          <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">-->
        <!--            <div id="sparkline-2"></div>-->
        <!--            <div class="knob-label">آنلاین</div>-->
        <!--          </div>-->
        <!-- ./col -->
        <!--          <div class="col-xs-4 text-center">-->
        <!--            <div id="sparkline-3"></div>-->
        <!--            <div class="knob-label">فعال</div>-->
        <!--          </div>-->
        <!-- ./col -->
        <!--        </div>-->
        <!-- /.row -->
        <!--      </div>-->
        <!--    </div>-->
        <!-- /.box -->

        <!-- solid sales graph -->
        <!--    <div class="box box-solid bg-teal-gradient">-->
        <!--      <div class="box-header">-->
        <!--        <i class="fa fa-th"></i>-->

        <!--        <h3 class="box-title">نمودار فروش</h3>-->

        <!--        <div class="box-tools pull-left">-->
        <!--          <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>-->
        <!--          </button>-->
        <!--          <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>-->
        <!--          </button>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="box-body border-radius-none">-->
        <!--        <div class="chart" id="line-chart" style="height: 250px;"></div>-->
        <!--      </div>-->
        <!-- /.box-body -->
        <!--      <div class="box-footer no-border">-->
        <!--        <div class="row">-->
        <!--          <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">-->
        <!--            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"-->
        <!--                   data-fgColor="#39CCCC">-->

        <!--            <div class="knob-label">سفارش ایمیلی</div>-->
        <!--          </div>-->
        <!-- ./col -->
        <!--          <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">-->
        <!--            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"-->
        <!--                   data-fgColor="#39CCCC">-->

        <!--            <div class="knob-label">سفارش آنلاین</div>-->
        <!--          </div>-->
        <!-- ./col -->
        <!--          <div class="col-xs-4 text-center">-->
        <!--            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"-->
        <!--                   data-fgColor="#39CCCC">-->

        <!--            <div class="knob-label">سفارش فیزیکی</div>-->
        <!--          </div>-->
        <!-- ./col -->
        <!--        </div>-->
        <!-- /.row -->
        <!--      </div>-->
        <!-- /.box-footer -->
        <!--    </div>-->
        <!-- /.box -->

        <!-- Calendar -->
        <!--    <div class="box box-solid bg-green-gradient">-->
        <!--      <div class="box-header">-->
        <!--        <i class="fa fa-calendar"></i>-->

        <!--        <h3 class="box-title">تقویم</h3>-->
        <!-- tools box -->
        <!--        <div class="pull-left box-tools">-->
        <!-- button with a dropdown -->
        <!--          <div class="btn-group">-->
        <!--            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">-->
        <!--              <i class="fa fa-bars"></i></button>-->
        <!--            <ul class="dropdown-menu pull-left" role="menu">-->
        <!--              <li><a href="#">رویداد تازه</a></li>-->
        <!--              <li><a href="#">حذف رویدادها</a></li>-->
        <!--              <li class="divider"></li>-->
        <!--              <li><a href="#">نمایش تقویم</a></li>-->
        <!--            </ul>-->
        <!--          </div>-->
        <!--          <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>-->
        <!--          </button>-->
        <!--          <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>-->
        <!--          </button>-->
        <!--        </div>-->
        <!-- /. tools -->
        <!--      </div>-->
        <!-- /.box-header -->
        <!--      <div class="box-body no-padding">-->
        <!--The calendar -->
        <!--        <div id="calendar" style="width: 100%"></div>-->
        <!--      </div>-->
        <!-- /.box-body -->
        <!--      <div class="box-footer text-black">-->
        <!--        <div class="row">-->
        <!--          <div class="col-sm-6">-->
        <!-- Progress bars -->
        <!--            <div class="clearfix">-->
        <!--              <span class="pull-right">نمایشگاه</span>-->
        <!--              <small class="pull-left">90%</small>-->
        <!--            </div>-->
        <!--            <div class="progress xs">-->
        <!--              <div class="progress-bar progress-bar-green" style="width: 90%;"></div>-->
        <!--            </div>-->

        <!--            <div class="clearfix">-->
        <!--              <span class="pull-right">کمپین ۳۰ درصد</span>-->
        <!--              <small class="pull-left">70%</small>-->
        <!--            </div>-->
        <!--            <div class="progress xs">-->
        <!--              <div class="progress-bar progress-bar-green" style="width: 70%;"></div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!-- /.col -->
        <!--          <div class="col-sm-6">-->
        <!--            <div class="clearfix">-->
        <!--              <span class="pull-right">کمپین ایمیل</span>-->
        <!--              <small class="pull-left">60%</small>-->
        <!--            </div>-->
        <!--            <div class="progress xs">-->
        <!--              <div class="progress-bar progress-bar-green" style="width: 60%;"></div>-->
        <!--            </div>-->

        <!--            <div class="clearfix">-->
        <!--              <span class="pull-right">کمپین تجارت الکترونیک</span>-->
        <!--              <small class="pull-left">40%</small>-->
        <!--            </div>-->
        <!--            <div class="progress xs">-->
        <!--              <div class="progress-bar progress-bar-green" style="width: 40%;"></div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!-- /.col -->
        <!--        </div>-->
        <!-- /.row -->
        <!--      </div>-->
        <!--    </div>-->
        <!-- /.box -->

        <!--  </section>-->
        <!-- left col -->
        <!--</div>-->
        <!-- /.row (main row) -->
      </section>

      <section class="content" id="pnl_initial_content" style="display: none; padding: 40px 30px">
        <div class="main-box" style="
              display: block;
              min-height: 80px;
              padding: 0;
              box-shadow: 0 5px 15px 0 rgb(0 0 0 / 39%);
              border-radius: 10px;
            ">
          <div style="
                height: 40px;
                background-color: green;
                border-top-right-radius: 10px;
                border-top-left-radius: 10px;
                color: white;
                text-align: right;
                padding: 10px;
                font-weight: bold;
              ">
            تعریف موجودی اولیه
          </div>
          <ul class="nav nav-pills nav-fill" role="tablist" style="padding: 0; display: flex">
            <li id="nav-item1" class="nav-item">
              <a class="nav-link active" id="goods-tab" data-toggle="tab" href="#pnl_melted" role="tab" aria-controls="pnl_melted" aria-selected="true">آبشده</a>
            </li>
            <li id="nav-item2" class="nav-item">
              <a class="nav-link" id="financial-tab" data-toggle="tab" href="#pnl_cash" role="tab" aria-controls="pnl_cash" aria-selected="false">وجه نقد</a>
            </li>
            <li id="nav-item3" class="nav-item">
              <a class="nav-link nav-left" id="financial-tab" data-toggle="tab" href="#pnl_bank" role="tab" aria-controls="pnl_bank" aria-selected="false">حساب های بانکی</a>
            </li>
            <li id="nav-item4" class="nav-item">
              <a class="nav-link nav-left" id="financial-tab" data-toggle="tab" href="#pnl_coin" role="tab" aria-controls="pnl_coin" aria-selected="false">سکه</a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade show active" id="pnl_melted2" role="tabpanel" aria-labelledby="goods-tab">
              hiiiiiiiiiiiiiiiiiiiiiiii
            </div>
            <div class="tab-pane fade" id="pnl_cash2" role="tabpanel" aria-labelledby="financial-tab">
              2
            </div>
            <div class="tab-pane fade" id="pnl_bank2" role="tabpanel" aria-labelledby="financial-tab">
              3
            </div>
            <div class="tab-pane fade" id="pnl_coin2" role="tabpanel" aria-labelledby="financial-tab">
              4
            </div>
          </div>
        </div>
      </section>

      <section class="content" id="pnl_transaction" style="display: none; padding: 40px 30px">
        <div id="doc_main_box" class="main-box" style="
              display: block;
              min-height: 80px;
              padding: 0;
              box-shadow: 0 5px 15px 0 rgb(0 0 0 / 39%);
              border-radius: 10px;
            ">
          <div style="
                height: 40px;
                background-color: green;
                border-top-right-radius: 10px;
                border-top-left-radius: 10px;
                color: white;
                text-align: right;
                padding: 10px;
                font-weight: bold;
              ">
            ثبت سند
          </div>
          <div style="padding: 20px; line-height: 35px">
            <form action="panel.php" method="GET">
              <fieldset style="padding: 0 10px">
                <legend>مشخصات حساب</legend>
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-3 col-sm-4">انتخاب حساب:</div>
                    <div class="col-lg-8 col-md-9 col-sm-8">
                      <div class="dropdown" style="width: 220px; float: right">
                        <input name="user" id="txt_user_search" autocomplete="off" type="text" placeholder="نام کاربر را وارد نمایید" oninput="filterDropdown()" onclick="showDropdown()" style="height: 26px" />
                        <input type="hidden" id="hf_user_id" />
                        <div class="dropdown-list" id="cbo_users"></div>
                      </div>
                      <img src="assets/delete.png" style="
                            width: 18px;
                            cursor: pointer;
                            margin-right: 10px;
                          " onclick="delete_user()" />
                    </div>

                    <div class="col-lg-4 col-md-3 col-sm-4">گروه:</div>
                    <div class="col-lg-8 col-md-9 col-sm-8">
                      <label id="lbl_group"></label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      ته حساب مالی:
                      <label id="lbl_remaind_cash" style="color: green"></label>
                      تومان
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      ته حساب طلا:
                      <label id="lbl_remaind_melted" style="color: green"></label>
                      گرم

                      <img id="btn_more" src="assets/more.png" style="
                            width: 40px;
                            height: 25px;
                            cursor: pointer;
                            float: left;
                          " onclick="show_more_remaind()" />
                      <img id="btn_less" src="assets/less.png" style="
                            width: 40px;
                            height: 25px;
                            cursor: pointer;
                            float: left;
                            display: none;
                          " onclick="show_less_remaind()" />
                    </div>

                    <div id="pnl_more_remaind" style="display: none">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        تمام سکه بانکی:
                        <label id="lbl_remaind_bankcoin1" style="color: green"></label>
                        عدد
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        تمام سکه غیر بانکی:
                        <label id="lbl_remaind_nonbankcoin1" style="color: green"></label>
                        عدد
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        نیم سکه بانکی:
                        <label id="lbl_remaind_bankcoin2" style="color: green"></label>
                        عدد
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        نیم سکه غیر بانکی:
                        <label id="lbl_remaind_nonbankcoin2" style="color: green"></label>
                        عدد
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        ربع سکه بانکی:
                        <label id="lbl_remaind_bankcoin3" style="color: green"></label>
                        عدد
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        ربع سکه غیر بانکی:
                        <label id="lbl_remaind_nonbankcoin3" style="color: green"></label>
                        عدد
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset id="pnl_document" style="padding: 0 10px; border: 4px solid #10b710">
                <legend>سند</legend>
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <span>شماره سند:</span>
                    <input type="text" id="txt_doc_num" style="
                          height: 30px;
                          margin-right: 10px;
                          text-align: center;
                        " disabled />
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <span>نوع سند:</span>
                    <input type="radio" id="rb_buy" name="fav_language_type" value="buy" checked="true" onchange="handleChangeDocumentType()" />
                    <label for="rb_buy">دریافتی</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" id="rb_sell" name="fav_language_type" value="sell" onchange="handleChangeDocumentType()" />
                    <label for="rb_sell">پرداختی</label>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <span>تاریخ سند:</span>
                    <input id="txt_doc_date" type="text" style="
                          height: 30px;
                          margin-right: 10px;
                          text-align: center;
                          direction: ltr;
                        " />
                  </div>
                </div>

                <ul class="nav nav-pills nav-fill" id="myTab" role="tablist" style="padding: 0; margin-top: 20px">
                  <li class="nav-item" style="border-top-right-radius: 10px">
                    <a class="document nav-link nav-right active" id="melted-tab" doc_type="melted" data-toggle="pnl_document_melted" href="#" role="tab" aria-controls="pnl_melted">خرید طلا</a>
                  </li>
                  <li class="nav-item">
                    <a class="document nav-link" id="melted-tab2" doc_type="melted2" data-toggle="pnl_document_melted2" href="#" role="tab" aria-controls="pnl_melted2">طلای خام</a>
                  </li>
                  <li class="nav-item">
                    <a class="document nav-link" id="cash-tab" doc_type="cash" data-toggle="pnl_document_cash" href="#" role="tab" aria-controls="pnl_cash">وجه نقد</a>
                  </li>
                  <li class="nav-item">
                    <a class="document nav-link" id="coin-tab" doc_type="coin" data-toggle="pnl_document_coin" href="#" role="tab" aria-controls="pnl_coin">سکه</a>
                  </li>
                  <li class="nav-item">
                    <a class="document nav-link" id="bank-tab" doc_type="bank" data-toggle="pnl_document_bank" href="#" role="tab" aria-controls="pnl_bank">بانک</a>
                  </li>
                  <li class="nav-item" style="border-top-left-radius: 10px">
                    <a class="document nav-link nav-left" id="money-tab" doc_type="convert" data-toggle="pnl_document_money" href="#" role="tab" aria-controls="pnl_money">پولی کردن</a>
                  </li>
                </ul>

                <div class="row tab-content1">
                  <div class="col-lg-12 col-md-12 col-sm-12 tab-content">
                    <div class="tab-pane show active" id="pnl_document_melted" role="tabpanel" aria-labelledby="melted-tab">
                      <div id="pnl_action_melted" class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                          <div>عملیات:</div>
                          <div id="pnl_buy_melted">
                            <input type="radio" id="rb_buy_melted" name="fav_language_melted" value="buy_melted" mark="buy" checked="true" onchange="handleMeltedActionChange()" />
                            <label for="rb_buy_melted">خرید آبشده از کاربر</label>
                          </div>
                          <div id="pnl_buy_other">
                            <input type="radio" id="rb_buy_other" name="fav_language_melted" value="buy_other" mark="buy_other" onchange="handleMeltedActionChange()" />
                            <label for="rb_buy_other">خرید متفرقه از کاربر</label>
                          </div>
                          <div id="pnl_sell_melted" style="display: none">
                            <input type="radio" id="rb_sell_melted" name="fav_language_melted" value="sell_melted" mark="sell" onchange="handleMeltedActionChange()" />
                            <label for="rb_sell_melted">فروش آبشده به کاربر</label>
                          </div>
                          <div id="pnl_sell_other" style="display: none">
                            <input type="radio" id="rb_sell_other" name="fav_language_melted" value="sell_other" mark="sell_other" onchange="handleMeltedActionChange()" />
                            <label for="rb_sell_other">فروش متفرقه به کاربر</label>
                          </div>
                        </div>
                        <!--<div id="pnl_melted_content" class="col-lg-9 col-md-12 col-sm-12">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-lg-4 col-md-6 col-sm-12">-->
                        <!--            <div style="float: right; width: 90px">وزن:</div>-->
                        <!--            <input name="amount" type="number" id="txt_melted_weight"  min="1" max="1000" style="width: 100px; height: 26px;">-->
                        <!--        </div>-->

                        <!--        <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0;">-->
                        <!--            <div style="float: right; width: 90px; text-align: left; padding-left: 10px;">عیار:</div>-->
                        <!--            <input name="amount" type="number" id="txt_melted_carat"  min="1" max="1000" style="width: 70px; height: 26px;" value="750">-->
                        <!--        </div>-->

                        <!--        <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0;">-->
                        <!--            <div style="float: right; width: 90px">قیمت فلز هر:</div>-->
                        <!--            <select id="cbo_melted_type" style="border-radius: 7px;" disabled>-->
                        <!--                <option value="option1">مثقال</option>-->
                        <!--                <option value="option2">گرم</option>-->
                        <!--            </select>-->
                        <!--            <input name="amount" type="number" id="txt_melted_fee"  min="1" max="1000" style="width: 100px; height: 26px;">-->
                        <!--        </div>-->
                        <!--    </div>-->

                        <!--    <div class="row">    -->
                        <!--        <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0;">-->
                        <!--            <div style="float: right; width: 90px; text-align: left; padding-left: 10px;">توضیحات:</div>-->
                        <!--            <input name="amount" id="txt_melted_dsc"  min="1" max="1000" style="width: 160px; height: 26px;">-->
                        <!--        </div>-->
                        <!--    </div>-->

                        <!--    <div class="row">-->
                        <!--        <div class="col-lg-4 col-md-6 col-sm-12">-->
                        <!--            <div style="float: right; width: 90px">مبلغ کل:</div>-->

                        <!--            <input name="amount" type="number" id="txt_melted_all_fee"  min="1" max="1000" style="width: 100px; height: 26px;" disabled>-->
                        <!--        </div>-->

                        <!--        <div class="col-lg-8 col-md-6 col-sm-12">-->
                        <!--            <input name="amount" type="number" id="txt_melted_750"  min="1" max="1000" style="width: 70px; height: 26px;" disabled>-->
                        <!--            <span style="font-size: 11px">(تبدیل به 750)</span>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div id="pnl_melted_other_content" class="col-lg-9 col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                وزن:
                              </div>
                              <input name="amount" id="txt_melted_weight" min="1" max="1000" style="width: 100px; height: 26px" oninput="update_melted_750();" autocomplete="off" />
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                عیار:
                              </div>
                              <input name="amount" type="number" id="txt_melted_carat" min="1" max="1000" style="width: 70px; height: 26px" value="750" oninput="update_melted_750();" disabled />
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0">
                              <div style="float: right; width: 90px">
                                قیمت فلز هر:
                              </div>
                              <select id="cbo_melted_type" style="border-radius: 7px" disabled>
                                <option value="option1">مثقال</option>
                                <option value="option2">گرم</option>
                              </select>
                              <input name="amount" id="txt_melted_fee" min="1" max="1000" style="width: 100px; height: 26px" oninput="update_melted_750();" data-privateInput="privateInput" autocomplete="off" />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div style="float: right; width: 90px">
                                توضیحات:
                              </div>
                              <input name="amount" id="txt_melted_dsc" min="1" max="1000" style="width: 260px; height: 26px" autocomplete="off" />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                مبلغ کل:
                              </div>

                              <input name="amount" id="txt_melted_all_fee" min="1" max="1000" style="width: 100px; height: 26px" oninput="addSeparator(this);" disabled />
                            </div>

                            <div id="pnl_melted_750" class="col-lg-8 col-md-6 col-sm-12" style="display: none">
                              <input name="amount" type="number" id="txt_melted_750" min="1" max="1000" style="width: 70px; height: 26px" disabled />
                              <span style="font-size: 11px">(تبدیل به 750)</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="pnl_document_melted2" role="tabpanel" aria-labelledby="melted-tab2">
                      <div id="pnl_action_melted2" class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                          <div>عملیات:</div>
                          <div id="pnl_put_melted">
                            <input type="radio" id="rb_put_melted" name="fav_language_melted2" value="put" mark="deposit" onchange="handleMelted2ActionChange()" checked="true" />
                            <label for="rb_put_melted">ورود آبشده</label>
                          </div>
                          <div id="pnl_put_other">
                            <input type="radio" id="rb_put_other" name="fav_language_melted2" value="put_other" mark="deposit_other" onchange="handleMelted2ActionChange()" />
                            <label for="rb_put_other">ورود متفرقه</label>
                          </div>
                          <div id="pnl_put_cond_melted">
                            <input type="radio" id="rb_put_cond_melted" name="fav_language_melted2" value="put_cond" mark="deposit_conditional" onchange="handleMelted2ActionChange()" />
                            <label for="rb_put_cond_melted">ورود آبشده شرطی</label>
                          </div>
                          <div id="pnl_take_melted" style="display: none">
                            <input type="radio" id="rb_take_melted" name="fav_language_melted2" value="take" mark="withdrawal" onchange="handleMelted2ActionChange()" />
                            <label for="rb_take_melted">خروج آبشده</label>
                          </div>
                          <div id="pnl_take_other" style="display: none">
                            <input type="radio" id="rb_take_other" name="fav_language_melted2" value="take_other" mark="withdrawal_other" onchange="handleMelted2ActionChange()" />
                            <label for="rb_take_other">خروج متفرقه </label>
                          </div>
                          <div id="pnl_take_cond_melted" style="display: none">
                            <input type="radio" id="rb_take_cond_melted" name="fav_language_melted2" value="take_cond" mark="withdrawal_conditional" onchange="handleMelted2ActionChange()" />
                            <label for="rb_take_cond_melted">خروج آبشده شرطی</label>
                          </div>
                        </div>

                        <div id="pnl_melted2_content" class="col-lg-9 col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                وزن:
                              </div>
                              <input name="amount" type="number" id="txt_melted2_weight" min="1" max="1000" style="width: 100px; height: 26px" oninput="update_melted2_750();" autocomplete="off" />
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                عیار:
                              </div>
                              <input name="amount" type="number" id="txt_melted2_carat" min="1" max="1000" style="width: 70px; height: 26px" value="750" oninput="update_melted2_750();" />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                نام آزمایشگاه:
                              </div>
                              <div class="dropdown dropdown3" style="float: right">
                                <input name="user" id="txt_melted2_lab" autocomplete="off" type="text" placeholder="" oninput="filterLabDropdown()" onclick="showLabDropdown()" style="height: 26px; width: 100px" />
                                <input type="hidden" id="hf_lab_id" />
                                <div class="dropdown-list" id="cbo_melted2_lab"></div>
                              </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                شماره انگ:
                              </div>
                              <input name="amount" id="txt_melted2_stigma" min="1" max="1000" style="width: 70px; height: 26px" autocomplete="off" />
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                توضیحات:
                              </div>
                              <input name="amount" id="txt_melted2_dsc" min="1" max="1000" style="width: 160px; height: 26px" autocomplete="off" />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <input name="amount" type="number" id="txt_melted2_750" min="1" max="1000" style="width: 70px; height: 26px" disabled />
                              <span style="font-size: 11px">(تبدیل به 750)</span>
                            </div>
                          </div>
                        </div>

                        <div id="pnl_melted2_other_content" class="col-lg-9 col-md-12 col-sm-12" style="display: none">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                وزن:
                              </div>
                              <input name="amount" type="number" id="txt_melted2_weight2" min="1" max="1000" style="width: 100px; height: 26px" oninput="update_melted22_750();" autocomplete="off" />
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                عیار:
                              </div>
                              <input name="amount" type="number" id="txt_melted2_carat2" min="1" max="1000" style="width: 70px; height: 26px" value="750" oninput="update_melted22_750();" autocomplete="off" />
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                توضیحات:
                              </div>
                              <input name="amount" id="txt_melted2_dsc2" min="1" max="1000" style="width: 160px; height: 26px" autocomplete="off" />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <input name="amount" type="number" id="txt_melted2_750_2" min="1" max="1000" style="width: 70px; height: 26px" disabled />
                              <span style="font-size: 11px">(تبدیل به 750)</span>
                            </div>
                          </div>
                        </div>

                        <div id="pnl_melted2_cond_content" class="col-lg-9 col-md-12 col-sm-12" style="display: none">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                وزن:
                              </div>
                              <input name="amount" type="number" id="txt_melted2_cond_weight" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" />
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                نام آزمایشگاه:
                              </div>
                              <select id="cbo_melted2_cond_lab" style="width: 100px; border-radius: 7px"></select>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                شماره انگ:
                              </div>
                              <input name="amount" id="txt_melted2_cond_stigma" min="1" max="1000" style="width: 70px; height: 26px" autocomplete="off" />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                توضیحات:
                              </div>
                              <input name="amount" id="txt_melted2_cond_dsc" min="1" max="1000" style="width: 160px; height: 26px" autocomplete="off" />
                            </div>
                          </div>

                          <!--<div class="row">-->
                          <!--    <div class="col-lg-12 col-md-12 col-sm-12">-->
                          <!--        <input name="amount" type="number" id="txt_melted2_cond_750"  min="1" max="1000" style="width: 70px; height: 26px;" disabled>-->
                          <!--        <span style="font-size: 11px">(تبدیل به 750)</span>-->
                          <!--    </div>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="pnl_document_cash" role="tabpanel" aria-labelledby="cash-tab">
                      <div id="pnl_action_cash" class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                          <div>عملیات:</div>
                          <div id="pnl_put_cash">
                            <input type="radio" id="rb_put_cash" name="fav_language_cash" value="buy_melted" mark="deposit" onchange="handleMeltedActionChange()" checked="true" />
                            <label for="rb_put_cash">ورود وجه نقد</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_take_cash" style="display: none">
                            <input type="radio" id="rb_take_cash" name="fav_language_cash" value="sell_melted" mark="withdrawal" onchange="handleMeltedActionChange()" />
                            <label for="rb_take_cash">خروج وجه نقد</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                        </div>
                        <div id="pnl_cash_content" class="col-lg-9 col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div style="float: right; width: 90px">
                                مبلغ:
                              </div>
                              <input name="amount" id="txt_cash_fee" data-privateInput="privateInput" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" />
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                              <div style="float: right; width: 90px">
                                تخفیف:
                              </div>
                              <input name="amount" type="number" id="txt_cash_discount" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" disabled />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div style="float: right; width: 90px">
                                توضیحات:
                              </div>
                              <input name="amount" id="txt_cash_dsc" style="width: 300px; height: 26px" autocomplete="off" />
                            </div>
                          </div>

                          <!--<div class="row">    -->
                          <!--    <div class="col-lg-4 col-md-6 col-sm-12">-->
                          <!--        <div style="float: right; width: 90px">نام آزمایشگاه:</div>-->
                          <!--        <input name="amount" id="txt_price"  min="1" max="1000" style="width: 100px; height: 26px;">-->
                          <!--    </div>-->

                          <!--    <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0;">-->
                          <!--        <div style="float: right; width: 90px; text-align: left; padding-left: 10px;">شماره انگ:</div>-->
                          <!--        <input name="amount" id="txt_price"  min="1" max="1000" style="width: 70px; height: 26px;">-->
                          <!--    </div>-->

                          <!--    <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0;">-->
                          <!--        <div style="float: right; width: 90px; text-align: left; padding-left: 10px;">توضیحات:</div>-->
                          <!--        <input name="amount" id="txt_price"  min="1" max="1000" style="width: 160px; height: 26px;">-->
                          <!--    </div>-->
                          <!--</div>-->

                          <!--<div class="row">-->
                          <!--    <div class="col-lg-4 col-md-6 col-sm-12">-->
                          <!--        <div style="float: right; width: 90px">مبلغ کل:</div>-->

                          <!--        <input name="amount" type="number" id="txt_price"  min="1" max="1000" style="width: 100px; height: 26px;" disabled>-->
                          <!--    </div>-->

                          <!--    <div class="col-lg-8 col-md-6 col-sm-12">-->
                          <!--        <input name="amount" type="number" id="txt_price"  min="1" max="1000" style="width: 70px; height: 26px;" disabled>-->
                          <!--        <span style="font-size: 11px">(تبدیل به 750)</span>-->
                          <!--    </div>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="pnl_document_coin" role="tabpanel" aria-labelledby="coin-tab">
                      <div id="pnl_action_coin" class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                          <div>عملیات:</div>
                          <div id="pnl_buy_coin">
                            <input type="radio" id="rb_buy_coin" name="fav_language_coin" value="buy" mark="buy" onchange="handleCoinActionChange()" checked="true" />
                            <label for="rb_buy_coin">خرید سکه از کاربر</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_sell_coin" style="display: none">
                            <input type="radio" id="rb_sell_coin" name="fav_language_coin" value="sell" mark="sell" onchange="handleCoinActionChange()" />
                            <label for="rb_sell_coin">فروش سکه به کاربر</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_put_coin">
                            <input type="radio" id="rb_put_coin" name="fav_language_coin" value="put" mark="deposit" onchange="handleCoinActionChange()" />
                            <label for="rb_put_coin">ورود سکه به صندوق</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_take_coin" style="display: none">
                            <input type="radio" id="rb_take_coin" name="fav_language_coin" value="take" mark="withdrawal" onchange="handleCoinActionChange()" />
                            <label for="rb_take_coin">خروج سکه از صندوق</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                        </div>

                        <div id="pnl_coin_content" class="col-lg-9 col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 60px">
                                نوع سکه:
                              </div>
                              <select id="cbo_coin_type" style="border-radius: 7px" onchange="onCoinTypeChanged()">
                                <option value="">انتخاب</option>
                                <option value="bankcoin1">
                                  تمام سکه بانکی
                                </option>
                                <option value="bankcoin2">
                                  نیم سکه بانکی
                                </option>
                                <option value="bankcoin3">
                                  ربع سکه بانکی
                                </option>
                                <option value="nonbankcoin1">
                                  تمام سکه غیر بانکی
                                </option>
                                <option value="nonbankcoin2">
                                  نیم سکه غیر بانکی
                                </option>
                                <option value="nonbankcoin3">
                                  ربع سکه غیر بانکی
                                </option>
                              </select>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                تعداد:
                              </div>
                              <input name="amount" type="number" id="txt_coin_number" min="1" max="1000" style="width: 70px; height: 26px" autocomplete="off" oninput="update_coin_fee_all();" />
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0">
                              <div style="float: right; width: 90px">
                                مبلغ واحد:
                              </div>
                              <input name="amount" id="txt_coin_fee" data-privateInput="privateInput" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" oninput=" update_coin_fee_all();" />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 60px">
                                مبلغ کل:
                              </div>
                              <input name="amount" id="txt_coin_all_fee" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" disabled />
                            </div>

                            <div class="col-lg-8 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                توضیحات:
                              </div>
                              <input name="amount" id="txt_coin_dsc" min="1" max="1000" style="width: 160px; height: 26px" autocomplete="off" />
                            </div>
                          </div>
                        </div>

                        <div id="pnl_coin_content2" class="col-lg-9 col-md-12 col-sm-12" style="display: none">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 60px">
                                نوع سکه:
                              </div>
                              <select id="cbo_coin_type2" style="border-radius: 7px">
                                <option value="bankcoin1">
                                  تمام سکه بانکی
                                </option>
                                <option value="bankcoin2">
                                  نیم سکه بانکی
                                </option>
                                <option value="bankcoin3">
                                  ربع سکه بانکی
                                </option>
                                <option value="nonbankcoin1">
                                  تمام سکه غیر بانکی
                                </option>
                                <option value="nonbankcoin2">
                                  نیم سکه غیر بانکی
                                </option>
                                <option value="nonbankcoin3">
                                  ربع سکه غیر بانکی
                                </option>
                              </select>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                تعداد:
                              </div>
                              <input name="amount" type="number" id="txt_coin_number2" min="1" max="1000" style="width: 70px; height: 26px" autocomplete="off" />
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 90px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                توضیحات:
                              </div>
                              <input name="amount" id="txt_coin_dsc2" min="1" max="1000" style="width: 160px; height: 26px" autocomplete="off" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="pnl_document_bank" role="tabpanel" aria-labelledby="bank-tab">
                      <div id="pnl_action_bank" class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                          <div>عملیات:</div>
                          <div id="pnl_receive_bank">
                            <input type="radio" id="rb_receive_bank" name="fav_language_bank" value="receive" mark="receive" onchange="handleBankActionChange()" checked="true" />
                            <label for="rb_receive_bank">دریافت وجه به حساب بانکی</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_send_bank">
                            <input type="radio" id="rb_send_bank" name="fav_language_bank" value="send" mark="deposit" onchange="handleBankActionChange()" />
                            <label for="rb_send_bank">واریز وجه از صندوق به حساب بانکی</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_pay_bank" style="display: none">
                            <input type="radio" id="rb_pay_bank" name="fav_language_bank" value="pay" mark="payment" onchange="handleBankActionChange()" />
                            <label for="rb_pay_bank">پرداخت وجه از حساب بانکی</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_take_bank" style="display: none">
                            <input type="radio" id="rb_take_bank" name="fav_language_bank" value="take" mark="withdrawal" onchange="handleBankActionChange()" />
                            <label for="rb_take_bank">برداشت وجه از حساب بانکی به صندوق</label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div>
                            <input type="radio" id="rb_exchange_bank" name="fav_language_bank" value="exchange" mark="withdrawal_and_deposit" onchange="handleBankActionChange()" />
                            <label for="rb_exchange_bank">برداشت وجه از یک حساب و واریز به حساب
                              دیگر</label>
                          </div>
                        </div>

                        <div id="pnl_bank_content" class="col-lg-7 col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div style="float: right; width: 90px">
                                <label id="lbl_bank_account" style="font-weight: unset">حساب بانکی:</label>
                              </div>
                              <select id="cbo_bank_account1" style="border-radius: 7px; width: 150px">
                                <option value="option1">بانک ملی</option>
                                <option value="option2">بانک ملت</option>
                              </select>
                              <a style="
                                    padding: 0 10px;
                                    text-decoration: underline;
                                  " href="#">افزودن</a>
                              <a style="text-decoration: underline" href="#">ویرایش</a>
                            </div>
                          </div>

                          <div class="row" id="pnl_bank_account2" style="display: none">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div style="float: right; width: 90px">
                                به حساب:
                              </div>
                              <select id="cbo_bank_account2" style="border-radius: 7px; width: 150px">
                                <option value="option1">بانک ملی</option>
                                <option value="option2">بانک ملت</option>
                              </select>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div style="float: right; width: 90px">
                                مبلغ:
                              </div>
                              <input name="amount" id="txt_bank_fee" data-privateInput="privateInput" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="pnl_document_money" role="tabpanel" aria-labelledby="money-tab">
                      <div id="pnl_action_money" class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12" style="padding-left: 0">
                          <div>عملیات:</div>
                          <div id="pnl_weight_to_money1">
                            <input type="radio" id="rb_weight_to_money" name="fav_language_money" value="weight" mark="melted_to_cash" onchange="handleMoneyActionChange()" checked="true" />
                            <label for="rb_weight_to_money">تبدیل مانده حساب
                              <span class="distict_text">وزنی</span>
                              این مشتری به
                              <span class="distict_text">پول</span>
                            </label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="pnl_money_to_weight">
                            <input type="radio" id="rb_money_to_weight" name="fav_language_money" value="money" mark="cash_to_melted" onchange="handleMoneyActionChange()" />
                            <label for="rb_money_to_weight">تبدیل مانده حساب
                              <span class="distict_text">مالی</span>
                              این مشتری به
                              <span class="distict_text">وزن</span>
                            </label>
                            &nbsp;&nbsp;&nbsp;
                          </div>
                          <!--<div id="pnl_weight_to_money2">-->
                          <!--    <input type="radio" id="rb_weight_to_money2" name="fav_language_money" value="pay" onchange="handleMeltedActionChange()">-->
                          <!--    <label for="rb_weight_to_money2">تبدیل مانده -->
                          <!--    <span class="distict_text">وزنی</span>-->
                          <!--    این سند به -->
                          <!--    <span class="distict_text">پول</span></label>-->
                          <!--    &nbsp;&nbsp;&nbsp;-->
                          <!--</div>-->
                          <!--<div id="pnl_money_to_weight2">-->
                          <!--    <input type="radio" id="rb_money_to_weight2" name="fav_language_money" value="take" onchange="handleMeltedActionChange()">-->
                          <!--    <label for="rb_money_to_weight2">تبدیل مانده -->
                          <!--    <span class="distict_text">مالی</span>-->
                          <!--    این سند به -->
                          <!--    <span class="distict_text">وزن</span>-->
                          <!--    </label>-->
                          <!--    &nbsp;&nbsp;&nbsp;-->
                          <!--</div>-->
                          <!--<div>-->
                          <!--    <input type="radio" id="rb_money" name="fav_language_money" value="exchange" onchange="handleMeltedActionChange()">-->
                          <!--    <label for="rb_money">تبدیل مانده حساب -->
                          <!--    <span class="distict_text">وزنی</span>-->
                          <!--    + مانده -->
                          <!--    <span class="distict_text">وزنی</span>-->
                          <!--    این سند به -->
                          <!--    <span class="distict_text">پول</span>-->
                          <!--    </label>-->
                          <!--</div>-->
                          <!--<div>-->
                          <!--    <input type="radio" id="rb_weight" name="fav_language_money" value="exchange" onchange="handleMeltedActionChange()">-->
                          <!--    <label for="rb_weight">تبدیل مانده حساب -->
                          <!--    <span class="distict_text">مالی</span>-->
                          <!--    + مانده -->
                          <!--    <span class="distict_text">مالی</span>-->
                          <!--    این سند به -->
                          <!--    <span class="distict_text">وزن</span>-->
                          <!--    </label>-->
                          <!--</div>-->
                        </div>

                        <div id="pnl_money_content" class="col-lg-8 col-md-12 col-sm-12">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12" id="pnl_money_weight">
                              <div style="float: right; width: 70px">
                                وزن:
                              </div>
                              <input name="amount" type="number" id="txt_money_weight" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" />
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12" id="pnl_money_fee" style="display: none">
                              <div style="float: right; width: 70px">
                                مبلغ:
                              </div>
                              <input name="amount" id="txt_money_fee2" data-privateInput="privateInput" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" />
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12" style="padding: 0">
                              <div style="
                                    float: right;
                                    width: 60px;
                                    text-align: left;
                                    padding-left: 10px;
                                  ">
                                عیار:
                              </div>
                              <input name="amount" type="number" id="txt_money_carat" min="1" max="1000" style="width: 70px; height: 26px" value="750" disabled />
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12" style="padding: 0">
                              <div style="float: right; width: 90px">
                                قیمت فلز هر:
                              </div>
                              <select id="cbo_money_type" style="border-radius: 7px">
                                <option value="option1">مثقال</option>
                                <option value="option2">گرم</option>
                              </select>
                              <input name="amount" id="txt_money_fee" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" oninput="addSeparator(this);" />
                            </div>
                          </div>
                          <br />
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                              <div style="float: right; width: 70px">
                                مبلغ کل:
                              </div>

                              <input name="amount" id="txt_money_all_fee" min="1" max="1000" style="width: 100px; height: 26px" autocomplete="off" oninput="addSeparator(this);" disabled />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row" id="pnl_transfer" style="display: none">
                    <div class="col-lg-3 col-md-12 col-sm-12" style="padding-right: 30px">
                      <input type="checkbox" id="chk_transfer" onchange="transfer_checked_changed()" />
                      <label for="chk_transfer">حواله به</label>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12">
                      <div id="pnl_receiver" class="row" style="display: none">
                        <div class="dropdown dropdown2" style="width: 250px; float: right">
                          <input name="receiver" type="text" autocomplete="off" id="txt_receiver_search" placeholder="نام کاربر را وارد نمایید" oninput="filterDropdownReceiver()" onclick="showDropdownReceiver()" style="height: 26px" />
                          <div class="dropdown-list" id="cbo_receiver"></div>
                        </div>
                        <img src="assets/delete.png" style="
                              width: 18px;
                              cursor: pointer;
                              margin-right: 10px;
                            " onclick="delete_receiver()" />
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center">
                    <input type="button" id="btn_save" style="
                          width: 120px;
                          line-height: 30px;
                          padding: 0 20px;
                          background: #019201;
                          color: white;
                          font-weight: bold;
                          border: 1px solid gray;
                          margin-left: 10px;
                          text-align: center;
                        " value="ثبت" />
                    <input type="button" id="btn_save_return" style="
                          width: 120px;
                          line-height: 30px;
                          padding: 0 20px;
                          background: #019201;
                          color: white;
                          font-weight: bold;
                          border: 1px solid gray;
                          text-align: center;
                          display: none;
                        " value="لغو" />
                  </div>
                </div>
              </fieldset>

              <fieldset style="padding: 0 10px">
                <legend>جستجو</legend>
                <div class="row" style="padding: 0 10px 15px 10px">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    نوع تراکنش:
                    <select id="cbo_transaction_type" style="border-radius: 7px; width: 170px" onchange="onTransactionTypechanged()">
                      <option value="">همه تراکنش ها</option>
                      <option value="melted">آبشده</option>
                      <option value="cash">وجه نقد</option>
                      <option value="bankcoin1">تمام سکه بانکی</option>
                      <option value="bankcoin2">نیم سکه بانکی</option>
                      <option value="bankcoin3">ربع سکه بانکی</option>
                      <option value="nonbankcoin1">تمام سکه غیر بانکی</option>
                      <option value="nonbankcoin2">نیم سکه غیر بانکی</option>
                      <option value="nonbankcoin3">ربع سکه غیر بانکی</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <span style="padding: 0 10px">تاریخ از</span>
                    <input type="text" id="txt_date_from" style="width: 100px; direction: ltr" />
                    <span style="padding: 0 10px">تا</span>
                    <input type="text" id="txt_date_to" style="width: 100px; direction: ltr" />
                  </div>
                </div>
              </fieldset>

              <div class="main-box" style="
                    display: block;
                    min-height: 80px;
                    padding: 0;
                    box-shadow: 0 5px 15px 0 rgb(0 0 0 / 39%);
                    border-radius: 10px;
                  ">
                <div style="
                      height: 40px;
                      background-color: #eaba1b;
                      border-top-right-radius: 10px;
                      border-top-left-radius: 10px;
                      text-align: right;
                      padding: 5px 15px;
                      font-weight: bold;
                      margin-top: 20px;
                    ">
                  لیست اسناد
                </div>
                <div id="pnl_transactions" class="tab-content"></div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- /.content -->

      <section class="content" id="pnl_user_mng" style="display: none; padding: 40px 30px; background: gray"></section>

      <section class="content" id="pnl_report" style="display: none; padding: 40px 30px">
        <div class="main-box row" style="
              display: block;
              min-height: 80px;
              padding: 0;
              box-shadow: 0 5px 15px 0 rgb(0 0 0 / 39%);
              border-radius: 10px;
              padding-bottom: 30px;
            ">
          <div class="col-lg-6 col-md-12 col-sm-12" id="pnl_creditors">
            <!--<div style="height: 40px; background-color: #e50303; color: white; padding: 10px; border-top-right-radius: 10px; border-top-left-radius: 10px; text-align: right; font-weight: bold; margin-top: 20px;">-->
            <!--    لیست طلبکاران -->
            <!--</div>-->
            <!--<div class="tab-content">-->

            <!--</div>-->
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12" id="pnl_debtors">
            <!--<div style="height: 40px; background-color: #019201; color: white; padding: 10px; border-top-right-radius: 10px; border-top-left-radius: 10px; text-align: right; font-weight: bold; margin-top: 20px;">-->
            <!--    لیست بدهکاران -->
            <!--</div>-->
            <!--<div id="pnl_debtors" class="tab-content">-->

            <!--</div>-->
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <!--<footer class="main-footer text-left"> -->
    <!--  <strong>Copyleft &copy; 2014-2017 <a href="https://adminlte.io">Almsaeed Studio</a> & <a href="https://netparadis.com">NetParadis</a></strong>-->
    <!--</footer>-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab"></div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">وضعیت</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">تنظیمات عمومی</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                گزارش کنترلر پنل
                <input type="checkbox" class="pull-left" checked />
              </label>

              <p>ثبت تمامی فعالیت های مدیران</p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                ایمیل مارکتینگ
                <input type="checkbox" class="pull-left" checked />
              </label>

              <p>اجازه به کاربران برای ارسال ایمیل</p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                در دست تعمیرات
                <input type="checkbox" class="pull-left" checked />
              </label>

              <p>قرار دادن سایت در حالت در دست تعمیرات</p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">تنظیمات گفتگوها</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                آنلاین بودن من را نشان نده
                <input type="checkbox" class="pull-left" checked />
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                اعلان ها
                <input type="checkbox" class="pull-left" />
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                حذف تاریخته گفتگوهای من
                <a href="javascript:void(0)" class="text-red pull-left"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <style>
    .win-header {
      height: 40px;
      background-color: #d5d5d5;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      padding: 5px;
      text-align: center;
      line-height: 28px;
    }

    .win-body {
      line-height: 30px;
      padding: 20px 30px;
      line-height: 40px;
    }

    #img-trade-status {
      width: 30px;
      float: right;
      margin: 3px 5px;
      cursor: pointer;
    }
  </style>

  <div id="win_admin_message" style="
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        background-color: #5f5f5fad;
        z-index: 10000;
        display: none;
        overflow-y: scroll;
      ">
    <div style="
          width: 700px;
          min-height: 300px;
          background: white;
          margin: 0 auto;
          position: relative;
          top: 20%;
          border: 1px solid gray;
          border-radius: 10px;
        ">
      <div class="win-header">
        پیام مدیر
        <img id="img-trade-status" src="assets/close-win.png" onclick="closewindow()" />
      </div>
      <div class="win-body">
        <div class="row">
          <div class="col-lg-12" style="text-align: center">
            <textarea id="txt_message" rows="4" cols="50" style="width: 100%"></textarea>
          </div>
        </div>
        <div style="text-align: center; margin-top: 30px">
          <input id="btn_save_message" type="submit" style="
                line-height: 30px;
                padding: 0 20px;
                background: #019201;
                color: white;
                font-weight: bold;
                border: 1px solid gray;
              " value="ثبت" onclick="save_message()" />
        </div>
      </div>
    </div>
  </div>

  <div id="win_system_balance" style="
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        background-color: #5f5f5fad;
        z-index: 10000;
        display: none;
        overflow-y: scroll;
      ">
    <div style="
          width: 700px;
          min-height: 300px;
          background: white;
          margin: 0 auto;
          position: relative;
          top: 20%;
          border: 1px solid gray;
          border-radius: 10px;
        ">
      <div class="win-header">
        تسویه تراز
        <img id="img-trade-status" src="assets/close-win.png" onclick="closewindow()" />
      </div>
      <div class="win-body">
        <div class="row">
          <div class="col-lg-2">مرکز تسویه:</div>
          <div class="col-lg-10">
            <select id="cbo_center" style="border-radius: 7px; width: 150px" onchange="handle_balance_change()">
              <option value="option1">انتخاب کنید</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2">نوع کالا:</div>
          <div class="col-lg-10">
            <select id="cbo_type" style="border-radius: 7px; width: 150px" onchange="handle_balance_change()">
              <option value="option1">انتخاب کنید</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2">
            <label style="font-weight: unset">وزن:</label>
          </div>
          <div class="col-lg-4">
            <input type="number" id="txt_weight_count" style="width: 150px; height: 27px; direction: ltr" oninput="onInputHandle()" />
          </div>
          <div class="col-lg-1">مزنه:</div>
          <div class="col-lg-5">
            <input id="txt_fee" style="width: 150px; height: 27px; direction: ltr" disabled />
          </div>
        </div>
        <div style="text-align: center; margin-top: 30px">
          <input id="btn_save_balance" type="submit" style="
                line-height: 30px;
                padding: 0 20px;
                background: #019201;
                color: white;
                font-weight: bold;
                border: 1px solid gray;
                display: none;
              " value="ثبت" onclick="save_balance()" />
        </div>
      </div>
    </div>
  </div>

  <audio id="success_sound">
    <source src="assets/success.mp3" type="audio/mpeg" />
  </audio>
  <audio id="reject_sound">
    <source src="assets/success.mp3" type="audio/mpeg" />
  </audio>
  <div style="display: none">
    <button id="btnPlaySuccessSound" onclick="playSuccessSound();"></button>
    <button id="btnPlayRejectSound" onclick="playRejectSound();"></button>
  </div>

  <!-- +++ in div ro kamel copy paste kon -->
  <!-- modal -->
  <div id="win_system_fund_management" style="
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0px;
        background-color: rgba(95, 95, 95, 0.68);
        z-index: 10000;
        display: none;
        overflow-y: scroll;
      ">
    <div style="
          max-width: 700px;
          min-height: 300px;
          background: white;
          margin: 0 auto;
          position: relative;
          top: 20%;
          border: 1px solid gray;
          border-radius: 10px;
        ">
      <div class="win-header">
        موجودی های آبشده به تفکیک
        <img id="img-trade-status" width="50px" src="assets/close-win.png" onclick="closeTheModal()" />
      </div>
      <div class="win-body">
        <section class="tables_wrapper">
          <section class="tableWrapper">
            <!-- section body -->
            <div class="custom-table-container">
              <table class="custom-table">
                <thead>
                  <tr>
                    <th class="goCenter">آزمایشگاه ها</th>
                    <!-- <th>انگ</th>
                  <th>عیار</th>
                  <th>مقدار</th> -->
                  </tr>
                </thead>
                <tbody class="mainBody_1"></tbody>
              </table>
            </div>
          </section>
          <section class="tableWrapper">
            <!-- section body -->
            <div class="custom-table-container">
              <table class="custom-table">
                <thead>
                  <tr>
                    <th class="goCenter">متفرقه ها</th>
                  </tr>
                </thead>
                <tbody class="mainBody_2"></tbody>
              </table>
            </div>
          </section>
        </section>
      </div>
    </div>
  </div>

  <script>
    // const toggleSwitch = document.querySelectorAll(".toggle-switch");
    // console.log(toggleSwitch)
    // toggleSwitch.addEventListener("click", toggleEventHandler);
    // function toggleEventHandler(e) {
    //   console.log(e)
    // }
    // function deepArrayEqual(arr1, arr2) {
    //   if (arr1 === arr2) return true;

    //   if (
    //     !Array.isArray(arr1) ||
    //     !Array.isArray(arr2) ||
    //     arr1.length !== arr2.length
    //   ) {
    //     return false;
    //   }

    //   for (let i = 0; i < arr1.length; i++) {
    //     if (!deepEqual(arr1[i], arr2[i])) {
    //       return false;
    //     }
    //   }

    //   return true;
    // }
    function doAction() {
      console.log("first");
    }
    const tableBody_1 = document.querySelector(".mainBody_1");
    const tableBody_2 = document.querySelector(".mainBody_2");
    const adminName = document.querySelector(".update-adminName");
    const calender = document.querySelector(".update-calender");
    // زمان بارگذاری اولیه سایت این دیتا ها قرار بگیرد
    const setDataOnPageLoad = async () => {
      let response = await fetch(
        "https://trade.faragold.ir/panel.php?update", {
          method: "GET",
        }
      );
      const data = await response.json();
      adminName.textContent = data.admin_name;
      calender.textContent = data.calender;
    };
    setDataOnPageLoad();

    function closeTheModal() {
      document.getElementById("win_system_fund_management").style.display =
        "none";
    }

    async function openTheModal() {
      tableBody_1.innerHTML = "";
      tableBody_2.innerHTML = "";
      // const { labs, other } = await getlastData();
      document.getElementById("win_system_fund_management").style.display =
        "block";
      showData();
    }
    async function getData() {
      // const response = await fetch(
      //   "https://fara-gold-json.vercel.app/update"
      // );
      let response = await fetch(
        "https://trade.faragold.ir/panel.php?update", {
          method: "GET",
        }
      );
      const data = await response.json();
      return data.separated;
    }

    async function showData() {
      const data = await getData();
      console.log(data);
      const {
        labs,
        other
      } = data;
      // Labs
      const labsWithItems = labs.filter((lab) => lab.items.length);
      labsWithItems.forEach((lab) => {
        lab.items.forEach((item) => {
          const tr = document.createElement("tr");

          for (const key in item) {
            // just show msg
            if (key === "msg") {
              const td = document.createElement("td");
              td.innerHTML = `${item[key]}`;
              tr.append(td);
            }
          }
          tableBody_1.appendChild(tr);
        });
      });
      // other

      other.forEach((item) => {
        const tr = document.createElement("tr");

        item[0] = "ندارد";
        for (const key in item) {
          if (key === "msg") {
            const td = document.createElement("td");
            td.innerHTML = `${item[key]}`;
            tr.append(td);
          }
        }
        tableBody_2.appendChild(tr);
      });
    }
  </script>

  <!-- jQuery 3 -->
  <script src="assets/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="assets/raphael.min.js"></script>
  <script src="assets/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="assets/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="assets/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="assets/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/moment.min.js"></script>
  <script src="assets/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="assets/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="assets/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="assets/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="assets/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="assets/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/demo.js"></script>

  <script>
    const successSound = document.getElementById("success_sound");

    function playSuccessSound() {
      successSound.play().catch((error) => {
        console.error("Autoplay prevented: " + error.message);
      });
    }

    const reject_sound = document.getElementById("reject_sound");

    function playRejectSound() {
      reject_sound.play().catch((error) => {
        console.error("Autoplay prevented: " + error.message);
      });
    }
  </script>

  <script>
    async function do_action(action) {
      if (action == "status") {
        const chkStatus = document.getElementById("chkStatus");
        var status = "deactive";
        if (chkStatus.checked)
          status = "active";
        const url = "https://trade.faragold.ir/panel.php?status=" + status;
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          var res = xmlHttp.responseText;
          if (res == "failed") {
            chkStatus.checked = !chkStatus.checked;
          }
        }
      } else if (action == "confirm") {
        const chkHandConfirm = document.getElementById("chkHandConfirm");
        var status = "deactive";
        if (chkHandConfirm.checked)
          status = "active";
        const url = "https://trade.faragold.ir/panel.php?handconfirm=" + status;
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          var res = xmlHttp.responseText;
          if (res == "failed") {
            chkHandConfirm.checked = !chkHandConfirm.checked;
          }
        }
      } else if (action == "auto_transaction") {
        const chkAutoTransaction = document.getElementById("chkAutoTransaction");
        var status = "deactive";
        if (chkAutoTransaction.checked)
          status = "active";
        const url = "https://trade.faragold.ir/panel.php?autotransaction=" + status;
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          var res = xmlHttp.responseText;
          if (res == "failed") {
            chkAutoTransaction.checked = !chkAutoTransaction.checked;
          }
        }
      }
    }

    function close_trade() {
      document.getElementById("pnl-open-trade-status").style.display = "none";
      // document.getElementById("pnlmelted").style.display = "none";
      // document.getElementById("pnlbankcoin1").style.display = "none";
      // document.getElementById("pnlbankcoin2").style.display = "none";
      // document.getElementById("pnlbankcoin3").style.display = "none";
      // document.getElementById("pnlnonbankcoin1").style.display = "none";
      // document.getElementById("pnlnonbankcoin2").style.display = "none";
      // document.getElementById("pnlnonbankcoin3").style.display = "none";
      document.getElementById("pnl-close-trade-status").style.display =
        "block";
      // document.getElementById("pnlclosemelted").style.display = "table-row";
      // document.getElementById("pnlclosebankcoin").style.display = "table-row";
      // document.getElementById("pnlclosenonbankcoin").style.display = "table-row";
    }

    function get_update() {
      var d = new Date();
      const url =
        "https://trade.faragold.ir/panel.php?update&r=" + d.toLocaleString();
      let container = $("#container");
      container.css("display", "none");

      try {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          try {
            var data = JSON.parse(xmlHttp.responseText)["settings"];
            var keys = Object.keys(data);
            if (keys.length > 0) {
              if (data.note != "") {
                document.getElementById("lblMessage").innerHTML =
                  data.note.replace(/\n/g, "<br/>");
                // document.getElementById("pnlMessages").style.display = 'block';
              } else {
                document.getElementById("lblMessage").innerHTML = "";
                // document.getElementById("pnlMessages").style.display = 'none';
              }

              if (data.status == "active")
                document.getElementById("chkStatus").checked = true;
              else document.getElementById("chkStatus").checked = false;

              if (data.handconfirm == "active")
                document.getElementById("chkHandConfirm").checked = true;
              else document.getElementById("chkHandConfirm").checked = false;

              if (data.autotransaction != 0)
                document.getElementById("chkAutoTransaction").checked = true;
              else
                document.getElementById("chkAutoTransaction").checked = false;

              pnlStatus = document.getElementById("pnlStatus");
              pnlStatus.innerHTML = "";
              for (i = 0; i < data.clear.length; i++) {
                pnlStatus.style.display = "block";

                var item = data.clear[i];
                var htmlContent =
                  "<div class='col-lg-12 col-md-12 pnl_notice'>";

                if (item.status == "confirmed")
                  htmlContent +=
                  "<img id='imgWaiting' src='assets/like.png' width='60px' /> ";
                else if (item.status == "rejected")
                  htmlContent +=
                  "<img id='imgWaiting' src='assets/dislike.png' width='60px' /> ";
                else if (item.status == "progressing")
                  htmlContent +=
                  "<img id='imgWaiting' src='assets/hourglass.gif' width='60px' /> ";

                htmlContent +=
                  "<lable id='lblStatus'>" + item.message + "</lable> ";

                if (item.status != "progressing") {
                  htmlContent +=
                    "<a id='closeWaiting' style='float: right; display: block; color: gray; line-height: 30px;margin-top: 10px;' href='https://trade.faragold.ir/panel.php?close_clear=" +
                    item.time +
                    "'>" +
                    " <img src='assets/close_gray.png' style='float: right; width: 35px;' />&nbsp; بستن </a>";
                }

                htmlContent += "</div>";

                var newElement = document.createElement("div");
                newElement.innerHTML = htmlContent;
                pnlStatus.appendChild(newElement);
              }
            }
          } catch {}

          try {
            var data = JSON.parse(xmlHttp.responseText)["requests"];
            var keys = Object.keys(data);
            if (keys.length > 0) {
              container.css("display", "block");
              container.empty();
              let table = $(
                "<table id='data" +
                "' class='table history-table' style='border-radius: 10px; overflow: hidden; text-align: right; font-size: 14px;'>"
              );
              let cols = Object.keys(data[0]);
              let thead = $("<thead class='thead-light'>");
              let tbody = $("<tbody>");

              $.each(data, function(j, row) {
                var color =
                  row.color == "green" ?
                  "#e5fde5" :
                  row.color == "red" ?
                  "#fdeded" :
                  "lightgray";
                let tr = $(
                  "<tr class='toggle-link' style='background-color:" +
                  color +
                  ";'>"
                );

                let td = $("<td>");
                let vals = Object.values(row);
                $.each(vals, function(k, elem) {
                  if (k > 1) {
                    td.append("<p>" + elem + "</p>");
                  }
                });

                let button1 = $(
                  "<a href='panel.php?task=confirm&track=" +
                  vals[0] +
                  "' class='btn_request' style='color: white; border: 2px solid #009551; background-color: #00a65a; width: 45%'>"
                );
                button1.text("تایید کردن");
                let button2 = $(
                  "<a href='panel.php?task=reject&track=" +
                  vals[0] +
                  "' class='btn_request' style='color: white; border: 2px solid #bc4031; background-color: #dd4b39; width: 45%; float: left;'>"
                );
                button2.text("رد کردن");

                let p = $("<p>");
                p.append(button1, button2);
                td.append(p);
                tr.append(td);
                tbody.append(tr);
              });
              table.append(tbody);

              container.append(table);
            }
          } catch {}

          try {
            var jsonResponse = JSON.parse(xmlHttp.responseText)["wallet"];
            if (jsonResponse.hasOwnProperty("cash")) {
              lbl_cash = document.getElementById("lbl_wallet_cash");
              lbl_cash.innerHTML = jsonResponse.cash
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("melted")) {
              lbl_melted = document.getElementById("lbl_wallet_melted");
              lbl_melted.innerHTML = jsonResponse.melted
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin1")) {
              lbl_bankcoin1 = document.getElementById("lbl_wallet_bankcoin1");
              lbl_bankcoin1.innerHTML = jsonResponse.bankcoin1
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin2")) {
              lbl_bankcoin2 = document.getElementById("lbl_wallet_bankcoin2");
              lbl_bankcoin2.innerHTML = jsonResponse.bankcoin2
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin3")) {
              lbl_bankcoin3 = document.getElementById("lbl_wallet_bankcoin3");
              lbl_bankcoin3.innerHTML = jsonResponse.bankcoin3
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin1")) {
              lbl_nonbankcoin1 = document.getElementById(
                "lbl_wallet_nonbankcoin1"
              );
              lbl_nonbankcoin1.innerHTML = jsonResponse.nonbankcoin1
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin2")) {
              lbl_nonbankcoin2 = document.getElementById(
                "lbl_wallet_nonbankcoin2"
              );
              lbl_nonbankcoin2.innerHTML = jsonResponse.nonbankcoin2
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin3")) {
              lbl_nonbankcoin3 = document.getElementById(
                "lbl_wallet_nonbankcoin3"
              );
              lbl_nonbankcoin3.innerHTML = jsonResponse.nonbankcoin3
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("melted_all")) {
              lbl_melted_all = document.getElementById(
                "lbl_wallet_melted_all"
              );
              lbl_melted_all.innerHTML = jsonResponse.melted_all
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("cash_all")) {
              lbl_cash = document.getElementById("lbl_wallet_cash_all");
              lbl_cash.innerHTML = jsonResponse.cash_all
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
          } catch {}

          try {
            var jsonResponse = JSON.parse(xmlHttp.responseText)["balance"];
            if (jsonResponse.hasOwnProperty("melted")) {
              lbl_melted = document.getElementById("lbl_balance_melted_all");
              lbl_melted.innerHTML = jsonResponse.melted_all
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin1")) {
              lbl_bankcoin1 = document.getElementById(
                "lbl_balance_bankcoin1"
              );
              lbl_bankcoin1.innerHTML = jsonResponse.bankcoin1
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin2")) {
              lbl_bankcoin2 = document.getElementById(
                "lbl_balance_bankcoin2"
              );
              lbl_bankcoin2.innerHTML = jsonResponse.bankcoin2
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin3")) {
              lbl_bankcoin3 = document.getElementById(
                "lbl_balance_bankcoin3"
              );
              lbl_bankcoin3.innerHTML = jsonResponse.bankcoin3
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin1")) {
              lbl_nonbankcoin1 = document.getElementById(
                "lbl_balance_nonbankcoin1"
              );
              lbl_nonbankcoin1.innerHTML = jsonResponse.nonbankcoin1
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin2")) {
              lbl_nonbankcoin2 = document.getElementById(
                "lbl_balance_nonbankcoin2"
              );
              lbl_nonbankcoin2.innerHTML = jsonResponse.nonbankcoin2
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin3")) {
              lbl_nonbankcoin3 = document.getElementById(
                "lbl_balance_nonbankcoin3"
              );
              lbl_nonbankcoin3.innerHTML = jsonResponse.nonbankcoin3
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("melted_all")) {
              lbl_melted_all = document.getElementById(
                "lbl_balance_melted_all"
              );
              lbl_melted_all.innerHTML = jsonResponse.melted_all
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
          } catch {}

          try {
            var jsonResponse = JSON.parse(xmlHttp.responseText)["box"];
            if (jsonResponse.hasOwnProperty("cash")) {
              lbl_box_cash = document.getElementById("lbl_box_cash");
              lbl_box_cash.innerHTML = jsonResponse.cash
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("melted")) {
              lbl_box_melted = document.getElementById("lbl_box_melted");
              lbl_box_melted.innerHTML = jsonResponse.melted
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin1")) {
              lbl_box_bankcoin1 =
                document.getElementById("lbl_box_bankcoin1");
              lbl_box_bankcoin1.innerHTML = jsonResponse.bankcoin1
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin2")) {
              lbl_box_bankcoin2 =
                document.getElementById("lbl_box_bankcoin2");
              lbl_box_bankcoin2.innerHTML = jsonResponse.bankcoin2
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("bankcoin3")) {
              lbl_box_bankcoin3 =
                document.getElementById("lbl_box_bankcoin3");
              lbl_box_bankcoin3.innerHTML = jsonResponse.bankcoin3
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin1")) {
              lbl_box_nonbankcoin1 = document.getElementById(
                "lbl_box_nonbankcoin1"
              );
              lbl_box_nonbankcoin1.innerHTML = jsonResponse.nonbankcoin1
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin2")) {
              lbl_box_nonbankcoin2 = document.getElementById(
                "lbl_box_nonbankcoin2"
              );
              lbl_box_nonbankcoin2.innerHTML = jsonResponse.nonbankcoin2
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            if (jsonResponse.hasOwnProperty("nonbankcoin3")) {
              lbl_box_nonbankcoin3 = document.getElementById(
                "lbl_box_nonbankcoin3"
              );
              lbl_box_nonbankcoin3.innerHTML = jsonResponse.nonbankcoin3
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
          } catch {}

          try {
            var jsonResponse = JSON.parse(xmlHttp.responseText)["prices"];
            var keys = Object.keys(jsonResponse);
            if (jsonResponse.hasOwnProperty("market")) {
              if (jsonResponse.market.toString() == "open") {
                document.getElementById(
                  "pnl-open-trade-status"
                ).style.display = "block";
                document.getElementById(
                  "pnl-close-trade-status"
                ).style.display = "none";
              } else {
                close_trade();
              }

              if (jsonResponse.hasOwnProperty("melted_buy")) {
                lbl_melted_buy = document.getElementById("lbl_melted_buy");
                // if(lbl_melted_buy.innerHTML != "" && jsonResponse.melted_buy != lbl_melted_buy.innerHTML.replaceAll(',',''))
                //     change_price(lbl_melted_buy);
                lbl_melted_buy.innerHTML = jsonResponse.melted_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                if (
                  document.getElementById("rb_buy").checked &&
                  document.getElementById("txt_melted_fee").value == "" &&
                  document.getElementById("txt_doc_num").value == ""
                )
                  console.log(1);
                // document.getElementById("txt_melted_fee").value =
                // lbl_melted_buy.innerHTML;
              }
              if (jsonResponse.hasOwnProperty("melted_sell")) {
                lbl_melted_sell = document.getElementById("lbl_melted_sell");
                // if(lbl_melted_sell.innerHTML != "" && jsonResponse.melted_sell != lbl_melted_sell.innerHTML.replaceAll(',',''))
                //     change_price(lbl_melted_sell);
                lbl_melted_sell.innerHTML = jsonResponse.melted_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                if (
                  document.getElementById("rb_sell").checked &&
                  document.getElementById("txt_melted_fee").value == "" &&
                  document.getElementById("txt_doc_num").value == ""
                )
                  console.log(2);

              }
              if (jsonResponse.hasOwnProperty("bankcoin1_buy")) {
                lbl_bankcoin1_buy =
                  document.getElementById("lbl_bankcoin1_buy");
                // if(lbl_bankcoin1_buy.innerHTML != "" && jsonResponse.bankcoin1_buy != lbl_bankcoin1_buy.innerHTML.replaceAll(',',''))
                //     change_price(lbl_bankcoin1_buy);
                lbl_bankcoin1_buy.innerHTML = jsonResponse.bankcoin1_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("bankcoin1_sell")) {
                lbl_bankcoin1_sell =
                  document.getElementById("lbl_bankcoin1_sell");
                // if(lbl_bankcoin1_sell.innerHTML != "" && jsonResponse.bankcoin1_sell != lbl_bankcoin1_sell.innerHTML.replaceAll(',',''))
                //     change_price(lbl_bankcoin1_sell);
                lbl_bankcoin1_sell.innerHTML = jsonResponse.bankcoin1_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("bankcoin2_buy")) {
                lbl_bankcoin2_buy =
                  document.getElementById("lbl_bankcoin2_buy");
                // if(lbl_bankcoin2_buy.innerHTML != "" && jsonResponse.bankcoin2_buy != lbl_bankcoin2_buy.innerHTML.replaceAll(',',''))
                //     change_price(lbl_bankcoin2_buy);
                lbl_bankcoin2_buy.innerHTML = jsonResponse.bankcoin2_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("bankcoin2_sell")) {
                lbl_bankcoin2_sell =
                  document.getElementById("lbl_bankcoin2_sell");
                // if(lbl_bankcoin2_sell.innerHTML != "" && jsonResponse.bankcoin2_sell != lbl_bankcoin2_sell.innerHTML.replaceAll(',',''))
                //     change_price(lbl_bankcoin2_sell);
                lbl_bankcoin2_sell.innerHTML = jsonResponse.bankcoin2_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("bankcoin3_buy")) {
                lbl_bankcoin3_buy =
                  document.getElementById("lbl_bankcoin3_buy");
                // if(lbl_bankcoin3_buy.innerHTML != "" && jsonResponse.bankcoin3_buy != lbl_bankcoin3_buy.innerHTML.replaceAll(',',''))
                //     change_price(lbl_bankcoin3_buy);
                lbl_bankcoin3_buy.innerHTML = jsonResponse.bankcoin3_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("bankcoin3_sell")) {
                lbl_bankcoin3_sell =
                  document.getElementById("lbl_bankcoin3_sell");
                // if(lbl_bankcoin3_sell.innerHTML != "" && jsonResponse.bankcoin3_sell != lbl_bankcoin3_sell.innerHTML.replaceAll(',',''))
                //     change_price(lbl_bankcoin3_sell);
                lbl_bankcoin3_sell.innerHTML = jsonResponse.bankcoin3_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("nonbankcoin1_buy")) {
                lbl_nonbankcoin1_buy = document.getElementById(
                  "lbl_nonbankcoin1_buy"
                );
                // if(lbl_nonbankcoin1_buy.innerHTML != "" && jsonResponse.nonbankcoin1_buy != lbl_nonbankcoin1_buy.innerHTML.replaceAll(',',''))
                //     change_price(lbl_nonbankcoin1_buy);
                lbl_nonbankcoin1_buy.innerHTML = jsonResponse.nonbankcoin1_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("nonbankcoin1_sell")) {
                lbl_nonbankcoin1_sell = document.getElementById(
                  "lbl_nonbankcoin1_sell"
                );
                // if(lbl_nonbankcoin1_sell.innerHTML != "" && jsonResponse.nonbankcoin1_sell != lbl_nonbankcoin1_sell.innerHTML.replaceAll(',',''))
                //     change_price(lbl_nonbankcoin1_sell);
                lbl_nonbankcoin1_sell.innerHTML =
                  jsonResponse.nonbankcoin1_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("nonbankcoin2_buy")) {
                lbl_nonbankcoin2_buy = document.getElementById(
                  "lbl_nonbankcoin2_buy"
                );
                // if(lbl_nonbankcoin2_buy.innerHTML != "" && jsonResponse.nonbankcoin2_buy != lbl_nonbankcoin2_buy.innerHTML.replaceAll(',',''))
                //     change_price(lbl_nonbankcoin2_buy);
                lbl_nonbankcoin2_buy.innerHTML = jsonResponse.nonbankcoin2_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("nonbankcoin2_sell")) {
                lbl_nonbankcoin2_sell = document.getElementById(
                  "lbl_nonbankcoin2_sell"
                );
                // if(lbl_nonbankcoin2_sell.innerHTML != "" && jsonResponse.nonbankcoin2_sell != lbl_nonbankcoin2_sell.innerHTML.replaceAll(',',''))
                //     change_price(lbl_nonbankcoin2_sell);
                lbl_nonbankcoin2_sell.innerHTML =
                  jsonResponse.nonbankcoin2_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("nonbankcoin3_buy")) {
                lbl_nonbankcoin3_buy = document.getElementById(
                  "lbl_nonbankcoin3_buy"
                );
                // if(lbl_nonbankcoin3_buy.innerHTML != "" && jsonResponse.nonbankcoin3_buy != lbl_nonbankcoin3_buy.innerHTML.replaceAll(',',''))
                //     change_price(lbl_nonbankcoin3_buy);
                lbl_nonbankcoin3_buy.innerHTML = jsonResponse.nonbankcoin3_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              if (jsonResponse.hasOwnProperty("nonbankcoin3_sell")) {
                lbl_nonbankcoin3_sell = document.getElementById(
                  "lbl_nonbankcoin3_sell"
                );
                // if(lbl_nonbankcoin3_sell.innerHTML != "" && jsonResponse.nonbankcoin3_sell != lbl_nonbankcoin3_sell.innerHTML.replaceAll(',',''))
                //     change_price(lbl_nonbankcoin3_sell);
                lbl_nonbankcoin3_sell.innerHTML =
                  jsonResponse.nonbankcoin3_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
            } else if (!jsonResponse.hasOwnProperty("market")) {
              // window.top.location.reload();
            }
          } catch (e) {
            // window.top.location.reload();
          }
        } else {
          close_trade();
        }
      } catch (e) {
        console.log(e);
        // if (confirm("اتصال اینترنت شما قطع شده است!")) {
        //   // window.top.location.reload();
        // }
      }
    }

    get_update();
    setInterval(get_update, 10000);
  </script>

  <script>
    function updateTime() {
      const now = new Date();
      const timeElement = document.getElementById("lbltime");
      const timeOptions = {
        hour12: false
      };
      timeElement.textContent = now.toLocaleTimeString(
        undefined,
        timeOptions
      );
    }
    setInterval(updateTime, 1000);
  </script>

  <script>
    function update_date() {
      if (document.getElementById("txt_doc_num").value != "") return;

      var d = new Date();
      const url =
        "https://trade.faragold.ir/panel.php?update&r=" + d.toLocaleString();
      try {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          try {
            var data = JSON.parse(xmlHttp.responseText)["formalcalender"];
            document.getElementById("txt_doc_date").value = data;
          } catch {}
        }
      } catch {}
    }

    function hide_panels() {
      document.getElementById("pnl_main_content").style.display = "none";
      document.getElementById("pnl_initial_content").style.display = "none";
      document.getElementById("pnl_transaction").style.display = "none";
      document.getElementById("pnl_user_mng").style.display = "none";
      document.getElementById("pnl_report").style.display = "none";
    }

    function change_page(index) {
      hide_panels();

      switch (index) {
        case 1:
          document.getElementById("pnl_main_content").style.display = "block";
          break;
        case 2:
          document.getElementById("pnl_initial_content").style.display =
            "block";
          break;
        case 3:
          document.getElementById("pnl_transaction").style.display = "block";
          update_date();
          display_transactions();

          if (document.getElementById("txt_doc_num").value == "") {
            var selectedValue = document.querySelector(
              'input[name="fav_language_type"]:checked'
            ).value;
            if (selectedValue == "buy") {
              document.getElementById("txt_melted_fee").value =
                lbl_melted_buy.innerHTML;
            } else if (selectedValue == "sell") {
              document.getElementById("txt_melted_fee").value =
                lbl_melted_sell.innerHTML;
            }

            onCoinTypeChanged();
          }

          break;
        case 4:
          document.getElementById("pnl_user_mng").style.display = "block";
          break;
        case 5:
          document.getElementById("pnl_report").style.display = "block";
          display_report_wallet();
          break;
      }
    }
  </script>

  <script>
    function get_data(url) {
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open("GET", url, false);
      xmlHttp.send(null);
      if (xmlHttp.status === 200) {
        try {
          var jsonResponse = JSON.parse(xmlHttp.responseText);
          return jsonResponse;
        } catch {
          return "";
        }
      } else return "";
    }

    const url = "https://trade.faragold.ir/panel.php?list_users";
    let data = get_data(url);

    function show_users() {
      filter = $("#txt_user_search");
      let dataArray = Object.values(data);
      let filteredArray = dataArray.filter(function(row) {
        return row.name.toLowerCase().includes(filter.val().toLowerCase());
      });

      var cbo_users = document.getElementById("cbo_users");
      $.each(filteredArray, function(j, row) {
        var newItem = document.createElement("div");
        newItem.className = "dropdown-list-item dropdown-list-item1";
        newItem.innerHTML = row.name;
        newItem.setAttribute("data-user-id", row.number);
        newItem.onclick = function() {
          selectItem(this);
          onComboBoxIndexChanged(row.number);
        };
        cbo_users.appendChild(newItem);
      });
    }

    show_users();

    function showDropdown() {
      document.getElementById("cbo_users").style.display = "block";
    }

    function filterDropdown() {
      var input, filter, items, i;
      input = document.querySelector(".dropdown input");
      filter = input.value.toUpperCase();
      items = document.querySelectorAll(".dropdown-list-item1");

      for (i = 0; i < items.length; i++) {
        if (items[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
          items[i].style.display = "";
        } else {
          items[i].style.display = "none";
        }
      }
    }

    function selectItem(item) {
      document.querySelector(".dropdown input").value = item.innerHTML;
      document
        .querySelector(".dropdown input")
        .setAttribute("data-user-id", item.getAttribute("data-user-id"));

      document.getElementById("cbo_users").style.display = "none";

      update_date();

      display_transactions();
    }

    function delete_user() {
      var txt_user = document.getElementById("txt_user_search");
      txt_user.value = "";
      txt_user.setAttribute("data-user-id", "");

      filterDropdown();

      display_transactions();

      document.getElementById("lbl_remaind_cash").innerHTML = "";
      document.getElementById("lbl_remaind_melted").innerHTML = "";
      document.getElementById("lbl_remaind_bankcoin1").innerHTML = "";
      document.getElementById("lbl_remaind_bankcoin2").innerHTML = "";
      document.getElementById("lbl_remaind_bankcoin3").innerHTML = "";
      document.getElementById("lbl_remaind_nonbankcoin1").innerHTML = "";
      document.getElementById("lbl_remaind_nonbankcoin2").innerHTML = "";
      document.getElementById("lbl_remaind_nonbankcoin3").innerHTML = "";
    }

    function delete_receiver() {
      var txt_user = document.getElementById("txt_receiver_search");
      txt_user.value = "";
      txt_user.setAttribute("data-user-id", "");

      filterDropdownReceiver();
    }

    function onComboBoxIndexChanged(userId) {
      data = get_data(url);

      let dataArray = Object.values(data);
      let filteredArray = dataArray.filter(function(row) {
        return row.number.includes(userId);
      });

      document.getElementById("lbl_remaind_cash").innerHTML =
        filteredArray[0].wallet.cash
        .toString()
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      document.getElementById("lbl_remaind_melted").innerHTML =
        filteredArray[0].wallet.melted
        .toString()
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      document.getElementById("lbl_remaind_bankcoin1").innerHTML =
        filteredArray[0].wallet.bankcoin1.toString();
      document.getElementById("lbl_remaind_bankcoin2").innerHTML =
        filteredArray[0].wallet.bankcoin2.toString();
      document.getElementById("lbl_remaind_bankcoin3").innerHTML =
        filteredArray[0].wallet.bankcoin3.toString();
      document.getElementById("lbl_remaind_nonbankcoin1").innerHTML =
        filteredArray[0].wallet.nonbankcoin1.toString();
      document.getElementById("lbl_remaind_nonbankcoin2").innerHTML =
        filteredArray[0].wallet.nonbankcoin2.toString();
      document.getElementById("lbl_remaind_nonbankcoin3").innerHTML =
        filteredArray[0].wallet.nonbankcoin3.toString();
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches(".dropdown input")) {
        var dropdowns = document.getElementsByClassName("dropdown-list");
        for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.style.display === "block") {
            openDropdown.style.display = "none";
          }
        }
      }
    };

    function show_receivers() {
      filter = $("#txt_receiver_search");
      let dataArray = Object.values(data);
      let filteredArray = dataArray.filter(function(row) {
        return row.name.toLowerCase().includes(filter.val().toLowerCase());
      });

      var cbo_receiver = document.getElementById("cbo_receiver");
      $.each(filteredArray, function(j, row) {
        var newItem = document.createElement("div");
        newItem.className = "dropdown-list-item dropdown-list-item2";
        newItem.innerHTML = row.name;
        newItem.setAttribute("data-user-id", row.number);
        newItem.onclick = function() {
          selectItemReceiver(this);
        };
        cbo_receiver.appendChild(newItem);
      });
    }

    show_receivers();

    function showDropdownReceiver() {
      document.getElementById("cbo_receiver").style.display = "block";
    }

    function filterDropdownReceiver() {
      var input, filter, items, i;
      input = document.getElementById("txt_receiver_search");
      filter = input.value.toUpperCase();
      items = document.querySelectorAll(".dropdown-list-item2");

      for (i = 0; i < items.length; i++) {
        if (items[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
          items[i].style.display = "";
        } else {
          items[i].style.display = "none";
        }
      }
    }

    function selectItemReceiver(item) {
      document.querySelector(".dropdown2 input").value = item.innerHTML;
      document
        .querySelector(".dropdown2 input")
        .setAttribute("data-user-id", item.getAttribute("data-user-id"));

      document.getElementById("cbo_receiver").style.display = "none";
    }
  </script>

  <script>
    // function handleDropdownChange(){
    //     document.getElementById('pnl_action_money').style.display = "none";
    //     document.getElementById('pnl_action_melted').style.display = "none";
    //     document.getElementById('pnl_action_coin').style.display = "none";

    //     // document.getElementById('pnl_amount').style.display = "none";
    //     document.getElementById('pnl_number').style.display = "none";
    //     document.getElementById('pnl_receiver').style.display = "none";

    //     var selectedValue = document.getElementById("cbo_trade_type").value;
    //     switch (selectedValue) {
    //       case "money":
    //         document.getElementById('pnl_action_money').style.display = "block";
    //         break;
    //       case "melted":
    //         document.getElementById('pnl_action_melted').style.display = "block";
    //         break;
    //       case "coin1":
    //       case "coin2":
    //       case "coin3":
    //       case "noncoin1":
    //       case "noncoin2":
    //       case "noncoin3":
    //         document.getElementById('pnl_action_coin').style.display = "block";
    //         break;
    //     }
    // }

    function handleMoneyActionChange() {
      // document.getElementById('pnl_amount').style.display = "none";
      document.getElementById("pnl_number").style.display = "none";
      document.getElementById("pnl_receiver").style.display = "none";

      var selectedValue = document.querySelector(
        'input[name="fav_language_money"]:checked'
      ).value;
      switch (selectedValue) {
        case "put":
        case "take":
          // document.getElementById('pnl_amount').style.display = "block";
          break;
        case "send":
          // document.getElementById('pnl_amount').style.display = "block";
          document.getElementById("pnl_receiver").style.display = "block";
          break;
      }
    }

    function handleChangeDocumentType() {
      document.getElementById("pnl_buy_melted").style.display = "none";
      document.getElementById("pnl_buy_other").style.display = "none";
      document.getElementById("pnl_sell_melted").style.display = "none";
      document.getElementById("pnl_sell_other").style.display = "none";
      // document.getElementById('pnl_melted_content').style.display = "block";
      // document.getElementById('pnl_melted_other_content').style.display = "none";

      document.getElementById("pnl_put_melted").style.display = "none";
      document.getElementById("pnl_put_other").style.display = "none";
      document.getElementById("pnl_take_melted").style.display = "none";
      document.getElementById("pnl_take_other").style.display = "none";
      document.getElementById("pnl_put_cond_melted").style.display = "none";
      document.getElementById("pnl_take_cond_melted").style.display = "none";

      document.getElementById("pnl_buy_coin").style.display = "none";
      document.getElementById("pnl_sell_coin").style.display = "none";
      document.getElementById("pnl_put_coin").style.display = "none";
      document.getElementById("pnl_take_coin").style.display = "none";

      document.getElementById("pnl_put_cash").style.display = "none";
      document.getElementById("pnl_take_cash").style.display = "none";

      document.getElementById("pnl_receive_bank").style.display = "none";
      document.getElementById("pnl_send_bank").style.display = "none";
      document.getElementById("pnl_pay_bank").style.display = "none";
      document.getElementById("pnl_take_bank").style.display = "none";

      var selectedValue = document.querySelector(
        'input[name="fav_language_type"]:checked'
      ).value;
      if (selectedValue == "buy") {
        document.getElementById("melted-tab").innerHTML = "خرید طلا";

        document.getElementById("pnl_document").style.border =
          "4px solid #10b710";
        document.getElementById("btn_save").style.background = "#019201";
        document.getElementById("btn_save_return").style.background =
          "#019201";

        document.getElementById("pnl_buy_melted").style.display = "block";
        document.getElementById("pnl_buy_other").style.display = "block";
        document.getElementById("rb_buy_melted").checked = true;
        handleMeltedActionChange();

        document.getElementById("pnl_put_melted").style.display = "block";
        document.getElementById("pnl_put_other").style.display = "block";
        document.getElementById("pnl_put_cond_melted").style.display =
          "block";
        document.getElementById("rb_put_melted").checked = true;
        handleMelted2ActionChange();

        document.getElementById("pnl_buy_coin").style.display = "block";
        document.getElementById("pnl_put_coin").style.display = "block";
        document.getElementById("rb_buy_coin").checked = true;
        handleCoinActionChange();

        document.getElementById("pnl_put_cash").style.display = "block";
        document.getElementById("rb_put_cash").checked = true;
        handleMeltedActionChange();

        document.getElementById("pnl_receive_bank").style.display = "block";
        document.getElementById("pnl_send_bank").style.display = "block";
        document.getElementById("rb_receive_bank").checked = true;
        handleBankActionChange();

        if (document.getElementById("txt_doc_num").value == "")
          document.getElementById("txt_melted_fee").value =
          lbl_melted_buy.innerHTML;
      } else if (selectedValue == "sell") {
        document.getElementById("melted-tab").innerHTML = "فروش طلا";

        document.getElementById("pnl_document").style.border =
          "4px solid red";
        document.getElementById("btn_save").style.background = "red";
        document.getElementById("btn_save_return").style.background = "red";

        document.getElementById("pnl_sell_melted").style.display = "block";
        document.getElementById("pnl_sell_other").style.display = "block";
        document.getElementById("rb_sell_melted").checked = true;
        handleMeltedActionChange();

        document.getElementById("pnl_take_melted").style.display = "block";
        document.getElementById("pnl_take_other").style.display = "block";
        document.getElementById("pnl_take_cond_melted").style.display =
          "block";
        document.getElementById("rb_take_melted").checked = true;
        handleMelted2ActionChange();

        document.getElementById("pnl_sell_coin").style.display = "block";
        document.getElementById("pnl_take_coin").style.display = "block";
        document.getElementById("rb_sell_coin").checked = true;
        handleCoinActionChange();

        document.getElementById("pnl_take_cash").style.display = "block";
        document.getElementById("rb_take_cash").checked = true;
        handleMeltedActionChange();

        document.getElementById("pnl_pay_bank").style.display = "block";
        document.getElementById("pnl_take_bank").style.display = "block";
        document.getElementById("rb_pay_bank").checked = true;
        handleBankActionChange();
        document.getElementById("pnl_bank_account2").style.display = "none";
        document.getElementById("lbl_bank_account").innerHTML = "حساب بانکی:";

        if (document.getElementById("txt_doc_num").value == "")
          document.getElementById("txt_melted_fee").value =
          lbl_melted_sell.innerHTML;
      }

      onCoinTypeChanged();
    }

    function handleMeltedActionChange() {
      // document.getElementById('pnl_melted_content').style.display = "none";
      // document.getElementById('pnl_melted_other_content').style.display = "none";

      var selectedValue = document.querySelector(
        'input[name="fav_language_melted"]:checked'
      ).value;
      switch (selectedValue) {
        case "buy_melted":
        case "sell_melted":
          // document.getElementById('pnl_melted_content').style.display = "block";
          document.getElementById("pnl_melted_750").style.display = "none";
          document.getElementById("txt_melted_carat").disabled = true;
          document.getElementById("txt_melted_carat").value = "750";
          break;
        case "buy_other":
        case "sell_other":
          // document.getElementById('pnl_melted_other_content').style.display = "block";
          document.getElementById("pnl_melted_750").style.display = "block";
          document.getElementById("txt_melted_carat").disabled = false;
          break;
      }
    }

    function handleMelted2ActionChange() {
      document.getElementById("pnl_melted2_content").style.display = "none";
      document.getElementById("pnl_melted2_other_content").style.display =
        "none";
      document.getElementById("pnl_melted2_cond_content").style.display =
        "none";

      var selectedValue = document.querySelector(
        'input[name="fav_language_melted2"]:checked'
      ).value;
      switch (selectedValue) {
        case "put":
        case "take":
          document.getElementById("pnl_melted2_content").style.display =
            "block";
          break;
        case "put_other":
        case "take_other":
          document.getElementById("pnl_melted2_other_content").style.display =
            "block";
          break;
        case "put_cond":
        case "take_cond":
          document.getElementById("pnl_melted2_cond_content").style.display =
            "block";
          break;
      }
    }

    function handleCoinActionChange() {
      document.getElementById("pnl_coin_content").style.display = "none";
      document.getElementById("pnl_coin_content2").style.display = "none";

      var selectedValue = document.querySelector(
        'input[name="fav_language_coin"]:checked'
      ).value;
      switch (selectedValue) {
        case "buy":
        case "sell":
          document.getElementById("pnl_coin_content").style.display = "block";
          break;
        case "put":
        case "take":
          document.getElementById("pnl_coin_content2").style.display =
            "block";
          break;
      }
    }

    function handleBankActionChange() {
      document.getElementById("pnl_bank_account2").style.display = "none";
      document.getElementById("lbl_bank_account").innerHTML = "حساب بانکی:";

      var selectedValue = document.querySelector(
        'input[name="fav_language_bank"]:checked'
      ).value;
      switch (selectedValue) {
        case "exchange":
          document.getElementById("pnl_bank_account2").style.display =
            "block";
          document.getElementById("lbl_bank_account").innerHTML = "از حساب:";
          break;
      }
    }

    function handleMoneyActionChange() {
      document.getElementById("pnl_money_weight").style.display = "none";
      document.getElementById("pnl_money_fee").style.display = "none";

      var selectedValue = document.querySelector(
        'input[name="fav_language_money"]:checked'
      ).value;
      switch (selectedValue) {
        case "weight":
          document.getElementById("pnl_money_weight").style.display = "block";
          break;
        case "money":
          document.getElementById("pnl_money_fee").style.display = "block";
          break;
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      $(".nav-link").on("click", function() {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");

        $(".tab-pane").removeClass("show active");
        var targetPane = "#" + $(this).attr("data-toggle");
        $(targetPane).addClass("show active");

        if (
          targetPane == "#pnl_document_melted2" ||
          targetPane == "#pnl_document_cash" ||
          targetPane == "#pnl_document_coin"
        ) {
          document.getElementById("pnl_transfer").style.display = "block";
        } else {
          document.getElementById("pnl_transfer").style.display = "none";
        }
      });
    });
  </script>

  <script>
    function open_window(name) {
      if (name == "admin_message") {
        document.getElementById("win_admin_message").style.display = "block";

        var d = new Date();
        const url =
          "https://trade.faragold.ir/panel.php?update&r=" +
          d.toLocaleString();
        try {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open("GET", url, false);
          xmlHttp.send(null);
          if (xmlHttp.status === 200) {
            try {
              var data = JSON.parse(xmlHttp.responseText)["settings"];
              document.getElementById("txt_message").value = data.note;
            } catch {}
          }
        } catch {}
      } else if (name == "system_balance") {
        document.getElementById("win_system_balance").style.display = "block";
        document.getElementById("txt_weight_count").value = "";
        document.getElementById("txt_fee").value = "";

        var d = new Date();
        const url =
          "https://trade.faragold.ir/panel.php?update&r=" +
          d.toLocaleString();
        try {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open("GET", url, false);
          xmlHttp.send(null);
          if (xmlHttp.status === 200) {
            try {
              var data = JSON.parse(xmlHttp.responseText)["settings"];
              var keys = Object.keys(data);
              if (keys.length > 0) {
                cbo_center = document.getElementById("cbo_center");
                cbo_center.innerHTML = "";
                var option = document.createElement("option");
                option.value = "";
                option.text = "انتخاب";
                cbo_center.add(option);

                for (key in data.prices) {
                  if (data.prices[key].market == "open") {
                    var option = document.createElement("option");
                    option.value = key;
                    option.text = data.prices[key].name;
                    cbo_center.add(option);
                  }
                }
              }

              data = JSON.parse(xmlHttp.responseText)["prices"];
              keys = Object.keys(data);
              if (keys.length > 0) {}

              cbo_type = document.getElementById("cbo_type");
              cbo_type.innerHTML = "";
              var option = document.createElement("option");
              option.value = "";
              option.text = "انتخاب";
              cbo_type.add(option);

              var data2 = JSON.parse(xmlHttp.responseText)["balance"];
              if (data2.melted_all != 0) {
                var option = document.createElement("option");
                option.value = "melted_all";
                option.text = "آبشده کل";
                cbo_type.add(option);
              }
              if (data2.bankcoin1 != 0) {
                var option = document.createElement("option");
                option.value = "bankcoin1";
                option.text = "تمام سکه بانکی";
                cbo_type.add(option);
              }
              if (data2.bankcoin2 != 0) {
                var option = document.createElement("option");
                option.value = "bankcoin2";
                option.text = "نیم سکه بانکی";
                cbo_type.add(option);
              }
              if (data2.bankcoin3 != 0) {
                var option = document.createElement("option");
                option.value = "bankcoin3";
                option.text = "ربع سکه بانکی";
                cbo_type.add(option);
              }
            } catch {}
          }
        } catch {}
      }
    }

    function handle_balance_change() {
      var center = document.getElementById("cbo_center").value;
      var type = document.getElementById("cbo_type").value;

      var d = new Date();
      const url =
        "https://trade.faragold.ir/panel.php?update&r=" + d.toLocaleString();
      try {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          try {
            var data1 = JSON.parse(xmlHttp.responseText)["settings"];
            var data2 = JSON.parse(xmlHttp.responseText)["balance"];
            var center_data = data1.prices[center];
            switch (type) {
              case "melted_all":
                document.getElementById("txt_weight_count").value =
                  data2.melted_all;
                if (data2.melted_all > 0)
                  document.getElementById("txt_fee").value =
                  center_data.melted_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                else
                  document.getElementById("txt_fee").value =
                  center_data.melted_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                break;
              case "bankcoin1":
                document.getElementById("txt_weight_count").value =
                  data2.bankcoin1;
                if (data2.bankcoin1 > 0)
                  document.getElementById("txt_fee").value =
                  center_data.bankcoin1_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                else
                  document.getElementById("txt_fee").value =
                  center_data.bankcoin1_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                break;
              case "bankcoin2":
                document.getElementById("txt_weight_count").value =
                  data2.bankcoin2;
                if (data2.bankcoin2 > 0)
                  document.getElementById("txt_fee").value =
                  center_data.bankcoin2_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                else
                  document.getElementById("txt_fee").value =
                  center_data.bankcoin2_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                break;
              case "bankcoin3":
                document.getElementById("txt_weight_count").value =
                  data2.bankcoin3;
                if (data2.bankcoin3 > 0)
                  document.getElementById("txt_fee").value =
                  center_data.bankcoin3_buy
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                else
                  document.getElementById("txt_fee").value =
                  center_data.bankcoin3_sell
                  .toString()
                  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                break;
            }

            onInputHandle();
          } catch {}
        }
      } catch {}
    }

    function onInputHandle() {
      var intValue = parseInt(
        document.getElementById("txt_weight_count").value,
        10
      );
      if (isNaN(intValue)) {
        document.getElementById("btn_save_balance").style.display = "none";
      } else if (intValue >= 0) {
        document.getElementById("btn_save_balance").style.display = "inline";
        document.getElementById("btn_save_balance").style.backgroundColor =
          "red";
        document.getElementById("btn_save_balance").value = "فروش";
      } else if (intValue < 0) {
        document.getElementById("btn_save_balance").style.display = "inline";
        document.getElementById("btn_save_balance").style.backgroundColor =
          "#019201";
        document.getElementById("btn_save_balance").value = "خرید";
      }
    }

    function closewindow() {
      document.getElementById("win_admin_message").style.display = "none";
      document.getElementById("win_system_balance").style.display = "none";
    }

    function save_message() {
      msg = document.getElementById("txt_message").value;
      var encodedValue = encodeURIComponent(msg);
      const url = "https://trade.faragold.ir/panel.php?note=" + encodedValue;
      try {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          if (xmlHttp.responseText == "success") closewindow();
        }
      } catch {}
    }

    function save_balance() {
      var center = document.getElementById("cbo_center").value;
      var type = document.getElementById("cbo_type").value;
      var weight_count = document.getElementById("txt_weight_count").value;
      var fee = document.getElementById("txt_fee").value;

      const url =
        "https://trade.faragold.ir/panel.php?clear&center=" +
        center +
        "&type=" +
        type +
        "&weight_count=" +
        weight_count;
      try {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          if (xmlHttp.responseText == "success") closewindow();
        }
      } catch {}
    }
  </script>

  <script>
    // sabt sanad
    async function save_document(return_status) {
      var user_id = document
        .getElementById("txt_user_search")
        .getAttribute("data-user-id");
      var doc_track = document.getElementById("txt_doc_num").value;
      var doc_date = document.getElementById("txt_doc_date").value;
      var doc_type = $(".document.nav-link.active").attr("doc_type");

      var transfer = "";
      var chk_transfer = document.getElementById("chk_transfer");
      if (
        chk_transfer.checked &&
        (doc_type == "melted2" || doc_type == "cash" || doc_type == "coin")
      )
        transfer =
        "&transfer=" +
        document
        .getElementById("txt_receiver_search")
        .getAttribute("data-user-id");

      var operation = "";
      var other = "";
      switch (doc_type) {
        case "melted":
          operation = document
            .querySelector('input[name="fav_language_melted"]:checked')
            .getAttribute("mark");
          var weight = document.getElementById("txt_melted_weight").value;
          var carat = document.getElementById("txt_melted_carat").value;
          var fee_type = document.getElementById("cbo_melted_type").value;
          // var fee = document
          //   .getElementById("txt_melted_fee")
          //   .value.toString()
          //   .replace(/,/g, "");
          console.log(1);

          var dsc = document.getElementById("txt_melted_dsc").value;

          switch (operation) {
            case "buy":
            case "sell":
              other =
                "&amount=" +
                weight +
                "&carat=" +
                carat +
                "&fee_type=" +
                fee_type +
                "&fee=" +
                fee +
                "&dsc=" +
                dsc;
              break;
            case "buy_other":
            case "sell_other":
              other =
                "&amount=" +
                weight +
                "&carat=" +
                carat +
                "&fee_type=" +
                fee_type +
                "&fee=" +
                fee +
                "&dsc=" +
                dsc;
              break;
          }

          break;
        case "melted2":
          operation = document
            .querySelector('input[name="fav_language_melted2"]:checked')
            .getAttribute("mark");
          var weight = document.getElementById("txt_melted2_weight").value;
          var carat = document.getElementById("txt_melted2_carat").value;
          var lab = document.getElementById("txt_melted2_lab").value;
          var stigma = document.getElementById("txt_melted2_stigma").value;
          var dsc = document.getElementById("txt_melted2_dsc").value;

          var weight2 = document.getElementById("txt_melted2_weight2").value;
          var carat2 = document.getElementById("txt_melted2_carat2").value;
          var dsc2 = document.getElementById("txt_melted2_dsc2").value;

          var weight3 = document.getElementById(
            "txt_melted2_cond_weight"
          ).value;
          var lab3 = document.getElementById("cbo_melted2_cond_lab").value;
          var stigma3 = document.getElementById(
            "txt_melted2_cond_stigma"
          ).value;
          var dsc3 = document.getElementById("txt_melted2_cond_dsc").value;

          switch (operation) {
            case "deposit":
            case "withdrawal":
              other =
                "&amount=" +
                weight +
                "&carat=" +
                carat +
                "&lab=" +
                lab +
                "&stigma=" +
                stigma +
                "&dsc=" +
                dsc;
              break;
            case "deposit_other":
            case "withdrawal_other":
              other =
                "&amount=" + weight2 + "&carat=" + carat2 + "&dsc=" + dsc2;
              break;
            case "deposit_conditional":
            case "withdrawal_conditional":
              other =
                "&amount=" +
                weight3 +
                "&lab=" +
                lab3 +
                "&stigma=" +
                stigma3 +
                "&dsc=" +
                dsc3;
              break;
          }

          break;
        case "cash":
          operation = document
            .querySelector('input[name="fav_language_cash"]:checked')
            .getAttribute("mark");
          var fee = document
            .getElementById("txt_cash_fee")
            .value.toString()
            .replace(/,/g, "");
          var discount = document.getElementById("txt_cash_discount").value;
          var dsc = document.getElementById("txt_cash_dsc").value;

          other = "&amount=" + fee + "&discount=" + discount + "&dsc=" + dsc;

          break;
        case "coin":
          operation = document
            .querySelector('input[name="fav_language_coin"]:checked')
            .getAttribute("mark");
          var coin_type = document.getElementById("cbo_coin_type").value;
          var number = document.getElementById("txt_coin_number").value;
          var fee = document
            .getElementById("txt_coin_fee")
            .value.toString()
            .replace(/,/g, "");
          var all_fee = document
            .getElementById("txt_coin_all_fee")
            .value.toString()
            .replace(/,/g, "");
          var dsc = document.getElementById("txt_coin_dsc").value;

          var coin_type2 = document.getElementById("cbo_coin_type2").value;
          var number2 = document.getElementById("txt_coin_number2").value;
          var dsc2 = document.getElementById("txt_coin_dsc2").value;

          switch (operation) {
            case "buy":
            case "sell":
              other =
                "&coin_type=" +
                coin_type +
                "&amount=" +
                number +
                "&fee=" +
                fee +
                "&all_fee=" +
                all_fee +
                "&dsc=" +
                dsc;
              break;
            case "deposit":
            case "withdrawal":
              other =
                "&coin_type=" +
                coin_type2 +
                "&amount=" +
                number2 +
                "&dsc=" +
                dsc2;
              break;
          }

          break;
        case "bank":
          operation = document
            .querySelector('input[name="fav_language_bank"]:checked')
            .getAttribute("mark");
          var bank_account1 =
            document.getElementById("cbo_bank_account1").value;
          var bank_account2 =
            document.getElementById("cbo_bank_account2").value;
          var fee = document
            .getElementById("txt_bank_fee")
            .value.toString()
            .replace(/,/g, "");

          switch (operation) {
            case "receive":
            case "deposit":
            case "payment":
            case "withdrawal":
              other = "&bank_account1=" + bank_account1 + "&amount=" + fee;
              break;
            case "withdrawal_and_deposit":
              other =
                "&bank_account1=" +
                bank_account1 +
                "&bank_account2=" +
                bank_account2 +
                "&amount=" +
                fee;
              break;
          }

          break;
        case "convert":
          operation = document
            .querySelector('input[name="fav_language_money"]:checked')
            .getAttribute("mark");
          var weight = document.getElementById("txt_money_weight").value;
          var carat = document.getElementById("txt_money_carat").value;
          var fee_type = document.getElementById("cbo_money_type").value;
          var fee = document
            .getElementById("txt_money_fee")
            .value.toString()
            .replace(/,/g, "");

          other =
            "&amount=" +
            weight +
            "&carat=" +
            carat +
            "&fee_type=" +
            fee_type +
            "&amount=" +
            fee;
          break;
      }

      const url =
        "https://trade.faragold.ir/panel.php?document&track=" +
        doc_track +
        "&number=" +
        user_id +
        "&date=" +
        doc_date +
        "&type=" +
        doc_type +
        "&operation=" +
        operation +
        other +
        transfer;
      console.log(url);
      try {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          if (xmlHttp.responseText == "success") {
            // alert("درخواست شما با موفقیت ثبت شد.");

            if (return_status == 0) {
              // formal calender
              let response = await fetch(
                "https://trade.faragold.ir/panel.php?update", {
                  method: "GET",
                }
              );
              const data = await response.json();
              // document.getElementById("txt_doc_date").value =
              //   "<?php echo $formalcalender; ?>";
              document.getElementById("txt_doc_date").value =
                data.formalcalender;

              reset_form();
              display_transactions();
            } else {
              window.top.location.reload();
            }
          }
        }
        // /////////////////////////////////

        // bia inja Reset Sandogh etelaat
        tableBody_1.innerHTML = "";
        tableBody_2.innerHTML = "";
      } catch {
        alert("مشکلی در ثبت درخواست رخ داد");
      }
    }

    function reset_form() {
      var txt_user = document.getElementById("txt_user_search");
      // txt_user.value = "";
      // txt_user.setAttribute("data-user-id", "");
      if (txt_user.getAttribute("data-user-id") != null)
        onComboBoxIndexChanged(txt_user.getAttribute("data-user-id"));

      document.getElementById("chk_transfer").checked = false;
      transfer_checked_changed();
      document.getElementById("txt_receiver_search").value = "";
      document
        .getElementById("txt_receiver_search")
        .setAttribute("data-user-id", "");

      // document.getElementById('lbl_remaind_cash').innerHTML = "";
      // document.getElementById('lbl_remaind_melted').innerHTML = "";
      // document.getElementById('lbl_remaind_bankcoin1').innerHTML = "";
      // document.getElementById('lbl_remaind_bankcoin2').innerHTML = "";
      // document.getElementById('lbl_remaind_bankcoin3').innerHTML = "";
      // document.getElementById('lbl_remaind_nonbankcoin1').innerHTML = "";
      // document.getElementById('lbl_remaind_nonbankcoin2').innerHTML = "";
      // document.getElementById('lbl_remaind_nonbankcoin3').innerHTML = "";

      document.getElementById("txt_doc_num").value = "";
      document.getElementById("rb_buy").checked = true;
      handleChangeDocumentType();
      document.getElementById("txt_doc_date").value = "";
      update_date();

      document.getElementById("txt_melted_weight").value = "";
      document.getElementById("txt_melted2_carat").value = "750";
      document.getElementById("cbo_melted_type").value = "option1";
      document.getElementById("txt_melted_fee").value = "";
      document.getElementById("txt_melted_dsc").value = "";
      document.getElementById("txt_melted_all_fee").value = "";
      document.getElementById("txt_melted_750").value = "";

      document.getElementById("txt_melted2_weight").value = "";
      document.getElementById("txt_melted2_lab").value = "";
      document.getElementById("txt_melted2_stigma").value = "";
      document.getElementById("txt_melted2_dsc").value = "";

      document.getElementById("txt_melted2_weight2").value = "";
      document.getElementById("txt_melted2_carat2").value = "750";
      document.getElementById("txt_melted2_dsc2").value = "";

      document.getElementById("txt_melted2_cond_weight").value = "";
      document.getElementById("cbo_melted2_cond_lab").value = "";
      document.getElementById("txt_melted2_cond_stigma").value = "";
      document.getElementById("txt_melted2_cond_dsc").value = "";
      document.getElementById("txt_melted2_750").value = "";

      document.getElementById("txt_cash_fee").value = "";
      document.getElementById("txt_cash_discount").value = "";
      document.getElementById("txt_cash_dsc").value = "";

      document.getElementById("cbo_coin_type").value = "";
      document.getElementById("txt_coin_number").value = "";
      document.getElementById("txt_coin_fee").value = "";
      document.getElementById("txt_coin_all_fee").value = "";
      document.getElementById("txt_coin_dsc").value;

      document.getElementById("cbo_coin_type2").value = "";
      document.getElementById("txt_coin_number2").value = "";
      document.getElementById("txt_coin_dsc2").value = "";

      document.getElementById("cbo_bank_account1").value = "";
      document.getElementById("cbo_bank_account2").value = "";
      document.getElementById("txt_bank_fee").value = "";

      document.getElementById("btn_save").value = "ثبت";
      document.getElementById("btn_save_return").style.display = "none";
    }

    function transfer_checked_changed() {
      var checkbox = document.getElementById("chk_transfer");
      if (checkbox.checked) {
        document.getElementById("pnl_receiver").style.display = "block";
      } else {
        document.getElementById("pnl_receiver").style.display = "none";
      }
    }
  </script>

  <script>
    document
      .getElementById("btn_save")
      .addEventListener("click", function() {
        save_document(0);
      });

    document
      .getElementById("btn_save_return")
      .addEventListener("click", function() {
        // save_document(1);
        reset_form();
      });
  </script>

  <script>
    function renderTable(btn, page, table_name, itemsPerPage) {
      $("#nav button").removeClass("active");
      if (btn != null) btn.classList.add("active");
      else $("#nav button:first").addClass("active");

      let dataArray = Object.values(data_transaction);
      if (data_transaction.length == 0) return;

      let startIndex = (page - 1) * itemsPerPage;
      let endIndex = startIndex + itemsPerPage;
      let currentPageData = dataArray.slice(startIndex, endIndex);

      let table = $("#" + table_name);
      table.empty();

      // Add table header
      let thead = $("<thead class='thead-light'>");
      let tr = $("<tr>");

      let th0 = $("<th>");
      th0.text("ویرایش");
      tr.append(th0);

      let cols = Object.keys(data_transaction[0]);
      $.each(cols, function(j, col) {
        if (get_farsi_name(col) != "") {
          let th = $("<th>");
          th.text(get_farsi_name(col));
          tr.append(th);
        } else if (col == "wallet") {
          let th = $("<th>");
          th.text("جمع مالی");
          tr.append(th);

          th = $("<th>");
          th.text("جمع طلایی");
          tr.append(th);
        }
      });

      let th10 = $("<th>");
      th10.text("حذف");
      tr.append(th10);

      thead.append(tr);
      table.append(thead);

      let tbody = $("<tbody>");
      $.each(currentPageData, function(i, row) {
        var color =
          row.color == "green" ?
          "#e5fde5" :
          row.color == "red" ?
          "#fdeded" :
          "#eceaea";
        let tr = $("<tr style='background-color:" + color + "'>");

        let vals = Object.values(row);

        let td0 = $("<td>");
        td0.append(
          "<a href='#doc_main_box'><img src='assets/edit-icon.png' style='width: 18px; cursor: pointer; margin-right: 10px;' onclick='edit_transaction(" +
          vals[3] +
          ")'></a>"
        );
        tr.append(td0);

        $.each(vals, function(k, elem) {
          if (get_farsi_name(cols[k]) != "") {
            let td = $("<td>");
            if (cols[k] == "user" || cols[k] == "maker")
              td = $("<td class='fontsize10'>");
            td.text(elem);
            tr.append(td);
          } else if (cols[k] == "wallet") {
            let td = $("<td>");
            td.text(elem[0].cash);
            tr.append(td);

            td = $("<td>");
            td.text(elem[0].melted);
            tr.append(td);
          }
        });

        let td10 = $("<td>");
        td10.append(
          "<img src='assets/delete.png' style='width: 18px; cursor: pointer; margin-right: 10px;' onclick='delete_transaction(" +
          vals[3] +
          ")'>"
        );
        tr.append(td10);

        tbody.append(tr);
      });

      table.append(tbody);
    }

    function get_farsi_name(name) {
      switch (name) {
        case "date":
          return "تاریخ";
        case "time":
          return "ساعت";
        case "user":
          return "کاربر";
        case "type":
          return "نوع تراکنش";
        case "amount":
          return "مقدار";
        case "price":
          return "فی";
        case "equal":
          return "مبلغ کل";
        case "maker":
          return "ایجاد کننده";
        case "desplus":
          return "مشخصات";
        case "description":
          return "توضیحات";
        default:
          return "";
      }
    }

    let data_transaction = [];

    function display_transactions() {
      var itemsPerPage = 10;
      var user_id = document
        .getElementById("txt_user_search")
        .getAttribute("data-user-id");

      var cbo_transaction_type = document.getElementById(
        "cbo_transaction_type"
      );
      var selectedIndex = cbo_transaction_type.selectedIndex;
      var selectedOption = cbo_transaction_type.options[selectedIndex].value;

      var date_from = document.getElementById("txt_date_from");
      var date_to = document.getElementById("txt_date_to");
      var filter_date = "&date_from=" + date_from + "date_to=" + date_to;

      let url =
        "https://trade.faragold.ir/panel.php?list_transactions" +
        "&filter=" +
        selectedOption +
        filter_date;
      if (user_id != "" && user_id != null)
        url =
        "https://trade.faragold.ir/panel.php?list_transactions=" +
        user_id +
        "&filter=" +
        selectedOption +
        filter_date;

      data_transaction = get_data(url);

      let container = $("#pnl_transactions");
      container.empty();
      let table = $(
        "<table id='tbl_transactions' class='table' style='border-top-left-radius: 0; border-top-right-radius: 0;'>"
      );
      let pager = $("<div id='nav'></div>");

      const keys = Object.keys(data_transaction);
      const totalPages = Math.ceil(keys.length / itemsPerPage);
      for (i = 0; i < totalPages; i++) {
        var pageNum = i + 1;
        var table_name = "tbl_transactions";
        pager.append(
          `<button type="button" class='btn_pager' onclick='renderTable(this, ${pageNum},"${table_name}",${itemsPerPage});'>${pageNum}</button>`
        );
      }

      container.append(table);
      container.append(pager);

      renderTable(null, 1, "tbl_transactions", itemsPerPage);
    }

    display_transactions();
  </script>

  <script>
    function edit_transaction(track) {
      reset_form();

      const itemWithTrack = data_transaction.filter(
        (item) => item.track === track
      )[0];
      console.log(itemWithTrack);

      document.getElementById("btn_save").value = "ویرایش سند";
      document.getElementById("btn_save_return").style.display = "inline";

      document.getElementById("txt_user_search").value =
        itemWithTrack.form_name1;
      document
        .getElementById("txt_user_search")
        .setAttribute("data-user-id", itemWithTrack.form_number1);
      onComboBoxIndexChanged(
        document
        .getElementById("txt_user_search")
        .getAttribute("data-user-id")
      );

      filterDropdown();

      // document.getElementById('lbl_remaind_cash').innerHTML = itemWithTrack.box.cash;
      // document.getElementById('lbl_remaind_melted').innerHTML = itemWithTrack.box.melted;
      // document.getElementById('lbl_remaind_bankcoin1').innerHTML = itemWithTrack.box.bankcoin1;
      // document.getElementById('lbl_remaind_bankcoin2').innerHTML = itemWithTrack.box.bankcoin2;
      // document.getElementById('lbl_remaind_bankcoin3').innerHTML = itemWithTrack.box.bankcoin3;
      // document.getElementById('lbl_remaind_nonbankcoin1').innerHTML = itemWithTrack.box.nonbankcoin1;
      // document.getElementById('lbl_remaind_nonbankcoin2').innerHTML = itemWithTrack.box.nonbankcoin2;
      // document.getElementById('lbl_remaind_nonbankcoin3').innerHTML = itemWithTrack.box.nonbankcoin3;

      document.getElementById("txt_doc_num").value = itemWithTrack.track;
      if (itemWithTrack.form_type == "inside")
        document.getElementById("rb_buy").checked = true;
      else document.getElementById("rb_sell").checked = true;
      handleChangeDocumentType();
      document.getElementById("txt_doc_date").value =
        itemWithTrack.formalcalender;

      var tab_name = "";

      switch (itemWithTrack.form_type2) {
        case "melted":
          tab_name = "#melted-tab";

          if (itemWithTrack.form_operation == "buy")
            document.getElementById("rb_buy").checked = true;
          else if (itemWithTrack.form_operation == "sell")
            document.getElementById("rb_sell").checked = true;
          else if (itemWithTrack.form_operation == "buy_other")
            document.getElementById("rb_buy_other").checked = true;
          else if (itemWithTrack.form_operation == "sell_other")
            document.getElementById("rb_sell_other").checked = true;

          switch (itemWithTrack.form_operation) {
            case "buy":
            case "sell":
              document.getElementById("txt_melted_weight").value =
                itemWithTrack.form_amount;
              document.getElementById("txt_melted_carat").value =
                itemWithTrack.form_carat;
              document.getElementById("cbo_melted_type").value =
                itemWithTrack.form_melted_type;
              // document.getElementById("txt_melted_fee").value =
              //   itemWithTrack.form_fee
              //   .toString()
              //   .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              console.log(1);

              document.getElementById("txt_melted_dsc").value =
                itemWithTrack.description;
              document.getElementById("txt_melted_all_fee").value =
                itemWithTrack.form_fee_all
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              document.getElementById("txt_melted_750").value =
                itemWithTrack.form_convert750;
              break;
            case "buy_other":
            case "sell_other":
              break;
          }

          break;
        case "melted2":
          tab_name = "#melted-tab2";

          if (itemWithTrack.form_operation == "deposit")
            document.getElementById("rb_put_melted").checked = true;
          else if (itemWithTrack.form_operation == "withdrawal")
            document.getElementById("rb_take_melted").checked = true;
          else if (itemWithTrack.form_operation == "deposit_other")
            document.getElementById("rb_put_other").checked = true;
          else if (itemWithTrack.form_operation == "withdrawal_other")
            document.getElementById("rb_take_other").checked = true;
          else if (itemWithTrack.form_operation == "deposit_conditional")
            document.getElementById("rb_put_cond_melted").checked = true;
          else if (itemWithTrack.form_operation == "withdrawal_conditional")
            document.getElementById("rb_take_cond_melted").checked = true;

          var chk_transfer = document.getElementById("chk_transfer");
          chk_transfer.checked = itemWithTrack.form_name2 != "";
          transfer_checked_changed();

          document.getElementById("txt_receiver_search").value =
            itemWithTrack.form_name2;
          document
            .getElementById("txt_receiver_search")
            .setAttribute("data-user-id", itemWithTrack.form_number2);

          switch (itemWithTrack.form_operation) {
            case "deposit":
            case "withdrawal":
              document.getElementById("txt_melted2_weight").value =
                itemWithTrack.form_amount;
              document.getElementById("txt_melted2_carat").value =
                itemWithTrack.form_carat;
              document.getElementById("txt_melted2_lab").value =
                itemWithTrack.form_lab;
              document.getElementById("txt_melted2_stigma").value =
                itemWithTrack.form_stigma;
              document.getElementById("txt_melted2_dsc").value =
                itemWithTrack.description;
              document.getElementById("txt_melted2_750").value =
                itemWithTrack.form_convert750;
              break;
            case "deposit_other":
            case "withdrawal_other":
              document.getElementById("txt_melted2_weight2").value =
                itemWithTrack.form_amount;
              document.getElementById("txt_melted2_carat2").value =
                itemWithTrack.form_carat;
              document.getElementById("txt_melted2_dsc2").value =
                itemWithTrack.description;
              break;
            case "deposit_conditional":
            case "withdrawal_conditional":
              document.getElementById("txt_melted2_cond_weight").value =
                itemWithTrack.form_amount;
              document.getElementById("cbo_melted2_cond_lab").value =
                itemWithTrack.form_lab;
              document.getElementById("txt_melted2_cond_stigma").value =
                itemWithTrack.form_stigma;
              document.getElementById("txt_melted2_cond_dsc").value =
                itemWithTrack.description;
              break;
          }

          break;
        case "cash":
          tab_name = "#cash-tab";

          document.getElementById("txt_cash_fee").value =
            itemWithTrack.form_amount
            .toString()
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          document.getElementById("txt_cash_discount").value =
            itemWithTrack.form_discount;
          document.getElementById("txt_cash_dsc").value =
            itemWithTrack.description;

          var chk_transfer = document.getElementById("chk_transfer");
          chk_transfer.checked = itemWithTrack.form_name2 != "";
          transfer_checked_changed();

          document.getElementById("txt_receiver_search").value =
            itemWithTrack.form_name2;
          document
            .getElementById("txt_receiver_search")
            .setAttribute("data-user-id", itemWithTrack.form_number2);

          break;
        case "coin":
          tab_name = "#coin-tab";

          if (itemWithTrack.form_operation == "buy")
            document.getElementById("rb_buy").checked = true;
          else if (itemWithTrack.form_operation == "sell")
            document.getElementById("rb_sell").checked = true;
          else if (itemWithTrack.form_operation == "deposit")
            document.getElementById("rb_put_coin").checked = true;
          else if (itemWithTrack.form_operation == "withdrawal")
            document.getElementById("rb_take_coin").checked = true;

          handleCoinActionChange();

          var chk_transfer = document.getElementById("chk_transfer");
          chk_transfer.checked = itemWithTrack.form_name2 != "";
          transfer_checked_changed();

          document.getElementById("txt_receiver_search").value =
            itemWithTrack.form_name2;
          document
            .getElementById("txt_receiver_search")
            .setAttribute("data-user-id", itemWithTrack.form_number2);

          switch (itemWithTrack.form_operation) {
            case "buy":
            case "sell":
              document.getElementById("cbo_coin_type").value =
                itemWithTrack.form_type_coin;
              document.getElementById("txt_coin_number").value =
                itemWithTrack.form_amount;
              document.getElementById("txt_coin_fee").value =
                itemWithTrack.form_fee
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              document.getElementById("txt_coin_all_fee").value =
                itemWithTrack.form_fee_all
                .toString()
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              document.getElementById("txt_coin_dsc").value =
                itemWithTrack.description;
              break;
            case "deposit":
            case "withdrawal":
              document.getElementById("cbo_coin_type2").value =
                itemWithTrack.form_type_coin;
              document.getElementById("txt_coin_number2").value =
                itemWithTrack.form_amount;
              document.getElementById("txt_coin_dsc2").value =
                itemWithTrack.description;
              break;
          }

          break;
        case "bank":
          tab_name = "#bank-tab";

          if (itemWithTrack.form_operation == "receive")
            document.getElementById("rb_put_melted").checked = true;
          else if (itemWithTrack.form_operation == "deposit")
            document.getElementById("rb_take_melted").checked = true;
          else if (itemWithTrack.form_operation == "payment")
            document.getElementById("rb_put_other").checked = true;
          else if (itemWithTrack.form_operation == "withdrawal")
            document.getElementById("rb_take_other").checked = true;
          else if (itemWithTrack.form_operation == "convert")
            document.getElementById("rb_put_cond_melted").checked = true;

          // var bank_account1 = document.getElementById('cbo_bank_account1').value;
          // var bank_account2 = document.getElementById('cbo_bank_account2').value;
          // var fee = document.getElementById('txt_bank_fee').value;

          switch (itemWithTrack.form_operation) {
            case "receive":
            case "deposit":
            case "payment":
            case "withdrawal":
              // other = "&bank_account1=" + bank_account1 + "&amount=" + fee;
              break;
            case "withdrawal_and_deposit":
              // other = "&bank_account1=" + bank_account1 + "&bank_account2=" + bank_account2 + "&amount=" + fee;
              break;
          }

          break;
        case "convert":
          tab_name = "#money-tab";
          // operation = document.querySelector('input[name="fav_language_money"]:checked').getAttribute('mark');
          // var weight = document.getElementById('txt_money_weight').value;
          // var carat = document.getElementById('txt_money_carat').value;
          // var fee_type = document.getElementById('cbo_money_type').value;
          // var fee = document.getElementById('txt_money_fee').value;

          // other = "&amount=" + weight + "&carat=" + carat + "&fee_type=" + fee_type + "&amount=" + fee;
          break;
      }

      $(".nav-link").removeClass("active");
      $(tab_name).addClass("active");

      $(".tab-pane").removeClass("show active");
      var targetPane = "#" + $(tab_name).attr("data-toggle");
      $(targetPane).addClass("show active");

      if (
        targetPane == "#pnl_document_melted2" ||
        targetPane == "#pnl_document_cash" ||
        targetPane == "#pnl_document_coin"
      ) {
        document.getElementById("pnl_transfer").style.display = "block";
      } else {
        document.getElementById("pnl_transfer").style.display = "none";
      }
    }

    function delete_transaction(track) {
      var result = confirm("آیا از حذف این تراکنش اطمینان دارید؟");
      if (result) {
        const url =
          "https://trade.faragold.ir/panel.php?delete_transaction=" + track;
        try {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open("GET", url, false);
          xmlHttp.send(null);
          if (xmlHttp.status === 200) {
            if (xmlHttp.responseText == "success") {
              // alert("سند مورد نظر با موفقیت حذف شد. با تشکر از تیم پشتیبانی");
              display_transactions();
              reset_form();
            }
          }
        } catch {
          alert("مشکلی در ثبت درخواست رخ داد");
        }
      }
    }
  </script>

  <script>
    function show_more_remaind() {
      document.getElementById("pnl_more_remaind").style.display = "block";
      document.getElementById("btn_more").style.display = "none";
      document.getElementById("btn_less").style.display = "block";
    }

    function show_less_remaind() {
      document.getElementById("pnl_more_remaind").style.display = "none";
      document.getElementById("btn_more").style.display = "block";
      document.getElementById("btn_less").style.display = "none";
    }
  </script>

  <script>
    function update_melted_750() {
      var amount = document.getElementById("txt_melted_weight").value;
      var carat = document.getElementById("txt_melted_carat").value;
      // var fee = document
      //   .getElementById("txt_melted_fee")
      //   .value.replace(/,/g, "");

      console.log(1);
      var _750 = (amount * carat) / 750;
      var gram = Number(fee) / 4.3318;
      var fee_all = (
        Number(((gram * _750) / 1000).toFixed(0)) * 1000
      ).toFixed(0);

      var fee_all_number = parseFloat(
        fee_all.replace(/,/g, "")
      ).toLocaleString();
      document.getElementById("txt_melted_all_fee").value = fee_all_number;
      document.getElementById("txt_melted_750").value = _750.toFixed(2);
    }

    function update_melted2_750() {
      var amount = document.getElementById("txt_melted2_weight").value;
      var carat = document.getElementById("txt_melted2_carat").value;

      var _750 = (amount * carat) / 750;
      document.getElementById("txt_melted2_750").value = _750.toFixed(2);
    }

    function update_melted22_750() {
      var amount = document.getElementById("txt_melted2_weight2").value;
      var carat = document.getElementById("txt_melted2_carat2").value;

      var _750 = (amount * carat) / 750;
      document.getElementById("txt_melted2_750_2").value = _750.toFixed(2);
    }

    function update_coin_fee_all() {
      var num = document.getElementById("txt_coin_number").value;
      var fee = document
        .getElementById("txt_coin_fee")
        .value.replace(/,/g, "");

      var fee_all = num * fee;
      var fee_all_number = parseFloat(
        fee_all.toFixed(0).replace(/,/g, "")
      ).toLocaleString();

      document.getElementById("txt_coin_all_fee").value = fee_all_number;
    }

    function addSeparator(inputElement) {
      if (inputElement && inputElement.value !== undefined) {
        let numericValue = parseFloat(inputElement.value.replace(/,/g, ""));

        if (!isNaN(numericValue)) {
          inputElement.value = numericValue.toLocaleString();
        }
      }
    }

    function onTransactionTypechanged() {
      display_transactions();
    }

    function showLabDropdown() {
      document.getElementById("cbo_melted2_lab").style.display = "block";
    }

    function filterLabDropdown() {
      var input, filter, items, i;
      input = document.getElementById("txt_melted2_lab");
      filter = input.value.toUpperCase();
      items = document.querySelectorAll(".dropdown-list-item3");

      for (i = 0; i < items.length; i++) {
        if (items[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
          items[i].style.display = "";
        } else {
          items[i].style.display = "none";
        }
      }
    }

    function selectItemLab(item) {
      document.querySelector(".dropdown3 input").value = item.innerHTML;
      //   document.querySelector('.dropdown3 input').setAttribute("data-user-id", item.getAttribute("data-user-id"));

      document.getElementById("cbo_melted2_lab").style.display = "none";
    }

    function bind_combo_lab() {
      var d = new Date();
      const url =
        "https://trade.faragold.ir/panel.php?update&r=" + d.toLocaleString();
      try {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        if (xmlHttp.status === 200) {
          try {
            var data = JSON.parse(xmlHttp.responseText)["separated"];
            var labs = data.labs;

            filter = $("#txt_melted2_lab");
            let dataArray = Object.values(labs);
            let filteredArray = dataArray.filter(function(row) {
              return row.name
                .toLowerCase()
                .includes(filter.val().toLowerCase());
            });

            var cbo_melted2_lab = document.getElementById("cbo_melted2_lab");
            $.each(filteredArray, function(j, row) {
              var newItem = document.createElement("div");
              newItem.className = "dropdown-list-item dropdown-list-item3";
              newItem.innerHTML = row.name;
              // newItem.setAttribute("data-user-id", row.number);
              newItem.onclick = function() {
                selectItemLab(this);
              };
              cbo_melted2_lab.appendChild(newItem);
            });
          } catch {}
        }
      } catch {}
    }

    bind_combo_lab();
  </script>

  <script>
    function onCoinTypeChanged() {
      var value = document.getElementById("cbo_coin_type").value;

      if (document.getElementById("txt_doc_num").value == "") {
        if (document.getElementById("rb_buy").checked) {
          if (value == "bankcoin1")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_bankcoin1_buy").innerHTML;
          else if (value == "bankcoin2")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_bankcoin2_buy").innerHTML;
          else if (value == "bankcoin3")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_bankcoin3_buy").innerHTML;
          else if (value == "nonbankcoin1")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_nonbankcoin1_buy").innerHTML;
          else if (value == "nonbankcoin2")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_nonbankcoin2_buy").innerHTML;
          else if (value == "nonbankcoin3")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_nonbankcoin3_buy").innerHTML;
        } else {
          if (value == "bankcoin1")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_bankcoin1_sell").innerHTML;
          else if (value == "bankcoin2")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_bankcoin2_sell").innerHTML;
          else if (value == "bankcoin3")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_bankcoin3_sell").innerHTML;
          else if (value == "nonbankcoin1")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_nonbankcoin1_sell").innerHTML;
          else if (value == "nonbankcoin2")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_nonbankcoin2_sell").innerHTML;
          else if (value == "nonbankcoin3")
            document.getElementById("txt_coin_fee").value =
            document.getElementById("lbl_nonbankcoin3_sell").innerHTML;
        }
      }
    }
  </script>

  <script>
    function display_report_wallet() {
      let url = "https://trade.faragold.ir/panel.php?report_wallet";
      var data = get_data(url);

      let pnl_creditors = $("#pnl_creditors");
      let pnl_debtors = $("#pnl_debtors");

      pnl_creditors.empty();
      pnl_debtors.empty();

      bind_wallet_table(pnl_creditors, pnl_debtors, data);
    }

    function bind_wallet_header(table) {
      let thead = $("<thead class='thead-light2'>");
      let tr = $("<tr>");

      let th0 = $("<th>");
      th0.text("نام");
      tr.append(th0);

      let th1 = $("<th>");
      th1.text("مقدار");
      tr.append(th1);

      thead.append(tr);
      table.append(thead);
    }

    function bind_wallet_table(pnl_creditors, pnl_debtors, data) {
      $.each(data, function(i, row) {
        var color = "#019201";
        if (i.includes("creditors")) color = "#e50303";

        let div_header = $(
          "<div class='header_wallet' style='background-color: " +
          color +
          "'>"
        );
        div_header.text(get_wallet_header_name(i));

        let div_content = $("<td class='tab-content tab-content2'>");
        let tbl = $(
          "<table class='table' style='border-top-left-radius: 0; border-top-right-radius: 0;'>"
        );
        div_content.append(tbl);
        bind_wallet_header(tbl);

        let tbody = $("<tbody>");

        let vals = Object.values(row);
        $.each(vals, function(k, elem) {
          let tr = $("<tr>");

          let td = $("<td>");
          td.text(elem.name);
          tr.append(td);

          td = $("<td>");
          td.text(elem.amount);
          tr.append(td);

          tbody.append(tr);
        });

        tbl.append(tbody);

        if (i.includes("creditors")) {
          pnl_creditors.append(div_header);
          pnl_creditors.append(div_content);
        } else if (i.includes("debtors")) {
          pnl_debtors.append(div_header);
          pnl_debtors.append(div_content);
        }
      });
    }

    function get_wallet_header_name(name) {
      switch (name) {
        case "cash_creditors":
          return "لیست طلبکاران پولی";
        case "cash_debtors":
          return "لیست بدهکاران پولی";
        case "melted_creditors":
          return "لیست طلبکاران آبشده";
        case "melted_debtors":
          return "لیست بدهکاران آبشده";
        case "bankcoin1_creditors":
          return "لیست طلبکاران تمام سکه بانکی";
        case "bankcoin1_debtors":
          return "لیست بدهکاران تمام سکه بانکی";
        case "bankcoin2_creditors":
          return "لیست طلبکاران نیم سکه بانکی";
        case "bankcoin2_debtors":
          return "لیست بدهکاران نیم سکه بانکی";
        case "bankcoin3_creditors":
          return "لیست طلبکاران ربع سکه بانکی";
        case "bankcoin3_debtors":
          return "لیست بدهکاران ربع سکه بانکی";
        case "nonbankcoin1_creditors":
          return "لیست طلبکاران تمام سکه غیر بانکی";
        case "nonbankcoin1_debtors":
          return "لیست بدهکاران تمام سکه غیر بانکی";
        case "nonbankcoin2_creditors":
          return "لیست طلبکاران نیم سکه غیر بانکی";
        case "nonbankcoin2_debtors":
          return "لیست بدهکاران نیم سکه غیر بانکی";
        case "nonbankcoin3_creditors":
          return "لیست طلبکاران ربع سکه غیر بانکی";
        case "nonbankcoin3_debtors":
          return "لیست بدهکاران ربع سکه غیر بانکی";
        default:
          return "";
      }
    }

    display_report_wallet();
  </script>
  <script src="assets/inputSpaceText.js"></script>
</body>

</html>