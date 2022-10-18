<? use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt; ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prachleet</title>

    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <script async defer src="https://kit.fontawesome.com/08690c32d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="<?= url('app.css') ?>">

    <script src="<?= url('app.js') ?>"></script>
    
</head>
<body>

<header class="w3-padding">

    <h1 class="w3-text-red">Prachleet</h1>
    <?php if(Auth::check()): ?>
                You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | <?= auth()->user()->id ?> | 
                <a href="/console/users/list">User Page</a> |   
                <a href="/watchs/list">Home Page</a> | 
                <a href="/descs/list">Details Page</a> | 
                <a href="/wishlist/list">WishList Page</a> |
                <a href="/console/logout">Log Out</a> |
            <?php else: ?>
                <a href="/console/login">Go to Login Page</a>
            <?php endif; ?>

</header>

<hr>