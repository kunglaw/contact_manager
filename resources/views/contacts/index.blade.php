@extends('layouts.main') <?php //blade path nya bisa pakai titik ?>

@section("content")
<?php
  	if(!empty(session("message")))
	{
		echo "<div class='alert alert-success'> ".session("message")." </div>";
	}
  
  ?>
<div class="panel panel-default">
  
  <table class="table">
  <?php
  	foreach($contact_list as $row){ 
  ?>  	
    <tr>
      <td class="middle">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <?php $photo = !is_null($row->photo) ? $row->photo : "http://placehold.it/100x100" ?>
              {!! Html::image("uploads/".$photo,$row['name'],
              ["class"=>"media-object","width"=>100,"height"=>100]) !!}
              <!-- <img class="media-object" src="http://placehold.it/100x100" alt="..."> -->
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><?=$row["name"]?></h4>
            <address>
              <strong><?=$row["company"]?></strong><br>
             <?=$row["email"]?>
            </address>
          </div>
        </div>
      </td>
      <td width="100" class="middle">
      	{!! Form::open(['method'=>'DELETE','route'=>['contacts.destroy',$row['id']]]) !!}
        <div>
          <a href="<?=route("contacts.edit",["id"=>$row["id"]])?>" class="btn btn-circle btn-default btn-xs" title="Edit">
            <i class="glyphicon glyphicon-edit"></i>
          </a>
          <button type="submit" onclick="return confirm('Are you sure want to delete this contact?')" class="btn btn-circle btn-danger btn-xs" title="Delete">
            <i class="glyphicon glyphicon-remove"></i>
          </button>
        </div>
        {!! Form::close() !!}
      </td>
    </tr>
  <?php
	}
  ?>  
  </table>            
</div>

<div class="text-center">
  <nav>
  	<?=$contact_list->links()?>
    <!-- <ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul> -->
  </nav>
</div>

@endsection