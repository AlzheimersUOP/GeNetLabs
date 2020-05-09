<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GeNetLabs</title>

  <link rel="icon" href="img/logo/favicon.png" sizes="32x32" />
  <link rel="icon" href="img/logo/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="img/logo/favicon.png" />

  <meta name="description" content="GenetLabs focuses on covering topics related to microarray gene expression data and their analysis using computational methods">
  <meta name="keywords" content="genet, gene expression, microarray">

  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<style type="text/css">

  .detail-info{
    border: 1px solid gray;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
  }
  .quetion_icon_tag{
    position: absolute;
    top: 3px;
    left: 2px;    
  }
  .icon_background{
    position: absolute;
    top: -16px;
    left: 2px;    
    width: 35px;
    height: 38px;
    background-color: white;
  }
</style>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">
            <img src="img/logo/logo.png" alt="logo" style="width:115px; margin-top: -3px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->

  <!--Banner-->

    <div class="bg-color" style="min-height: 300px;">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">You may be looking at these links.</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!--/ Banner-->

  <section id="step_1" class="section-padding-index">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="icon_background">
            <i class="fa fa-link fa-2x quetion_icon_tag" aria-hidden="true" style="color: #5fcf80"></i>
          </div>
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt-manual h3_faq">GeNet Tool</h3>
              <p class="det-p-manual answer_faq"><a href="http://genet.genetlabs.com/" target="_blank">http://genet.genetlabs.com/</a></p>
            </hgroup>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="icon_background">
            <i class="fa fa-link fa-2x quetion_icon_tag" aria-hidden="true" style="color: #5fcf80"></i>
          </div>
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt-manual h3_faq">GeNet Tool Guide</h3>
              <p class="det-p-manual answer_faq"><a href="http://guides.genetlabs.com/" target="_blank">http://guides.genetlabs.com/</a></p>
            </hgroup>
          </div>
        </div>
      </div>            
    </div>
  </section>

<?php include 'footer.php';?>

</body>

</html>
