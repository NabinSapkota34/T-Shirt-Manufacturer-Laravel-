<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <h1>Edit this ShoppingList</h1>
    <!-- <pre>
        {{$data}}
    </pre> -->
    <form action="{{route('updateList')}}" method="post">
         @csrf
       <b>Batchno</b> <input type="text" placeholder="Enter batch no" class="form-control" name="batchno" value='{{$data->batchno}}'> <br>
        <b>Quantity</b><input type="text" placeholder="Enter quantity" class="form-control" name="quantity" value='{{$data->quantity}}'> <br>
        <b>Status</b><input type="text" name="status" placeholder="Enter status" class="form-control" value="{{$data->status}}"><br>
       <b>Remarks</b> <input type="textarea" placeholder="Enter remarks" class="form-control" name="remarks" value='{{$data->remarks}}'> <br>
        <input type="hidden" name="id" value={{$data->id}}>
        <button class="btn btn-success mt-2 btn-center" type="submit">Update</button>
    </form>
</body>
</html>