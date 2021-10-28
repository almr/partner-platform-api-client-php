<?php


require_once(__DIR__ . '/vendor/autoload.php');

//Please check Swagger UI or OpenAPI.json for updates
$keycloakUrl = 'https://sso.emesa.org/auth';
$sandBoxApiHost = 'https://selp469.test.market.emesa.org/sandbox';

$provider = new Stevenmaguire\OAuth2\Client\Provider\Keycloak([
    'authServerUrl' => $keycloakUrl,
    'realm' => 'partners-sandbox',
    'clientId' => 'emesa-supplier',
    'clientSecret' => '65c7307a-4c87-48c9-a3ca-69287b62eaa2',
]);
$accessToken = $provider->getAccessToken('client_credentials');
$token = $accessToken->getToken();

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setHost($sandBoxApiHost)->setAccessToken($token);

$apiInstance = new Emesa\PartnerPlatform\Api\ProductsApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
var_dump($apiInstance->listProducts());

die;