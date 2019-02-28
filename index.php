<?php

// na razie takie przekierowanie z glownego katalogu do klienta.
// Requesty do API powinny lecieć do /backend

// todo - w przyszłośi można dodać "rozpoznawanie", czy leci request z przeglądarki do /client, czy do /backend jako API
// ale może być to niewykonalne

header('Location: frontend/');