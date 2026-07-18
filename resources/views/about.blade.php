<!DOCTYPE html>
<html>
<head>
    <title>Laravel Data Passing</title>
</head>
<body>
    <h1>မင်္ဂလာပါ၊ ကျွန်တော့်နာမည်က {{ $name }} ပါ။</h1>

    <h3>ကျွန်တော်တတ်တဲ့ Skills တွေကတော့-</h3>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</body>
</html>
