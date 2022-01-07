
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress'

import 'tailwindcss/tailwind.css'


const app = document.getElementById('app');

const pages = import.meta.glob('./Pages/**/*.vue');

createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => {
                const importPage = pages[`./Pages/${name}.vue`];
                if (!importPage) {
                    throw new Error(`Unknown page ${name}. Is it located under Pages with a .vue extension?`);
                }
                return importPage().then(module => module.default)
            }
        }),
})
    .use(InertiaPlugin)
    .mount(app);


   InertiaProgress.init({

    color: 'red',
    showSpinner: true
   });
