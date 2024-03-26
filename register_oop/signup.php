<?php 
    include_once('functions.php'); 

    $userdata = new DB_con();

    if (isset($_POST['submit'])) {
        $fname = $_POST['fullname'];
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $password = $_POST['password'];

        $sql = $userdata -> registration($fname, $uname, $uemail, $password);

        if ($sql)   {
            echo "<script>alert('Register Successful!');</script>";
            echo "<script>window.loacation.href='signin.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again.');</script>";
            echo "<script>window.loacation.href='signin.php'</script>";
        }
    }
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
        <body>
            <div class="container">
                <h1 class="mt-5">Register Page</h1>
                <hr>
                <form method="post">

                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="username" name="fullname" required>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" onblur="checkusername(this.value)" required>
                    <span id="usernameavailable"></span>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" name="submit" id="submit" class="btn btn-success">Register</button>
                
                </form>
                <hr>
                <a href = signin.php class="btn btn-primary">Signin</a>
            </div>

            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

            <script>
                function checkusername(val) {
                    $.ajax({
                        type: 'POST',
                        url: 'checkuser_available.php',
                        data: 'username='+val,
                        success: function(data) {
                            $('#usernameavailable').html(data);
                        }
                    });
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
</html>
