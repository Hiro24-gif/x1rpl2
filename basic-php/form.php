<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h2>
        <form method="POST" action="home.php">

            <p>Nama Lengkap</p>
            <label for="fname">First Name</label><br>
            <input type="text" name="fname" required>
            <br>
            <label for="lname">Last Name</label><br>
            <input type="text" name="lname" required>

            <p>Gender</p>
            <input type="radio" name="gender" value="Laki-laki">Laki laki<br>
            <input type="radio" name="gender" value="Perempuan">Perempuan
            <p>Kewarganegaraan</p>
            <select name="country">
                <option value="Indonesia">Indonesia</option>
                <option value="English">English</option>
                <option value="Germany">Germany</option>
                <option value="Other">Other</option>
            </select>
            <p>Bahasa Yang Dikuasai</p>
            <input name="bahasa[]" value="Indonesia" type="checkbox">Indonesia<br>
            <input name="bahasa[]" value="English" type="checkbox">English<br>
            <input name="bahasa[]" value="Spanish" type="checkbox">Spanish<br>
            <input name="bahasa[]" value="Sunda" type="checkbox">Sunda<br>
            <input name="bahasa[]" value="Other" type="checkbox">Other
            <p>Bio</p>
            <textarea cols="30" rows="10" name="bio"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
</body>

</html>