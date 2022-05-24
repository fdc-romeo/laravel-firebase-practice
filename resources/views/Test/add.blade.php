<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Add</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <!-- Scripts -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
   <body>
        <?php echo isset($mess) ? $mess : ""; ?>
        <div class="col">
        <form action="{{url('add')}}" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                      <label for="inputEmail4">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                      <label for="inputPassword4">Age</label>
                      <input type="number" class="form-control" name="age" placeholder="Age">
                </div>
                <div class="form-group col-md-6">
                      <label for="inputFle">File</label>
                      <input type="file" class="form-control" name="image" placeholder="file">
                </div>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Add</button> 
            </div>
            </form>  
        </div>
   </body>
</html>