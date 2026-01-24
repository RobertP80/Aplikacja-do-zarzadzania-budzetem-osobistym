# ANALIZA WYMAGAŃ
## Aplikacja do zarządzania budżetem osobistym "CASH PILOT"

---

## 1. INFORMACJE OGÓLNE

**Tytuł projektu:** Aplikacja do zarządzania budżetem osobistym  
**Akronim projektu:** CP (CASH PILOT)  
**Data utworzenia:** 24.01.2026  
**Wersja dokumentu:** 1.0  
**Autorzy:** Zespół projektowy CASH PILOT

**Prowadzący:** mgr Wojciech Moniuszko

---

## 2. WPROWADZENIE

### 2.1. Cel dokumentu

Niniejszy dokument stanowi szczegółową analizę wymagań dla aplikacji webowej do zarządzania budżetem osobistym "CASH PILOT". Dokument określa wymagania funkcjonalne i niefunkcjonalne, przypadki użycia, ograniczenia oraz założenia projektowe.

### 2.2. Zakres dokumentu

Dokument obejmuje:
- Identyfikację wymagań funkcjonalnych i niefunkcjonalnych
- Szczegółowy opis przypadków użycia
- Określenie ograniczeń systemowych
- Założenia projektowe
- Wymagania dotyczące interfejsu użytkownika
- Wymagania bezpieczeństwa i wydajności

### 2.3. Grupa docelowa

Dokument przeznaczony jest dla:
- Zespołu projektowego (analityków, programistów, testerów)
- Prowadzącego projektu
- Użytkowników końcowych aplikacji

### 2.4. Kontekst biznesowy

Aplikacja CASH PILOT odpowiada na rosnącą potrzebę łatwego kontrolowania wydatków i planowania finansów osobistych. Umożliwia użytkownikom monitorowanie budżetu, analizowanie nawyków zakupowych i podejmowanie bardziej świadomych decyzji finansowych.

---

## 3. WYMAGANIA FUNKCJONALNE

### 3.1. Zarządzanie użytkownikami

**Rejestracja użytkownika**
- System umożliwia rejestrację nowego użytkownika poprzez formularz rejestracyjny
- Wymagane dane: email, hasło (min. 8 znaków), potwierdzenie hasła
- System waliduje unikalność adresu email
- System szyfruje hasło przed zapisem w bazie danych

**Logowanie użytkownika**
- System umożliwia logowanie z użyciem email i hasła
- System weryfikuje poprawność danych logowania
- System utrzymuje sesję użytkownika po zalogowaniu
- System umożliwia wylogowanie użytkownika

**Zarządzanie profilem**
- Użytkownik może edytować swoje dane osobowe (email, hasło)
- Użytkownik może zmienić hasło (wymagane potwierdzenie starego hasła)
- Użytkownik może przeglądać swoje dane profilowe

### 3.2. Zarządzanie transakcjami

**Dodawanie transakcji**
- System umożliwia dodawanie transakcji (wydatków i przychodów)
- Wymagane dane transakcji:
  - Typ transakcji (wydatek/przychód)
  - Kwota (liczba dodatnia, maksymalnie 2 miejsca po przecinku)
  - Data transakcji
  - Kategoria
  - Opis (opcjonalny)
- System automatycznie przypisuje transakcję do zalogowanego użytkownika
- System waliduje poprawność wprowadzonych danych

**Edycja transakcji**
- Użytkownik może edytować swoje transakcje
- System umożliwia zmianę wszystkich pól transakcji
- System zachowuje historię zmian (opcjonalnie)

**Usuwanie transakcji**
- Użytkownik może usuwać swoje transakcje
- System wymaga potwierdzenia przed usunięciem
- Usunięta transakcja jest trwale usuwana z bazy danych

**Przeglądanie transakcji**
- System wyświetla listę transakcji użytkownika
- System umożliwia filtrowanie transakcji według:
  - Typu (wydatek/przychód)
  - Kategorii
  - Zakresu dat (od-do)
  - Kwoty (min-max)
- System umożliwia sortowanie transakcji (data, kwota, kategoria)
- System wyświetla transakcje w formie paginacji (np. 20 transakcji na stronę)

### 3.3. Zarządzanie kategoriami

**Przeglądanie kategorii**
- System wyświetla listę dostępnych kategorii transakcji
- Kategorie są podzielone na kategorie wydatków i przychodów
- System wyświetla domyślne kategorie (np. Jedzenie, Transport, Rozrywka, Wynagrodzenie)

**Dodawanie kategorii**
- Użytkownik może dodawać własne kategorie
- Wymagane dane: nazwa kategorii, typ (wydatek/przychód), ikona (opcjonalnie)
- System waliduje unikalność nazwy kategorii dla danego użytkownika

**Edycja kategorii**
- Użytkownik może edytować swoje własne kategorie
- Użytkownik nie może edytować kategorii domyślnych
- System umożliwia zmianę nazwy i ikony kategorii

**Usuwanie kategorii**
- Użytkownik może usuwać swoje własne kategorie
- System nie pozwala na usunięcie kategorii, do których przypisane są transakcje
- System wymaga potwierdzenia przed usunięciem

### 3.4. Zarządzanie budżetem

**Ustalanie budżetu miesięcznego**
- Użytkownik może ustawić budżet miesięczny dla wybranej kategorii lub ogólny budżet
- Wymagane dane: kwota budżetu, miesiąc, kategoria (opcjonalnie)
- System umożliwia ustawienie budżetu z wyprzedzeniem (na kilka miesięcy)

**Monitorowanie budżetu**
- System automatycznie oblicza wykorzystanie budżetu na podstawie transakcji
- System wyświetla procent wykorzystania budżetu
- System wyświetla pozostałą kwotę budżetu
- System wizualizuje wykorzystanie budżetu (pasek postępu, kolory)

**Powiadomienia o przekroczeniu budżetu**
- System generuje powiadomienia, gdy budżet zostanie przekroczony
- System umożliwia ustawienie progu ostrzeżenia (np. 80% wykorzystania)
- Powiadomienia wyświetlane są w interfejsie użytkownika

### 3.5. Cele oszczędnościowe

**Tworzenie celów oszczędnościowych**
- Użytkownik może utworzyć cel oszczędnościowy
- Wymagane dane: nazwa celu, docelowa kwota, termin realizacji, opis (opcjonalny)
- System umożliwia przypisanie transakcji do celu oszczędnościowego

**Monitorowanie celów oszczędnościowych**
- System automatycznie oblicza postęp realizacji celu
- System wyświetla procent ukończenia celu
- System wyświetla pozostałą kwotę do osiągnięcia celu
- System wizualizuje postęp (pasek postępu)

**Zarządzanie celami**
- Użytkownik może edytować swoje cele oszczędnościowe
- Użytkownik może usuwać cele oszczędnościowe
- System wyświetla listę wszystkich celów użytkownika

### 3.6. Analiza i raporty

**Statystyki podstawowe**
- System wyświetla podstawowe statystyki:
  - Suma przychodów w wybranym okresie
  - Suma wydatków w wybranym okresie
  - Saldo (przychody - wydatki)
  - Liczba transakcji
- Statystyki dostępne dla różnych okresów (dzień, tydzień, miesiąc, rok, zakres dat)

**Wykresy wydatków**
- System generuje wykresy wydatków:
  - Wykres liniowy wydatków w czasie (miesięczny, roczny)
  - Wykres kołowy wydatków według kategorii
  - Wykres słupkowy porównujący miesiące
- System umożliwia wybór okresu dla wykresów

**Wykresy przychodów**
- System generuje wykresy przychodów:
  - Wykres liniowy przychodów w czasie
  - Wykres kołowy przychodów według kategorii
- System umożliwia wybór okresu dla wykresów

**Analiza kategorii**
- System wyświetla procentowy udział każdej kategorii w wydatkach/przychodach
- System wyświetla ranking kategorii według kwoty
- System umożliwia szczegółową analizę wybranej kategorii

**Raporty PDF**
- System umożliwia generowanie raportów finansowych w formacie PDF
- Raport zawiera: statystyki, wykresy, listę transakcji
- Użytkownik może wybrać zakres dat dla raportu

### 3.7. Powiadomienia i alerty

**Zarządzanie powiadomieniami**
- Użytkownik może włączać/wyłączać powiadomienia
- Użytkownik może ustawić próg ostrzeżenia dla budżetu (np. 80%, 90%)
- System wyświetla powiadomienia w interfejsie użytkownika

**Typy powiadomień**
- Powiadomienie o przekroczeniu budżetu
- Powiadomienie o osiągnięciu progu ostrzeżenia budżetu
- Powiadomienie o osiągnięciu celu oszczędnościowego
- Powiadomienia informacyjne (np. brak transakcji przez X dni)

---

## 4. WYMAGANIA NIEFUNKCJONALNE

### 4.1. Wydajność

**Czas odpowiedzi**
- Czas odpowiedzi systemu na żądanie użytkownika nie powinien przekraczać 3 sekund
- Operacje dodawania/edycji transakcji powinny być wykonywane w czasie < 1 sekundy
- Generowanie wykresów i raportów powinno być wykonywane w czasie < 5 sekund

**Obsługa obciążenia**
- System powinien obsługiwać minimum 50 jednoczesnych użytkowników
- System powinien obsługiwać minimum 10 000 transakcji na użytkownika

**Optymalizacja zapytań**
- Zapytania do bazy danych powinny być zoptymalizowane (indeksy, odpowiednie zapytania SQL)
- System powinien wykorzystywać cache dla często używanych danych (np. statystyki)

### 4.2. Niezawodność i dostępność

**Dostępność systemu**
- System powinien być dostępny przez 99% czasu (dla środowiska produkcyjnego)
- System powinien automatycznie zapisywać dane po każdej transakcji
- System nie powinien tracić danych w przypadku awarii

**Mechanizm backupu**
- System powinien umożliwiać regularne kopie zapasowe bazy danych
- Kopie zapasowe powinny być przechowywane w bezpiecznym miejscu
- System powinien umożliwiać przywrócenie danych z kopii zapasowej

**Obsługa błędów**
- System powinien obsługiwać błędy w sposób przyjazny dla użytkownika
- System powinien logować błędy do pliku logów
- System powinien wyświetlać komunikaty błędów w języku polskim

### 4.3. Bezpieczeństwo

**Autentykacja i autoryzacja**
- System powinien wymagać logowania przed dostępem do funkcji
- Hasła powinny być przechowywane w formie zahashowanej (np. bcrypt)
- System powinien implementować mechanizm sesji z tokenami bezpieczeństwa
- Sesja powinna wygasać po okresie nieaktywności (np. 30 minut)

**Ochrona danych**
- System powinien chronić dane użytkowników przed nieautoryzowanym dostępem
- System powinien walidować wszystkie dane wejściowe (ochrona przed SQL injection, XSS)
- System powinien używać HTTPS w środowisku produkcyjnym
- System powinien implementować CSRF protection

**Role użytkowników**
- System powinien wspierać role: użytkownik, administrator
- Administrator ma dostęp do zarządzania użytkownikami i systemem
- Zwykły użytkownik ma dostęp tylko do swoich danych

### 4.4. Użyteczność (Usability)

**Interfejs użytkownika**
- Interfejs powinien być intuicyjny i łatwy w użyciu
- Interfejs powinien być responsywny (dostosowany do urządzeń mobilnych)
- Interfejs powinien być dostępny w języku polskim
- Interfejs powinien być zgodny z zasadami dostępności (WCAG 2.1 poziom AA)

**Nawigacja**
- Nawigacja powinna być przejrzysta i logiczna
- System powinien posiadać menu główne z dostępem do wszystkich funkcji
- System powinien wyświetlać breadcrumbs (ścieżkę nawigacji)
- System powinien posiadać wyszukiwarkę transakcji

**Komunikaty**
- Komunikaty systemowe powinny być jasne i zrozumiałe
- System powinien wyświetlać komunikaty sukcesu po wykonaniu operacji
- System powinien wyświetlać komunikaty błędów z sugestiami rozwiązania

### 4.5. Kompatybilność

**Przeglądarki**
- System powinien działać w przeglądarkach: Chrome (najnowsze 2 wersje), Firefox (najnowsze 2 wersje), Edge (najnowsze 2 wersje), Safari (najnowsze 2 wersje)

**Urządzenia**
- System powinien być responsywny i działać na:
  - Urządzeniach mobilnych (smartfony, tablety)
  - Urządzeniach desktopowych
  - Różnych rozdzielczościach ekranu (od 320px do 4K)

### 4.6. Utrzymanie i rozszerzalność

**Kod źródłowy**
- Kod powinien być czytelny i dobrze udokumentowany
- Kod powinien być zgodny z najlepszymi praktykami programowania
- Kod powinien być zorganizowany w moduły/logiczne struktury

**Rozszerzalność**
- System powinien być zaprojektowany w sposób umożliwiający łatwe dodawanie nowych funkcji
- System powinien wykorzystywać wzorce projektowe
- System powinien być zgodny z zasadami SOLID

---

## 5. PRZYPADKI UŻYCIA

### 5.1. Aktorzy systemu

**Aktor główny:**
- **Użytkownik** - osoba korzystająca z aplikacji do zarządzania budżetem osobistym

**Aktorzy pomocniczy:**
- **Administrator** - osoba zarządzająca systemem (opcjonalnie)

### 5.2. Diagram przypadków użycia

```
┌─────────────────────────────────────────────────────────────┐
│                    CASH PILOT - Przypadki użycia            │
└─────────────────────────────────────────────────────────────┘

                    ┌──────────┐
                    │ Użytkownik│
                    └─────┬────┘
                          │
        ┌─────────────────┼─────────────────┐
        │                 │                 │
        ▼                 ▼                 ▼
   ┌─────────┐      ┌──────────┐     ┌──────────┐
   │Rejestracja│     │ Logowanie │    │ Zarządzanie│
   │           │     │           │    │ profilem  │
   └─────────┘      └──────────┘     └──────────┘
        │                 │                 │
        └─────────────────┼─────────────────┘
                          │
        ┌─────────────────┼─────────────────┐
        │                 │                 │
        ▼                 ▼                 ▼
   ┌────────────┐   ┌────────────┐   ┌────────────┐
   │Dodawanie   │   │Edycja      │   │Usuwanie    │
   │transakcji  │   │transakcji  │   │transakcji  │
   └────────────┘   └────────────┘   └────────────┘
        │                 │                 │
        └─────────────────┼─────────────────┘
                          │
        ┌─────────────────┼─────────────────┐
        │                 │                 │
        ▼                 ▼                 ▼
   ┌────────────┐   ┌────────────┐   ┌────────────┐
   │Przeglądanie│   │Filtrowanie │   │Zarządzanie │
   │transakcji  │   │transakcji  │   │kategoriami │
   └────────────┘   └────────────┘   └────────────┘
        │                 │                 │
        └─────────────────┼─────────────────┘
                          │
        ┌─────────────────┼─────────────────┐
        │                 │                 │
        ▼                 ▼                 ▼
   ┌────────────┐   ┌────────────┐   ┌────────────┐
   │Ustalanie   │   │Monitorowanie│   │Cele        │
   │budżetu     │   │budżetu     │   │oszczędności│
   └────────────┘   └────────────┘   └────────────┘
        │                 │                 │
        └─────────────────┼─────────────────┘
                          │
        ┌─────────────────┼─────────────────┐
        │                 │                 │
        ▼                 ▼                 ▼
   ┌────────────┐   ┌────────────┐   ┌────────────┐
   │Przeglądanie│   │Generowanie│   │Zarządzanie │
   │statystyk   │   │wykresów  │   │powiadomieniami│
   └────────────┘   └────────────┘   └────────────┘
        │                 │                 │
        └─────────────────┼─────────────────┘
                          │
                          ▼
                   ┌────────────┐
                   │Generowanie │
                   │raportów PDF│
                   └────────────┘
```

### 5.3. Szczegółowe opisy przypadków użycia

#### Rejestracja użytkownika

**Aktor:** Użytkownik (niezalogowany)

**Warunki wstępne:** Użytkownik nie posiada konta w systemie

**Scenariusz główny:**
1. Użytkownik otwiera stronę rejestracji
2. Użytkownik wprowadza email
3. Użytkownik wprowadza hasło (min. 8 znaków)
4. Użytkownik potwierdza hasło
5. Użytkownik klika przycisk "Zarejestruj się"
6. System waliduje dane
7. System sprawdza, czy email nie jest już zarejestrowany
8. System tworzy nowe konto użytkownika
9. System szyfruje hasło
10. System zapisuje dane w bazie danych
11. System wyświetla komunikat o pomyślnej rejestracji
12. System przekierowuje użytkownika do strony logowania

**Scenariusze alternatywne:**

*3a. Hasło jest za krótkie:*
- System wyświetla komunikat błędu
- Użytkownik poprawia hasło
- Powrót do kroku 3

*7a. Email jest już zarejestrowany:*
- System wyświetla komunikat o istniejącym koncie
- Użytkownik wprowadza inny email
- Powrót do kroku 2

**Warunki końcowe:** Użytkownik posiada konto w systemie

---

#### Logowanie użytkownika

**Aktor:** Użytkownik

**Warunki wstępne:** Użytkownik posiada konto w systemie

**Scenariusz główny:**
1. Użytkownik otwiera stronę logowania
2. Użytkownik wprowadza email
3. Użytkownik wprowadza hasło
4. Użytkownik klika przycisk "Zaloguj się"
5. System weryfikuje dane logowania
6. System tworzy sesję użytkownika
7. System przekierowuje użytkownika do strony głównej

**Scenariusze alternatywne:**

*5a. Nieprawidłowe dane logowania:*
- System wyświetla komunikat błędu
- Użytkownik poprawia dane
- Powrót do kroku 2

**Warunki końcowe:** Użytkownik jest zalogowany do systemu

---

#### Dodawanie transakcji

**Aktor:** Użytkownik (zalogowany)

**Warunki wstępne:** Użytkownik jest zalogowany

**Scenariusz główny:**
1. Użytkownik otwiera formularz dodawania transakcji
2. Użytkownik wybiera typ transakcji (wydatek/przychód)
3. Użytkownik wprowadza kwotę
4. Użytkownik wybiera datę transakcji
5. Użytkownik wybiera kategorię z listy
6. Użytkownik wprowadza opis (opcjonalnie)
7. Użytkownik klika przycisk "Dodaj transakcję"
8. System waliduje dane
9. System przypisuje transakcję do użytkownika
10. System zapisuje transakcję w bazie danych
11. System aktualizuje statystyki użytkownika
12. System wyświetla komunikat o pomyślnym dodaniu transakcji
13. System przekierowuje użytkownika do listy transakcji

**Scenariusze alternatywne:**

*3a. Nieprawidłowa kwota (ujemna lub zero):*
- System wyświetla komunikat błędu
- Użytkownik poprawia kwotę
- Powrót do kroku 3

*8a. Brak wymaganych danych:*
- System wyświetla komunikaty błędów dla brakujących pól
- Użytkownik uzupełnia dane
- Powrót do kroku 2

**Warunki końcowe:** Transakcja została dodana do systemu

---

#### Przeglądanie statystyk

**Aktor:** Użytkownik (zalogowany)

**Warunki wstępne:** Użytkownik jest zalogowany

**Scenariusz główny:**
1. Użytkownik otwiera stronę ze statystykami
2. Użytkownik wybiera okres (dzień, tydzień, miesiąc, rok, zakres dat)
3. System pobiera transakcje użytkownika z wybranego okresu
4. System oblicza statystyki:
   - Suma przychodów
   - Suma wydatków
   - Saldo
   - Liczba transakcji
5. System wyświetla statystyki w formie liczb i wykresów
6. Użytkownik może zmienić okres i zobaczyć zaktualizowane statystyki

**Warunki końcowe:** Użytkownik widzi swoje statystyki finansowe

---

#### Ustalanie budżetu miesięcznego

**Aktor:** Użytkownik (zalogowany)

**Warunki wstępne:** Użytkownik jest zalogowany

**Scenariusz główny:**
1. Użytkownik otwiera formularz ustawiania budżetu
2. Użytkownik wybiera miesiąc
3. Użytkownik wybiera kategorię (lub pozostawia puste dla budżetu ogólnego)
4. Użytkownik wprowadza kwotę budżetu
5. Użytkownik klika przycisk "Zapisz budżet"
6. System waliduje dane
7. System zapisuje budżet w bazie danych
8. System wyświetla komunikat o pomyślnym zapisaniu budżetu
9. System aktualizuje widok monitorowania budżetu

**Scenariusze alternatywne:**

*4a. Nieprawidłowa kwota (ujemna lub zero):*
- System wyświetla komunikat błędu
- Użytkownik poprawia kwotę
- Powrót do kroku 4

**Warunki końcowe:** Budżet został zapisany w systemie

---

#### Generowanie wykresów

**Aktor:** Użytkownik (zalogowany)

**Warunki wstępne:** Użytkownik jest zalogowany i posiada transakcje

**Scenariusz główny:**
1. Użytkownik otwiera stronę z wykresami
2. Użytkownik wybiera typ wykresu (liniowy, kołowy, słupkowy)
3. Użytkownik wybiera okres
4. Użytkownik wybiera typ danych (wydatki/przychody)
5. System pobiera dane transakcji z wybranego okresu
6. System generuje wykres na podstawie danych
7. System wyświetla wykres użytkownikowi
8. Użytkownik może zmienić parametry i zobaczyć zaktualizowany wykres

**Warunki końcowe:** Użytkownik widzi wygenerowany wykres

---

## 6. OGRANICZENIA SYSTEMOWE

### 6.1. Ograniczenia techniczne

**Platforma**
- Aplikacja działa jako aplikacja webowa (nie aplikacja mobilna natywna)
- Aplikacja wymaga przeglądarki internetowej z obsługą JavaScript
- Aplikacja wymaga połączenia z internetem do działania

**Baza danych**
- System wykorzystuje SQLite jako bazę danych (dla wersji prototypowej)
- SQLite ma ograniczenia w zakresie obsługi wielu jednoczesnych użytkowników
- Maksymalny rozmiar bazy danych SQLite: 281 TB (teoretycznie)

**Wydajność**
- System nie jest zoptymalizowany dla bardzo dużych ilości danych (> 1 mln transakcji)
- Generowanie raportów dla bardzo długich okresów może być wolne

### 6.2. Ograniczenia funkcjonalne

**Integracje**
- System nie integruje się z bankami (brak automatycznego pobierania transakcji)
- System nie obsługuje wielu walut (tylko PLN)
- System nie obsługuje transakcji cyklicznych (automatyczne powtarzanie)

**Funkcje zaawansowane**
- System nie obsługuje prognozowania finansowego
- System nie obsługuje eksportu do formatów innych niż PDF
- System nie obsługuje importu transakcji z plików (CSV, Excel)

**Wielojęzyczność**
- System dostępny jest tylko w języku polskim
- Brak możliwości zmiany języka interfejsu

### 6.3. Ograniczenia projektowe

**Zakres projektu**
- Projekt jest prototypem edukacyjnym
- Nie wszystkie funkcje mogą być w pełni zaimplementowane w wersji 1.0
- Priorytetem są podstawowe funkcje zarządzania transakcjami i statystyk

**Czas realizacji**
- Projekt ma ograniczony czas realizacji (10 tygodni)
- Niektóre funkcje mogą być uproszczone ze względu na czas

---

## 7. ZAŁOŻENIA PROJEKTOWE

### 7.1. Założenia techniczne

**Środowisko**
- Aplikacja będzie działać w środowisku lokalnym (XAMPP/WAMP/LAMP)
- Aplikacja będzie testowana na systemie Windows i Linux
- Aplikacja będzie wykorzystywać PHP 7.4 lub nowszy

**Technologie**
- Backend: PHP
- Frontend: HTML5, CSS3, JavaScript, Bootstrap
- Baza danych: SQLite
- Biblioteki: Chart.js lub podobna do generowania wykresów

**Bezpieczeństwo**
- Aplikacja będzie działać w środowisku lokalnym (nie produkcyjnym)
- Hasła będą hashowane przy użyciu funkcji password_hash() PHP
- Sesje będą zarządzane przez PHP

### 7.2. Założenia funkcjonalne

**Użytkownicy**
- Aplikacja będzie używana przez pojedynczych użytkowników (nie rodziny/grupy)
- Każdy użytkownik zarządza tylko swoimi danymi
- Użytkownicy mają podstawową znajomość obsługi aplikacji webowych

**Dane**
- Użytkownicy będą ręcznie wprowadzać transakcje
- Transakcje będą wprowadzane regularnie (codziennie lub co kilka dni)
- Użytkownicy będą korzystać z domyślnych kategorii lub dodawać własne

**Użycie**
- Aplikacja będzie używana głównie na urządzeniach mobilnych
- Użytkownicy będą logować się regularnie (kilka razy w tygodniu)
- Użytkownicy będą przeglądać statystyki i wykresy regularnie

### 7.3. Założenia projektowe

**Dokumentacja**
- Dokumentacja będzie tworzona w języku polskim
- Dokumentacja będzie zawierać diagramy UML
- Dokumentacja będzie przechowywana w repozytorium GitHub

**Testowanie**
- Testy będą wykonywane ręcznie przez testera
- Testy będą obejmować podstawowe scenariusze użycia
- Raporty testów będą dokumentowane

---

## 8. WYMAGANIA INTERFEJSU UŻYTKOWNIKA

### 8.1. Wymagania ogólne

**Design**
- Interfejs powinien być nowoczesny i estetyczny
- Interfejs powinien wykorzystywać framework Bootstrap
- Kolorystyka powinna być spójna i profesjonalna
- Interfejs powinien być zgodny z zasadami Material Design lub podobnymi

**Responsywność**
- Interfejs powinien być w pełni responsywny
- Interfejs powinien działać poprawnie na urządzeniach mobilnych (od 320px szerokości)
- Interfejs powinien działać poprawnie na tabletach i desktopach
- Elementy interfejsu powinny być dostosowane do rozmiaru ekranu

**Dostępność**
- Interfejs powinien być dostępny dla użytkowników z niepełnosprawnościami
- Elementy interfejsu powinny mieć odpowiednie etykiety (aria-labels)
- Kontrast kolorów powinien spełniać wymagania WCAG 2.1 poziom AA
- Nawigacja klawiaturą powinna być możliwa

### 8.2. Wymagania szczegółowe

**Strona główna**
- Strona główna powinna wyświetlać:
  - Podsumowanie finansowe (saldo, przychody, wydatki)
  - Ostatnie transakcje (5-10 najnowszych)
  - Wykresy podstawowe (np. wydatki w ostatnim miesiącu)
  - Powiadomienia o budżecie (jeśli są)
- Strona główna powinna mieć menu nawigacyjne

**Formularze**
- Formularze powinny być przejrzyste i łatwe w użyciu
- Formularze powinny mieć walidację po stronie klienta (JavaScript)
- Formularze powinny wyświetlać komunikaty błędów w sposób czytelny
- Pola wymagane powinny być oznaczone (np. gwiazdką)
- Formularze powinny mieć przyciski "Zapisz" i "Anuluj"

**Listy i tabele**
- Listy transakcji powinny być czytelne i uporządkowane
- Tabele powinny mieć możliwość sortowania
- Tabele powinny mieć paginację (jeśli jest dużo danych)
- Listy powinny mieć możliwość filtrowania

**Wykresy**
- Wykresy powinny być czytelne i zrozumiałe
- Wykresy powinny mieć legendy
- Wykresy powinny być interaktywne (np. tooltips przy najechaniu)
- Wykresy powinny być responsywne (dostosowane do rozmiaru ekranu)

**Powiadomienia**
- Powiadomienia powinny być widoczne i czytelne
- Powiadomienia powinny mieć różne typy (sukces, błąd, ostrzeżenie, informacja)
- Powiadomienia powinny automatycznie znikać po określonym czasie (opcjonalnie)
- Powiadomienia powinny być dostępne w centrum powiadomień

---

## 9. WYMAGANIA BEZPIECZEŃSTWA

### 9.1. Autentykacja

**Logowanie**
- System wymaga logowania przed dostępem do funkcji
- Hasła muszą być przechowywane w formie zahashowanej (bcrypt)
- System nie powinien wyświetlać haseł w formie jawnej
- System powinien blokować konto po X nieudanych próbach logowania (opcjonalnie)

**Sesje**
- System powinien używać bezpiecznych sesji (httponly, secure cookies)
- Sesje powinny wygasać po okresie nieaktywności (30 minut)
- System powinien unieważniać sesje po wylogowaniu

### 9.2. Autoryzacja

**Kontrola dostępu**
- Użytkownik może przeglądać i modyfikować tylko swoje dane
- System powinien weryfikować uprawnienia przed każdą operacją
- System powinien blokować dostęp do danych innych użytkowników

**Role**
- System powinien wspierać role: użytkownik, administrator
- Administrator ma dostęp do zarządzania użytkownikami
- Zwykły użytkownik ma dostęp tylko do swoich danych

### 9.3. Ochrona danych

**Walidacja danych**
- System powinien walidować wszystkie dane wejściowe
- System powinien chronić przed SQL injection (prepared statements)
- System powinien chronić przed XSS (escaping danych wyjściowych)
- System powinien chronić przed CSRF (tokens)

**Szyfrowanie**
- Hasła muszą być szyfrowane (hashowane) przed zapisem
- Połączenia powinny być szyfrowane (HTTPS w środowisku produkcyjnym)
- Wrażliwe dane powinny być chronione

---

## 10. WYMAGANIA WYDAJNOŚCIOWE

### 10.1. Czas odpowiedzi

**Operacje podstawowe**
- Dodawanie transakcji: < 1 sekunda
- Edycja transakcji: < 1 sekunda
- Usuwanie transakcji: < 1 sekunda
- Przeglądanie listy transakcji: < 2 sekundy

**Operacje zaawansowane**
- Generowanie wykresów: < 5 sekund
- Generowanie raportów PDF: < 10 sekund
- Przeglądanie statystyk: < 3 sekundy

### 10.2. Obciążenie

**Użytkownicy**
- System powinien obsługiwać minimum 50 jednoczesnych użytkowników
- System powinien obsługiwać minimum 1000 zarejestrowanych użytkowników

**Dane**
- System powinien obsługiwać minimum 10 000 transakcji na użytkownika
- System powinien obsługiwać minimum 100 kategorii na użytkownika

### 10.3. Optymalizacja

**Baza danych**
- Zapytania do bazy danych powinny być zoptymalizowane
- Baza danych powinna mieć odpowiednie indeksy
- Zapytania powinny wykorzystywać prepared statements

**Cache**
- System powinien wykorzystywać cache dla często używanych danych
- Statystyki powinny być cachowane (np. na 5 minut)
- Wykresy powinny być cachowane (np. na 10 minut)

---

## 11. SŁOWNIK POJĘĆ

| Pojęcie | Definicja |
|---------|-----------|
| **Transakcja** | Pojedynczy wydatek lub przychód użytkownika |
| **Wydatek** | Transakcja reprezentująca wypływ środków finansowych |
| **Przychód** | Transakcja reprezentująca wpływ środków finansowych |
| **Kategoria** | Grupa, do której przypisana jest transakcja (np. Jedzenie, Transport) |
| **Budżet** | Zaplanowana kwota wydatków na określony okres (np. miesiąc) |
| **Cel oszczędnościowy** | Zaplanowany cel finansowy z określoną kwotą i terminem |
| **Saldo** | Różnica między przychodami a wydatkami w danym okresie |
| **Statystyki** | Zestawienie danych finansowych (sumy, średnie, procenty) |
| **Wykres** | Wizualizacja danych finansowych w formie graficznej |
| **Raport PDF** | Dokument zawierający statystyki, wykresy i listę transakcji |
| **Powiadomienie** | Komunikat systemowy informujący użytkownika o ważnych zdarzeniach |
| **Sesja** | Stan zalogowania użytkownika w systemie |
| **Autentykacja** | Proces weryfikacji tożsamości użytkownika (logowanie) |
| **Autoryzacja** | Proces sprawdzania uprawnień użytkownika do wykonania operacji |

---

## 12. ZAŁĄCZNIKI

### 12.1. Diagramy UML

W załącznikach powinny znaleźć się:
- Diagram przypadków użycia (Use Case Diagram)
- Diagram klas (Class Diagram)
- Diagram sekwencji (Sequence Diagram) dla kluczowych operacji
- Diagram aktywności (Activity Diagram) dla głównych procesów

### 12.2. Mockupy interfejsu

W załącznikach powinny znaleźć się:
- Mockupy głównych ekranów aplikacji
- Mockupy formularzy
- Mockupy wykresów i statystyk

---

## 13. HISTORIA ZMIAN

| Wersja | Data | Autor | Opis zmian |
|--------|------|-------|------------|
| 1.0 | [Data] | Zespół projektowy | Utworzenie dokumentu analizy wymagań |

---

## 14. AKCEPTACJA DOKUMENTU

| Funkcja | Imię i nazwisko | Data | Podpis |
|---------|----------------|------|--------|
| Kierownik projektu | Robert Przybyła | [Data] | ___________ |
| Analityk systemowy | Arkadiusz Pytka | [Data] | ___________ |
| Prowadzący | mgr Wojciech Moniuszko | [Data] | ___________ |

---

**Koniec dokumentu**

