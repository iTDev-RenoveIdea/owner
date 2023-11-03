<img src="https://github.com/iTDev-RenoveIdea/owner/blob/master/utility/design/banner.png?raw=true">

![GitHub stars](https://img.shields.io/github/stars/iTDev-RenoveIdea/owner?style=social)
![GitHub watchers](https://img.shields.io/github/watchers/iTDev-RenoveIdea/owner?style=social)
![GitHub issues](https://img.shields.io/github/issues/iTDev-RenoveIdea/owner)
![GitHub](https://img.shields.io/github/license/iTDev-RenoveIdea/owner)
![GitHub tag (latest by date)](https://img.shields.io/github/v/tag/iTDev-RenoveIdea/owner?label=version)

## About
Owner CP is a Laravel based cloud server control panel that supports Digital Ocean, AWS, Vultr, Google Cloud, Linode, Azure and other VPS. It comes with nginx, Mysql, multi PHP-FPM versions, multi users, Supervisor, Composer, npm, free Let's Encrypt certificates, Git deployment, backups, ffmpeg, fail2ban, Redis, API and with a simple graphical interface useful to manage Laravel, Codeigniter, Symfony, WordPress or other PHP applications. With Owner CP you don’t need to be a Sys Admin to deploy and manage websites and PHP applications powered by cloud VPS.

## Features
- Easy install: setup one or more servers with a click in few minutes without be a Linux expert.

- Server Management: manage one or more servers in as easy as a few clicks without be a LEMP Guru.

- Perfect stack for PHP devs: Owner CP comes with nginx, PHP, MySql, Composer, npm and Supervisor.

- Multi-PHP: Run simultaneous PHP versions at your ease & convenience.

- Secure: no unsed open ports, unprivileged PHP, isolated system users and filesystem, only SFTP (no insecure FTP), Free SSL certificates everywhere.

- Always update: Owner CP takes care about your business and automatically keeps your server's software up to date so you always have the latest security patches.

- Integrate Owner CP with your own software via Rest API and Swagger.

- Real-time servers stats: Keep an eye on everything through an awesome dashboard.

- Always up to date: Owner CP installs last versions of LTS dists and supports Ubuntu 20.04 LTS :)

## Discover Owner CP
Visit website: https://ownercp.renoveidea.com

## Documentation
Owner CP Documentation is available at: https://ownercp.renoveidea.com/docs.html.

## Installation
```
wget -O - https://ownercp.renoveidea.com/go.sh | bash
```
#### Installation on AWS
AWS by default disables root login. To login as root inside AWS, login as default user and then use command sudo -s.

```
$ ssh ubuntu@<your server IP address>
$ ubuntu@aws:~$ sudo -s
$ root@aws:~# wget -O - https://ownercp.renoveidea.com/go.sh | bash
```
Remember to open ports: 22, 80 and 443.

#### Installation Note
Before you can use Owner CP, please make sure your server fulfils these requirements:

- Ubuntu 20.04 x86_64 LTS (Fresh installation)
- If the server is virtual (VPS), OpenVZ may not be supported (Kernel 2.6)

Hardware Requirement: More than 1GB of HDD / At least 1 core processor / 512MB minimum RAM / At least 1 public IP Address (NAT VPS is not supported) / External firewall / For VPS providers such as AWS, those providers already include an external firewall for your VPS. Please open port 22, 80 and 443 to install Owner CP.

Installation may take up to about 30 minutes which may also depend on your server's internet speed. After the installation is completed, you are ready to use Owner CP to manage your servers.

To correctly manage remote servers Owner CP has to be on a public IP address. Do not use it in localhost!

## Owner CP LEMP environment
- nginx: 1.18
- PHP-FPM: 8.0, 7.4, 7.3
- MySql: 8
- node: 15
- npm: 7
- Composer: 2.x

## Screenshots

<img src="https://cipi.sh/assets/images/docs/dashboard.png"> 

<img src="https://cipi.sh/assets/images/docs/server.png"> 

<img src="https://cipi.sh/assets/images/docs/site.png"> 

## Why use Owner CP?
Owner CP is easy, stable, powerful and free for any personal and commercial use and it's a perfect alternative to Runcloud, Ploi.io, Serverpilot, Forge, Moss.sh and similar software...


## Owner CP Roadmap... what's next?
- Application Autoinstaller (Laravel, WP, phpmyadmin, Prestashop, ...)
- Codebase Tests (Unit and Feature)
- Improve codebase quality
- Improve UI/UX
- Server Alerts Notification
- Password recovery flow and SMTP integration in settings
- 3 Server modes: LEMP (current), DB and nginx balancer
- Site php.ini custom configuration in panel
- Site nginx custom configuration in panel
- Extend Git Deploy to Gitlab and Bitbucket
- Github / Git hooks
- Zero Downtime deployment
- More control on deploy flow in panel
- Slack integration
- Cloudflare integration
- AWS, Digital Ocean and other providers integration
- AWS s3 site backup
- File manager into panel
- Shell terminal into panel
- Site HD space, resources and trafic limits
- Performance improvements

## Contributing
Thank you for considering contributing to the Owner CP Project (code, issues, feedbacks, stars, promo, money, beers) :)

In case of code...
- Fork it (https://github.com/iTDev-RenoveIdea/owner)
- Create your feature branch (`git checkout -b feature/fooBar`)
- Commit your changes (`git commit -a -m 'Add some fooBar'`)
- Push to the branch (`git push origin feature/fooBar`)
- Create a new Pull Request

#### ...anyway star this project on Github, Thankyou ;)

## Licence
Owner CP is an open-source software licensed under the MIT license.

## Need support with Owner CP?
Please open an issue here: https://github.com/iTDev-RenoveIdea/owner/issues.

## Write to Owner CP
Write an email to: contact@renoveidea.com

### ...enjoy Owner CP :)
