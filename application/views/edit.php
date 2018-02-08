<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('books/edit/'.$books_item['id_book']); ?>
<table>
    <tr>
        <td><label for="bookId">Book ID</label></td>
        <td><input type="input" name="bookId" size="6" maxlength="6" value="<?php echo $books_item['id_book'] ?>"/></td>
    </tr>
    <tr>
        <td><label for="bookTitle">Book Title</label></td>
        <td><input type="input" name="bookTitle" size="30" maxlength="30" value="<?php echo $books_item['book_title'] ?>"/></td>
    </tr>
    <tr>
        <td><label for="desc">Description</label></td>
        <td><textarea name="desc" rows="10" cols="40"><?php echo $books_item['desc'] ?></textarea></td>
    </tr>
    <<tr>
        <td></td>
        <td><input type="submit" name="submit" value="Edit book item" /></td>
    </tr>
</table>
</form>