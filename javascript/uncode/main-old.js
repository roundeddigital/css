/* ========================================================================================== */

/* ******************** RD ***
Footer Date Selection
*********************** RD ***/

/* Footer Date Selection */
jQuery(document).ready(function($) {
  jQuery('li.day').eq(new Date().getDay()).addClass('today');
});

/* Drop Down Menu */
jQuery('.closeall').click(function() {
  jQuery('.panel-collapse.in')
    .collapse('hide');
});

jQuery('.arrow-right').hide();
jQuery('.arrow-down').hide();
jQuery('a.accordion-toggle').hover(function() {
  if (!jQuery(this).find('.arrow-down').is(':visible')) {
    jQuery(this).find('.arrow-right').show();
  }
}, function() {
  jQuery(this).find('.arrow-right').hide();
});

jQuery('a').click(function() {
  jQuery(this).find('.arrow-right').hide()
  if (jQuery(this).find('.arrow-down').is(':visible')) {
    jQuery(this).find('.arrow-down').hide();
  } else {
    jQuery('.arrow-down').hide();
    jQuery(this).find('.arrow-down').show();
  }
});

/* ========================================================================================== */

/* ******************** RD ***
Modal - Appointment Request
*********************** RD ***/

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

// Phone Number
jQuery('.t-entry-cf-detail-110456').each(function() {
    // jQuery('.t-entry-cf-detail-110456').attr("phone", "");
    var phone = jQuery(this).text();
    var phoneURL = phone.replace(/[" "()-]/g, "");
    jQuery(this).text(phone.replace(phone, ''));
    // jQuery(this).append( "<span class='rd-detail-value'><i class='fa fa-phone fa-fw fa-flip-horizontal' aria-hidden='true'></i></i><a href=tel:+1"+phoneURL+"> "+phone+"</a></span>" );
    var html =
    '<span class="rd-detail-container">'+
      '<span class="rd-detail-label">'+
        '<i class="fa fa-phone fa-fw fa-flip-horizontal" aria-hidden="true"></i>'+
      '</span>'+
      '<span class="rd-detail-value">'+
        '<a href=tel:+1'+phoneURL+' target="_blank">'+phone+'</a>'+
      '</span>'+
    '</span>';
    jQuery(this).append(html);
});
// Email
jQuery('.t-entry-cf-detail-142935').each(function() {
    // jQuery('.t-entry-cf-detail-142935').attr("email", "");
    var email = jQuery(this).text();
    jQuery(this).text(email.replace(email, ''));
    var html =
    '<span class="rd-detail-container">'+
      '<span class="rd-detail-label">'+
        '<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>'+
      '</span>'+
      '<span class="rd-detail-value">'+
        '<a href=mailto:'+email+' target="_blank">'+email+'</a>'+
      '</span>'+
    '</span>';
    jQuery(this).append(html);
});
