if (typeof (console) === 'undefined') {
	console = function() {};
	console.log = function(msg) {};
}

try {
	document.domain = 'lephpfacile.com';

	var CONFIG              = {};
	CONFIG.breadcrumbstrail = [];
	CONFIG.onready          = {};
	CONFIG.ads              = '1';

	var WEBSITE         = 'Le PHP Facile';
	var DOMAIN          = 'lephpfacile.com';
	var DURATION_CLOSE  = 2000;
	var MD5_DEFAULT     = '00000000000000000000000000000000';
	var UPLOAD_FILESIZE = '5242880';

	var USER = {
					user_id: 0
				};

	var DEV = '0';

	var confirm_referer = {
		'logout':1, 
		'compte/avatar_delete':1, 
		'filesize':1
	};

	var text = {
		core : {
			loading : 'Chargement en cours',
			loading_alt : 'Chargement',
			loading_error : 'Chargement des données impossible.',
			all_fields : 'Tous les champs du formulaire sont obligatoires.',
			facebox : 'Cette fenêtre se fermera dans 2s.',
			warning : 'Attention',
			confirm : 'Confirmation',
			close : 'Fermer'
		}
	}

} catch(e) { console.log(e.message, e.stack); }