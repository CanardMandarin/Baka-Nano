<p align="center"><img src="https://raw.githubusercontent.com/Tibo-le-canard/Baka-Nano/master/logo.png"></p>

## About

Baka nano is a free online tool for practicing Japanese grammar and kanji through short sentences that are randomly displayed.

Thanks to the developper of http://duendecat.com (not been maintained for a few years)

## Built With

* [Vuejs](https://github.com/vuejs/vue) - Javascript web framework
* [Laravel](https://github.com/laravel/laravel) - PHP framework

## Contributing

Feel free to create an issue or contact me. Any help is welcome !


## License

Fork it, improve it, do whatever you want with the code - see the [LICENSE.md](LICENSE.md) file for details.


## Note for mysql character encoding

[client]
default-character-set = utf8mb4

[mysql]
default-character-set = utf8mb4

[mysqld]
character-set-client-handshake = FALSE
character-set-server = utf8mb4
collation-server = utf8mb4_unicode_ci
