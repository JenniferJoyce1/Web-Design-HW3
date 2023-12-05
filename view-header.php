<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?> </title>
    <link rel = "stylesheet" href = "bootstrap.min.css">
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    -->
  </head>
  <body>

   
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src= "data:image/png;base64,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">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: PaleVioletRed;" class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a style="color: PaleVioletRed;" class="nav-link" href="events.php">Events</a>
        </li>
          <li class="nav-item">
          <a style="color: PaleVioletRed;"  class="nav-link" href="attendees.php">Attendees</a>
        </li>
          <li class="nav-item">
          <a style="color: PaleVioletRed;"  class="nav-link" href="rsvps.php">RSVPS</a>
        </li>
          <li class="nav-item">
          <a style="color: PaleVioletRed;"  class="nav-link" href="guests.php">Guests</a>
         </li>
          <li class="nav-item">
          <a style="color: PaleVioletRed;"  class="nav-link" href="planners.php">Planners</a>
         </li>
          <li class="nav-item">
          <a style="color: PaleVioletRed;" class="nav-link" href="all-events-attendees.php">All Events Info</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
