<?php 
require_once __DIR__.'/_header.php';
require_once __DIR__.'/../_.php';
$db = _db();
$sql = $db->prepare('SELECT * FROM users');
$sql->execute();
$users = $sql->fetchAll();
?>

<main class="w-full px-4 md:px-12 lg:px-44">

  <div class="py-4">
    <form onsubmit="return false" class="flex gap-4 items-center w-full">
      <label for="" class="w-2/12">Search for user</label>
      <input name="user_search" 
      class="w-8/12 h-8 dark:bg-zinc-400 rounded-sm outline-none" type="text">
      <button class="w-2/12 h-8 text-black bg-zinc-400 border border-zinc-400 rounded-sm">Search</button>
    </form>
  </div>

  <?php foreach($users as $user):?>
    <div class="flex w-full pt-4">
      <div class="w-1/12"><?= $user['user_id'] ?></div>
      <div class="w-1/5"><?= $user['user_name'] ?></div>
      <div class="w-1/5"><?= $user['user_last_name'] ?></div>
      <div class="w-1/5"><?= $user['user_email'] ?></div>
      <div class="w-1/5"><?= $user['user_address'] ?></div>
      <div class="ml-auto">block</div>
    </div>
  <?php endforeach?>
</main>

<?php require_once __DIR__.'/_footer.php'  ?>





