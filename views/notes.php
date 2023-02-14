<?php
include('./includes/header.php');
include('./includes/nav.php');

?>

<div class="table-responsive-sm">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($notes as $note) : ?>
      <tr>
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
