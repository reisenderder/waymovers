<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Wir sind Helfer für Ihren Umzug in Berlin & Umgebung">
  <meta name="description" content="Sie suchen nach einem Umzugsunternehmen, das Sie bei Ihrem Umzug unterstützt? Hinterlassen Sie uns gerne eine Nachricht! ✓ professionell ✓ zuverlässig ✓ termintreu">
  <meta name="keywords" content="umzug, umzugshelfer, umzugsunternehmen, umzug berlin, umzugsfirma">
  <meta name="robots" content="index, nofollow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="German">


  <link rel="icon" type="image/x-icon" href="./favicon.ico">
  <title>Wir sind Helfer für Ihren Umzug in Berlin & Umgebung</title>

  <link rel="stylesheet" type="text/css" href="./assets/stylesheets/air-datepicker.css" />
  <link rel="stylesheet" type="text/css" href="./assets/stylesheets/style.min.css" />

  <script src="./assets/scripts/js/jquery.min.js"></script>
  <script src="./assets/scripts/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/scripts/js/air-datepicker.js"></script>
  <script src="./assets/scripts/js/script.js"></script>
</head>

<body>
  <main>
    <section class="hero">
      <div class="bg bg-overlay">
        <picture>
          <img src="./assets/images/home/hero.png" alt="Waymovers - Professioneller Umzugsservice Berlin">
        </picture>
      </div>
      <?php
      include_once "./assets/essentials/header.html";
      ?>
      <div class="container hero-content">
        <div class="row align-items-center">
          <div class="col-lg-6 col-xl-7">
            <h1 class="mb-3">Wir sind Ihre Helfer für Ihren Umzug in Berlin & Umgebung</h1>
            <h2>Sie suchen nach einem Umzugsunternehmen, das Sie bei Ihrem Umzug, egal ob privater oder gewerblicher Umzug, unterstützt? Hinterlassen Sie uns gerne eine Nachricht!</h2>
            <a class="primary-btn mt-3" href="./kontakt.php">Kontaktieren Sie uns</a>
          </div>
          <div class="col-1"></div>
          <div class="col-lg-5 col-xl-4">
            <div class="offer-form">
              <h3>Kostenloses Angebot erhalten</h3>
              <div class="form-floating my-3">
                <input type="text" class="form-control autocomplete-adr inputAuszugsadr" id="inputAdrFrom" autocomplete="off" placeholder="Beispielstraße">
                <label for="inputAdrFrom">Auszugsadresse</label>
                <ul class="autocomplete-list"></ul>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control autocomplete-adr inputEinzugsadr" id="inputAdrTo" autocomplete="off" placeholder="Beispielstraße">
                <label for="inputAdrTo">Einzugsadresse</label>
                <ul class="autocomplete-list"></ul>
              </div>
              <div class="form-floating mb-2">
                <input type="text" class="form-control" id="inputDate" autocomplete="off" placeholder="dd.MM.YYYY">
                <label for="inputDate">Wunschtermine</label>
              </div>
              <a class="primary-btn mt-2" role="button" onclick="openOfferModal();">Angebot anfragen</a>
              <span>Änderungen & Stornierungen sind bis 14 Tage vor dem Umzug möglich.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal offer-form-modal" tabindex="-1" id="offer-form-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="page-form">
              <h4>Kostenloses Angebot erhalten</h4>
              <p>Fordern Sie hier Ihr unverbindliches und kostenloses Angebot an.</p>
              <div class="form-floating my-3">
                <input type="text" class="form-control" id="inputName" placeholder="Vor- und Nachname">
                <label for="inputName">Vor - und Nachname</label>
              </div>
              <div class="form-floating my-3">
                <input type="text" class="form-control" id="inputMail" placeholder="E-Mail Adresse">
                <label for="inputMail">E-Mail Adresse</label>
              </div>
              <div class="form-floating my-3">
                <input type="text" class="form-control" id="inputPhone" placeholder="Telefonnummer">
                <label for="inputPhone">Telefonnummer (optional)</label>
              </div>
              <div class="form-floating my-3">
                <select class="form-select" id="inputArea" aria-label="Wählen Sie die Umzugsfläche aus">
                  <option>Keine Auswahl</option>
                  <option selected value="weniger als 20m">Weniger als 20m²</option>
                  <option value="20 bis 40m">20 bis 40m²</option>
                  <option value="40 bis 60m">40 bis 60m²</option>
                  <option value="60 bis 80m">60 bis 80m²</option>
                  <option value="80 bis 100m">80 bis 100m²</option>
                  <option value="100 bis 150m">100 bis 150m²</option>
                  <option value="150 bis 200m">150 bis 200m²</option>
                  <option value="ab 200m">ab 200m²</option>
                </select>
                <label for="inputArea">Fläche in m²</label>
              </div>
              <div class="form-floating my-3">
                <textarea class="form-control" placeholder="Hinterlassen Sie uns eine Nachricht" id="inputMessage" style="height: 150px"></textarea>
                <label for="inputMessage">Zusätzliche Informationen</label>
              </div>
            </div>
            <div class="page-final success">
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Vielen Dank für Ihre Nachricht!</h4>
                <p class="mb-3">
                  Ihre Nachricht konnte erfolgreich versendet werden.
                </p>
                <p>
                  Wir werden uns bemühen Ihnen ein Angebot innerhalb von 48h (werktags) zukommen zu lassen.
                </p>
              </div>
            </div>
            <div class="page-final failure">
              <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Es hat einen Fehler gegeben.</h4>
                <p class="mb-3">
                  Ihre Nachricht konnte leider nicht versendet werden.
                </p>
                <p>
                  Wir bitten Sie es später erneut zu versuchen oder die <a class="text-decoration-underline" target="_blank" href="./kontakt.php">alternativen Kontaktmöglichkeiten</a> zu verwenden. Vielen Dank für Ihr Verständnis.
                </p>
              </div>
            </div>
          </div>
          <div class="modal-footer display-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Schließen</button>
            <button type="button" class="btn btn-primary" onclick="sendOfferRequest();">Anfrage senden</button>
          </div>
        </div>
      </div>
    </div>

    <section class="section" id="leistungen">
      <div class="container">
        <h2 class="section-title">Unsere Leistungen.</h2>
        <p class="section-subtitle">Gute Qualität und fachliches Know-How zeichnen uns aus. Erfahren Sie, was wir für
          Sie tun können.</p>
        <div class="row services-list mt-4 g-4">
          <div class="col-md-6 services-item-wrapper">
            <div class="services-item">
              <img src="./assets/images/services/house.png" alt="Haus">
              <div>
                <h3>Umzug für Private</h3>
                <p>Ein Umzug ist für Viele immer mit enormen Stress verbunden. Allein das Organisatorische und die
                  Planung bereiten für Manche ein großes Kopfzerbrechen, da man hier gar nicht an alles denken kann,
                  wenn man nicht die entsprechende Erfahrung hat. Wir übernehmen gerne für Sie jegliche Planung und
                  den Transport für Sie, damit Sie sich um Wichtigeres kümmern können.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 services-item-wrapper">
            <div class="services-item">
              <img src="./assets/images/services/company.png" alt="Unternehmen">
              <div>
                <h3>Umzug für Unternehmen</h3>
                <p>Ein Umzug bzw. der Wechsel des Unternehmensgebäudes ist vor allem für große Unternehmen ein enormer
                  Zeitaufwand, vor allem in der Organisation. Wir scheuen uns auch vor großen Umzügen nicht zurück und
                  helfen Ihnen gerne von der Planung bis hin zur Durchführung Ihres Firmenumzugs, damit Sie in Ruhe
                  Ihrem Geschäftsbetrieb nachgehen können.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 services-item-wrapper">
            <div class="services-item">
              <img src="./assets/images/services/tools.png" alt="Möbel">
              <div>
                <h3>Montage & Demontage</h3>
                <p>Auch Möbel, ganz egal ob einfache Wohnzimmermöbel oder ganze Küchen müssen oft in die neuen
                  Haushalte mit. Bei der Demontage kann es aber leicht passieren, dass diese beschädigt werden. Damit
                  dies nicht passiert bieten wir Ihnen einen exklusiven Demontage & Montage-Service an, damit Sie sich
                  auch da absolut keine Gedanken machen müssen.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 services-item-wrapper">
            <div class="services-item">
              <img src="./assets/images/services/container.png" alt="Entrümpelung">
              <div>
                <h3>Entrümpelung & Räumung</h3>
                <p>Bei Umzügen und größeren Wohnungsauflösungen kann es passieren, dass viel Müll entsteht bzw.
                  zurückbleibt, der mit einem normalen PKW nur schwer und mühevoll zu entsorgen ist. Machen Sie es
                  sich selber einfach und beauftragen Sie uns. Wir übernehmen die Entrümpelung und Entsorgung Ihres
                  Sperrmülls von kleinen Wohnungen bis zu großen Gebäuden.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section dark" id="referenzen">
      <div class="container">
        <h2 class="section-title">Über uns.</h2>
        <p class="section-subtitle">Erfahren Sie etwas über das Waymovers-Team und für welche Werte wir stehen.</p>
        <div class="row mt-4 g-4 about-us">
          <div class="col-lg-6">
            <img class="w-100" src="./assets/images/home/about-us.jpg" alt="Waymovers - Ihr Partner für Ihren Umzug in Berlin">
          </div>
          <div class="col-lg-6 text-part">
            <p class="mb-3">
              Als Umzugsunternehmen Ihres Vertrauens ist es uns wichtig, dass wir Ihnen ein gutes Gefühl geben. Sie
              sollen die Sicherheit haben, dass wir mit größter Vorsicht und Sorgfalt mit Ihren Schätzen umgehen
              werden, sodass diese nach dem Umzug im selben guten Zustand sind, wie vor dem Umzug.
            </p>
            <p class="mb-3">
              Mit größter Sorgfalt achten wir auf den Zustand unserer Transportfahrzeuge, darauf dass dieser im
              Laderaum gereinigt und hygienisch sauber ist. Vor dem Transport werden Ihre Sachen entsprechend verpackt
              und mit passenden Gurten gesichert, damit beim Transport gewisse Hindernisse, wie z.B. unebene
              Fahrbahnen ohne große Sorgen überwunden werden können.
            </p>
            <p class="mb-3">
              Bei Auftragserteilung versprechen wir Ihnen
            </p>
            <ul>
              <li>Hohe Qualität und Sicherheit</li>
              <li>Pünktlichkeit & Termintreue</li>
              <li>faire Preisgestaltung & keine versteckten Kosten</li>
            </ul>
            <a class="primary-btn mt-3" href="./kontakt.php">Kontaktieren Sie uns</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <h2 class="section-title">Ihre Vorteile.</h2>
        <p class="section-subtitle">Erfahren Sie welche Vorteile Sie bei Waymovers genießen dürfen.</p>
        <div class="row mt-4 g-4 advantages-wrapper">
          <div class="col-md-6 col-xl-3">
            <div class="advantage-item">
              <img src="./assets/images/services/star.png" alt="">
              <h3>Erfahrung</h3>
              <p>Unsere Mitarbeiter haben die notwendige Erfahrung um Ihnen den besten Service und die höchste Qualität zu liefern.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="advantage-item">
              <img src="./assets/images/services/search.png" alt="">
              <h3>Transparenz</h3>
              <p>Bei uns wird Transparenz groß geschrieben. Ihnen erwarten keine bösartigen Überraschungen bei der Endrechnung.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="advantage-item">
              <img src="./assets/images/services/free.png" alt="">
              <h3>Gratis Angebot</h3>
              <p>Falls Sie sich ein Angebot einholen möchten, bieten wir Ihnen diese gerne kostenlos an. Schnell, einfach & sicher.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="advantage-item">
              <img src="./assets/images/services/einpackservice.png" alt="">
              <h3>Einpackservice</h3>
              <p>Quälen Sie sich nicht mit der lästigen Ein- und Verpackungsarbeit. Lassen Sie uns das für Sie übernehmen.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section dark">
      <div class="container">
        <h2 class="section-title">Häufige Fragen.</h2>
        <p class="section-subtitle">Finden Sie Antworten auf Fragen, die für Sie eventuell interessant sein könnten.
        </p>
        <div class="row mt-4 g-4">
          <div class="col-lg-6">
            <div class="accordion" id="accordionLeft">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-1-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="true" aria-controls="collapseOne">
                    Was kostet mich mein Umzug?
                  </button>
                </h2>
                <div id="faq-1" class="accordion-collapse collapse" aria-labelledby="faq-1-header" data-bs-parent="#accordionLeft">
                  <div class="accordion-body">
                    Wie viel ein Umzug kostet, kann leider nicht einfach so gesagt werden, hier spielen viele wichtige
                    Faktoren eine große Rolle.
                    <br><br>
                    Wichtige Faktoren bei der Preisgestaltung sind beispielsweise die Fläche, die Anzahl der Möbel,
                    Anzahl der Umzugshelfer, Entfernung des neuen Wohnraumes, u.v.m.
                    <br><br>
                    Wir empfehlen Ihnen deshalb uns zu kontaktieren oder kostenlos ein Angebot anzufordern, sodass wir
                    Ihnen ein möglichst genaues Angebot zukommen lassen können.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-2-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="collapseTwo">
                    Sind kurzfristige Termine möglich?
                  </button>
                </h2>
                <div id="faq-2" class="accordion-collapse collapse" aria-labelledby="faq-2-header" data-bs-parent="#accordionLeft">
                  <div class="accordion-body">
                    Kurzfristige Termine sind grundsätzlich möglich, jedoch kommt es darauf an von welchem Aufwand wir
                    sprechen. Ist es eher ein kleiner Umzug bzw. lediglich ein Möbeltransport, oder sprechen wir von
                    einem großen Umzug eines Unternehmens?
                    <br><br>
                    Auch hier empfehlen wir Ihnen sich mit uns in Verbindung zu setzen, damit wir Ihnen eine genauere
                    Antwort geben können.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-3-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="collapseThree">
                    Ist mein Umzug versichert?
                  </button>
                </h2>
                <div id="faq-3" class="accordion-collapse collapse" aria-labelledby="faq-3-header" data-bs-parent="#accordionLeft">
                  <div class="accordion-body">
                    Gesetzlich ist jeder Möbelspediteur dazu verpflichtet eine Transportversicherung zu haben, wobei
                    sich die Höhe des Versicherungswertes nach den cm³ des jeweiligen Umzugsgutes richtet.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-4-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="collapseThree">
                    Kann ich meine Kartons auch selber packen?
                  </button>
                </h2>
                <div id="faq-4" class="accordion-collapse collapse" aria-labelledby="faq-4-header" data-bs-parent="#accordionLeft">
                  <div class="accordion-body">
                    Selbstverständlich dürfen Sie das. Wir empfehlen Ihnen jedoch die Kartons unsere erfahrenen
                    Mitarbeiter packen zu lassen, da bei selbstgepackten Kartons der Inhalt grundsätzlich nicht
                    versichert ist.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="accordion" id="accordionRight">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-5-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="true" aria-controls="collapseOne">
                    Können Kosten meines Umzugs steuerlich abgesetzt werden?
                  </button>
                </h2>
                <div id="faq-5" class="accordion-collapse collapse" aria-labelledby="faq-5-header" data-bs-parent="#accordionRight">
                  <div class="accordion-body">
                    Umzüge für Privatpersonen gehören zu den sogenannten "haushaltsnahen Dienstleistungen" und
                    Aufwendungen dieser Art können nach § 35a Abs. 2 EStG direkt von der Steuerschuld abgezogen
                    werden.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-6-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-6" aria-expanded="false" aria-controls="collapseTwo">
                    Ist die Angebotsanfrage auf Ihrer Webseite kostenlos?
                  </button>
                </h2>
                <div id="faq-6" class="accordion-collapse collapse" aria-labelledby="faq-6-header" data-bs-parent="#accordionRight">
                  <div class="accordion-body">
                    Die Angebotsanfrage auf unserer Webseite ist selbstverständlis kostenlos und unverbindlich. Sie
                    können jederzeit ein Angebot anfragen, ohne dass Ihnen Kosten hierfür anfallen.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-7-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-7" aria-expanded="false" aria-controls="collapseThree">
                    Wie lange dauert mein Umzug?
                  </button>
                </h2>
                <div id="faq-7" class="accordion-collapse collapse" aria-labelledby="faq-7-header" data-bs-parent="#accordionRight">
                  <div class="accordion-body">
                    Dies richtet sich danach wie groß der Aufwand für den Umzug ist. Falls wir von kleinen Wohnräumen sprechen, kann meist solch ein Umzug innerhalb eines Tages erledigt werden. Größere Umzüge (bzw. bei entfernteren Strecken) können manchmal bis zu mehreren Tagen dauern.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-8-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-8" aria-expanded="false" aria-controls="collapseThree">
                    Bauen Sie Möbel auch selbstständig ab und wieder auf?
                  </button>
                </h2>
                <div id="faq-8" class="accordion-collapse collapse" aria-labelledby="faq-8-header" data-bs-parent="#accordionRight">
                  <div class="accordion-body">
                    Unsere Umzugshelfer sind auch geschickte Handwerker, wodurch Ab- und Aufbauarbeiten von Möbeln
                    auch absolut kein Problem darstellen.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="primary-btn mt-3" href="./kontakt.php">Eigene Frage stellen</a>
      </div>
    </section>

    <section class="section" id="">
      <div class="container">
        <div class="row mt-4 g-4 about-us align-items-center">
          <div class="col-lg-6">
            <img class="w-100" src="./assets/images/home/tired.jpg" alt="Waymovers - Ihr Partner für Ihren Umzug in Berlin">
          </div>
          <div class="col-lg-6 text-part">
            <h3 class="mb-4">Keine Lust auf Umzugsstress?</h3>
            <p class="mb-3">
              Viele Menschen unterschätzen den Stress, den ein Umzug mit sich bringen kann. Angefangen damit, dass sie
              nicht wissen wie sie die Vorbereitung auf ihren neuen Lebensabschnitt beginnen sollen, nicht wissen wie
              sie das mit dem Transport regeln, bis hin zur Sorge, dass beim Transport etwas schief gehen könnte und
              bestimmte Dinge, die für sie einen hohen Wert haben, beschädigt werden könnten.
            </p>
            <p class="mb-3">
              Wir, das Team von Waymovers, möchten Ihnen gerne diese Sorge abnehmen und Ihnen einen guten, einfachen Start in Ihren neuen Lebensabschnitt ermöglichen. Wir wissen, wie ein Umzug am Besten geplant werden sollte, wir kennen alle möglichen Komplikationen und Hindernisse, die dabei auftreten können und haben das entsprechende Know-How um Ihre Fragen zu beantworten. Hinterlassen Sie uns gerne eine Nachricht.
            </p>
            <a class="primary-btn mt-3" href="./kontakt.php">Kontaktieren Sie uns</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php
  include_once "./assets/essentials/footer.html";
  ?>
</body>

</html>