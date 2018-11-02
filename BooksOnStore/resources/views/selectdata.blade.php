<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
        {{ csrf_field() }}
      <table border = 1>
         <tr>
              <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>Action</td>
         </tr>
         @foreach ($users as $user)
         <tr>
             <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td><a href = 'edit/{{ $user->id }}'>Edit</a>
                <a href = 'delete/{{ $user->id }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>