<!DOCTYPE html>

<html>
<head>
    <title>My Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/ui-darkness/jquery-ui.css"> -->
    

</head>
<body>

    <div class="container">

    <header>
        <h1>My Blog</h1>
    </header>

    <nav>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <?php if (Auth::isLoggedIn()) : ?>

                <li class="nav-item"><a class="nav-link" href="/admin/index.php">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>
                
            <?php else : ?>

                <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>

            <?php endif; ?>

            <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>

        </ul>
    </nav>

    <main>

