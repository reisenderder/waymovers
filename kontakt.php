<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/x-icon" href="./favicon.ico">
  <title>Kontaktieren Sie uns gerne für Ihren Umzug</title>

  <link rel="stylesheet" type="text/css" href="./assets/stylesheets/style.min.css" />

  <script src="./assets/scripts/js/bootstrap.bundle.min.js" defer></script>
  <script src="./assets/scripts/js/jquery.min.js" defer></script>
  <script src="./assets/scripts/js/script.js" defer></script>
</head>

<body>
  <main>
    <section class="hero hero-sm">
      <div class="bg bg-overlay">
        <picture>
          <img src="./assets/images/home/hero.png" alt="Waymovers - Ihr Partner für Ihren Umzug in Berlin">
        </picture>
      </div>
      <?php
      include_once "./assets/essentials/header.html";
      ?>
      <div class="container hero-content">
        <div class="row align-items-center">
          <div class="col-lg-6 col-xl-7">
            <h1 class="mb-3">Kontaktieren Sie uns</h1>
            <h2>Startseite > Kontakt</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="section py-0">
      <div class="container">
        <div class="row contact-form">
          <div class="col-lg-6 py-5">
            <h3 class="section-title mb-3">Kontaktformular</h3>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" placeholder="Vor- und Nachname">
              <label for="name">Vor- und Nachname</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="E-Mail Adresse">
              <label for="email">E-Mail Adresse</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="phone" placeholder="Telefonnummer">
              <label for="phone">Telefon (optional)</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Ihre Nachricht" id="floatingTextarea2" style="height: 200px"></textarea>
              <label for="floatingTextarea2">Nachricht</label>
            </div>
            <div class="form-check mb-3 form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Ich stimme der Verarbeitung meiner Daten gemäß der <a target="_blank" href="datenschutz.php">Datenschutzerklärung</a> zu.</label>
            </div>
            <div id="contact-success" class="alert alert-success mt-3" role="alert" style="display:none;">
              <strong>Vielen Dank!</strong> Ihre Nachricht wurde erfolgreich gesendet.
            </div>
            <div id="contact-failure" class="alert alert-danger mt-3" role="alert" style="display:none;">
              <strong>Fehler.</strong> Ihre Nachricht konnte nicht gesendet werden. Bitte versuchen Sie es später erneut.
            </div>
            <a class="primary-btn mt-3" role="button" onclick="sendContactRequest();">Kontaktieren Sie uns</a>
          </div>
          <div class="col-lg-6 py-5">
            <h3 class="section-title mb-3">Impressum</h3>

            <h4 class="mb-1">Unternehmensdaten</h4>
            <p>
              Waymovers UG<br>
              Müggelheimer Straße 7<br>
              12555 Berlin
            </p>

            <h4 class="mt-5 mb-1">Geschäftsführer</h4>
            <p>
              Majerbek Bajtulaev
            </p>

            <h4 class="mt-5 mb-1">andere Kontaktmöglichkeiten</h4>
            <p>
              E-Mail Adresse:<br>
              <a href="mailto:office@waymovers-umzug.de">office@waymovers-umzug.de</a><br><br>
              Telefonnummer:<br>
              <a href="tel:+491772446015">+49 177 244 60 15</a><br />
					    <a href="tel:+493022430408">+49 30 224 304 08</a><br />
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section dark">
      <div class="container">
        <h2 class="section-title">Haftungsausschluss</h2>
        <div class="row mt-4 g-4 operating-area-wrapper">
          <p>
            Inhalt des Online-Angebots: Der Autor übernimmt keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen den Autor, welche sich auf Schäden materieller oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen, sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.
          </p>
          <p>
            Verweise und Links: Bei direkten oder indirekten Verweisen auf fremde Webseiten (Hyperlinks), die außerhalb des Verantwortungsbereiches des Autors liegen, würde eine Haftungsverpflichtung ausschließlich in dem Fall in Kraft treten, in dem der Autor von den Inhalten Kenntnis hat und es ihm technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger Inhalte zu verhindern. Der Autor erklärt hiermit ausdrücklich, dass zum Zeitpunkt der Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zukünftige Gestaltung, die Inhalte oder die Urheberschaft der verlinkten/verknüpften Seiten hat der Autor keinerlei Einfluss. Deshalb distanziert er sich hiermit ausdrücklich von allen Inhalten aller verlinkten /verknüpften Seiten, die nach der Linksetzung verändert wurden. Diese Feststellung gilt für alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie für Fremdeinträge in vom Autor eingerichteten Gästebüchern, Diskussionsforen, Linkverzeichnissen, Mailinglisten und in allen anderen Formen von Datenbanken, auf deren Inhalt externe Schreibzugriffe möglich sind. Für illegale, fehlerhafte oder unvollständige Inhalte und insbesondere für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, der über Links auf die jeweilige Veröffentlichung lediglich verweist.
          </p>
          <p>
            Urheber- und Kennzeichenrecht: Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihm selbst erstellte Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte geschützten Marken- und Warenzeichen unterliegen uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind! Das Copyright für veröffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten. Eine Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.
          </p>
          <p>
            Rechtswirksamkeit dieses Haftungsausschlusses: Dieser Haftungsausschluss ist als Teil des Internetangebotes zu betrachten, von dem aus auf diese Seite verwiesen wurde. Sofern Teile oder einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollständig entsprechen sollten, bleiben die übrigen Teile des Dokumentes in ihrem Inhalt und ihrer Gültigkeit davon unberührt.
          </p>
          <p>
            Widerspruch von Werbemails: Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.
          </p>
        </div>
      </div>
    </section>
  </main>

  <?php
  include_once "./assets/essentials/footer.html";
  ?>
</body>

</html>