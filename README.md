# CASH PILOT - Aplikacja do zarządzania budżetem osobistym

Aplikacja webowa stworzona w ramach przedmiotu **Zaawansowany projekt zespołowy cz. 2**. System umożliwia użytkownikom świadome i efektywne zarządzanie finansami osobistymi poprzez monitorowanie przychodów i wydatków, kategoryzację transakcji oraz wizualizację danych w postaci interaktywnych wykresów.

---

## 🚀 Główne funkcjonalności

* **Autentykacja i autoryzacja:** Bezpieczny system logowania użytkowników.
* **Zarządzanie transakcjami (CRUD):** Dodawanie, przeglądanie, edytowanie oraz usuwanie operacji finansowych (przychodów i wydatków).
* **Bieżące podsumowania finansowe:** Automatyczne obliczanie sumy przychodów, wydatków oraz aktualnego salda.
* **Interaktywne wykresy:** Wizualizacja proporcji wydatków i przychodów za pomocą dynamicznego wykresu kołowego (Doughnut Chart) przy użyciu biblioteki Chart.js.
* **Responsywny interfejs (UI):** Wygląd aplikacji w pełni dostosowany do urządzeń mobilnych oraz desktopowych.
* **Wsparcie dla PWA (Progressive Web App):** Aplikacja z plikiem manifestu oraz wsparciem dla Service Workera.

---

## 🛠️ Stos technologiczny

* **Backend:** PHP
* **Frontend:** HTML5, CSS3, JavaScript (ES6+), Bootstrap v5.3.3
* **Baza danych:** MySQL / MariaDB
* **Biblioteki zewnętrzne:** Chart.js (wykresy), Bootstrap Icons

---

## 📁 Struktura repozytorium

```text
├── budzet_osobisty/               # Folder zawierający kod źródłowy aplikacji
│   ├── auth.php                   # Obsługa procesu logowania i sesji
│   ├── db.php                     # Konfiguracja połączenia z bazą danych
│   ├── delete.php                 # Skrypt usuwania transakcji
│   ├── edit.php                   # Formularz oraz logika edycji transakcji
│   ├── index.php                  # Główny panel aplikacji (formularz, wykres, historia)
│   ├── login.php                  # Widok panelu logowania
│   ├── logout.php                 # Skrypt bezpiecznego wylogowania
│   └── manifest.json              # Plik konfiguracyjny PWA
├── TESTY/                         # Dokumentacja i scenariusze testów aplikacji
├── Analiza_wymagan_prezentacja.md # Analiza wymagań funkcjonalnych i niefunkcjonalnych
├── DOKUMENTACJA_UZYTKOWNIKA.md    # Instrukcja obsługi aplikacji dla użytkownika
├── INSTRUKCJA_URUCHOMIENIA.md     # Techniczny przewodnik wdrożeniowy (localhost)
├── Karta_projektu.md              # Dokument inicjalizacyjny projektu z harmonogramem
└── README.md                      # Niniejszy plik informacyjny

flowchart LR
  U[User / Użytkownik]

  UC1[(Dodawanie transakcji)]
  UC2[(Edycja i usuwanie transakcji)]
  UC3[(Przypisywanie kategorii)]
  UC4[(Ustalanie budżetów)]
  UC5[(Tworzenie celów oszczędnościowych)]
  UC6[(Analiza: statystyki i wykresy)]
  UC7[(Zarządzanie powiadomieniami)]
  UC8[(Edycja profilu i ustawień)]

  U --> UC1
  U --> UC2
  U --> UC3
  U --> UC4
  U --> UC5
  U --> UC6
  U --> UC7
  U --> UC8
