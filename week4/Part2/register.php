<!DOCTYPE html>
<html>
<head>
    <title>Register - LMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Register</h1>
    
    <form action="process-register.php" method="post" id="register" novalidate>
        <label for="name">Name of book</label>
        <input type="text" name="name" class="form-control" id="name" autocomplete="username">

        <label for="isbn">ISBN number of book</label>
        <input type="number" name="isbn" class="form-control" id="isbn" autocomplete="username">

        <label for="book_title">Title of book</label>
        <input type="text" name="book_title" class="form-control" id="book_title" autocomplete="username">

        <label for="author_name">Name of author</label>
        <input type="text" name="author_name" class="form-control" id="author_name" autocomplete="username">

        <label for="publisher_name">Name of publisher</label>
        <input type="text" name="publisher_name" class="form-control" id="publisher_name" autocomplete="username">


        
        
        <button>Register</button><br>
        <p><a href="register_del.php">Delete</a> or <a href="register_up.php">Update</a></p>
    </form>
    


</body>
</html>








