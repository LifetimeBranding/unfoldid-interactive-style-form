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
            dress?
          </p>
          <button class="button__unfoldid button__unfoldid-primary" id="button-your-lifestyle-start">Start</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Inputs -->
  <div id="inputs-your-lifestyle" class="form-group row d-none">
    <div class="col-12">
      <div class="form-group unfoldid-form-container">
        <fieldset>
          <legend>Work Life</legend>
          <!-- Row: Place of Employment -->
          <div class="form-row mt-2 text-center">
            <div class="col-auto mx-auto mt-2">
              <label for="occupation-1">
                <span>What's your primary occupation?</span></label>
              <input type="text" name="occupation-1" class="form-control" placeholder="">

            </div>
            <div class="col-auto mx-auto mt-2">
              <label for="occupation-2">
                <span>and your secondary occupation?</span> </label>
              <input type="text" name="occupation-2" class="form-control" placeholder="Leave blank if none">
            </div>
          </div>
        </fieldset>
        <!-- Fieldset: Frequency of Business Casual Day wear -->
        <fieldset class="mt-3">
          <legend>I wear Business Casual or Work Wear...</legend>
          <select name="i-wear-work-business-wear" class="custom-select w-100">
          <option selected="selected" disabled="disabled"> </option>
          <option>Most of the time</option>
          <option>Once or twice a week</option>
          <option>Once or twice a month</option>
          <option>Rarely</option>
          </select>
        </fieldset>
        <!-- Fieldset: Most Days -->
        <fieldset>
          <legend>Most days I wear...</legend>
          <select name="most-days-i-wear" class="custom-select w-100">
          <option selected="selected" disabled="disabled"> </option>
          <option>Leggings and a top</option>
          <option>Jeans and a top</option>
          <option>Jeans and a jacket or blazer</option>
          <option>Pants and a top or sweater</option>
          <option>Pants and a jacket or blazer</option>
          <option>Skirt and a sweater</option>
          <option>Casual dress</option>
          <option>Suit separates</option>
          <option>Pant suit</option>
          <option>Work Dress and Blazer</option>
          <option>Formal Suit</option>
          </select>
        </fieldset>

        <!-- Fieldset: Casual wear -->
        <fieldset class="mt-3">
          <legend>My casual wear is mostly...</legend>
          <select name="my-casual-wear-is-mostly" class="custom-select w-100">
          <option selected="selected" disabled="disabled"> </option>
          <option>Jeans and a top</option>
          <option>Jeans and a jacket or blazer</option>
          <option>Pants and a top or sweater</option>
          <option>Pants and a jacket or blazer</option>
          <option>Skirt and a sweater</option>
          <option>Casual dress</option>
          <option>Suit separates</option>
          <option>Pant Suit</option>
          <option>Work dress and blazer</option>
          <option>Formal suit</option>
          </select>
        </fieldset>

        <!-- Fieldset: Going out at night -->
        <fieldset class="mt-3">
          <legend>When I go out at night I mostly wear...</legend>
          <select name="going-out-at-night-i-mostly-wear" class="custom-select w-100">
          <option selected="selected" disabled="disabled"> </option>
          <option>Leggings, a fun top, and flats</option>
          <option>Jeans, a fun top, and flats</option>
          <option>Jeans, a jacket or a top, and heels</option>
          <option>Pants and a top or jacket</option>
          <option>A skirt, a top, and heels</option>
          <option>A simple dress and flats</option>
          <option>A simple dress and heels</option>
          <option>A striking dress and heels</option>
          </select>
        </fieldset>

        <!-- Fieldset: Frequency of Casual Day wear -->
        <fieldset class="mt-3">
          <legend>I dress casually...</legend>
          <select name="i-dress-casually" class="custom-select w-100">
          <option selected="selected" disabled="disabled"> </option>
          <option>Most of the time</option>
          <option>Once or twice a week</option>
          <option>Once or twice a month</option>
          <option>Rarely</option>
          </select>
        </fieldset>

        <!-- Fieldset: Frequency of Date night/night out -->
        <fieldset class="mt-3">
          <legend>I wear Date Night or Girl's Night Out attire</legend>
          <select name="i-wear-date-night-night-out-wear" class="custom-select w-100">
          <option selected="selected" disabled="disabled"> </option>
          <option>Most of the time</option>
          <option>Once or twice a week</option>
          <option>Once or twice a month</option>
          <option>Rarely</option>
          </select>
        </fieldset>

        <!-- Fieldset: Frequency of Formal Wear, Evening, or Cocktail attire -->
        <fieldset class="mt-3">
          <legend>I wear Formal Wear, Evening or Cocktail Attire</legend>
          <select name="i-wear-formal-wear" class="custom-select w-100">
          <option selected="selected" disabled="disabled"> </option>
          <option>Once or twice a month</option>
          <option>Once or twice every 6 months</option>
          <option>Once or twice a year</option>
          <option>Rarely</option>
          </select>
        </fieldset>

        <!-- Fieldset: Frequency of Formal Wear, Evening, or Cocktail attire -->
        <fieldset class="mt-3">
          <legend>How much time and energy should we spend on clothing for these categories?</legend>
          <div class="form-row">
            <div class="col-4">
              <select name="time-to-spend-on-casual" class="custom-select w-100">
              <option selected="selected" disabled="disabled">Casual</option>
              <option disabled>------</option>
              <option>Lots</option>
              <option>Frequent</option>
              <option>Occasional</option>
              <option>Rarely</option>
              <option>None</option>
              </select>
            </div>
            <div class="col-4">
              <select name="time-to-spend-on-business-work" class="custom-select w-100">
              <option selected="selected" disabled="disabled">Business/Work</option>
              <option disabled>------</option>
              <option>Lots</option>
              <option>Frequent</option>
              <option>Occasional</option>
              <option>Rarely</option>
              <option>None</option>
              </select>
            </div>
            <div class="col-4">
              <select name="time-to-spend-on-date-night-girls-night" class="custom-select w-100">
              <option selected="selected" disabled="disabled">Date Night/Girl's Night Out</option>
              <option disabled>------</option>
              <option>Lots</option>
              <option>Frequent</option>
              <option>Occasional</option>
              <option>Rarely</option>
              <option>None</option>
              </select>
            </div>
          </div>

        </fieldset>

        <!-- Fieldset: Category of Items Not to Shop For -->
        <fieldset class="mt-3">
          <legend>Are there any category of clothing items you do not want us to shop for?</legend>
          <select name="items-not-to-shop-for[]" multiple class="form-control w-100" size="7">
          <option>Tops</option>
          <option>Jackets</option>
          <option>Jeans</option>
          <option>Pants</option>
          <option>Skirts</option>
          <option>Dresses</option>
          <option>Shoes</option>
          </select>
        </fieldset>

        <!-- Fieldset: Colors -->
        <fieldset class="mt-3">
          <legend>Are there any colors you love and want us to keep an eye out for? Any colors that look great on you?
          </legend>
          <input type="text" name="colors-to-look-out-for" class="form-control w-100" placeholder="Leave blank if none">
        </fieldset>

        <!-- Fieldset: Categories of Jewelry Not to Shop For -->
        <fieldset class="mt-3">
          <legend>Are there any categories of jewelry or accessory you do not want us to shop for?</legend>

          <select name="jewlery-to-not-shop-for[]" multiple class="form-control w-100" size="4">
          <option>Earrings</option>
          <option>Bracelets</option>
          <option>Rings</option>
          <option>Necklace</option>
          </select>
        </fieldset>

        <!-- Fieldset: Animal Prints - Like -->
        <fieldset class="mt-3">
          <legend>Are there any prints you love and want us to keep an eye out for?</legend>
          <select name="prints-to-look-out-for[]" multiple class="form-control w-100" size="6">
          <option>Animal Print</option>
          <option>Flowery</option>
          <option>Paisley</option>
          <option>Stripes</option>
          <option>Polka Dots</option>
          <option>Plaid</option>
          </select>
        </fieldset>

        <!-- Fieldset: Animal Prints - Don't Like -->
        <fieldset class="mt-3">
          <legend>Any prints listed above that you particularly dislike?</legend>
          <input type="text" name="prints-to-avoid" class="form-control w-100" placeholder="Leave blank if none">
        </fieldset>

        <!-- Fieldset: Fabrics - Avoid -->
        <fieldset class="mt-3">
          <legend>Are there any fabrics or materials that we should specifically avoid?</legend>
          <select name="fabrics-to-avoid[]" multiple class="form-control w-100" size="6">
          <option>Leather</option>
          <option>Pleather</option>
          <option>Fur</option>
          <option>Faux Fur</option>
          <option>Wool</option>
          <option>Polyester</option>
          </select>
        </fieldset>

        <!-- Fieldset: Consignment -->
        <fieldset class="mt-3">
          <legend>Are you happy to shop consignment</legend>
          <div class="d-inline-block w-100">
            <label>
                <input name="ok-with-consignment" value="yes" type="radio"> Yes
            </label>

            <label>
              <input name="ok-with-consignment" value="no" type="radio"> No
          </label>
          </div>
        </fieldset>

        <!-- Fieldset: Consignment -->
        <fieldset class="mt-3">
          <legend>Are there any particular new items or new styles you would like to try out?</legend>
          <textarea name="new-items-to-try-out" class="form-control w-100" rows="3"></textarea>
        </fieldset>

        <!-- Fieldset: Other -->
        <fieldset>
          <legend>Other</legend>
          <div class="form-row mt-2">
            <div class="col-12 mx-auto text-center">
              <label>What is the average cost per item you would like us to spend?</label>
              <select name="cost-per-item-to-spend" class="custom-select mx-auto">
              <option selected="selected" disabled="disabled"> </option>
              <option>$50</option>
              <option>$70</option>
              <option>$100</option>
              <option>$150</option>
              <option>$200</option>
              <option>$500</option>
              <option>$750+</option>
              </select>
            </div>
          </div>
          <div class="form-row mt-5">
            <div class="col-12">
              <label for="other-hobbies-and-interests">Any other hobbies, interests, etc. that would help us shop for you?</label>
              <textarea name="other-hobbies-and-interests" class="form-control w-100" rows="5"></textarea>
            </div>
          </div>
        </fieldset>

      </div>

    </div>
    <!-- Button: Continue toWRAP-UP -->
    <button class="button__unfoldid button__unfoldid-primary mt-3 mx-auto" id="button-your-lifestyle-continue">Continue</button>
  </div>
</div>