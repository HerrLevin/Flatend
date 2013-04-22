<h1>Konfiguration</h1>
<h2>Men&uuml;struktur &auml;ndern</h2>
<p>
	Im Hauptverzeichnis findest du eine Datei namens <code>menu.xml</code>. Du kannst die Men&uuml;punkte beliebig ver&auml;ndern, indem du Eintr&auml;ge hinzuf&uuml;gst, l&ouml;schst oder editierst.<br />
	Die Struktur f&uuml;r einen Men&uuml;punkt lautet wie folgt:<br />
</p>
<div class="codeBox">
<pre>
&lt;entry module="modulname"&gt;
	&lt;name&gt;Anzeigetext f&uuml;r's Men&uuml;&lt;/name&gt;
	&lt;color&gt;Farbe (siehe unten)&lt;/color&gt;
&lt;/entry&gt;
</pre>
</div>
<p>
	<code>modulname</code> ist der Name der .php-Datei, die im Ordner <code>/modules</code> aufgerufen (bzw. implementiert) werden soll.<br />
	Der Anzeigetext (<code>&lt;name&gt;</code>) erscheint im Men&uuml;.<br />
	Die Farbe muss in <code>colors.xml</code> definiert sein. Lies dazu bitte den unteren Abschnitt &#8222;Farben anpassen&#8220;!<br />
	&Uuml;brigens: Die Datei wird von oben nach unten ausgelesen. Das hei&szlig;t, der oberste Eintrag ist der Erste im Men&uuml;.
</p>
<h2>Farben anpassen</h2>
<p>
	Die verschiedenen Farbwerte werden im Hauptverzeichnis in der Datei <code>colors.xml</code> definiert.<br />
	Die Struktur lautet wie folgt:<br />
</p>
<div class="codeBox">
<pre>
&lt;color name="farbname"&gt;
	&lt;hex&gt;#e45129&lt;/hex&gt;
&lt;/color&gt;
</pre>
</div>
<p>
	Der Farbname ist der, den du bei den Men&uuml;punkten bei <code>&lt;color&gt;Farbname&lt;/color&gt;</code> eingibst. Du musst dabei auf Gro&szlig;- und Kleinschreibung achten!<br />
	<code>&lt;hex&gt;#e45129&lt/hex&gt;</code> ist in diesem Fall das Standard-Rot von &#8222;Willkommen&#8220;. Bei der Editierung des Hex-Farbcodes solltest du die Raute davor lieber nicht vergessen. ;)
</p>
<h2>Struktur der Module</h2>
<p>
	Ein Modul setzt sich im Wesentlichen wie folgt zusammen:<br />
	<div class="codeBox">
<pre>
&lt;h1&gt;Haupt&uuml;berschrift (Modul-Name)&lt;/h1&gt;
&lt;h2&gt;Abschnitts&uuml;berschrift&lt;/h2&gt;
&lt;p&gt;
	Inhalt des Abschnitts.
&lt;/p&gt;
&lt;h2&gt;&Uuml;berschrift des n&auml;chsten Abschnitts&lt;/h2&gt;
&lt;p&gt;
	Inhalt des n&auml;chsten Abschnitts.
&lt;/p&gt;
</pre>
	</div>
</p>