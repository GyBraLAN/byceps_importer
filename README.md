# Copy .env
    cp .env .env.local
 
# Edit .env.local
    DATABASE_URL=
    BYCEPSPATH=
Rest can be left as is

# Run composer
    composer update

# Create Apache2 or Nginx vHost
## apache2 example 
@see /config/apache2.conf
