<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <form id="x" action="/simpandata" method="POST" >
            @csrf
            nama : <input type="text" name="name"> <br>
            harga : <input type="text" name="price"> <br>
            kategori : <input type="text" name="category">
            <button type="submit">simpan</button>
        </form>
    <div>

        @section('content')
        <div class="container mt-3">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">category</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($restaurant as $r)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $r->name}}</td>
                    <td>{{ $r->price }}</td> 
                    <td>{{ $r->category }}</td> 
                </tr>
            @endforeach
            </tbody>
        </table> 
        </div>

    <script>
        $( "#x" ).submit(function( event ) {
  
             // Stop form from submitting normally
             event.preventDefault();
 
             // Get some values from elements on the page:
             var $form = $( this ),
             term = $form.find( "input[name='name']" ).val(),
             silm = $form.find( "input[name='price']" ).val(),
             tank = $form.find( "input[name='category']" ).val(),
             url = $form.attr( "action" );
             var posting = $.post( url, {"_token": "{{ csrf_token() }}", name: term, price: silm, category: tank } );
 
             console.log(posting);
             });
     </script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>