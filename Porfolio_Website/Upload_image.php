<!-- Φόρμα προσφοράς -->
<?php require('includes/header.php'); ?>
<br><br>

    <div class="container">
        <h2 class="text-center">Φόρμα Προσφοράς</h2>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="submit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Όνομα πελάτη:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Ποσό προσφοράς:</label>
                        <input type="text" class="form-control" id="category" name="category" required>
                    </div>

                    <div class="form-group">
                        <label for="designer">Περιγραφή:</label>
                        <input type="text" class="form-control" id="designer" name="designer" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <br><br>

                    <button class="col-2 mt-0 form-group" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <br><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <?php require('includes/footer.php'); ?>
