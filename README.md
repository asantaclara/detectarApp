<p align="center">
<img src="public/images/view_images/logo_icon.png" width="100">
</p>

# DetectAR

Sistema orientativo para la detección de señales de alerta de dificultades del aprendizaje en niños en Argentina en 2021

## Tecnologías

- **[PHP 8.0](https://www.php.net/downloads.php#v8.0.12)**
- **[Laravel 6.0](https://laravel.com/docs/8.x)**
- **[Laravel Sail 8.0](https://laravel.com/docs/8.x/sail)**
- **[MySQL 8.0](https://www.mysql.com/)**
- **[Docker 20.10](https://www.docker.com/)**

## Instalación

- Clonar este repositorio en una computadora con Linux
```bash
git clone git@github.com:asantaclara/detectarApp.git
```

- Copiar el archivo <code>.env.example</code> a <code>.env</code> utilizando el siguiente comando, y configurar a gusto (O utilizar el archivo provisionado)
```bash
cp .env.example .env
```

- Instalar PHP, docker y docker-compose, junto a sus dependencias, y correr la aplicación con el siguiente comando:
```bash
sh install.sh
```

## Uso

- Para correr el proyecto correr el siguiente comando:
```bash
sh run.sh
```

- El proyecto corre en el puerto 80, usted debería poder entrar ingresando aqui [aquí](http://localhost)

## Soporte

En caso de necesitar ayuda, puede comununicarse por mail a las siguientes direcciones:

- Camila Inversi: cinversi@uade.edu.ar
- Alejandro Santa Clara: asantaclara@uade.edu.ar
