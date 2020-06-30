<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form method="POST" action="/welcome">
        @csrf
        <label for="first_name">First name:</label><br/>
        <input type="text" name="first_name" id="first_name"><br/>
        
        <label for="last_name">Last name:</label><br/>
        <input type="text" name="last_name" id="last_name"><br/><br/>
       
        Gender:<br/>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label><br/>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br/>
        <input type="radio" name="gender" id="other" value="other">
        <label for="male">Other</label><br/><br/>

        <label for="nationality">Nationality:</label><br/>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
            
        </select>
        <br/><br/>

        Language Spoken:<br/>
        <input type="checkbox" name="nationality1" id="indonesia" value="Indonesia">
        <label for="indonesia">Indonesia</label><br/>
        <input type="checkbox" name="nationality2" id="english" value="English">
        <label for="english">English</label><br/>
        <input type="checkbox" name="nationality3" id="other" value="Other">
        <label for="other">Other</label><br/>
        <br/>
        
        Bio:<br/>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br/><br/>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>