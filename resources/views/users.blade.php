
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Post</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone->phone }}</td>
        <td>
          @foreach($user->posts as $post)
              <ul class="order-list">
                <li>{{$post->title}}</li>
              </ul> 
          @endforeach
        </td>

      </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>

