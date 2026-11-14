
# MP1 – Zielony Fotograf

Projekt realizowany w ramach przedmiotu
**Systemy zarządzania treścią (CMS)**.

## 1. Opis firmy

**Nazwa:** Zielony Fotograf

**Hasło:** Zdjęcia z życia wzięte

**Branża:** Usługi fotograficzne

**Opis:**

Zielony Fotograf to fikcyjna firma oferująca
profesjonalne sesje fotograficzne dla klientów
indywidualnych. Firma stawia na naturalność,
autentyczne emocje i fotografię plenerową.

**Oferta:**
- Sesje portretowe
- Sesje rodzinne
- Sesje dla par
- Fotografia okolicznościowa

**Grupa docelowa:**

Osoby w wieku 20–45 lat, pary i rodziny,
które poszukują profesjonalnych zdjęć
w naturalnej atmosferze.

## 2. Persony

### Persona 1 – Anna Kowalska

- **Wiek:** 29 lat
- **Zawód:** Specjalistka ds. marketingu
- **Cel:** Zorganizować rodzinną sesję fotograficzną.
- **Problem:** Trudność w znalezieniu fotografa,
  którego styl odpowiada jej oczekiwaniom.
- **Urządzenie:** Smartfon.
- **CTA:** Umów sesję.

### Persona 2 – Michał Nowak

- **Wiek:** 35 lat
- **Zawód:** Przedsiębiorca
- **Cel:** Zamówić profesjonalną sesję portretową.
- **Problem:** Brak przejrzystej oferty i cennika
  na stronach fotografów.
- **Urządzenie:** Laptop.
- **CTA:** Sprawdź ofertę.

## 3. Mapa strony

```text
Zielony Fotograf
|
|-- Strona główna
|-- O nas
|-- Oferta
|   |-- Sesje portretowe
|   |-- Sesje rodzinne
|-- Portfolio
|-- Aktualności
|-- Kontakt
|-- Polityka prywatności
```

Mapa strony została przygotowana na podstawie
potrzeb dwóch person.

Użytkownicy mogą zapoznać się z ofertą,
obejrzeć portfolio, poznać fotografa
oraz przejść do kontaktu w celu umówienia sesji.

## 4. Dlaczego WordPress?

Według danych W3Techs z października 2026
WordPress obsługuje 40,2% wszystkich stron
internetowych i posiada 58,7% rynku CMS,
co świadczy o jego dużej popularności.

Dla firmy Zielony Fotograf WordPress jest
lepszym wyborem niż Wix i Shopify, ponieważ
umożliwia większą kontrolę nad witryną,
łatwe prowadzenie portfolio i rozbudowę
funkcjonalności za pomocą wtyczek.

W porównaniu z Drupalem WordPress jest
łatwiejszy w obsłudze dla niewielkiej firmy,
która chce samodzielnie aktualizować zdjęcia,
ofertę oraz informacje kontaktowe.

## 5. Środowisko projektu – L01

Projekt uruchomiono w dwóch środowiskach:

### WordPress Playground

Wykorzystano Blueprint JSON do konfiguracji
WordPressa.

Blueprint obejmował:
- Ustawienie języka polskiego (`pl_PL`).
- Instalację i aktywację motywu Twenty Twenty-Five.
- Instalację wtyczki Contact Form 7.
- Ustawienie nazwy witryny „Zielony Fotograf”.
- Ustawienie opisu „Zdjęcia z życia wzięte”.
- Konfigurację przyjaznych odnośników.

Przygotowano również eksport witryny
umożliwiający zachowanie efektów pracy.

### GitHub Codespaces i Docker Compose

Utworzono repozytorium `cms-lab`.

Środowisko zawiera dwie usługi:
- WordPress z serwerem Apache.
- MariaDB jako bazę danych.

Usługi uruchamiane są za pomocą Docker Compose.

WordPress komunikuje się z bazą danych
przez nazwę usługi `db` w sieci Dockera.

Port `8080` jest udostępniany za pomocą
GitHub Codespaces.

Skonfigurowano również obsługę adresów HTTPS
i przekierowań w środowisku Codespaces.

## 6. L02 – Struktura i bloki

### G1. Wireframe i struktura treści

Na podstawie mapy strony przygotowano
wireframe strony głównej Zielonego Fotografa.

Zaplanowano następujące elementy:
- Nagłówek z menu nawigacyjnym.
- Sekcję Hero z głównym nagłówkiem i CTA.
- Sekcję trzech usług fotograficznych.
- Sekcję opinii klientów.
- Stopkę z danymi kontaktowymi.

W WordPressie utworzono podstrony zgodne
z mapą strony.

Utworzono dwie kategorie:
- Porady fotograficzne.
- Aktualności studia.

Opublikowano trzy wpisy:
1. Jak przygotować się do sesji zdjęciowej?
2. Dlaczego warto wybrać sesję w plenerze?
3. Witamy na stronie Zielony Fotograf!

Ustawiono strukturę bezpośrednich odnośników
na nazwę wpisu (`/%postname%/`).

### G2. Strona główna w Gutenbergu

Stronę główną zbudowano za pomocą
edytora blokowego WordPress Gutenberg.

Wykorzystano bloki:
- Okładka.
- Grupa.
- Kolumny.
- Nagłówek.
- Akapit.
- Przyciski.
- Cytat.

Sekcja Hero zawiera:
- Zdjęcie w tle.
- Nagłówek H1 „Zdjęcia z życia wzięte”.
- Krótki opis korzyści dla klienta.
- Przycisk CTA „Umów sesję”.

Poniżej umieszczono sekcję „Nasza oferta”
z trzema kolumnami:
- Sesje portretowe.
- Sesje rodzinne.
- Sesje dla par.

Każda kolumna zawiera zdjęcie i opis usługi.

Dodano również sekcję „Opinie klientów”
z przykładową, fikcyjną opinią.

Zachowano hierarchię nagłówków:
- H1 – główne hasło strony.
- H2 – sekcje oferty i opinii.
- H3 – poszczególne usługi.

Stronę główną ustawiono jako statyczną,
a „Aktualności” jako stronę wpisów.

Dla strony głównej zastosowano szablon
„Page No Title”, aby uniknąć dodatkowego H1.

### G3. Nagłówek, stopka i wzorzec

W edytorze witryny dostosowano nagłówek
z nazwą firmy i menu nawigacyjnym.

Menu zawiera:
- Strona główna.
- O nas.
- Oferta.
- Portfolio.
- Aktualności.
- Kontakt.

W pozycji „Oferta” utworzono podmenu:
- Sesje portretowe.
- Sesje rodzinne.

Dostosowano stopkę witryny.

Stopka zawiera:
- Nazwę „Zielony Fotograf”.
- Hasło „Zdjęcia z życia wzięte”.
- Przykładowy adres kontaktowy.
- Informację o oferowanych sesjach.
- Link do polityki prywatności.
- Informację o prawach autorskich.

Utworzono własny wzorzec bloków:

**Hero – Zielony Fotograf**

Typ wzorca: **niezsynchronizowany**.

Zawiera on:
- Obraz tła.
- Nagłówek.
- Opis.
- Przycisk CTA.

Wzorzec wykorzystano ponownie na stronie
„Oferta”, dostosowując nagłówek i opis.
Na tej stronie nagłówek wzorca ustawiono
na poziom H2.

## 7. Testowanie i dokumentacja

Sprawdzono działanie:
- Strony głównej.
- Nawigacji i podmenu.
- Bezpośrednich odnośników.
- Sekcji Hero i przycisku CTA.
- Strony Oferta.
- Stopki.

Przygotowano widok mobilny strony
oraz dokumentację fotograficzną projektu.

Projekt jest przechowywany w repozytorium
GitHub `cms-lab`.

Kopie zapasowe obejmują:
- Eksport bazy danych MariaDB.
- Archiwum katalogu `wp-content`.

Kopie przechowywane są poza publicznym
repozytorium.

## 8. Użycie AI

**Narzędzie:** ChatGPT (OpenAI).

AI wykorzystano do:
- Przygotowania wstępnego opisu fikcyjnej firmy.
- Opracowania przykładowych person.
- Zaplanowania mapy strony.
- Przygotowania uzasadnienia wyboru CMS.
- Zaproponowania treści stron i wpisów.
- Planowania układu strony głównej.
- Wyjaśniania działania bloków Gutenberga.
- Pomocy w konfiguracji Docker Compose.
- Diagnostyki problemów z przekierowaniami.
- Przygotowania dokumentacji projektu.

Samodzielnie wykonano:
- Konfigurację środowiska.
- Tworzenie stron i wpisów.
- Wybór i dodanie zdjęć.
- Budowę strony w edytorze Gutenberg.
- Konfigurację menu i stopki.
- Utworzenie własnego wzorca bloków.
- Testowanie działania witryny.
- Wykonanie kopii zapasowych.

Treści wygenerowane z pomocą AI zostały
zweryfikowane i dostosowane do potrzeb
fikcyjnej firmy.

Firma, persony i przykładowa opinia klienta
mają charakter fikcyjny.

## 9. Podsumowanie

W ramach L01 i L02 przygotowano
projekt witryny „Zielony Fotograf”.

Wykorzystano WordPress, MariaDB,
Docker Compose i GitHub Codespaces.

Zbudowano strukturę treści, menu nawigacyjne,
stronę główną z sekcją Hero, ofertę,
stopkę i własny wzorzec bloków.

Projekt stanowi podstawę do kolejnych etapów
laboratorium z systemów zarządzania treścią.
