$(document).ready(function () {
	$(window).scroll(function () {
		if ($(document).scrollTop() != 0) {
			$("header").addClass("fixed-header");
		} else {
			$("header").removeClass("fixed-header");
		}
	});

	initOfferFormListeners();
});

var lat1_ = 0;
var lng1_ = 0;
var lat2_ = 0;
var lng2_ = 0;

function openOfferModal() {
	var errors = !checkOfferInputs(".offer-form");

	if (!errors) $("#offer-form-modal").modal("show");
}

function checkOfferInputs(ele) {
	var errors = false;

	$(ele).find("#inputAdrFrom").removeClass("is-invalid");
	$(ele).find("#inputAdrTo").removeClass("is-invalid");
	$(ele).find("#inputDate").removeClass("is-invalid");
	$(ele).find(".trailing").css("top", "50%");

	if ($(ele).find("#inputAdrFrom").val().length < 3) {
		$(ele).find("#inputAdrFrom").addClass("is-invalid");
		errors = true;
	}

	if ($(ele).find("#inputAdrTo").val().length < 3) {
		$(ele).find("#inputAdrTo").addClass("is-invalid");
		errors = true;
	}

	if ($(ele).find("#inputDate").val().length < 3) {
		$(ele).find("#inputDate").addClass("is-invalid");
		errors = true;
	}

	if (errors) {
		$(ele)
			.find(".is-invalid")
			.closest(".form-floating")
			.find(".trailing")
			.css("top", "35%");
		return false;
	}

	return true;
}

function sendOfferRequest() {
	var errors = !checkOfferModalInputs(".offer-form-modal");

	if (!errors) {
		var auszug_ = $("#inputAdrFrom").val();
		var einzug_ = $("#inputAdrTo").val();
		var dat_ = $("#inputDate").val();
		var name_ = $("#inputName").val().trim();
		var mailadr_ = $("#inputMail").val().trim();
		var phoneN_ = $("#inputPhone").val().trim();
		var area_ = $("#inputArea").children(":selected").text();
		var addInfo_ = $("#inputMessage").val().trim();
		km_ =
			getDistanceFromLatLonInKm(lat1_, lng1_, lat2_, lng2_).toFixed(2) + "km";

		if (addInfo_ == "") addInfo_ = "-";

		$.ajax({
			url: "./assets/scripts/php/sendOfferMail.php",
			type: "POST",
			data: {
				name: name_,
				mail: mailadr_,
				phone: phoneN_,
				flaeche: area_,
				add_info: addInfo_,
				auszug: auszug_,
				einzug: einzug_,
				datum: dat_,
				km: km_,
			},

			success: function (result) {
				if (result == "success") {
					showSuccessMessage();
				} else {
					showFailureMessage();
				}
			},
			error: function () {
				showFailureMessage();
			},
		});
	}
}

function showSuccessMessage() {
	$(".page-form").hide();
	$(".page-final").hide();
	$(".page-final.success").show();
	$(".offer-form-modal .modal-footer .btn-primary").hide();
}

function showFailureMessage() {
	$(".page-form").hide();
	$(".page-final").hide();
	$(".page-final.failure").show();
	$(".offer-form-modal .modal-footer .btn-primary").hide();
}

function checkOfferModalInputs(ele) {
	var errors = false;

	if ($(ele).find("#inputName").val().length < 3) {
		$(ele).find("#inputName").addClass("is-invalid");
		errors = true;
	}

	if (!isEmail($(ele).find("#inputMail").val())) {
		$(ele).find("#inputMail").addClass("is-invalid");
		errors = true;
	}

	if (errors) return false;

	return true;
}

function sendContactRequest() {
	var name_ = $("#name").val().trim();
	var mail_ = $("#email").val().trim();
	var phone_ = $("#phone").val().trim();
	var text_ = $("#floatingTextarea2").val().trim();
	var checked_ = $("#inlineCheckbox1").is(":checked");

	$("#name, #email, #floatingTextarea2").removeClass("is-invalid");
	var errors = false;

	if (name_.length < 3) { $("#name").addClass("is-invalid"); errors = true; }
	if (!isEmail(mail_)) { $("#email").addClass("is-invalid"); errors = true; }
	if (text_.length < 3) { $("#floatingTextarea2").addClass("is-invalid"); errors = true; }
	if (!checked_) { alert("Bitte stimmen Sie der Datenschutzerklärung zu."); errors = true; }

	if (errors) return;

	$.ajax({
		url: "./assets/scripts/php/sendContactMail.php",
		type: "POST",
		data: { name: name_, mail: mail_, phone: phone_, text: text_ },
		success: function (result) {
			if (result == "success") {
				$(".contact-form .col-lg-6:first-child .form-floating, .contact-form .form-check, .contact-form .primary-btn").hide();
				$("#contact-success").show();
			} else {
				$("#contact-failure").show();
			}
		},
		error: function () {
			$("#contact-failure").show();
		},
	});
}

function isEmail(email) {
	var regex =
		/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return regex.test(email);
}

function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
	var R = 6371; // Radius of the earth in km
	var dLat = deg2rad(lat2 - lat1); // deg2rad below
	var dLon = deg2rad(lon2 - lon1);
	var a =
		Math.sin(dLat / 2) * Math.sin(dLat / 2) +
		Math.cos(deg2rad(lat1)) *
			Math.cos(deg2rad(lat2)) *
			Math.sin(dLon / 2) *
			Math.sin(dLon / 2);
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
	var d = R * c; // Distance in km
	return d;
}

function deg2rad(deg) {
	return deg * (Math.PI / 180);
}

function initOfferFormListeners() {
	$(".autocomplete-adr").focusout(function () {
		//$(this).closest(".form-floating").find(".autocomplete-list").hide();
	});

	$(".autocomplete-list").on("click", "li", function () {
		var input = $(this).closest(".form-floating").find("input");

		// Input füllen
		$(input).val($(this).data("val"));

		// Daten vorbereiten
		if ($(input).hasClass("inputAuszugsadr")) {
			auszug_ = $(this).data("val");
			lat1_ = $(this).data("coord").split(",")[0];
			lng1_ = $(this).data("coord").split(",")[1];
		} else if ($(input).hasClass("inputEinzugsadr")) {
			einzug_ = $(this).data("val");
			lat2_ = $(this).data("coord").split(",")[0];
			lng2_ = $(this).data("coord").split(",")[1];
		}

		$(input).blur();
		$(this).closest(".autocomplete-list").hide();
	});

	var globalTimeout = null;
	$(".autocomplete-adr").keyup(function () {
		var ele = $(this);
		var inputVal = $(this).val();
		var list = $(ele).closest(".form-floating").find(".autocomplete-list");

		if (inputVal.length >= 3) {
			if (globalTimeout != null) {
				clearTimeout(globalTimeout);
			}
			globalTimeout = setTimeout(function () {
				globalTimeout = null;

				$(list).show();
				$(list).empty();

				$.ajax({
					type: "GET",
					url:
						"https://photon.komoot.io/api/?lang=de&lat=48.1366&lon=11.5771&limit=3&q=" +
						inputVal,
					context: document.body,
					success: function (data) {
						$.each(data.features, function (key, val) {
							geometry = val.geometry;
							properties = val.properties;

							var mainInfo = "";
							var subInfo = "";
							var lat = 0;
							var lng = 0;

							if (properties.type == "street") {
								mainInfo = properties.name;

								if (properties.postcode) subInfo = properties.postcode;

								if (properties.city) {
									if (subInfo !== "") subInfo += " ";
									subInfo += properties.city;
								}

								if (properties.country) {
									if (subInfo !== "") subInfo += ", ";

									subInfo += properties.country;
								}
							} else if (properties.type == "house") {
								if (properties.street) mainInfo = properties.street;

								if (mainInfo == "" && properties.name)
									mainInfo = properties.name;

								if (mainInfo == "") mainInfo = "Fehler beim Auslesen";

								if (properties.housenumber)
									mainInfo += " " + properties.housenumber;

								if (properties.postcode) subInfo = properties.postcode;

								if (properties.city) {
									if (subInfo !== "") subInfo += " ";
									subInfo += properties.city;
								}

								if (properties.country) {
									if (subInfo !== "") subInfo += ", ";

									subInfo += properties.country;
								}
							}

							if (mainInfo !== "") {
								lat = geometry.coordinates;

								$(list).append(
									"<li data-val='" +
										mainInfo +
										", " +
										subInfo +
										"' data-coord='" +
										lat +
										"'>" +
										"<span class='ac-street'>" +
										mainInfo +
										"</span>" +
										"<span class='ac-city'>" +
										subInfo +
										"</span>" +
										"</li>"
								);
							}
						});
					},
				});
			}, 200);
		} else {
			$(list).hide();
			$(list).empty();
		}
	});

	new AirDatepicker("#inputDate", { multipleDates: 10 });
}
