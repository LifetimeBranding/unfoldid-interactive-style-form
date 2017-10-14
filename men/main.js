'use strict'

var unfoldid, u, f

unfoldid = {

  properties: {
    tabs: [
      'introduction', 'about-you', 'your-style',
      'fit', 'your-lifestyle', 'wrap-up'],
    carousels: [
      {
        selector: '#carousel-favorite-brands-and-stores',
        options: {
          slidesToShow: 4,
          slidesToScroll: 4,
          dots: true,
          infinite: false,
        }
      },
      {
        selector: '#carousel-best-match-photo',
        options: {
          slidesToShow: 1,
          slidesToScroll: 1,
          variableWidth: false,
          dots: true,
          infinite: false,
        }
      },
      {
        selector: '#carousel-formal-look-photo',
        options: {
          slidesToShow: 1,
          slidesToScroll: 1,
          variableWidth: false,
          dots: true,
          infinite: false
        }
      },
      {
        selector: '#carousel-upper-body-fit-photo',
        options: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: false,
        }
      },
      {
        selector: '#carousel-lower-body-fit-photo',
        options: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: false,
        }
      },
      {
        selector: '#carousel-work-attire-photo',
        options: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: false,
        }
      },
      {
        selector: '#carousel-going-out-photo',
        options: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: false,
        }
      },
    ]
  },

  init: function () {
    u = this
    u.bindActions()
    u.createCarousels()
  },

  preventBack: function() {
    window.onbeforeunload = function() {
      return "Are you sure you want to leave?";
    }
  },

  bindActions: function () {
    let navTabs = u.properties.tabs

    /* * * * * * *
    *  BUTTONS  *
    * * * * * */


    // Prevent buttons from submitting the form
    $('button').click(function (e) {
      e.preventDefault()
    })

    // Current and next buttons
    for (let i = 0; i < navTabs.length; i++) {
      let current = navTabs[i], next = navTabs[i + 1]

      // Buttons that lead to the next section
      if (next) {
        let currentButton = `#button-${current}-continue`
        let nextSection = `#v-pills-${next}-tab`

        $(currentButton).click(function () {
          // TODO: Add Validation Check Here
          
          if (validator.sectionValidated(current))
          {
            $(nextSection).tab('show')
          } else {
            alert('Please fill out your contact information')
          }
        })
      }

      // Buttons that hide the splash screen and show the inputs
      if (current !== 'introduction') {
        let currentButton = `#button-${current}-start`
        let currentSection = `#section-${current}`
        let currentInputs = `#inputs-${current}`

        $(currentButton).click(function () {
          $(currentSection).addClass('d-none')

          // Fix for Slick carousel display issue, refactor for performance
          let p = new Promise((resolve, reject) => {
            if ($(currentInputs).removeClass('d-none')) {
              switch (currentButton) {
                case "#button-your-style-start":
                  u.refreshCarousels([
                    '#carousel-favorite-brands-and-stores',
                    '#carousel-best-match-photo',
                    '#carousel-formal-look-photo'
                  ])
                  break
                case "#button-fit-start":
                  u.refreshCarousels([
                    '#carousel-upper-body-fit-photo',
                    '#carousel-lower-body-fit-photo'
                  ])
                  break
                case "#button-your-lifestyle-start":
                  u.refreshCarousels([
                    '#carousel-work-attire-photo',
                    '#carousel-going-out-photo'
                  ])
                  break
              }
            }
          })
        })
      }
    }
  },

  createCarousels: function () {
    let carousels = u.properties.carousels
    for (let i = 0; i < carousels.length; i++) {
      let current = carousels[i]
      $(current.selector).slick(current.options)
    }
  },

  refreshCarousels: function (c) {
    for (let i = 0; i < c.length; i++) {
      let current = c[i]
      $(current).slick('setPosition')
    }
  }
}

f = {
  submitForm: function () {
    if (!validator.sectionValidated('about-you'))
      return alert('Please fill out your contact information')

    $('#button-wrap-up-continue').text('Submitting...');
    var mensSpreadsheet = 'https://script.google.com/a/unfoldid.com/macros/s/AKfycbyw5h4kGA32UyF2ES9xhP-yKoboocQxJVGyU3f0HuP4FJ640ylX/exec';
    $.ajax({
      type: 'POST',
      url: mensSpreadsheet,
      data: getFormData(),
      success: function (result) {
        // add user name
        var header = result.result == 'success' ? "Success!" : "Error";
        var text = result.result == 'success' ? "Thanks for filling out your Style Profile. Your response has been recorded and our team of Stylists is ready to hit the stores to find the perfect pieces for you!" : "An error occured and we didn't receive your information. Please try again."
        $("#main-form-container").addClass("d-none");
        $("#completed-form-response-header").html(header);
        $("#completed-form-response-text").html(text);
        $("#completed-form-container").removeClass("d-none");
      },
    })
  },

  shoppingList: function () {

    let option = $('#shopping-list-select').val();
    $("#shopping-list-section").removeClass('d-none');
  }
}

function getFormData() {
  var elements = document.getElementById("mens-form").elements; // all form elements
  var fields = Object.keys(elements).map(function (k) {
    if (elements[k].name !== undefined) {
      return elements[k].name;
      // special case for Edge's html collection
    } else if (elements[k].length > 0) {
      return elements[k].item(0).name;
    }
  }).filter(function (item, pos, self) {
    return self.indexOf(item) == pos && item;
  });
  var data = {};
  fields.forEach(function (k) {
    data[k] = elements[k].value;
    var str = ""; // declare empty string outside of loop to allow
    // it to be appended to for each item in the loop
    if (elements[k].type === "checkbox") { // special case for Edge's html collection
      str = str + elements[k].checked + ", "; // take the string and append 
      // the current checked value to 
      // the end of it, along with 
      // a comma and a space
      data[k] = str.slice(0, -2); // remove the last comma and space 
      // from the  string to make the output 
      // prettier in the spreadsheet
    } else if (elements[k].length) {
      for (var i = 0; i < elements[k].length; i++) {
        if (elements[k].item(i).checked) {
          str = str + elements[k].item(i).value + ", "; // same as above
          data[k] = str.slice(0, -2);
        }
      }
    }
  });
  console.log(data);
  return data;
}

$(document).ready(function () {
  unfoldid.init();
  $("#button-introduction-continue").removeAttr("disabled");  
});