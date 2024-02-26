<!-- resources/views/emails/room_invitation.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Invitation to Join Room</title>
</head>
<body>
    <p>Hello</p>
    
    <p>You are invited to join the room "{{ $name }}".</p>
    
    <p>Room Link: <a href="{{$link}}">ROOM</a></p>
    
    <p>Password: {{$password}}</p>

    <p>Thank you!</p>
</body>
</html>
