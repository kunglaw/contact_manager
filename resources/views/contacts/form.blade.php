@extends('layouts.main') <?php //blade path nya bisa pakai titik ?>

@section("content")

<div class="panel panel-default">
            <div class="panel-heading">
              <strong>Add Contact</strong>
            </div>    
            {!!  Form::open(["url"=>"contacts","files"=>true ]) !!}   
                        <div class="panel-body">
              <div class="form-horizontal">
              	<?php 
					if(!empty(count($errors)))
					{
						echo "<div class='alert alert-danger'><ul>";
						foreach($errors->all() as $err)
						{
							echo "<li> $err </li>";	
						}
						echo "</ul></div>";
					}
				?>    
				
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Name</label>
                      <div class="col-md-8">
                        <input type="text" name="name" id="name" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="company" class="control-label col-md-3">Company</label>
                      <div class="col-md-8">
                        <input type="text" name="company" id="company" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="control-label col-md-3">Email</label>
                      <div class="col-md-8">
                        <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phone" class="control-label col-md-3">Phone</label>
                      <div class="col-md-8">
                        <input type="text" name="phone" id="phone" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Address</label>
                      <div class="col-md-8">
                        <textarea name="address" id="address" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group"> 
                      <label for="group" class="control-label col-md-3">Group</label>
                      <div class="col-md-5">
                      	<?php 
							//$a = App\Models\Group::pluck("name","id");
							//print_r($a);
						?>
                        {!! Form::select("group_id",App\Models\Group::pluck("name","id"),null,["class"=>"form-control"]) !!}
                      </div>
                      <div class="col-md-3">
                        <a href="#" id="add-group-btn" class="btn btn-default btn-block">Add Group</a>
                      </div>
                    </div>
                    <div class="form-group" id="add-new-group">
                      <div class="col-md-offset-3 col-md-8">
                        <div class="input-group">
                          <input type="text" name="new_group" id="new_group" class="form-control">
                          <span class="input-group-btn">
                            <a href="#" class="btn btn-default">
                              <i class="glyphicon glyphicon-ok"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                        <img src="http://placehold.it/150x150" alt="Photo">
                      </div>
                      	<input type="file" name="photo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <a href="#" class="btn btn-default">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {!! Form::close() !!}
          </div>

@endsection