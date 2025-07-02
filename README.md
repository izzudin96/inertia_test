# Laravel, Inertia, and Vue

- Just me learning this stack by building simple todos.. within 3 nights after work. Mainly inertia really...

## Notes

- Check `vite.config.js` for Vite setup.
- Register the `HandleInertiaRequests` middleware in `bootstrap/app.php`.
- Update `app.blade.php`:
  - Add `@vite('resources/js/app.js')`
  - Add `@inertiaHead`
  - Add `@inertia`
- Use `createInertiaApp` in `resources/js/app.js`. Pages are loaded from `Pages/${name}.vue`. Refer: docs
- Render pages with `Inertia::render` in your controllers.
- Use `defineProps` in Vue components to receive backend data, e.g. `defineProps({ todo: Array })`.
- Use `const form = useForm()` for form state. Bind fields with `v-model="form.title"`.
- Submit forms with `form.post('/todos', { onSuccess: ..., onError: ... })`.
