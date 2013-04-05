/*#############################################################
Name: custom validation
Version: 1.0
Author: Weber art jamshaid asif

Feel free to use and modify but please keep this copyright intact.
#################################################################*/
$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); },
	showErrors: function(map, list) {
		// there's probably a way to simplify this
		var focussed = document.activeElement;
		if (focussed && $(focussed).is("input, textarea")) {
			$(this.currentForm).tooltip("close", { currentTarget: focussed }, true)
		}
		this.currentElements.removeAttr("title").removeClass("ui-state-highlight");
		$.each(list, function(index, error) {
			$(error.element).attr("title", error.message).addClass("ui-state-highlight");
		});
		if (focussed && $(focussed).is("input, textarea")) {
			$(this.currentForm).tooltip("open", { target: focussed });
		}
	}
});

(function() {
	// use custom tooltip; disable animations for now to work around lack of refresh method on tooltip
	$("#subscribe, #cust_login, #customer_info, #college_detail, #branches, #college_detail, #subscribe_offer, #s_form").tooltip({
		show: false,
		hide: false
	});

	// validate the comment form when it is submitted
	$("#subscribe").validate();
	$("#cust_login").validate();
	$("#customer_info").validate();
	$("#college_detail").validate();
	$("#branches").validate();
	$("#college_detail").validate();
	$("#subscribe_offer").validate();
	$("#s_form").validate();
	// validate signup form on keyup and submit
	

})();