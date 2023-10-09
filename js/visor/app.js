/* window.onload = inicio;
function inicio() {
    const map = new ol.Map({
        view: new ol.View({
            center: [0,0],
            zoom:3
        }),
        layers : [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        target:"map"
    })

} */

//el sistema de coordenadas por defecto es el 3857 World Mercator

window.onload = () => {
    const map = new ol.Map({
        view: new ol.View({
            projection: 'EPSG:4326',
            center: [-75.556285, 6.277239],
            //minZoom:15,
            //maxZoom:20,
            zoom: 3
        }),
        layers: [
            new ol.layer.Tile({//Mapas Base
                source: new ol.source.OSM()
            }),
            //https://ide.igp.gob.pe/geoserver/CTS_sismo2020/wms?service=WMS&request=GetCapabilities
            //CTS_sismo2020:sis_igp_2020	
            new ol.layer.Tile({
                title: 'Sismos Perú 2020',
                visible: true,
                source: new ol.source.TileWMS({
                    projection: 'EPSG:4326',
                    attibutions: 'Servicio de sismos del IGP',
                    url: 'https://ide.igp.gob.pe/geoserver/CTS_sismo2020/wms',
                    params: {
                        'LAYERS': 'CTS_sismo2020:sis_igp_2020',
                        'TILED': true
                    },//parametros del servicio
                    serverType: 'ggeoserver'

                })
            }),
            //https://geocatmin.ingemmet.gob.pe/arcgis/rest/services/SERV_PERU_ALERTA/MapServer
            new ol.layer.Tile({
                source: new ol.source.TileArcGISRest({
                    attributions: 'Servicio de INGEMMET',
                    url:'https://geocatmin.ingemmet.gob.pe/arcgis/rest/services/SERV_PERU_ALERTA/MapServer'
                }),
                visible:true,
                title:'Perú Alerta'
            })
        ],
        target: "map"//Es el ID en el que se va visualizar en el HTML
    })

}