<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Request form</title>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-dark text-white ">
  <center><h1>Форма добавлення відгуків</h1></center>
</br></br>
  @if($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
   </ul>
    </div>
  @endif

  <form method="post" action="/check">
      @csrf
    <input type="email" name="email" id="email" placeholder="Введіть email" class="form-control"><br>
    <input type="text" name="subject" id="subject" placeholder="Введіть відгук" class="form-control"><br>
    <textarea name="message" id="message" class="form-control" placeholder="Введіть повідомлення"></textarea><br>
      <button type="submit" class="btn btn-success">Надіслати</button>


</body>

</html>
