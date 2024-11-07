<!-- f  v -->
<?php include("templates/header.php"); ?>

            <div class="create-form w-100 mx-auto p-4" style="max-width: 700px;">
                <form action="process.php" method="post">
                    <div class="form-field mb-4">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title here">
                    </div>

                    <div class="form-field mb-4">
                        <textarea name="summary" class="form-control" id="summary" cols="15" rows="8" placeholder="Enter summary here"></textarea>
                    </div>

                    <div class="form-field mb-4">
                        <textarea name="content" class="form-control" id="content" cols="15" rows="8" placeholder="Enter content here"></textarea>
                    </div>
                    <input type="hidden" name="date" value="<?php echo date("y/m/d") ?>">

                    <div class="form-field">
                        <button type="submit" class="btn btn-primary" name="create" id="create">Submit</button>
                    </div>
                </form>
            </div>

<?php include("templates/footer.php"); ?>   