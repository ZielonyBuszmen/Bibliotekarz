# Projekt w fazie rozwojowej!

// todo readme

# Instalacja:
- Zamienić nazwę pliku `backend/config.ini.example` na `backend/config.ini` (wywalić suffix _'example'_)
- W głównym katalogu `composer install`


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

