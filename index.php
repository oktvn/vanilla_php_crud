<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
    <div class="table-responsive well">

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>United States</td>
                <td>
                    <a class="btn btn-default" href="#">Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="#">Delete</a>
                </td>
            </tr>
        </tbody>

    </table>
    </div>
    
    <!-- form -->
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" action="./server.php">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

    
    
    
    </div>
</body>
</html>