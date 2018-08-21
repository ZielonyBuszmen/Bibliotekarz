// todo readme

#Instalacja:
- Zamienić nazwę pliku `backend/config.ini.example` na `backend/config.ini` (wywalić suffix _'example'_)
- W głównym katalogu `composer install`


Aby wygenerować bazę za pomocą encji wystarczy wywołać skrypt mieszczący się w pliku composer.json `composer schema`

Aby odpalić listę dostępnych komend w doctrine, wystarczy wykonać `"vendor/bin/doctrine"` (tak, z cudzysłowami) (działa pod Windowsem)

Czasami trzeba wygenerować "proxies" do encji, robi się to komendą `"vendor/bin/doctrine" orm:generate-proxies`