clone the repository

Update .env file with the bellow code

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:mKQf6wU9BdMBzhgFZADqXwoXsPKnHo2pWqga/VvFO4A=
APP_DEBUG=true
APP_URL=http://localhost

APP_THEME_COLOR=#17a2b8

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact_form_db
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=geethuaravind5@gmail.com
MAIL_PASSWORD="gapm vper oauh dogp"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=geethuaravind5@gmail.com
MAIL_FROM_NAME="My App"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"



change the dbusername and password according to your credentials




For contact form: Run this command " php artisan serve "
    Use this link : http://127.0.0.1:8000

For Admin login : Use this link http://127.0.0.1:8000/admin
   email: admin@contact.com
  password: admin@123
