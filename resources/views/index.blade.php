<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foursquare Api</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('assets/web/css/main.css?v='.time()) }}">
</head>

<body>
    <div class="row">
        <div class="col-xs-6 col-md-2"><livewire:categories></div>
        <div class="col-xs-12 col-md-10"><livewire:places></div>
     </div>
</body>
</html>
