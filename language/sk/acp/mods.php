<?php
/**
*
* acp_mods [Slovenčina]
*
* @package language
* @version $Id$
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'	=> 'Dostupné zmeny',

	'AM_MOD_ALREADY_INSTALLED'	=> 'AutoMOD zistil, že tento MOD je už nainštalovaný, a preto nejde pokračovať.',
	'AM_MOD_NOT_INSTALLED'	=> 'AutoMOD zistil, že tento MOD ešte nebol nainštalovaný, a preto nemôže pokračovať.',
	'AM_MANUAL_INSTRUCTIONS'	=> 'AutoMOD posiela do Vášho počítača komprimovaný súbor. Z dôvodu nastavenia AutoMODu nemôžu byť súbory zapísané na Váš server automaticky. Musíte rozbaliť súbor a nahrať súbory na Váš server manuálne pomocou FTP klienta alebo podobným spôsobom. Pokiaľ sa súbor nestiahne automaticky, kliknite %ssem%s.',

	'APPLY_THESE_CHANGES'	=> 'Aplikovať tieto zmeny',
	'APPLY_TEMPLATESET'		=> 'na tento štýl',
	'AUTHOR_EMAIL'			=> 'E-mail autora',
	'AUTHOR_INFORMATION'	=> 'Informácie o autorovi',
	'AUTHOR_NAME'			=> 'Meno autora',
	'AUTHOR_NOTES'			=> 'Poznámky autora',
	'AUTHOR_URL'			=> 'URL autora',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'Verzia AutoMODu, ktorú sa pokúšate inštalovať je už nainštalovaná. Prosím, smažte adresár install/.',
	'AUTOMOD_UNKNOWN_VERSION'	=>	'AutoMOD nebol aktualizovaný, pretože nebol schopný zistiť momentálne nainštalovanú verziu. Uvedená verzia pre Vašu inštaláciu je %s.',
	'AUTOMOD_VERSION'		=> 'Verzia AutoMODu',

	'CAT_INSTALL_AUTOMOD'	=> 'AutoMOD',
	'CHANGE_DATE'	=> 'Dátum vydania',
	'CHANGE_VERSION'=> 'Číslo verzie',
	'CHANGES'		=> 'Zmeny',
	'CHECK_AGAIN'  => 'Skontrolovať znovu',
	'CLICK_HIDE_FILES' => 'Kliknite pre skrytie súborov bez chyb',
	'CLICK_HIDE_EDITS' => 'Kliknite pre skrytie úprav bez chýb',
	'CLICK_SHOW_FILES' => 'Kliknite pre zobrazenie všetkých súborov',
	'CLICK_SHOW_EDITS' => 'Kliknite pre zobrazenie všetkých úprav',
	'COMMENT'		=> 'Komentár',
	'CREATE_TABLE'	=> 'Zmeny v databáze',
	'CREATE_TABLE_EXPLAIN'	=> 'AutoMOD úspešne spravil zmeny v databáze, vrátane oprávnení, ktoré boli nastavené na rolu “Hlavní administrátor” role.',
	'DELETE'			=> 'Zmazať',
	'DELETE_CONFIRM'	=> 'Naozaj chcete zmazať tento MOD?',
	'DELETE_ERROR'		=> 'Behom mazania vybratého MODu sa stala chyba.',
	'DELETE_SUCCESS'	=> 'MOD bol úspešne zmazaný.',

	'DIR_PERMS'			=> 'Oprávnenie adresáru',
	'DIR_PERMS_EXPLAIN'	=> 'Niektoré systémy vyžadujú, aby adresáre pre správnu funkciu mali určité oprávnenia. Obvyklá správna východzia hodnota je 0755. Toto nastavenie nemá žiadny vplyv na systémy Windows.',
	'DIY_INSTRUCTIONS'	=> 'Manuálne úpravy (pre dokončenie inštalácie MODu a jeho správnu funkčnosť je potreba spraviť následujúce manuálne úpravy)',
	'DEPENDENCY_INSTRUCTIONS'	=>	'MOD, ktorý sa pokúšate nainštalovať je závislý na inom MODe. AutoMOD nemôže zistiť, či je tento MOD už nainštalovaný. Potvrďte, prosím, že ste nainštaloval(a) <strong><a href="%1$s">%2$s</a></strong> pred inštaláciou Vašeho MODu.',
	'DESCRIPTION'	=> 'Popis',
	'DETAILS'		=> 'Podrobnosti',

	'EDITED_ROOT_CREATE_FAIL'	=> 'AutoMOD nemohol vytvoriť adresár, v ktorom majú byť uložené upravené súbory.',
	'ERROR'			=> 'Chyba',

	'FILE_EDITS'		=> 'Úpravy súboru',
	'FILE_EMPTY'		=> 'Prázdny súbor',
	'FILE_MISSING'		=> 'Nemôžem nájsť súbor',
	'FILE_PERMS'		=> 'Oprávnenie súboru',
	'FILE_PERMS_EXPLAIN'=> 'Niektoré systémy vyžadujú, aby súbory pre správnou funkciu mali určité oprávnenia. Obvyklá správna východzia hodnota je 0644. Toto nastavenie nemá žiadny vplyv na systémy Windows.',
	'FILE_TYPE'			=> 'Typy komprimovaných súborov',
	'FILE_TYPE_EXPLAIN'	=> 'Toto je platné len u spôsobu zápisu “Stiahnutie komprimovaného súboru”',
	'FILESYSTEM_NOT_WRITABLE'	=> 'AutoMOD zistil, že systém súborov nie je zapisovateľný, preto nemôže byť použitý priamy spôsob zápisu.',
	'FIND'				=> 'Nájsť',
	'FIND_MISSING'		=> 'Kód uvedený v príkaze "Nájsť" nemožno nájsť',
	'FORCE_INSTALL'		=> 'Vynútiť inštaláciu',
	'FORCE_UNINSTALL'	=> 'Vynútiť odinštaláciu',
	'FORCE_CONFIRM'		=> 'Vynútiť inštaláciu znamená, že MOD nebude úplne nainštalovaný. Budete musieť spraviť úpravy niektorých súborov manuálne, aby bol MOD správne nainštalovaný. Chcete pokračovať?',
	'FTP_INFORMATION'	=> 'FTP Informácie',
	'FTP_NOT_USABLE'  => 'FTP funkcia nemôže byť použitá, pretože ju Váš hosting nepodporuje.',
	'FTP_METHOD_ERROR' => 'FTP spôsob prenosu nebol nájdený. Skontrolujte, prosím, v nastaveniach autoMODu, či máte nastavený správny FTP spôsob prenosu.',
	'FTP_METHOD_EXPLAIN'=> 'Pokiaľ máte problém s východzím "FTP" spôsobom pripojenia, môžete skúsiť "Jednoduchý Socket" ako alternatívny spôsob pripojenia k FTP serveru.',
	'FTP_METHOD_FTP'	=> 'FTP',
	'FTP_METHOD_FSOCK'	=> 'Jednoduchý Socket',

	'GO_PHP_INSTALLER'  => 'MOD vyžaduje spustenie externého inštalátoru, ktorý dokončí inštaláciu. Kliknite sem pre jeho spustenie.',

	'INHERIT_NO_CHANGE'	=> 'Na súbory nejde spraviť zmeny, pretože šablóna %1$s je závislá na %2$s.',
	'INLINE_FIND_MISSING'=> 'Kód uvedený v príkazy Nájsť na riadku nemožno nájsť.',
	'INLINE_EDIT_ERROR'	=> 'Chyba, v MODX inštalačnom súbore chýbajú všetky požadované prvky pre úpravu na riadku',
	'INSTALL_AUTOMOD'	=> 'Inštalácia AutoMODu',
	'INSTALL_AUTOMOD_CONFIRM'	=> 'Naozaj chcete nainštalovať AutoMOD?',
	'INSTALL_DATE'      => 'Dátum inštalácie',
	'INSTALL_TIME'		=> 'Čas inštalácie',
	'INSTALL_MOD'		=> 'Inštalovať tento MOD',
	'INSTALL_ERROR'		=> 'Jedna alebo viac úprav popísaných v inštalačnom súbore nebola nájdená. Prezrite si, prosím, úpravy zobrazené dole, spravte úpravy na súboroch a skúste spustiť inštaláciu znova. Môžete tiež pokračovať v inštalácii (vynútiť inštaláciu) aj napriek tomu, že niektoré úpravy súborov nie sú nájdené. <strong>Pokračovanie ale nie je doporučené a môže zapríčiniť, že Vaše fórum nebude správne fungovať.</strong>',
	'INSTALL_FORCED'	=> 'Vynútil(a) ste inštaláciu tohoto MODu aj napriek tomu, že sa behom jeho inštalácie vyskytli chyby. Vaše fórum nemusí správne pracovať. Poznamenajte si, prosím, úpravy súborov, ktoré sa nepodarili a opravte je.',
	'INSTALLED'			=> 'MOD bol nainštalovaný',
	'INSTALLED_EXPLAIN'	=> 'Váš MOD bol nainštalovaný! Dole sa môžete pozrieť, ako prebehla inštalácia MODu. Poznamenajte si akékoľvek chyby a obráťte sa na podporu na <a href="http://www.phpbb.com">phpBB.com</a> alebo <a href="http://www.phpbb.cz">phpBB.cz</a>.',
	'INSTALLED_MODS'	=> 'Nainštalované MODy',
	'INSTALLATION_SUCCESSFUL'	=> 'AutoMOD bol úspešne nainštalovaný. Teraz môžete spravovať modifikácie pre phpBB na záložke AutoMOD v Administrácii fóra.',
	'INVALID_MOD_INSTRUCTION'	=> 'Tento MOD má neplatné inštrukcie, alebo sa nepodarila a operácia "Nájsť na riadku".',
	'INVALID_MOD_NO_FIND'       => 'MODu chýba príkaz "Nájsť" odpovedajúci akcii ‘%s’',
	'INVALID_MOD_NO_ACTION'     => 'MODu chýba akcia odpovedajúca príkazu "Nájsť" ‘%s’',

	'LANGUAGE_NAME'		=> 'Meno jazyka',

	'MANUAL_COPY'				=> 'Nedošlo k skopírovaniu',
	'MOD_CONFIG'				=> 'Konfigurácia AutoMODu',
	'MOD_CONFIG_UPDATED'        => 'Nastavenia AutoMODu bolo aktualizované.',
	'MOD_DETAILS'				=> 'Podrobnosti o MODu',
	'MOD_DETAILS_EXPLAIN'		=> 'Tu môžete zobraziť všetky známe informácie o vybranom MODe.',
	'MOD_MANAGER'				=> 'AutoMOD',
	'MOD_NAME'					=> 'Meno MODu',
	'MOD_OPEN_FILE_FAIL'		=> 'AutoMODu sa nepodarilo otvoriť %s.',
	'MOD_UPLOAD'				=> 'Nahrať MOD',
	'MOD_UPLOAD_EXPLAIN'		=> 'Tu môžete nahrať zazipovaný balíček s MODem, ktorý musí obsahovať všetky nezbytné MODX súbory k provedeniu inštalácie. AutoMOD sa potom pokúsi rozbaliť súbor a pripraviť ho pre inštaláciu.',
	'MOD_UPLOAD_INIT_FAIL'		=> 'Došlo k chybe pri inicializácii nahrávacieho procesu MODu.',
	'MOD_UPLOAD_SUCCESS'		=> 'MOD bol nahraný a je pripravený pre inštaláciu.',
	'MOD_UPLOAD_UNRECOGNIZED'	=> 'Štruktúra adresárov nahraného MODu je neznámá. Skontrolujte, či nie je Vami nahraný zip archív poškodený, alebo či v ňom nechýbajú nejaké súbory/zložky, alebo kontaktujte autora MODu.',
	'AUTOMOD_INSTALLATION'		=> 'Inštalácia AutoMODu',
	'AUTOMOD_INSTALLATION_EXPLAIN'	=> 'Vitajte v inštalácii AutoMODu. Budete potrebovať podrobnosti o Vašom FTP pripojeniu, pokiaľ AutoMOD zistí, že je to najlepší spôsob zápisu súborov. Výsledky testu požiadavkov sú dole.',

	'MODS_CONFIG_EXPLAIN'		=> 'Tu môžete určiť, ako AutoMOD upraví Vaše súbory. Základný spôsob je "Stiahnutie komprimovaného súboru". Ostatné spôsoby vyžadujú nastavenie dodatočných oprávnení na serveru.',
	'MODS_COPY_FAILURE'			=> 'Nebolo možné skopírovať súbor %s. Skontrolujte, prosím, oprávnenie adresára alebo použite alternatívny spôsob prenosu súborov.',
	'MODS_EXPLAIN'				=> 'Tu môžete spravovať MODy dostupné na Vašom fóre. AutoMOD vám pomôže upraviť Vaše fórum podľa Vašich potrieb tím, že vám umožní automatickú inštaláciu modifikácií vytvorených phpBB komunitou. Pre ďalšie informácie o MODoch a AutoMODu navštívte, prosím, stránky <a href="http://www.phpbb.com/mods">phpBB.com</a>.  Pre vloženie MODu do tohoto zoznamu použite formulár dole.  Alebo môžete také súbory rozbaliť a nahrať do adresára /store/mods/ na Vašom serveru.',
	'MODS_FTP_FAILURE'			=> 'AutoMOD nemohol preniesť pomocou FTP súbor %s na miesto',
	'MODS_FTP_CONNECT_FAILURE'	=> 'AutoMOD sa nemohol pripojiť k Vašemu FTP serveru. Vyskytla sa chyba %s',
	'MODS_MKDIR_FAILED'			=> 'Adresár %s nemohol byť vytvorený',
	'MODS_RMDIR_FAILURE'		=> 'Adresár %s nemohol byť odstránený',
	'MODS_RMFILE_FAILURE'		=> 'Súbor %s nemohol byť odstránený',
	'MODS_NOT_WRITABLE'			=> 'Do adresára store/mods/ nejde zapisovať. Toto je požadované pre správnou funkciu nahrávania MODů, pokiaľ nenastavíte Váš "spôsob zápisu" na "FTP". Upravte, prosím, Vaše oprávnenie alebo nastavenia a akciu zopakujte.',
	'MODS_SETUP_INCOMPLETE'		=> 'Bol nájdený problém s Vaším nastavením a AutoMOD nemôže pracovať. K tomuto môže dojsť len pokiaľ  príde k zmene nastavenia (napr. FTP užívateľské meno) a môže byť napravené na stránke s nastavením AutoMODu.',

	'NAME'			=> 'Meno',
	'NEW_FILES'		=> 'Nové súbory',
	'NEED_READ_PERMISSIONS' => 'Nesprávne oprávnenie: %s nejde čítať.',
	'NO_ATTEMPT'	=> 'Nebolo spravené',
	'NO_INSTALLED_MODS'		=> 'Neboli zistené žiadne nainštalované MODy',
	'NO_MOD'				=> 'Nejde nájsť vybraný MOD.',
	'NO_UNINSTALLED_MODS'	=> 'Neboli zistené žiadne nenainštalované MODy',
	'NO_UPLOAD_FILE'		=> 'Nebol vybraný žiadny súbor.',

	'ORIGINAL'	=> 'Pôvodný',

	'PATH'					=> 'Cesta',
	'PREVIEW_CHANGES'		=> 'Náhľad zmien',
	'PREVIEW_CHANGES_EXPLAIN'	=> 'Zobrazí zmeny, ktoré majú byť spravené pred ich naozajstným prevedením.',
	'PRE_INSTALL'			=> 'Príprava na inštaláciu',
	'PRE_INSTALL_EXPLAIN'	=> 'Pokiaľ máte v "Nastaveniach AutoMODu" povolený "Náhľad zmien", môžete tu vidieť všetky zmeny, ktoré budú na súboroch Vašeho fóra spravené behom inštalácie MODu. <strong>VAROVANIE!</strong>, akonáhle raz kliknete na tlačítko "Inštalovať", budú základné súbory Vašeho phpBB fóra upravené a môže dojsť k zmenám databáze. Avšak, pokiaľ inštalácia neprebehne úspešne, za predpokladu, že máte prístup k AutoMODu, Vám bude daná možnosť obnovenia do tohoto bodu.',
	'PRE_UNINSTALL'			=> 'Príprava na odinštaláciu',
	'PRE_UNINSTALL_EXPLAIN'	=> 'Pokiaľ máte v "Nastaveniach AutoMODu" povolený "Náhľad zmien", môžete tu vidieť všetky zmeny, ktoré budú na súboroch Vašeho fóra spravené behom odinštalácie MODu. <strong>VAROVANIE!</strong>, akonáhle raz kliknete na tlačítko "Odinštalovať", budú základné súbory Vašeho phpBB fóra upravené a môže dojsť k zmenám databáze. Tento proces používa reverznú techniku, ktorá nemusí byť 100% presná. Avšak, pokiaľ odinštalácia neprebehne úspešne, za predpokladu, že máte prístup k AutoMODu, Vám bude daná možnosť obnovenia do tohoto bodu.',

	'REMOVING_FILES'	=> 'Súbory k odstráneniu',
	'RETRY'				=> 'Skúsiť znovu',
	'RETURN_MODS'		=> 'Návrat do AutoMODu',
	'REVERSE'			=> 'Reverse',
	'ROOT_IS_READABLE'	=> 'Z koreňového adresára phpBB ide čítať.',
	'ROOT_NOT_READABLE'	=> 'AutoMOD nemohol otvoriť k čítaniu súbor fóra index.php. To pravdepodobne znamená, že oprávnenie koreňového adresára Vašeho phpBB sú príliš obmedzujúce, čo zabraňuje AutoMODu v práci. Upravte, prosím, oprávnenie a akciu zopakujte.',


	'SORT_NAME'		=> 'Meno',
	'SORT_DATE'		=> 'Dátum',
	'SOURCE'		=> 'Zdroj',
	'SQL_QUERIES'	=> 'SQL dotazy',
	'STATUS'		=> 'Stav',
	'STORE_IS_WRITABLE'			=> 'Do adresára store/ ide zapisovať.',
	'STORE_NOT_WRITABLE_INST'	=> 'AutoMOD zistil, že nie je možné zapisovať do adresára store/, čo je nutné pre správnu funkciu AutoMODu. Upravte, prosím, oprávnenie adresára a skúste to znovu.',
	'STORE_NOT_WRITABLE'		=> 'Do adresára store/ nejde zapisovať.',
	'STYLE_NAME'	=> 'Názov štýlu',
	'SUCCESS'		=> 'Úspech',

	'TARGET'		=> 'Cieľ',
	'TARGET_VERSION'	=> 'Určené pre verziu phpBB',

	'UNKNOWN_MOD_AUTHOR-NOTES'	=> 'Autor nenapísal žiadne poznámky.',
	'UNKNOWN_MOD_DESCRIPTION'	=> '',
	'UNKNOWN_MOD_DIY-INSTRUCTIONS'=>'', // empty string hides this if not specified.
	'UNKNOWN_MOD_COMMENT'		=> '',
	'UNKNOWN_MOD_INLINE-COMMENT'=> '',
	'UNKNOWN_QUERY_REVERSE' => 'Neznámy spätný dotaz',

	'UNINSTALL'				=> 'Odinštalovať',
	'UNINSTALL_AUTOMOD'		=> 'Odinštalácia AutoMODu',
	'UNINSTALL_AUTOMOD_CONFIRM' => 'Naozaj chcete odinštalovať AutoMOD? Tím NEBUDE odstránený žiadny z MODov nainštalovaných AutoMODom.',
	'UNINSTALLED'			=> 'MOD bol odinštalovaný',
	'UNINSTALLED_MODS'		=> 'Odinštalované MODy',
	'UNINSTALLED_EXPLAIN'	=> 'Vybraný MOD bol odinštalovaný! Dole sa môžete pozrieť, ako prebehla odinštalácia MODu. Poznamenajte si akékoľvek chyby a obráťte sa na podporu na <a href="http://www.phpbb.com">phpBB.com</a> alebo <a href="http://www.phpbb.cz">phpBB.cz</a>.',
	'UNRECOGNISED_COMMAND'	=> 'Chyba, neznámy príkaz %s',
	'UPDATE_AUTOMOD'		=> 'Aktualizovať AutoMOD',
	'UPDATE_AUTOMOD_CONFIRM'=> 'Potvrďte, prosím, že chcete aktualizovať AutoMOD.',
	'UPLOAD'				=> 'Nahrať',
	
	'VERSION'			=> 'Verzia',
	'VERSION_WARNING'	=> 'MOD bol vytvorený pre phpBB verziu %1$s, ale verzia Vašeho fóra je %2$s. Ani v prípade, že inštalácia bude úspešná, MOD nemusí pracovať tak ako by mal alebo môže poškodiť Vaše fórum. Overte si, prosím, u autora MODu že je MOD kompatibilný s Vašou verziou phpBB.',

	'WARNING'				=> 'Varovanie',
	'WRITE_DIRECT_FAIL'		=> 'AutoMOD nemohol skopírovať súbor %s na miesto použitím priameho spôsobu zápisu. Prosím, skúste iný spôsob zápisu a akciu zopakujte.',
	'WRITE_DIRECT_TOO_SHORT'=> 'AutoMOD nemohol dokončiť zápis súboru %s. Často môže pomôcť kliknúť na tlačítko "Spät". Pokiaľ to nepomôže, skúste iný spôsob zápisu.',
	'WRITE_MANUAL_FAIL'		=> 'AutoMOD nemohol pridať súbory %s do komprimovaného archívu. Prosím, skúste iný spôsob zápisu.',
	'WRITE_METHOD'			=> 'Spôsob zápisu',
	'WRITE_METHOD_DIRECT'	=> 'Priamy',
	'WRITE_METHOD_EXPLAIN'	=> 'Môžete nastaviť preferovaný spôsob zápisu súborov. Najviac kompatibilná možnosť je “Stiahnutie komprimovaného súboru”.',
	'WRITE_METHOD_FTP'		=> 'FTP',
	'WRITE_METHOD_MANUAL'	=> 'Stiahnutie komprimovaného súboru',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'				=> 'Vložiť za',
	'before add'			=> 'Vložiť pred',
	'find'					=> 'Nájsť',
	'in-line-after-add'		=> 'Na riadku vložiť ZA',
	'in-line-before-add'	=> 'Na riadku vložiť PRED',
	'in-line-edit'			=> 'Nájsť na riadku',
	'in-line-operation'		=> 'Na riadku zmeniť hodnotu',
	'in-line-replace'		=> 'Na riadku Vymeniť',
	'in-line-replace-with'	=> 'Na riadku Vymeniť',
	'replace'				=> 'Vymeniť za',
	'replace with'			=> 'Vymeniť za',
	'operation'				=> 'Zmeniť hodnotu',
));

?>
