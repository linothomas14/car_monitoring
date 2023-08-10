# Monitoring and Approval App 🚘
Monitoring and Approval for vehicle on ABC Company.

## Features
Admin : 
- There is a chart to monitor vehicle attribute such as Fuel_consumption and how many vehicle used.
- Make an approval to use vehicle.
- Can download approval data to excel file.

Approver : 
- Can approve approval from admin.
- Can download approval data to excel file.

## Import DB
- Create new DB "car_monitoring"
- You can import through terminal 
```bash
mysql -p -u [user] car_monitoring < car_monitoring.sql
```
- or directly import through phpmyadmin

## Tech Version
```
LARAVEL v10.18.0
PHP v8.1.6
MYSQL v15.1
```

## User Creds
```
admin_user
  email = admin@gmail.com
  pw    = password

approver_user
  email = lino@gmail.com
  pw    = password
```

## Run Locally

Clone the project

```bash
  git clone https://github.com/linothomas14/car_monitoring
```

Go to the project directory

```bash
  cd car_monitoring
```
Copy .env file, add DB creds such as user, password, and db name
```bash 
cp .env.example .env
```

Install dependencies npm and composer

```bash
  npm install
```
```bash
  composer install
```

Start for tailwindUI

```bash
  npm run dev
```

Start the server

```bash
  php artisan serve
```
