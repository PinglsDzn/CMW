<?php
if(Permission::getInstance()->verifPerm('PermsPanel', 'payment', 'actions', 'editPayment')) {
	$lecture = new Lire('modele/config/config.yml');
	$lecture = $lecture->GetTableau();

	if(isset($_POST['paypal']))
		$lecture['Payement']['paypal'] = true;
	else
		$lecture['Payement']['paypal'] = false;
	if(isset($_POST['dedipass']))
		$lecture['Payement']['dedipass'] = true;
	else
		$lecture['Payement']['dedipass'] = false;
	if(isset($_POST['paysafecard']))
		$lecture['Payement']["paysafecard"] = true;
	else
		$lecture['Payement']['paysafecard'] = false;
	
	$lecture['Payement']['public_key'] = $_POST['public_key'];
	$lecture['Payement']['private_key'] = $_POST['private_key'];
	$lecture['Payement']['paypalEmail'] = $_POST['paypalEmail'];
	$ecriture = new Ecrire('modele/config/config.yml', $lecture);
}
?>