<html>
    <head>
        <title>storepos</title>
        <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css" type="text/css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    </head>
    <body>

    <nav class="navbar navbar-default ">
    <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">StorePos</a>  
     </div>
     <div id ="navbar">
     <ul class="nav navbar-nav navbar-right">
     <?php if($this->session->userdata('logged_in')): ?>
     <li><a href="<?php echo base_url(); ?> users/logout">Logout</a></li>
     <?php endif; ?>
     </ul>
     </div>  
      </div>
    </nav>

    <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_registered').'</p>' ;?>
<?php endif; ?>
<?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class=" alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ;?>
<?php endif; ?>
<?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>' ;?>
<?php endif; ?>
<?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>' ;?>
<?php endif; ?>
