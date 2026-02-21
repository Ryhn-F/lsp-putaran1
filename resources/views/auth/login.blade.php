<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="w-50 h-50 bg-black">
        <form method="post">
            @csrf 
            <input type="text" name="username">
            <input type="password" name="password">
            <button type="submit">Sign in</button>
        </form>

    </div>
    
</body>
</html>