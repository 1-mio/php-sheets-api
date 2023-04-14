<?php
require __DIR__ . '/vendor/autoload.php';

// Configs Google Cloud API
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');

$service = new Google_Service_Sheets($client);

// Sheets ID
$spreadsheetId = '1ILIEUg4sRzJMz9pHealgKM_5Pzt5gOFt2j9Uwytre_Y';
$sheetName = 'db_sheets_onemillionop';

// Insert values ​​into sheet db_sheets_onemillionop
$values = [
    ["Nome", "Idade", "Cidade"],
    ["Igor", "200", "Brasília"],
    ["Thiago", "200", "Curitiba"],
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$range = $sheetName . '!A1';

$result = $service->spreadsheets_values->update(
    $spreadsheetId,
    $range,
    $body,
    $params
);

printf("%d Valores inseridos com sucesso!!.", $result->getUpdatedCells());
