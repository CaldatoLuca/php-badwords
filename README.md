
# PHP Badwords

Introduzione a PHP.

Creazione di un application che riceve un testo e ne rimuove una parola o lettera, sostituendola con tre asterischi.




## Svolgimento

### Creazione del Form nella pagina principale

Creo nella pagina principale un form con textarea, input text e un button.

Il form invierà i dati tramite metodo GET quindi vado a dare un name ai campi di input, in modo da poterci accedere nella pagina di visualizzazione del risultato (determinata da action del form).

### Visualizzazione del dato 

Nella nuova pagina vado a visualizzare i dati inseriti.

Ottengo il loro valore tramite `$_GET['name']` e lo stampo in pagina tramite la funzione `echo`

### Modifica del dato

Uso la funzione `str_replace(cosa eliminare, con cosa cambiarlo, testo da modificare)` e ottengo anche la lunghezza `strlen(stringa)`

Di seguito la logica dietro il programma.

NB
le variabili si inizializzano con $
usare il ; alla fine
racchiudo php dentro il tag <?php ?>
il tutto è inseribile dentro HTML classico, sarà il server a interpretare il codice

```php
<?php
$text_area = $_GET['testo'];
$bad_word = $_GET['nome'];
$new_text_area = str_replace($bad_word, ' *** ', $text_area);
?>

<?php echo strlen($new_text_area) ?>
```