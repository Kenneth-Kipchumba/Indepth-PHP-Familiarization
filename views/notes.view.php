<?php
include('./includes/header.php');
include('./includes/nav.php');

?>

<!-- <?= dd($notes) ?> -->
<a href="/note/create" class="btn btn-outline-primary btn-sm mb-3 ms-5">
  Add Note
</a>
<div class="table-responsive-sm">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>User Id</th>
        <th>Notes</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($notes as $note) : ?>
        <tr>
          <td>
            <?= $note['user_id'] ?>
          </td>
          <td>
          	<a href="note?id=<?= $note['id'] ?>">
          		<?= $note['body'] ?>
          	</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>

<?php include('./includes/footer.php'); ?>
