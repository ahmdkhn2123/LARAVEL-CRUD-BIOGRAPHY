<html>
<head>
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<div class="container mb-3">
    <h1 class="text-center">Update Below</h1>
    <form action="/update/{{$bio['id']}}" method="POST">
        {{csrf_field()}}
        <!-- Name input -->
        <div class="form-outline mb-4">
            <label><b>Name</b></label>
            <input type="text" name="name" class="form-control" placeholder="Enter your Name" value="{{$bio['name']}}"/>
        </div>

        <!-- Age input -->
        <div class="form-outline mb-4">
            <label><b>Age</b></label>
            <input type="text" name="age" class="form-control" placeholder="Enter Your Age" value="{{$bio['age']}}" />
        </div>

        <!-- Cnic input -->
        <div class="form-outline mb-4">
            <label><b>Cnic</b></label>
            <input type="text" name="cnic" class="form-control" placeholder="Enter Your CnicNo" value="{{$bio['cnic']}}" />
        </div>

        <!-- City input -->
        <div class="form-outline mb-4">
            <label><b>City</b></label>
            <input type="text" name="city" class="form-control" placeholder="Enter Your City" value="{{$bio['city']}}"/>
        </div>


        <!-- Submit button -->
        <button type="submit" name="update" id="update" class="btn btn-primary btn-block mb-4">Updates</button>
    </form>
</div>

</body>
</html>