APLIKACJA: Budżet osobisty (PHP + Bootstrap)

FUNKCJE:
- logowanie użytkownika
- analiza wydatków i przychodów
- wykres Chart.js
- pełna responsywność (mobile-first)
- PWA (instalowana jak aplikacja)

BAZA:
CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), password VARCHAR(255));
CREATE TABLE transactions(id INT AUTO_INCREMENT PRIMARY KEY,type ENUM('income','expense'),amount DECIMAL(10,2));
