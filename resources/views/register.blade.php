<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">E-Mail Address:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        <br>

        <label for="division">Division:</label>
        <input type="text" id="division" name="division" required>
        <br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br>

        <label for="birthDate">Birth Date:</label>
        <input type="date" id="birthDate" name="birthDate" required>
        <br>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>
        <br>

        <label for="sex">Sex:</label>
        <select id="sex" name="sex" required>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
        <br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
