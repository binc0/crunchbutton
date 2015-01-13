<?php

class Controller_api_blasts extends Crunchbutton_Controller_RestAccount {
	public function init() {
		if (!c::admin()->permission()->check(['global', 'blast-all', 'blast-view' ])) {
			header('HTTP/1.1 401 Unauthorized');
			exit;
		}

		$blasts = Blast::q('
			select blast.*, count(*) users from blast
			left join blast_user using(id_blast)
			group by blast.id_blast
			limit 20
		');

		echo $blasts->json();
		exit;
	}
}