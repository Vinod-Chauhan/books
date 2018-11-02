
@section('content')
                <h2> Book Category</h2>
                <div>
                    <form action="/submit" method="post">
                        {{ csrf_field() }}
                      
                        Name:  <input type="text" name="name"><br>
                       
                        <br>
                        <input type="submit" value="submit" name="submit">
                     
                    </form>
                    </div>
               <table border="1">
                    
            <tr>
                <td>Name</td>
                <td>Action</td>
            </tr>
            
            @foreach($data as $value)
                
            <tr>
                <td>{{ $value->name }}</td>
                
                <td><a href="{{action('Contriller@edit',$row['id'])}}">Edit</a></td>
            </tr>
            @endforeach
        </table>

               