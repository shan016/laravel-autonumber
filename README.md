## 🚀 Laravel AutoNumber v2.0

We’re excited to introduce **v2.0** of Laravel AutoNumber!
This release brings improved compatibility, cleaner integration, and alignment with modern Laravel standards.

---

## ✨ What’s New

* Full support for **Laravel 10**
* Updated for **PHP 8.1+**
* Improved stability and performance
* Cleaner integration with Eloquent model lifecycle
* Enhanced support for dynamic formats using closures

---

## 💥 Breaking Changes

* Dropped support for:

  * Laravel 8
  * Laravel 9
  * PHP versions below 8.1

> If you are using Laravel 8 or 9, please continue using **v1.x**

---

## 🔄 Upgrade Guide

1. Update the package:

   ```bash
   composer require shan016/laravel-autonumber:^2.0
   ```

2. (Optional) Republish configuration:

   ```bash
   php artisan vendor:publish --provider="Shan016\AutoNumber\AutoNumberServiceProvider" --force
   ```

3. Run migrations:

   ```bash
   php artisan migrate
   ```

4. Verify your model:

   * Uses `AutoNumberTrait`
   * Implements `getAutoNumberOptions()`

---

## 🧪 Example

```php
$order = Order::create([
    'customer' => 'John Doe',
]);

echo $order->order_number;

// Example output: SO-00001
```

---

## 📦 Installation (Fresh)

```bash
composer require shan016/laravel-autonumber:^2.0
```

---

## 🙌 Contributing

Contributions are welcome!
Feel free to open issues or submit pull requests.

---

## ⭐ Support

If you find this package useful, consider giving it a ⭐ on GitHub!

---
