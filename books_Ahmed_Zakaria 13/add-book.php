
<!-- title, author_name, year, languages (may be many), type[art, horror, science](radio) -->
<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
$selectedLanguages = isset($_SESSION['languages']) ? $_SESSION['languages'] : [];
$selected_type=$old['type_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Book</title>
    <style>
        form>div{
            padding: 10px;
        }
        .errors{
            color: tomato;
            size: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h2 style="color:red ; text-align: center">Please Add Book Details</h2>

    <form style="padding: 20px;" method="post" action="store-book.php">
        <!-- Title -->
        <div>
            <label>Title</label>
            <input type="text" name="title" value="<?= @$old['title']; ?>" placeholder="3 - 30 characters">
            <span class="errors"><?= @$errors['title']; ?></span>
        </div>

        <!-- author_name -->
        <div>
            <label>Author Name</label>
            <input type="text" name="author_name" value="<?= @$old['author_name']; ?>"
                placeholder="3 names with space inbetween">
                <span class="errors"><?= @$errors['author_name']; ?></span>
        </div>
        <!-- book_year -->
        <div>
            <label>Year</label>
            <input type="number" name="book_year" value="<?= @$old['book_year']; ?>"placeholder="4 numbers year">
            <span class="errors"><?= @$errors['book_year']; ?></span>
        </div>
        <!-- Languages -->
        <div>
            <fieldset>
                <legend>Languages</legend>
                <input value="Arabic" type="checkbox" name="languages[]" id="arabic" <?= in_array('Arabic', $selectedLanguages) ? 'checked' : '' ?> >
                <label for="arabic">Arabic</label>

                <input value="English" type="checkbox" name="languages[]" id="english" <?= in_array('English', $selectedLanguages) ? 'checked' : '' ?> >
                <label for="english">English</label>

                <input value="Deutch" type="checkbox" name="languages[]" id="deutch" <?= in_array('Deutch', $selectedLanguages) ? 'checked' : '' ?> >
                <label for="deutch">Deutch</label>

                <input value="French" type="checkbox" name="languages[]" id="french" <?= in_array('French', $selectedLanguages) ? 'checked' : '' ?> >
                <label for="french">French</label>
                <span class="errors"><?= @$errors['languages']; ?></span>
            </fieldset>
        </div>

        <!-- Types -->
        <div>
            <fieldset>
                <legend>Type</legend>

                <input type="radio" name="type_id" id="arts" value="1" <?php  @$selected_type==='1' ? 'checked' : '' ?>>
                <label for="arts">Arts</label>

                <input type="radio" name="type_id" id="political" value="2" <?= @$selected_type==='2'  ? 'checked' : '' ?>>
                <label for="political">Political</label>

                <input type="radio" name="type_id" id="sports" value="3" <?= @$selected_type==='3' ? 'checked' : '' ?>>
                <label for="sports">Sports</label>

                <input type="radio" name="type_id" id="advanture" value="4" <?= @$selected_type==='4'  ? 'checked' : '' ?>>
                <label for="advanture">Advanture</label>
                <span class="errors"><?= @$errors['type_id']; ?></span>
            </fieldset>
        </div>

      
        <!-- Thumbnail -->
        <div>
            <label for="image">Book Image</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <button type="Submit">Submit</button>
        </div>


    </form>
</body>

</html>