<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Event</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

</head>
<?php
include 'tool/php/payall_tool.php';
?>
<body>
<br/><br/>
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form">

                      <div class="row">
                        <br/><br/>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Card Holder Name</label>
                                    <input type="text" title="form" for="form" class="form-control" name="couponCode" />
                                </div>
                            </div>
                        </div>

                    <div class="form-group">
                      <br/><br/>
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" title="form" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon" title="form"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                              <br/><br/>
                                <label for="expityMonth">EXPIRY DATE</label>
                                <div class="col-xs-12 col-lg-12">
                                  <div class="col-xs-6 col-lg-6 ">
                                    <input type="text" class="form-control" title="form" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 ">
                                    <input type="text" class="form-control" title="forms" for="fosrm"  id="expityYear" placeholder="YY" required />
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                              <br/><br/>
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" title="form" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    </form>
                </div>
            </div>
              <ul class="nav nav-pills nav-stacked">
<br/><br/>
                  <li class="active"><a href="#"><span class="badge pull-right"><span class=""></span><?php echo $tot_get."€";?></span> Final Payment</a>
                  </li>

              </ul>
              <br/>  <br/>
              <a href="tool/buyall.php<?php echo"$payThat"; ?>" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
              <br/><br/>
              <a href="index.html" class="btn btn-danger btn-lg btn-block">Go back to the website</a>
          </div>
      </div>
  </div>
</body>

</html>
