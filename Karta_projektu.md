# Karta projektu

Karta projektu to pierwszy oficjalny dokument projektowy, który opisuje jego podstawowe założenia: dlaczego projekt powstaje, co ma osiągnąć, jakie są ograniczenia, kto za co odpowiada i jak będzie mierzony sukces.

## Struktura karty projektu 

|Sekcja|Co zawiera|Przykładowe treści|
|---------------------|-------------------------------------------------|--------------------------------------|
|1. Tytuł projektu|Nazwa projektu i akronim|„Aplikacja do zarządzania budżetem osobistym” "CASH PILOT" |
|2. Cel projektu|Co projekt ma osiągnąć i dlaczego|„Mobilna aplikacja pozwalająca analizować wydatki i przychody użytkownika.”
|3. Uzasadnienie biznesowe / edukacyjne|Dlaczego projekt jest potrzebny|„Projekt „Aplikacja do zarządzania budżetem osobistym” odpowiada na rosnącą potrzebę łatwego kontrolowania wydatków i planowania finansów. Umożliwia użytkownikom monitorowanie budżetu, analizowanie nawyków zakupowych i podejmowanie bardziej świadomych decyzji. Ma również wartość edukacyjną, wspierając rozwój kompetencji finansowych poprzez praktyczne zastosowanie.”|
|4. Zakres projektu|Co wchodzi w zakres i co jest poza zakresem|„Zakres projektu obejmuje stworzenie podstawowej wersji aplikacji do zarządzania budżetem osobistym, wraz z funkcjami dodawania transakcji, ich kategoryzacji oraz prezentacji prostych statystyk. Poza zakresem znajdują się integracje z bankami, prognozowanie finansowe oraz rozszerzone wersje wieloplatformowe.”|
|5. Główne wymagania|Wstępna lista funkcjonalności|„Rejestracja i logowanie, zarządzanie transakcjami, wykresy miesięcznych wydatków, alerty limitów budżetu.”|
|6. Zespół projektowy i role|Lista członków i ich funkcji|„Kierownik – R. Przybyła, Analityk – A. Pytka, Programista – A. Pytka, Tester – U. Sacha.”|
|7. Zasoby i narzędzia|Technologie, środowisko, repozytorium, narzędzia komunikacji|„php, html, java script, bootstrap.”|
|8. Harmonogram wstępny|Etapy realizacji projektu|„Analiza (1–2 tydz.), Projekt (3–4), Implementacja (5–7), Testy (8), Prezentacja (9–10).”|
|9. Ryzyka i działania zapobiegawcze|Potencjalne zagrożenia i sposoby ich ograniczenia|„Brak doświadczenia → szkolenie; opóźnienia → cotygodniowe spotkania.”|
|10. Oczekiwane rezultaty (produkty projektu)|Co powstanie na koniec|„Działający prototyp aplikacji + pełna dokumentacja projektowa.”|
|11. Kryteria sukcesu|Jak zostanie oceniony sukces projektu|„Aplikacja działa w przeglądarce, dokumentacja zawiera diagramy UML.”|
|12. Akceptacja projektu|Podpisy|„Zatwierdza: kierownik projektu.”|


## KARTA PROJEKTU - przykład
1. Informacje ogólne

Tytuł projektu:
„Aplikacja do zarządzania budżetem osobistym”

Akronim projektu:
CP

Data utworzenia: 16.11.2025
Wersja dokumentu: 1.0
Zespół projektowy:

Imię i nazwisko|Rola w projekcie|Zakres odpowiedzialności
----------------|------------------------------------------------|----------------------------------------------
Robert Przybyła|Kierownik projektu|Planowanie, koordynacja, raportowanie postępów, kontakt z prowadzącym, prezentacja końcowa
Arkadiusz Pytka|Analityk systemowy|Analiza wymagań, tworzenie przypadków użycia, diagramów UML
Arkadiusz Pytka|Programista|Implementacja backendu, integracja z bazą danych
Urszula Sacha|Tester|Opracowanie scenariuszy testowych, testy funkcjonalne i akceptacyjne
Urszula Sacha|Dokumentalista|Redakcja dokumentacji projektowej, raporty

Prowadzący: mgr Wojciech Moniuszko
Jednostka dydaktyczna: ??

2. Cel projektu

Celem projektu CASH PILOT jest stworzenie webowej aplikacji umożliwiającej użytkownikom:

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

-Implementacja aplikacji webowej w PHP + Bootstrap.

-Stworzenie relacyjnej bazy danych SQLite.

-Generowanie wykresów (np. miesięczne wydatki).

-Opracowanie dokumentacji projektowej i technicznej.

-Testy funkcjonalne i przygotowanie prezentacji.

Poza zakresem projektu:

-Mobilna aplikacja natywna.

-Funkcje automatycznego pobierania historii transakcji.

5. Wymagania 

Typ | Opis
---------------------------|-----------------------------------------------------------------------------------
Funkcjonalne|Dodawanie/edycja/usuwanie transakcji, kategorie wydatków, budżety miesięczne, wykresy, raporty PDF.
Niefunkcjonalne|Czas odpowiedzi ≤ 3 sekundy, dostępność 99%, responsywność interfejsu.
Interfejsowe|Interfejs webowy HTML5/CSS3/Bootstrap.
Bezpieczeństwo|Logowanie z szyfrowaniem haseł, role (użytkownik/admin), walidacja danych.

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
Programowanie|PHP, HTML/CSS/Bootstrap|Tworzenie aplikacji
Baza danych|SQLite|Dane transakcji i budżetów
Dokumentacja|Word, Overleaf - edytor online|Dokumentacja techniczna 
Komunikacja|Teams, Discord|Spotkania i koordynacja 

8. Harmonogram realizacji (10 spotkań)

Etap|Zakres|Czas realizacji|Rezultat
---|----------------------------------------------------|----------------|--------------------------------------
1|Tworzenie zespółu, temat, karta projektu |Tydzień 1|Karta projektu
2|Analiza wymagań|Tydzień 2|Dokument wymagań
3|UML – projekt systemu|Tydzień 3–4|Diagramy UML
4|Konfiguracja środowiska|Tydzień 4|Repozytorium, narzędzia
5|Dokumentacja projektowa (I etap)|Tydzień 5|Struktura dokumentacji
6|Implementacja prototypu (I etap)|Tydzień 6–7|Bazowa wersja aplikacji
7|Testowanie i poprawki|Tydzień 8|Raport testów
8|Dokumentacja końcowa i prezentacja|Tydzień 9–10|Gotowy projekt, prezentacja

9. Analiza ryzyka

Nr|Ryzyko|Prawdopodobieństwo|Skutek|Działanie zapobiegawcze
--|---------------------------|-----------|-----------------------------------|---------------------------------
1|Opóźnienia w pracy zespołu|Średnie|Wysoki|Spotkania tygodniowe, śledzenie postępów w Jira
2|Brak doświadczenia w PHP|Wysokie|Średni|Mini-szkolenie i podział modułów według trudności
3|Konflikty w zespole|Niskie|Średni|Jasny podział ról, komunikacja na Discord
4|Utrata danych|Niskie|Wysoki|Regularne kopie w GitHub
5|Niedostarczenie dokumentacji|Niskie|Wysoki|Wczesne rozpoczęcie redakcji przez dokumentalistę

10. Kryteria sukcesu projektu

-Wszystkie wymagania funkcjonalne zaimplementowane.

-Aplikacja uruchamia się lokalnie i działa poprawnie.

-Użytkownik może dodawać i analizować transakcje.

-Dokumentacja zawiera kompletny zestaw diagramów UML.

-Testy akceptacyjne zakończone pozytywnie.

-Projekt zrealizowany w wyznaczonym terminie.

-Pozytywna ocena prowadzącego.

11. Rezultaty projektu

-Prototyp aplikacji webowej.

-Dokumentacja projektowa (wymagania, UML, testy).

-Dokumentacja techniczna (instrukcja uruchomienia).

-Prezentacja końcowa.

-Raport końcowy i protokół odbioru.

12. Akceptacja projektu

Funkcja|Imię i nazwisko|Data|Podpis
------------|-------------------------------|--------------|----------------------------------|
Kierownik projektu|Robert Przybyła|16.11.2025|___________
Prowadzący|mgr Wojciech Moniuszko|16.11.2025|___________

## Uwagi końcowe:

- Dokument powinien być przechowywany w repozytorium projektu.
- Aktualizacja wersji dokumentu wymaga zgody kierownika projektu i prowadzącego.
- Każdy członek zespołu ma obowiązek zapoznać się z treścią karty i ją zaakceptować.






































