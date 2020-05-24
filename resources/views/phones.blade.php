
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
      <th scope="col">Phone</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>
  	@foreach($phones as $phone)
    <tr>
      <td>{{ $phone->phone }}</td>
      <td>{{ $phone->user->name }}</td>
      <td>{{ $phone->user->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>

