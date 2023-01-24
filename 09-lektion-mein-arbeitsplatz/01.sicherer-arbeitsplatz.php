<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="generator" content="Hugo 0.104.3">
    <meta name="generator" content="Relearn 5.3.3">
    <meta name="description" content="BITS, das kostenlose Behörden-IT-Sicherheitstraining, wurde vom Arbeitskreis Informationstechnologie des Städte- und Gemeindebundes NRW als webbasierter Lernkurs für die Beschäftigten in Behörden und anderen Einrichtungen erstellt. Es dient der Information und Sensibilisierung der Kolleginnen und Kollegen an IT-Arbeitsplätzen hinsichtlich der relevanten Sicherheitsthemen.">
    <meta name="author" content="Dr. Lutz Gollan">
    <title>Sicherer Arbeitsplatz :: BITS | Behörden-IT-Sicherheitstraining</title>
    <link href="../images/favicon.png" rel="icon" type="image/png">
    <!-- https://github.com/filamentgroup/loadCSS/blob/master/README.md#how-to-use -->
    <link href="../css/fontawesome-all.min.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/fontawesome-all.min.css" rel="stylesheet"></noscript>
    <link href="../css/featherlight.min.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/featherlight.min.css" rel="stylesheet"></noscript>
    <link href="../css/auto-complete.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/auto-complete.css" rel="stylesheet"></noscript>
    <link href="../css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="../css/nucleus.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet" media="print" onload="this.media='all';this.onload=null;"><noscript><link href="../css/fonts.css" rel="stylesheet"></noscript>
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/theme-normal.css" rel="stylesheet" id="variant-style">
    <link href="../css/ie.css" rel="stylesheet">
    <link href="../css/variant.css" rel="stylesheet">
    <link href="../css/print.css" rel="stylesheet" media="print">
    <script src="../js/variant.js"></script>
    <script>
      // hack to let hugo tell us how to get to the root when using relativeURLs, it needs to be called *url= for it to do its magic:
      // https://github.com/gohugoio/hugo/blob/145b3fcce35fbac25c7033c91c1b7ae6d1179da8/transform/urlreplacers/absurlreplacer.go#L72
      var index_url="../index.json";
      var root_url="../";
      var baseUri=root_url.replace(/\/$/, '');
      // translations
      window.T_Copy_to_clipboard = 'In Zwischenablage kopieren';
      window.T_Copied_to_clipboard = 'In Zwischenablage kopiert!';
      window.T_Copy_link_to_clipboard = 'Link in Zwischenablage kopieren';
      window.T_Link_copied_to_clipboard = 'Link in Zwischenablage kopiert!';
      // some further base stuff
      var baseUriFull='/';
      window.variants && variants.init( [ 'normal', 'dark-mode', 'high-contrast' ] );
    </script>
    <script src="../js/jquery.min.js" defer></script>
	<meta name="date" content="18 Dec 22">

  </head>
  <body class="mobile-support default" data-url="../09-lektion-mein-arbeitsplatz/01.sicherer-arbeitsplatz.php">
    <div id="body" class="default-animation">
      <div id="sidebar-overlay"></div>
      <div id="toc-overlay"></div>
      <nav id="topbar" class="highlightable">
        <div>
          <div class="navigation">
             <a class="nav nav-next" href="../09-lektion-mein-arbeitsplatz/02.passwoerter-nicht-weitergeben.php" title="Passwörter nicht weitergeben (&#129106;)"><i class="fas fa-chevron-right fa-fw"></i></a>
          </div>
          <div class="navigation">
             <a class="nav nav-prev" href="../09-lektion-mein-arbeitsplatz.php" title="Mein Arbeitsplatz (&#129104;)"><i class="fas fa-chevron-left fa-fw"></i></a>
          </div>
          <div id="breadcrumbs">
            <span id="sidebar-toggle-span">
              <a href="#" id="sidebar-toggle" title='Menu (CTRL+ALT+n)'><i class="fas fa-bars fa-fw"></i></a>
            </span>
            <span class="links">
              Sicherer Arbeitsplatz
            </span>
          </div>
        </div>
      </nav>
      <main id="body-inner" class="highlightable default" tabindex="-1">
        <div class="flex-block-wrapper">
          <div id="head-tags">
          </div>
          <article class="default">

<div id="site-icon-wrap"><div id="site-icon-pre"></div><div id="site-icon-h1">
<h1>Sicherer Arbeitsplatz</h1>
</div><div id="site-icon-post"><div id="site-icon" class="site-icon-page"><i class="fas fa-laptop"></i></div></div></div>


<p>Der Schutz von Informationen der durch Ihre Behörde oder Einrichtung verarbeiteten Daten ist Aufgabe aller Beschäftigten. Durch falsches Verhalten können nicht nur die Daten in Ihrem Geschäftsbereich, sondern auch die Ihrer Kolleginnen und Kollegen gefährdet werden.</p>
<p>Bitte sorgen Sie auch für eine <strong>sichere Arbeitsumgebung</strong>, egal ob im Büro, Home Office oder unterwegs:</p>
<ul>
<li>Verhindern Sie, dass Dritte, dazu zählen auch Familienangehörige, Daten und Akten einsehen können</li>
<li>Verwenden Sie bestenfalls ein Netzwerkkabel oder aber ein sicheres, verschlüsseltes WLAN (Hinweise hierzu in der Lektion <a href="../08-lektion-mobile-geraete.php">Mobile Geräte</a></li>
<li>Verwenden Sie, falls dienstlich gestellt, das Programm für den Aufbau eines Virtuellen Privaten Netzwerks (VPN) (siehe unten)</li>
<li>Bei Video- oder Telefonkonferenzen darf keine unberechtigte Person mithören. Verwenden Sie z. B. einen Kopfhörer mit Mikrofon und schalten Sie private Sprachassistenzsysteme („Smart Speaker“, „Smart Watch“), die im Raum mithören, aus.</li>
</ul>

<div class="box notices cstyle tip">
    <div class="box-label"><i class="fa-fw fas fa-lightbulb"></i> Gut zu wissen</div>
    <div class="box-content">
<ul>
<li>Alle sind am Arbeitsplatz für die Informationssicherheit mit verantwortlich!</li>
<li>Virtuelle Private Netzwerke (<strong>VPN</strong>) und die Einwahlprogramme dafür werden regelmäßig von Ihrem Arbeitgeber zur sicheren Online-Kommunikation bereitgestellt. Sie stellen eine sichere Verbindung Ihres (meist mobilen) Endgeräts zu Ihrem dienstlichen Netz über das grundsätzlich unsichere Internet her.</li>
</ul>
    </div>
</div>

            <footer class="footline">
            </footer>
          </article>
        </div>
      </main>
    </div>
    <aside id="sidebar" class="default-animation showVisitedLinks">
      <div id="header-wrapper" class="default-animation">
        <div id="header" class="default-animation">
<a id="logo" href="../index.php">
  <img src="../images/logo.jpg" width="220" height="140" alt="BITS Logo" title="BITS | Behörden-IT-Sicherheitstraining">
</a>

        </div>
      </div>
      <div id="content-wrapper" class="highlightable">
        <ul class="topics">
          <li data-nav-id="/einleitung.php" class="dd-item"><a href="../einleitung.php">Einleitung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails.php" class="dd-item"><a href="../01-lektion-e-mails.php">1. Lektion E-Mails<i class="fas fa-check read-icon"></i></a><ul id="subsections-c086ac896b3ee5509d006b237df7eb0d">
          <li data-nav-id="/01-lektion-e-mails/01.was-sind-emails.php" class="dd-item"><a href="../01-lektion-e-mails/01.was-sind-emails.php">Was sind E-Mails?<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/02.uebermittlung-von-e-mails.php" class="dd-item"><a href="../01-lektion-e-mails/02.uebermittlung-von-e-mails.php">Übermittlung von E-Mails im Internet<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/03.spam-e-mails.php" class="dd-item"><a href="../01-lektion-e-mails/03.spam-e-mails.php">Spam-E-Mails<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/04.computerviren.php" class="dd-item"><a href="../01-lektion-e-mails/04.computerviren.php">Computerviren per E-Mail<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/05.phishing-und-pharming.php" class="dd-item"><a href="../01-lektion-e-mails/05.phishing-und-pharming.php">Phishing und Pharming<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/06.fehlgeleitete-informationen.php" class="dd-item"><a href="../01-lektion-e-mails/06.fehlgeleitete-informationen.php">Fehlgeleitete Informationen<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/07.erste-hilfe.php" class="dd-item"><a href="../01-lektion-e-mails/07.erste-hilfe.php">Erste Hilfe<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/08.vertrauliche-informationen.php" class="dd-item"><a href="../01-lektion-e-mails/08.vertrauliche-informationen.php">Vertrauliche Informationen<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/09.dienstliche-und-private-nutzung.php" class="dd-item"><a href="../01-lektion-e-mails/09.dienstliche-und-private-nutzung.php">Dienstliche und private Nutzung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/10.netiquette.php" class="dd-item"><a href="../01-lektion-e-mails/10.netiquette.php">Netiquette<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/11.zusammenfassung.php" class="dd-item"><a href="../01-lektion-e-mails/11.zusammenfassung.php">Zusammenfassung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/01-lektion-e-mails/90.quiz-e-mails.php" class="dd-item"><a href="../01-lektion-e-mails/90.quiz-e-mails.php">Quiz - E-Mails<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/02-lektion-viren.php" class="dd-item"><a href="../02-lektion-viren.php">2. Lektion Viren<i class="fas fa-check read-icon"></i></a><ul id="subsections-d17bb9556d8e63a32c5dce29f729f275">
          <li data-nav-id="/02-lektion-viren/01.was-sind-computerviren.php" class="dd-item"><a href="../02-lektion-viren/01.was-sind-computerviren.php">Was sind Computerviren?<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/02.typen-von-viren.php" class="dd-item"><a href="../02-lektion-viren/02.typen-von-viren.php">Typen von Viren<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/03.moegliche-schaeden-durch-virenbefall.php" class="dd-item"><a href="../02-lektion-viren/03.moegliche-schaeden-durch-virenbefall.php">Mögliche Schäden durch Virenbefall<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/04.infektionswege.php" class="dd-item"><a href="../02-lektion-viren/04.infektionswege.php">Infektionswege<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/05.risiken-und-schaeden.php" class="dd-item"><a href="../02-lektion-viren/05.risiken-und-schaeden.php">Risiken und Schäden<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/06.vorbeugung.php" class="dd-item"><a href="../02-lektion-viren/06.vorbeugung.php">Vorbeugung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/07.virenbefall-was-tun.php" class="dd-item"><a href="../02-lektion-viren/07.virenbefall-was-tun.php">Virenbefall - was tun?<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/08.zusammenfassung.php" class="dd-item"><a href="../02-lektion-viren/08.zusammenfassung.php">Zusammenfassung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/02-lektion-viren/90.quiz-viren.php" class="dd-item"><a href="../02-lektion-viren/90.quiz-viren.php">Quiz - Viren<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/03-lektion-passwoerter.php" class="dd-item"><a href="../03-lektion-passwoerter.php">3. Lektion Passwörter<i class="fas fa-check read-icon"></i></a><ul id="subsections-ca409e2b4cb5e26079deffb2f40f407a">
          <li data-nav-id="/03-lektion-passwoerter/01.erklaerung.php" class="dd-item"><a href="../03-lektion-passwoerter/01.erklaerung.php">Erklärung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/03-lektion-passwoerter/02.gefahren.php" class="dd-item"><a href="../03-lektion-passwoerter/02.gefahren.php">Gefahren<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/03-lektion-passwoerter/03.der-richtige-umgang.php" class="dd-item"><a href="../03-lektion-passwoerter/03.der-richtige-umgang.php">Der richtige Umgang<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/03-lektion-passwoerter/04.werkzeuge-fuer-passwoerter.php" class="dd-item"><a href="../03-lektion-passwoerter/04.werkzeuge-fuer-passwoerter.php">Werkzeuge für Passwörter<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/03-lektion-passwoerter/05.zusammenfassung.php" class="dd-item"><a href="../03-lektion-passwoerter/05.zusammenfassung.php">Zusammenfassung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/03-lektion-passwoerter/90.quiz-passwoerter.php" class="dd-item"><a href="../03-lektion-passwoerter/90.quiz-passwoerter.php">Quiz - Passwörter<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/04-lektion-internet.php" class="dd-item"><a href="../04-lektion-internet.php">4. Lektion Surfen im Internet<i class="fas fa-check read-icon"></i></a><ul id="subsections-911c81fe2e5d5f812c0fca36c69f8bdf">
          <li data-nav-id="/04-lektion-internet/01.was-ist-das-internet.php" class="dd-item"><a href="../04-lektion-internet/01.was-ist-das-internet.php">Was ist das Internet?<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/02.gefahren-im-internet.php" class="dd-item"><a href="../04-lektion-internet/02.gefahren-im-internet.php">Gefahren im Internet<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/03.vertrauenswuerdigkeit-von-webseiten.php" class="dd-item"><a href="../04-lektion-internet/03.vertrauenswuerdigkeit-von-webseiten.php">Vertrauenswürdigkeit von Webseiten<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/04.technische-webinhalte.php" class="dd-item"><a href="../04-lektion-internet/04.technische-webinhalte.php">Technische Webinhalte<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/05.schutz-vor-technischen-webinhalten.php" class="dd-item"><a href="../04-lektion-internet/05.schutz-vor-technischen-webinhalten.php">Schutz vor technischen Webinhalten<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/06.verschluesselter-zugriff-auf-webseiten.php" class="dd-item"><a href="../04-lektion-internet/06.verschluesselter-zugriff-auf-webseiten.php">Verschlüsselter Zugriff auf Webseiten<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/07.blocken-unerwuenschter-seiten.php" class="dd-item"><a href="../04-lektion-internet/07.blocken-unerwuenschter-seiten.php">Blocken unerwünschter Seiten<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/08.internet-richtlinien.php" class="dd-item"><a href="../04-lektion-internet/08.internet-richtlinien.php">Richtlinien zur Internetnutzung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/09.zusammenfassung.php" class="dd-item"><a href="../04-lektion-internet/09.zusammenfassung.php">Zusammenfassung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/04-lektion-internet/90.quiz-internet.php" class="dd-item"><a href="../04-lektion-internet/90.quiz-internet.php">Quiz - Internet<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten.php">5. Lektion Vertrauliche Daten<i class="fas fa-check read-icon"></i></a><ul id="subsections-8574f37cb9b73a543c3e0995f6d96b4a">
          <li data-nav-id="/05-lektion-vertrauliche-daten/01.vertrauliche-daten.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/01.vertrauliche-daten.php">Vertrauliche Daten<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/02.elektronische-datenverarbeitung.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/02.elektronische-datenverarbeitung.php">Elektronische Datenverarbeitung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/03.identifizierung-vertraulicher-daten.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/03.identifizierung-vertraulicher-daten.php">Identifizierung vertraulicher Daten<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/04.betriebsgeheimnisse.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/04.betriebsgeheimnisse.php">Betriebsgeheimnisse<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/05.interne-informationen.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/05.interne-informationen.php">Interne Informationen<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/06.entscheidungsrelevante-informationen.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/06.entscheidungsrelevante-informationen.php">Entscheidungsrelevante Informationen<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/07.persoenlich-vertrauliche-informationen.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/07.persoenlich-vertrauliche-informationen.php">Persönlich-vertrauliche Informationen<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/08.datenschutzbeauftragte.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/08.datenschutzbeauftragte.php">Datenschutzbeauftragte<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/09.zusammenfassung.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/09.zusammenfassung.php">Zusammenfassung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/05-lektion-vertrauliche-daten/90.quiz-vertrauliche-daten.php" class="dd-item"><a href="../05-lektion-vertrauliche-daten/90.quiz-vertrauliche-daten.php">Quiz - Vertrauliche Daten<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/06-lektion-social-media.php" class="dd-item"><a href="../06-lektion-social-media.php">6. Lektion Social Media<i class="fas fa-check read-icon"></i></a><ul id="subsections-165e1ba5c5785dd7976d9834642ffec7">
          <li data-nav-id="/06-lektion-social-media/01.einleitung.php" class="dd-item"><a href="../06-lektion-social-media/01.einleitung.php">Social Media-Dienste<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/06-lektion-social-media/02.geschaeftsmodell.php" class="dd-item"><a href="../06-lektion-social-media/02.geschaeftsmodell.php">Geschäftsmodell<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/06-lektion-social-media/03.social-media-sicher-nutzen.php" class="dd-item"><a href="../06-lektion-social-media/03.social-media-sicher-nutzen.php">Social Media sicher nutzen<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/06-lektion-social-media/90.quiz-social-media.php" class="dd-item"><a href="../06-lektion-social-media/90.quiz-social-media.php">Quiz - Social Media<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/07-lektion-cloud.php" class="dd-item"><a href="../07-lektion-cloud.php">7. Lektion Cloud<i class="fas fa-check read-icon"></i></a><ul id="subsections-34918d1cd94a60ac0b2441e8b9ec5827">
          <li data-nav-id="/07-lektion-cloud/01.einleitung.php" class="dd-item"><a href="../07-lektion-cloud/01.einleitung.php">Cloud-Dienste<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/07-lektion-cloud/02.ueberblick-cloud-dienste.php" class="dd-item"><a href="../07-lektion-cloud/02.ueberblick-cloud-dienste.php">Überblick Cloud-Dienste<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/07-lektion-cloud/03.vorteile-und-gefahren.php" class="dd-item"><a href="../07-lektion-cloud/03.vorteile-und-gefahren.php">Vorteile und Gefahren<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/07-lektion-cloud/04.cloud-dienste-sicher-nutzen.php" class="dd-item"><a href="../07-lektion-cloud/04.cloud-dienste-sicher-nutzen.php">Cloud-Dienste sicher nutzen<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/07-lektion-cloud/05.zusammenfassung.php" class="dd-item"><a href="../07-lektion-cloud/05.zusammenfassung.php">Zusammenfassung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/07-lektion-cloud/90.quiz-cloud.php" class="dd-item"><a href="../07-lektion-cloud/90.quiz-cloud.php">Quiz - Cloud<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/08-lektion-mobile-geraete.php" class="dd-item"><a href="../08-lektion-mobile-geraete.php">8. Lektion Mobile Geräte<i class="fas fa-check read-icon"></i></a><ul id="subsections-6e49a72e993d6de5173dd8cf540c0e8f">
          <li data-nav-id="/08-lektion-mobile-geraete/01.einleitung.php" class="dd-item"><a href="../08-lektion-mobile-geraete/01.einleitung.php">Einleitung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/02.besondere-gefahren.php" class="dd-item"><a href="../08-lektion-mobile-geraete/02.besondere-gefahren.php">Besondere Gefahren<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/03.heutige-kommunikationstechnologien.php" class="dd-item"><a href="../08-lektion-mobile-geraete/03.heutige-kommunikationstechnologien.php">Heutige Kommunikationstechnologien<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/04.wlan-wireless-local-area-network.php" class="dd-item"><a href="../08-lektion-mobile-geraete/04.wlan-wireless-local-area-network.php">WLAN - Wireless Local Area Network<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/05.notebooks.php" class="dd-item"><a href="../08-lektion-mobile-geraete/05.notebooks.php">Notebooks<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/06.mobiltelefone.php" class="dd-item"><a href="../08-lektion-mobile-geraete/06.mobiltelefone.php">Mobiltelefone<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/07.apps-und-bring-your-own-device.php" class="dd-item"><a href="../08-lektion-mobile-geraete/07.apps-und-bring-your-own-device.php">Apps und &#34;Bring your own device&#34;<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/08.mobile-datentraeger.php" class="dd-item"><a href="../08-lektion-mobile-geraete/08.mobile-datentraeger.php">Mobile Datenträger<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/09.zusammenfassung.php" class="dd-item"><a href="../08-lektion-mobile-geraete/09.zusammenfassung.php">Zusammenfassung<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/08-lektion-mobile-geraete/90.quiz-mobile-geraete.php" class="dd-item"><a href="../08-lektion-mobile-geraete/90.quiz-mobile-geraete.php">Quiz - Mobile Geräte<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/09-lektion-mein-arbeitsplatz.php" class="dd-item parent"><a href="../09-lektion-mein-arbeitsplatz.php">9. Lektion Mein Arbeitsplatz<i class="fas fa-check read-icon"></i></a><ul id="subsections-6db172a1665b7651aa25232915030c8a">
          <li data-nav-id="/09-lektion-mein-arbeitsplatz/01.sicherer-arbeitsplatz.php" class="dd-item active"><a href="../09-lektion-mein-arbeitsplatz/01.sicherer-arbeitsplatz.php">Sicherer Arbeitsplatz<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/09-lektion-mein-arbeitsplatz/02.passwoerter-nicht-weitergeben.php" class="dd-item"><a href="../09-lektion-mein-arbeitsplatz/02.passwoerter-nicht-weitergeben.php">Passwörter nicht weitergeben<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/09-lektion-mein-arbeitsplatz/03.zugang-sichern.php" class="dd-item"><a href="../09-lektion-mein-arbeitsplatz/03.zugang-sichern.php">Zugang sichern<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/09-lektion-mein-arbeitsplatz/04.social-engineering-angriffe-abwehren.php" class="dd-item"><a href="../09-lektion-mein-arbeitsplatz/04.social-engineering-angriffe-abwehren.php">Social Engineering-Angriffe abwehren<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/09-lektion-mein-arbeitsplatz/05.vorsicht-bei-mobilen-datentraegern.php" class="dd-item"><a href="../09-lektion-mein-arbeitsplatz/05.vorsicht-bei-mobilen-datentraegern.php">Vorsicht bei mobilen Datenträgern<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/09-lektion-mein-arbeitsplatz/06.messenger.php" class="dd-item"><a href="../09-lektion-mein-arbeitsplatz/06.messenger.php">Messenger-Apps<i class="fas fa-check read-icon"></i></a></li>
          <li data-nav-id="/09-lektion-mein-arbeitsplatz/07.verhalten-im-schadensfall.php" class="dd-item"><a href="../09-lektion-mein-arbeitsplatz/07.verhalten-im-schadensfall.php">Verhalten im Schadensfall<i class="fas fa-check read-icon"></i></a></li></ul></li>
          <li data-nav-id="/ansprechpersonen.php" class="dd-item"><a href="../ansprechpersonen.php">Infos / Ansprechpersonen<i class="fas fa-check read-icon"></i></a></li>
        </ul>
        <div id="shortcuts">
          <div class="nav-title">Mehr</div>
          <ul>
            <li><a class="padding" href="../weitere-informationen.php"><i class='fas fa-fw fa-info-circle'></i> Weitere Informationen</a></li>
            <li><a class="padding" href="../herausgeber-und-lizenz.php"><i class='fas fa-fw fa-id-card'></i> Herausgeber und Lizenz</a></li>
            <li><a class="padding" href="../barrierefreiheit.php"><i class='fas fa-fw fa-wheelchair'></i> Barrierefreiheit</a></li>
            <li><a class="padding" href="../impressum.php"><i class='fas fa-fw fa-file-contract'></i> Impressum</a></li>
            <li><a class="padding" href="../datenschutz.php"><i class='fas fa-fw fa-user-shield'></i> Datenschutz</a></li>
          </ul>
        </div>
        <div class="footermargin footerLangSwitch footerVariantSwitch footerVisitedLinks footerFooter showVariantSwitch showVisitedLinks"></div>
        <hr class="default-animation footerLangSwitch footerVariantSwitch footerVisitedLinks footerFooter showVariantSwitch showVisitedLinks">
        <div id="prefooter" class="footerLangSwitch footerVariantSwitch footerVisitedLinks showVariantSwitch showVisitedLinks">
          <ul>
            <li id="select-language-container" class="footerLangSwitch">
              <div class="padding select-container">
                <i class="fas fa-language fa-fw"></i>
                <span>&nbsp;</span>
                <div class="select-style">
                  <label class="a11y-only" for="select-language">Sprache</label>
                  <select id="select-language" onchange="location = baseUri + this.value;">
                    <option lang="de" id="de" value="/09-lektion-mein-arbeitsplatz/01.sicherer-arbeitsplatz.php" selected>Deutsch</option>
                  </select>
                </div>
                <div class="select-clear"></div>
              </div>
            </li>
            <li id="select-variant-container" class="footerVariantSwitch showVariantSwitch">
              <div class="padding select-container">
                <i class="fas fa-paint-brush fa-fw"></i>
                <span>&nbsp;</span>
                <div class="select-style">
                  <label class="a11y-only" for="select-variant">Theme</label>
                  <select id="select-variant" onchange="window.variants && variants.changeVariant( this.value );">
                    <option id="normal" value="normal" selected>Normal</option>
                    <option id="dark-mode" value="dark-mode">Dark Mode</option>
                    <option id="high-contrast" value="high-contrast">High Contrast</option>
                  </select>
                </div>
                <div class="select-clear"></div>
              </div>
              <script>window.variants && variants.markSelectedVariant();</script>
            </li>
            <li class="footerVisitedLinks showVisitedLinks"><a class="padding" onclick="clearHistory();"><i class="fas fa-history fa-fw"></i> Verlauf löschen</a></li>
          </ul>
        </div>
        <div id="footer" class="footerFooter">
        </div>
      </div>
    </aside>
    <script src="../js/clipboard.min.js" defer></script>
    <script src="../js/perfect-scrollbar.min.js" defer></script>
    <script src="../js/featherlight.min.js" defer></script>
    <script src="../js/theme.js" defer></script>
  </body>
</html>
