# Imagen base de PHP con Apache
FROM php:8.2-apache

# Copiar archivos del proyecto al directorio público de Apache
COPY . /var/www/html/

# Exponer el puerto que Render usará
EXPOSE 10000

# Configurar Apache para usar el puerto correcto
RUN sed -i 's/80/10000/' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Habilitar mod_rewrite (si usas rutas amigables)
RUN a2enmod rewrite

CMD ["apache2-foreground"]
