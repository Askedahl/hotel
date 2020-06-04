echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6) Hi! My name is Melis 🙋🏻‍♀️$(tput sgr0)"
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6) I am here to take you through your Wordpress setup, are you ready? 🌳$(tput sgr0)"
echo " "
read -e -p " :: Press [ENTER] to get started! 🚀 💁🏻‍♀️"

read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Is NPM installed? $(tput sgr0)- If not, go to the readme for more information."
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Is WP-CLI installed? $(tput sgr0)- If not, go to the readme for more information."




## DOWNLOADING WP CORE
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)I am downloading Wordpress now...$(tput sgr0)"
wp core download --skip-content

## COLLECTING INFO FOR DB CONNECTION
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Enter DB Name: $(tput sgr0)" db_name
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Enter DB User (Preset: root): $(tput sgr0)" db_user
    if [ -z "$db_user" ]; then
        db_user='root'
    fi
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Enter DB Pass: $(tput sgr0)" db_pass
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Enter DB Prefix (Preset: wp_): $(tput sgr0)" db_prefix
    if [ -z "$db_prefix" ]; then
        db_prefix='wp_'
    fi
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Enter DB Host $(tput sgr0)(Preset: 127.0.0.1): " db_host
    if [ -z "$db_host" ]; then
        db_host='127.0.0.1'
    fi

## CREATING CONFIG FILE
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Creating config file...$(tput sgr0)"
wp config create --dbname=$db_name --dbuser=$db_user --dbpass=$db_pass --dbhost=$db_host --dbprefix=$db_prefix

## COLLECTING INFO FOR WP INSTALL
read -e -p 'Enter local development url (Example: http://local.siteurl.com): ' site_url
wp_title='MySite'
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)WP Admin username: $(tput sgr0)" wp_username
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)WP Admin password: $(tput sgr0)" wp_passw
read -e -p "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)WP Admin Email: $(tput sgr0)" wp_email

## INSTALLING WORDPRESS
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing wordpress...$(tput sgr0)"
wp core install --url=$site_url --title=$wp_title --admin_user=$wp_username --admin_email=$wp_email --admin_password=$wp_passw

## Create correct permalink structure
wp rewrite structure '/%postname%/'

## INSTALLING PLUGINS
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing Plugins..$(tput sgr0)"
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing ACF plugin...$(tput sgr0)"
wp plugin install 'https://connect.advancedcustomfields.com/index.php?a=download&p=pro&k=b3JkZXJfaWQ9OTc1NjB8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE3LTAxLTE3IDE3OjIyOjQy' --activate

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing Autoptimize plugin...$(tput sgr0)"
wp plugin install autoptimize --activate

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing Google Site Kit plugin...$(tput sgr0)"
wp plugin install google-site-kit --activate

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing Imagify plugin...$(tput sgr0)"
wp plugin install imagify --activate

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing WP Rocket plugin...$(tput sgr0)"
wp plugin install 'https://wp-rocket.me/download/105077/3c161b26/' --activate

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing Rank Math plugin...$(tput sgr0)"
wp plugin install seo-by-rank-math

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing WPML plugin...$(tput sgr0)"
wp plugin install 'https://wpml.org/?download=6088&user_id=275235&subscription_key=d4bd925f153ce1d690eeadc1868532d3&t=1574861791'

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing WPML String Translation plugin...$(tput sgr0)"
wp plugin install 'https://wpml.org/?download=6092&user_id=275235&subscription_key=d4bd925f153ce1d690eeadc1868532d3&t=1574861791'

echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Installing WPML ACF plugin...$(tput sgr0)"
wp plugin install 'https://wpml.org/?download=1097589&user_id=275235&subscription_key=d4bd925f153ce1d690eeadc1868532d3&t=1574861791'


# INSTALL NPM PACKAGES
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Running NPM Install$(tput sgr0)"
npm i

echo ' '
echo ' '
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)We did it! 🙋🏻‍♀️ You are now done with the setup.$(tput sgr0)"
echo ' '
echo "$(tput bold)$SCRIPT_NAME :: $(tput sgr0)$(tput setaf 6)Write "grunt" to run watch preprocessing tasks$(tput sgr0)"
