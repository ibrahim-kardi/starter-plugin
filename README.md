# Starter Plugin
It is a starter plugin

Development Setup:
Follow the steps
Configure <a href="#wpcs">WPCS</a> to write code that complies with the WordPress Coding Standard.
Clone the repository git clone https://github.com/ibrahim-kardi/starter-plugin/.git.
Checkout to dev brunch git checkout dev
Make your own brunch git checkout -b your_brunch_name
Go to vscode extension tab and install recommended extension.
Run composer install for install PHP dependency.
Run npm install for install js dependency.

<a href="#wpcs">WPCS</a> configuration
Step 1: Please install these two composer package.

1. composer global require squizlabs/php_codesniffer
2. composer global require wp-coding-standards/wpcs
Step 2: Set WordPress as default coding standard. (change your_username)

phpcs --config-set installed_paths /Users/your_username/.composer/vendor/wp-coding-standards/wpcs
phpcs --config-set default_standard WordPress
Problem Fix:

If phpcs and phpcbf command not found as command, set it to your path variable.

export PATH="/Users/your_username/.composer/vendor/bin:$PATH"
