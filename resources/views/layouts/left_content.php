<?php
	$selected_item = Request::get("group_id");
?>

 <div class="list-group">
  <a href="<?=url("contacts")?>" class="list-group-item <?= empty($selected_item) ? "active" : ""?>">All Contact <span class="badge">
  <?=App\Models\Contact::count()?></span></a>
 
 <?php foreach(App\Models\Group::all() as $group){ ?>
  <a href="<?=route("contacts.index",["group_id" => $group->id])?>" class="list-group-item 
  <?= $selected_item == $group->id ? "active" : "" ?>"><?=$group->name?> <span class="badge"><?=$group->contacts->count()?></span></a>
 
 <?php } ?>
</div>