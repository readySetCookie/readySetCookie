function searchFunction() {
  var input, filter, ul, li, s, p, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    p = li[i].getElementsByTagName("p")[0];
    s = li[i].getElementsByTagName("span")[0];
    txtValue =
      (s.textContent || s.innerText) + " " + (p.textContent || p.innerText);
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    faqRemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) faqAddClass(x[i], "show");
  }
}

// Show filtered elements
function faqAddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function faqRemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

$().ready(function () {
  // Accordion Function
  $(function () {
    // (Optional) Active an item if it has the class "is-active"
    $("#myUL > .filterDiv.is-active").children(".accordion-panel").slideDown();

    $("#myUL > .filterDiv > span").click(function () {
      //event.preventDefault();
      // Cancel the siblings
      $(this)
        .closest("li")
        .siblings(".filterDiv")
        .removeClass("is-active")
        .children(".accordion-panel")
        .slideUp();
      // Toggle the item
      $(this)
        .closest("li")
        .toggleClass("is-active")
        .children(".accordion-panel")
        .slideToggle("ease-out");
    });
  });
});
