# Karta projektu

Karta projektu to pierwszy oficjalny dokument projektowy, który opisuje jego podstawowe założenia: dlaczego projekt powstaje, co ma osiągnąć, jakie są ograniczenia, kto za co odpowiada i jak będzie mierzony sukces.

## Struktura karty projektu 

|Sekcja|Co zawiera|Przykładowe treści|
|---------------------|-------------------------------------------------|--------------------------------------|
|1. Tytuł projektu|Nazwa projektu i akronim|„Aplikacja do zarządzania budżetem osobistym” "ABO" |
|2. Cel projektu|Co projekt ma osiągnąć i dlaczego|„Mobilna aplikacja pozwalająca analizować wydatki i przychody użytkownika.”
|3. Uzasadnienie biznesowe / edukacyjne|Dlaczego projekt jest potrzebny|„Projekt „Aplikacja do zarządzania budżetem osobistym” odpowiada na rosnącą potrzebę łatwego kontrolowania wydatków i planowania finansów. Umożliwia użytkownikom monitorowanie budżetu, analizowanie nawyków zakupowych i podejmowanie bardziej świadomych decyzji. Ma również wartość edukacyjną, wspierając rozwój kompetencji finansowych poprzez praktyczne zastosowanie.”|
|4. Zakres projektu|Co wchodzi w zakres i co jest poza zakresem|„Zakres projektu obejmuje stworzenie podstawowej wersji aplikacji do zarządzania budżetem osobistym, wraz z funkcjami dodawania transakcji, ich kategoryzacji oraz prezentacji prostych statystyk. Poza zakresem znajdują się integracje z bankami, prognozowanie finansowe oraz rozszerzone wersje wieloplatformowe.”|
|5. Główne wymagania|Wstępna lista funkcjonalności|„Rejestracja i logowanie, zarządzanie transakcjami, wykresy miesięcznych wydatków, alerty limitów budżetu.”|
|6. Zespół projektowy i role|Lista członków i ich funkcji|„Kierownik – R. Przybyła, Analityk – A. Pytka, Programista – A. Pytka, Tester – U. Sacha.”|
|7. Zasoby i narzędzia|Technologie, środowisko, repozytorium, narzędzia komunikacji|„php, html, java script, bootstrap.”|
|8. Harmonogram wstępny|Etapy realizacji projektu|„Analiza (1–2 tydz.), Projekt (3–4), Implementacja (5–7), Testy (8), Prezentacja (9–10).”|
|9. Ryzyka i działania zapobiegawcze|Potencjalne zagrożenia i sposoby ich ograniczenia|„Brak doświadczenia → szkolenie; opóźnienia → cotygodniowe spotkania.”|
|10. Oczekiwane rezultaty (produkty projektu)|Co powstanie na koniec|„Działający prototyp aplikacji + pełna dokumentacja projektowa, diagramy UML.”|
|11. Kryteria sukcesu|Jak zostanie oceniony sukces projektu|„Aplikacja działa w przeglądarce, dokumentacja zawiera diagramy UML.”|
|12. Akceptacja projektu|Podpisy|„Zatwierdza: kierownik projektu.”|


## KARTA PROJEKTU - przykład
1. Informacje ogólne

Tytuł projektu:
„Aplikacja do zarządzania budżetem osobistym”

Akronim projektu:
ABO

Data utworzenia: 16.11.2025
Wersja dokumentu: 1.0
Zespół projektowy:

Imię i nazwisko|Rola w projekcie|Zakres odpowiedzialności
----------------|------------------------------------------------|----------------------------------------------
Robert Przybyła|Kierownik projektu|Planowanie, koordynacja, raportowanie postępów, kontakt z prowadzącym, prezentacja końcowa
Arkadiusz Pytka|Analityk systemowy|Analiza wymagań, tworzenie przypadków użycia, diagramów UML
Arkadiusz Pytka|Programista|Implementacja backendu (Django), integracja z bazą danych
Urszula Sacha|Tester|Opracowanie scenariuszy testowych, testy funkcjonalne i akceptacyjne
Urszula Sacha|Dokumentalista|Redakcja dokumentacji projektowej, raporty

Prowadzący: mgr Wojciech Moniuszko
Jednostka dydaktyczna: ??

2. Cel projektu

Celem projektu ABO jest stworzenie webowej aplikacji umożliwiającej użytkownikom:

-monitorowanie wydatków i przychodów,

-planowanie miesięcznych budżetów,

-analizowanie statystyk finansowych,

-kategoryzację transakcji,

-otrzymywanie powiadomień o przekroczeniu limitów budżetowych.

Aplikacja ma być nowoczesnym narzędziem wspierającym zarządzanie finansami osobistymi i edukację finansową.

3. Uzasadnienie projektu

Wiele osób nie kontroluje regularnie swoich wydatków, co prowadzi do:

-braku świadomości finansowej,

-przekraczania comiesięcznych budżetów,

-trudności w planowaniu oszczędności,

-chaosu w zapisywaniu paragonów lub transakcji.

Projekt zapewnia:

-centralizację informacji finansowych w jednym miejscu,

-przejrzyste wykresy i statystyki,

-automatyzację analizy wydatków.

Aplikacja pozwoli użytkownikom efektywnie zarządzać finansami i podejmować świadome decyzje.

4. Zakres projektu

W zakresie projektu:

-Określenie wymagań funkcjonalnych i niefunkcjonalnych.

-Zaprojektowanie systemu (UML: Use Case, Activity, Class, Sequence).

-Implementacja aplikacji webowej w Django + Bootstrap.

-Stworzenie relacyjnej bazy danych PostgreSQL.

-Generowanie wykresów (np. miesięczne wydatki).

-Opracowanie dokumentacji projektowej i technicznej.

-Testy funkcjonalne i przygotowanie prezentacji.

Poza zakresem projektu:

-Mobilna aplikacja natywna.

-Funkcje automatycznego pobierania historii transakcji.

5. Wymagania 

Typ | Opis
---------------------------|-----------------------------------------------------------------------------------
Funkcjonalne|Dodawanie/edycja/usuwanie transakcji, kategorie wydatków, budżety miesięczne, wykresy, rejestracja/logowanie, raporty PDF.
Niefunkcjonalne|Czas odpowiedzi ≤ 3 sekundy, dostępność 99%, responsywność interfejsu.
Interfejsowe|Interfejs webowy HTML5/CSS3/Bootstrap.
Bezpieczeństwo|Logowanie z szyfrowaniem haseł (SHA256), role (użytkownik/admin), walidacja danych.

6. Zespół projektowy i role

Rola|Osoba|Odpowiedzialność
--------------|-------------------------|-----------------------------------------------------------------------
Kierownik projektu|Robert Przybyła|Harmonogram, raporty, koordynacja
Analityk|Arkadiusz Pytka|Wymagania, diagramy UML
Programista|Arkadiusz Pytka|Backend, baza danych
Tester|Urszula Sacha|Testy, raporty błędów
Dokumentalista|Urszula Sacha|Dokumentacja, raporty, prezentacja

7. Zasoby i narzędzia

Kategoria|Narzędzie / Technologia|Cel zastosowania
-----------------|-----------------------------------|----------------------------------------------------------
Zarządzanie projektem|Jira, Trello|Harmonogram, zadania
Repozytorium|GitHub|Kontrola wersji
Analiza i projektowanie|Visual Paradigm, Miro|Diagramy, procesy
Programowanie|Python (Django), HTML/CSS/Bootstrap|Tworzenie aplikacji
Baza danych|PostgreSQL|Dane transakcji i budżetów
Dokumentacja|Word, Overleaf|Dokumentacja techniczna 
Komunikacja|Teams, Discord|Spotkania i koordynacja 

8. Harmonogram realizacji (10 spotkań)

Etap|Zakres|Czas realizacji|Rezultat
---|----------------------------------------------------|----------------|--------------------------------------
1|Tworzenie zespołów, wybór tematu, karta projektu|Tydzień 1|Karta projektu, struktura zespołu
2|Analiza wymagań|Tydzień 2|Dokument wymagań
3|Projekt systemu – UML|Tydzień 3–4|Diagramy UML
4|Konfiguracja środowiska|Tydzień 4|Repozytorium, narzędzia
5|Dokumentacja projektowa (I etap)|Tydzień 5|Projekt dokumentu
6|Implementacja prototypu (I etap)|Tydzień 6–7|Pierwsza wersja aplikacji
7|Testowanie i poprawki|Tydzień 8|Raport testów
8|Dokumentacja końcowa i prezentacja|Tydzień 9–10|Prezentacja, protokół odbioru

9. Analiza ryzyka

Nr|Ryzyko|Prawdopodobieństwo|Skutek|Działanie zapobiegawcze
--|---------------------------|-----------|-----------------------------------|---------------------------------
1|Opóźnienia w pracy zespołu|Średnie|Wysoki|Spotkania tygodniowe, śledzenie postępów w Jira
2|Brak doświadczenia w Django|Wysokie|Średni|Mini-szkolenie i podział modułów według trudności
3|Konflikty w zespole|Niskie|Średni|Jasny podział ról, komunikacja na Discord
4|Utrata danych|Niskie|Wysoki|Regularne kopie w GitHub
5|Niedostarczenie dokumentacji|Niskie|Wysoki|Wczesne rozpoczęcie redakcji przez dokumentalistę

10. Kryteria sukcesu projektu

- Wszystkie wymagania funkcjonalne zostały zaimplementowane.
- Aplikacja uruchamia się lokalnie i działa poprawnie.
- Dokumentacja zawiera pełny zestaw diagramów UML.
- Testy akceptacyjne zakończone wynikiem pozytywnym.
- Zespół zrealizował projekt w wyznaczonym czasie.
- Projekt został pozytywnie oceniony przez prowadzącego.

11. Rezultaty projektu

- Prototyp aplikacji webowej (SmartRoom).
- Dokumentacja projektowa (wymagania, UML, testy).
- Dokumentacja techniczna (instrukcja uruchomienia).
- Prezentacja zespołowa (PowerPoint / PDF).
- Raport końcowy i protokół zdawczo-odbiorczy.

12. Akceptacja projektu

Funkcja|Imię i nazwisko|Data|Podpis
------------|-------------------------------|--------------|----------------------------------|
Kierownik projektu|Anna Nowak|17.10.2025|___________
Prowadzący|mgr Wojciech Moniuszko|17.10.2025|___________

## Uwagi końcowe:

- Dokument powinien być przechowywany w repozytorium projektu.
- Aktualizacja wersji dokumentu wymaga zgody kierownika projektu i prowadzącego.
- Każdy członek zespołu ma obowiązek zapoznać się z treścią karty i ją zaakceptować.































