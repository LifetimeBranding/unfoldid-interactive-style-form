                <div class="tab-pane fade" id="v-pills-about-you" role="tabpanel" aria-labelledby="v-pills-about-you-tab">

                  <!-- Splash Screen -->
                  <section id="section-about-you">
                    <div class="row">
                      <!-- Aricia Pose -->
                      <div class="pose-section col-4">
                        <img src="images/aricia-poses/about-you.jpg" alt="About You Pose">
                      </div>
                      <!-- Copy -->
                      <div class="splash-text col-8">
                        <div class="splash-text">
                          <h3>About You</h3><br>
                          <p>Tell us a little bit about yourself. The more information we have about you, your style and your
                            shopping needs the better our shopping trip will be.</p>
                          <button id="button-about-you-start" class="button__unfoldid button__unfoldid-primary" onclick="u.preventBack();">Start</button>
                        </div>
                      </div>
                    </div>

                  </section>

                  <!-- Inputs -->
                  <div id="inputs-about-you" class="form-group row d-none">
                    <div class="col-12 text-center">
                      <div class="form-group unfoldid-form-container">
                        <fieldset>

                          <legend>Contact Information</legend>

                          <!-- Row: First & Last Name -->
                          <div class="form-row">

                            <div class="col-6">
                              <input type="text" name="first-name" class="form-control w-75" placeholder="First Name" size="15">
                            </div>
                            <div class="col-6">
                              <input type="text" name="last-name" class="form-control w-75" placeholder="Last Name" size="15">
                            </div>
                          </div>

                          <!-- Row: E-Mail and Phone Number -->
                          <div class="form-row mt-2">

                            <div class="col-6">
                              <input type="email" name="email-address" class="form-control w-75" placeholder="E-Mail Address" size="15">
                            </div>

                            <div class="col-6">
                              <input type="tel" name="phone-number" class="form-control w-75" placeholder="Phone Number" size="15">
                            </div>

                          </div>

                          <!-- Row: Street & Street #2 -->
                          <div class="form-row mt-2">

                            <div class="col-6">
                              <input type="text" name="street-address" class="form-control w-75" placeholder="Street" size="15">
                            </div>

                            <div class="col-6">
                              <input type="text" name="street-address-2" class="form-control w-75" placeholder="Street #2" size="15">
                            </div>

                          </div>

                          <!-- Row: City, State, and Zip -->
                          <div class="form-row mt-2">

                            <div class="col-6">
                              <input type="text" name="city-and-state" class="form-control w-75" placeholder="City, State" size="15">
                            </div>

                            <div class="col-6">
                              <input type="text" name="zip-code" class="form-control w-75" placeholder="Zip" size="15" maxlength="5">
                            </div>

                          </div>

                        </fieldset>

                        <!-- Fieldset: Personal Information -->
                        <fieldset>
                          <legend>Personal Information</legend>
                          <div class="form-row mt-2">
                            <div class="col-3 col-form-label">
                              <label>Birthday: </label>
                            </div>
                            <div class="col-4">
                              <!-- Month -->
                              <input type="text" name="birthday-month" class="form-control w-100" placeholder="Month" size="13">


                            </div>
                            <div class="col-2">
                              <!-- Day -->
                              <input type="text" name="birthday-day" class="form-control w-100" placeholder="Day" size="3">
                            </div>
                            <div class="col-3">
                              <!-- Year -->
                              <input type="text" name="birthday-year" class="form-control w-100" placeholder="Year" size="5">
                            </div>
                          </div>

                          <div class="form-row mt-2">
                            <div class="col-3 col-form-label">
                              <label>Color: </label>
                            </div>
                            <div class="col-auto">
                              <input type="text" name="eye-color" class="form-control" placeholder="Eyes" size="10">
                            </div>
                            <div class="col-auto">
                              <input type="text" name="hair-color" class="form-control" placeholder="Hair" size="10">

                            </div>
                          </div>
                        </fieldset>

                      </div>

                      <button id="button-about-you-continue" class="button__unfoldid button__unfoldid-primary mt-3">Continue</button>
                    </div>
                  </div>

                </div>