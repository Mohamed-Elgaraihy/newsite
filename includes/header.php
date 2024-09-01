<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Site - <?php echo $title ?> </title>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href='index.php'> Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href='array.php'> Simple Array & Printouts</a> </li>
        <li class="nav-item"> <a class="nav-link" href='forloop.php'> Simple For Loop</a> </li>
        <li class="nav-item"> <a class="nav-link" href='whiledowhileloop.php'> Simple While & Do While Loop</a> </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ifstatement.php">Simple If Statement</a></li>
            <li><a class="dropdown-item" href="switchstatement.php">Simple Switch Statement</a></li>
            <li><a class="dropdown-item" href="stringmanipulation.php">String Manipulation</a></li>
            <li><a class="dropdown-item" href="datemanipulation.php">Date and Time</a></li>
            <li><a class="dropdown-item" href="functions.php">User Defined Functions</a></li>
          </ul>
        </li>
      </ul>
      </div>
  </div>
</nav>
<div class="container">