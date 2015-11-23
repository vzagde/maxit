<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once( 'includes/head.php'); ?>
</head>
<body>

  <section id="container">
    <aside> <?php include_once( 'includes/sidebar.php'); ?> </aside>

    <!-- main content !-->
    <section id="main-content">
      <section class="wrapper site-min-height">
          <h1><?=strtolower($this->uri->segment(2, 0))?>.</h1>
            <hr>
            <div class="row mt">
            <?php
              foreach ($offers as $value) {
            ?>

              <div class="col-lg-6">
              <?php echo form_open('admin/update_offer');?>
                  <h3>ID</h3><input class="form-control" type="text" id="id" name="id" value="<?=$value->id?>" readonly>
                  <h3>Card Name</h3><input class="form-control" type="text" id="card_name" name="card_name" value="<?=$value->card_name?>" readonly>
                  <h3>Offer Name</h3><input class="form-control" type="text" id="offer" name="offer" value="<?=$value->offer?>">
                  <h3>Offer Content</h3><textarea class="form-control" type="text" id="fname" name="fname" rows="5"><?=$value->offer_content?></textarea>
                  <h3>Offer url</h3><input class="form-control" type="text" id="url" name="url" value="<?=$value->offer_url?>" readonly>
                  <h3>Establishment</h3><input class="form-control" type="text" id="establishment" name="establishment" value="<?=$value->establishment_id?>" placeholder="Establishment">
                  <h3>Offer Type</h3><input class="form-control" type="text" id="offer_type" name="offer_type" value="<?=$value->offer_type?>" placeholder="Offer Type">
                  <h3>Amount</h3><input class="form-control" type="text" id="amount" name="amount" value="<?=$value->amount?>" placeholder="Amount">
                  <h3>Select City</h3><input class="form-control" type="text" id="city" name="city" value="<?=$value->city?>" placeholder="City">
                  <h3>Applicable Across Category</h3><input class="form-control" type="text" id="category" name="category" value="<?=$value->applicable_across_category?>" placeholder="Category">
                  <h3>Week Days</h3><input class="form-control" type="text" id="week_days" name="week_days" value="<?=$value->week_days?>" placeholder="Week Days">
                  <h3>Terms And Condition</h3><textarea class="form-control" type="text" id="tnc" name="tnc" rows="5" placeholder="Terms and Conditions"><?=$value->tnc?></textarea>
                  <h3>What You Need to Know</h3><textarea class="form-control" type="text" id="need_to_know" name="need_to_know" rows="5" placeholder="What You Need to Know"><?=$value->imp_tnc?></textarea>
                  <h3>Specific Location Exits</h3>
                  <div class="form-group">
                    <label for="sel1">Select from list:</label>
                    <select class="form-control" id="module1" name="module1" value="<?=$value->specific_location_exists?>">
                      <option value="">Select Option</option>
                      <option value="<?=$value->specific_location_exists?>" selected><?=$value->specific_location_exists?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                  <!-- <h3>Offer Category</h3><input class="form-control" type="text" id="offer_category" name="offer_category" value="<?=$value->offer_category?>" placeholder="Offer Category"> -->
<!--                   <h3>Offer Category</h3>
                  <div class="form-group">
                    <label for="sel1">Select from list:</label>
                    <select class="form-control chosen-select" id="offer_category" name="offer_category[]" value="<?=$value->offer_category?>">
                      <option value="">Select Option</option>
                      <?php foreach($categories as $c){ 
                        $s = ($value->offer_category == $c->category) ? ('selected') : ('');
                      ?>
                        <option value="<?=$c->id?>" <?=$s?> ><?=$c->category?></option>
                      <?php } ?>

                    </select>
                  </div> -->

<!--                   <h3>Offer sub category</h3>

                  <select class="form-control chosen-select" id="offer_subcategory" name="offer_subcategory[]" value="<?=$value->offer_subcategory?>">
                      <option value="">Select Option</option>
                  </select> -->
<!--                   <?php echo $value->offer_type?> -->
<!--                   <h3>Offer Type</h3> -->
<!--                   <div class="form-group">
                    <label for="sel1">Select from list:</label>
                    <select class="form-control" id="module" name="module" value="<?=$value->offer_type?>">
                      <option value="">Select Option</option>
                      <option value="<?=$value->offer_type?>" selected><?=$value->offer_type?></option>
                      <option value="Discount">Discount</option>
                      <option value="Cashback">Cashback</option>
                      <option value="Discount Percentage">Discount In Percentage</option>
                      <option value="Cashback Percentage">Cashback In Percentage</option>
                      <option value="Reward Points">Reward Points</option>
                      <option value="Free Reward Points/Miles">Free Reward Points/Miles</option>
                      <option value="Lounge Access">Lounge Access</option>
                      <option value="Free Gifts">Free Gifts</option>
                      <option value="Upgrades And Privileges">Upgrades And Privileges</option>
                      <option value="EMI">EMI</option>
                      <option value="Miscellaneous">Miscellaneous</option>
                      <option value="Reward Point Multiplier">Reward Point Multiplier</option>
                      <option value="Bonus Points">Bonus Points</option> 
                    </select>
                  </div> -->
                  <br><br><br>
                  <center><input type="submit" name="Add User" class="form-control btn btn-warning" style="width:200px;"></center>
              </form>
              </div>

              <br>
            <?php
              }
            ?>
            <div class="col-md-12">
              <?php
                foreach ($prev_link as $pre) {
              ?>
                  <center><a href="<?=base_url();?>admin/editoffers/<?=$pre->id?>"><button class="form-control btn btn-primary" style="width:200px;">Previous</button></a></center>
              <?php
                }
              ?>
              <?php
                foreach ($nxt_link as $nxt) {
              ?>
                <center><a href="<?=base_url();?>admin/editoffers/<?=$nxt->id?>"><button class="form-control btn btn-primary" style="width:200px;">Next</button></a></center>
              <?php
                }
              ?>
            </div>
            </div>

            </section>
            <!-- /wrapper -->
        </section>
        <!-- /MAIN CONTENT -->

        <!--main content end-->
        <!--footer start-->
        <!--footer end-->
    </section>

    <?php include_once( 'includes/site_bottom_scripts.php'); ?>

    <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen/chosen.min.css">
    <script src="<?=base_url()?>assets/css/chosen/chosen.jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        $(".chosen-select").chosen({max_selected_options: 5});


        $('#offer_category').change(function(){
          
          var cat_id = $(this).val()

          $.ajax({
            url:'<?=base_url()?>admin/get_sub_categories/'+cat_id,
            success: function(data){
              
              $('#offer_subcategory')
                .find('option')
                .remove()
                .end()
                .append(data);

                $('#offer_subcategory').val('').trigger('chosen:updated');
            }
          })

        })


          

      })
    </script>
</body>

</html>
