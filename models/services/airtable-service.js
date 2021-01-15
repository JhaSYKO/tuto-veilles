/**
 * COnfiguration des variable pour l'utilisation dans les différents fichier
 */


var Airtable = require('airtable');

Airtable.configure({
    endpointUrl: 'https://api.airtable.com',
    apiKey: 'keyV3yJvN7T4rdlhW'
});

var base = Airtable.base('appI5FGPyaTlPtes6');