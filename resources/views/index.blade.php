<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Users Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
   <div class="container">
      <div style="float:right;">
      <a href="http://localhost/task/public/register"><button class="btn btn-success">Add User</button></a>
   </div>
      @if(Session::has('message'))
      <p class="alert {{Session::get('alert-class','alert-info')}}">{{Session::get('message')}}</p>
      @endif
      <table class="table table-striped">
         <thead>
         <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Location</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
            @foreach($users as $user)
            <tr>
               <td>{{ $user->id }}</td>
               <td>{{ $user->fname }}</td>
               <td>{{ $user->lname }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->mobile }}</td>
               <td>{{ $user->age }}</td>
               <td>{{ $user->dob }}</td>
               <td>{{ $user->location }}</td>
               
               <td><a href="http://localhost/task/public/register?id={{ $user->id }}">Edit</a></td>
            </tr>
            @endforeach
         </tbody>
      </table>
      {{ $users->links() }}
   </div>
</body>
</html>