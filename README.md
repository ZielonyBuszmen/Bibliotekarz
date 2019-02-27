# Projekt w fazie rozwojowej!

// todo readme

# Instalacja:
## Przez Xamppa (Apache)
 - Klonujemy projekt do folderu `cos_tam/xampp/htdocs/`. Wówczas pliki projketu zostaną znajdą się w `cos_tam/xampp/htdocs/bibliotekarz`
 - Kopiujemy i zmieniamy nazwę pliku `bibliotekarz/backend/config.ini.example` na `backend/config.ini` (wywalić suffix _'example'_)
 - Tworzymy bazę danych `bazka`
 - W `config.ini` zmieniamy poniższe rzeczy:

```ini
[database]
host = "localhost"  <- zmieniamy na localhost
password = ""  <- zmieniamy hasło na puste

[env]
server_backend_folder = "/bibliotekarz/backend/" <- dodajemy nazwę folderu, do którego została sklonowana aplikacja
```

 - W głównym katalogu wykonujemy komendę `composer install`
 - Aby stworzyć schemę bazy, wpisujemy `composer schema`
 - Aby wypełnić bazę danymi, wpisujemy `composer seed`
 - Uruchamiamy projekt wpisując w przeglądarce `localhost/bibliotekarz`
 - Do backendu dostajemy się wpisując w przeglądarce `localhost/bibliotekarz/backend`
 - Lista routingów jest dostępna w  `localhost/bibliotekarz/backend/routing_list`

## Przez Dockera (nginx)
 - W głównym katalogu wpisujemy komendę `docker-compose up`
 - Kopujemy i zamieniamy nazwę pliku `backend/config.ini.example` na `backend/config.ini` (wywalić suffix _'example'_)
 - W głównym katalogu wykonujemy komendę `bin\composerb.bat install` (pod linuxem `bin/composerb.sh install`)
 - Aby stworzyć schemę bazy, wpisujemy `bin\composerb.bat schema` (pod linuxem `bin/composerb.sh schema`)
 - Aby wypełnić bazę danymi, wpisujemy `bin\composerb.bat seed` (pod linuxem `bin/composerb.sh seed`)
 - Uruchamiamy projekt wpisując w przeglądarce `localhost:8080`
 - Do backendu dostajemy się wpisując w przeglądarce `localhost:8080/backend`
 - Lista routingów jest dostępna w  `localhost:8080/backend/routing_list`
 - phpMyAdmin dostępny jest pod adresem `localhost:8081`
 
 
# Notatki:

Aby wygenerować bazę za pomocą encji wystarczy wywołać skrypt mieszczący się w pliku composer.json `composer schema`

Komenda analizująca wszystkie encje i tworząca na ich podstawie bazę danych: `"vendor/bin/doctrine" orm:schema-tool:update --force --dump-sql`

Wgranie przykładowych danych `php database_creators/creator.php`


Aby odpalić listę dostępnych komend w doctrine, wystarczy wykonać `"vendor/bin/doctrine"` (tak, z cudzysłowami) (działa pod Windowsem)

Czasami trzeba wygenerować "proxies" do encji, robi się to komendą `"vendor/bin/doctrine" orm:generate-proxies`

Lista wszystkich routów dostępna jest pod `/routing_list`, natomiast test konfiguracji folderów pod '`/test_backend`'



# docker

wykonanie komendy w kontenerze:
    docker exec testowy_backend_php_1 composer install

Jeśli nie działa na dockerze poprawne ładowanie danych z routingu, trzeba sprawdzić w config.ini, czy dobra ścieżka jest podana do folderu backend. Np. zamiast /testowy_backend/backend/ powinno być samo /backend/

W przypadku, gdy łączymy się z bazą danych, w config.ini jako host podajemy nazwę naszego service z docker-compose (np bibliotekarz_mysql)

