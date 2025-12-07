# Aplikacja-do-zarzadzania-budzetem-osobistym
Mobilna aplikacja pozwalająca analizować wydatki i przychody uzytkownika.
```mermaid
usecaseDiagram
    actor User as U

    (Dodawanie transakcji)        as UC1
    (Edycja i usuwanie transakcji) as UC2
    (Przypisywanie kategorii)     as UC3
    (Ustalanie budżetów)          as UC4
    (Tworzenie celów oszczędnościowych) as UC5
    (Analiza: statystyki i wykresy) as UC6
    (Zarządzanie powiadomieniami) as UC7
    (Edycja profilu i ustawień)   as UC8

    U --> UC1
    U --> UC2
    U --> UC3
    U --> UC4
    U --> UC5
    U --> UC6
    U --> UC7
    U --> UC8
