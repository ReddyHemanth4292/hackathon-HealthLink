<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #eeeeee;
      margin: 0%;
    }

    .part {
      width: 50%;
      height: 100vh;
      float: left;

    }

    .part:first-child {
      background-color: rgb(190, 210, 239);
    }

    h3 {
      text-align: center;
      color: rgb(72, 69, 69);
      margin-top: 30vh;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-weight: 100;
      font-size: xxx-large;
    }

    p {
      text-align: center;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: larger;
      padding-left: 5%;
      padding-right: 5%;
      color: rgb(72, 69, 69);
    }

    button {
      background-color: #ffffff;

      border: 1px solid rgb(39, 110, 203);
      width: 20rem;
      height: 5rem;
      margin-left: auto;
      margin-right: auto;
      font-size: xx-large;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 7.5px;
    }

    button:hover {
      background-color: rgb(39, 110, 203);
      color: #ffffff;
    }

    button:active {
      color: black;
    }

    * {
      list-style: none;
    }


    a {
      text-decoration: none;
      outline: none;
      color: #444;
      font-size: larger;
    }

    a:hover {
      color: #444;
    }

    ul {
      margin-bottom: 0;
      padding-left: 0;
    }




    header {
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      position: relative;
      width: 100%;
      z-index: 999;
    }

    .row {
      display: flex;
    }

    header .header-nav {
      background-color: #FFF;
      width: 100%;
    }

    header .header-nav .nav-item ul li {
      float: left;
      font-family: "mouse-500", Arial, Helvetica, sans-serif;
      font-size: 16px;
      padding: 28px;
    }

    @media screen and (max-width: 998px) {
      header .header-nav .nav-item ul li {
        padding: 30px 18px;
      }
    }

    @media screen and (max-width: 767px) {
      header .header-nav .nav-item ul li {
        float: none;
        padding: 14px;
        border-top: 1px solid #CCC;
      }
    }

    header .header-nav .nav-img img {
      width: 200px;
      padding: 0px;
      margin-top: 21px;
    }

    @media screen and (max-width: 767px) {
      header .header-nav .nav-img img {
        margin-top: 0px;
        padding: 10px;
      }
    }

    @media screen and (max-width: 1199px) {
      header .header-nav .nav-img img {
        margin-left: 10px;
      }
    }

    header .header-nav .appoint {
      padding-top: 21px;
    }

    header .scroll-to-fixed-fixed {
      background-color: #FFF;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    .nav-item {
      margin-left: 30%;
    }
  </style>
</head>

<body>
  <header id="menu-jk">

    <div id="nav-head" class="header-nav">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-3  col-sm-12"
            style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important; font-weight: 400;">HealthLink
            <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                class="fas d-block d-md-none small-menu fa-bars"></i></a>
          </div>
          <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#about_us">About Us</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#contact_us">Contact Us</a></li>
              <li><a href="#logins">Logins</a></li>
            </ul>
          </div>
          <div class="col-sm-2 d-none d-lg-block appoint">
          </div>
        </div>

      </div>
    </div>
  </header>
  <div class="container">
    <div class="part">
      <h3>For <span style="color: rgb(70, 159, 70);">Organisations</span></h3>
      <p>Secure online platform that enables authorized personnel to manage different aspects of their operations while
        adhering to strict security protocols.</p><br>
      <button type="submit" id="myButton">Organisation Login</button>
    </div>
    <div class="part">
      <h3>For <span style="color: rgb(89, 148, 237);">Individuals</span></h3>
      <p>Grants authorized healthcare personnel access to a hospital's online platform or system for managing patient
        records, scheduling appointments.</p><br>
      <button type="submit" id="myIndButton">Individual Login</button>
    </div>
  </div>

  <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "index1.php";
    };
    document.getElementById("myIndButton").onclick = function () {
        location.href = "index2.php";
    };
</script>
</body>

</html>