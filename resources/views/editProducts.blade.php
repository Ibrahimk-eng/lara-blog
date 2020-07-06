<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top: 5%">
        <form method="post" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Product Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name}}" placeholder="Enter product name ..." required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Price:</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}"  placeholder="Enter product price ..." required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Category:</label>
                <input type="text" class="form-control" name="category" value="{{ $product->category }}"  placeholder="Enter product category ..." required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description:</label>
                <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  name=""id="inputGroupFileAddon01">Product Image:</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" value="{{ $product->image }}"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>