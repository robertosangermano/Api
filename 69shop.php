<?php
/*
 * Plugin Name:       69shop
 * Plugin URI:        https://example.com/plugins/69shop/
 * Description:       test.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:           roberto sangermano
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       69shop
 * Domain Path:       /languages
 */


 //_______________________TEST AUTENICAZIONE________________________________

 // Recupera i dati dal corpo della richiesta
$data = json_decode(file_get_contents('php://input'), true);

// Verifica se la chiave è presente e valida
if (!isset($data['key']) || $data['key']!== '2fd379901d7f8803ea4a32ca8d33adf1') {
    $output = array(
        'uccess' => false,
        'errorCode' => '401',
        'essage' => 'Chiave API non valida'
    );
    header('Content-Type: application/json');
    echo json_encode($output);
    exit;
}

// Esegue le funzioni richieste
//...

// Restituisce il risultato come JSON
$output = array(
    'uccess' => true,
    'ip' => $_SERVER['REMOTE_ADDR']
);
header('Content-Type: application/json');
echo json_encode($output);
exit;

//_____________________GIACENZA MAGAZZINO___________________

//Recupero i dati dal corpo della richiesta
$data = json_decode(file_get_contents('php://input'), true);

// Recupero i parametri della richiesta
$key = $data['key'];
$codice = $data['codice'];
$qta = $data['qta'];

// Verifica se la chiave API è valida
if ($key!= 'API_KEY') {
    $response = array('success' => false, 'errorCode' => 'INVALID_API_KEY');
    echo json_encode($response);
    exit;
}

// Esecuzione delle funzioni richieste
//...

// Creazione della risposta
$response = array('success' => true, 'ip' => $_SERVER['REMOTE_ADDR']);
echo json_encode($response);

//_________________________PAGINA PRODOTTO__________________

// Recupero i dati dal corpo della richiesta
$data = json_decode(file_get_contents('php://input'), true);

// Recupero i parametri della richiesta
$key = $data['key'];
$codice = $data['codice'];

// Verifica se la chiave API è valida
if ($key!= 'API_KEY') {
    $response = array('success' => false, 'errorCode' => 'INVALID_API_KEY');
    echo json_encode($response);
    exit;
}

// Esecuzione delle funzioni richieste
//...

// Creazione della risposta
$response = array('success' => true, 'ip' => $_SERVER['REMOTE_ADDR'], 'prodotto' => array(
    'codice' => $codice,
    'ean' => '1234567890123',
    'nome' => 'Nome del prodotto',
    'produttore' => 'Produttore del prodotto',
    'descrizione' => 'Descrizione del prodotto',
    'categorie' => 'Categoria 1, Categoria 2',
    'listino' => 10.99,
    'prezzo' => 19.99,
    'disponibilita' => 100,
    'immagini' => 'http://example.com/image1.jpg,http://example.com/image2.jpg',
    'colore' => 'rosso',
    'taglia' => 'M',
    'coppa' => true,
    'lunghezza' => 100,
    'ateriale' => 'cotone',
    'volume' => 10,
    'diametro' => 5,
    'tessuto' => 'plastica',
    'lip_style' => 'brasiliane',
    'vibrazione' => true,
    'waterproof' => true,
    'carnagione' => 'acciaio',
    'gioielli_style' => 'collane',
    'carpe_style' => 'decoltè, stivali, sandali',
    'gonfiabile' => true,
    'batteria' => true,
    'altezza' => 5,
    'fosforescente' => true,
    'body-part' => 'vagina',
    'wireless' => true,
    'calze_style' => 'autoreggenti, collant, calze',
    'tema' => 'coniglietta, natale, pirata, segretaria',
    'completi_style' => '2 pezzi, 3 pezzi',
    'constrictor_style' => 'polsiere, cavigliere, manette, kit',
    'doppio_fallo' => true,
    'ealistico' => true,
    'entosa' => true,
    'rotazione' => true,
    'ricaricabile' => true,
    'lubrificanti' => 'acqua, lattina',
    'fragranza' => 'fragranza 1, fragranza 2',
    'confezione_da' => 'confezione 1, confezione 2',
    'aromatizzati' => true,
    'varie' => 'variazione 1, variazione 2',
    'voce' => 'voce 1, voce 2',
    'ricarica' => true,
    'esso' => 'uomo, donna',
    'od_tenga' => 'tenga, non tenga',
    'dimensione' => 'piccola, media, grande',
    'qweel' => true,
    'ricambio' => true,
    'vari' => 'variazione 1, variazione 2',
    'ritardante' => true
));
echo json_encode($response);

//_________________________ORDINI_________________

// Recupero i dati dal corpo della richiesta
$data = json_decode(file_get_contents('php://input'), true);

// Recupero i parametri della richiesta
$key = $data['key'];
$testMode = $data['testMode'];
$destinatario = $data['destinatario'];
$metodoPagamento = $data['metodoPagamento'];
$prodotti = $data['prodotti'];
$note = $data['note'];

// Verifica se la chiave API è valida
if ($key!= 'API_KEY') {
    $response = array('success' => false, 'errorCode' => 'INVALID_API_KEY');
    echo json_encode($response);
    exit;
}

// Esecuzione delle funzioni richieste
//...

// Creazione della risposta
$response = array('success' => true, 'testMode' => $testMode, 'uin' => '1234567890', 'payUrl' => 'http://example.com/pagamento', 'importo' => 100.99);
echo json_encode($response);

?>
