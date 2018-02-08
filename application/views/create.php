<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('books/create'); ?>    
    <table>
        <tr>
            <td><label for="bookId">Book ID</label></td>
            <td><input type="input" name="bookId" size="6" maxlength="6"/></td>
        </tr>
        <tr>
            <td><label for="bookTitle">Book Title</label></td>
            <td><input type="input" name="bookTitle" size="30" maxlength="30"/></td>
        </tr>
        <tr>
            <td><label for="desc">Description</label></td>
            <td><textarea name="desc" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Books item" /></td>
        </tr>
    </table>    
</form>
