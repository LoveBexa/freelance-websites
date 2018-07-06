$(document).ready(function () {
    $('#lightgallery').lightGallery({ pager: true });
});
      //@ sourceURL=pen.js

  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }