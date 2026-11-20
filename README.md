# MP1 – Zielony Fotograf (L01–L03)



**Repozytorium:** https://github.com/rbiegun/cms-lab

## 1. Opis projektu

**Zielony Fotograf** to fikcyjna firma oferująca sesje portretowe, rodzinne i dla par. Hasło witryny: „Zdjęcia z życia wzięte”.

### Grupa docelowa

- **Anna Kowalska, 29 lat** – poszukuje sesji rodzinnej, korzysta głównie ze smartfona i oczekuje przejrzystej oferty.
- **Michał Nowak, 35 lat** – interesuje się sesją portretową, korzysta z laptopa i chce szybko znaleźć opis usług oraz dane kontaktowe.

### Struktura witryny

Strona główna, O nas, Oferta (sesje portretowe i rodzinne), Portfolio, Aktualności, Kontakt oraz Polityka prywatności.

**Wybór CMS:** WordPress wybrano ze względu na edytor Gutenberg, łatwe zarządzanie treścią i możliwość rozbudowy. Zapewnia większą kontrolę nad instalacją niż Wix i jest prostszy w obsłudze niż Drupal. Shopify koncentruje się przede wszystkim na sklepach internetowych.

## 2. L01 – Przygotowanie środowiska

- Przygotowano WordPress Playground Blueprint z językiem `pl_PL`, motywem Twenty Twenty-Five, wtyczką Contact Form 7 i przyjaznymi odnośnikami.
- Utworzono repozytorium GitHub `cms-lab`.
- Uruchomiono WordPress w GitHub Codespaces z użyciem Docker Compose.
- Zastosowano WordPress (`wordpress:php8.3-apache`) oraz MariaDB (`mariadb:11`) na porcie `8080`.
- Hasła do bazy danych zapisano w pliku `.env`, wykluczonym z repozytorium.

**Uruchomienie:** Należy utworzyć `.env` na podstawie `.env.example`, wykonać `docker compose up -d` i przekierować port `8080`. Odtworzenie pełnej witryny wymaga również importu bazy danych oraz katalogu `wp-content`.

## 3. L02 – Treści i Gutenberg

- Utworzono podstrony oraz trzy wpisy w kategoriach „Porady fotograficzne” i „Aktualności studia”
- Skonfigurowano statyczną stronę główną oraz stronę Aktualności wyświetlającą wpisy
- Wykorzystano bloki Gutenberg: Okładka, Grupa, Kolumny, Nagłówek, Akapit, Przyciski i Cytat
- Przygotowano Hero z nagłówkiem H1 „Zdjęcia z życia wzięte” i przyciskiem „Umów sesję”
- Dodano sekcję oferty trzech rodzajów sesji oraz opinie klientów
- Zbudowano menu z podmenu Oferta i wspólną stopkę zawierającą kontakt oraz politykę prywatności
- Utworzono własny wzorzec „Hero – Zielony Fotograf”, wykorzystany również na stronie Oferta

## 4. L03 – Style, dostępność i prywatność

### G1 – Style globalne

Skonfigurowano paletę kolorów:

- **Biały:** `#FFFFFF` – tło strony
- **Ciemny:** `#1A1A1A` – tekst
- **Zieleń marki:** `#245C3A` – przyciski i akcenty
- **Jasna zieleń:** `#E8F1E7` – elementy uzupełniające

Dostosowano typografię, odnośniki oraz wygląd przycisków

### G2 – CSS i responsywność

Dodano własny CSS:

- Widoczny fokus klawiatury (`:focus-visible`)
- Responsywne skalowanie nagłówka H1 (`clamp()`)
- Odstępy dla elementów nawigacji
- Reguły `@media` dla ekranów do 600 px.

Sprawdzono układ przy szerokości około 375 px oraz nawigację klawiaturą.

### G3 – Audyt dostępności

Przeprowadzono testy Lighthouse i WAVE.

**Wyniki Lighthouse Accessibility:**

- Strona główna, Mobile – **100/100**
- Kontakt, Mobile – **100/100**

**Wyniki WAVE dla strony głównej (użytkownik niezalogowany):**

- Błędy dostępności – **0**
- Błędy kontrastu – **0**
- Ostrzeżenia – **2**.
- AIM Score – **10/10**

W ramach poprawek zmieniono tło Hero, zastosowano ciemnozielone tła pod białym tekstem i dostosowano układ do urządzeń mobilnych.

Pozostałe ostrzeżenia WAVE dotyczą nazwy witryny („Possible heading”) oraz przycisku „Umów sesję” („Redundant link”). Działanie przycisku zweryfikowano ręcznie.

Wyniki testów automatycznych nie są równoznaczne z pełnym potwierdzeniem zgodności z WCAG

### G4 – Prywatność i licencje

- Przygotowano Politykę prywatności i dodano odnośnik do niej w stopce.
- Sprawdzono cookies w DevTools. Zaobserwowano techniczne cookies WordPressa i środowiska Codespaces; w analizowanym zakresie nie zidentyfikowano typowych cookies analitycznych ani reklamowych.
- Potwierdzono lokalne ładowanie fontu Manrope z plików motywu.

**Wykorzystane technologie i zasoby:**

- **WordPress** – GPLv2 lub nowsza.
- **Motyw Twenty Twenty-Five** – GPLv2 lub nowsza.
- **Font Manrope** – SIL Open Font License 1.1.
- **Akismet Anti-spam** – GPLv2 lub nowsza, wtyczka nieaktywna.
- **Hello Dolly** – GPLv2 lub nowsza, wtyczka nieaktywna.
- **Grafiki oferty i nowe tło Hero** – materiały demonstracyjne wygenerowane przy użyciu OpenAI.

Grafiki wygenerowane przez AI nie przedstawiają rzeczywistych klientów. Ewidencja obejmuje wymienione zasoby i nie stanowi potwierdzenia licencji wszystkich pozostałych plików multimedialnych

## 5. Kopia zapasowa i dokumentacja

Wykonano końcową kopię zapasową witryny WordPress:

- `database.sql` – baza danych.
- `wp-content.tar.gz` – zdjęcia, motywy i wtyczki.

Do dokumentacji dołączono screenshoty strony w wersji desktopowej i mobilnej oraz wyniki testów Lighthouse i WAVE, w tym materiały przed i po poprawkach.

Pliki konfiguracji projektu znajdują się w repozytorium GitHub `cms-lab`.

## 6. Wykorzystanie AI i podsumowanie

ChatGPT / OpenAI wykorzystano do planowania struktury strony, przygotowania przykładowych treści, generowania grafik, pomocy technicznej oraz redakcji dokumentacji.

Konfigurację WordPressa, budowę witryny i testy wykonano samodzielnie, korzystając ze wskazówek AI. Firma, persony i przykładowe opinie klientów są fikcyjne.


**MP1:** działająca witryna WordPress z podstronami, wpisami, menu, sekcją Hero, ofertą, wspólną stopką, stylami responsywnymi, polityką prywatności i udokumentowanymi testami dostępności.