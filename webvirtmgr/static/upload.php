<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ImageUploader</title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Image Uploader</h1>
    <form class="form-inline">
        <div class="form-group">
            <input id="source" type="text" name="name" class="form-control" style="width: 500px" placeholder="https://hogefuga/piyo.iso">
        </div>
        <button id="download" type="button" class="btn btn-default">Download</button>
    </form>

    <table class="table" id="dlqueue">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Source</th>
                <th scope="col">Progress</th>
            </tr>
        </thead>
        <tbody>
            <tr id="row-US3EwqW7"><th id="US3EwqW7">1</th><td id="title-US3EwqW7" style="width: 60%">http://ftp.jaist.ac.jp/pub/Linux/ubuntu-jp-cdimage/releases/16.04/ubuntu-ja-16.04-desktop-amd64.iso</td><td><div class="progress"><div id="progress-US3EwqW7" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div></div></td></tr></tbody>
    </table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/imageuploader.js"></script>
  </body>
</html>
