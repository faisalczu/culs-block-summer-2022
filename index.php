<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./css/app.css">

    <title>tourist sights</title>
    </head>
    <body>
    <div class="container mt-4">
        <div class="text-center p-5 shadow">
            <h2>Team Void</h2>
            <p class="lead">Ibn Haque Md Faisal, Tripty Islam Shahina, Islam Md Sharikul</p>
        </div>

    </div>
    <div class="container">
        <form method="POST" action="data-insert.php" class="mt-4 form-control shadow mb-4">
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Name: </label>
                    <input type="text" name="name" id="Name" class="form-control">

                </div>
            </div>
            <div class="row">
                <div class=" col mb-3">
                    <label class="form-label">Email: </label>
                    <input type="email" name="email" id="inputEmail" class="form-control">
                </div>

                <div class="col mb-3">
                    <label class="form-label">Phone: </label>
                    <input type="text" name="phone" id="inputPhone" class="form-control"
                        placeholder="+420-xxx-xxx-xxx">
                </div>

            </div>

            <div class="mb-3">
                <label class="form-label">Address: </label>
                <textarea name="address" class="form-control" id="address" cols="30" rows="10"
                    placeholder="put your address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
    </body>
