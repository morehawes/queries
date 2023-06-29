<script setup>
import { onMounted } from 'vue';

//OL
import Map from 'ol/Map';
import View from 'ol/View';
import TileLayer from 'ol/layer/Tile';
import XYZ from 'ol/source/XYZ';
import 'ol/ol.css';
import { fromLonLat } from 'ol/proj.js';

onMounted(() => {
    new Map({
      target: 'map',
      layers: [
        new TileLayer({
          source: new XYZ({
            url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
          })
        })
      ],
      view: new View({
        center: fromLonLat([-124.995403, 49.692064]),
        zoom: 14
      })
    });
});
</script>

<template>
    <div id="map" style="width:100%;height:400px" />
</template>
