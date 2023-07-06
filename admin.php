<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>How to Insert Form Data In Database using PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/stylelog.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Admin login</h2>
            </div>
           
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>                        
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
         <a href="index.html"><button>Next</button></a>
            </form>
        </div>
    </div>        
</div>
</body>
</html>

