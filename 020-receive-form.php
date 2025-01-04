<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$interest = $_POST['interest'];
$sourceOfReferral = $_POST['source-of-referral'];
$gender = $_POST['gender'];
$message = $_POST['message'];
?>
<h1>Form value</h1>
<form action="020-receive-form.php" method="post">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" disabled value="<?php echo $name; ?>">
    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" disabled value="<?php echo $email; ?>">
    <br>

    <fieldset>
        <legend>Area of Interest</legend>
        <input type="checkbox" name="interest[]" value="sport" disabled <?php if (isset($interest) && in_array("sport", $interest)) echo "checked";?>> Sport <br>
        <input type="checkbox" name="interest[]" value="music" disabled <?php if(isset($interest) && in_array("music", $interest)) echo "checked";?>> Music <br>
        <input type="checkbox" name="interest[]" value="movies" disabled <?php if(isset($interest) && in_array("movies", $interest)) echo "checked";?>> Movies <br>
        <input type="checkbox" name="interest[]" value="books" disabled <?php if(isset($interest) && in_array("books", $interest)) echo "checked";?>> Books <br>
        <input type="checkbox" name="interest[]" value="other" disabled <?php if(isset($interest) && in_array("other", $interest)) echo "checked";?>> Other
    </fieldset>
    <br>
    <label for="source-of-referral">How did you find us?</label>
    <select id="source-of-referral" name="source-of-referral" disabled>
        <option value="internet" <?php if (isset($sourceOfReferral) && $sourceOfReferral === "internet") echo "selected";?>>Internet</option>
        <option value="friend" <?php if (isset($sourceOfReferral) && $sourceOfReferral === "friend") echo "selected";?>>Friend</option>
        <option value="advertisement" <?php if (isset($sourceOfReferral) && $sourceOfReferral === "advertisement") echo "selected";?>>Advertisement</option>
        <option value="social_media" <?php if (isset($sourceOfReferral) && $sourceOfReferral === "social_media") echo "selected";?>>Social Media</option>
        <option value="other" <?php if (isset($sourceOfReferral) && $sourceOfReferral === "other") echo "selected";?>>Other</option>
    </select>
    <br>
    <fieldset>
        <legend>Gender</legend>
        <input type="radio" name="gender" value="male" disabled <?php if (isset($gender) && $gender === "male") echo "checked";?>> Male <br>
        <input type="radio" name="gender" value="female" disabled <?php if (isset($gender) && $gender === "female") echo "checked";?>> Female <br>
    </fieldset>
    <label for="message">Message</label><br>
    <textarea name="message" id="message" cols="30" rows="10" disabled><?= $message ?></textarea>
    <br>
    <input type="submit" value="Send">
</form>
</body>
</html>