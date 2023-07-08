<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data"> <!-- 6 -->
        <label for="customer_name">Όνομα πελάτη: </label>                        <!-- 4 -->
        <input type="text" name="customer_name"> <br /><br />                    <!-- 4 -->

        <label for="fileToUpload">Επιλέξτε φωτογραφία πελάτη:</label>           <!-- 5 -->
        <input type="file" name="fileToUpload" id="fileToUpload"><br /><br />   <!-- 5 -->

        <input type="submit" name="submit" value="Εισαγωγή πελάτη">
    </form>
</body>
</html>