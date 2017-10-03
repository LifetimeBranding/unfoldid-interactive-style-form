<div class="tab-pane fade" id="v-pills-your-lifestyle" role="tabpanel" aria-labelledby="v-pills-your-lifestyle-tab">
  <!-- Splash Screen -->
  <section id="section-your-lifestyle">
    <div class="row">
      <!-- Aricia Pose -->
      <div class="pose-section col-4">
        <img src="images/aricia-poses/your-lifestyle.jpg" alt="Your Lifestyle Pose">
      </div>

      <!-- Copy -->
      <div class="col-8">
        <div class="splash-text">
          <h3>Your Lifestyle</h3>
          <br>
          <p>Almost there! Now, give us guidelines for our shopping trip. What do you typically wear day-to-day, on special
            occasions, or to work? What pieces do you want us to focus on, and to avoid? How would you like to see yourself
            dress?</p>
          <button class="button__unfoldid button__unfoldid-primary" id="button-your-lifestyle-start">Start</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Inputs -->
  <div id="inputs-your-lifestyle" class="form-group row d-none">
    <div class="col-12">
      <div class="form-group unfoldid-form-container">
        <!-- Fieldset: Work Life -->
        <fieldset>
          <legend>How do you dress for work?</legend>

          <div id="carousel-work-attire-photo">
            <div class="text-center mx-1">
              <span class="my-2">Casual</span>
              <img src="images/men/lifestyle/work-attire/casual.png" width="200" height="300" class="mx-auto" alt="Casual - No Dress Code">
              <input type="radio" name="work-attire" value="casual" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Business Casual</span>
              <img src="images/men/lifestyle/work-attire/business-casual.png" width="200" height="300" class="mx-auto" alt="Business Casual">
              <input type="radio" name="work-attire" value="business-casual" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Business</span>
              <img src="images/men/lifestyle/work-attire/business.png" width="200" height="300" class="mx-auto" alt="Business - Button-Up and Pants">
              <input type="radio" name="work-attire" value="business" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Suiting</span>
              <img src="images/men/lifestyle/work-attire/suiting.png" width="200" height="300" class="mx-auto" alt="Suiting">
              <input type="radio" name="work-attire" value="formal" class="my-2">
            </div>
          </div>


          <!-- Row: Place of Employment -->
          <div class="form-row mt-2 text-center">
            <div class="col-auto mx-auto mt-2">
              <label for="occupation-1">
                <span>What's your primary occupation?</span> </label>
                <input type="text" name="occupation-1" class="form-control" placeholder="">
             
            </div>
            <div class="col-auto mx-auto mt-2">
                <label for="occupation-2">
                    <span>and your secondary occupation?</span> </label>
                <input type="text" name="occupation-2" class="form-control" placeholder="Leave blank if none">
              </div>
          </div>
        </fieldset>

        <!-- Fieldset: Social Life -->
        <fieldset class="mt-3">
          <legend>How do you dress when you go out?</legend>


          <div id="carousel-going-out-photo">
            <div class="text-center mx-1">
              <span class="my-2">Shirt &amp; Jeans</span>
              <img src="images/men/lifestyle/going-out/casual.png" width="200" height="300" class="mx-auto" alt="Casual - Shirt and Jeans">
              <input type="radio" name="going-out-attire" value="casual" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Bold</Span>
              <img src="images/men/lifestyle/going-out/bold.png" width="200" height="300" class="mx-auto" alt="Bold - Stand Out in the Crowd">
              <input type="radio" name="going-out-attire" value="bold" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Confident</span>
              <img src="images/men/lifestyle/going-out/sharp.png" width="200" height="300" class="mx-auto" alt="Sharp - Confident and Put Together">
              <input type="radio" name="going-out-attire" value="sharp" class="my-2">
            </div>
          </div>

        </fieldset>

        <!-- Fieldset: Other -->
        <fieldset>
          <legend>Other</legend>
          <div class="form-row">
            <div class="col-12 mx-auto text-center">
              <label for="average-cost-per-item">What is the average cost per item you'd like us to spend?</label>
              <select name="average-cost-per-item" class="custom-select mt-1">
                              <option>---</option>
                              <option value="50">$50</option>
                              <option value="75">$70</option>
                              <option value="100">$100</option>
                              <option value="150">$150</option>
                              <option value="200">$200</option>
                              <option value="500">$500</option>
                              <option value="750">$750+</option>
                              </select>
            </div>
          </div>
          <div class="form-row mt-5">
            <div class="col-12">
              <label for="other-hobbies-and-interests">Any other hobbies, interests, habits, etc. that would help us shop for you?</label>
              <textarea name="other-hobbies-and-interests" rows="5" class="form-control w-100"></textarea>
            </div>
          </div>
        </fieldset>

      </div>

    </div>
    <!-- Button: Continue to WRAP-UP -->
    <button class="button__unfoldid mx-auto button__unfoldid-primary mt-3" id="button-your-lifestyle-continue">Continue</button>
  </div>
</div>