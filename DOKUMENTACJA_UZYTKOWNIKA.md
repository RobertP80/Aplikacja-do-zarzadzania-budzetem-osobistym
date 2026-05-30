# Dokumentacja Użytkownika – Aplikacja "Budżet Osobisty" (CASH PILOT)

Niniejszy dokument zawiera szczegółową instrukcję obsługi webowej aplikacji do zarządzania i kontrolowania domowych finansów.

---

## 1. Logowanie do systemu

Aby uzyskać dostęp do swojego prywatnego panelu finansowego, należy przejść proces autentykacji:
1. Otwórz stronę logowania aplikacji w przeglądarce internetowej.
2. W polu **Login** wprowadź swoją nazwę użytkownika.
3. W polu **Hasło** wprowadź swoje tajne hasło.
4. Kliknij niebieski przycisk **Zaloguj się**.

> 💡 **Rejestracja:** Jeśli nie posiadasz jeszcze konta w systemie, kliknij przycisk **Dodaj nowego użytkownika** znajdujący się na dole karty logowania, aby przejść do formularza rejestracji.

---

## 2. Opis Panelu Głównego (Pulpit)

Po zalogowaniu system przekieruje Cię do głównego pulpitu roboczego. Interfejs jest w pełni responsywny (dostosowany do telefonów i komputerów) i składa się z następujących obszarów:

* **Górny pasek (Navbar):** Wyświetla nazwę systemu oraz biały przycisk **Wyloguj**.
* **Formularz "Dodaj operację" (Lewa strona):** Służy do bieżącego wprowadzania przychodów i wydatków.
* **Karty Podsumowania (Prawa strona, góra):** * **Zielona karta:** Suma wszystkich zarejestrowanych przychodów w złotówkach.
  * **Czerwona karta:** Suma wszystkich wprowadzonych wydatków w złotówkach.
* **Wykres kołowy (Prawa strona, środek):** Interaktywny wykres (Doughnut Chart) obrazujący proporcje między Twoimi przychodami a wydatkami.
* **Tabela "Historia operacji" (Dół strony):** Przejrzysta lista wszystkich Twoich transakcji.

---

## 3. Instrukcja Obsługi Funkcjonalności

### 3.1. Dodawanie nowej transakcji
Aby zarejestrować nowy wydatek lub przychód:
1. Przejdź do formularza **Dodaj operację**.
2. Z listy rozwijanej wybierz **Przychód** (jeśli wpłacasz pieniądze) lub **Wydatek** (jeśli coś kupujesz).
3. W polu **Tytuł / kategoria** wpisz krótką nazwę (np. *Wypłata*, *Zakupy spożywcze*, *Paliwo*).
4. *(Opcjonalnie)* W polu **Opis** dodaj szczegóły transakcji (np. *Premia świąteczna*, *Zakupy w Biedronce*).
5. W polu **Kwota** wprowadź wartość liczbową (używając kropki jako separatora groszy, np. *23.20*).
6. Kliknij niebieski przycisk **Dodaj**.

*Po dodaniu operacji system natychmiast odświeży historię, kafelki sumaryczne oraz wykres.*

### 3.2. Edycja istniejącej transakcji
W przypadku popełnienia błędu podczas wprowadzania danych, możesz go łatwo naprawić:
1. W tabeli **Historia operacji** znajdź wiersz z transakcją, którą chcesz zmienić.
2. W kolumnie **Akcje** kliknij żółty przycisk z ikoną ołówka (**✏️**).
3. Zostaniesz przeniesiony do okna edycji – popraw wybrane pola (Typ, Kategoria, Opis lub Kwota).
4. Kliknij przycisk **Zapisz zmiany**, aby zaktualizować dane i powrócić do pulpitu.

### 3.3. Usuwanie transakcji
Jeśli chcesz całkowicie wykasować operację z historii:
1. W tabeli **Historia operacji** odszukaj właściwy wpis.
2. W kolumnie **Akcje** kliknij czerwony przycisk z ikoną kosza (**🗑**).
3. Na ekranie pojawi się komunikat z pytaniem: *„Czy na pewno usunąć tę operację?”*.
4. Kliknij **OK**. Transakcja zostanie trwale usunięta, a wykres i kafelki automatycznie przeliczą stan budżetu.

---

## 4. Bezpieczne Kończenie Pracy

Po zakończeniu korzystania z aplikacji zawsze pamiętaj o bezpiecznym wylogowaniu. W tym celu kliknij biały przycisk **Wyloguj** w prawym górnym rogu ekranu. System zniszczy Twoją aktywną sesję, zabezpieczając Twoje dane finansowe przed dostępem osób trzecich.
