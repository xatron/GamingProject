<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>

    body {

      background: #d9d9db !important;
    }
    .row{
    overflow: hidden;
}
.panel-group {
     margin-bottom: 0px;
}

.panel {
  border-bottom: 3px solid gray;
  border-left: 3px solid gray;
  border-top: 1px solid gray;
  border-right: 1px solid gray;
  border-radius: 10px;
}

.panel-bottom-margin{

  margin-bottom: 10px;


}


</style>
</head>

<body bgcolor="#E6E6FA">


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GamingProfile.Com</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Displayed Games <span class="sr-only">(current)</span></a></li>
        <li><a href="#">All Games</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> "username" <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Send Friendrequest</a></li>
            <li><a href="#">Save as Favorite</a></li>
            <li><a href="#">Block User</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Report fake information</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">"username" <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Your Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search User..">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')
