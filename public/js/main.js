//animation javascript
function view(event) {
  var x = "first-table-body-links-1";
  var y = "second-table-body-links-1";
  var q = "table-body-links-1";
  var w = "third-table-body-links-1";
  var p = "fourth-table-body-links-1";
  var z = "table-body-links";
  //dashboard tables
  var s = "first-dashboard-t-b-l-1";
  var d = "second-dashboard-t-b-l-1";
  var f = "third-dashboard-t-b-l-1";
  var g = "fourth-dashboard-t-b-l-1";
  var h = "fifth-dashboard-t-b-l-1";

  if (event == "first_table" || event == "second_table") {
    ann = document.getElementById(event).classList;
    if (ann.contains("col-12")) {
      document.getElementById(event).classList.remove("col-12");
      document.getElementById(event).classList.add("col-md-6");
      document.getElementById(event).classList.add("col-xs-12");

      if (event == "first_table") {
        document
          .getElementById("first_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
        //first-table-body-links-1
        document.getElementById(x).classList.add(`${q}`);
      } else if (event == "second_table") {
        document
          .getElementById("second_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
        document.getElementById(y).classList.add(`${q}`);
      }
    } else {
      document.getElementById(event).classList.remove("col-md-6");
      document.getElementById(event).classList.remove("col-xs-12");
      document.getElementById(event).classList.add("col-12");
      if (event == "first_table") {
        document
          .getElementById("first_table_dropdown_icon")
          .classList.add("fa-rotate-180");
        //first-table-body-links-1
        document.getElementById(x).classList.remove(`${q}`);
      } else if (event == "second_table") {
        document
          .getElementById("second_table_dropdown_icon")
          .classList.add("fa-rotate-180");
        document.getElementById(y).classList.remove(`${q}`);
      }
    }
  } else {
    if (event == "third_table") {
      e = document.getElementById(w).classList;
      if (e.contains("table-body-links")) {
        document.getElementById(w).classList.remove(`${z}`);
        //third_table_dropdown_icon animate down
        document
          .getElementById("third_table_dropdown_icon")
          .classList.add("fa-rotate-180");
      } else {
        document.getElementById(w).classList.add(`${z}`);
        //third_table_dropdown_icon animate up
        document
          .getElementById("third_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
      }
    } else if (event == "fourth_table") {
      e = document.getElementById(p).classList;
      if (e.contains("table-body-links")) {
        document.getElementById(p).classList.remove(`${z}`);
        document
          .getElementById("fourth_table_dropdown_icon")
          .classList.add("fa-rotate-180");
      } else {
        document.getElementById(p).classList.add(`${z}`);
        document
          .getElementById("fourth_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
      }
    } else if (event == "first-dashboard-table") {
      e = document.getElementById(s).classList;
      if (e.contains("table-body-links-1")) {
        document.getElementById(s).classList.remove(`${q}`);
        document
          .getElementById("first_dashboard_table_dropdown_icon")
          .classList.add("fa-rotate-180");
      } else {
        document.getElementById(s).classList.add(`${q}`);
        document
          .getElementById("first_dashboard_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
      }
    } else if (event == "second-dashboard-table") {
      e = document.getElementById(d).classList;
      if (e.contains("table-body-links")) {
        document.getElementById(d).classList.remove(`${z}`);
        document
          .getElementById("second_dashboard_table_dropdown_icon")
          .classList.add("fa-rotate-180");
      } else {
        document.getElementById(d).classList.add(`${z}`);
        document
          .getElementById("second_dashboard_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
      }
    } else if (event == "third-dashboard-table") {
      e = document.getElementById(f).classList;
      if (e.contains("table-body-links")) {
        document.getElementById(f).classList.remove(`${z}`);
        document
          .getElementById("third_dashboard_table_dropdown_icon")
          .classList.add("fa-rotate-180");
      } else {
        document.getElementById(f).classList.add(`${z}`);
        document
          .getElementById("third_dashboard_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
      }
    } else if (event == "fourth-dashboard-table") {
      e = document.getElementById(g).classList;
      if (e.contains("table-body-links")) {
        document.getElementById(g).classList.remove(`${z}`);
        document
          .getElementById("fourth_dashboard_table_dropdown_icon")
          .classList.add("fa-rotate-180");
      } else {
        document.getElementById(g).classList.add(`${z}`);
        document
          .getElementById("fourth_dashboard_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
      }
    } else if (event == "fifth-dashboard-table") {
      e = document.getElementById(h).classList;
      if (e.contains("table-body-links")) {
        document.getElementById(h).classList.remove(`${z}`);
        document
          .getElementById("fifth_dashboard_table_dropdown_icon")
          .classList.add("fa-rotate-180");
      } else {
        document.getElementById(h).classList.add(`${z}`);
        document
          .getElementById("fifth_dashboard_table_dropdown_icon")
          .classList.remove("fa-rotate-180");
      }
    }
  }

  var element = document.querySelector(`#${event}`);
  // smooth scroll to element and align it at the bottom
  element.scrollIntoView({ behavior: "smooth", block: "start" });
}

// which button is selected algo or usd

function selectedSubjectName() {
  var radios = document.getElementsByName("test");

  for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
      // do whatever you want with the checked radio
      console.log(radios[i].value);

      // only one radio can be logically checked, don't check the rest
      break;
    }
  }
}

//text copy
function myFunction(e) {
  /* Get the text field */

  if (e == "dashboard_address") {
    var copyText = document.getElementById("keyval").innerHTML;
  } else if (e == "presale_address") {
    var copyText = document.getElementById("keyval").innerText;
  }

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText);

  /* Alert the copied text */
  document.getElementById("myPopup").classList.remove("d-none");
  setTimeout(myFunc, 3000);
  function myFunc() {
    document.getElementById("myPopup").classList.add("d-none");
  }
}
//for getting typed data inside searbar
function myform() {
  var searchValue = document.getElementById("nav-search").value;
  console.log(searchValue);

  if (searchValue == "" || searchValue.length < 8) {
    alert("Enter a valid algorand wallet address");
  } else {
    //Submit form
    var form = document.getElementById("search_form");
    form.submit();
  }
}