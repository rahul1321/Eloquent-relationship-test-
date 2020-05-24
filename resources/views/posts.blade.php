
<!DOCTYPE html>
<html>
<head>
	<title>Phones</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Category</th>
      <th scope="col">User</th>
      
    </tr>
  </thead>
  <tbody>
  	@foreach($posts as $post)
    <tr>
      <td>{{ $post->title }}</td>
      <td>{{ $post->details }}</td>
      <td>{{ $post->category->name }}</td>
      <td>{{ $post->user->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>

