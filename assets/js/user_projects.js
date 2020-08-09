"use strict";

// build items array (can be global if you want a more generic Open script)
var items = [{
  src: 'assets/img/user_projects/pb-thymon13-01.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/thymon13" target="newwin">thymon13 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-thymon13-02.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/thymon13" target="newwin">thymon13 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-thymon13-03.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/thymon13" target="newwin">thymon13 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-thymon13-04.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/thymon13" target="newwin">thymon13 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-thymon13-05.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/thymon13" target="newwin">thymon13 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-thymon13-06.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/thymon13" target="newwin">thymon13 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-thymon13-07.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/thymon13" target="newwin">thymon13 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-flighter18-01.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/flighter18" target="newwin">flighter18 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-flighter18-02.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/flighter18" target="newwin">flighter18 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-flighter18-03.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/flighter18" target="newwin">flighter18 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-michi-93-01.jpeg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/michi-93" target="newwin">michi-93 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-Nie-Oh-01.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/Nie-Oh" target="newwin">Nie-Oh @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-Nie-Oh-02.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/Nie-Oh" target="newwin">Nie-Oh @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-devnull1975-01.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/devnull1975" target="newwin">devnull1975 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-devnull1975-02.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/devnull1975" target="newwin">devnull1975 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-devnull1975-03.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/devnull1975" target="newwin">devnull1975 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-devnull1975-04.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/devnull1975" target="newwin">devnull1975 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-devnull1975-05.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/devnull1975" target="newwin">devnull1975 @ GitHub</a>'
}, {
  src: 'assets/img/user_projects/pb-devnull1975-06.jpg',
  autoSize: true,
  title: 'Photobooth by <a href="https://github.com/devnull1975" target="newwin">devnull1975 @ GitHub</a>'
}];

var openGallery = function openGallery(index) {
  var pswpElement = document.querySelectorAll('.pswp')[0]; // define options (if needed)

  var options = {
    history: true,
    focus: true,
    closeOnScroll: false,
    closeOnVerticalDrag: false,
    index: index,
    showAnimationDuration: 0,
    hideAnimationDuration: 0
  };
  var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
  gallery.init();
};

// Init on domready
$(function () {
   openGallery();
});

document.getElementById('btn').onclick = openGallery();
