MP1 – Zielony Fotograf (L01–L03)

Repozytorium: https://github.com/rbiegun/cms-lab

1. Firma i odbiorcy
Zielony Fotograf – fikcyjna firma fotograficzna, hasło: „Zdjęcia z życia wzięte”. Oferuje sesje portretowe, rodzinne i dla par.

Persony:
- Anna Kowalska, 29 lat – chce umówić sesję rodzinną, korzysta ze smartfona; potrzebuje czytelnej oferty i zdjęć przykładowych.
- Michał Nowak, 35 lat – szuka sesji portretowej, korzysta z laptopa; zależy mu na opisie usług i wygodnym kontakcie.
Mapa strony: Strona główna, O nas, Oferta (Sesje portretowe, Sesje rodzinne), Portfolio, Aktualności, Kontakt oraz Polityka prywatności.

Wybór CMS: WordPress wybrano ze względu na prostą edycję treści, Gutenberg, obsługę portfolio i możliwość rozbudowy. Daje większą kontrolę nad instalacją niż Wix, jest łatwiejszy w obsłudze niż Drupal, a Shopify koncentruje się głównie na sklepach internetowych.

2. L01 – Przygotowanie środowiska
- Przygotowano WordPress Playground Blueprint: język pl_PL, motyw Twenty Twenty-Five, Contact Form 7, nazwa i opis strony, przyjazne odnośniki.
- Utworzono repozytorium cms-lab i środowisko GitHub Codespaces
- Projekt działa w Docker Compose: WordPress (wordpress:php8.3-apache) i MariaDB (mariadb:11), port 8080
- Hasła bazy są w niepublikowanym .env; katalogi wp-content, backups i restore pozostają poza Git
Uruchomienie: przygotować .env ze zmiennymi DB_PASSWORD i DB_ROOT_PASSWORD, wykonać docker compose up -d i przekierować port 8080 jako Private. Pełne odtworzenie witryny wymaga kopii bazy danych i wp-content.

3. L02 – Treści i Gutenberg
- Utworzono podstrony oraz trzy wpisy w kategoriach Porady fotograficzne i Aktualności studia.
- Strona główna jest statyczna, a Aktualności wyświetlają wpisy.
- Wykorzystano bloki Okładka, Grupa, Kolumny, Nagłówek, Akapit, Przyciski, Cytat.
- Strona główna zawiera Hero z H1 „Zdjęcia z życia wzięte”, przyciskiem „Umów sesję”, ofertę trzech typów sesji i opinie.
- Zbudowano menu z podmenu Oferta, stopkę oraz własny niezsynchronizowany wzorzec „Hero – Zielony Fotograf”, użyty też na stronie Oferta.

4. L03 – Style, dostępność i prywatność
G1 – Style globalne
Ustawiono kolory: #FFFFFF (tło), #1A1A1A (tekst), #245C3A (zieleń marki), #E8F1E7 (jasna zieleń). Dostosowano typografię, odnośniki i przyciski.
G2 – CSS i responsywność
Dodano obrys :focus-visible, skalowanie H1 przez clamp(), odstępy w nawigacji oraz reguły @media dla ekranów do 600 px. Sprawdzono układ przy szerokości około 375 px i obsługę klawiaturą.
G3 – Audyt dostępności
Test	Wynik
Lighthouse Accessibility – strona główna (Mobile)	100/100
Lighthouse Accessibility – Kontakt (Mobile)	100/100
WAVE – strona główna, użytkownik niezalogowany	0 błędów, 0 błędów kontrastu, 2 ostrzeżenia
WAVE AIM Score	10/10
G4 – Prywatność i zasoby
- Utworzono edukacyjną Politykę prywatności z odnośnikiem w stopce.
- W DevTools sprawdzono cookies WordPressa i Codespaces; na analizowanych zrzutach nie wykryto typowych cookies reklamowych ani analitycznych. Nie był to pełny audyt pierwszej wizyty.
- Potwierdzono lokalne ładowanie fontu Manrope z motywu Twenty Twenty-Five.
- Nowe tło Hero i trzy grafiki oferty przygotowano za pomocą OpenAI; nie przedstawiają rzeczywistych klientów.
- Do sprawdzenia przed oddaniem: licencje motywu, fontu i wtyczek, pełny wykaz mediów oraz ewentualne użycie starego obrazu background2-scaled.jpg o nieustalonym źródle.

5. Kopia zapasowa projektu

Wykonano kopię zapasową witryny WordPress obejmującą bazę danych (database.sql) oraz pliki motywów, wtyczek i mediów (wp-content.tar.gz).

Projekt jest przechowywany w repozytorium GitHub cms-lab. Środowisko uruchamiane jest za pomocą Docker Compose.


6. Użycie AI i podsumowanie
ChatGPT / OpenAI wykorzystano do planowania, propozycji treści, wygenerowania ilustracji, pomocy technicznej i redakcji README. Konfigurację, budowę i testy strony wykonano samodzielnie, korzystając ze wskazówek AI. Firma, persony i przykładowe opinie są fikcyjne.

Efekt MP1: działająca witryna WordPress z podstronami, wpisami, menu, ofertą, Hero, stopką, stylami responsywnymi i audytem dostępności.

Przed oddaniem: uzupełnić ewidencję licencji, dołączyć wymagane zrzuty, wykonać końcowy backup i zmienić wcześniej ujawnione hasła środowiska.