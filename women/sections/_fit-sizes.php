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
          <select name="upper-body-fit" class="custom-select">
          <option>Tight &amp; Sleek</option>
          <option>Fitted</option>
          <option>Straight</option>
          <option>Loose</option>
          <option>Oversized</option>
        </select>
        </fieldset>
        <!-- Fieldset: Lower Body Fit -->
        <fieldset class="mt-3">
          <legend>How do you prefer clothing to fit on your lower body?</legend>
          <select name="lower-body-fit" class="custom-select">
          <option>Tight &amp; Sleek</option>
          <option>Fitted</option>
          <option>Straight</option>
          <option>Loose</option>
          <option>Oversized</option>
        </select>
        </fieldset>

        <!-- Multiple Selectbox: Common Issues -->
        <fieldset class="mt-3">
          <legend>Do you have any of these common issues when buying clothing?</legend>
          <select name="common-issues[]" multiple class="form-control my-2 w-100">
                            <option>Sleeves are too long</option>
                            <option>Sleeves are too short</option>
                            <option>Pants are too long</option>
                            <option>Pants are too short</option>
                            <option>Sleeves are too tight</option>
                            <option>Sleeves are too loose</option>
                            <option>Waist fits, but too big through the hip</option>
                            <option>Hips fits but too big through the waist (the waist gap)</option>
                            <option>Tops are too long</option>
                            <option>Tops are too short</option>
                            <option>Shoulders fit, but too big through the waist</option>
                            <option>Waist fits, but shoulder is too big</option>
                            <option>Shoulders fit, but bust is too tight</option>
                            <option>Shoulders fit, but bust is too loose</option>
                            <option>Most earrings are too heavy</option>
                          </select>
          <p class="mt-3">
            <small>Note: Press <kbd><kbd>⌘ + click</kbd></kbd> or <kbd><kbd><i class="fa fa-windows" aria-hidden="true"></i> + click</kbd></kbd> to select multiple options</small>
          </p>
        </fieldset>

        <!-- Fieldset: Measurements -->
        <fieldset class="mt-3">

          <legend>Your Measurements</legend>
          <!-- Height and Weight -->
          <div class="form-row my-2">

            <div class="col-6">
              <div class="row">
                <div class="col-4 col-form-label">
                  <label>Height: </label>
                </div>
                <div class="col-4">
                  <input type="text" name="height-feet" placeholder="ft" class="form-control w-100">
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
                  <input name="weight" type="text" class="form-control" placeholder="lbs" size="4">
                </div>
              </div>
            </div>
          </div>
          <!-- Row: Silhouette -->
          <div class="form-row mt-2">
            <div class="col">
              <img src="images/women/silhouette.jpg" alt="Silhouette" height="400">
            </div>
            <div class="col-4">
              <p><small>Your silhouette is made up of four simple measurements: shoulders, bust, waist, and bottom.
                                <br><br>These measurements aid in finding the perfect fit. So if you are able, grab a tape
                                measure (and a friend)! If it's too much bother, we'll make it work without measuring.</small>
              </p>
            </div>

            <!-- Silhouette Inputs -->

            <div class="form-row mt-2">
              <div class="col-3">
                <input type="text" name="shoulder-size" placeholder="Shoulder" class="form-control w-75">
              </div>
              <div class="col-3">
                <input type="text" name="bust-size" placeholder="Bust" class="form-control w-75">
              </div>
              <div class="col-3">
                <input type="text" name="waist-size" placeholder="Waist" class="form-control w-75">
              </div>
              <div class="col-3">
                <input type="text" name="bottom-size" placeholder="Bottom" class="form-control w-75">

              </div>
            </div>
          </div>
        </fieldset>

        <!-- Multiple Selectbox: Favorite Body Part to Flaunt -->
        <fieldset class="mt-3">
          <legend>Which body part is your favorite to flaunt?</legend>
          <select name="favorite-body-part-to-flaunt[]" multiple class="form-control my-2 w-100">
          <option>Arms</option>
          <option>Cleavage</option>
          <option>Shoulders</option>
          <option>Waist</option>
          <option>Bottom</option>
          <option>Legs</option>
          </select>
          <p class="mt-3">
            <small>Note: Press <kbd><kbd>⌘ + click</kbd></kbd> or <kbd><kbd><i class="fa fa-windows" aria-hidden="true"></i> + click</kbd></kbd> to select multiple options</small>
          </p>
        </fieldset>

        <!-- Multiple Selectbox: What you prefer to keep covered -->
        <fieldset class="mt-3">
          <legend>Anything you prefer to keep covered?</legend>
          <select name="body-part-preferred-covered[]" multiple class="form-control my-2 w-100">
                              <option>Arms</option>
                              <option>Cleavage</option>
                              <option>Shoulders</option>
                              <option>Waist</option>
                              <option>Bottom</option>
                              <option>Legs</option>
                            </select>
          <p class="mt-3">
            <small>Note: Press <kbd><kbd>⌘ + click</kbd></kbd> or <kbd><kbd><i class="fa fa-windows" aria-hidden="true"></i> + click</kbd></kbd> to select multiple options</small>
          </p>
        </fieldset>

        <!-- Fieldset: Sizes -->
        <fieldset class="mt-3 mb-3">
          <legend>Sizes</legend>

          <!-- Row: Specialty? -->
          <div class="form-row my-2">
            <div class="col-3">
              <label>Tops</label>
              <select name="tops-size" class="custom-select">
              <option>00</option>
              <option>0</option>
              <option>2</option>
              <option>4</option>
              <option>6</option>
              <option>8</option>
              <option>10</option>
              <option>12</option>
              <option>14</option>
              <option>16</option>
              <option>18</option>
              <option>20</option>
              <option>22</option>
              <option>24</option>
              <option>26</option>
              <option>28</option>
              </select>
            </div>
            <div class="col-3">
            <label>Jacket/Blazer</label>
            <select name="jacket-or-blazer-size" class="custom-select">
            <option>00</option>
            <option>0</option>
            <option>2</option>
            <option>4</option>
            <option>6</option>
            <option>8</option>
            <option>10</option>
            <option>12</option>
            <option>14</option>
            <option>16</option>
            <option>18</option>
            <option>20</option>
            <option>22</option>
            <option>24</option>
            <option>26</option>
            <option>28</option>
            <option>36</option>
            <option>38</option>
            <option>40</option>
            <option>42</option>
            <option>44</option>
            <option>46</option>
            <option>48</option>
            <option>50</option>
            <option>52</option>
            <option>54</option>
            </select>
            </div>

            <div class="col-3">
              <label>Pant</label>
              <select name="pant-size" class="custom-select">
              <option>00</option>
              <option>0</option>
              <option>2</option>
              <option>4</option>
              <option>6</option>
              <option>8</option>
              <option>10</option>
              <option>12</option>
              <option>14</option>
              <option>16</option>
              <option>18</option>
              <option>20</option>
              <option>22</option>
              <option>24</option>
              <option>26</option>
              <option>28</option>
              </select>
            </div>

            <div class="col-3">
              <label>Skirt</label>
              <select name="skirt-size" class="custom-select">
              <option>00</option>
              <option>0</option>
              <option>2</option>
              <option>4</option>
              <option>6</option>
              <option>8</option>
              <option>10</option>
              <option>12</option>
              <option>14</option>
              <option>16</option>
              <option>18</option>
              <option>20</option>
              <option>22</option>
              <option>24</option>
              <option>26</option>
              <option>28</option>
              </select>
            </div>

          </div>

          <!-- Row: Sizes -->
          <div class="form-row my-2">
            <div class="col-3">
              <label>Dress</label>
              <select name="dress-size" class="custom-select">
              <option>00</option>
              <option>0</option>
              <option>2</option>
              <option>4</option>
              <option>6</option>
              <option>8</option>
              <option>10</option>
              <option>12</option>
              <option>14</option>
              <option>16</option>
              <option>18</option>
              <option>20</option>
              <option>22</option>
              <option>24</option>
              <option>26</option>
              <option>28</option>
              </select>
            </div>
            <div class="col-3">
              <label>Jeans</label>
              <select class="custom-select" name="womens-jean-size">
              <option>24</option>
              <option>25</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
              <option>32</option>
              <option>33</option>
              <option>34</option>
              <option>35</option>
              <option>36</option>
              <option>37</option>
              <option>38</option>
              <option>39</option>
              <option>40</option>
              <option>42</option>
              <option>44</option>
              <option>46</option>
              <option>48</option>
              <option>50</option>
              <option>52</option>
            </select>
            </div>
            <div class="col-3">
              <label>Bra</label>
              <input type="text" name="bra-size" class="form-control" size="4">
            </div>
            <div class="col-3">
              <label>Shoes</label>
              <input type="text" name="shoe-size" class="form-control" size="4">
            </div>
          </div>
          <div class="form-row">
            <div class="col-12 my-5">
              <label>Do you wear specialty sizes?</label>
              <select name="specialty-sizes" class="custom-select">
              <option>No</option>
              <option>Petite</option>
              <option>Long</option>
              <option>Short</option>
              </select>
            </div>
          </div>
        </fieldset>
      </div>
      <!-- Button: Continue toYOUR LIFESTYLE -->
      <button id="button-fit-continue" class="button__unfoldid button__unfoldid-primary mt-3">Continue</button>
    </div>

  </div>
</div>