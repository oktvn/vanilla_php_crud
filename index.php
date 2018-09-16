<?php include('server.php');

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $rec = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
    $record  = mysqli_fetch_array($rec);
    $name = $record['name'];
    $address = $record['address'];
    $id = $record['id'];

}
?>
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
    
<?php if(isset($_SESSION['msg'])) : ?>
    <div class="alert alert-success text-center" role="alert">
        <?php echo $_SESSION['msg']; ?>
        <?php unset($_SESSION['msg']); ?>
    </div>
<?php endif; ?>
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
            <?php while($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <a class="btn btn-default" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="#">Delete</a>
                </td>
            </tr>
            <?php } ?>

        </tbody>

    </table>
    </div>
    
    <!-- form -->
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" action="server.php">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $value; ?>" placeholder="Address">
              </div>
              <?php 
              if ($edit_state = false) : ?>
                  <button type="submit" name="save" class="btn btn-default">Save</button>
              <?php else : ?>
                  <button type="submit" name="update" class="btn btn-default">Update</button>
              <?php endif; ?>
            </form>
        </div>
    </div>

    
    
    
    </div>
</body>
</html>