$(document).ready(function () {
	window.today = function () {
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth() + 1; //January is 0!
		var yyyy = today.getFullYear();

		if (dd < 10) {
			dd = '0' + dd;
		}

		if (mm < 10) {
			mm = '0' + mm;
		}

        today = dd + '/' + mm + '/' + yyyy;
        today_today = dd + '/' + mm + '/' + yyyy + ' - '+ dd + '/' + mm + '/' + yyyy;
        today_default = yyyy + '-' + mm + '-' + dd;

        var result = {
            tanggal_slash:today, 
            tanggal_slash_2:today_today, 
            tanggal:today_default
        };

		return result;
	}

});
