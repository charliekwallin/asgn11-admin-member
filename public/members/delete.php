<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/admins/index.php'));
}
$id = $_GET['id'];
$admin = Member::find_by_id($id);
if($admin == false) {
  redirect_to(url_for('/staff/admins/index.php'));
}

if(is_post_request()) {

  // Delete admin
  $result = $admin->delete();
  $_SESSION['message'] = 'The admin was deleted successfully.';
  redirect_to(url_for('/staff/admins/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete Admin'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>


  <a class="back-link" href="<?php echo url_for('/members/index.php'); ?>">&laquo; Back to List</a>

    <h1>Delete Admin</h1>
    <p>Are you sure you want to delete this admin?</p>
    <p><?= h($admin->full_name()); ?></p>

    <form action="<?= url_for('/staff/admins/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Admin" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
