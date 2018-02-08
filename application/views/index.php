<h2><?php echo $title; ?></h2>
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Books Code</strong></td>
        <td><strong>Books Title</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    <?php foreach ($books as $books_item): ?>
        <tr>
            <td>
                <?php echo $books_item['id_book']; ?>
            </td>
            <td><?php echo $books_item['book_title']; ?></td>
            <td><?php echo $books_item['desc']; ?></td>
            <td>
                <a href="<?php echo site_url('books/edit/' . $books_item['id_book']); ?>">Edit</a> | 
                <a href="<?php echo site_url('books/delete/' . $books_item['id_book']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
        