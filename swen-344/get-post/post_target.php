<!DOCTYPE html>
<html>
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>SWEN 344 | Post Example</title>
    <link rel="stylesheet" type="text/css" href="../../assets/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/style.css">
  </head>
  <body>
    <div class="ui center aligned grid">
      <div class="column">
        <h2 class="ui blue image header">
          <div class="content">
            Post SWEN 344 Example
          </div>
        </h2>
        <div class="ui stacked segment">
						<p>First Name: <?php echo $_POST['fname']; ?></p>
					  <p>Last Name: <?php echo $_POST['lname']; ?></p>
						<p>State: <?php echo $_POST['state']; ?></p>
						<p>Gender: <?php echo $_POST['gender']; ?></p>
        </div>
      </div>
    </div>
  </body>
</html>
