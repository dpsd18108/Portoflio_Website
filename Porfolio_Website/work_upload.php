<!-- Ανέβασμα έργου (φόρμα) -->
<?php require("includes/header.php");?>

<style>
.dropdown {
  position: relative;
}

.dropdown-select {
  padding-right: 30px;
}

.dropdown-arrow {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 6px 6px 0 6px;
  border-color: #888 transparent transparent transparent;
  pointer-events: none;
}
</style>

<main id="main">

    <section class="section pb-5">
        <div class="container">

            <div class="row mb-5 align-items-end">
            <div class="col-md-6" data-aos="fade-up">
                <h2>Ανέβασμα έργου</h2>
                <p class="mb-0">Πολλές φορές οι σχεδιαστές χρειάζονται παραπάνω έμπνευση, μοιράσου τα έργα σου βοηθώντας την κοινότητα μας .</p>
            </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

                    <form action="upload_work.php" method="POST" enctype="multipart/form-data"> <!-- 6 -->

                        <div class="row gy-3">
                            <div class="col-md-6 form-group">
                                <label for="creator">Δημιουργός</label>                       
                                <input type="varchar" name="creator" class="form-control" > 
                            </div> 

                            <div class="col-md-6 form-group">
                                <label for="date">Ημερομηνία</label>
                                <input type="date" name="date" class="form-control" > 
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="title">Τίτλος</label>
                                <input type="varchar" name="title" class="form-control" >
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="category">Κατηγορία</label>  
                                <div class="dropdown">
                                <select name="category" class="form-control">
                                    <option value="1">Web</option>
                                    <option value="2">Prodact</option>
                                    <option value="3">Service</option>
                                    <option value="4">Game</option>
                                    <option value="5">Videography</option>
                                </select>   
                                <div class="dropdown-arrow"></div>                  
                                <!-- <input type="varchar" name="category" class="form-control" >  -->
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="description">Περιγραφή</label>
                                <textarea class="form-control" name="description" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="fileToUpload">Ανεβάστε φωτογραφία του έργου</label>          
                                <input type="file" name="fileToUpload" id="fileToUpload"><br /><br />
                            </div>
                            
                            <div class="col-md-6 mt-0 form-group">
                                <input type="submit" name="submit" value="ΑΠΟΣΤΟΛΗ">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

</main>

<?php require("includes/footer.php");?>