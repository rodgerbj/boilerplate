if (document.formvalidator) {
	document.formvalidator.setHandler('letter', function (value) {

		var returnedValue = false;

		regex = /^([a-z]+)$/i;

		if (regex.test(value))
			returnedValue = true;

		return returnedValue;
	});
} else {
	setTimeout(function ()
	{
		document.formvalidator.setHandler('letter', function (value) {

			var returnedValue = false;

			regex = /^([a-z]+)$/i;
			
			if (regex.test(value))
				returnedValue = true;

			return returnedValue;
		});

	}, 1000);
}