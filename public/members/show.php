<?php require_once('../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$admin = Member::find_by_id($id);

?>

<?php $page_title = 'Show All Users: ' . h($member->full_name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?= url_for('/staff/members/index.php'); ?>">&laquo; Back to List</a>

  <div class="member show">

    <h1>member: <?= h($member->full_name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>First name</dt>
        <dd><?= h($member->first_name); ?></dd>
      </dl>
      <dl>
        <dt>Last name</dt>
        <dd><?= h($member->last_name); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?= h($member->email); ?></dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><?= h($member->username); ?></dd>
      </dl>
    </div>

  </div>

</div>
