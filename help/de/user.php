<?php

/**
 * help/de/user.php
 *
 * The German user manual for OpenHomeopath.
 *
 * LICENSE: Permission is granted to copy, distribute and/or modify this document
 * under the terms of the GNU Free Documentation License, Version 1.3
 * or any later version published by the Free Software Foundation;
 * with no Invariant Sections, no Front-Cover Texts, and no Back-Cover Texts.
 * A copy of the license is included in doc/en/fdl_1.3.php.
 *
 * @category  Manual
 * @package   User
 * @author    Henri Schumacher <henri.hulski@gazeta.pl>
 * @copyright 2007-2014 Henri Schumacher
 * @license   http://www.gnu.org/licenses/fdl.html GNU Free Documentation License v1.3
 * @version   1.0
 * @link      http://openhomeo.org/openhomeopath/download/openhomeopath_1.0.tar.gz
 */

chdir("../..");
include_once ("include/classes/login/session.php");
$skin = $session->skin;
$head_title = "Benutzerverwaltung :: Hilfe :: OpenHomeopath";
$meta_description = "Handbuch für OpenHomeopath, Benutzerverwaltung";
include("help/layout/$skin/header.php");
?>
<h1>
  Hilfe zu OpenHomeopath
</h1>
<h2>
  Benutzerverwaltung
</h2>
<p>
  In der linken Navigationsleiste findest du unter dem Benutzersymbol <img src="../../<?php echo(USER_ICON);?>" width="16" height="16" alt="Benutzersymbol"> das <strong>Benutzermenü</strong>.
</p>
<p>
  Wenn du <strong>nicht angemeldet</strong> bist findest du hier nur den Eintrag <strong><em>"Anmelden"</em></strong>. Von dort kommst du zum <strong>Anmeldeformular</strong>. Dort meldest du dich mit <strong>Benutzernamen</strong> und <strong>Passwort</strong> an. Wenn du das <strong>Passwort vergisst</strong>, können wir dir bei Angabe des Benutzernamens im unteren Formular ein <strong>neues Passwort</strong> an die hinterlegten e-Mail schicken.<br>
  Um dich zu <strong>registrieren</strong> gehe über <strong><em>"Nicht registriert? &ndash; Klicke hier, um dich zu registrieren."</em></strong> zum <strong>Registrierungs-Formular</strong>. Wenn du es ausfüllst und abschickst wirst du <strong>registriert</strong> und dir wird eine <strong>Bestätigungs-Mail mit deinem Passwort</strong> zugeschickt.
</p>
<div>
  Wenn du angemeldet bist erscheinen folgende Einträge im Benutzermenü:
  <ul>
    <li><strong><em>"Mein Bereich"</em></strong>,</li>
    <li><strong><em>"Einstellungen"</em></strong>,</li>
    <li><strong><em>"Abmelden"</em></strong>.</li>
  </ul>
  Darunter findest du, wenn diese Funktion in den Einstellungen aktiviert ist, eine List der momentan <strong>aktiven Benutzer</strong>. Wenn du einen Benutzer anklickst werden dir <strong>genauere Informationen</strong> zu diesem Benutzer angezeigt.
</div>
<p>
  Nun zu den <strong>einzelnen Menüpunkten:</strong>
</p>
<br>
<div class="content">
  <h2>
    Inhalt
  </h2>
  <ul>
    <li><a href="#account">Mein Bereich</a></li>
    <li><a href="#settings">Einstellungen</a></li>
    <li><a href="#logout">Abmelden</a></li>
  </ul>
</div>
<a name="account" id="account"><br></a>
<h3>
  Mein Bereich
</h3>
<p>
  Unter <strong>Allgemeine Angaben</strong> befinden sich <strong>genauere Angaben zum Benutzer</strong>, die du unter <strong><em>"Einstellungen"</em></strong> ändern kannst.
</p>
<div>
  Unter <strong>Gespeicherte Repertorisierungen</strong> findest du eine Tabelle der <strong>gespeicherten Repertorisierungen</strong>.<br>
  Wenn du eine Repertorisierung <strong>auswählst</strong>, kannst du:
  <ul>
    <li>über <strong><em>"Repertorisierung aufrufen"</em></strong> das entsprechende Repertorisierungsergebnis aufrufen,</li>
    <li>über <strong><em>"Weiter repertorisieren"</em></strong> mit den ausgewählten Symptomen direkt ins Repertorisierungsfenster springen oder</li>
    <li>mit <strong><em>"Repertorisierung löschen"</em></strong> die entsprechende Repertorisierung vollständig löschen.</li>
    <li>mit <strong><em>"Öffentlich-Status ändern"</em></strong> kannst du wählen, ob eine Repertorisierung veröffentlicht werden soll, so dass sie sich andere Benutzer über Benutzer-Info (URL: <strong>"openhomeopath/userinfo.php?user=</strong><em>mein_benutzername</em><strong>"</strong> - <em>mein_benutzername</em> durch deinen Benutzernamen ersetzen) anschauen können.
</li>
  </ul>
</div>
<p>
Unter <strong>Repertorium personalisieren</strong> kannst du dir ein <strong>persönliches Repertoriumsprofil</strong> zusammenstellen, wobei du auswählst, <strong>welche Quellen</strong> du verwenden willst. Dieses Profil wird bei der <strong>Repertorisierung</strong> verwendet, wenn du unter deinem Benutzernamen <strong>angemeldet</strong> bist.
<br>
In der <strong>Materia Medica</strong> wird bei der Zusammenstellung der einem Mittel zugeordneten Symptome ebenfalls das personalisierte Repertorium verwendet. Um die eigentliche <strong>Materia Medica</strong> zu personalisieren siehe <a href="#materia_custom">unten</a>.
<br>
Entsprechend benutzt die <strong>Symptom-Info</strong> beim Zusammenstellen der Mittel auch das personalisierte Repertorium.
</p>
<p>
Unter <strong>Materia Medica personalisieren</strong> kannst du dir eine <strong>persönliche Materia Medica</strong> zusammenstellen, wobei du auswählst, <strong>welche Quellen</strong> verwendet werden. Dieses Profil wird bei den <strong>Mittelbeschreibungen</strong> in der Materia Medica verwendet, wenn du unter deinem Benutzernamen <strong>angemeldet</strong> bist.
</p>
<br><span class="rightFlow"><a href="#up" title="Zum Seitenanfang"><img src="../../<?php echo(ARROW_UP_ICON);?>" alt="Zum Seitenanfang" border="0"></a></span>
<a name="settings" id="settings"><br></a>
<h3>
  Einstellungen
</h3>
<ul>
  <li><strong>Programmeinstellungen:</strong>
  <ul>
    <li><strong>Skin auswählen:</strong> Skins bestimmen das Aussehen von OpenHomeopath. Im Moment gibt es 2 Skins: <strong><em>"original"</em></strong> von Henri Schumacher und <strong><em>"kraque"</em></strong> von Thomas Bochmann ohne Seitenleiste, so das sie besonders für kleinere Displays geeignet ist. Du kannst hier die <strong>Standard-Skin für deinen Benutzer</strong> auswählen. Ansonsten kann die Skin auch jederzeit im Programm geändert werden.</li>
    <li><strong>Sprache auswählen:</strong> Hier wählst du die <strong>Programmsprache für deinen Benutzer</strong> aus. Im Moment ist OpenHomeopath in deutsch und englisch übersetzt.</li>
    <li><strong>Bevorzugte Symptom-Sprache auswählen:</strong> Die Bevorzugte Symptom-Sprache wird berücksichtigt, wenn ein Symptom in verschiedenen Übersetzungen vorliegt. Im Moment gibt es Symptomübersetzungen in deutsch und englisch.</li>
    <li><strong>Aktive Benutzer anzeigen:</strong> Wenn dieses Feld markiert ist, werden die im Moment <strong>aktiven Benutzer</strong> unterhalb des Benutzermenüs angezeigt. Wenn du auf einen Benutzer klickst, werden <strong>weitere Informationen</strong> zu ihm angezeigt.</li>
  </ul></li>
  <li><strong>Email ändern:</strong> Du kannst deine e-Mail-Adresse ändern und festlegen ob sie für andere Benutzer sichtbar ist. Verwende nur eine gültige e-Mail-Adresse.</li>
  <li><strong>Öffentliches Profil:</strong> Hier kannst du deinen <strong>echten Namen</strong> und <strong>weitere Angaben zu deiner Person</strong> hinterlegen. Diese können von anderen Besuchern eingesehen werden, wenn du aktiv bist.</li>
  <li><strong>Passwort ändern:</strong> Hier kannst du dein Passwort ändern.</li>
</ul>
<br><span class="rightFlow"><a href="#up" title="Zum Seitenanfang"><img src="../../<?php echo(ARROW_UP_ICON);?>" alt="Zum Seitenanfang" border="0"></a></span>
<a name="logout" id="logout"><br></a>
<h3>
  Abmelden
</h3>
<p>
  Hier kannst du dich <strong>abmelden</strong>.
</p>
<?php
include("help/layout/$skin/footer.php");
?>
