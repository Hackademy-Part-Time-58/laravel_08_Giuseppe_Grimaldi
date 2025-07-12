<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}-{{$pageTitle}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-shared.navbar/>
<x-flash-message/>
<x-centered-container>
{{$slot}}
</x-centered-container>
<x-shared.footer/>
</body>
</html>