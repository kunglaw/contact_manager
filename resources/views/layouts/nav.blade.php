<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand text-uppercase" href="<?=url("contacts")?>">            
        My contact
      </a>
    </div>
    <!-- /.navbar-header -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <div class="nav navbar-right navbar-btn">
        <a href="<?=url("contacts/create")?>" class="btn btn-default">
          <i class="glyphicon glyphicon-plus"></i> 
          Add Contact
        </a>
      </div>
    </div>
  </div>
</nav>