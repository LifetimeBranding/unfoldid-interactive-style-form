<div class="tab-pane fade" id="v-pills-wrap-up" role="tabpanel" aria-labelledby="v-pills-wrap-up-tab">

                  <!-- Splash Screen -->
                  <section id="section-wrap-up">
                    <div class="row">
                      <!-- Aricia Pose -->
                      <div class="pose-section col-4">
                        <img src="images/aricia-poses/wrap-up.jpg" alt="Wrap-Up Pose">
                      </div>

                      <!-- Copy -->
                      <div class="col-8">
                        <div class="splash-text">
                          <h3>Wrap Up</h3><br>
                          <p>Finally, tell us what’s on your shopping list and budget so we can better understand your needs.
                            Please provide us with any additional information here, that you would like to share. </p>
                          <button id="button-wrap-up-start" class="button__unfoldid button__unfoldid-primary">Start</button>
                        </div>
                      </div>
                    </div>
                  </section>

                  <!-- Inputs -->
                  <div id="inputs-wrap-up" class="d-none text-center">
                    <div class="form-group unfoldid-form-container">
                      <!-- Fieldset: Photo-->
                      <fieldset class="my-3">
                        <legend>Photos <span class="badge badge-info">Optional</span></legend>
                        <label>Link us to your social media</label>

                        <div class="form-row">
                          <div class="col-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                              <input type="text" name="facebook-account" class="form-control" placeholder="Facebook" aria-label="Facebook">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                              <input type="text" name="instagram-account" class="form-control" placeholder="Instagram" aria-label="Instagram">
                            </div>
                          </div>
                        </div>
                        <!--<p class="mt-3">-or-</p>
                        <div class="form-row">
                          <div class="col-auto mx-auto">

                            <label>Upload a photo</label>
                            <label class="custom-file">
                            <input name="photo" type="file" class="custom-file-input">
                              <span class="custom-file-control"></span>
                            </label>
                          </div>
                        </div>-->

                      </fieldset>

                      <!-- Fieldset: Shopping Preference -->
                      <fieldset class="my-3">
                      <legend>Shopping List</legend>
                      <label>Would you like us to make your shopping list, you to make your own, or a combination of both?</label>
                      
                      <select id="shopping-list-select" name="shopping-list-preference" class="custom-select" onchange="f.shoppingList();">
                      <option value="make-one-for-me">I want you to make one for me</option>
                      <option value="ill-provide-one">I'll make my own</option>
                      <option value="little-of-both">A little of both</option>
                      </select>
              
              
              
                      <div id="shopping-list-section" class="mt-2 d-none text-center">
                      <div class="form-group row">
                      <div class="col-12">
                        <input class="text" name="shopping-list-1" placeholder="Enter item" class="form-control w-100"><br>
                        <input class="text" name="shopping-list-2" placeholder="Enter item" class="form-control w-100"><br>
                        <input class="text" name="shopping-list-3" placeholder="Enter item" class="form-control w-100"><br>
                        <input class="text" name="shopping-list-4" placeholder="Enter item" class="form-control w-100"><br>
                        <input class="text" name="shopping-list-5" placeholder="Enter item" class="form-control w-100"><br>
                        <small>Enter more in final notes</small>
                      </div>
                      </div>
                      </div>
                      </fieldset>

                     <!-- Fieldset: Other -->
      <fieldset class="my-3">
      <legend>Final Notes</legend>
      <textarea name="wrap-up-notes" class="form-control w-100" placeholder="Enter any other information you think is important here" rows="5"></textarea>
    </fieldset>
  </div>
  <span class="d-block mt-2">Note: Please <a href="#" style="color: #B0851E;" onclick="$('#v-pills-about-you-tab').trigger('click');">review</a> your responses before submitting.
  <br>
  <small>(Do not click your browser's back button)</small>
  </span>
  <button id="button-wrap-up-continue" class="button__unfoldid button__unfoldid-primary mt-3" onclick="f.submitForm();">Submit Form</button>
</div>

</div>