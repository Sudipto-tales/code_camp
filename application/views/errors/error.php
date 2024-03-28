<!DOCTYPE html>
<html>
<head>
  <title>Error Page</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .page_404 {
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
      background-size: cover;
      background-position: center;
      font-family: "Arvo", serif;
      color: #fff;
      text-align: center;
    }

    .page_404 h1 {
      font-size: 130px;
      color: aquamarine;
      margin-bottom: 300px; 
    }

    .page_404 h3 {
      font-size: 60px;
      margin-top: 10px;
      color: grey;

    }

    .page_404 p {
      font-size: 24px;
      margin-top: 30px; 
      margin-bottom: 40px;
      color: black;
    }

    .page_404 .button-container {
      margin-top: 30px; 
      margin-bottom: 40px;
      
    }

    .page_404 .button-container a {
      color: #ffffff !important;
      padding: 10px 20px;
      background: #39ac31;
      display: inline-block;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <section class="page_404">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 ">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="text-center">
              <h1>404</h1>
            </div>
            <div>
              <h3>Look like you're lost</h3>
            </div>
            <div class="button-container">
              <a href="<?= base_url() ?>home" class="link_404">Go to Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>