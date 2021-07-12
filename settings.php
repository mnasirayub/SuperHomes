<?php require("connection.php");
session_start();
if (!isset($_SESSION["email"])) {
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v4.1.1" />
    <title>SuperHomes Dashboard</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.5/examples/dashboard/"
    />
    <script src="https://kit.fontawesome.com/d6fb912aa0.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* widgets styling start */
      .container {
        background: #f3f4f7;
        border-radius: 0px;
        padding: 20px;
      }

      .row .col {
        background-color: white !important;
      }

      .container .box {
        box-shadow: 3px 6px 12px rgba(0, 0, 0, 0.5);
        width: 100%;
        padding: 15px;
        border-radius: 0px;
        background: white;
      }

      .box:hover {
        cursor: pointer;
      }

      .box .icon {
        padding: 10px;
        border-radius: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70px;
      }

      .box1 .icon {
        background: rgba(96, 215, 154, 0.4);
        color: #0099e5;
      }

      .box2 .icon {
        background: rgba(215, 160, 96, 0.4);
        color: #f85a40;
      }

      .box3 .icon {
        background: rgba(122, 215, 96, 0.4);
        color: #0abf53;
      }

      .box4 .icon {
        background: rgba(229, 184, 62, 0.4);
        color: #fbb034;
      }
      .btn-outline-dark{
        border-radius: 0px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet" />
  </head>

  <body>
    <nav
      class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"
        >SuperHomes</a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-toggle="collapse"
        data-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <input
        class="form-control form-control-light w-100"
        type="text"
        placeholder="Search Ad"
        aria-label="Search"
      />
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#"><span data-feather="mail"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#"><span data-feather="bell"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">SuperHomes</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="dashboard()">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="sale()">
                  <span data-feather="map"></span>
                  Sale Ads
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="rent()">
                  <span data-feather="bookmark"></span>
                  Rent Ads
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="hot()">
                  <span data-feather="zap"></span>
                  Hot Ads
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="superHot()">
                  <span data-feather="feather"></span>
                  SuperHot Ads
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="feature()">
                  <span data-feather="award"></span>
                  Feature Ads
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="chat()">
                  <span data-feather="message-circle"></span>
                  Chat
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="messages()">
                  <span data-feather="message-square"></span>
                  Messages
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="agents()">
                  <span data-feather="users"></span>
                  Agents
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#" onclick="settings()">
                  <span data-feather="settings"></span>
                  Settings
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="logout()">
                  <span data-feather="log-out"></span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h3 class="h2">Settings</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <button
                type="button"
                class="btn btn-sm btn-outline-dark" onclick="adProperty()"
              >
                <span data-feather="plus"></span>
                Add Property
              </button>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="bootstrap/js/jquery.min.js"><\/script>'
        );
    </script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/navigations.js"></script>
  </body>
</html>
