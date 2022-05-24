<html>
<head>  
<title>List</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <!-- Scripts -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
   <body>
        <div class="col-1">
             <!-- <button type="button" onclick="{{ url('create') }}" style="float: right;">add</button> -->
             <button style="float: right;"  class="btn btn-primary" onclick='window.location.href="{{ url("create")}}"'> add </button>
        </div>           
        <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <?php $count = 0; ?>
                    @foreach ($users as $key => $user)
                    <?php $count ++ ; ?>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $count }} </th>
                                <td> {{ $user['name'] }} </td>
                                <td> {{ $user['age'] }} </td>
                                <td>
                                <form method="post" action="{{url('delete')}}">
                                  <button value="{{$key}}" type="submit"  name="id" class="btn btn-primary">delete</button>
                                 </form>
                                 <form method="post" action="{{url('edit')}}">
                                    <button value="{{$key}}" type="submit"  name="id" class="btn btn-primary">Update</button>
                                 </form>
                                </td>   
                            </tr>
                        </tbody>
                    @endforeach
        </table>
   </body>
</html>