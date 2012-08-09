<?php
// OneFileCMS Language Settings v3.3.11
//
$_['LANGUAGE'] = 'Deutsch';

//Übersetzungen:
//==============
//Move=Verschieben ;Directory or Folder=Ordner ;Create=erstellen ;Log In=anmelden
//;Log out=abmelden ;reset=zurücksetzen ;session=sitzung ;expired=abgelaufen ;exist=bestehen 
//;configuration section=Konfigurationsbereich ;hash=Streuwert ;button: knopf ;Anrede: Sie

// Remember to slash-escape any single quotes that may be within a value:  \'
// The back-slash itself, if to be part of the text to display, may or may not 
// also need to be escaped:  \\


// In some instances, some langauges may use significantly longer words or phrases than others.
// So, a smaller font or less spacing may be desirable in those places to preserve page layout.
//
$_['front_links_font_size'] = '.9em'; //Buttons on Index page.
$_['front_links_margin_R']  = '.5em';
$_['button_font_size']      = '.7em'; //Buttons on Edit page.
$_['button_margin_L']       = '.5em';
$_['button_padding']        = '4px 5px';
$_['image_info_font_size']  = '.95em'; //show_img_msg_01  &  _02 
$_['image_info_pos']        = '1'; //If 1 or true, moves the info down a line for more space.


$_['Upload_File'] = 'Datei heraufladen';
$_['New_File']    = 'Datei erstellen';
$_['Ren_Move']    = 'Umbenennen / Verschieben';
$_['Ren_Moved']   = 'Umbenannt / Verschoben';
$_['New_Folder']  = 'Neuer Ordner';
$_['Ren_Folder']  = 'Ordner umbenennen/verschieben';
$_['Del_Folder']  = 'Ordner löschen';

$_['Admin']  = 'Konfiguration';
$_['Enter']  = 'Eintreten';
$_['Edit']   = 'Bearbeiten';
$_['Close']  = 'Schließen';
$_['Cancel'] = 'Abbrechen';
$_['Upload'] = 'Heraufladen';
$_['Create'] = 'Erstellen';
$_['Copy']   = 'Kopieren';
$_['Copied'] = 'Kopiert';
$_['Rename'] = 'Umbenennen / Verschoben';
$_['Delete'] = 'Löschen';
$_['DELETE'] = 'LÖSCHEN';
$_['File']   = 'Datei';
$_['Folder'] = 'Ordner';

$_['Log_In']  = 'Anmelden';
$_['Log_Out'] = 'Abmelden';

$_['Hash']    = 'Hash';
$_['pass_to_hash']  = 'Password to hash:';
$_['Generate_Hash'] = 'Hash generieren';

$_['save_1']      = 'Speichern';
$_['save_2']      = 'ÄNDERUNGEN SPEICHERN!';
$_['reset']       = 'Zurücksetzen - Änderungen verwerfen';
$_['Wide_View']   = 'Breitenadaptierte Ansicht';
$_['Normal_View'] = 'Normale Ansicht';

$_['on_']      = 'läuft unter';

$_['verify_msg_01'] = 'Sitzung abgelaufen.';
$_['verify_msg_02'] = 'UNGÜLTIGE DATENSENDUNG';

$_['get_get_msg_01'] = 'Die Datei wurde nicht gefunden:';
$_['get_get_msg_02'] = 'Invalid page request.';

$_['check_path_msg_01'] = 'Das Verzeichnis wurde nicht gefunden: ';

$_['ord_msg_01'] = 'Eine Datei mit demselben Namen existiert bereits im Zielverzeichnis.';
$_['ord_msg_02'] = 'Speichern als';

$_['show_img_msg_01'] = 'Die Bilddarstellung entspricht ~';
$_['show_img_msg_02'] = '% der wahren Größe (W x H = ';

$_['hash_txt_01'] = 'Es gibt zwei Wege, wie Sie Ihr OneFileCMS-Passwort ändern können:';
$_['hash_txt_02'] = '1) Verwenden Sie die Konfigurationsvariable $PASSWORD, um Ihr gewünschtes Passwort zu speichern. In diesem Fall sollte $USE_HASH auf 0 gesetzt werden.';
$_['hash_txt_03'] = '2) Oder Sie verwenden die Konfigurationsvariable $HASHWORD, um den Streuwert Ihres Passwortes zu speichern. Setzen Sie $USE_HASH in diesem Fall auf 1.';
$_['hash_txt_04'] = 'Bitte denken Sie daran, dass es sich hierbei großteils um eine akademische übung handelt. Die Verwendung eines Streuwerts trägt viel zur Sicherheit bei und erlaubt Ihnen, das Passwort nicht in Klarschrift speichern zu müssen.';
$_['hash_txt_05'] = 'Um die $HASHWORD Option verwenden zu können:';
$_['hash_txt_06'] = 'Tippen Sie das gewünschte Passwort in das Eingabefeld und drücken Sie Enter.';
$_['hash_txt_07'] = 'Der Streuwert wird in einer gelben Box überhalb angezeigt werden.';
$_['hash_txt_08'] = 'Kopieren Sie den neuen Streuwert und fügen Sie ihn in den Konfigurationsbereich als Wert der Variable $HASHWORD ein.';
$_['hash_txt_09'] = 'Stellen Sie sicher, dass Sie den GESAMTEN Streuwert -- und nur diesen (keine führenden oder nachgestellten Leerzeichen, etc.) -- kopiert haben.';
$_['hash_txt_10'] = 'Ein Doppelklick sollte den Streuwert auswählen...';
$_['hash_txt_11'] = 'Stellen Sie sicher, dass $USE_HASH auf 1 oder true gesetzt wurde.';
$_['hash_txt_12'] = 'Wenn die Werte eingetragen wurden, melden Sie sich ab und wieder an.';
$_['hash_txt_13'] = 'Sie können auch OneFileCMS selbst bearbeiten.  Legen Sie aber sicherheitshalber eine Kopie an, falls es zu einem unerwünschten Schreibfehler kommt...';
$_['hash_txt_14'] = 'Eine weitere, kleine Sicherheitsvorkehrung wäre, das Salz oder die Methode für die Streuwertgenerierung von OneFileCMS zu ändern.';

$_['hash_msg_01'] = 'Passwort: ';
$_['hash_msg_02'] = 'Streuwert: ';

$_['login_txt_01'] = 'Benutzername:';
$_['login_txt_02'] = 'Password:';

$_['login_msg_01a'] = 'Es wurden ';
$_['login_msg_01b'] = ' ungültige Anmeldversuche gezählt.';
$_['login_msg_02a'] = 'Bitte warten Sie ';
$_['login_msg_02b'] = 'Sekunden, um es erneut zu probieren.';
$_['login_msg_03']  = 'UNGÜLTIGER ANMELDEVERSUCH #';

$_['edit_note_00']  = 'ANMKERUNG:';
$_['edit_note_01a'] = 'Denken Sie immer daran: Ihre ';
$_['edit_note_01b'] = ' ist ';
$_['edit_note_02']  = 'Speichern Sie Änderungen bevor der Countdown abläuft, oder die Änderungen sind verloren!';
$_['edit_note_03']  = 'Einige Browser (wie zum Beispiel Chrome) zeigen eventuell nicht den richtigen Dateistatus an, wenn man die Vor- und Zurückknöpfe verwendet. Zum Korrigieren offensichtlich falscher Angaben drücken Sie in so einem Fall bitte den "Neu laden"-Knopf.';
$_['edit_note_04']  = 'Die XSS-Filter des Chrome Browsers deaktivieren möglicherweise einige JavaScript-Funktionen, wenn diese in einem gewissen Kontext auftreten. Das kann sich auf einige Features des OneFileCMS auswirken. Trotzdem können solche Dateien bearbeitet und gespeichert werden. Allerdings bleibt die Hintergrundfarbe immer gleich; Änderungen an der Datei werden sonst mit wechselnden Hintergrundfarben (rot und grün) dargestellt.';

$_['edit_h2_1']   = 'Betrachtend: ';
$_['edit_h2_2']   = 'In Bearbeitung: ';
$_['edit_txt_01'] = 'Unbekannter Dateityp oder keine Textdatei. Bearbeitungsmöglichkeit ausgeschalten.';
$_['edit_txt_02'] = 'Die Datei enthält möglicherweise ungültige Zeichen. Der Bearbeitungs- und Betrachtungsmodus wurde gesperrt.';
$_['edit_txt_03'] = 'htmlspecialchars() gab eine leere Zeichenkette zurück.';
$_['edit_txt_04'] = 'Das Verhalten kann je nach verwendeter PHP-Version unterschiedlich sein.';

$_['too_large_to_edit_01a'] = 'Bearbeitungsfunktion deaktiviert. Dateigröße > ';
$_['too_large_to_edit_01b'] = ' bytes.';
$_['too_large_to_edit_02']  = 'Einige Browser (wie zum Beispiel der Internet Explorer) bleiben stecken oder werden instabil, sobald größere Textmengen in einer HTML <textarea> bearbeitet werden.';
$_['too_large_to_edit_03']  = 'Die Einstellung $MAX_EDIT_SIZE im Konfigurationsbereich des OneFileCMS kann nach den Erfordernissen angepaßt werden.';
$_['too_large_to_edit_04']  = 'Mittels einfachem Trial & Error kann das optimale Limit für einen bestimmten Browser und Computer festgestellt werden.';

$_['too_large_to_view_01a'] = 'Betrachtungsmodus deaktiviert. Filesize > ';
$_['too_large_to_view_01b'] = ' Bytes.';
$_['too_large_to_view_02']  = 'Klicken Sie auf den Dateinamen überhalb, um die Datei direkt im Browser anzuzeigen.';
$_['too_large_to_view_03']  = 'Adjustieren Sie die $MAX_VIEW_SIZE im Konfigurationsbereich von OneFileCMS nach Ihren Bedürfnissen.';
$_['too_large_to_view_04']  = '(The default value for $MAX_VIEW_SIZE is completely arbitrary, and may be adjusted as desired.)';

$_['meta_txt_01'] = 'Dateigröße: ';
$_['meta_txt_02'] = ' Bytes.';
$_['meta_txt_03'] = 'Zuletzt aktualisiert am/um: ';

$_['edit_msg_01'] = 'Die Datei wurde gespeichert: ';
$_['edit_msg_02'] = 'Bytes geschrieben.';
$_['edit_msg_03'] = 'Bei dem Versuch die Datei zu speichern trat ein Fehler auf.';

$_['upload_txt_01'] = '  per upload_max_filesize in php.ini.';
$_['upload_txt_02'] = 'per post_max_size in php.ini';
$_['upload_txt_03'] = 'Anmerkung: Die maximale Dateigröße für das Heraufladen von Dateien beträgt: ';

$_['upload_err_01a'] = 'Fehler 1: Die Datei ist zu groß.  ';
$_['upload_err_01b'] = ' (Einschränkung durch php.ini)';
$_['upload_err_02a'] = 'Fehler 2: Die Datei ist zu groß.  ';
$_['upload_err_02b'] = ' (Einschränkung durch OneFileCMS)';
$_['upload_err_03']  = 'Fehler 3: Die Datei wurde nur teilweise heraufgeladen.';
$_['upload_err_04']  = 'Fehler 4: Es wurde keine Datei heraufgeladen.';
$_['upload_err_05']  = 'Fehler 5:';
$_['upload_err_06']  = 'Fehler 6: Konnte kein temporäres Verzeichnis finden.';
$_['upload_err_07']  = 'Fehler 7: Die Datei konnte nicht gespeichert werden.';
$_['upload_err_08']  = 'Fehler 8: Eine PHP-Erweiterung hat das Heraufladen der Datei gestoppt.';

$_['upload_msg_01'] = 'Es wurde keine Datei zum Heraufladen gewählt.';
$_['upload_msg_02'] = 'Der Zielordner existiert nicht: ';
$_['upload_msg_03'] = 'Das Heraufladen wurde abgebrochen.';
$_['upload_msg_04'] = 'Heraufladen: ';
$_['upload_msg_05'] = 'Das Heraufladen war erfolgreich! ';
$_['upload_msg_06'] = 'Das Heraufladen ist fehlgeschlagen: ';

$_['new_file_txt_01'] = 'Die Datei wird im aktuellen Ordner erstellt.  ';
$_['new_file_txt_02'] = 'Ungültige Zeichen für Dateinamen sind: ';

$_['new_file_msg_01'] = 'Die neue Datei wurde nicht erstellt:';
$_['new_file_msg_02'] = 'Der Name enthält ungültige Zeichen: ';
$_['new_file_msg_03'] = 'Es wurde keine Datei erstellt, da kein Name eingegeben wurde';
$_['new_file_msg_04'] = 'Die Datei besteht bereits: ';
$_['new_file_msg_05'] = 'Datei erstellt:';
$_['new_file_msg_06'] = 'Fehler - die Datei konnte nicht erstellt werden:';

$_['CRM_txt_01']  = 'Um eine Datei oder einen Ordner zu verschieben, ändern Sie den pfad/zur/datei/oder/dem/verzeichnis. Der neue Ort muss bereits existieren.';
$_['CRM_txt_02']  = 'Alter Name:';
$_['CRM_txt_03']  = 'Neuer Name:';

$_['CRM_msg_01']  = ' Fehler - der neue Zielort besteht nicht:';
$_['CRM_msg_02']  = ' Fehler - die Quelldatei besteht nicht:';
$_['CRM_msg_03']  = ' Fehler - die Zieldatei besteht bereits:';
$_['CRM_msg_04']  = ' zu ';
$_['CRM_msg_05a'] = 'Fehler während ';
$_['CRM_msg_05b'] = ' des folgenden Vorgangs:';

$_['delete_txt_01'] = 'Sind Sie sicher?';

$_['delete_msg_01'] = 'Gelöschte Datei:';
$_['delete_msg_02'] = 'Während des Löschvorgangs trat ein Fehler auf ';

$_['new_folder_txt_1'] = 'Der neue Ordner wird als Unterordner des aktuellen Ordners angelegt.  ';
$_['new_folder_txt_2'] = 'Ungültige Zeichen für Ordnernamen sind: ';

$_['new_folder_msg_01'] = 'Der Ordner konnte nicht erstellt werden:';
$_['new_folder_msg_02'] = 'Der Name enthält ungültige Zeichen: ';
$_['new_folder_msg_03'] = 'Es wurde kein Ordner erstellt, da kein Name dafür eingegeben wurde.';
$_['new_folder_msg_04'] = 'Der Ordner besteht bereits: ';
$_['new_folder_msg_05'] = 'Ordner erstellt:';
$_['new_folder_msg_06'] = 'Fehler - der Ordner konnte nicht erstellt werden: ';

$_['delete_folder_txt_01'] = 'Sind Sie sicher?';

$_['delete_folder_msg_01'] = 'Der Ordner ist nicht leer.   Bevor ein Ordner gelöscht werden kann, muss er geleert werden.';
$_['delete_folder_msg_02'] = 'Gelöschter Ordner:';
$_['delete_folder_msg_03'] = 'während des Löschvorgangs trat ein Fehler auf.';

$_['page_title_login']      = 'Anmelden';
$_['page_title_admin']      = 'Administration Options';
$_['page_title_hash']       = 'Hash Page';

$_['page_title_edit']       = 'Datei bearbeiten/betrachten';
$_['page_title_upload']     = 'Datei heraufladen';
$_['page_title_new_file']   = 'Neue Datei';
$_['page_title_copy']       = 'Datei kopieren';
$_['page_title_ren']        = 'Datei umbenennen';
$_['page_title_del']        = 'Datei löschen';
$_['page_title_folder_new'] = 'Neuer Ordner';
$_['page_title_folder_ren'] = 'Ordner umbenennen/verschieben';
$_['page_title_folder_del'] = 'Ordner löschen';

$_['session_warning'] = 'Achtung: Die sitzung wird ende bald!';
$_['session_expired'] = 'SITZUNG ABGELAUFEN';
$_['unload_unsaved']  = '               Nicht gespeicherte Änderungen gehen verloren!';
$_['confirm_reset']   = 'Soll der Inhalt der Datei zurückgesetzt werden (Änderungen gehen verloren)?';

$_['OFCMS_requires']  = 'OneFileCMS erfordert PHP';

$_['logout_msg']       = 'Sie wurden erfolgreich abgemeldet.';
$_['folder_del_msg']   = 'Der Ordner ist nicht leer.   Der Ordner muss leer sein, bevor er gelöscht werden kann.';
$_['upload_error_01a'] = ' Fehler beim Heraufladen.  Die Gesamtmenge and heraufgeladenen Daten (in Hauptsache die Datei) überschreitet die post_max_size = ';
$_['upload_error_01b'] = ' (der php.ini)';
$_['edit_caution_01']  = 'ACHTUNG ';
$_['edit_caution_02']  = ' Sie bearbeiten gerade die aktive Version von OneFileCMS - Sichern Sie den Code und seien Sie vorsichtig !!';

$_['time_out_txt'] = 'Automatischer Sitzungsstopp in:';

$_['error_reporting_01'] = 'Display errors is';
$_['error_reporting_02'] = 'Log errors is';
$_['error_reporting_03'] = 'Error reporting is set to';
$_['error_reporting_04'] = 'Showing error types';
$_['error_reporting_05'] = 'Unexpected early output';
$_['error_reporting_06'] = '(nothing, not even white-space, should have been output yet)';
