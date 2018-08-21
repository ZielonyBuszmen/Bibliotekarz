// todo readme

#Instalacja:
- Zamienić nazwę pliku `backend/config.ini.example` na `backend/config.ini` (wywalić suffix _'example'_)
- W głównym katalogu `composer install`


Aby wygenerować bazę za pomocą encji wystarczy wywołać skrypt mieszczący się w pliku composer.json `composer schema`

Komenda analizująca wszystkie encje i tworząca na ich podstawie bazę danych: `"vendor/bin/doctrine" orm:schema-tool:update --force --dump-sql`

Wgranie przykładowych danych `php database_creators/creator.php`


Aby odpalić listę dostępnych komend w doctrine, wystarczy wykonać `"vendor/bin/doctrine"` (tak, z cudzysłowami) (działa pod Windowsem)

Czasami trzeba wygenerować "proxies" do encji, robi się to komendą `"vendor/bin/doctrine" orm:generate-proxies`