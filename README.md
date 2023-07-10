# upexi-age-verification-popup
## Description
This WordPress plugin provides an age verification system for your website. It displays a popup asking users to confirm their age, and once confirmed, it will not show the popup to the same user for two weeks. The confirmation status is stored in the user's browser localStorage with an expiration period of two weeks.

## Features
Age verification via a confirmation popup.
Stores age confirmation status in the browser's localStorage.
Age confirmation status expires after two weeks.
Installation
Download the plugin files.
Upload the plugin files to your /wp-content/plugins/ directory, or install the plugin through the WordPress plugins screen directly.
Activate the plugin through the 'Plugins' screen in WordPress.
Usage
Once installed and activated, the plugin will automatically display an age verification popup to new visitors. Once a user confirms their age, the popup will not be shown to that user for the next two weeks.

## Development
The main logic of the plugin is contained in the main.js file. If you need to reset the localStorage for development purposes, uncomment the localStorage.removeItem('age_verified'); line in main.js.