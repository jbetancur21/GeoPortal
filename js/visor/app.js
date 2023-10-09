import Map from './ol/Map.js';
import MousePosition from './ol/control/MousePosition.js';
import BingMaps from './ol/source/BingMaps.js';
import OSM from './ol/source/OSM.js';
import TileLayer from './ol/layer/Tile.js';
import TileWMS from './ol/source/TileWMS.js';
import View from './ol/View.js';
import { createStringXY } from './ol/coordinate.js';
import { defaults as defaultControls } from './ol/control.js';


const mousePositionControl = new MousePosition({
    coordinateFormat: createStringXY(6),
    projection: 'EPSG:4326',
    // comment the following two lines to have the mouse position
    // be placed within the map.
    className: 'custom-mouse-position',
    target: document.getElementById('mouse-position'),
});

const map = new Map({
    controls: defaultControls().extend([mousePositionControl]),

    layers: [
        //Mapas Base
        new TileLayer({
            source: new BingMaps({
                key: 'AiYx2jJHwMagyvfJQSfgMnt-cxmbw9YZ-_0rBM4cuHM6DxvOtDb0E4-O6WlYfWNx',
                imagerySet: 'Aerial'
            })
        }),
        //Capas
        new TileLayer({
            source: new TileWMS({
                projection: 'EPSG:4326',
                attibutions: '@geoserver',
                url: 'http://localhost:8080/geoserver/geoportal/wms',
                params: {
                    'LAYERS': 'geoportal:YARIGUIES',
                    'TILED': true
                },//parametros del servicio
                serverType: 'ggeoserver'

            })
        })

    ],
    
    target: 'map',
    view: new View({
        projection: 'EPSG:4326',
        center: [-73.73043, 6.88632],
        //minZoom:15,
        //maxZoom:20,
        zoom: 7
    }),
});