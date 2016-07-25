<br><br><br><br>

<fieldset>


<legend><h2>New post</h2></legend>

<?php echo form_open(base_url().'Home/new_post') ?>
<div class="form-group">
  <label class="col-md-4 control-label" for="Company Name">Title</label>
  <div class="col-md-6">
  <input name="title" type="text" class="form-control input-md" placeholder="Lorem..." required="Es necesario un título">
    <p><?php echo form_error('title')?></p>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Address">Description</label>
  <div class="col-md-6">
    <textarea class="form-control" style="resize: none;" rows="6" name="desc" placeholder="Lorem ipsum..."></textarea>
      <p><?php echo form_error('desc')?></p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Address">Content</label>
  <div class="col-md-7">
    <textarea class="form-control" style="resize: none;" rows="12" name="content" placeholder="Lorem ipsum..."></textarea>
      <p><?php echo form_error('content')?></p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" name="Save" class="btn btn-success">Save</button>
  </div>
</div>
<?php echo form_close() ?>
</fieldset>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
