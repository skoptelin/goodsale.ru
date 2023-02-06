import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import '../sass/app.scss';

import.meta.glob([
    '../images/**',
  ]);

import index from "./index.blade";
window.index = index;

import myAds from "./myAds.blade";
window.myAds = myAds;

import createAd from "./createAd.blade";
window.createAd = createAd;