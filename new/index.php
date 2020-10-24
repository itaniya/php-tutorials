<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class = "text-center">Bootstrap Forms</h2>
        </div>
        <div class="row">
		<form action="form.php" method="POST">
            <div class="col">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control form-control-sm" id="username" name="username">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control form-control-smt" id="useremail" name="useremail">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" id="userpwd" name="userpwd">
                    <small class="form-text text-muted">
                        your password must be 8 characters
                    </small>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea id="usermsg" name="usermsg" class="form-control" cols="30" rows="10"></textarea>
                </div>
				
            </div>
            <div class="col">
                <div class="form-group">
                    <label>File Upload</label>
                    <input type="file" class="form-control-file" name="userfile">
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="range" class="form-control-range" name="userrange">
                </div>
                <div class="form-group">
                    <label>Hobbies</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="musiccheck" name="usermusic">
                        <lable for="musiccheck" class="form-check-lable">Music</lable>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="sportscheck" name="usersports">
                        <lable for="sportscheck" class="form-check-lable">Sports</lable>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="malecheck" value = "male" name="gender">
                        <lable for="malecheck" class="form-check-lable">Male</lable>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="femalecheck" value = "female" name="gender">
                        <lable for="femalecheck" class="form-check-lable">Female</lable>
                    </div>
                </div>
                <div class="text-center">
				<button class="btn btn-primary btn-lg mt-3" type="submit">Submit</button>
				</div>
                
            </div>
		</form>
        </div>
    </div>
</body>

</html>