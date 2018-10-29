<?php
ob_start();
?>
            
            <form action="<?= ROOT_URL?>books/add" enctype="multipart/form-data"  id="form" method="POST">
			<h1>New Book</h1>
                <input type="text" name="name" class="Name" placeholder="Insert the Name">
                <input type="number" required name="price" class="price" placeholder="Insert the Price">
				<input type="text" name="authors" class="authors" placeholder="Insert the Authors">
                <input type="text" name="isbn" class="isbn" placeholder="Insert the ISBN">
                <input type="text" name="publisher" class="publisher" placeholder="Insert the Publisher">
                <input type="text" name="published_date" class="isbn" placeholder="Insert the Published date">
                <input type="file" name="cover" id="cover">                <button type="submit" value="Add" name="submit">Submit</button>
            </form>
        </div>
<?php $content= ob_get_clean();
include 'app/views/layout.html.php';