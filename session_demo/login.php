<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container w-25">
        <div class="d-flex justify-content-center"></div>
            <div class="card mt-5 text-center">
             <div class="card-body">
                <i class="fa-solid fa-user"></i>
                <br>
                <form method="post">
                <select class="form-select form-control mt-3" aria-label="userStatus" name="userType">
                    <option value="Admin" selected>Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>

                <input type="text" class="form-control mt-3" name="userName" placeholder="Username">
                <input type="password" class="form-control mt-3" name="userPass" placeholder="Password">

                <button type="submit" class="btn btn-primary mt-3 w-100" name="signIn">Sign in</button>
                </form>

                <?php
                session_start();
                $users =array(
                    array(
                        'type' => 'Admin',
                        'username' => 'admin',
                        'password' => 'admin',
                    ),
                    array(
                        'type' => 'Admin',
                        'username' => 'jairus',
                        'password' => 'Pass1234',
                    ),
                    array(
                        'type' => 'Content Manager',
                        'username' => 'pepito',
                        'password' => 'manaloto',
                    ),
                    array(
                        'type' => 'Content Manager',
                        'username' => 'pedro',
                        'password' => 'penduko',
                    ),
                    array(
                        'type' => 'System User',
                        'username' => 'Juan',
                        'password' => 'Tamad',
                    ),
                );
                // print_r($users);
                if (isset($_POST['signIn'])) {
                    $status = $_POST['userType'];
                    $name = $_POST['userName'];
                    $pass = $_POST['userPass'];
                    $_SESSION['username'] = $name = $_POST['userName'];
                    header("location: home.php");
                    
                    if($status === $users[0]['type']) {
                        if ($name === $users[0]['username']) {
                            if ($pass === $users[0]['password']) {
                                echo 
                                '<div class="alert alert-success mt-3" role="alert">
                                    Welcome: ' . $name . '
                              </div>';
                            }
                            else{
                                echo
                                '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                            }
                        }
                        else{
                            echo
                            '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                        }
                    }
                    elseif($status === $users[1]['type']) {
                        if ($name === $users[1]['username']) {
                            if ($pass === $users[1]['password']) {
                                echo 
                                '<div class="alert alert-success mt-3" role="alert">
                                    Welcome: ' . $name . '
                              </div>';
                            }
                            else{
                                echo
                                '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                            }
                        }
                        else{
                            echo
                            '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                        }
                    }
                    elseif($status === $users[2]['type']) {
                        if ($name === $users[2]['username']) {
                            if ($pass === $users[2]['password']) {
                                echo 
                                '<div class="alert alert-success mt-3" role="alert">
                                    Welcome: ' . $name . '
                              </div>';
                            }
                            else{
                                echo
                                '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                            }
                        }
                        else{
                            echo
                            '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                        }
                    }
                    elseif($status === $users[3]['type']) {
                        if ($name === $users[3]['username']) {
                            if ($pass === $users[3]['password']) {
                                echo 
                                '<div class="alert alert-success mt-3" role="alert">
                                    Welcome: ' . $name . '
                              </div>';
                            }
                            else{
                                echo
                                '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                            }
                        }
                        else{
                            echo
                            '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                        }
                    }
                    elseif($status === $users[4]['type']) {
                        if ($name === $users[4]['username']) {
                            if ($pass === $users[4]['password']) {
                                echo 
                                '<div class="alert alert-success mt-3" role="alert">
                                    Welcome: ' . $name . '
                              </div>';
                            }
                            else{
                                echo
                                '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                            }
                        }
                        else{
                            echo
                            '<div class="alert alert-danger mt-3" role="alert">
                                    Invalid Username/ Password
                              </div>';
                        }
                    }
                    else{
                        echo
                        '<div class="alert alert-danger mt-3" role="alert">
                                Invalid Username/ Password
                          </div>';
                }
            }
            ?>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>