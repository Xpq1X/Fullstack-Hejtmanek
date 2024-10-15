@@ -0,0 +1,17 @@
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($products as $product)
  <tr>
              <th>{{$product->id}}</th>
             
  </tr>

@endforeach
</body>
</html>