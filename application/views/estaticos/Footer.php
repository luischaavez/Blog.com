<?php echo form_open(base_url().'Contacto/Send') ?>
<div class="jumbotron jumbotron-sm"> <div class="container"> <div class="row"> <div class="col-sm-12 col-lg-12"> <h1 class="h1"> Contact us <small>Feel free to contact us</small></h1> </div> </div> </div> </div> <div class="container"> <div class="row">
  <div class="col-md-8">
     <div class="well well-sm"> <form> <div class="row">
       <div class="col-md-6"> <div class="form-group">
         <label for="name"> Name</label>
         <input type="text" class="form-control" name="nombre_email" placeholder="Enter name" required="required" />
       </div>
       <div class="form-group"> <label for="email"> Email Address</label>
         <div class="input-group"> <span class="input-group-addon">
           <span class="glyphicon glyphicon-envelope"></span> </span>
           <input type="email" class="form-control" name="correo" placeholder="Enter email" required="required" />
         </div> </div>

             </div>
               <div class="col-md-6">
                  <div class="form-group"> <label for="name"> Message</label>
                     <textarea name="mensaje" style="resize: none;"class="form-control" rows="9" cols="25" required placeholder="Message">
                     </textarea>
                     </div>
                    </div>
                     <div class="col-md-12">
                       <button type="submit" class="btn btn-success pull-right" id="btnContactUs"> Send Message</button>
                      </div>
                    </div>
                   </form>
                  </div>
                </div>
                <?php echo form_close() ?>
                <div class="col-md-4">
                   <form>
                     <legend><span class="glyphicon glyphicon-globe"></span> Our Team</legend>
                      <address> <strong><h3>Blvd. Saltillo.</h3></strong>
                        <br>1st Floor, 'Ashutosh' Bunglow, Opp. A. J. Classic,
                        <br> Behind Aparna House, Near Mahalaxmi Lawns,
                        <br> Karve Nagar, Pune - 411052
                        <br> Phone: +52 844 123 45 67
                        <br> E-mail:
                        <a href="mailto:#">example@gmail.com</a> </address>
                      </form>
                     </div>
                   </div>
                 </div>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                 <!-- Include all compiled plugins (below), or include individual files as needed -->
                 <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
               </body>
               </html>
