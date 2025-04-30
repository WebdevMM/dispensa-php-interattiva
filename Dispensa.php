<?php
$sezione = $_GET['sezione'] ?? null;
// Mappa degli argomenti PHP
$argomenti = [
    "intro" => [
        "title" => "01. Introduzione a PHP",
        "contenuto" => function () {
            echo "<h2>Cos'è PHP?</h2>";
            echo "<p><strong>PHP</strong> (acronimo ricorsivo per <em>PHP: Hypertext Preprocessor</em>) è un linguaggio di scripting lato server, open-source, largamente usato per creare siti e applicazioni web dinamiche.</p>";

            echo "<h3>✔ Caratteristiche principali</h3>";
            echo "<ul>
                <li>Viene eseguito sul server (non nel browser)</li>
                <li>Genera HTML, JSON, XML o altri output</li>
                <li>Supporta programmazione procedurale e orientata agli oggetti</li>
                <li>È compatibile con la maggior parte dei database (MySQL, PostgreSQL, SQLite...)</li>
              </ul>";

            echo "<h3>Hello World in PHP</h3>";
            echo "<pre>&lt;?php\necho 'Ciao mondo!';\n?&gt;</pre>";
            echo "<p><code>echo</code> è una struttura del linguaggio usata per stampare a video. Alternativa: <code>print</code>.</p>";

            echo "<h3>Tag PHP</h3>";
            echo "<pre>&lt;?php\n// codice PHP\n?&gt;</pre>";
            echo "<p>I file PHP devono avere estensione <code>.php</code>. Il codice viene delimitato dai tag PHP.</p>";

            echo "<h3>Output HTML generato da PHP</h3>";
            echo "<pre>&lt;?php\necho '&lt;h1&gt;Titolo generato con PHP&lt;/h1&gt;';\n?&gt;</pre>";
            echo "<p>PHP può generare markup HTML che verrà poi interpretato dal browser come una normale pagina web.</p>";
        }
    ],
    "variabili" => [
        "title" => "02. Variabili e Tipi di Dato",
        "contenuto" => function () {
            echo "<h2>Variabili</h2>";
            echo "<p>In PHP, le variabili iniziano sempre con il simbolo <code>$</code> e non richiedono dichiarazione del tipo.</p>";

            echo "<pre>&lt;?php\n\$nome = 'Mario';\n\$eta = 30;\necho \$nome . ' ha ' . \$eta . ' anni';\n?&gt;</pre>";

            echo "<h3>✔ Tipi di dato principali</h3>";
            echo "<ul>
                <li><strong>Stringa</strong> – testo: <code>'ciao'</code></li>
                <li><strong>Intero</strong> – numero: <code>42</code></li>
                <li><strong>Float</strong> – decimali: <code>3.14</code></li>
                <li><strong>Booleano</strong> – vero/falso: <code>true / false</code></li>
                <li><strong>Array</strong> – collezione di valori</li>
                <li><strong>Oggetti</strong> – istanze di classi</li>
              </ul>";

            echo "<h3>Nota importante:</h3>";
            echo "<p>PHP è un linguaggio <strong>debolmente tipizzato</strong>, quindi i tipi possono cambiare dinamicamente.</p>";
        }
    ],
    "operatori" => [
        "title" => "03. Operatori",
        "contenuto" => function () {
            echo "<h2>Operatori Aritmetici</h2>";
            echo "<pre>&lt;?php\n\$a = 10;\n\$b = 3;\necho \$a + \$b; // 13\n?&gt;</pre>";

            echo "<h2>Operatori di Confronto</h2>";
            echo "<pre>&lt;?php\necho (5 == '5'); // true\n?&gt;</pre>";

            echo "<h2>Operatori Logici</h2>";
            echo "<pre>&lt;?php\n\$a = true;\n\$b = false;\necho \$a && \$b; // false\n?&gt;</pre>";

            echo "<p>PHP supporta vari tipi di operatori: aritmetici (+, -, *, /), di confronto (==, !=, ===), e logici (&&, ||, !).</p>";
        }
    ],
    "controlli_condizionali" => [
        "title" => "04. Controlli Condizionali e Loop",
        "contenuto" => function () {
            echo "<h2>Controlli Condizionali in PHP</h2>";

            echo "<h3>If / Else</h3>";
            echo "<pre>&lt;?php\n\$eta = 18;\nif (\$eta >= 18) {\n    echo 'Sei maggiorenne';\n} else {\n    echo 'Sei minorenne';\n}\n?&gt;</pre>";
            echo "<p>La struttura <code>if</code> permette di eseguire un blocco di codice se una condizione è vera. L'else è opzionale e permette di eseguire del codice se la condizione è falsa.</p>";

            echo "<h3>Switch</h3>";
            echo "<pre>&lt;?php\n\$giorno = 'lunedi';\nswitch (\$giorno) {\n    case 'lunedi': echo 'Inizio settimana'; break;\n    case 'venerdi': echo 'Quasi weekend'; break;\n    default: echo 'Giorno qualunque';\n}\n?&gt;</pre>";
            echo "<p>La struttura <code>switch</code> è utile quando si devono confrontare una variabile con molteplici possibili valori. È più efficiente rispetto a più <code>if</code> annidati.</p>";

            echo "<h2>Loop in PHP</h2>";

            echo "<h3>For</h3>";
            echo "<pre>&lt;?php\nfor (\$i = 0; \$i < 5; \$i++) {\n    echo \$i . '&lt;br&gt;';\n}\n?&gt;</pre>";
            echo "<p>Il ciclo <code>for</code> è utilizzato per ripetere un blocco di codice un numero specifico di volte. In questo esempio, il ciclo stampa i numeri da 0 a 4.</p>";

            echo "<h3>While</h3>";
            echo "<pre>&lt;?php\n\$i = 0;\nwhile (\$i < 5) {\n    echo \$i . '&lt;br&gt;';\n    \$i++;\n}\n?&gt;</pre>";
            echo "<p>Il ciclo <code>while</code> esegue un blocco di codice finché la condizione specificata è vera. In questo esempio, i numeri da 0 a 4 sono stampati uno alla volta.</p>";

            echo "<h3>Do While</h3>";
            echo "<pre>&lt;?php\n\$i = 0;\ndo {\n    echo \$i . '&lt;br&gt;';\n    \$i++;\n} while (\$i < 5);\n?&gt;</pre>";
            echo "<p>Il ciclo <code>do while</code> è simile al ciclo <code>while</code>, ma la condizione viene controllata dopo l'esecuzione del ciclo. Quindi, il blocco di codice viene sempre eseguito almeno una volta.</p>";

            echo "<h3>Foreach</h3>";
            echo "<pre>&lt;?php\n\$frutti = ['mela', 'banana', 'arancia'];\nforeach (\$frutti as \$frutto) {\n    echo \$frutto . '&lt;br&gt;';\n}\n?&gt;</pre>";
            echo "<p>Il ciclo <code>foreach</code> è particolarmente utile per iterare su array o oggetti. In questo esempio, il ciclo stampa ciascun frutto nell'array.</p>";

            echo "<p>I loop in PHP permettono di ripetere l'esecuzione di un blocco di codice. Esistono diversi tipi di loop per adattarsi a diverse situazioni.</p>";
        }
    ],
    "funzioni" => [
        "title" => "05. Funzioni",
        "contenuto" => function () {
            echo "<h2>Cos'è una funzione in PHP?</h2>";
            echo "<p>Una <strong>funzione</strong> è un blocco di codice che può essere eseguito quando invocato. In PHP, le funzioni sono utili per raggruppare e riutilizzare il codice, migliorando la leggibilità e la manutenibilità.</p>";

            echo "<h3>✔ Sintassi di una funzione</h3>";
            echo "<pre>&lt;?php\nfunction nomeFunzione() {\n    // codice da eseguire\n}\n?&gt;</pre>";
            echo "<p>Una funzione si definisce con la parola chiave <code>function</code>, seguita dal nome della funzione e da parentesi tonde, eventualmente con parametri. Il codice della funzione è racchiuso tra parentesi graffe <code>{}</code>.</p>";

            echo "<h3>✔ Funzione senza parametri</h3>";
            echo "<pre>&lt;?php\nfunction saluta() {\n    echo 'Ciao, mondo!';\n}\n\nsaluta(); // Ciao, mondo!?\n?&gt;</pre>";
            echo "<p>In questo esempio, la funzione <code>saluta</code> non accetta alcun parametro e stampa semplicemente un messaggio quando viene invocata.</p>";

            echo "<h3>✔ Funzione con parametri</h3>";
            echo "<pre>&lt;?php\nfunction salutaUtente(\$nome) {\n    echo 'Ciao, ' . \$nome;\n}\n\nsalutaUtente('Mario'); // Ciao, Mario\n?&gt;</pre>";
            echo "<p>La funzione <code>salutaUtente</code> accetta un parametro <code>\$nome</code>, che viene usato all'interno della funzione per creare un messaggio personalizzato.</p>";

            echo "<h3>✔ Funzioni con valore di ritorno</h3>";
            echo "<pre>&lt;?php\nfunction somma(\$a, \$b) {\n    return \$a + \$b;\n}\n\n\$risultato = somma(3, 5); // 8\n?&gt;</pre>";
            echo "<p>Una funzione può anche restituire un valore utilizzando la parola chiave <code>return</code>. In questo esempio, la funzione <code>somma</code> restituisce la somma di due numeri.</p>";

            echo "<h3>✔ Funzioni variabili</h3>";
            echo "<pre>&lt;?php\n\$nomeFunzione = 'saluta';\n\$nomeFunzione(); // Ciao, mondo!\n?&gt;</pre>";
            echo "<p>In PHP, è possibile chiamare una funzione utilizzando una variabile che contiene il nome della funzione. Questa tecnica è chiamata <em>funzione variabile</em>.</p>";

            echo "<h3>✔ Funzioni anonime (closure)</h3>";
            echo "<pre>&lt;?php\n\$saluto = function(\$nome) {\n    echo 'Ciao, ' . \$nome;\n};\n\n\$saluto('Anna'); // Ciao, Anna\n?&gt;</pre>";
            echo "<p>Una funzione anonima è una funzione che non ha un nome e viene definita inline. È utile per passare funzioni come argomenti in altre funzioni o per creare callback.</p>";

            echo "<h3>✔ Parametri con valori di default</h3>";
            echo "<pre>&lt;?php\nfunction saluta(\$nome = 'Mondo') {\n    echo 'Ciao, ' . \$nome;\n}\n\nsaluta(); // Ciao, Mondo\nsaluta('Mario'); // Ciao, Mario\n?&gt;</pre>";
            echo "<p>I parametri di una funzione possono avere valori di default, che verranno utilizzati se l'argomento non viene fornito al momento della chiamata.</p>";
        }
    ],
    "array" => [
        "title" => "06. Array e Manipolazioni",
        "contenuto" => function () {
            echo "<h2>Cos'è un Array in PHP?</h2>";
            echo "<p>Un <strong>array</strong> è una struttura dati che permette di memorizzare più valori sotto un unico nome. Può essere indicizzato numericamente o associativo (con chiavi personalizzate).</p>";

            echo "<h3>Array Numerici</h3>";
            echo "<pre>&lt;?php\n\$frutti = ['mela', 'banana', 'arancia'];\necho \$frutti[0]; // mela\n?&gt;</pre>";
            echo "<p>Gli array numerici sono indicizzati automaticamente con numeri interi, partendo da 0. In questo esempio, <code>\$frutti[0]</code> restituirà 'mela'.</p>";

            echo "<h3>Array Associativi</h3>";
            echo "<pre>&lt;?php\n\$utente = ['nome' => 'Mario', 'eta' => 30, 'citta' => 'Roma'];\necho \$utente['nome']; // Mario\n?&gt;</pre>";
            echo "<p>Gli array associativi hanno chiavi personalizzate (stringhe), invece di numeri. In questo esempio, <code>\$utente['nome']</code> restituirà 'Mario'.</p>";

            echo "<h3>Array Multidimensionali</h3>";
            echo "<pre>&lt;?php\n\$utenti = [\n    ['nome' => 'Mario', 'eta' => 30],\n    ['nome' => 'Luigi', 'eta' => 25]\n];\necho \$utenti[0]['nome']; // Mario\n?&gt;</pre>";
            echo "<p>Un array multidimensionale è un array che contiene altri array. In questo esempio, l'array <code>\$utenti[0]</code> contiene un array con le informazioni di Mario.</p>";

            echo "<h3>Manipolazione di Array</h3>";

            echo "<h4>Aggiungere un Elemento</h4>";
            echo "<pre>&lt;?php\narray_push(\$frutti, 'pera');\necho \$frutti[3]; // pera\n?&gt;</pre>";
            echo "<p>La funzione <code>array_push()</code> aggiunge un elemento alla fine di un array.</p>";

            echo "<h4>Rimuovere un Elemento</h4>";
            echo "<pre>&lt;?php\narray_pop(\$frutti);\necho \$frutti[2]; // arancia\n?&gt;</pre>";
            echo "<p>La funzione <code>array_pop()</code> rimuove l'ultimo elemento da un array.</p>";

            echo "<h4>Contare gli Elementi</h4>";
            echo "<pre>&lt;?php\n\$numFrutti = count(\$frutti);\necho \$numFrutti; // 3\n?&gt;</pre>";
            echo "<p>La funzione <code>count()</code> restituisce il numero di elementi in un array.</p>";

            echo "<h4>Verificare l'Esistenza di un Elemento</h4>";
            echo "<pre>&lt;?php\n\$esiste = in_array('banana', \$frutti);\necho \$esiste; // true\n?&gt;</pre>";
            echo "<p>La funzione <code>in_array()</code> verifica se un valore è presente in un array. Restituisce <code>true</code> se il valore è trovato, altrimenti <code>false</code>.</p>";

            echo "<h4>Ordinare un Array</h4>";
            echo "<pre>&lt;?php\nsort(\$frutti);\necho implode(', ', \$frutti); // banana, mela, pera\n?&gt;</pre>";
            echo "<p>La funzione <code>sort()</code> ordina un array in ordine crescente. La funzione <code>implode()</code> unisce gli elementi di un array in una stringa separata da virgole.</p>";

            echo "<h3>Altre Funzioni Utili sugli Array</h3>";
            echo "<ul>
                <li><strong>array_merge()</strong>: Unisce due o più array</li>
                <li><strong>array_slice()</strong>: Estrae una porzione di un array</li>
                <li><strong>array_keys()</strong>: Restituisce tutte le chiavi di un array</li>
                <li><strong>array_values()</strong>: Restituisce tutti i valori di un array</li>
              </ul>";
            echo "<p>Gli array in PHP sono molto potenti e ci sono molte funzioni disponibili per manipolarli in modo efficiente.</p>";
        }
    ],
    "form_sicurezza" => [
        "title" => "07. Form e Sicurezza",
        "contenuto" => function () {
            echo "<h2>Cos'è un Form in PHP?</h2>";
            echo "<p>Un <strong>form</strong> è un modo per inviare dati dal client (browser) al server. In PHP, i dati del form possono essere ricevuti tramite i metodi <code>GET</code> o <code>POST</code>.</p>";

            echo "<h3>Creare un Form</h3>";
            echo "<p>Un form HTML di base per inviare i dati del campo <code>nome</code> al server:</p>";
            echo "<pre>&lt;form action=&quot;processa.php&quot; method=&quot;POST&quot;&gt;
    &lt;label for=&quot;nome&quot;&gt;Nome:&lt;/label&gt;
    &lt;input type=&quot;text&quot; id=&quot;nome&quot; name=&quot;nome&quot;&gt;
    &lt;input type=&quot;submit&quot; value=&quot;Invia&quot;&gt;
&lt;/form&gt;</pre>";

            echo "<h3>Recuperare i Dati del Form</h3>";
            echo "<p>Nel file <code>processa.php</code>, i dati inviati dal form possono essere ricevuti tramite <code>\$_POST</code> (se il form usa il metodo POST) o <code>\$_GET</code> (se usa il metodo GET):</p>";
            echo "<pre>&lt;?php
if (\$_SERVER['REQUEST_METHOD'] == 'POST') {
    \$nome = \$_POST['nome'];
    echo 'Ciao, ' . \$nome;
}
?&gt;</pre>";

            echo "<h3>Differenza tra GET e POST</h3>";
            echo "<p><strong>GET</strong> e <strong>POST</strong> sono i due metodi più comuni per inviare dati da un form al server. La principale differenza tra i due riguarda la visibilità dei dati e come vengono inviati.</p>";

            echo "<h4>Metodo GET</h4>";
            echo "<ul>
                <li><strong>Visibilità</strong>: I dati inviati con GET sono visibili nell'URL del browser. Ad esempio, se il form invia il dato <code>nome=Mario</code>, l'URL potrebbe essere: <code>http://example.com/processa.php?nome=Mario</code>.</li>
                <li><strong>Limiti di dimensione</strong>: I dati sono limitati dalla lunghezza dell'URL, che può variare a seconda del browser e del server.</li>
                <li><strong>Uso</strong>: GET è utilizzato per richiedere dati senza modificare lo stato del server (ad esempio, per una ricerca o una pagina di prodotto). Non dovrebbe essere usato per inviare informazioni sensibili.</li>
                <li><strong>Sicurezza</strong>: Non sicuro per inviare dati sensibili, poiché visibili nell'URL. Questo può esporre informazioni come credenziali o dati personali.</li>
              </ul>";

            echo "<h4>Metodo POST</h4>";
            echo "<ul>
                <li><strong>Visibilità</strong>: I dati inviati con POST non sono visibili nell'URL, poiché vengono inviati nel corpo della richiesta HTTP.</li>
                <li><strong>Limiti di dimensione</strong>: Non ci sono limiti significativi alla quantità di dati che possono essere inviati.</li>
                <li><strong>Uso</strong>: POST è utilizzato quando i dati devono essere inviati al server per modificare lo stato del server, come in un login o una registrazione. È anche il metodo migliore per inviare informazioni sensibili.</li>
                <li><strong>Sicurezza</strong>: Più sicuro di GET, ma non completamente sicuro. I dati possono essere intercettati se la comunicazione non è cifrata (si consiglia di usare HTTPS).</li>
              </ul>";

            echo "<h3>Esempio con GET</h3>";
            echo "<p>Un form che invia dati con il metodo GET:</p>";
            echo "<pre>&lt;form action=&quot;processa.php&quot; method=&quot;GET&quot;&gt;
    &lt;label for=&quot;nome&quot;&gt;Nome:&lt;/label&gt;
    &lt;input type=&quot;text&quot; id=&quot;nome&quot; name=&quot;nome&quot;&gt;
    &lt;input type=&quot;submit&quot; value=&quot;Invia&quot;&gt;
&lt;/form&gt;</pre>";

            echo "<p>Il risultato dell'invio di questo form sarà visibile nell'URL, come <code>http://example.com/processa.php?nome=Mario</code>.</p>";

            echo "<h3>Esempio con POST</h3>";
            echo "<p>Un form che invia dati con il metodo POST:</p>";
            echo "<pre>&lt;form action=&quot;processa.php&quot; method=&quot;POST&quot;&gt;
    &lt;label for=&quot;nome&quot;&gt;Nome:&lt;/label&gt;
    &lt;input type=&quot;text&quot; id=&quot;nome&quot; name=&quot;nome&quot;&gt;
    &lt;input type=&quot;submit&quot; value=&quot;Invia&quot;&gt;
&lt;/form&gt;</pre>";

            echo "<p>In questo caso, i dati inviati non saranno visibili nell'URL.</p>";

            echo "<h3>Sicurezza nei Form: Sanitizzazione e Validazione</h3>";
            echo "<p>Quando si trattano dati inviati tramite un form, è essenziale prendere misure per garantire che i dati siano sicuri. Ecco due tecniche fondamentali per proteggere i dati degli utenti:</p>";

            echo "<h4>Sanitizzazione dei Dati</h4>";
            echo "<p>La <strong>sanitizzazione</strong> dei dati significa rimuovere o modificare caratteri potenzialmente pericolosi che potrebbero compromettere la sicurezza del sistema, come script maligni o codice HTML pericoloso.</p>";
            echo "<ul>
                <li><strong>htmlspecialchars()</strong>: Converte caratteri speciali in entità HTML, proteggendo contro attacchi XSS (Cross-site Scripting).</li>
                <li><strong>filter_var()</strong>: Filtra e sanitizza i dati, ad esempio per validare un'email o rimuovere tag HTML indesiderati.</li>
              </ul>";

            echo "<h4>Validazione dei Dati</h4>";
            echo "<p>La <strong>validazione</strong> dei dati significa controllare che i dati ricevuti siano nel formato corretto. Ad esempio, assicurarsi che una stringa sia un'email valida o che una password soddisfi determinati criteri (lunghezza minima, presenza di caratteri speciali, ecc.).</p>";
            echo "<ul>
                <li><strong>filter_var()</strong> con <code>FILTER_VALIDATE_EMAIL</code>: Verifica che l'input sia una email valida.</li>
                <li><strong>preg_match()</strong>: Esegue una ricerca basata su espressioni regolari per convalidare formati complessi (ad esempio numeri di telefono, codici postali, ecc.).</li>
              </ul>";

            echo "<h4>Pratiche di Sicurezza per i Form</h4>";
            echo "<p>Oltre alla sanitizzazione e validazione, ci sono altre importanti pratiche di sicurezza da seguire quando si lavorano con i form:</p>";
            echo "<ul>
                <li><strong>Utilizzare HTTPS</strong>: Assicurati che la comunicazione tra il client e il server sia cifrata, utilizzando il protocollo HTTPS, per proteggere i dati sensibili da intercettazioni durante la trasmissione.</li>
                <li><strong>Token CSRF (Cross-Site Request Forgery)</strong>: Utilizza token unici e non prevedibili per proteggere il form da attacchi CSRF, dove un attaccante potrebbe inviare dati al server a nome di un utente autenticato.</li>
                <li><strong>Protezione contro l'Iniezione SQL</strong>: Quando si ricevono dati da un form e si interagisce con un database, è essenziale utilizzare query preparate con PDO o MySQLi per prevenire attacchi di iniezione SQL.</li>
              </ul>";

            echo "<h3>Conclusioni sulla Sicurezza dei Form</h3>";
            echo "<p>La sicurezza dei dati inviati tramite form è fondamentale. È necessario proteggere il sistema da attacchi comuni come XSS, CSRF e iniezioni SQL, e garantire che i dati siano sanitizzati, validati e protetti correttamente prima di essere utilizzati.</p>";
        }
    ],
    "file_system" => [
        "title" => "08. File System",
        "contenuto" => function () {
            echo "<h2>Introduzione al File System in PHP</h2>";
            echo "<p>Il <strong>File System</strong> in PHP permette di interagire con i file sul server. In questo capitolo vedremo come leggere, scrivere, modificare e gestire file, nonché come garantire la sicurezza e la corretta gestione dei permessi.</p>";

            echo "<h3>Operazioni di Base sui File</h3>";
            echo "<p>PHP offre diverse funzioni per lavorare con i file, tra cui:</p>";
            echo "<ul>
                <li><strong>fopen()</strong>: Apre un file per la lettura, scrittura o append. Può essere utilizzato per creare un file se non esiste.</li>
                <li><strong>fwrite()</strong>: Scrive dati in un file aperto.</li>
                <li><strong>fread()</strong>: Legge i dati da un file aperto.</li>
                <li><strong>fclose()</strong>: Chiude un file aperto.</li>
                <li><strong>file_get_contents()</strong>: Legge l'intero contenuto di un file in una stringa.</li>
                <li><strong>file_put_contents()</strong>: Scrive una stringa in un file (creandolo se necessario).</li>
              </ul>";

            echo "<h3>Apertura e Scrittura in un File</h3>";
            echo "<p>Per aprire e scrivere in un file, puoi usare la funzione <code>fopen()</code> e <code>fwrite()</code>. Ad esempio, per scrivere una stringa in un file di testo:</p>";
            echo "<pre>&lt;?php
\$file = fopen('testo.txt', 'w'); // Apre il file in modalità scrittura
if (\$file) {
    fwrite(\$file, 'Ciao, questo è un esempio!');
    fclose(\$file); // Chiude il file
}
?&gt;</pre>";
            echo "<p>La modalità <code>'w'</code> apre il file in scrittura, creando il file se non esiste. Se il file esiste già, il contenuto viene sovrascritto.</p>";

            echo "<h3>Lettura di un File</h3>";
            echo "<p>Per leggere il contenuto di un file, puoi usare la funzione <code>fread()</code> oppure <code>file_get_contents()</code>. Ad esempio:</p>";
            echo "<pre>&lt;?php
\$file = fopen('testo.txt', 'r'); // Apre il file in modalità lettura
if (\$file) {
    \$contenuto = fread(\$file, filesize('testo.txt'));
    echo \$contenuto;
    fclose(\$file); // Chiude il file
}
?&gt;</pre>";
            echo "<p>Alternativamente, la funzione <code>file_get_contents()</code> è più semplice e legge l'intero contenuto di un file in una sola volta:</p>";
            echo "<pre>&lt;?php
\$contenuto = file_get_contents('testo.txt');
echo \$contenuto;
?&gt;</pre>";

            echo "<h3>Controllare l'Esistenza di un File</h3>";
            echo "<p>Per verificare se un file esiste, puoi usare la funzione <code>file_exists()</code>:</p>";
            echo "<pre>&lt;?php
if (file_exists('testo.txt')) {
    echo 'Il file esiste.';
} else {
    echo 'Il file non esiste.';
}
?&gt;</pre>";

            echo "<h3>Cancellare un File</h3>";
            echo "<p>Per eliminare un file, puoi usare la funzione <code>unlink()</code>:</p>";
            echo "<pre>&lt;?php
if (unlink('testo.txt')) {
    echo 'File eliminato con successo.';
} else {
    echo 'Errore nell\'eliminazione del file.';
}
?&gt;</pre>";

            echo "<h3>Scrivere su un File (Append)</h3>";
            echo "<p>Se desideri aggiungere nuovi contenuti a un file senza sovrascrivere quello esistente, puoi utilizzare la modalità <code>'a'</code> (append) con la funzione <code>fopen()</code>:</p>";
            echo "<pre>&lt;?php
\$file = fopen('testo.txt', 'a'); // Apre il file in modalità append
if (\$file) {
    fwrite(\$file, 'Aggiunta di un nuovo contenuto.\n');
    fclose(\$file); // Chiude il file
}
?&gt;</pre>";

            echo "<h3>Sicurezza nella Gestione dei File</h3>";
            echo "<p>Quando si lavora con file in PHP, è importante prendere in considerazione la sicurezza. Ecco alcune best practices:</p>";
            echo "<ul>
                <li><strong>Proteggere i file sensibili</strong>: Non memorizzare file sensibili (come password o chiavi API) in luoghi pubblicamente accessibili. Utilizza directory fuori dalla radice web per memorizzare file critici.</li>
                <li><strong>Controllare i permessi dei file</strong>: Imposta correttamente i permessi di lettura, scrittura ed esecuzione sui file per limitare l'accesso non autorizzato. Utilizza <code>chmod()</code> per modificare i permessi.</li>
                <li><strong>Prevenire la sovrascrittura accidentale</strong>: Verifica sempre se un file esiste prima di scriverci sopra, e prendi in considerazione l'uso di nomi univoci per i file.</li>
                <li><strong>Sanitizzare il percorso del file</strong>: Prima di usare un percorso di file fornito dall'utente, assicurati che non contenga caratteri pericolosi o path traversal (come <code>../</code>) che potrebbero permettere a un malintenzionato di accedere a file sensibili.</li>
              </ul>";

            echo "<h3>Gestire le Directory</h3>";
            echo "<p>Oltre ai file, PHP consente anche di gestire le directory:</p>";
            echo "<ul>
                <li><strong>mkdir()</strong>: Crea una nuova directory.</li>
                <li><strong>rmdir()</strong>: Rimuove una directory vuota.</li>
                <li><strong>opendir()</strong>, <strong>readdir()</strong>, <strong>closedir()</strong>: Permettono di leggere il contenuto di una directory.</li>
              </ul>";

            echo "<p>Ad esempio, per creare una nuova directory:</p>";
            echo "<pre>&lt;?php
mkdir('nuova_directory');
?&gt;</pre>";

            echo "<h3>Conclusioni sul File System in PHP</h3>";
            echo "<p>PHP offre una vasta gamma di funzioni per lavorare con i file, sia per leggere che per scrivere. Tuttavia, è fondamentale prestare attenzione alla sicurezza quando si gestiscono i file e le directory, evitando vulnerabilità comuni come la sovrascrittura accidentale dei file e l'accesso non autorizzato ai file sensibili.</p>";
        }
    ],

    "database" => [
        "title" => "09. Database (PDO + MySQL)",
        "contenuto" => function () {
            echo "<h2>Cos'è PDO?</h2>";
            echo "<p><strong>PDO</strong> (PHP Data Objects) è una libreria che fornisce un'interfaccia per accedere ai database in PHP. Con PDO, possiamo interagire con diversi tipi di database (come MySQL, PostgreSQL, SQLite) senza dover modificare il codice per ogni tipo di database.</p>";

            echo "<h3>Connessione a MySQL con PDO</h3>";
            echo "<pre>&lt;?php
$ host = 'localhost';
$ dbname = 'mio_database';
$ username = 'root';
$ password = 'password';

try {
    \$dbh = new PDO(\"mysql:host=\$host;dbname=\$dbname\", \$username, \$password);
    \$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connessione riuscita!';
} catch (PDOException \$e) {
    echo 'Connessione fallita: ' . \$e->getMessage();
}
?&gt;</pre>";
            echo "<p>Questo codice stabilisce una connessione al database <code>mio_database</code> con le credenziali fornite. Se la connessione ha successo, viene mostrato il messaggio 'Connessione riuscita!'. In caso contrario, viene lanciata un'eccezione.</p>";

            echo "<h3>Esecuzione di una Query con PDO</h3>";
            echo "<pre>&lt;?php
$ query = 'SELECT * FROM utenti';
\$stmt = \$dbh->query(\$query);

while (\$row = \$stmt->fetch(PDO::FETCH_ASSOC)) {
    echo \$row['nome'] . ' ' . \$row['cognome'] . '&lt;br&gt;';
}
?&gt;</pre>";
            echo "<p>Questa parte esegue una query di selezione per ottenere tutti i record dalla tabella <code>utenti</code> e visualizza il nome e il cognome di ogni utente.</p>";

            echo "<h3>Prepared Statements (Dichiarazioni Preparate)</h3>";
            echo "<pre>&lt;?php
$ query = 'INSERT INTO utenti (nome, cognome) VALUES (:nome, :cognome)';
\$stmt = \$dbh->prepare(\$query);

\$stmt->bindParam(':nome', \$nome);
\$stmt->bindParam(':cognome', \$cognome);

\$nome = 'Giovanni';
\$cognome = 'Rossi';
\$stmt->execute();
?&gt;</pre>";
            echo "<p>In questo esempio, inseriamo un nuovo record nella tabella <code>utenti</code> utilizzando dichiarazioni preparate, che proteggono da SQL Injection.</p>";

            echo "<h3>Errori comuni</h3>";
            echo "<ul>
                <li><strong>Errore di connessione:</strong> Verifica che il server MySQL sia in esecuzione e che i dettagli di connessione siano corretti.</li>
                <li><strong>Tabella non esistente:</strong> Verifica che la tabella esista nel database e che il nome sia scritto correttamente.</li>
                <li><strong>Problemi con i tipi di dati:</strong> Assicurati che i dati inseriti nel database siano compatibili con i tipi di campo definiti nelle tabelle.</li>
              </ul>";
        }
    ],
    "sessioni_login" => [
        "title" => "09. Sessioni & Login",
        "contenuto" => function () {
            echo "<h2>Cos'è una Sessione?</h2>";
            echo "<p>In PHP, una <strong>sessione</strong> è un meccanismo che consente di conservare informazioni persistenti tra diverse richieste HTTP. Poiché HTTP è un protocollo senza stato (stateless), le sessioni permettono di 'ricordare' informazioni tra le diverse pagine.</p>";

            echo "<h3>Avviare una Sessione</h3>";
            echo "<p>Per avviare una sessione, bisogna utilizzare la funzione <code>session_start()</code> all'inizio del file PHP. Questa funzione deve essere chiamata prima di qualsiasi output HTML o echo.</p>";
            echo "<pre>&lt;?php\nsession_start();\n?&gt;</pre>";

            echo "<p>Una volta avviata una sessione, puoi salvare i dati nella superglobale <code>\$_SESSION</code> che funziona come un array associativo per memorizzare le informazioni.</p>";

            echo "<h3>Memorizzare Dati nella Sessione</h3>";
            echo "<pre>&lt;?php\nsession_start();\n\$_SESSION['username'] = 'mario';\necho 'Benvenuto, ' . \$_SESSION['username'];\n?&gt;</pre>";

            echo "<p>Nel codice sopra, abbiamo memorizzato il nome utente nella variabile di sessione <code>\$_SESSION['username']</code> e lo abbiamo stampato.</p>";

            echo "<h3>Accedere ai Dati della Sessione</h3>";
            echo "<pre>&lt;?php\nsession_start();\necho 'Benvenuto, ' . \$_SESSION['username'];\n?&gt;</pre>";

            echo "<p>Puoi accedere ai dati salvati nella sessione in qualsiasi parte del tuo sito, finché la sessione è attiva. In questo caso, abbiamo recuperato il valore di <code>username</code>.</p>";

            echo "<h3>Chiudere una Sessione</h3>";
            echo "<p>Per terminare una sessione, si deve chiamare la funzione <code>session_destroy()</code>, che rimuove tutti i dati della sessione. Per eliminare un dato specifico, invece, si può usare <code>unset(\$_SESSION['nome_dato'])</code>.</p>";
            echo "<pre>&lt;?php\nsession_start();\nunset(\$_SESSION['username']);\nsession_destroy();\n?&gt;</pre>";

            echo "<h2>Gestione Login con Sessioni</h2>";
            echo "<p>Una delle applicazioni più comuni delle sessioni è il <strong>login</strong> degli utenti. Durante il login, possiamo salvare nelle sessioni informazioni come l'ID dell'utente o il suo stato di autenticazione, in modo che l'utente non debba effettuare il login ogni volta che accede a una nuova pagina.</p>";

            echo "<h3>Form di Login</h3>";
            echo "<pre>&lt;form action='login.php' method='POST'&gt;\n    &lt;label for='username'&gt;Username:&lt;/label&gt;\n    &lt;input type='text' id='username' name='username'&gt;\n    &lt;label for='password'&gt;Password:&lt;/label&gt;\n    &lt;input type='password' id='password' name='password'&gt;\n    &lt;input type='submit' value='Login'&gt;\n&lt;/form&gt;</pre>";

            echo "<p>Il form di login invia i dati al file <code>login.php</code>, che si occupa di verificare le credenziali dell'utente.</p>";

            echo "<h3>Codice di Verifica Login (login.php)</h3>";
            echo "<pre>&lt;?php\nsession_start();\n\n// Dati di esempio per il login\n\$valid_username = 'mario';\n\$valid_password = '12345';\n\nif (\$_POST['username'] == \$valid_username && \$_POST['password'] == \$valid_password) {\n    \$_SESSION['username'] = \$valid_username;\n    echo 'Login effettuato con successo!';\n} else {\n    echo 'Credenziali non valide.';\n}\n?&gt;</pre>";

            echo "<p>Nel file <code>login.php</code>, il server verifica che i dati inviati corrispondano a quelli validi. Se sì, memorizza il nome utente nella sessione e conferma il login, altrimenti mostra un messaggio di errore.</p>";

            echo "<h3>Controllo di Autenticazione</h3>";
            echo "<p>Per proteggere le pagine riservate, possiamo controllare se l'utente è autenticato. Se non lo è, lo reindirizziamo alla pagina di login.</p>";
            echo "<pre>&lt;?php\nsession_start();\nif (!isset(\$_SESSION['username'])) {\n    header('Location: login.php');\n    exit();\n}\n?&gt;</pre>";

            echo "<p>Nel codice sopra, controlliamo se la variabile di sessione <code>username</code> è impostata. Se non lo è, significa che l'utente non è loggato, quindi lo reindirizziamo alla pagina di login.</p>";

            echo "<h3>Logout</h3>";
            echo "<p>Per consentire all'utente di uscire dalla sessione (logout), è sufficiente eliminare i dati della sessione e distruggerla.</p>";
            echo "<pre>&lt;?php\nsession_start();\nunset(\$_SESSION['username']);\nsession_destroy();\nheader('Location: login.php');\nexit();\n?&gt;</pre>";

            echo "<p>Nel codice sopra, abbiamo rimosso la variabile <code>username</code> dalla sessione e distrutto la sessione, reindirizzando l'utente alla pagina di login.</p>";

            echo "<h3>Sicurezza</h3>";
            echo "<p>Le sessioni sono un'importante componente di sicurezza in un'applicazione web. È fondamentale proteggere le informazioni della sessione utilizzando le seguenti best practice:</p>";
            echo "<ul>
                <li><strong>Regenerare l'ID della sessione:</strong> ogni volta che un utente si autentica, è una buona pratica rigenerare l'ID della sessione per evitare attacchi di session fixation. Utilizzare <code>session_regenerate_id(true);</code> dopo il login.</li>
                <li><strong>Impostare le variabili della sessione come sicure:</strong> Le variabili di sessione devono essere accessibili solo tramite il server, quindi è importante usare <code>session_set_cookie_params</code> per impostare la sicurezza del cookie.</li>
                <li><strong>Proteggere con HTTPS:</strong> Assicurati di utilizzare HTTPS per evitare che i dati di sessione vengano intercettati durante la trasmissione.</li>
                <li><strong>Invalida la sessione dopo il logout:</strong> È buona prassi chiamare <code>session_destroy();</code> dopo che l'utente ha effettuato il logout per rimuovere tutti i dati di sessione.</li>
              </ul>";
        }
    ],
    "oop" => [
        "title" => "10. Programmazione Orientata agli Oggetti (OOP)",
        "contenuto" => function () {
            echo "<h2>Cos'è la Programmazione Orientata agli Oggetti (OOP)?</h2>";
            echo "<p>La Programmazione Orientata agli Oggetti (OOP) è un paradigma di programmazione che si basa sull'uso di <strong>oggetti</strong> e <strong>classi</strong>. Ogni oggetto è un'istanza di una classe e può contenere proprietà (variabili) e metodi (funzioni).</p>";

            echo "<h3>Classi e Oggetti</h3>";
            echo "<p>In PHP, una <strong>classe</strong> è una struttura che definisce le proprietà e i metodi di un oggetto. Un <strong>oggetto</strong> è una istanza di una classe e rappresenta un'entità concreta che segue il modello definito dalla classe.</p>";

            echo "<h4>Definire una Classe</h4>";
            echo "<pre>&lt;?php\nclass Persona {\n    public \$nome;\n    public \$eta;\n\n    public function saluta() {\n        echo 'Ciao, sono ' . \$this->nome . ' e ho ' . \$this->eta . ' anni.';\n    }\n}\n?&gt;</pre>";

            echo "<p>Nel codice sopra, abbiamo definito una classe <code>Persona</code> con due proprietà: <code>nome</code> e <code>eta</code>, e un metodo <code>saluta()</code> che stampa un messaggio di saluto.</p>";

            echo "<h4>Creare un Oggetto</h4>";
            echo "<pre>&lt;?php\n$ persona = new Persona();\n$ persona->nome = 'Mario';\n$ persona->eta = 30;\n$ persona->saluta();\n?&gt;</pre>";

            echo "<p>Per creare un oggetto, usiamo la parola chiave <code>new</code> seguita dal nome della classe. Dopo aver creato l'oggetto, possiamo accedere alle sue proprietà e metodi usando l'operatore <code>-></code>.</p>";

            echo "<h3>Costruttori e Distruttori</h3>";
            echo "<p>Un <strong>costruttore</strong> è un metodo speciale che viene chiamato automaticamente quando viene creato un oggetto. Il <strong>distruttore</strong> è un metodo che viene chiamato quando un oggetto viene distrutto, utile per liberare risorse.</p>";

            echo "<h4>Costruttore</h4>";
            echo "<pre>&lt;?php\nclass Persona {\n    public \$nome;\n    public \$eta;\n\n    public function __construct(\$nome, \$eta) {\n        \$this->nome = \$nome;\n        \$this->eta = \$eta;\n    }\n\n    public function saluta() {\n        echo 'Ciao, sono ' . \$this->nome . ' e ho ' . \$this->eta . ' anni.';\n    }\n}\n?&gt;</pre>";

            echo "<p>Nel codice sopra, il costruttore <code>__construct()</code> viene usato per inizializzare le proprietà dell'oggetto al momento della sua creazione.</p>";

            echo "<h4>Distruttore</h4>";
            echo "<pre>&lt;?php\nclass Persona {\n    public \$nome;\n    public \$eta;\n\n    public function __construct(\$nome, \$eta) {\n        \$this->nome = \$nome;\n        \$this->eta = \$eta;\n    }\n\n    public function __destruct() {\n        echo 'L\'oggetto ' . \$this->nome . ' è stato distrutto.';\n    }\n}\n?&gt;</pre>";

            echo "<p>Il distruttore <code>__destruct()</code> viene chiamato quando l'oggetto non è più utilizzato (ad esempio quando esce dallo scope o quando il programma termina).</p>";

            echo "<h3>Ereditarietà</h3>";
            echo "<p>L'<strong>ereditarietà</strong> permette a una classe di ereditare proprietà e metodi da un'altra classe. La classe che eredita è chiamata classe figlia, mentre quella da cui eredita è la classe madre.</p>";

            echo "<h4>Esempio di Ereditarietà</h4>";
            echo "<pre>&lt;?php\nclass Animale {\n    public function parla() {\n        echo 'L\'animale fa un suono.';\n    }\n}\n\nclass Cane extends Animale {\n    public function parla() {\n        echo 'Il cane abbaia.';\n    }\n}\n\n$ cane = new Cane();\n$ cane->parla(); // Output: Il cane abbaia.\n?&gt;</pre>";

            echo "<p>Nel codice sopra, la classe <code>Cane</code> estende la classe <code>Animale</code> e sovrascrive il metodo <code>parla()</code>.</p>";

            echo "<h3>Polimorfismo</h3>";
            echo "<p>Il <strong>polimorfismo</strong> permette di utilizzare lo stesso nome di metodo in classi diverse, ma con comportamenti differenti. È un concetto che consente di chiamare lo stesso metodo su oggetti di classi diverse che implementano il metodo in modo differente.</p>";

            echo "<h4>Esempio di Polimorfismo</h4>";
            echo "<pre>&lt;?php\nclass Animale {\n    public function parla() {\n        echo 'L\'animale fa un suono.';\n    }\n}\n\nclass Cane extends Animale {\n    public function parla() {\n        echo 'Il cane abbaia.';\n    }\n}\n\nclass Gatto extends Animale {\n    public function parla() {\n        echo 'Il gatto miagola.';\n    }\n}\n\nfunction faiParlare(Animale \$animale) {\n    \$animale->parla();\n}\n\n$ faiParlare(new Cane());  // Output: Il cane abbaia.\nfaiParlare(new Gatto()); // Output: Il gatto miagola.\n?&gt;</pre>";

            echo "<p>In questo esempio, la funzione <code>faiParlare()</code> può chiamare il metodo <code>parla()</code> su oggetti di tipo <code>Animale</code>, ma l'implementazione concreta cambia a seconda che l'oggetto sia di tipo <code>Cane</code> o <code>Gatto</code>.</p>";

            echo "<h3>Interfacce</h3>";
            echo "<p>Un'<strong>interfaccia</strong> è un contratto che una classe deve rispettare. Le classi che implementano un'interfaccia devono definire tutti i metodi dichiarati nell'interfaccia.</p>";

            echo "<h4>Esempio di Interfaccia</h4>";
            echo "<pre>&lt;?php\ninterface AnimaleInterface {\n    public function parla();\n}\n\nclass Cane implements AnimaleInterface {\n    public function parla() {\n        echo 'Il cane abbaia.';\n    }\n}\n\n$ cane = new Cane();\n$ cane->parla(); // Output: Il cane abbaia.\n?&gt;</pre>";

            echo "<p>Nel codice sopra, la classe <code>Cane</code> implementa l'interfaccia <code>AnimaleInterface</code> e fornisce un'implementazione del metodo <code>parla()</code>.</p>";

            echo "<h3>Visibilità delle Proprietà e Metodi</h3>";
            echo "<p>PHP offre tre livelli di visibilità per le proprietà e i metodi delle classi:</p>";
            echo "<ul>
                <li><strong>public:</strong> accessibile da qualsiasi parte del codice.</li>
                <li><strong>private:</strong> accessibile solo all'interno della classe.</li>
                <li><strong>protected:</strong> accessibile solo all'interno della classe e delle sue classi derivate.</li>
              </ul>";
            echo "<h4>Esempio di Visibilità</h4>";
            echo "<pre>&lt;?php\nclass Persona {\n    private \$nome;\n\n    public function __construct(\$nome) {\n        \$this->nome = \$nome;\n    }\n\n    public function getNome() {\n        return \$this->nome;\n    }\n}\n\n\$persona = new Persona('Mario');\necho \$persona->getNome(); // Output: Mario\n?&gt;</pre>";

            echo "<p>Nel codice sopra, la proprietà <code>nome</code> è privata e non può essere accessibile dall'esterno. Tuttavia, il metodo <code>getNome()</code> è pubblico e consente di accedere al valore della proprietà.</p>";
        }
    ],
    "progettazione" => [
    "title" => "11. Progettazione e Mini-Progetti",
    "contenuto" => function () {
        echo "<h2>Cos'è la Progettazione del Software?</h2>";
        echo "<p>La progettazione del software è una fase fondamentale dello sviluppo che prevede la creazione della struttura e delle funzionalità del programma, prima di procedere con l'implementazione. Una buona progettazione aiuta a scrivere codice più leggibile, manutenibile ed efficiente.</p>";

        echo "<h3>Fasi della Progettazione</h3>";
        echo "<p>La progettazione del software può essere suddivisa in diverse fasi:</p>";
        echo "<ul>
                <li><strong>Analisi dei Requisiti:</strong> comprendere le necessità del progetto e le funzionalità richieste.</li>
                <li><strong>Progettazione Architetturale:</strong> decidere come strutturare l'applicazione (es. MVC, monolitico, microservizi).</li>
                <li><strong>Progettazione dei Componenti:</strong> definire i singoli componenti e come interagiranno tra loro.</li>
                <li><strong>Progettazione della Base Dati:</strong> progettare la struttura del database per la gestione dei dati.</li>
              </ul>";

        echo "<h3>Mini-Progetti per Imparare PHP</h3>";
        echo "<p>Un ottimo modo per imparare e consolidare la conoscenza di PHP è lavorare su mini-progetti. Di seguito vengono proposti alcuni esempi di progetti che puoi realizzare per mettere in pratica ciò che hai imparato.</p>";

        echo "<h4>1. Gestione To-Do List</h4>";
        echo "<p>Un'applicazione che permette agli utenti di creare, visualizzare, modificare e cancellare attività. Ogni attività avrà un titolo, una descrizione e una data di scadenza. Può essere realizzato utilizzando PHP e MySQL per memorizzare i dati.</p>";
        echo "<h5>Funzionalità principali:</h5>
                <ul>
                    <li>Aggiungere, modificare, cancellare attività</li>
                    <li>Visualizzare tutte le attività in una lista</li>
                    <li>Filtrare le attività per data</li>
                    <li>Gestire la persistenza dei dati tramite un database</li>
                </ul>";

        echo "<h4>2. Sistema di Autenticazione degli Utenti</h4>";
        echo "<p>Un sistema di login che consente agli utenti di registrarsi, effettuare il login e gestire il proprio profilo. Questo progetto ti permetterà di lavorare con sessioni, sicurezza e database.</p>";
        echo "<h5>Funzionalità principali:</h5>
                <ul>
                    <li>Registrazione e login con autenticazione</li>
                    <li>Gestione delle sessioni</li>
                    <li>Reset della password tramite email</li>
                    <li>Salvataggio delle informazioni nel database</li>
                </ul>";

        echo "<h4>3. Blog Personale</h4>";
        echo "<p>Un'applicazione per creare e gestire un blog, dove gli utenti possono scrivere post, commentare e visualizzare i contenuti pubblicati. Utilizza PHP e MySQL per gestire i post e i commenti.</p>";
        echo "<h5>Funzionalità principali:</h5>
                <ul>
                    <li>Creare, modificare e cancellare post</li>
                    <li>Visualizzare i post in ordine cronologico</li>
                    <li>Permettere agli utenti di commentare i post</li>
                    <li>Gestire la sicurezza per evitare attacchi di SQL Injection</li>
                </ul>";

        echo "<h3>Best Practices per la Progettazione</h3>";
        echo "<p>Durante la progettazione e lo sviluppo dei progetti PHP, è importante seguire alcune <strong>best practices</strong>:</p>";
        echo "<ul>
                <li><strong>Modularità:</strong> suddividi il codice in moduli riutilizzabili e facilmente manutenibili.</li>
                <li><strong>Separazione delle preoccupazioni:</strong> adotta il pattern di progettazione MVC (Model-View-Controller) per separare logica di business, presentazione e gestione dei dati.</li>
                <li><strong>Uso di librerie e framework:</strong> utilizza librerie e framework come Laravel per velocizzare lo sviluppo e migliorare la qualità del codice.</li>
                <li><strong>Validazione e Sanitizzazione:</strong> valida e sanifica sempre i dati in ingresso per evitare vulnerabilità come XSS e SQL Injection.</li>
                <li><strong>Testabilità:</strong> scrivi il codice in modo che sia facilmente testabile, utilizzando ad esempio il testing unitario.</li>
              </ul>";

        echo "<h3>Progettazione in PHP: Un Esempio Pratico</h3>";
        echo "<p>Immagina di voler sviluppare un'applicazione di gestione di contatti. Ecco un esempio di come potrebbe essere organizzata la progettazione:</p>";

        echo "<h5>1. Analisi dei requisiti:</h5>
                <ul>
                    <li>Gli utenti devono poter aggiungere, modificare e cancellare i propri contatti.</li>
                    <li>Ogni contatto avrà nome, cognome, email e numero di telefono.</li>
                    <li>I contatti devono essere memorizzati in un database MySQL.</li>
                </ul>";

        echo "<h5>2. Progettazione architetturale:</h5>
                <ul>
                    <li>Applicazione basata sul pattern MVC.</li>
                    <li>Model per gestire i contatti nel database, View per visualizzare i dati e Controller per gestire le interazioni con l'utente.</li>
                </ul>";

        echo "<h5>3. Progettazione del database:</h5>
                <ul>
                    <li>Tabella <strong>contatti</>: id (INT), nome (VARCHAR), cognome (VARCHAR), email (VARCHAR), telefono (VARCHAR).</li>
                </ul>";

        echo "<p>Seguendo queste fasi, è possibile creare una solida struttura per l'applicazione, assicurando una gestione più semplice e scalabile del codice.</p>";
    }
],
"framework_mvc" => [
    "title" => "12. Framework & MVC (Laravel base)",
    "contenuto" => function () {
        echo "<h2>Cos'è un Framework in PHP?</h2>";
        echo "<p>Un <strong>framework</strong> è una raccolta di librerie, strumenti e convenzioni predefinite che ti permettono di sviluppare applicazioni web più rapidamente e con meno errori. I framework forniscono una struttura standard e ottimizzata, che ti consente di concentrarti sulla logica applicativa anziché sulla gestione dei dettagli di basso livello.</p>";

        echo "<h3>Vantaggi di Usare un Framework</h3>";
        echo "<ul>
                <li><strong>Velocità di sviluppo:</strong> i framework offrono molte funzionalità pronte all'uso, come la gestione delle rotte, l'autenticazione, la gestione del database e molto altro.</li>
                <li><strong>Organizzazione del codice:</strong> un framework fornisce una struttura chiara e ordinata, che aiuta a mantenere il codice pulito e manutenibile.</li>
                <li><strong>Sicurezza:</strong> i framework gestiscono automaticamente molte problematiche di sicurezza, come la protezione da SQL Injection, Cross-Site Scripting (XSS), e Cross-Site Request Forgery (CSRF).</li>
                <li><strong>Supporto della comunità:</strong> i framework popolari come Laravel hanno una vasta comunità di sviluppatori che contribuiscono a risolvere problemi e migliorare le funzionalità.</li>
              </ul>";

        echo "<h2>Cos'è il Pattern MVC?</h2>";
        echo "<p>Il pattern <strong>MVC</strong> (Model-View-Controller) è un'architettura software che separa le preoccupazioni della logica applicativa in tre componenti principali:</p>";
        echo "<ul>
                <li><strong>Model:</strong> gestisce la logica di business e l'interazione con il database. È responsabile della manipolazione dei dati.</li>
                <li><strong>View:</strong> è la parte che si occupa dell'interfaccia utente, visualizzando i dati in un formato leggibile (HTML, JSON, etc.).</li>
                <li><strong>Controller:</strong> gestisce le richieste dell'utente, interagisce con i modelli per recuperare i dati e passa i risultati alla vista per la presentazione.</li>
              </ul>";

        echo "<h3>Come funziona MVC in Laravel</h3>";
        echo "<p>Laravel è uno dei framework PHP più popolari, e segue il pattern MVC per organizzare il codice. Ecco come funziona:</p>";

        echo "<h4>1. Routing</h4>";
        echo "<p>In Laravel, tutte le richieste HTTP vengono indirizzate attraverso il sistema di routing. Ogni route è associata a un controller che gestisce la logica applicativa.</p>";
        echo "<pre>&lt;?php\nRoute::get('/home', 'HomeController@index');\n?&gt;</pre>";

        echo "<h4>2. Controller</h4>";
        echo "<p>Il controller in Laravel gestisce la logica per una determinata richiesta. È possibile creare controller utilizzando Artisan, il CLI di Laravel:</p>";
        echo "<pre>php artisan make:controller HomeController</pre>";

        echo "<h4>3. View</h4>";
        echo "<p>Le viste in Laravel sono gestite tramite i file Blade, un motore di template che consente di integrare PHP all'interno di file HTML. Ecco un esempio di vista:</p>";
        echo "<pre>&lt;!-- resources/views/home.blade.php --&gt;\n&lt;h1&gt;Benvenuto in Laravel&lt;/h1&gt;</pre>";

        echo "<h4>4. Model</h4>";
        echo "<p>Il modello in Laravel rappresenta un'entità di business e fornisce metodi per interagire con il database. Laravel usa Eloquent, un ORM (Object-Relational Mapping), per semplificare l'interazione con il database:</p>";
        echo "<pre>php artisan make:model User</pre>";

        echo "<h3>Creare un'Applicazione Base con Laravel</h3>";
        echo "<p>Per creare un'applicazione di base con Laravel, segui questi passaggi:</p>";

        echo "<h5>1. Installare Laravel</h5>";
        echo "<p>Per installare Laravel, usa Composer:</p>";
        echo "<pre>composer create-project --prefer-dist laravel/laravel nome_progetto</pre>";

        echo "<h5>2. Creare una Route</h5>";
        echo "<p>Nel file <code>routes/web.php</code>, definisci una route che punta a un controller:</p>";
        echo "<pre>Route::get('/home', 'HomeController@index');</pre>";

        echo "<h5>3. Creare un Controller</h5>";
        echo "<p>Genera un controller con Artisan:</p>";
        echo "<pre>php artisan make:controller HomeController</pre>";

        echo "<h5>4. Creare una Vista</h5>";
        echo "<p>Crea un file Blade per la vista nella cartella <code>resources/views</code>:</p>";
        echo "<pre>&lt;!-- resources/views/home.blade.php --&gt;\n&lt;h1&gt;Benvenuto in Laravel!&lt;/h1&gt;</pre>";

        echo "<h5>5. Creare un Model</h5>";
        echo "<p>Creiamo un modello Eloquent che rappresenta un'entità nel database:</p>";
        echo "<pre>php artisan make:model Post</pre>";

        echo "<p>Laravel ti permetterà di costruire rapidamente applicazioni web seguendo il pattern MVC, rendendo il tuo codice più pulito, organizzato e manutenibile.</p>";

        echo "<h3>Perché Usare Laravel?</h3>";
        echo "<ul>
                <li><strong>Semplicità:</strong> Laravel offre una sintassi elegante e intuitiva.</li>
                <li><strong>Funzionalità avanzate:</strong> include supporto per autenticazione, routing, validazione dei dati, gestione delle sessioni, ecc.</li>
                <li><strong>Comunità:</strong> una vasta comunità di sviluppatori, tutorial, pacchetti e risorse per aiutarti a imparare.</li>
                <li><strong>Scalabilità:</strong> Laravel è progettato per essere scalabile e può gestire sia piccole applicazioni che grandi progetti enterprise.</li>
              </ul>";
    }
],





];

$argomento_keys = array_keys($argomenti); // Otteniamo tutte le chiavi degli argomenti
$curr_index = array_search($sezione, $argomento_keys); // Troviamo l'indice dell'argomento corrente

// Argomenti precedente e successivo
$prev = $curr_index > 0 ? $argomento_keys[$curr_index - 1] : null;
$next = $curr_index < count($argomenti) - 1 ? $argomento_keys[$curr_index + 1] : null;
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Dispensa PHP Interattiva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f0f0f7;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .search-bar {
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 60%;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .navigation {
            margin-top: 20px;
            text-align: center;
        }

        .navigation button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 0 5px;
        }

        .navigation button:hover {
            background-color: #0056b3;
        }

        .topic-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h2 {
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin: 10px 0;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function searchTopic() {
            const searchQuery = document.getElementById("search").value.toLowerCase();
            const topics = document.querySelectorAll(".topic-item");
            topics.forEach(topic => {
                const title = topic.innerText.toLowerCase();
                if (title.includes(searchQuery)) {
                    topic.style.display = "block";
                } else {
                    topic.style.display = "none";
                }
            });
        }
    </script>
</head>

<body>

    <div class="container">
        <h1>📘 Dispensa PHP Interattiva</h1>

        <div class="search-bar">
            <input type="text" id="search" placeholder="Cerca tra gli argomenti..." onkeyup="searchTopic()">
        </div>

        <?php if (!$sezione): ?>
            <h2>Benvenuto! Seleziona un argomento:</h2>
            <ul>
                <?php foreach ($argomenti as $key => $val): ?>
                    <li class="topic-item"><a href="?sezione=<?= $key ?>"><?= $val['title'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php elseif (isset($argomenti[$sezione])): ?>
            <p><a href="dispensa.php">&larr; Torna al menu</a></p>
            <div class="topic-content">
                <h2><?= $argomenti[$sezione]["title"] ?></h2>
                <?php $argomenti[$sezione]["contenuto"](); ?>
            </div>

            <div class="navigation">
                <?php if ($prev): ?>
                    <a href="?sezione=<?= $prev ?>"><button>&larr; Precedente</button></a>
                <?php endif; ?>

                <?php if ($next): ?>
                    <a href="?sezione=<?= $next ?>"><button>Successivo &rarr;</button></a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p>Argomento non trovato. <a href="dispensa.php">Torna al menu</a></p>
        <?php endif; ?>

    </div>

</body>

</html>