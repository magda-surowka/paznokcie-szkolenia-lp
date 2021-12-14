<?php 
session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
if(session_status()==PHP_SESSION_NONE){session_start();}

$_SESSION['elmts_f_alert']='';
$alert_flag='';
$GLOBALS['elmts']['project']['lang']='pl';


define('__ROOT__','');
$url_project='';

define('__URL__', $url_project);
define('__AUTOLOADS__', __URL__.'dist/autoload/');
define('__FULL_URL__', $url_project);
define('__CSS__', $url_project.'css/');
define('__JS__', $url_project.'js/');
define('__LIBRARY__', $url_project.'library/');
define('__IMG__', $url_project.'img/');
define('__R_INCLUDE__', __ROOT__.'include/');


//FRONT
define('__PANEL_LOGIN__', $url_project.'panel-dystrybutora-logowanie');
define('__REFRESH_PASSWORD__', $url_project.'panel-dystrybutora-przypomnienie-hasla');
define('__DEFINE_PASSWORD__', $url_project.'panel-dystrybutora-resetowanie-hasla');
define('__CHANGE_PASSWORD__', $url_project.'panel-dystrybutora-zmiana-hasla');
define('__PANEL__', $url_project.'panel-dystrybutora');
define('__PANEL_LAST_PRODUCTS__', $url_project.'panel-dystrybutora-ostatnio-zamowione');
define('__PANEL_LAST_ORDERS__', $url_project.'panel-dystrybutora-zamowienia');
define('__PANEL_LAST_ORDER__', $url_project.'panel-dystrybutora-zamowienie');
define('__PANEL_EDIT_DATA__', $url_project.'panel-dystrybutora-dane-firmy');
define('__PANEL_ACCOUNT__', $url_project.'panel-dystrybutora-przedstwieciel');

define('__PANEL_CART_STEP1__', $url_project.'panel-dystrybutora-koszyk-krok-1');
define('__PANEL_CART_STEP2__', $url_project.'panel-dystrybutora-koszyk-krok-2');
define('__PANEL_CART_STEP3__', $url_project.'panel-dystrybutora-koszyk-krok-3');
define('__PANEL_CART_STEP4__', $url_project.'panel-dystrybutora-koszyk-podsumowanie');


	function alerts_display($alert, $alert_flag="off"){

		if(!isset($_GET['alert_flag'])){
			if(isset($alert['content'])){
				echo $alert['content'];
				$_SESSION['elmts_f_alert']['content']='';
			}				
		}

		if($alert_flag=="on"){
			if(isset($alert['flag_on'])){
				echo $alert['flag_on'];
				$_SESSION['elmts_f_alert']['content']='';
				$_SESSION['elmts_f_alert']['flag_on']='';
			}
		}
				
	}

	function alerts_create($params){

		//Aby aktywować alert należy nadać klasę .active dla .alert-wrapper oraz klasę .no-scroll dla body -->
		//Mamy rodzaje .service-inner: .succes / .warning / .info -->

		$full_content='	<div class="alert-wrapper active">
							<div class="container">
								<div class="alert-service">
									<div class="service-inner '.$params['style'].'">
										<button class="inner-dismiss" id="alertDismiss"><img src="'.__IMG__.'pictures/cancel.svg" alt=""></button>
										'.$params['alert'].'
									</div>
								</div>
							</div>
						</div>';

		$_SESSION['elmts_f_alert']=Array(	
			"content"=>$full_content,
			"flag_on"=>$full_content
		);

	}

	function cookies($cookie_agreement){

		$GLOBALS['elmts']['project']['cookies_text']='Używamy cookies w celach funkcjonalnych, aby ułatwić użytkownikom korzystanie z witryny. Jeżeli nie blokujesz plików cookies, to zgadzasz się na ich używanie oraz zapisanie w pamięci urządzenia. Możesz samodzielnie zarządzać cookies zmieniając odpowiednio ustawienia Twojej przeglądarki. Zapoznaj się z naszą polityką prywatności.';

		if($cookie_agreement!=1){

			echo '<div class="alert alert-info" role="alert">
					<p>'.$GLOBALS['elmts']['project']['cookies_text'].'</p>
					<p style="margin-top: 15px;"><a onclick="var d=new Date(); d.setTime(d.getTime()+(365*24*60*60*1000));var expires=d.toUTCString(); document.cookie=\'cookie_agreement=1; domain='.$protocol.$domain_name.'; path=/; expires=\'+expires; $(this).parent().parent().hide(\'fast\');" data-toggle="tooltip" data-placemenet="top" title="" data-original-title="Akceptuję politykę prywatności">Akceptuję</a></p>
				  </div>';
		}

	}

	define('__TOKEN__', '1111');

	$_SESSION['customer'][__TOKEN__]=array(
		"user_id"=>'1',
		"username"=>'Roman Testowy',
		"session_key"=>'1212121212',
		"updated_at"=>time(),
		"logged_in"=>1,
		"flag"=>'0',
	);