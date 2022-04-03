<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Case Management -- Error</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{url()}}/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url()}}/node_modules/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body class="skin-blue">
        <br/>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="alert alert-danger" role="alert">{{session('message')}}</div>
            </div>
        </div>
    </body>
</html>