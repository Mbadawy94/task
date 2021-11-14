<!DOCTYPE html>
<html>
<head>
    <title>Students Number</title>
</head>
<body>
    <p>School: {{ $school->name }} has {{ $school->students()->count() }} student.</p>
   
    <p>Thank you</p>
</body>
</html>