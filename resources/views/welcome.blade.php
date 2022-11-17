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
    <h1>Outdoor Company</h1><br>
    <form action="{{route('saveList')}}" method="post">
     @csrf
        
        <label for="">Batch Number</label>
        <input type="text" name="batchno" class="form-control">
        <label for="">Quantity</label>
        <input type="text" name="quantity" class="form-control">
        <label for="">Created at</label>
        <input type="text" name="t-shop" class="form-control">
        <label for="">Status</label>
        <select name="status" id="status">
           <option value="excellent" >Excellent</option>
              <option value="very good">Very good</option>
                 <option value="average">average</option>
                    <option value="bad">bad</option>
</select><br>
        <label for="">Remarks</label><br>
        <input type="text" name="remarks" class="form-control">
     <button type="submit" class="btn btn-success mt-2 btn-center">Submit</button>

    </form>
    <table class="table">
            <thead>

                <tr>
                    <th scope="col">Batch No </th>
                    <th scope="col">Quantity</th>
                    <th scope="col"> Status </th>
                    <th scope="col">Remarks</th>
                </tr>
            </thead>

            <tbody>
           
                @foreach($shop as $value)
                <tr>
                    <td>{{$value->batchno}}</td>
                    <td>{{$value->quantity}}</td>
                    <td>{{$value->status}}</td>
                    <td>{{$value->remarks}}</td>
                    <td>
                    <a href="/edit/{{$value->id}}" class="btn btn-danger">Edit</a>
                    <a href="/delete/{{$value->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
</body>
</html>