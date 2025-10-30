<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('add') }}" method="POST">
        @csrf 
    
        <label for="name">fullame</label>
        <input type="text" name="fullname" required>

        <label for="sirname">Sirname</label>
        <input type="text" name="sirname" required>

        <label for="email">email</label>
        <input type="email" name="email" required>

        <label for="gender">gender</label>
        <input type="text" name="gender" required>
        
         <label for="age">age</label>
        <input type="text" name="age" required>

        <label for="address">address</label>
        <input type="text" name="address" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
