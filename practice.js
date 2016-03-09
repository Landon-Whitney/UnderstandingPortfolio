/*(function (window, document) {

    var layout   = document.getElementById('page'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink');

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    menuLink.onclick = function (e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(page, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);
    };

}(this, this.document));*/


//when the page doesn't change use below
/*var selector, elems, makeActive;
selector = '.side_menu li a';
elems = document.querySelectorAll(selector);

makeActive = function () {
    for (var i = 0; i < elems.length; i++) {
        elems[i].classList.remove('active');
    }
    this.classList.add('active');
};

for (var i = 0; i < elems.length; i++) {
    elems[i].addEventListener('mousedown', makeActive);
}*/

//makes menu items active when selected
function setActive() {
  aObj = document.getElementById('side_menu').getElementsByTagName('a');
  for(i=0;i<aObj.length;i++) { 
    if(document.location.href.indexOf(aObj[i].href)>=0) {
      aObj[i].className='active';
    }
  }
}
window.onload = setActive();

//makes the entire menu active when hamburger is selected

var hamburger, menu, main, heading, footer;

hamburger = document.getElementById('hamburger');
menu = document.getElementById('side_menu');
main = document.getElementById('main');
heading = document.getElementById('heading');
footer = document.getElementById('footer');

toggleActive = function () {
    hamburger.classList.toggle('active');
    main.classList.toggle('active');
    menu.classList.toggle('active');
    heading.classList.toggle('active');
    footer.classList.toggle('active');
    
    if (this.classList.contains('active')) {
    		heading.addEventListener('touchend', toggleActive);
    		main.addEventListener('touchend', toggleActive);
    		footer.addEventListener('touchend', toggleActive);
    } else {
    		heading.removeEventListener('touchend', toggleActive);
    		main.removeEventListener('touchend', toggleActive);
    		footer.removeEventListener('touchend', toggleActive);
    }
};


hamburger.addEventListener('mousedown', toggleActive);
hamburger.addEventListener('touchend', toggleActive);