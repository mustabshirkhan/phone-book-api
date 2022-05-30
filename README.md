# Phone Book Rest Api

Use **`make help`** in the terminal to list available commands. Makefile is used as the entrypoint to the project

---

### Install Dependencies

`composer install`

---

### Configure Database, Environment Variables

- Make a copy of `.env` 
- Update it with your database credentials

If you haven't created a database, you can create it with doctrine:

```bash
php ./bin/console doctrine:database:create
```
### Run migrations
```bash
php ./bin/console doctrine:mirations:diff
php ./bin/console doctrine:mirations:migrate
```

---

### Run Project

`symfony server:start`
- Open browser and hit http://127.0.0.1:8000/api

---

### Tests

#### Setup Test Env:
- Change database credentials in `env.test`
- Create test database 
```bash
php bin/console --env=test doctrine:database:create
```
- Create table in the database
```bash
php bin/console --env=test doctrine:schema:create
```
- Add `image.jpg` in `fixtures/files`
- Load fixtures
```bash
  php bin/console --env=test doctrine:fixtures:load
```
- Run tests using `bin/phpunit`


