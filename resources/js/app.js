import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

Echo.channel('tests')
        .listen('TestEcho', (e) => {
            window.alert("cheguei");
        });