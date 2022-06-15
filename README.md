## Informacje podstawowe

Aplikacja została wykonana przy użyciu frameworka Laravel.
Do prawidłowego działania wymagana jest baza danych MySQL.

## Przygotowanie bazy danych

-   stwórz bazę danych o nazwie `tmm`
-   uzupełnij nazwę użytkownika bazy danych w pliku .env, pole: "DB_USERNAME"
-   uzupełnij hasło użytkownika bazy danych w pliku .env, pole: "DB_PASSWORD"

## Instalacja projektu

Aby zainstalować projekt przekopiuj pliki do dowolnego folderu.
Następnie uruchom terminal w tym folerze i wykonaj następujące komendy:

```
composer install / composer install --ignore-platform-reqs
npm install
npm run dev
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
```

## Uruchomienie projektu

Aby uruchomić projekt wykonaj następującą komendę:

```
php artisan serve
```

Następnie otwórz dowolną przeglądarkę i przejdź do adresu: `http://127.0.0.1:8000`
Na stronie logowania wpisz następujące dane:

Adres email: `admin@admin`
Hasło: `admin`
