# 🚀 Установка и Настройка Проекта

Следуйте инструкциям ниже, чтобы установить все необходимые зависимости и настроить проект для локального запуска.

---

## 📦 Установка зависимостей

### 1. Установите зависимости PHP
```bash
composer install
```

### 2. Установите зависимости JavaScript
```bash
npm install
```

### 3. Сгенерируйте ключ приложения
Создайте уникальный ключ безопасности для проекта:
```bash
php artisan key:generate
```

---

## 📊 Настройка базы данных

### 1. Выполните миграции для создания таблиц
```bash
php artisan migrate
```



## 🌐 Запуск локального сервера

Для запуска локального сервера используйте команду:
```bash
php artisan serve
```

Теперь проект готов к работе! 🎉

---

💡 **Примечание:** Убедитесь, что ваш `.env` файл настроен корректно для подключения к базе данных.

## Тестирование
В .env нужно указать свою базу данных для тестирования 
Для начального наполнения таблиц используйте команду сидирования:
```bash
php artisan db:seed
```
