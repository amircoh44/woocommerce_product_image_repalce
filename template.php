<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css"> 
        <title>Page Title</title>
    </head>
    <body>
        <div class="photo2gfit-container">
            <div class="image-container">
            <img src="https://www.elegantlockandkey.com/wp-content/uploads/2022/07/Untitled-25555.png" alt="" />
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
                        <div class="edit-template">
                            <form action="/upload.php" method="post">
                                <label class="text1" for="text1">Text 1</label>
                                <input type="text" id="text1" name="text1" placeholder="Happy Holiday"><br>
                                <label class="text2" for="text2">Text 2</label>
                                <input type="text" id="text2" name="text2" placeholder="You'r The Boss"><br>
                                <label class="text1" for="text3">Text 3</label>
                                <input type="text" id="text3" name="text3" placeholder="See You Soon"><br>

                                 <div class="submit-btn">
                                   <input type="submit">
                                 </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 