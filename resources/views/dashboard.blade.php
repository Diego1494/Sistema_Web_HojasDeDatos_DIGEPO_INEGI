<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
</head>
<body>
<x-app-layout>
              
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    <br />
    @endif
      <table class="table table-light mb-4">
         <thead>
        <tr>
            <td height="50" width="150">ID</td>
            <td height="50" width="150">Name</td>
            <td height="50" width="150">Email</td>
            <td height="50" width="150">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $users)
        <tr>
            <td class="table-light">{{$users->id}}</td>
            <td class="table-light">{{$users->name}}</td>
            <td class="table-light">{{$users->email}}</td>
            <td class="table-light">
            <form action="{{ route('edit', $users->id)}}">
                                      <button class="btn btn-dark" type="submit">   
                                      <i class="ti ti-edit-circle"></i></button>
                                      </form>
                                      <form action="{{ route('destroy', $users->id)}}">
                                       @csrf
                                      <button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de borrar')" >
                                      <i class="ti ti-trash-x-filled"></i></button>
                                      </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</x-app-layout>  

</body>
</html>
