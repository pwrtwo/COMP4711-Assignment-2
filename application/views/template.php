<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <title>{pagetitle}</title>
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/mainView.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
    <header>
        {header}
    </header>
    <div id="container">
        {content}
    </div>
    <footer class="footer">
        <div class="card text-center">
         <div class="card-header">
           <ul class="nav nav-pills card-header-pills">
              <p>Page rendered in <strong>{elapsed_time}</strong> seconds. {ci_version}</p>
            </ul>
          </div>
        </div>
    </footer>
	</body>
</html>