<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<style>

</style>
<body>
    <a href="welcome"class="btn btn-primary mb-3">Add Blog</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle shadow">
            <thead class="table-dark">
                <tr>
                    <th>fullname</th>
                    <th>sirname</th>
                    <th>gender</th>
                    <th>age</th>
                    <th>email</th>
                    <th>address</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($abc as $blog)
                    <tr>
                        <td>{{$blog->fullname}}</td>
                        <td>{{$blog->sirname}}</td>
                        <td>{{$blog->age}}</td>
                        <td>{{$blog->gender}}</td>
                        <td>{{$blog->email}}</td>
                        <td>{{$blog->address}}</td>

                        <td>
                            <a href="{{route('edit',['id'=>$blog->id])}}"class="btn btn-primary">𝓔𝓭𝓲𝓽</a>
                        </td>
                        <td>
                            <form action="{{route('delete', ['id' => $blog->id])}}"method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"class="btn btn-danger">𝓓𝓮𝓵𝓮𝓽𝓮</button>

                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
</table>
</div>
</body>
</html>