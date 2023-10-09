var map, datasource, popup, maxValue = 500;


function GetMap() {
    //Initialize a map instance.
    map = new atlas.Map("myMap", {
        view: 'Auto',

        //Add authentication details for connecting to Azure Maps.
        authOptions: {
            //Use Azure Active Directory authentication.
            authType: 'anonymous',
            clientId: '143dd8bb-c571-4322-936b-d76a90cb9d4a', //Your Azure Maps client id for accessing your Azure Maps account.
            getToken: function (resolve, reject, map) {
                //URL to your authentication service that retrieves an Azure Active Directory Token.
                var tokenServiceUrl = "https://samples.azuremaps.com/api/GetAzureMapsToken";

                fetch(tokenServiceUrl).then(r => r.text()).then(token => resolve(token));
            }

            //Alternatively, use an Azure Maps key. Get an Azure Maps key at https://azure.com/maps. NOTE: The primary key should be used as the key.
            //authType: 'subscriptionKey',
            //subscriptionKey: '[YOUR_AZURE_MAPS_KEY]'
        }
    });




    map.events.add('ready', function () {
        //Add zoom controls to bottom right of map.
        map.controls.add(new atlas.control.ZoomControl(), {
            position: 'bottom-right'
        });

        //Add map style control in top left corner of map.
        map.controls.add(new atlas.control.StyleControl(), {
            position: 'top-left'
        });
    });
}