<div class="tab-pane fade" id="v-pills-fit" role="tabpanel" aria-labelledby="v-pills-fit-tab">

  <!-- Splash Screen -->
  <section id="section-fit">
    <div class="row">
      <!-- Aricia Pose -->
      <div class="pose-section col-4">
        <img src="images/aricia-poses/fit-and-sizes.jpg" alt="Fit and Sizes Pose">
      </div>

      <!-- Copy -->
      <div class="col-8">
        <div class="splash-text">
          <h3>Fit &amp; Sizes</h3>
          <br>
          <p>You’ve got great taste! Next, tell us how you would like your clothes to fit. What do you find difficult when shopping
            for clothes? What features do you wish to show off, and which do you want to avoid?</p>
          <button id="button-fit-start" class="button__unfoldid button__unfoldid-primary">Start</button>
        </div>
      </div>
    </div>

  </section>

  <!-- Inputs -->
  <div id="inputs-fit" class="d-none form-group row">
    <div class="col-12 text-center">
      <div class="form-group unfoldid-form-container">
        <!-- Fieldset: Upper Body Fit -->
        <fieldset>
          <legend>How do you like your upper body clothes to fit?</legend>

          <!-- Upper Body -->
          <div id="carousel-upper-body-fit-photo">
            <div class="text-center mx-1">
              <span class="my-2">Slim</span>
              <img src="images/men/fit-preferences/upper-body/slim.png" class="mx-auto" alt="A - Slim Fit" width="200" height="300">
              <input type="radio" name="upper-body-fit" value="a" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Regular</span>
              <img src="images/men/fit-preferences/upper-body/regular.png" class="mx-auto" alt="B - Regular Fit" width="200" height="300">
              <input type="radio" name="upper-body-fit" value="b" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Relaxed</span>
              <img src="images/men/fit-preferences/upper-body/loose-relaxed.png" class="mx-auto" alt="C - Loose/Relaxed Fit" width="200"
                height="300">
              <input type="radio" name="upper-body-fit" value="c" class="my-2">
            </div>
          </div>
        </fieldset>
        <!-- Fieldset: Jeans Fit -->
        <fieldset class="mt-3">

          <!-- Lower Body-->
          <legend>How do you like your jeans to fit?</legend>
          <div id="carousel-lower-body-fit-photo">
            <div class="text-center mx-1">
              <span class="my-2">Slim</span>
              <img src="images/men/fit-preferences/lower-body/slim.png" class="mx-auto" alt="A - Slim Fit" width="200" height="300">
              <input type="radio" name="lower-body-fit" value="a" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Regular</span>
              <img src="images/men/fit-preferences/lower-body/original.png" class="mx-auto" alt="B - Original" width="200" height="300">
              <input type="radio" name="lower-body-fit" value="b" class="my-2">
            </div>
            <div class="text-center mx-1">
              <span class="my-2">Relaxed</span>
              <img src="images/men/fit-preferences/lower-body/regular.png" class="mx-auto" alt="C - Regular" width="200" height="300">
              <input type="radio" name="upper-body-fit" value="c" class="my-2">
            </div>
          </div>
        </fieldset>
        <!-- Fieldset: Body Measurements [Added w-100 class to prevent row sharing with Sizes] -->
        <fieldset class="mt-3">
          <legend>Body Measurements</legend>

          <!-- Row: Height -->
          <div class="form-row mt-2">
            <div class="col-6">
              <div class="row">
                <div class="col-4 col-form-label">
                  <label>Height: </label>
                </div>
                <div class="col-4">
                  <input name="height-feet" type="text" placeholder="ft" class="form-control w-100">
                </div>
                <div class="col-4">
                  <input name="height-inches" type="text" placeholder="in" class="form-control w-100">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-6 col-form-label">
                  <label>Weight:</label>
                </div>
                <div class="col-6">
                  <input type="text" name="weight" class="form-control w-100" placeholder="lbs" size="4">
                </div>
              </div>
            </div>
          </div>
        </fieldset>

        <!-- Fieldset: Sizes -->
        <fieldset class="mt-3">
          <legend>Sizes</legend>

          <!-- Row: Tops -->
          <div class="form-row mt-2">
            <div class="col-3 col-form-label text-center">
              <label>Tops: </label>
            </div>
            <!-- T-Shirts -->
            <div class="col-auto">
              <select name="t-shirt-size" class="custom-select">
                              <option value="XS">XS</option>
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                              <option value="XXXL">XXXL</option>
                              </select>
              <label>T-Shirts</label>
            </div>
            <!-- Neck -->
            <div class="col-auto">
              <select name="neck-size" class="custom-select">
                                  <option value="15">15</option>
                                  <option value="15.5">15.5</option>
                                  <option value="16">16</option>
                                  <option value="16.5">16.5</option>
                                  <option value="17">17</option>
                                  <option value="17.5">17.5</option>
                                  <option value="18">18</option>
                                  <option value="18.5">18.5</option>
                                  <option value="19">19</option>
                                  <option value="19.5">19.5</option>
                                  <option value="20">20</option>
                                </select>
              <label>Neck</label>
            </div>
            <!-- Sleeve -->
            <div class="col-auto">
              <select name="sleeve-size" class="custom-select">
                                  <option value="32">32</option>
                                  <option value="33">33</option>
                                  <option value="34">34</option>
                                  <option value="35">35</option>
                                  <option value="36">36</option>
                                  <option value="37">37</option>
                                  <option value="38">38</option>
                                </select>
              <label>Sleeve</label>
            </div>
            <!-- Jacket -->
            <div class="col-auto">
              <select name="jacket-size" class="custom-select">
                              <option value="36S">36S</option>
                              <option value="36R">38R</option>
                              <option value="38S">38S</option>
                              <option value="38R">38R</option>
                              <option value="40S">40S</option>
                              <option value="40R">40R</option>
                              <option value="40L">40L</option>
                              <option value="42S">42S</option>
                              <option value="42R">42R</option>
                              <option value="42L">42L</option>
                              <option value="44S">44S</option>
                              <option value="44R">44R</option>
                              <option value="44L">44L</option>
                              <option value="46R">46R</option>
                              <option value="46L">46L</option>
                              <option value="48R">48R</option>
                              <option value="48L">48L</option>
                              <option value="50R">50R</option>
                              <option value="50L">50L</option>
                              <option value="Other">Other</option>
                              </select>
              <label>Jacket</label>
            </div>
          </div>
          <!-- Row: Pants -->
          <div class="form-row mt-3">
            <div class="col-3 col-form-label text-center">
              Pants:
            </div>
            <!-- Waist -->
            <div class="col-auto text-center">

              <select name="waist-size" class="custom-select">
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                              <option value="32">32</option>
                              <option value="33">33</option>
                              <option value="34">34</option>
                              <option value="36">36</option>
                              <option value="38">38</option>
                              <option value="40">40</option>
                              <option value="42">42</option>
                              <option value="44">44</option>
                              <option value="46">46</option>
                              </select>
              <label>W</label>
            </div>
            <div class="col-auto col-form-label"><span class="d-inline-block align-bottom">x</span></div>
            <!-- Inseam -->
            <div class="col-auto text-center">

              <select name="inseam-size" class="custom-select">
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                
                              </select>
              <label>L</label>
            </div>


          </div>
          <div class="form-row mt-2">
            <div class="col-3 col-form-label"> <label>Shoes: </label></div>
            <!-- Size -->
            <div class="col-auto text-center">

              <select name="shoe-size" class="custom-select">
                              <option value="6">6</option>
                              <option value="6.5">6.5</option>
                              <option value="7">7</option>
                              <option value="7.5">7.5</option>
                              <option value="8">8</option>
                              <option value="8.5">8.5</option>
                              <option value="9">9</option>
                              <option value="9.5">9.5</option>
                              <option value="10">10</option>
                              <option value="10.5">10.5</option>
                              <option value="11">11</option>
                              <option value="11.5">11.5</option>
                              <option value="12">12</option>
                              <option value="12.5">12.5</option>
                              <option value="13">13</option>
                              <option value="13.5">13.5</option>
                              <option value="14">14</option>
                              </select>
              <label>Size</label>
            </div>

          </div>

        </fieldset>
      </div>
      <!-- Button: Continue to YOUR LIFESTYLE -->
      <button id="button-fit-continue" class="button__unfoldid mx-auto button__unfoldid-primary mt-3">Continue</button>
    </div>

  </div>
</div>