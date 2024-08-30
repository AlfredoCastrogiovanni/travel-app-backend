# Travelly
Un sito che permette ad un utente registrato **la gestione di diversi viaggi** organizzati e creati da esso.

Il sito permette la creazione di diversi viaggi divisi in giornate che a loro volta possono contenere diverse tappe per permettere all'utente di organizzarsi al meglio.

## Setup del progetto
> [!WARNING]
> Il progetto per funzionare ha bisogno del suo frontend funzionante che puoi trovare [qui](https://github.com/AlfredoCastrogiovanni/travel-app).

- Copia e incolla ``` .env.example ``` e rinominalo ``` .env ``` senza eliminare ``` .env.example ```
- Configura il file ``` .env ``` per permettere la connessione al tuo database
- Esegui il comando ``` composer install ``` per installare tutte le dipendenze

## Angolo tecnico:
Il progetto e' stato implementato con il framework **Vue.js** e **Bootstrap** nel frontend e utilizza **Laravel** per la gestione dei dati all'interno di un database attraverso le api, la registrazione e login vengono effettuati in frontend grazie ai token di **Laravel Sanctum**.