<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css"> 
        <title>Page Title</title>
    </head>
    <body>
        <div class="photo2gfit-container">
            <div class="image-container">
            <?php
                $imageSrc = 'https://www.elegantlockandkey.com/wp-content/uploads/2022/07/Untitled-25555.png';
                echo '<img id="image_placeholder" src="'.$imageSrc.'" alt="" height="800px" width="1200px"/>';
            ?>
            </div>
                <div class="forms-container">
                    <div class="templates">
                        <div class="template">
                            <form action="/form.php" method="post">
                                <label class="choose-template-label" for="choose-template">Choose a template</label>
                                <select id="choose-template" name="choose-template">
                                    <option value="Holday">Holday</option>
                                    <option value="Birthday">Birthday</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Friend">For a Friend</option>
                                </select>
                                    <input type="submit">
                            </form>
                        </div>
                        <div class="upload-file">
                            <form action="/upload.php" method="post">
                                <label class="upload-file-label" for="choose-template">OR, Upload your file</label>
                                <input type="file" id="upload-file-label" name="upload-file-label" accept=".jpg, .jpeg">
                                <input type="submit" name="upload-file-button">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 