# php-badwords

## Descrizione:
1. Creare una variabile con un paragrafo di testo a vostra scelta.
2. Stampare a schermo il paragrafo e la sua lunghezza.
3. Una parola da censurare viene passata dall'utente tramite parametro GET.
4. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.



### information
in caso di prima istallazione di mamp può dare errore a causa di php, fare questi passsagi nel terminale zsh di MacOs:

1. vim ~/.zshrc

2. Premi: 'i' per modificare
3. Aggiungere:
    - export PATH=/Applications/MAMP/bin/php/php[versione php corretta]/bin:$PATH
    - [aggiungere al posto delle quadre la versione di php che si utilizza]
4. Premi: 'esc', 
5. scrivi: ':wq', 
6. premi: 'invio'
7. scrivi: 'source ~/.zshrc'