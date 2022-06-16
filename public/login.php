<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login/Signup</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    <img src="https://api.alzhahir.com/static/images/logos/alzhahir/alz-logo-shadow-outline.png" class="img-fluid px-5" alt="alzhahir Logo">
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="/login.php" class="nav-link px-2 link-dark">Login</a></li>
                    <li><a href="/contact.html" class="nav-link px-2 link-dark">Contact</a></li>
                    <li><a href="/faq.html" class="nav-link px-2 link-dark">FAQs</a></li>
                    <li><a href="/about.html" class="nav-link px-2 link-dark">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-primary" onclick="location.href='/login.php';">Login</button>
                </div>
            </header>
        </div>
        <div class="bg-warning p-3">
            <p class="text-center fw-bolder h5">Authenticate to access UiTM Club Activities Approval System</p>
        </div>
        <ul class="container px-4 nav nav-pills mt-4" id="pills-tab" role="tablist">
            <li class="nav-item px-2" role="presentation">
                <button class="nav-link active" id="pills-signin-tab" data-bs-toggle="pill" data-bs-target="#pills-signin" type="button" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-signup-tab" data-bs-toggle="pill" data-bs-target="#pills-signup" type="button" role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab" tabindex="0">
                <div class="container px-5 my-4">
                    <h3>Sign In</h3>
                    <p>Please enter the email and password to continue.</p>
                    <form id="loginForm" action="doSignIn.php" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="signInEmail" type="email" placeholder="Email Address" required/>
                            <label for="emailAddress">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="signInPassword" type="password" placeholder="Password" required/>
                            <label for="password">Password</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="signInButton" type="submit">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab" tabindex="0">
                <div class="container px-5 my-4">
                    <h3>Sign Up (Students Only)</h3>
                    <p>This form is for students only. Officers and Admins can contact the faculty for help. Please fill in this form to continue.</p>
                    <form id="signupForm" action="doSignUp.php" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" placeholder="Email Address" required/>
                            <label for="emailAddress">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" type="password" placeholder="Password" required/>
                            <label for="password">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="confirmPassword" type="password" placeholder="Confirm Password" required/>
                            <label for="password">Confirm Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" type="text" placeholder="Name" required/>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="telephone" type="tel" placeholder="Telephone" required/>
                            <label for="telephone">Telephone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="clubid" aria-label="Role" required>
                                <option value=""></option>
                                <?php
                                    require_once "../inc/connect.php";

                                    //get clublist
                                    $getClubSQL = "SELECT club_id, club_name FROM clubs";
                                    $clubRes = mysqli_query($conn, $getClubSQL);
                                    if(!is_bool($clubRes)){
                                        $clubArr = mysqli_fetch_all($clubRes);
                                        $clubArr = array_values($clubArr);
                                        foreach($clubArr as $currClub){
                                            echo "<option value=\"$currClub[0]\">$currClub[1]</td>";
                                        }
                                    } else {
                                        echo "ERROR";
                                    }
                                ?>
                            </select>
                            <label for="clubid">Club ID</label>
                            <div>
                                <p>Club list can be found <a href="/clubs/index.php">here</a>.</p>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="signUpButton" type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>