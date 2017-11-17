(function($){

  // Associated with Javascript file located in Theme Options => CSS & JS => Javascript input window

  document.querySelector(".open-modal").addEventListener("click", openModal);
  var modal = document.getElementById('myModal');
  var span = document.getElementsByClassName("close")[0];

  function openModal() {
    modal.style.display = "block";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  
})(jQuery);
