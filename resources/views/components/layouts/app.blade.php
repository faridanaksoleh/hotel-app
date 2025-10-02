<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a wire:navigate href="/about">About</a>
        <a wire:navigate href="/contact">Contact</a>
    </div>
    {{ $slot }}
</body>
</html>