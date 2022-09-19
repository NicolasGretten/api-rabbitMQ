a ajouté dans le .env pour Postgresql
```env
DB1_CONNECTION=data
DB1_HOST=127.0.0.1
DB1_PORT=5432
DB1_DATABASE=bddname
DB1_USERNAME=bdduser
DB1_PASSWORD=bddpassword
```

```bash
php artisan migrate & php artisan db:seed
```

```bash
php artisan serve --port=8004
```
