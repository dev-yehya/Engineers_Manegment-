FROM php:8.2-fpm

# مسار العمل
WORKDIR /var/www

# تثبيت المتطلبات الأساسية للنظام
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# إحضار Composer من صورته الرسمية
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات المشروع
COPY . /var/www

# --- الخطوة الأهم: تثبيت مكتبات المشروع ---
RUN composer install --no-interaction --optimize-autoloader --no-dev

# ضبط الصلاحيات للمجلدات التي يحتاجها لارافيل للكتابة
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]