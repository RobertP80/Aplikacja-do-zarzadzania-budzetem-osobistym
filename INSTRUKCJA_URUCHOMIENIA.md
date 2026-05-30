# Techniczna instrukcja wdrożeniowa (CASH PILOT)

Niniejsza instrukcja opisuje proces uruchomienia aplikacji "Budżet Osobisty" w lokalnym środowisku deweloperskim (localhost). 

## 1. Wymagania systemowe
Do uruchomienia aplikacji wymagane jest środowisko serwerowe obsługujące PHP oraz bazę danych MySQL/MariaDB. Zalecane pakiety to:
* **XAMPP** (Windows / Linux / macOS) lub **WAMP** (Windows)
* Serwer WWW: Apache
* PHP w wersji 7.4 lub nowszej (zalecane 8.x)
* Baza danych: MySQL lub MariaDB

## 2. Instalacja i konfiguracja plików
1. Pobierz repozytorium z kodem na swój komputer (np. używając `git clone` lub pobierając jako plik ZIP).
2. Rozpakuj pobrane pliki i przenieś cały folder projektu do katalogu publicznego swojego serwera lokalnego:
   * Dla XAMPP: przenieś folder do `C:\xampp\htdocs\budzet`
   * Dla WAMP: przenieś folder do `C:\wamp64\www\budzet`
3. Uruchom panel kontrolny XAMPP/WAMP i włącz moduły **Apache** oraz **MySQL**.

## 3. Konfiguracja bazy danych
System wymaga zaimportowania przygotowanej struktury bazy danych z pliku `.sql`:
1. Otwórz w przeglądarce narzędzie **phpMyAdmin** (zazwyczaj pod adresem `http://localhost/phpmyadmin`).
2. W menu po lewej stronie kliknij **Nowa**, aby utworzyć nową bazę danych.
3. Wpisz nazwę bazy, np. `budzet_db` i jako metodę porównywania znaków wybierz `utf8mb4_general_ci`, po czym kliknij **Utwórz**.
4. Przejdź do nowo utworzonej bazy, a następnie w górnym menu wybierz zakładkę **Import**.
5. W sekcji "Plik do importu" kliknij "Wybierz plik" i wskaż plik bazy danych dołączony do projektu (np. `BazaDanych28-12-2025.sql`).
6. Zjedź na sam dół strony i kliknij **Importuj**. Struktura tabel i przykładowe dane zostaną wgrane.

## 4. Połączenie aplikacji z bazą danych
Aplikacja musi wiedzieć, z jaką bazą danych ma się połączyć. Otwórz plik `db.php` w edytorze kodu i podmień dane dostępowe na te odpowiadające Twojemu serwerowi lokalnemu. 

Dla standardowej instalacji XAMPP kod w pliku `db.php` powinien wyglądać tak:

```php
<?php
$host = "localhost"; 
$user = "root";       // Domyślny użytkownik w XAMPP
$pass = "";           // Domyślnie brak hasła w XAMPP
$dbname = "budzet_db"; // Nazwa bazy danych utworzona w kroku 3

$conn = new mysqli($host, $user, $pass, $dbname);
$conn->set_charset("utf8");

if($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}
session_start();
?>
