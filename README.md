# Laravel, Inertia and Vue

- Just me learning this stack by building simple todos.. within 3 nights after work. Mainly inertia really...

## Notes

- Refer vite.config.js
- HandleIntertiaRequests middleware to `bootstrap/app.php`
- Add intertia tag on app.blade.php
 - `@vite('resources/js/app/js')`
 - `@inertiaHead`
 - `@intertia`
- createInertiaApp on resources/js/app.js. Pages on loaded on `Pages/${name}.vue`
- use `Inertia::render` to render
- use defineProps to get data from backend. It accepts an objec defineProps({todo: {type: Array}})
- use const form = useForm() and v-model is using form.title.
- submit form using form.post('/todos', { onSuccess: (), onError: () })
