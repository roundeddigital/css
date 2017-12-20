<script defer = "defer" type = "text/javascript">
  window.onload = function() {

    // Google Analytics code used to track contact 7 forms
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4459766-1', 'auto');


    /* ========================================================================================== */
    // Replace static phone numbers and emails with active links

    // Phone Number
    jQuery('.t-entry-cf-detail-110456').each(function() {
      // jQuery('.t-entry-cf-detail-110456').attr("phone", "");
      var phone = jQuery(this).text();
      var phoneURL = phone.replace(/[" "()-]/g, "");
      jQuery(this).text(phone.replace(phone, ''));
      // jQuery(this).append( "<span class='rd-detail-value'><i class='fa fa-phone fa-fw fa-flip-horizontal' aria-hidden='true'></i></i><a href=tel:+1"+phoneURL+"> "+phone+"</a></span>" );
      var html =
        '<span class="rd-detail-container">' +
        '<span class="rd-detail-label">' +
        '<i class="fa fa-phone fa-fw fa-flip-horizontal" aria-hidden="true"></i>' +
        '</span>' +
        '<span class="rd-detail-value">' +
        '<a href=tel:+1' + phoneURL + ' target="_blank">' + phone + '</a>' +
        '</span>' +
        '</span>';
      jQuery(this).append(html);
    });

    var names = [];
    // Email
    jQuery('.t-entry-cf-detail-142935').each(function() {
      // jQuery('.t-entry-cf-detail-142935').attr("email", "");
      var email = jQuery(this).text();
      // remove the @knottlab.com
      var name   = email.substring(0, email.lastIndexOf("@"));
      var domain = email.substring(email.lastIndexOf("@") +1);
      // names.push(name);
      jQuery(this).text(email.replace(email, ''));
      var html =
        '<span class="rd-detail-container">' +
        '<span class="rd-detail-label">' +
        '<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>' +
        '</span>' +
        '<span class="rd-detail-value">' +
        '<a id="track-email-'+name+'" href=mailto:'+email+' target="_blank">'+email+'</a>'+
        '</span>' +
        '</span>';
      jQuery(this).append(html);
      // add a click event listener
      var track_email = "#track-email-"+name;
      document.querySelector(track_email).addEventListener("click", function(){
        trackEmail(name)
      }, false);
    });

    function trackEmail(name) {
      console.log("Email Clicked:", name);
      // Email Click (Team) (Individual)
      // Email => category
      // Link => action
      // name => label
      // label
      // ga('send', 'event', category, action, label);
      ga('send', 'event', "Email", name, "Team");
    }

    /* ========================================================================================== */


    // Contact Form 7
    document.addEventListener('wpcf7mailsent', function(event) {
      // console.log("Form 7 ID = ",event.detail.contactFormId);
      // ADD Contact 7 Form ID's and Google Analytics information here
      // [contact_form_7_id, ga_form_category, ga_form_action, ga_form_label, ga_form_value]

      var formIds = [
        [55955, "General Form Submission", "submit", "general"],
        [56063, "Career Form Submission", "submit", "career"],
        [68658, "Gallery Form Submission", "submit", "gallery"]
      ];

      for (var i = 0; i < formIds.length; i++) {
        var formId = formIds[i][0];
        console.log("Each Form ID = ", formId);
        if (event.detail.contactFormId == formId) {
          var category = formIds[i][1];
          var action = formIds[i][2];
          var label = formIds[i][3];
          console.log("Google Analytics Category = ", category);
          console.log("Google Analytics Action = ", action);
          console.log("Google Analytics Label = ", label);
          ga('send', 'event', category, action, label);
        }
      }
    }, false);

    /* ========================================================================================== */
    // Footer change color for active day

    var n = new Date();
    var d = n.getDay();

    if (d == 0) document.getElementById('sun').style.color = '#00a7e1';
    if (d == 1) document.getElementById('mon').style.color = '#00a7e1';
    if (d == 2) document.getElementById('tue').style.color = '#00a7e1';
    if (d == 3) document.getElementById('wed').style.color = '#00a7e1';
    if (d == 4) document.getElementById('thu').style.color = '#00a7e1';
    if (d == 5) document.getElementById('fri').style.color = '#00a7e1';
    if (d == 6) document.getElementById('sat').style.color = '#00a7e1';

	/* ========================================================================================== */
	// Modal Window

	// "Submit New Case/Claim" Form
  if (document.querySelector(".open-modal")) {
	   document.querySelector(".open-modal").addEventListener("click", openModal);
  }
	if (document.querySelector(".open-modal-widget")) {
		document.querySelector(".open-modal-widget").addEventListener("click", openModal);
	}
	if (document.querySelector(".open-modal-header")) {
		document.querySelector(".open-modal-header").addEventListener("click", openModal);
	}
	var modal = document.getElementById('myModal');
	var span = document.getElementsByClassName("close")[0];
	var ga_tracking = document.getElementsByClassName("ga-tracking")[0];

	function openModal() {
		if (modal) {
			console.log("Modal Exists");
		}
		console.log("Open Modal");
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
	ga_tracking.onclick = function() {
		console.log("GA Tracking on submit button clicked");
		ga('send', 'event', "New Case Form Submission",  "submit", "new-case");
	}

  // Calendar Date Selector for Modal
  var inf_custom_IncidentDateDatePicker = new Pikaday({
  	container: document.getElementById('inf_custom_IncidentDate_calContainer'),
  	field: document.getElementById('inf_custom_IncidentDate'),
  	format: 'MM-DD-YYYY'
  });
  var inf_custom_IncidentDateIcon = document.getElementById('inf_custom_IncidentDate_img');
  inf_custom_IncidentDateIcon.addEventListener('click', function() {
  	inf_custom_IncidentDateDatePicker.show();
  });

}
</script>
